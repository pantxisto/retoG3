<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Oferta;
use App\User;
use App\Empresa;

use Validator;
use Response;
use Illuminate\Support\Facades\Input;

use App\Departamento;
use App\Grado;

class AdministrarController extends Controller
{
    public function index(){
        $depart = Departamento::paginate(10);
        return view('administrar',compact('depart'));
      }
    
      public function add(Request $request){
        $rules = array(
          'nombre' => 'required',
          'siglas' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
      if ($validator->fails())
      return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
    
      else {
        $depart = new Departamento;
        $depart->nomDepart = $request->nombre;
        $depart->siglas = $request->siglas;
 
        $depart->save();
        return response()->json($depart);
      }
    }
    
    public function edit(request $request){
        $depart = Departamento::find ($request->id);
        $depart->nomDepart = $request->nomDepart;
        $depart->siglas = $request->siglas;

        $depart->save();
        return response()->json($depart);
    }
    
    public function delete(request $request){
        $depart = Departamento::find($request->idDepart)->delete();
        return response()->json();
    }
}
