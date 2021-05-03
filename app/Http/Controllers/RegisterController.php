<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {

        $request->validate([
            'nom' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
            'cognoms' => ['required'],
            'telefon' => ['required', 'unique:users'],
            'data_naix' => ['required'],
        ]);

        User::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cognoms' => $request->cognoms,
            'telefon' => $request->telefon,
            'data_naix' => $request->data_naix,
            'profile_pic' => "default.jpg"
        ]);
    }
}
