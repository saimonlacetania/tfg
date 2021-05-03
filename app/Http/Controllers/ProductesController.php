<?php

namespace App\Http\Controllers;

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
}
