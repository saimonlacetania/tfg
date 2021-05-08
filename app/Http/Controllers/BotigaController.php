<?php

namespace App\Http\Controllers;

use App\Models\Botiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;

class BotigaController extends Controller
{
    
    public function botiga()
    {
        $botiga= Botiga::all();
        return $botiga;
    }

    public function botigaId($id)
    {
        $id= Botiga::find($id);
        return $id;
    }

    public function perfilBotiga($id)
    {
        $botiga = Botiga::where("id",$id)->get();
        return $botiga;
    }

    public function modifica_botiga(Request $request)
    {
        $botiga = Botiga::find($request->id);

        if ($request->validate([
            'nom' => ['required'],
            'descripcio' => ['required'],
            'direccio' => ['required'],
            'telf_1' => ['required'],
            'cp' => ['required'],
            'poblacio' => ['required'],
            'provincia' => ['required'],
            'nif' => ['alpha_num'],
            'cif' => ['alpha_num'],
        ])) {
                if ($request->file("img_perfil") != null) {
                    Storage::disk('public')->put('botigues', $request->file('img_perfil'));
                    $thumbnailpath = public_path('images/botigues/' . $request->file("img_perfil")->hashName());
                    $img = Image::make($thumbnailpath)->resize(150, 150);
                    $img->save($thumbnailpath);
                    $botiga->img_perfil = $request->file("img_perfil")->hashName();
                }
                if ($request->file("img_portada") != null) {
                    Storage::disk('public')->put('botigues', $request->file('img_portada'));
                    $thumbnailpath = public_path('images/botigues/' . $request->file("img_portada")->hashName());
                    $img = Image::make($thumbnailpath)->resize(150, 150);
                    $img->save($thumbnailpath);
                    $botiga->img_portada = $request->file("img_portada")->hashName();
                }

                $botiga->nom = $request->nom;   
                $botiga->descripcio = $request->descripcio;      
                $botiga->telf_1 = $request->telf_1;
                $botiga->telf_2 = $request->telf_2;   
                $botiga->direccio = $request->direccio; 
                $botiga->cp = $request->cp; 
                $botiga->poblacio = $request->poblacio;  
                $botiga->provincia = $request->provincia; 
                $botiga->email = $request->email;
                $botiga->instagram = $request->instagram;  
                $botiga->facebook = $request->facebook; 
                $botiga->twitter = $request->twitter;
                $botiga->nif = $request->nif; 
                $botiga->cif = $request->cif;  
                
                $botiga->save();

                return response()->json($request, 200);
        }        
    }
}
