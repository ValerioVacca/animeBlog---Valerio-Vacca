<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// rotta parametrica per il dettaglio
Route::get('/anime/{id}', [PublicController::class, 'show'])->name('anime.show');

// proviamo a vedere se i dati messi a disposizione grazi ad api.php + ApiController, sono all'interno del mio progetto Laravel -> facendo finta che quei dati degli anime li ho estrapolati da un database

Route::get('/API', [ApiController::class, 'API'])->name('API');