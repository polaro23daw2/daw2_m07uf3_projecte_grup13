<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->intended('/dashboard');
        }

        // Error de autenticación
        return redirect('/login')
            ->withErrors(['login_error' => 'Usuari incorrecte o contrasenya incorrecta.']);
    }

    public function handleLoginError($errorType)
    {
        $errorViews = [
            'error_usuario' => 'error_usuario',
            'error_contrasenya' => 'error_contrasenya',
            'error_db_conexion' => 'error_db_conexion',
            'error_db_lectura' => 'error_db_lectura',
        ];

        return view($errorViews[$errorType]);
    }
}
