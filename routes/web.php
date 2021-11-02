<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, ErrorController, DownloadsController};

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/soon', [HomeController::class, 'soon']);
Route::post('/whatnow', [DownloadsController::class, 'whatnow'])->name('download.book');
Route::get('/download/{hash}', [DownloadsController::class, 'download'])->name('download');
Route::fallback([ErrorController::class, 'error']);
