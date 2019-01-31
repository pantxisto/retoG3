<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class PerfilController extends Controller
{
    public function index() {
        //Consulta a la Base de Datos
        $usuario = DB::table('users')
            ->where('email', 'like', Auth::user()->email)
            ->get();
        // Faltan de hacer los join para sacar datos de otras tablas: cv...
        //El controlador llama a la vista y le pasa el resultado de la consultas
        $departamentos = DB::table('departamentos')
        ->get();
        return view('perfil',['usuario'=>$usuario, 'departamentos'=>$departamentos, 'id'=>Auth::user()->id]);
    }

    public function update(Request $request, $id) {
        // Inserto en la BD
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->cv = $request->input('cv');
        $user->idDepart = $request->input('idDepart');
        $user->save();
        
        return redirect()->route('inicio');
    }
}
