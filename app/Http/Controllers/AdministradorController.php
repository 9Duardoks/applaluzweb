<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class AdministradorController extends Controller
{
   
    public function index()
    {
        $array= App\Administrador::all();
        return view('/Principal/Index' ,compact('array'));
    }

    public function login()
    {
        return view('/Seguridad/Login');   
    }


    public function adminListJoin()
    {
       
        return view('inicio');
       
    }
    public function adminList()
    {
        $array= App\Administrador::all();
        return view('inicio', compact('array'));
    }

    public function admininstradorMessage($datos)
    {
        $array= App\Administrador::all();
        $idFarmaciaPedido = Administrador::find($request->id);
        return view('negocios/inicio', compact('array'));
    
        

    }
    public function adminUpdate($datos2, $Id)
    {
        $array= App\Administrador::all();
        return view('inicio', compact('array'));
    }
}
