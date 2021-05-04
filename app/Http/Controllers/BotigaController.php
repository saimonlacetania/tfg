<?php

namespace App\Http\Controllers;

use App\Models\Botiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BotigaController extends Controller
{
    
    public function botiga()
    {
        $botiga= Botiga::all();
        return $botiga;
    }
}
