<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSampah extends Model
{
    protected $table = 'data_sampah';
    protected $fillable = [
        'jenis_sampah',
        'harga',
    ];

}
