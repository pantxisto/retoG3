<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Inicio</title>
        <link href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/estilo.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container">
        <div id='principal'>
            @section('cabecera')
              @include('partials.header')
            @show

            @section('menu')
            @if (Auth::user())
                <div class="row justify-content-center m-5"> 
                    @include('partials.navbar')                    
                </div>
            @endif
            @show

            <div class="container">
                    @yield('contenido')
            </div>

            <div class="d-flex justify-content-end">
                    <a href="http://www.hezkuntza.ejgv.euskadi.eus/r43-2591/eu"><img src="{{ asset('img/gobiernoVasco.png') }}" alt=""></a>
            </div>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
<<<<<<< HEAD
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
=======
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
>>>>>>> 75ed877e27df00c265aaafcfe1a197a752271d93
    </div>
    <div id='footer' class='container-fluid'>
        @section('footer')
            @include('partials.footer')
        @show
    </div>
</body>
</html>