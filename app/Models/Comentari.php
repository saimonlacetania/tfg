<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Comentari extends Model
{
    use Notifiable;

    //taula
    protected $table = 'comentaris';

    protected $fillable = [
        'descripcio', 'valoracio','id_usuari','id_producte'
    ];

    //mètodes
    //un comentari un usuari
    public function user()
    {
        return $this->belongsTo("App\User", "id_usuari");
    }

    //un comentari un producte
    public function producte()
    {
        return $this->belongsTo("App\Models\Producte", "id_producte");
    }
}
