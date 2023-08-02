<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluationfroid extends Model
{
    protected $table = 'evaluationfroids';
    protected $fillable = [
        'id_formation',
        'id_formation_utilisateur', 'id_utilisateur', 'objectif_atteint', 'commentaire', 'note_globale'];

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'id_formation');
    }

    public function formation_utilisateur()
    {
        return $this->belongsTo(FormationUtilisateur::class, 'id_formation_utilisateur');
    }


    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }
}
