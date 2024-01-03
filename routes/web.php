<?php

    use App\Http\Controllers\Auth\SocialLoginController;
    use Illuminate\Foundation\Application;
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
    return Inertia::render('Hall');
})->name('hall');

Route::get('/profile', function () {
    return Inertia::render('Influencers/Show');
})->name('influencers.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
