<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appreciation extends Model
{
    use HasFactory;
    protected $table = "appreciations";
    protected $primaryKey = "id";
    protected $fillable = [
        "libelle_appreciation",
        "categorie_appreciation_id"
    ];

    public function categorieAppreciation()
    {
        return $this->belongsTo(CategorieAppreciation::class);
    }
}
