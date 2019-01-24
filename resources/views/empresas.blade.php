@extends('layouts.master')

@section('contenido')
<div class=''>
    <section>
        <article>
            <h3 class='text-center'>Datos empresas</h3>
                @foreach ($empresas as $oferta)
                        <div class='oferta'>                         
                            <h5>{{ $oferta->nomEmpresa }}</h5>                        
                            <p>Sector: {{ $oferta->sector }} <br>
                                Localidad: {{ $oferta->ubicacion }}</p>                                                                                
                            <div class="row">
                                <p class="col-md-4">Email: {{ $oferta->email}}</p>
                                <p class="col-md-4">Teléfono: {{ $oferta->telefono }}</p>
                                <p class="col-md-4">Link: {{ $oferta->link }}</p>
                            </div>
                            <time>{{ $oferta->fecAlta }}</time><br>
                            @include('partials.botonOfertas')
                        </div>
                @endforeach
        </article>
    </section>
</div>
@stop