<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaydisiniController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menguji metode transaction
Route::get('/test/transaction', [PaydisiniController::class, 'testTransaction']);

// Route untuk menguji metode status
Route::get('/test/status', [PaydisiniController::class, 'testStatus']);

// Route untuk menguji metode channel
Route::get('/test/channel', [PaydisiniController::class, 'testChannel']);

// Route untuk menguji metode guide
Route::get('/test/guide', [PaydisiniController::class, 'testGuide']);
