<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

use App\Models\Producte;

class ProductesController extends Controller
{

    public function productes()
    {
        $productes = Producte::all();
        return $productes;
    }
    public function producte($id)
    {
        $producte = Producte::find($id);
        return $producte;
    }
    public function afegirProducte(Request $request)
    {

        $request->validate([
            'imatge' => 'mimes:jpg,jpeg,png,svg',
            'ref' => ['required'],
            'nom' => ['required'],
            'desc' => ['required'],
            'preu' => ['required'],
            'stock' => ['required'],
            'actiu' => ['required'],
            'categoria' => ['required'],
        ]);

        if ($request->file("imatge") != null) {
            Storage::disk('public')->put('productes', $request->file('imatge'));
            $thumbnailpath = public_path('images/productes/' . $request->file("imatge")->hashName());
            $img = Image::make($thumbnailpath)->resize(500, 500);
            $img->save($thumbnailpath);

            Producte::create([
                'ref' => $request->ref,
                'id_botiga' => $request->id_botiga,
                'nom' => $request->nom,
                'descripcio' => $request->desc,
                'imatge' => $request->file("imatge")->hashName(),
                'preu' => $request->preu,
                'stock' => $request->stock,
                'actiu' => $request->actiu,
                'id_categoria' => $request->categoria,
                'visites' => $request->visites,
            ]);
        }

        
    }
}
