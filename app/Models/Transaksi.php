<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'nama_nasabah',
        'berat',
        'harga',
        'user_id',
        'data_sampah_id',
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function DataSampah(): BelongsTo
    {
        return $this->belongsTo(
            DataSampah::class
        );
    }

    public function usersanonym(): BelongsTo
    {
        return $this->belongsTo(UsersAnonym::class, 'user_anonym_id');
    }
}
