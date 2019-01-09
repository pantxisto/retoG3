@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('contenido')
    <section>
        <article>
            <h3>Ultimas ofertas</h3>
            <div class='oferta'>
                    <h5>Programador Web</h5>
                    <time>10/12/2018</time><br>
                    <p>Empresa: Ibermatica <br>
                        Localidad: Bilbao</p>
            </div>
            <div class='oferta'>
                    <h5>Programador Multiplataforma</h5>
                    <time>10/12/2018</time><br>
                    <p>Empresa: Accentur <br>
                        Localidad: Bilbao</p>
            </div>
        </article>
    </section>

@endsection