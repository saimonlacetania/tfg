<?php

namespace App\Http\Controllers;

use App\Models\Producte;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{

    public function veureWishlist()
    {
        $id = Auth::id();

        $whishlist = Wishlist::with('productes')
            ->where('id_usuari', $id)
            ->get();

        return $whishlist;
    }

    public function afegirWishlist($id_producte)
    {
        $producte = Producte::find($id_producte);
        $id = Auth::id();
        $whishlist = Wishlist::where('id_usuari', $id)
            ->where('id_productes', $id_producte)
            ->get();
        if (count($whishlist) > 0) {
            return $id;
        } else {
            Wishlist::create([
                'id_usuari' => $id,
                'id_productes' => $producte->id,
            ]);
            return $id;
        }
    }

    public function eliminarWishlist($id_whishlist)
    {
        $whishlist = Wishlist::find($id_whishlist);
        $whishlist->delete();
        return true;
    }

}
