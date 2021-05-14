<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use Notifiable;

    protected $fillable = [
        'nom'
    ];

    //taula
    protected $table = 'categories';
}
