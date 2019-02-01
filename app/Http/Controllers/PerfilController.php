<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

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
        if ($request->input('password') != null) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->mime =  $request->file('cv')->getMimeType();
        $user->size = $request->file('cv')->getSize();
        $user->cv = base64_encode(file_get_contents($request->file('cv')->getRealPath()));
        $user->idDepart = $request->input('idDepart');
        $user->save();
        
        return redirect()->route('inicio');
    }
    

    public function downloadFile($id) {
        $user = User::find($id);
        $data = $user->cv;
        return Response::make($data, 200, array('Content-type' => $user->mime, 'Content-length' => $user->size, 'Content-Disposition' => 'filename="CV"'));
    }
}
