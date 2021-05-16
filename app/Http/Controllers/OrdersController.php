<?php

namespace App\Http\Controllers;

use App\Models\Botiga;
use App\Models\Cistella;
use App\Models\Order;
use App\Models\OrderLin;
use App\User;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{

    public function crearOrdre()
    {
        $id = Auth::id();
        $cistella = Cistella::with('productes')
            ->where('id_usuari', $id)
            ->where('pagat', 0)
            ->get();
        $usuari = User::find($id);

        if (count($cistella) > 0) {
            $ordre = Order::create([
                'id_usuari' => $id,
                'direccio' => $usuari->direccio,
                'cp' => $usuari->cp,
                'poblacio' => $usuari->poblacio,
                'provincia' => $usuari->provincia,
                'pagat' => 1,
                'enviat' => 0,
                'rebut' => 0,
            ]);
            $ordre_id = $ordre->id;
            foreach ($cistella as $prod) {
                $prod->pagat = 1;
                $botiga = Botiga::where("id_usuari", $prod->productes->id_botiga)->get();
                OrderLin::create([
                    'id_ordre' => $ordre_id,
                    'id_producte' => $prod->productes->id,
                    'id_botiga' => $botiga[0]->id,
                    'quantitat' => $prod->quantitat,
                ]);
                $prod->save();
            }
            return $cistella;
        } else {
            return response()->json("Buida", 405);
        }
    }
    public function veureOrdreUser()
    {
        $id = Auth::id();
        $ordre = Order::where('id_usuari', $id)
            ->where('rebut', 0)
            ->get();
        return $ordre;
    }
    public function veureOrdreProcessadaUser()
    {
        $id = Auth::id();
        $ordre = Order::having('id_usuari', '=', $id)
            ->having('rebut', '=', 1)
            ->orderBy('id', 'DESC')
            ->get();
        $productes = [];
        foreach ($ordre as $ord) {
            $producte = OrderLin::with("productes", 'productes.botiga')->where("id_ordre", $ord->id)->get();
            array_push($productes, $producte);
        }
        return $productes;
    }
    public function veureOrdreBotiga()
    {
        $id = Auth::id();

        $botiga = Botiga::with('user')->where('id_usuari', $id)
            ->get();
        $ordre = OrderLin::with("productes", "order")
            ->having('id_botiga', '=', $botiga[0]->id)
            ->having('enviat', '!=', 1)
            ->orderBy('id', 'ASC')
            ->get();
        return response()->json($ordre, 200);
    }
    public function veureOrdreBotigaEnviat()
    {
        $id = Auth::id();

        $botiga = Botiga::with('user')->where('id_usuari', $id)
            ->get();
        $ordre = OrderLin::with("productes", "order")
            ->having('id_botiga', '=', $botiga[0]->id)
            ->having('enviat', '=', 1)
            ->orderBy('id', 'ASC')
            ->get();
        return response()->json($ordre, 200);
    }
    public function enviarOrdre($id)
    {
        $ord = OrderLin::find($id);
        $ord->enviat = 1;
        $ord->save();
        $ordre = OrderLin::having('id_ordre', '=', $ord->id_ordre)
            ->get();
        $comptador = 0;
        foreach ($ordre as $ordComprovar) {
            if ($ordComprovar->enviat == 1) {
                $comptador++;
            }
        }
        if ($comptador == count($ordre)) {
            $ordreEnviada = Order::find($ord->id_ordre);
            $ordreEnviada->enviat = 1;
            $ordreEnviada->save();
        }
        return true;
    }
    public function ordreRebuda($id)
    {
        $ordre = Order::find($id);
        $ordre->rebut = 1;
        $ordre->save();

    }
}
