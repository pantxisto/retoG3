<nav class="col-lg-12 nav">
    <ul class="col-12 nav d-flex font-weight-bold text-white text-center">
        <li class="col-lg-2 col-sm-12 dropdown item" id='inicio' onclick="event.preventDefault(); document.getElementById('inicio-form').submit();">Inicio</li>
        <li class="col-lg-2 col-sm-12 dropdown item" id='ofertas' onclick="event.preventDefault(); document.getElementById('ofertas-form').submit();">Ofertas</li>
        <li class="col-lg-2 col-sm-12 dropdown item" id='inicio' onclick="event.preventDefault(); document.getElementById('empresas-form').submit();">Empresas</li>        
        @if (Auth::user()->rol==2 || Auth::user()->rol==1)
            <li class="col-lg-2 col-sm-12 dropdown item" id='administrar' onclick="event.preventDefault(); document.getElementById('administrar-form').submit();">Administrar</li>
        @endif
        {{--
        <li class="col-lg-2 col-sm-12 dropdown item" id='perfil' onclick="event.preventDefault(); document.getElementById('perfil-form').submit();">Perfil</li>
        --}}
    </ul>
</nav>

<form id="inicio-form" action="{{ route('inicio') }}" method="GET" style="display: none;">
    @csrf
</form>
<form id="ofertas-form" action="{{ route('ofertas') }}" method="GET" style="display: none;">
    @csrf
</form>
<form id="administrar-form" action="{{ route('administrar') }}" method="GET" style="display: none;">
    @csrf
</form>
{{--
<form id="perfil-form" action="{{ route('perfil.get') }}" method="GET" style="display: none;">
    @csrf
</form>
--}}
<form id="empresas-form" action="{{ route('empresas') }}" method="GET" style="display: none;">
    @csrf
</form>