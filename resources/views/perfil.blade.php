@extends('layouts.master')

@section('contenido')
<div class="container">
    <form method="POST" enctype="multipart/form-data" action="{{ route('perfil.post', ['id' => $id]) }}">
        @csrf
        <legend><h2>Perfil</h2></legend>
        @foreach($usuario as $usuarioActual)
        <div class="form-group row">
                <label for="name">{{ __('Nombre') }}</label><br>
                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" id="name" value="{{ $usuarioActual->name }}" required autofocus>
            </div>

            <div class="form-group row">
                <label for="surname">{{ __('Apellidos') }}</label><br>
                <input class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" type="text" id="surname" name="surname" value="{{ $usuarioActual->surname }}">
            </div>

            <div class="form-group row">
                <label for="email">{{ __('Email') }}</label><br>
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" id="email" name="email" value="{{ $usuarioActual->email }}" required>
            </div>

            <div class="form-group row">
                <label for="password">{{ __('Nueva Contraseña  (No obligatorio)') }}</label><br>
                <input class="form-control{{ $errors->has('newPassword') ? ' is-invalid' : '' }}" type="password" id="password" name="password"><br><br>
            </div>

            @if($usuarioActual->rol === 0)
            @if($usuarioActual->filename !== null)
                <a href="{{ route('downloadFile', ['id' => $id]) }}">Descargar CV actual</a>
            @endif
            <div class="form-group row custom-file">
                <input type="file" class="custom-file-input" id="cv" name="cv" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="cv">{{ __('Curriculum Vitae') }}</label><br><br>
            </div>
            @endif

            @if($usuarioActual->rol === 1 || $usuarioActual->rol === 2)
            <div class="form-group row">
                <label for="nomDepart">{{ __('Nombre de Departamento') }}</label><br>
                <select  class="form-control{{ $errors->has('idDepart') ? ' is-invalid' : '' }}" id="idDepart" name="idDepart" required>                    
                @foreach($departamentos as $departamento)
                    @if($usuarioActual->idDepart == $departamento->idDepart)
                        <option value="{{ $departamento->idDepart }}" selected>{{ $departamento->nomDepart }}</option>  
                    @else
                        <option value="{{ $departamento->idDepart }}">{{ $departamento->nomDepart }}</option>  
                    @endif
                @endforeach              
                </select>
            </div>
            @endif
            
            <div class="form-group row mb-0 justify-content-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Actualizar') }}
                </button>
            </div>
            @endforeach
    </form>
</div>

<script>
    $('.custom-file-input').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        fileName = fileName.replace('C:\\fakepath\\', '');
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    });
</script>

@stop