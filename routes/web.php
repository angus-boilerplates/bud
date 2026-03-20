<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.public.home');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'pages.dashboard')->name('dashboard');
});

// System information
Route::get('/version', [SystemController::class, 'version']);
Route::get('/info', [SystemController::class, 'info']);

// Privacy Policy
Route::get('/privacy-policy', [AboutController::class, 'privacyPolicy'])->name('privacy-policy');


require __DIR__.'/settings.php';
