<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjeController;
use App\Http\Controllers\UnidadController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para el controlador de Ejes:
//Make prefix /ejes:
Route::controller(EjeController::class)->group(function () {
    //Make prefix
    Route::prefix('ejes')->group(function () {
            Route::get('/', 'index');
    });

});

// Rutas para el controlador de Unidades:
Route::controller(UnidadController::class)->group(function () {
    //Make prefix
    Route::prefix('unidades')->group(function () {
            Route::get('/', 'index');
    });

});
