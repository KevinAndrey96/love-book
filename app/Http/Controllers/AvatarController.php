<?php

namespace App\Http\Controllers;

class AvatarController extends Controller
{
    /** Return view Avatar */
    public function avatar()
    {
        return view('books.Avatar_pick');
    }

    /**Return avatar male edit*/

    public function avatarMale()
    {
        return view('books.Avatar_male');
    }

    /**Return avatar female edit*/

    public function avatarFemale()
    {
        return view('books.Avatar_female');
    }
}
