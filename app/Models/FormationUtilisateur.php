<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationUtilisateur extends Model
{
    use HasFactory;

    protected $table = "formation_utilisateur";
    protected $primaryKey = "id";
    protected $fillable = ["id_utilisateur", "id_formation", 'date_debut', 'date_fin', 'heure_debut', 'heure_fin', 'lieu_formation'];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'id_formation');
    }

}
