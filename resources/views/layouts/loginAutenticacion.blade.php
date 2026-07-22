<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Autenticación')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://googleapis.com" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="auth-bg" style="background-image: url('{{ asset('images/space-bg.png') }}')"></div>
    <div class="auth-bg-overlay"></div>

    <div class="auth-wrapper">
        <div class="auth-card">

            <div class="auth-brand">
                <span class="auth-brand-icon">L</span>
                <span class="auth-brand-name"></span>
            </div>

            @yield('content')

        </div>
    </div>

</body>
</html>
