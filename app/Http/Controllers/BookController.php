<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PdF;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function booksPDF()
    {
        return view('Books_pdf_view');
    }


    public function bookFrontPage()
    {
        return view('Books.Book_front_page');
    }

    public function BookPages()
    {
        return view('Books.Book_pages');
    }

    public function generarPDF()
    {

        set_time_limit(0); // Desactiva el límite de tiempo de ejecución

        $data = [
            'title' => 'Ejemplo de PDF'
        ];

        $html = View::make('Books_pdf_view', $data)->render();
        $pdf = PDF::loadHTML($html);



        return $pdf->stream('nombre_del_archivo.pdf');
    }


    public function guardarDatos(Request $request)
    {

    set_time_limit(0); // Desactiva el límite de tiempo de ejecución

    $nameFemale = $request->input('nameFemale');
    $nameMale = $request->input('nameMale');

    // Directorio base donde se guardarán los archivos
    $bookDir = '' . $nameFemale . '_' . $nameMale . '/libro';

    // Crear el directorio principal si no existe
    Storage::makeDirectory($bookDir);

    // Contador para las páginas
    $pageCounter = 2; // Comenzamos desde la página 2, ya que la página 1 es la portada

    // Recorrer los archivos enviados y guardarlos en los directorios correspondientes
    foreach ($request->all() as $key => $file) {
        if ($key === 'selectedContent') {
            // Directorio de la carpeta "frontpage"
            $frontpageDir = $bookDir . '/frontpage';

            // Crear el directorio "frontpage" si no existe
            Storage::makeDirectory($frontpageDir);

            // Guardar el contenido de selectedContent en un archivo
            $selectedContent = $file;
            Storage::put($frontpageDir . '/frontpage.txt', $selectedContent);
        } elseif (strpos($key, 'page') === 0) {
            // Obtener el número de página
            $pageNumber = substr($key, 4);

            // Directorio de destino para la página
            $pageDestinationDir = $bookDir . '/page' . $pageNumber;

            // Crear el directorio de la página si no existe
            Storage::makeDirectory($pageDestinationDir);

            // Guardar el contenido de la página en un archivo
            $pageContent = $file;
            Storage::put($pageDestinationDir . '/page' . $pageNumber . '.txt', $pageContent);
        }
    }

    $pdf = PDF::loadView('Books_pdf_view');


    // Directorio donde se guardará el archivo PDF
    $pdfDir = 'librosPDF/' . $nameFemale . '_' . $nameMale;

    // Crear el directorio si no existe
    Storage::disk('local')->makeDirectory($pdfDir);

    // Guardar el PDF en un archivo
    Storage::disk('local')->put($pdfDir . '/' . $nameFemale . '_' . $nameMale . '.pdf', $pdf->output());

    // Respuesta de éxito
    return response()->json(['success' => true, 'message' => 'El libro se guardó correctamente.']);
} }


