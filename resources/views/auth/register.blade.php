@extends('layouts/master')

@section('title', 'Cadastrar')

@section('content')
    <div class="d-flex align-items-center justify-content-center vh-100 container">
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
                    <form method="post" action="">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Nome Completo</label>
                            <input class="form-control" id="name" name="name" type="text"
                                value="{{ old('name') }}" aria-describedby="name" placeholder="Digite seu nome completo.">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">E-mail</label>
                            <input class="form-control" id="email" name="email" type="email"
                                value="{{ old('email') }}" aria-describedby="email" placeholder="Digite seu e-mail.">
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Senha</label>
                            <input class="form-control" id="password" name="password" type="password"
                                placeholder="Digite sua senha.">

                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">Confirmar Senha</label>
                            <input class="form-control" id="password_confirmation" name="password_confirmation"
                                type="password" placeholder="Confirme sua senha.">
                            <small class="text-danger">{{ $errors->first('password') }}</small>

                        </div>
                        <button class="btn btn-primary w-100" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="d-block mt-3">
                <a class="d-block text-center" href="/">Voltar</a>
            </div>
        </div>
    </div>
@endsection
