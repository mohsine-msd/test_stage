<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    protected $fillable = [
        'ref', 'ref_articl', 'nom_client', 'date_vente', 'prix_vente', 'indicator_01'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
