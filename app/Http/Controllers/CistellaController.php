<?php

namespace App\Http\Controllers;

use App\Models\Cistella;
use App\Models\Producte;
use Illuminate\Support\Facades\Auth;

class CistellaController extends Controller
{

    public function veureCistella()
    {
        $id = Auth::id();

        $cistella = Cistella::with('productes')->where('id_usuari', $id)
            ->where('pagat', 0)
            ->get();

        return $cistella;
    }

    public function afegirCistella($id_producte)
    {
        $producte = Producte::find($id_producte);
        $id = Auth::id();
        $cistella = Cistella::where('id_usuari', $id)
            ->where('id_productes', $id_producte)
            ->where('pagat', 0)
            ->get();
        if (count($cistella) > 0) {
            Cistella::where('id_usuari', $id)
                ->where('id_productes', $id_producte)
                ->increment('quantitat', 1);
            return $id;
        } else {
            Cistella::create([
                'id_usuari' => $id,
                'id_productes' => $producte->id,
                'quantitat' => 1,
                'pagat' => 0,
            ]);
            return $id;
        }
    }

    public function eliminarCistella($id_cistella)
    {
        $cistella = Cistella::find($id_cistella);
        $cistella->delete();
        return true;
    }

    public function restarCistella($id_cistella)
    {
        $cistella = Cistella::find($id_cistella);
        if ($cistella->quantitat <= 1) {
            $this->eliminarCistella($id_cistella);
        } else {
            $cistella->quantitat = $cistella->quantitat - 1;
            $cistella->save();
        }

        return true;
    }
    public function sumarCistella($id_cistella)
    {
        $cistella = Cistella::find($id_cistella);
        $cistella->quantitat = $cistella->quantitat + 1;
        $cistella->save();
        return true;
    }
}
