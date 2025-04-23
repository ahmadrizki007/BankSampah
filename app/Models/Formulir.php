<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    protected $table = 'formulir';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_telepon',
        'instansi',
        'tujuan_kunjungan',
    ];
}
