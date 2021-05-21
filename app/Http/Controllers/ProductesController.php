<?php

namespace App\Http\Controllers;

use App\Models\Comentari;
use App\Models\Producte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class ProductesController extends Controller
{

    public function productes()
    {
        $productes = Producte::where('actiu', 1)->get();
        return $productes;
    }

    public function productesCerca($keyword)
    {
        if ($keyword == "" || $keyword == " ") {
            $productesCerca = Producte::where('actiu', 1)->get();
        } else {
            $productesCerca = Producte::where('nom', 'LIKE', '%' . $keyword . '%')->where('actiu', 1)->get();
        }

        return $productesCerca;
    }

    public function producte($id)
    {
        $producte = Producte::find($id);
        if ($producte) {
          $producte->visites = $producte->visites + 1;
        $producte->save();
        } else {
            $producte = false;
        }
        return $producte; 
    }

    public function comentaris($id)
    {
        $comentaris = Comentari::with('user')->where("id_producte", $id)->get();
        return $comentaris;
    }

    public function pujarComentari(Request $request)
    {
        $request->validate([
            'valoracio' => ['required'],
        ]);
        Comentari::create([
            'id_usuari' => $request->id_usuari,
            'id_producte' => $request->id_producte,
            'descripcio' => $request->descripcio,
            'valoracio' => $request->valoracio,
        ]);
    }

    public function eliminarProducte($id)
    {
        $producte = Producte::find($id);
        $producte->actiu = 0;
        $producte->eliminat = 1;
        $producte->save();
        return true;
    }
    public function restarStock($id)
    {
        $producte = Producte::find($id);
        if ($producte->stock <= 1) {
            $this->eliminarProducte($id);
        } else {
            $producte->stock = $producte->stock - 1;
            $producte->save();
        }

        return true;
    }
    public function sumarStock($id)
    {
        $producte = Producte::find($id);
        $producte->stock = $producte->stock + 1;
        $producte->save();
        return true;
    }
    public function canviEstat($id)
    {
        $producte = Producte::find($id);
        if ($producte->actiu == 1) {
            $producte->actiu = 0;
        } else {
            $producte->actiu = 1;
        }
        $producte->save();
        return true;
    }
    public function producteBotiga($id)
    {
        $producte = Producte::where("id_botiga", $id)->where('actiu',1)->where('eliminat',0)->get();
        return $producte;
    }
    public function afegirProducte(Request $request)
    {

        $request->validate([
            'ima' => 'mimes:jpg,jpeg,png,svg',
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
                'eliminat' => 0,
            ]);
        }
    }

    public function editarProducte(Request $request)
    {
        if (
            $request->validate([
                'imatge' => 'mimes:jpg,jpeg,png,svg',
                'ref' => ['required'],
                'nom' => ['required'],
                'desc' => ['required'],
                'preu' => ['required'],
                'stock' => ['required'],
            ])) {

            if ($request->file("imatge") != null) {
                $producte = Producte::find($request->id);
                Storage::disk('public')->put('productes', $request->file('imatge'));
                $thumbnailpath = public_path('images/productes/' . $request->file("imatge")->hashName());
                $img = Image::make($thumbnailpath)->resize(500, 500);
                $img->save($thumbnailpath);

                $producte->ref = $request->ref;
                $producte->nom = $request->nom;
                $producte->descripcio = $request->desc;
                $producte->preu = $request->preu;
                $producte->stock = $request->stock;
                $producte->imatge = $request->file("imatge")->hashName();
                $producte->save();
                return response()->json($producte, 200);

            } else {
                $producte = Producte::find($request->id);
                $producte->ref = $request->ref;
                $producte->nom = $request->nom;
                $producte->descripcio = $request->desc;
                $producte->preu = $request->preu;
                $producte->stock = $request->stock;
                $producte->save();
                return response()->json($producte, 200);
            }
        } else {
            return response()->json("error", 400);
        }
    }
}
