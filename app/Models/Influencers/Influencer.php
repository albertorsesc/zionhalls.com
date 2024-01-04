<?php

namespace App\Models\Influencers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'known_as',
        'bio',
        'profile_image',
        'banner_image',
        'country_location',
        'country_origin',
        'country_raised',
        'estimated_networth',
    ];
}
