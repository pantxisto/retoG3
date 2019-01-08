<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <!--Bootstrap-->
    {{--@import "~bootstrap/scss/bootstrap";--}}
</head>
<body>
    @section('menu')
        <nav class="nav justify-content-center">

        @if( true || Auth::check() )
            <ul>
                <li class="nav-item">Inicio</li>
                <li class="nav-item">Ofertas</li>
                <li class="nav-item">Empresas</li>
            </ul>
        @endif

        </nav>
    @show

    <div class="container">
        @yield('contenido')
    </div>

    @section('footer')
        <div calss="footer">

        </div>
    @show
</body>
</html>