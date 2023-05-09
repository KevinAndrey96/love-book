<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    /**Return index view */

    public function index()
    {
        return view('Books.index');
    }

    public function bookFrontPage(){
        return view('Books.Book_front_page');
    }

    public function BookPages(){
        return view('Books.Book_pages');
    }

    public function BookEdit(){
        return view('Books.edit_pages');
    }
}
