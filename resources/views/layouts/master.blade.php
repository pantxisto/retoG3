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

            <div class="d-flex justify-content-between align-items-center border-box">
                <a class="" href="http://www.fptxurdinaga.hezkuntza.net/web/Guest"><img  src="img/logo.png" alt="logo_centro"></a>
                <img class="img-fluid d-lg-block d-sm-none" src="img/texto.png" alt="">

                <button id='contacto'>Contacto</button>
            </div>

        @show

        @section('menu')
            <div class="row justify-content-center m-5">
                
                {{--@if( isset($user) )--}}
                    <nav class="col-lg-12 nav">
                        <ul class="col-12 nav d-flex font-weight-bold text-white text-center">
                            <li class="col-lg-2 col-sm-12 dropdown item" id='inicio'>Inicio</li>
                            <li class="col-lg-2 col-sm-12 dropdown item" id='ofertas'>Ofertas</li>
                            <li class="col-lg-2 col-sm-12 dropdown item" id='administrar'>Administrar</li>
                            <li class="col-lg-2 col-sm-12 dropdown item" id='perfil'>Perfil</li>
                        </ul>
                    </nav>
                {{--@else
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <fieldset>
                            <legend><h2>Login</h2></legend>
                            <div class="form-group">
                                <label for="email">Email</label><br>
                                <input lass="form-control" type="email" name="email" id="" placeholder="email@mail.com">
                            </div>
                            <div class="form-group">
                                <label for="pass">Contraseña</label><br>
                                <input lass="form-control" type="password" name="pass" placeholder="8-16 caracteres">
                            </div>
                            <button>Entrar</button>
                        </fieldset>
                    </form>
                @endif--}}

            </div>
        @show

        <div class="container">
            {{--@if( isset($user) )--}}
                @yield('contenido')
            {{--@endif--}}
        </div>

        <div class="d-flex justify-content-end">
                <a href="http://www.hezkuntza.ejgv.euskadi.eus/r43-2591/eu"><img src="img/gobiernoVasco.png" alt=""></a>
        </div>

        @section('footer')
                <div class="row d-flex justify-content-between bg-dark text-white">
                    <div class="m-2">
                        CIFP Txurdinaga LHII <br>
                    </div>
                    <div class="m-2">
                        Teléfono: 944125712 <br>
                        Fax: 944731359 <br>
                        idazkaria@fpTXurdinaga.com
                    </div>
                </div>
        @show

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </div>
</body>
</html>