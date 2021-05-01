<?php

namespace App\Models;

<<<<<<< HEAD
=======

>>>>>>> origin/ian2
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Producte extends Model
{
<<<<<<< HEAD
=======
    use Notifiable;
>>>>>>> origin/ian2

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
