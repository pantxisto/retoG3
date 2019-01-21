@extends('layouts.master')

@section('contenido')
<div class=''>
    <section>
        <article>
            <h3 class='text-center'>Ultimas ofertas</h3>
                @foreach ($ofertas as $oferta)
                    @include('partials.ofertas')
                @endforeach
        </article>
    </section>
</div>
@endsection