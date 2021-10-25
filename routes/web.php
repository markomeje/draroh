<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, ErrorCotroller, DownloadsController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/whatnow', [DownloadsController::class, 'whatnow']);
Route::fallback([ErrorCotroller::class, 'error']);
