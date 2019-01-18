<?php 
    function logout(){
        Auth::logout(); 
        return redirect()->route(url('login')); 
    }
?>
<div class="d-flex justify-content-between align-items-center border-box">
    <a class="" href="http://www.fptxurdinaga.hezkuntza.net/web/Guest"><img  src="img/logo.png" alt="logo_centro"></a>
    <img class="img-fluid d-lg-block d-sm-none" src="img/texto.png" alt="">

    <button id='contacto' type='button'>Contacto</button>

    @if(Auth::user()!==null)
        <button id='contacto' type='button' onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
    @endif

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

