<?php 
    function logout(){
        Auth::logout(); 
        return redirect()->route(url('login')); 
    }
?>
<div class="d-flex justify-content-between align-items-center border-box">
    <a class="" href="http://www.fptxurdinaga.hezkuntza.net/web/Guest"><img  src="{{ asset('img/logo.png') }}" alt="logo_centro"></a>
    <img class="img-fluid d-lg-block d-sm-none" src="{{ asset('img/texto.png') }}" alt="">

    <div class="row">
        <button id='contacto' type='button'>Contacto</button>

        @if(Auth::user()!==null)
            <button id='contacto' type='button' onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Desconectar</button>
        @endif

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        @if( Auth::user() !== null )
            <button class="dropdown-toggle" type="button" id="contacto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Opción 1</a>
                <a class="dropdown-item" href="#">Opción 2</a>
                <a class="dropdown-item" href="#">Opción 3</a>
            </div>
        @else
        @endif
    </div>

</div>