<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationModel extends Model
{
    use HasFactory;
    protected $table = 'consultation_models';
    protected $fillable = [
        'nama',
        'phone',
        'jurusan',
        'jenjang',
        'universitas',
        'email',
        'angkatan',
        'judul_penelitian',
        'info',
        'kds',
    ];
}
