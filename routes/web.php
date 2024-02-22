<?php

use App\Http\Controllers\Auth\SocialLoginController;
    use App\Http\Controllers\Influencers\Guests\SuggestInfluencerController;
    use App\Http\Controllers\Influencers\InfluencerController;
use App\Models\Influencers\Influencer;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/auth/login/redirect', [
    SocialLoginController::class,
    'redirectToProvider'
])->name('social-login.redirect');

Route::get('/auth/login/callback', [
    SocialLoginController::class,
    'handleProviderCallback'
])->name('social-login.callback');

Route::view('/', 'welcome')->name('welcome');

Route::get('/zion-halls', function () {
    return Inertia::render('Hall', [
        'influencers' => Influencer::query()->orderBy('name')->get()
    ]);
})->name('hall');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'influencers' => Influencer::query()->orderBy('name')->get()
        ]);
    })->name('dashboard');

    Route::get('/influencers', [
        InfluencerController::class,
        'index'
    ])->name('influencers.index');

    Route::get('/influencers/create', [
        InfluencerController::class,
        'create'
    ])->name('influencers.create');

    Route::post('/influencers', [
        InfluencerController::class,
        'store'
    ])->name('influencers.store');
});

Route::get('/influencers/{influencer:x_handle}', [
    InfluencerController::class,
    'show'
])->name('influencers.show');

Route::get('/influencer/suggestions', [
    SuggestInfluencerController::class,
    'index'
])->name('influencers.suggestions.index');

Route::get('/influencer/suggest', [
    SuggestInfluencerController::class,
    'create'
])->name('influencers.suggestions.create');

Route::post('/influencer/suggest', [
    SuggestInfluencerController::class,
    'store'
])->name('influencers.suggestions.store');
