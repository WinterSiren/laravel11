<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController; // Import controller

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Ini akan membuat rute seperti GET /api/tasks, POST /api/tasks, dll.
Route::apiResource('tasks', TaskController::class);