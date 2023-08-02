<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationfroidAppreciation extends Model
{
    protected $table = 'evaluationfroid_appreciations';
    protected $fillable = [
        'id_evaluationfroid',
        'id_objectif',
        'id_utilisateur', 'note'];

    public function evaluationfroid()
    {
        return $this->belongsTo(Evaluationfroid::class, 'id_evaluationfroid');
    }

    public function objectif()
    {
        return $this->belongsTo(Objectif::class, 'id_objectif');
    }

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }
}
