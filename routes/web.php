<?php

use App\Http\Controllers\Auth\SocialLoginController;
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
    return Inertia::render('Hall', ['influencers' => Influencer::all()]);
})->name('hall');

Route::get('/influencers/{influencer:x_handle}', [
    InfluencerController::class,
    'show'
])->name('influencers.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'influencers' => Influencer::all(),
        ]);
    })->name('dashboard');
});
