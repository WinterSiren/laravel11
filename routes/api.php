<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController; // Import EventController
use App\Http\Controllers\Api\TaskController;  // Import TaskController

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rute API untuk mendapatkan semua event
Route::get('/events', [EventController::class, 'index']);

// Rute API Resource untuk mengelola tasks
Route::get('/weather', [WeatherController::class, 'getWeather']);