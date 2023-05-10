@extends('layouts/master')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="">
            <span class="fs-1 fw-bold d-block">Olá, Visitante!</span>
            <a href="/login" class="d-block text-center">Entrar</a>
        </div>
    </div>
</div>
@endsection