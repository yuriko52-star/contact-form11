<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebugController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

// local環境でのみ有効にする（安全のため）
if (app()->environment('local')) {
    Route::get('/debug/{view}', [DebugController::class, 'show'])->where('view', '.*');
}

Route::get ('/',[ContactController::class, 'index']);
Route::post('/contacts/confirm',[ContactController::class,'confirm']);
Route::post('/contacts',[ContactController::class,'store']);
