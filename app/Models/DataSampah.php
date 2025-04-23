<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataSampah extends Model
{
    protected $table = 'data_sampah';
    protected $fillable = [
        'jenis_sampah',
        'harga',
    ];


    public function Transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }

}
