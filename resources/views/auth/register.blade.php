@extends('layouts.guest-layout')

@section('content')
<main class="main">
    <form method="POST" action="{{ route('register') }}" class="registerForm">
        <div class="formDiv">
            @csrf
            <h4 class="titleRegister">Registrate</h4>
            <input id="name" placeholder="Nombre" type="text" class="form-control @error('name') is-invalid @enderror control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <input id="email" placeholder="Ingrese su correo" type="email" class="form-control @error('email') is-invalid @enderror control" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input id="password" placeholder="Ingrese su contraseña" type="password" class="form-control @error('password') is-invalid @enderror control" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input id="password-confirm" placeholder="Ingrese nuevamente su contraseña" type="password" class="form-control control" name="password_confirmation" required autocomplete="new-password">
            <input id="submit" type="submit" class="boton" value="Registrar">
            <p>¿Ya tiene una cuenta? <a href="{{url('login')}}" class="fromRegister2Login">Inicia session </a></p>
        </div>
    </form>
</main>
@endsection
