<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            'email.required' => 'Por favor, preencha seu e-mail.',
            'email.email' => 'Por favor, digite um e-mail válido.',
            'password.required' => 'Por favor, preencha sua senha.'
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

    public function store(Request $request):RedirectResponse{

        $validated = $request->validate([
            'name'=> 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password'=> 'required|confirmed|min:6',
        ],[
            'name.required' => 'Por favor, preencha seu nome completo.',
            'email.required' => 'Por favor, preencha seu e-mail.',
            'email.email' => 'Por favor, preencha um e-mail válido.',
            'password.min' => 'Por favor, preencha uma senha com no mínimo 6 caracteres.',
            'password.required' => 'Por favor, preencha sua senha.',
            'password.confirmed' => 'Por favor, confirme a sua senha.',
        ]);


        $data = $request->all();

        User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> Hash::make($data['password']),
        ]);
       
        return redirect()->route('home');
    }
}