<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function modify(Request $request)
    {
    
        $usuari = User::find($request->id);
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

    public function modifyProfile(Request $request) {
        if ($request->validate([
            'nom' => ['required'],
            'cognoms' => ['required'],
            'arxiu' => 'mimes:jpg,jpeg,png,svg'
        ])) {
            if ($request->file("arxiu") != null){
                $usuari = User::find($request->id);
                Storage::disk('public')->put('avatars', $request->file('arxiu'));
                $usuari->nom = $request->nom;
                $usuari->cognoms = $request->cognoms;
                $usuari->profile_pic = $request->file("arxiu")->hashName();
                $usuari->save();
                return response($request);
            } else {
                return response($request);
            }
        }
            
        
        }
    
}
