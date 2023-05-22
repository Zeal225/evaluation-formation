<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieAppreciation extends Model
{
    use HasFactory;
    //
    protected $table = "categorie_appreciations";
    protected $primaryKey = "id";
    protected $fillable = ["libelle_categorie_appreciation"];
}
