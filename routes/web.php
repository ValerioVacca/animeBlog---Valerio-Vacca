<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// rotta parametrica per il dettaglio
Route::get('/anime/{id}', [PublicController::class, 'show'])->name('anime.show');