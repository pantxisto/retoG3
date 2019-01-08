<nav class="nav justify-content-center">

    @if( true || Auth::check() )
        <ul>
            <li class="nav-item">Inicio</li>
            <li class="nav-item">Ofertas</li>
            <li class="nav-item">Empresas</li>
        </ul>
    @endif

</nav>