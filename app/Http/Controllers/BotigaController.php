<?php

namespace App\Http\Controllers;

use App\Models\Botiga;
use App\Models\Producte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;

class BotigaController extends Controller
{
    
    public function botiga()
    {
        $id = Auth::id();

        $botigues = Botiga::find($id)->with('user')
            ->get();
        
        return $botigues;
    }

    public function productors()
    {
        $botigues = Botiga::with('productes')->get();
        
        foreach($botigues as $botiga) {
            $botiga->visites_total = 0;
            if($botiga->productes) {
                foreach($botiga->productes as $producte) {
                    $botiga->visites_total += $producte->visites;
                }   
            }          
        }
        return $botigues;
    }

    public function productesB()
    {
        $id = Auth::id();

        $productes = Producte::where('id_botiga', $id)->where('eliminat',0)
            ->get();
        
        return $productes;
    }
    public function botigaId($id)
    {
        $id= Botiga::find($id);
        return $id;
    }

    public function comprovaBotiga()
    {
        $id = Auth::id();
        $user = User::find($id);
        if ($user->botiga == 1){
            return "si que te botiga";
        } else {
            return response()->json(false,400);
        }
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
                    $img = Image::make($thumbnailpath);
                    $img->save($thumbnailpath);
                    $botiga->img_portada = $request->file("img_portada")->hashName();
                }

                $botiga->nom = $request->nom;   
                $botiga->descripcio = $request->descripcio;      
                $botiga->telf_1 = $request->telf_1;
                if ($request->telf_2 != "null") {
                    $botiga->telf_2 = $request->telf_2; 
                }
                $botiga->direccio = $request->direccio; 
                $botiga->cp = $request->cp; 
                $botiga->poblacio = $request->poblacio;  
                $botiga->provincia = $request->provincia; 
                $botiga->email = $request->email;
                if ($request->instagram != "null") {
                    $botiga->instagram = $request->instagram;  
                }
                if ($request->facebook != "null") {
                    $botiga->facebook = $request->facebook; 
                }
                if ($request->twitter != "null") {
                    $botiga->twitter = $request->twitter;
                }
                if ($request->nif != "null") {
                    $botiga->nif = $request->nif; 
                }
                if ($request->cif != "null") {
                    $botiga->cif = $request->cif;  
                }
                
                $botiga->save();

                return response()->json($request, 200);
        }        
    }
}
