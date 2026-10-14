<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikDanSaran extends Model
{
    use HasFactory;

    protected $table = 'kritik_dan_saran';

    protected $fillable = [
        'nama',
        'nim',
        'email',
        'kritik_saran',
    ];
}
