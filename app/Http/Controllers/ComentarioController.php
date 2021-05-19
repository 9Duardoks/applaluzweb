<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ComentarioController extends Controller
{
    public function index()
    {
        $comentario= App\Comentario::all();
        return view('Negocio/Comentario', compact('comentario'));
    }
}
