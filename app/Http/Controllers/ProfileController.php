<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        dd($user);
        $user->save(); 

        return redirect()->route('profile')->with('success', 'Informations mises à jour avec succès.');
    }
}

