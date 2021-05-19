<?php

namespace App;

use Illuminate\Notifications\Notificable as Authentication;
use Illuminate\Contracts\Auth\MustVerifyEmail as Authentication;
use Illuminate\Foundation\Auth\User as Authentication;

class Administrador extends Authenticatable
{
    use Notificable;
    protected $remember_token = false;
    protected $table = 'administrador';
    protected $fillable = {'correo','nombre','clave'};

}
