<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inicio</title>
        <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/estilo.css">

        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    </head>
<body>
    <div class="container">
        @section('cabecera')
          @include('partials.header')
        @show

        @section('menu')
            <div class="row justify-content-center m-5">
                
                @if( isset($user) )
                    @include('partials.navbar')                    
                @else
                    @include('login')
                @endif

            </div>
        @show

        <div class="container">
            @if( isset($user) )
                @yield('contenido')
            @endif
        </div>

        <div class="d-flex justify-content-end">
                <a href="http://www.hezkuntza.ejgv.euskadi.eus/r43-2591/eu"><img src="img/gobiernoVasco.png" alt=""></a>
        </div>

        @section('footer')
            @include('partials.footer')
        @show

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </div>
</body>
</html>