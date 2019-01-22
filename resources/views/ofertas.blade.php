@extends('layouts.master')

@section('contenido')
    <div class="contenido-ofertas">

            <div class="filtros">
                <div class="form-check">
                    <h6><b>Ordenar por:</b></h6>
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Fecha de publicacion</label><br>
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Ultimas 24h</label><br>
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Ultimos 7 dias</label><br>
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Ultimos 15 dias</label><br><br>
                    <h6><b>Puestos:</b></h6>
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Desarrollo web</label><br>
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Multiplataforma</label><br>
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Otro</label><br>
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Otros</label><br>
                
            </div>
        </div>
        @include('partials.ofertas')
    </div>  
@stop