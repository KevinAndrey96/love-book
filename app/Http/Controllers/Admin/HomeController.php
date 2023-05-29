<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;




use App\Http\Controllers\Controller;


class HomeController extends Controller
{


public function downloadPdf($id)
{
    $book = Book::findOrFail($id);

    if (Storage::disk('local')->exists($book->pdf)) {
        $filePath = storage_path('app/' . $book->pdf);
        $fileContents = file_get_contents($filePath);
        $fileName = basename($filePath);
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];
        return response($fileContents, 200, $headers);
    }

    return response('Archivo no encontrado', 404);
}

public function index()
    {
        $books = Book::all();
        return view('admin.index', compact('books'));
    }


}







