<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penarikan extends Model
{
    protected $table = 'penarikan';
    protected $fillable = [
        'id',
        'jumlah_penarikan',
        'state',
        'catatan',
        'user_id',
        'user_anonym_id'
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function usersanonym(): BelongsTo
    {
        return $this->belongsTo(UsersAnonym::class, 'user_anonym_id');
    }
}
