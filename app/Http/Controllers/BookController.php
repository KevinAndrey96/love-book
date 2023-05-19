<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;


class BookController extends Controller
{
    /**Return index view */

    public function bookFrontPage(){
        return view('Books.Book_front_page');
    }

    public function BookPages(){
        return view('Books.Book_pages');
    }


    }





