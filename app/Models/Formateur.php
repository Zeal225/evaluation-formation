<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $table = "formateurs";
    protected $primaryKey = "id";
    protected $fillable = ["nom_formateur", "prenom_formateur", "email_formateur", "tel_formateur", "specialite_formateur", "cabinet_id", "password"];

    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class);
    }
}
