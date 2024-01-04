<?php

namespace App\Http\Controllers\Influencers;

use App\Http\Controllers\Controller;
use App\Models\Influencers\Influencer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class InfluencerController extends Controller
{
    public function show(Influencer $influencer) : Response
    {
        return Inertia::render('Influencers/Show', [
            'influencer' => $influencer
        ]);
    }
}
