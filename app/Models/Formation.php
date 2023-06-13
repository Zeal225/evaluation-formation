<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table = "formations";
    protected $primaryKey = "id_formation";
    protected $fillable = ["theme_formation", "id_formateur"];

    public function formateur()
    {
        return $this->belongsTo(Formateur::class, 'id_formateur');
    }

    public function formation_utilisateur()
    {
        return $this->hasMany(FormationUtilisateur::class, 'id_formation');
    }
}
