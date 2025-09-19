<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicFormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formy/{username}/{form_slug}', [PublicFormController::class, 'show'])->name('public.form');
