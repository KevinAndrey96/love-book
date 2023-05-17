<?php

namespace App\Http\Controllers;

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
