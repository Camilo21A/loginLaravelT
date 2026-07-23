@extends('layouts.loginAutenticacion')

@section('titulo', 'Crear cuenta')

@section('content')

    <h1 class="auth-title">Crear cuenta</h1>
    <p class="auth-subtitle">Completa el formulario para registrarte</p>

    <form class="auth-form" action="#" method="POST"  >
        @csrf

        <!-- Campo: Nombre -->
        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" type="text" name="name" class="form-control" placeholder="Tu nombre" required autofocus>
        </div>

        <!-- Campo: Apellido -->
        <div class="form-group">
            <label for="lastname">Apellido</label>
            <input id="lastname" type="text" name="lastname" class="form-control" placeholder="Tu apellido" required autofocus>
        </div>

        <!-- Campo: Correo -->
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input id="email" type="email" name="email" class="form-control" placeholder="tucorreo@ejemplo.com" required>
        </div>

        <!-- Campo: Contraseña -->
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" class="form-control" placeholder="********" required>
        </div>

        <!-- Campo: Confirmar Contraseña -->
        <div class="form-group">
            <label for="password_confirmation">Confirmar contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="********" required>
        </div>

        <!-- Botón de Envío -->
        <button type="submit" class="btn-primary">Registrarme</button>

        <!-- Enlace de Login -->
        <p class="auth-footer-text">
            ¿Ya tienes una cuenta?
            <a href="{{route('login') }}" class="form-link">Inicia sesión</a>
        </p>
    </form>

@endsection
