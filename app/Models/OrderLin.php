<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class OrderLin extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_ordre', 'id_producte', 'quantitat', 'id_botiga', 'enviat',
    ];

    //taula
    protected $table = 'orders_lin';

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'id_ordre');
    }
    public function productes()
    {
        return $this->belongsTo('App\Models\Producte', 'id_producte');
    }

}
