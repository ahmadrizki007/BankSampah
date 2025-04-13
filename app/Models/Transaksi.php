<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'nama_nasabah',
        'berat',
        'harga',
    ];
}
