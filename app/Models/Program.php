<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    protected $table = 'programs';

    protected $fillable = [
        'id',
        'nama',
    ];

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
