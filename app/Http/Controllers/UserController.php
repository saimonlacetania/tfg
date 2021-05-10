<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use App\User;
use App\Models\Botiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;

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

    public function perfilUser($id)
    {
        $user = User::where("id",$id)->get();
        return $user;
    }

    public function modifyPassword(Request $request)
    {
        if ($request->validate([
            'password' => ['required', new MatchOldPassword],
            'nova_contrasenya' => ['required', 'min:6', 'confirmed'],
        ])) {
            $usuari = User::find($request->id);
            $usuari->password = Hash::make($request->nova_contrasenya);
            $usuari->save();
            return response()->json($usuari, 200);
        }
    }

    public function modifyProfile(Request $request)
    {
        if ($request->validate([
            'nom' => ['required'],
            'cognoms' => ['required'],
            'arxiu' => 'mimes:jpg,jpeg,png,svg',
        ])) {
            if ($request->file("arxiu") != null) {
                $usuari = User::find($request->id);
                Storage::disk('public')->put('avatars', $request->file('arxiu'));
                //Resize image here
                $thumbnailpath = public_path('images/avatars/' . $request->file("arxiu")->hashName());
                $img = Image::make($thumbnailpath)->resize(150, 150);
                $img->save($thumbnailpath);
                $usuari->nom = $request->nom;
                $usuari->cognoms = $request->cognoms;
                $usuari->profile_pic = $request->file("arxiu")->hashName();
                $usuari->save();
                return response()->json($usuari, 200);
            } else {
                $usuari = User::find($request->id);
                $usuari->nom = $request->nom;
                $usuari->cognoms = $request->cognoms;
                $usuari->save();
                return response()->json($usuari, 200);
            }
        } else {
            return response()->json("error", 400);
        }

    }

}
