@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('contenido')
    <section>
        <article>
            <!--
            <form action="">
                <fieldset>
                    <legend><h2>Login</h2></legend>
                    <label for="email">Email: </label><input type="email" name="email" id="" placeholder="email@mail.com"><br>
                    <label for="pass">Contraseña: </label><input type="password" name="pass" placeholder="8-16 caracteres"><br>
                    <button>Entrar</button>
                </fieldset>
            </form>
            -->
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