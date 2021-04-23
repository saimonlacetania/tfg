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
            'direccio' => ['required'],
            'cp' => ['required'],
            'poblacio' => ['required'],
            'provincia' => ['required'],
            'data_naix' => ['required'],
        ]);

        User::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cognoms' => $request->cognoms,
            'telefon' => $request->telefon,
            'direccio' => $request->direccio,
            'cp' => $request->cp,
            'poblacio' => $request->poblacio,
            'provincia' => $request->provincia,
            'data_naix' => $request->data_naix,
        ]);
    }
}
