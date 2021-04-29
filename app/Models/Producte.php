<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producte extends Model
{

    protected $fillable = [
        'ref', 'nom', 'descripcio', 'preu', 'stock', 'actiu', 'id_categoria'
    ];

    //taula
    protected $table = 'productes';

    //mètodes
    //id de botiga
    public function botiga()
    {
        return $this->belongsTo("App\Models\Botiga", "id_botiga");
    }

    public function categoria()
    {
        return $this->belongsTo("App\Models\Categoria", "id_categoria");
    }

}
