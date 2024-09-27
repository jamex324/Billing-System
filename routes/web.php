<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControllers;
use Illuminate\Session\Middleware\StartSession;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/login', [LoginControllers::class, 'login'])->middleware(StartSession::class);
Route::middleware(['web'])->group(function () {
    Route::post('/login', [LoginControllers::class, 'login']);
});
