<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Botiga extends Model
{
    use Notifiable;

    protected $fillable = [
        'nom','descripcio', 'telf_1', 'telf_2', 'id_usuari', 'direccio', 'cp', 'poblacio', 'provincia', 'email','img_perfil','img_portada', 'instagram', 'facebook', 'twitter', 'nif', 'cif'
    ];

    //taula
    protected $table = 'botigues';

    public function user()
    {
        return $this->belongsTo('App\User', 'id_usuari');
    }

    public function productes()
    {
        return $this->hasMany('App\Models\Producte','id_botiga');
    }
}
