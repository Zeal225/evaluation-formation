<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    use HasFactory;


    protected $table = "objectifs";
    protected $primaryKey = "id";
    protected $fillable = ["libelle_objectif", "note_objectif"];
}
