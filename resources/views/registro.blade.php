@extends('layouts.master')

@section('contenido')
<form method="POST" action="{{ route('register') }}">
    @csrf
        <legend><h2>Bienvenido al registro</h2></legend>

        <div class="form-group row">
            <label for="name">{{ __('Nombre') }}</label><br>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group row">
            <label for="email">{{ __('Email') }}</label><br>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row">
            <label for="password">{{ __('Contraseña') }}</label><br>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row">
            <label for="password-confirm">{{ __('Confirma la contraseña') }}</label><br>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            <p class=" alert-danger" id="errorValidacion"></p>
        </div>

        <div class="form-group row mb-0">
            <button type="submit" class="btn btn-primary" onclick="getDate()">
                {{ __('Registrarse') }}
            </button>
        </div>
        
</form>
@endsection