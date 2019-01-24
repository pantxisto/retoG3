<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresasController extends Controller
{
    public function index(Request $request){
        $empresas = Empresa::all();
        return view('empresas',['empresas'=>$empresas]);
    }
}
