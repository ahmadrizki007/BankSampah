<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UsersAnonym extends Model
{
    protected $table = 'users_anonyms';
    protected $fillable = [
        'nama',
        'nomor_telepon'
    ];

    public function transaksi(): HasOne
    {
        return $this->hasOne(Transaksi::class);
    }

    public function penarikan(): HasOne
    {
        return $this->hasOne(Transaksi::class);
    }
}
