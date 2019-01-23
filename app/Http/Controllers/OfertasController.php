<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
//Libreria que permite realizar consultas sql
use Illuminate\Support\Facades\DB;

class OfertasController extends Controller
{
    //
    public function index()
    {
        //$ofertas = Oferta::all()->empresas;
        //Consulta a la Base de Datos
        $ofertas = DB::table('ofertas')
        	->join('empresas', 'ofertas.idEmpresa', '=', 'empresas.idEmpresa')
        	->orderBy('idOferta', 'DESC')
            ->get();
        //El controlador llama a la vista y le pasa el resultado de la consultas
        return view('index',['ofertas'=>$ofertas]);
    }
}
