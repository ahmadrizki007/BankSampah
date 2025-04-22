<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'gambar',
        'nama',
        'harga',
        'program_id',
    ];


    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
