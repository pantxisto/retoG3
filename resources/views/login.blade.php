@extends('layouts.master')

@section('content')
<form method="POST">
    {{ csrf_field() }}
    <fieldset>
        <legend><h2>Login</h2></legend>
        <div class="form-group">
            <label for="email">Email</label><br>
            <input class="form-control" type="email" name="email" id="" placeholder="email@mail.com">
        </div>
        <div class="form-group">
            <label for="pass">Contraseña</label><br>
            <input class="form-control" type="password" name="pass" placeholder="8-16 caracteres">
        </div>
        <button>Entrar</button>
    </fieldset>
</form>
@endsection
