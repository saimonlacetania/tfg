<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Botiga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','descripcio', 'telf_1', 'telf_2', 'direccio', 'cp', 'poblacio', 'provincia', 'email', 'instagram', 'facebook', 'twitter', 'nif', 'cif'
    ];

    //taula
    protected $table = 'botigues';

    protected function user()
    {
        return $this->belongsTo('App\Models\User', 'id_usuari');
    }
}
