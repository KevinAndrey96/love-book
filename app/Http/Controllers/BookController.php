<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    /**Return index view */

    public function bookFrontPage(){
        return view('books.book_front_page');
    }

    public function BookPages(){
        return view('books.book_pages');
    }
}
