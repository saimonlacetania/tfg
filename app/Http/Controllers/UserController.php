<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function modify(Request $request)
    {
    
        $usuari = User::find($request->id);
        if ($request->nom != "") {
            $usuari->nom = $request->nom;
        }
        if ($request->cognoms != "") {
            $usuari->cognoms = $request->cognoms;
        }
        $usuari->provincia = $request->provincia;
        $usuari->poblacio = $request->poblacio;
        $usuari->cp = $request->cp;
        $usuari->direccio = $request->direccio;

        $usuari->save();

        return response()->json($usuari, 200);
    }

    public function modifyPassword(Request $request)
    {
        if ($request->validate([
            'password' => ['required'],
            'new_password' => ['required', 'min:6'],
        ])) {
            $usuari = User::find($request->id);
            if (Hash::check($request->password, $usuari->password)) {
                if ($request->new_password == $request->confirm_password) {
                    $usuari->password = Hash::make($request->new_password);
                    $usuari->save();
                    return response()->json($usuari->password, 200);
                } else {
                    return response()->json($usuari->password, 404);
                }
            } else {
                return response()->json($usuari->password, 400);
            }
        }
    }
}
