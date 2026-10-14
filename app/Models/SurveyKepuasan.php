<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyKepuasan extends Model
{
    use HasFactory;

    protected $table = 'survey_kepuasan';

    protected $fillable = [
        'nama',
        'nim',
        'semester',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
        'q10',
        'q11',
        'mk_tidak_maksimal',
        'saran',
    ];
}
