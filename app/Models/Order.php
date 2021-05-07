<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use Notifiable;

    protected $fillable = [
        'id_usuari', 'direccio', 'cp', 'poblacio', 'provincia', 'pagat', 'enviat', 'rebut',
    ];

    //taula
    protected $table = 'orders';

    protected function user()
    {
        return $this->belongsTo('App\User', 'id_usuari');
    }

}
