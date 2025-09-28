<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function auth(Request $request)
    {
        $credenciais = $request->validate(
            [
                'email' => 'required.email',
                'password' => 'required'
            ],
            [
                'email.required' => 'O campo EMAIL é obrigatório',
                'password.required' => 'O campo SENHA é obrigatório'
            ]
        );

        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended(route('usuario.index'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('home'));
    }

    public function create()
    {
        return view('login.create');
    }
}
