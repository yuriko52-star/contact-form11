<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebugController;

Route::get('/', function () {
    return view('welcome');
});

// local環境でのみ有効にする（安全のため）
if (app()->environment('local')) {
    Route::get('/debug/{view}', [DebugController::class, 'show'])->where('view', '.*');
}