<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScanController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ScanController::class, 'qr']);
Route::get('/scan', [ScanController::class, 'index']);

Route::post('/scan/verify', [ScanController::class, 'verify'])->middleware('throttle:5,1');
