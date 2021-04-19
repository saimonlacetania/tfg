<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> develop
use Illuminate\Database\Eloquent\Model;

class Comentari extends Model
{
<<<<<<< HEAD
    //
=======
    use HasFactory;

    //taula
    protected $table = 'comentaris';

    //mètodes
    //un comentari un usuari
    public function user()
    {
        return $this->belongsTo("App\Models\User", "id_usuari");
    }

    //un comentari un producte
    public function producte()
    {
        return $this->belongsTo("App\Models\User", "id_producte");
    }
>>>>>>> develop
}
