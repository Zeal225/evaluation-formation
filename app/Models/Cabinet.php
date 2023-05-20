<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    use HasFactory;

    protected $table = "cabinets";
    protected $primaryKey = "id";
    protected $fillable = ["nom_cabinet", "adresse_cabinet"];
}
