<?php

namespace App\Http\Controllers;

use App\Models\Botiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class CrearBotigaController extends Controller
{
    public function crearBotiga(Request $request)
    {
        
        $request->validate([
            'nom' => ['required'],
            'descripcio' => ['required'],
            'telefon' => ['required'],
            'direccio' => ['required'],
            'cp' => ['required'],
            'poblacio' => ['required'],
            'provincia' => ['required'],
            'email' => ['required', 'email'],
        ]);

        Botiga::create([
            'nom' => $request->nom,
            'descripcio' => $request->descripcio,
            'telf_1' => $request->telefon,
            'direccio' => $request->direccio,
            'cp' => $request->cp,
            'poblacio' => $request->poblacio,
            'provincia' => $request->provincia,
            'email' => $request->email,
            'id_usuari' => $request->id_usuari,
        ]);

        $usuari = User::find($request->id_usuari);
        $usuari->botiga = 1;
        $usuari->save();

    }
}