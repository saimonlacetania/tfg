<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class CategoriesController extends Controller
{

    public function categories()
    {
        $categories = Categoria::all();
        return $categories;
    }
}