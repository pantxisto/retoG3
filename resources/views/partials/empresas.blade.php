<div class='box-ofertas'>
    <section>
        @foreach ($empresas as $oferta)
                @include('partials.botonOfertas')
        @endforeach
    </section>
</div>