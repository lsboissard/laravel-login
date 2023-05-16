@extends('layouts/master')

@section('title', 'Entrar')

@section('content')
    <div class="d-flex align-items-center justify-content-center vh-100 container">
        <div class="">
            <div class="p-3 text-center">
                <span class="d-block">paes.heloise@example.org</span>
                <span class="d-block">password</span>
            </div>
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
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="email">E-mail</label>
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <input class="form-control" name="email" type="email" aria-describedby="email"
                                placeholder="Digite seu e-mail." />
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Senha</label>
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            <input class="form-control" name="password" type="password" placeholder="Digite sua senha." />
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
                        <button class="btn btn-primary w-100" type="submit">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
            @error('error')
                <div class="d-block mt-3">
                    <span class="d-block text-danger text-center">{{ $message }}</span>
                </div>
            @enderror
            <div class="d-block mt-3">
                <a class="d-block text-center" href="/">Voltar</a>
            </div>
        </div>
    </div>
@endsection
