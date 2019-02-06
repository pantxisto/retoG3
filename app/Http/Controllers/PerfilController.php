<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request, $id)
    {
 
       $user = User::find($id);
       if($request->hasFile('cv') && $request->file('cv')->isValid()){
           $file = $request->file('cv');
           $originalName = $file->getClientOriginalName();

           $fileLoc =  $request->file('cv')->storeAs('/upload/', $originalName);
           $mimeType = Storage::mimeType($fileLoc);

           $user->name = $request->input('name');
           $user->surname = $request->input('surname');
           $user->email = $request->input('email');
           if ($request->input('password') != null) {
               $user->password = Hash::make($request->input('password'));
           }
           $user->idDepart = $request->input('idDepart');

           $user->mime = $mimeType;
           $user->original_filename =  $originalName;
           $user->filename = $originalName;
           $user->save();

       }else{
           return "Failed to upload";

       }
       return redirect()->route('inicio');
    }


    public function downloadFile($id)
    {
      $user = User::find($id);
      $file = $user->original_filename;
      $path = storage_path('app/upload/'.$file);

      return Response::make(file_get_contents($path), 200, [
          'Content-Type' => $user->mime,
          'Content-Disposition' => 'inline; filename="'.$file.'"'
      ]);
    }

}
