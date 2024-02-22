<?php

namespace App\Models\Influencers;

use App\Enums\InfluencerSuggestionStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfluencerSuggestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'known_as',
        'x_handle',
        'bio',
        'quote',
        'profile_image',
        'banner_image',
        'country_location',
        'country_origin',
        'country_raised',
        'estimated_networth',
        'status',
        'user_id',
        'approved_at',
        'rejected_at',
        'rejected_reason',
    ];

    protected $casts = [
        'approved_at' => 'datetime',
        'rejected_at' => 'datetime',
        'status' => InfluencerSuggestionStatusEnum::class,
    ];

    protected static function boot() : void
    {
        parent::boot();

        static::creating(function (InfluencerSuggestion $suggestion) {
            $suggestion->user_id = auth()->id() ?? null;
            $suggestion->status = InfluencerSuggestionStatusEnum::Pending;
        });
    }
}
