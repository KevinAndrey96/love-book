<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PdF;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Models\Book;



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
    set_time_limit(0); // Desactiva el límite de tiempo de ejecución

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

    // Iterar sobre las etiquetas de imagen y reemplazar las rutas con asset()
    foreach ($images as $image) {
        // Obtener la ruta de la imagen dentro de la etiqueta
        preg_match('/src="([^"]+)"/i', $image, $srcMatches);
        $src = $srcMatches[1];

        // Verificar si la ruta de la imagen es relativa
        if (Str::startsWith($src, '/')) {
            // Reemplazar la ruta de imagen original con la ruta generada por asset()
            $fullImagePath = public_path(ltrim($src, '/'));
            $content = str_replace($src, $fullImagePath, $content);
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



$pdf = PDF::loadView('Books_pdf_view');

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


// Respuesta de éxito
return response()->json(['success' => true, 'message' => 'El libro se guardó correctamente.']);
}

}
