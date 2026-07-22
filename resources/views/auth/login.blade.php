@extends('layouts.loginAutenticacion')

@section('titulo', 'Iniciar sesión')

@section('content')

    <h1 class="auth-title">Iniciar sesión</h1>
    <p class="auth-subtitle">Ingresa tus datos para continuar</p>

    <form class="auth-form"  action="#"  method="POST" >
        @csrf

        <!-- Campo: Correo -->
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input id="email" type="email" name="email" class="form-control" placeholder="tucorreo@ejemplo.com" required autofocus>
        </div>

        <!-- Campo: Contraseña -->
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" class="form-control" placeholder="********" required>
        </div>

        <!-- Opciones del Formulario -->
        <div class="form-row">
            <label class="form-check">
                <input type="checkbox" name="remember">
                <span>Recordarme</span>
            </label>
            <a href="#" class="form-link">¿Olvidaste tu contraseña?</a>
        </div>

        <!-- Botón de Envío -->
        <button type="submit" class="btn-primary">Iniciar sesión</button>

        <!-- Enlace de Registro -->
        <p class="auth-footer-text">
            ¿No tienes una cuenta?
            <a href="{{ route('registrarUsuario') ?? '#' }}" class="form-link">Regístrate</a>
        </p>
    </form>

@endsection
