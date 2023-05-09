<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="">
            <div class="card" style="width: 32rem">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <span class="fw-semibold">Acesso Restrito</span>
                    </div>
                    <div>
                        <span>Entrar</span>
                        <a href="/register">Cadastrar</a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('user.login')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail." aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" placeholder="Digite sua senha." id="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Lembrar</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="d-block mt-3">
                <a href="/" class="d-block text-center">Voltar</a>
            </div>
        </div>

    </div>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->
</body>

</html>