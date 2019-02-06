@extends('layouts.master')

@section('contenido')
<div class='contenido-ofertas'>
    <div class='filtros'>
        <div id='filtroEmp'>
            <ul class = "list-unstyled">
                <li><strong>Buscar Empresa: @{{mensajeEmpresas}} </strong></li>
                    <input id="mensajeEmpresas" v-model="mensajeEmpresas" type="text"  placeholder="Buscar..."><img width="25px" src="{{ asset('img/lupa.png') }}" alt="">
                <li>
                    <strong> Ordenar por:</strong>
                </li>
                    <ul >
                        <li v-for="filtroEmpresa in filtroFecha">
                            @{{ filtroEmpresa.fecAlta }} <input type="checkbox" name="" id="">
                        </li>
                    </ul>
                <li>
                    <strong> Provincias:</strong>
                </li>  
                    <ul>
                        <li v-for="filtroEmpresa in filtroProv">
                            @{{filtroEmpresa.provincia}} <input type="checkbox" name="" id="">
                        </li>
                    </ul>  
                <li>
                    <strong> Orden nombres:</strong>
                </li>
                    <ul>
                        <li v-for="filtroEmpresa in filtroNom">
                            @{{filtroEmpresa.nomEmpresa}}<input type="checkbox" name="" id="">
                        </li>
                    </ul>
                        
            </ul>
        </div>
    </div>
    @include('partials.empresas')
</div>
@stop