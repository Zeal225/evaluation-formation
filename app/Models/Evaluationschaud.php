<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluationschaud extends Model
{
    protected $table = 'evaluationschauds';
    protected $fillable = [
        'id_formation', 'id_formateur',
        'id_formation_utilisateur',
        'id_cabinet', 'id_utilisateur'];

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'id_formation');
    }

    public function formateur()
    {
        return $this->belongsTo(Formateur::class, 'id_formateur');
    }

    public function formation_utilisateur()
    {
        return $this->belongsTo(FormationUtilisateur::class, 'id_formation_utilisateur');
    }

    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class, 'id_cabinet');
    }

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }
}
