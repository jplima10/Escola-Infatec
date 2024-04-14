<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomescreenController extends Controller
{
    public function index()
    {
        return view('homescreen.index'); // Retorna a view da homescreen
    }
}
