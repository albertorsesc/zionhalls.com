<?php

namespace App\Http\Controllers\Influencers;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfluencerRequest;
use App\Models\Influencers\Influencer;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class InfluencerController extends Controller
{
    public function index() : Response|RedirectResponse
    {
        if (! auth()->user()->isRoot()) {
            return to_route('dashboard');
        }

        return Inertia::render('Influencers/Index', [
            'influencers' => Influencer::query()->orderBy('name')->get()
        ]);
    }

    public function create() : Response|RedirectResponse
    {
        if (! auth()->user()->isRoot()) {
            return to_route('dashboard');
        }

        return Inertia::render('Influencers/Create');
    }

    public function store(InfluencerRequest $request) : RedirectResponse
    {
        if (! auth()->user()->isRoot()) {
            return to_route('dashboard');
        }

        Influencer::create($request->validated());

        return to_route('influencers.index');
    }

    public function show(Influencer $influencer) : Response
    {
        return Inertia::render('Influencers/Show', [
            'influencer' => $influencer
        ]);
    }
}
