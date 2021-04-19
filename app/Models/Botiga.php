<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Botiga extends Model
{
    use HasFactory;
        //taula
        protected $table = 'botigues';

        protected function user() {
            return $this->belongsTo('App\Models\User', 'id_usuari');
        }
}
