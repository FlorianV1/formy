<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicFormController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Root redirect - send users to welcome page
Route::get('/', function () {
    return redirect('/welcome');
});

// Welcome page (public)
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Authentication routes (only accessible when not authenticated)
Route::middleware('guest')->group(function () {
    // Login routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Registration routes
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Logout route (accessible when authenticated)
Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Protected admin routes - redirect to welcome if not authenticated
Route::get('/admin/{path?}', function () {
    return redirect('/welcome');
})->where('path', '.*')->middleware('guest');

// Public form routes (accessible to everyone)
Route::get('/f/{username}/{form_slug}', [PublicFormController::class, 'show'])
    ->name('public.form')
    ->where([
        'username' => '[a-zA-Z0-9._-]+',
        'form_slug' => '[a-zA-Z0-9._-]+'
    ]);

Route::post('/f/{username}/{form_slug}', [PublicFormController::class, 'submit'])
    ->name('public.form.submit')
    ->where([
        'username' => '[a-zA-Z0-9._-]+',
        'form_slug' => '[a-zA-Z0-9._-]+'
    ]);

// Redirect old formy URLs to new structure (for backward compatibility)
Route::redirect('/formy/{username}/{form_slug}', '/f/{username}/{form_slug}', 301);

// Catch-all route for 404 errors (should be last)
Route::fallback(function () {
    abort(404);
});
