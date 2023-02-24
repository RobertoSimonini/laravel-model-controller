<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //metodo che si occupa della pagina

    public function index()
    {
        return view('layouts.main');
    }
}
