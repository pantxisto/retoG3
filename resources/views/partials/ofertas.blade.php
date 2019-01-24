
<div class='box-ofertas'>
    <section>
        <article>
            @foreach ($ofertas as $oferta)
                <div class='oferta'>
                    <h5>{{ $oferta->tipoTrabajo }}</h5>
                    <time>{{ $oferta->fecSubido }}</time><br>
                    <p>Empresa: {{ $oferta->nomEmpresa }} <br>
                        Localidad: {{ $oferta->ubicacion }}</p>
                        @include('partials.botonOfertas')
                </div>
            @endforeach
        </article>
    </section>
</div>

