@extends('layouts.master')

@section('contenido')
<div class="container">
    <form method="POST" action="{{ route('perfil.post', ['id' => $id]) }}">
        @csrf
        <legend><h2>Perfil</h2></legend>
        @foreach($usuario as $usuarioActual)
        <div class="form-group row">
                <label for="name">{{ __('Nombre') }}</label><br>
                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" id="name" value="{{ $usuarioActual->name }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group row">
                <label for="surname">{{ __('Apellidos') }}</label><br>
                <input class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" type="text" id="surname" name="surname" value="{{ $usuarioActual->surname }}">
                @if ($errors->has('surname'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('surname') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group row">
                <label for="email">{{ __('Email') }}</label><br>
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" id="email" name="email" value="{{ $usuarioActual->email }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group row">
                <label for="password">{{ __('Nueva Contraseña') }}</label><br>
                <input class="form-control{{ $errors->has('newPassword') ? ' is-invalid' : '' }}" type="password" id="password" name="password">
                @if ($errors->has('newPassword'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('newPassword') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group row">
                <label for="cv">{{ __('Curriculum Vitae') }}</label><br>
                <input class="form-control{{ $errors->has('newPassword') ? ' is-invalid' : '' }}" type="text" id="cv" name="cv" value="{{ $usuarioActual->cv }}">
                @if ($errors->has('newPassword'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('newPassword') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group row">
                <label for="nomDepart">{{ __('Nombre de Departamento') }}</label><br>
                <select  class="form-control{{ $errors->has('idDepart') ? ' is-invalid' : '' }}" id="idDepart" name="idDepart" required>
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->idDepart }}">{{ $departamento->nomDepart }}</option>  
                @endforeach              
                </select>
                @if ($errors->has('idDepart'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('idDepart') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group row mb-0 justify-content-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Actualizar') }}
                </button>
            </div>
            @endforeach
    <!--     
        <div class="container ml-4">
            @foreach($usuario as $usuarioActual)
            <div class="row">
                <div class="col-sm-3">
                    Nombre:
                </div>
                <div class="col-sm-2">
                    {{ $usuarioActual->name }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    Apellidos:
                </div>
                <div class="col-sm-2">
                    {{ $usuarioActual->surname }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    Email:
                </div>
                <div class="col-sm-2">
                    {{ $usuarioActual->email }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    Contraseña:
                </div>
                <div class="col-sm-2">
                    ---------------
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    Confirmar Contraseña:
                </div>
                <div class="col-sm-2">
                    ---------------
                </div>
            </div>
            @if($usuarioActual->rol != null && $usuarioActual->rol == 2)
            <div class="row">
                <div class="col-sm-3">
                    Curriculum Vitae:
                </div>
                <div class="col-sm-2">
                    ---------------
                </div>
            </div>
            @endif
            @if($usuarioActual->rol != null && ($usuarioActual->rol == 0 || $usuarioActual->rol == 1))
            <div class="row">
                <div class="col-sm-3">
                    Departamento:
                </div>
                <div class="col-sm-2">
                    {{ $usuarioActual->nomDepart }}
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-sm-3">
                    Fecha de Alta:
                </div>
                <div class="col-sm-2">
                    {{ $usuarioActual->created_at }}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    Fecha de Actualización:
                </div>
                <div class="col-sm-2">
                    {{ $usuarioActual->updated_at }}
                </div>
            </div>
            @endforeach
        </div>                                                   -->
    </form>
</div>
@stop