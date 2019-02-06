@extends('layouts.master')

@section('contenido')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="form-group row">
        <label for="email">{{ __('Email') }}</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group row mb-0">
        <button type="submit" class="btn btn-primary">
            {{ __('Mandar link de recuperación de contraseña') }}
        </button>
    </div>
</form>
@endsection
