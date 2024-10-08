<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'ref', 'description', 'prix_vent', 'prix_de_mout', 'quantite', 'categorie', 'sous_categorie', 'indicator_01', 'indicator_02', 'indicator_03'
    ];

    public function ventes(){
        return $this->hasMany(Vente::class);
    }

}
