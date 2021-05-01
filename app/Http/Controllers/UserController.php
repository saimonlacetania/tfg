<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\User;
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
}
