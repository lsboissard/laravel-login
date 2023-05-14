@extends('layouts/master')

@section('title', 'Cadastrar')

@section('content')
<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="">
        <div class="card" style="width: 32rem">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <span class="fw-semibold">Acesso Restrito</span>
                </div>
                <div>
                    <a href="/login">Entrar</a>
                    <span>Cadastrar</span>
                </div>
            </div>
            <div class="card-body">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="name"
                            placeholder="Digite seu nome completo." aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail."
                            aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha." id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirmar Senha</label>
                        <input type="password" class="form-control" placeholder="Confirme sua senha." id="password">
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
@endsection
