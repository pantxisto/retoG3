@extends('layouts.master')

@section('contenido')
<div class=''>
    <section>
        <article>
            <h3 class='text-center'>Ultimas ofertas</h3>
            @include('partials.ofertas', ['ofertas'=>$ofertas])
        </article>
    </section>
</div>
@endsection