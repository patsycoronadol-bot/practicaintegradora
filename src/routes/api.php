<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PonenteController;

Route::get('/eventos', [EventoController::class, 'index']);

Route::get('/eventos/{evento}', [EventoController::class, 'show']);

Route::post('/eventos', [EventoController::class, 'store']);

Route::put('/eventos/{evento}', [EventoController::class, 'update']);

Route::delete('/eventos/{evento}', [EventoController::class, 'destroy']);

Route::get('/ponentes', [PonenteController::class, 'index']);

Route::get('/ponentes/{ponente}', [PonenteController::class, 'show']);

Route::post('/ponentes', [PonenteController::class, 'store']);

Route::put('/ponentes/{ponente}', [PonenteController::class, 'update']);

Route::delete('/ponentes/{ponente}', [PonenteController::class, 'destroy']);