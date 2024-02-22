<?php

namespace App\Http\Controllers\Influencers\Guests;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfluencerRequest;
use App\Models\Influencers\InfluencerSuggestion;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class SuggestInfluencerController extends Controller
{
    public function index() : Response|RedirectResponse
    {
        if (! auth()->user()->isRoot()) {
            return to_route('dashboard');
        }

        return Inertia::render('Influencers/Suggestions/Index', [
            'suggestions' => InfluencerSuggestion::query()->latest()->get()
        ]);
    }

    public function create() : Response
    {
        return Inertia::render('Influencers/Suggestions/Create');
    }

    public function store(InfluencerRequest $request) : RedirectResponse
    {
        InfluencerSuggestion::create($request->validated());

        return to_route('hall')->with('flash', 'Your Suggestion has been submitted. Thank you!');
    }
}
