<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    /**Return index view */

    public function index()
    {
        return view('Books.index');
    }

}
