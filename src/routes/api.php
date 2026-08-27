<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PonenteController;
use App\Http\Controllers\AsistenteController;

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

Route::get('/asistentes', [AsistenteController::class, 'index']);

Route::get('/asistentes/{asistente}', [AsistenteController::class, 'show']);

Route::post('/asistentes', [AsistenteController::class, 'store']);

Route::put('/asistentes/{asistente}', [AsistenteController::class, 'update']);

Route::delete('/asistentes/{asistente}', [AsistenteController::class, 'destroy']);