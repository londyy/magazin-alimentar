<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = 'categorii';
    protected $guarded = [];
    public $timestamps = false;

    public function produse()
    {
        return $this->hasMany(Produs::class, 'categorie_id');
    }
}
