<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller {

    public function index() {
        return view('login');
    }

    public function login(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Session::put('user', Auth::user()->name);
            return redirect('/');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function register() {
        return view('register');
    }
}
