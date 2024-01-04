<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialAccount extends Model
{
    protected $fillable = [
        'driver',
        'client_id',
        'avatar',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
