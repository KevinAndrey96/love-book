<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PdF;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;


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
                $fullImagePath = asset($src);
                $content = str_replace($src, $fullImagePath, $content);
            }
        }

        // Guardar el contenido en un archivo
        Storage::put($contentFileName, $content);

        // Obtener el contenido actual del div
        $existingContent = file_get_contents(resource_path('views/Books_pdf_view.blade.php'));

        // Limpiar solo la sección del contenido dentro del div "product-step"
        $newContent = preg_replace('/<div id="product-step">(.|\s)*<\/div>/i', '<div id="product-step"></div>', $existingContent);

        // Agregar el nuevo contenido generado
        $newContent .= $content;

        // Guardar el contenido actualizado en el archivo
        file_put_contents(resource_path('views/Books_pdf_view.blade.php'), $newContent);

        $pdf = PDF::loadView('Books_pdf_view');

        // Directorio donde se guardará el archivo PDF
        $pdfDir = 'librosPDF/' . $nameFemale . '_' . $nameMale;

        // Crear el directorio si no existe
        Storage::disk('local')->makeDirectory($pdfDir);

        // Guardar el PDF en un archivo
        Storage::disk('local')->put($pdfDir . '/' . $nameFemale . '_' . $nameMale . '.pdf', $pdf->output());

        // Respuesta de éxito
        return response()->json(['success' => true, 'message' => 'El libro se guardó correctamente.']);
    }
}
