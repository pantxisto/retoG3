<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //
     public function showProfile($idUsuario)
    {
        return view('perfil', ['usuario' => Usuario::findOrFail($idUsuario)]);
    }
}
