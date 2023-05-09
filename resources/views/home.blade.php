<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="">
                <span class="fs-1 fw-bold d-block">Olá, Visitante!</span>
                <a href="/login" class="d-block text-center">Entrar</a>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->
</body>

</html>