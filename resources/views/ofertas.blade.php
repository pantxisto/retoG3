@extends('layouts.master')

@section('contenido')
    <div class="contenido-ofertas">

            <div class="filtros">
                <div id="filtro">
                
                    <ul class = "list-unstyled">
                    <li><strong>Buscar Empresa: @{{mensajeEmpresas}} </strong></li>
                    <input id="mensajeEmpresas" v-model="mensajeEmpresas" type="text"  placeholder="Buscar..."><img width="25px" src="{{ asset('img/lupa.png') }}" alt="">
                        <li>
                        <strong> Ordenar por:</strong>
                        </li>
                            <ul >
                                <li v-for="filtro in filtroFecha">
                                    @{{filtro.fecha}} <input type="checkbox" name="" id="">
                                </li>
                            </ul>
                        <li>
                                <strong> Provincias:</strong>
                        </li>  
                            <ul>
                                <li v-for="filtro in filtroProv">
                                    @{{filtro.provincia}} <input type="checkbox"  name="" id="">
                                </li>
                            </ul>  
                            <li>
                                    <strong> Categoria:</strong>
                            </li>  
                                <ul>
                                    <li v-for="filtro in filtroCat">
                                        @{{filtro.categoria}} <input type="checkbox" name="" id="">
                                    </li>
                                    <li v-if="mostrar" v-for="filtro in filtroCat2">
                                        @{{filtro.categoria2}} <input type="checkbox" name="" id="">
                                    </li>
                                    <button id="cambiarFiltro" class="btn btn-link" @click="cambiarEstado">Mostrar más</button>
                                </ul> 
                            <li>
                                <strong>Estudios: </strong>
                            </li>
                                <ul>
                                    <li v-for="estudio in filtroEstudios">
                                        @{{estudio.estudios}}<input type="checkbox" name="" id="">
                                    </li>
                                </ul> 
                                   
                    </ul>
                </div>
            </div>
        @include('partials.ofertas')
    </div>  
@stop