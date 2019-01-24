<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Oferta;
use App\Usuario;
use App\Empresa;

use App\Departamento;
use App\Grado;

class AdministrarController extends Controller
{
    public function index(Request $request)
    {
    	$nomTabla = 'usuarios';
        //$table = Departamento::all();
        $columns = Schema::getColumnListing($nomTabla);
        //return view('administrar',['table'=>$table, 'columns'=>$columns]);
        //if(!$request->ajax())return redirect('/');
        $table = Usuario::all();
        //$columns = Schema::getColumnListing($nomTabla);
        return view('administrar',['table'=>$table, 'columns'=>$columns]);
    }

    public function create()
    {
        return view('administrar');
    }

    public function store(Request $request)
    {
        $pastel = new Pastel;
        $pastel->nombre = $request->input('nombre');
        $pastel->sabor  = $request->input('sabor');

        $pastel->save();

        return redirect()->route('pasteles.index');
    }

    public function edit($id)
    {
        $pastel = Pastel::find($id);
        return view('pasteles.edit')->with('pastel',$pastel);
    }

     public function update(Request $request, $id)
    {
        $pastel = Pastel::find($id);
        $pastel->nombre = $request->input('nombre');
        $pastel->sabor  = $request->input('sabor');
        $pastel->save();
        return redirect()->route('pasteles.index');
    }

     // Esta es la primer opcion
    public function destroy($id)
    {
        $pastel = Pastel::find($id);
        $pastel->delete();
        return redirect()->route('pasteles.index');
    }

    // Esta es la segunda opcion
    /*
    public function destroy($id)
    {
        Pastel::destroy($id);
        return redirect()->route('pasteles.index');
    }*/
}
