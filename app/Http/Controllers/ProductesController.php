<?php

namespace App\Http\Controllers;

use App\Models\Producte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductesController extends Controller
{
    
    public function productes()
    {
        $productes= Producte::all();
        return $productes;
       
    }
}
