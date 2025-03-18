<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Identifiants incorrects.');
    }

    public function generateAdmin()
    {
        $name = 'hanane';
        $password = 'bcs2025';

        User::create([
            'name' => $name,
            'password' => Hash::make($password), 
        ]);

        return "Nom d'utilisateur : $name | Mot de passe : $password";
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}