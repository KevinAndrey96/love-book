<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use App\Models\Book;

use Illuminate\Support\Facades\Http;




use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function booksPDF()
    {
        return view('Books_pdf_view');
    }


    public function bookFrontPage()
    {
        return view('books.Book_front_page');
    }

    public function BookPages()
    {
        return view('books.Book_pages');
    }

    public function Form()
    {
        return view('form');
    }

public function guardarDatos(Request $request)
{
    set_time_limit(0);

$nameFemale = $request->input('nameFemale');
$nameMale = $request->input('nameMale');

// Directorio base donde se guardarán los archivos
$bookDir = sprintf('public/%s_%s', $nameFemale, $nameMale);

// Crear el directorio principal si no existe
Storage::makeDirectory($bookDir);

// Nombre del archivo de contenido
$contentFileName = sprintf('%s/%s_%s.txt', $bookDir, $nameFemale, $nameMale);

// Obtener el contenido enviado
$content = $request->input('mainContent');

// Buscar todas las etiquetas de imagen en el contenido
preg_match_all('/<img[^>]+>/i', $content, $matches);

// Obtener todas las etiquetas de imagen encontradas
$images = $matches[0];

// Rutas de imágenes procesadas
$processedImagePaths = [];

// Iterar sobre las etiquetas de imagen y reemplazar las rutas con url()
foreach ($images as $image) {
    // Obtener la ruta de la imagen dentro de la etiqueta
    preg_match('/src="([^"]+)"/i', $image, $srcMatches);
    $src = $srcMatches[1];

    // Verificar si la ruta de la imagen es relativa y no se ha procesado antes
    if (Str::startsWith($src, '/') && !in_array($src, $processedImagePaths)) {
        // Generar la ruta completa utilizando la función url()
$fullImagePath = url($src, [], true);

        // Reemplazar la ruta de imagen original con la ruta generada por url()
        $content = str_replace($src, $fullImagePath, $content);

        // Agregar la ruta de imagen a la lista de procesadas
        $processedImagePaths[] = $src;
    }
}

Storage::put($contentFileName, $content);

$filePath = resource_path('views/Books_pdf_view.blade.php');
$newContent = $content;

$fileContents = file_get_contents($filePath);

$pattern = '/<body[^>]*>(.*?)<\/body>/is';

if (preg_match($pattern, $fileContents, $matches)) {
    $existingContent = $matches[1]; // Obtener el contenido dentro de <body>
    $updatedContents = str_replace($existingContent, $newContent, $fileContents); // Reemplazar el contenido dentro de <body> con el nuevo contenido
    file_put_contents($filePath, $updatedContents);
} else {
    // No se encontró el elemento <body> en el archivo
    // Aquí puedes manejar el caso en el que el elemento no exista
}

$pdf = Pdf::loadView('Books_pdf_view');

// Directorio donde se guardará el archivo PDF
$pdfDir = 'librosPDF/' . $nameFemale . '_' . $nameMale;

// Crear el directorio si no existe
Storage::disk('local')->makeDirectory($pdfDir);

// Guardar el PDF en un archivo
Storage::disk('local')->put($pdfDir . '/' . $nameFemale . '_' . $nameMale . '.pdf', $pdf->output());

$pdfPath = $pdfDir . '/' . $nameFemale . '_' . $nameMale . '.pdf';

$book = new Book();
$book->name = $nameFemale . ' ' . $nameMale;
$book->pdf = $pdfPath;
$book->status = 'pendiente';

$book->save();

$bookId = $book->id;
$request->session()->put('bookId', $bookId);

}


public function respuesta(Request $request)
{
    // Obtener el ID de transacción de la URL
    $transactionId = $request->query('id');

    // Configurar las credenciales de autenticación de prueba
    $publicKey = 'pub_test_FXuP06pwO8kBrtw9quipeLbETCLqsLtu';
    $privateKey = 'prv_test_P50s0fVrGOMyc7GZJwWsdbOqkbqR8jMx';
    $headers = [
        'Authorization' => 'Bearer ' . $privateKey,
    ];

    // Consultar el estado de la transacción utilizando el API de Wompi
    $response = Http::withHeaders($headers)
        ->get("https://sandbox.wompi.co/v1/transactions/{$transactionId}");

    // Verificar el estado de la respuesta de la API
    if ($response->successful()) {
        $status = $response->json('data.status');

        // Verificar si la transacción fue aprobada
        if ($status === 'APPROVED') {
            // Obtener la referencia del libro
            $bookId = session('bookId');

            // Actualizar el estado y el campo id_transaction del libro correspondiente
            $book = Book::find($bookId);
            if ($book) {
                $book->status = 'Pagado';
                $book->id_transaction = $transactionId;
                $book->transaction_info = $response->json();
                $book->save();
            }
        }
    } else {
        // Manejar el caso de error en la llamada a la API
        $errorMessage = $response->json('error.message', 'Error desconocido al consultar la transacción');
        $status = 'Error: ' . $errorMessage;
    }

    // Mostrar el estado de la transacción en la vista
    return view('books.respuesta_pago', ['status' => $status], );
}

public function updateStatus(Request $request, $id)
{
    $status = $request->input('status');

    // Actualizar el estado en la base de datos
    $book = Book::find($id);
    if ($book) {
        $book->status = $status;
        $book->save();
        return response()->json(['message' => 'Estado cambiado con éxito']);
    }

    return response()->json(['error' => 'No se pudo cambiar el estado'], 400);
}
}
