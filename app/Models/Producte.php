<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Producte extends Model
{
    use Notifiable;

    protected $fillable = [
        'imatge','ref', 'nom', 'descripcio', 'preu', 'stock', 'actiu', 'id_categoria','visites','id_botiga','eliminat'
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
