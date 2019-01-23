@extends('layouts.master')

@section('contenido')
<form method="POST" action="{{ route('login') }}">
    @csrf
        <legend><h2>Bienvenido</h2></legend>

        <div class="form-group row">
            <label for="email">{{ __('Email') }}</label><br>
            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row">
            <label for="password">{{ __('Contraseña') }}</label><br>
            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Recordarme') }}
                </label>
            </div>
        </div>

        <div class="form-group row mb-0">
            <button type="submit" class="btn btn-primary">
                {{ __('Entrar') }}
            </button>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('¿Has olvidado tu contraseña?') }}
                </a>
            @endif
        </div>

</form>
@endsection
