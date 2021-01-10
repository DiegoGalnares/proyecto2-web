@extends('layouts.guest-layout')

@section('content')


<main class="main">
    <form method="POST" action="{{route('login')}}" class="registerForm">
        @csrf
        <div class="formDiv">
            <h4 class="titleRegister">Login</h4>
            <input id="email" placeholder="Ingrese su correo" type="email" class="form-control @error('email') is-invalid @enderror control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input id="password" placeholder="Ingrese su contraseña" type="password" class="form-control @error('password') is-invalid @enderror control" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
            <input type="submit" class="boton" value="Ingresar">
            <p>¿No tienes cuenta? <a href="{{route('register')}}" class="fromRegister2Login">Registrate </a></p>
        </div>
    </form>
</main>
@endsection
