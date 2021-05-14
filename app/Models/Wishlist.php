<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Wishlist extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_usuari', 'id_productes',
    ];

    //taula
    protected $table = 'wishlist';

    protected function user()
    {
        return $this->belongsTo('App\User', 'id_usuari');
    }
    public function productes()
    {
        return $this->belongsTo('App\Models\Producte', 'id_productes');
    }
}
