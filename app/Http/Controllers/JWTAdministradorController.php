<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class JWTAdministradorController extends Controller
{
    protected $redirectTo = '/Principal/Index';
    public function login()
    {     
        return view('login');
    }
}

