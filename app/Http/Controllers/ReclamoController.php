<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ReclamoController extends Controller
{
    public function index()
    {
        $reclamo= App\Reclamo::all();
        
        return view('/Negocio/Reclamo', compact('reclamo'));
    }
}
