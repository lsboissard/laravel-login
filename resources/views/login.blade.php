@extends('layouts/master')

@section('title', 'Entrar')

@section('content')
<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="">
        <span>paes.heloise@example.org</span>
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
                <form method="post" action="">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            placeholder="Digite seu e-mail."
                            aria-describedby="email"
                        />
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="password" class="form-label"
                                >Senha</label
                            >
                            {{-- <a href="#">Esqueceu sua senha?</a> --}}
                        </div>
                        <input
                            type="password"
                            class="form-control"
                            placeholder="Digite sua senha."
                            name="password"
                        />
                    </div>
                    {{-- <div class="mb-3 form-check">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            id="rememberMe"
                        />
                        <label
                            class="form-check-label user-select-none"
                            for="rememberMe"
                            >Lembrar</label
                        >
                    </div> --}}
                    <button type="submit" class="btn btn-primary w-100">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
        <div class="d-block mt-3">
            <a href="/" class="d-block text-center">Voltar</a>
        </div>
    </div>
</div>
@endsection