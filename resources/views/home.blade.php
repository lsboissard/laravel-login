@extends('layouts/master')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="">
            <span class="fs-1 fw-bold d-block">Olá, {{ Session::get('user') ?? "Visitante" }}!</span>
            @if (Auth::check())
            <a href="/logout" class="d-block text-center">Logout</a>
            @else
            <a href="/login" class="d-block text-center">Entrar</a>
            @endif
        </div>
    </div>
</div>
@endsection