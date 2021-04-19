<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> develop
use Illuminate\Database\Eloquent\Model;

class Botiga extends Model
{
<<<<<<< HEAD
    //
=======
    use HasFactory;
    //taula
    protected $table = 'botigues';

    protected function user()
    {
        return $this->belongsTo('App\Models\User', 'id_usuari');
    }
>>>>>>> develop
}
