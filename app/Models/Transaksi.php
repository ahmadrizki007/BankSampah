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
    ];

    // protected function CreatedAtFormatted(): Attribute
    // {
    //     return Attribute::get(
    //         fn() => $this->created_at->format('d-m-y')
    //     );
    // }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
