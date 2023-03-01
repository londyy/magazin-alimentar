<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produs extends Model
{
    use HasFactory;
    // specificam numele tabelului din baza de date
    protected $table = 'produse';
//    public $timestamps = false;

    // scoate protectia cimpurilor din tabel,
    // ca sa fie accesibile
    protected $guarded = [];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

}
