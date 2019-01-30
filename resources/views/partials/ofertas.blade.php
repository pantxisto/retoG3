
<div class='box-ofertas'>
    <section>
        
            @foreach ($ofertas as $oferta)
                
                    <!-- <h5>{{ $oferta->tipoTrabajo }}</h5>
                    <time>{{ $oferta->fecSubido }}</time><br>
                    <p>Empresa: {{ $oferta->nomEmpresa }} <br>
                        Localidad: {{ $oferta->ubicacion }}</p> -->
                        @include('partials.botonOfertas')
                
            @endforeach
       
    </section>
</div>

