<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationchaudAppreciation extends Model
{
    protected $table = 'evaluationchaud_appreciations';

    protected $fillable = [
        'id_evaluationchaud', 'appreciation',
        'evaluation', 'note'];
}
