<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller {

    public function index() {
        return view('auth/login');
    }

    public function login(Request $request): RedirectResponse {

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Por favor, digite seu e-mail.',
            'email.email' => 'Por favor, digite um e-mail válido.',
            'password.required' => 'Por favor, digite sua senha.'
        ]);

        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);

        if ($authenticated) {
            $request->session()->regenerate();
            Session::put('user', Auth::user()->name);
            return redirect('/');
        }

        return redirect()->route('auth.login')->withErrors(['error' => 'E-mail e/ou senha inválido(s).']);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function register() {
        return view('auth/register');
    }

    public function create(Request $request):RedirectResponse{
        return redirect()->route('home');
    }
}