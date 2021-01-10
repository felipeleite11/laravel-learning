<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DataController,
    NotificationController
};

Route::get('/', [DataController::class, 'index']);
Route::get('/data', [DataController::class, 'index']);
Route::get('/data/create', [DataController::class, 'create']);
Route::get('/data/{id}', [DataController::class, 'show']);
Route::post('/data', [DataController::class, 'store']);
Route::get('/data/{id}/edit', [DataController::class, 'edit']);
Route::put('/data/{id}', [DataController::class, 'update']);
Route::get('/data/{id}/destroy', [DataController::class, 'destroy']);

Route::get('/notification_test', [NotificationController::class, '__invoke']);
