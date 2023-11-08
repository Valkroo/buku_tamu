<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[ FrontendController::class, 'index']);
Route::post('/',[ FrontendController::class, 'store']);
Route::get('/data-disimpan',[ FrontendController::class, 'info']);
Route::get('/login',[ FrontendController::class, 'login']);
