<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [PageController::class,'index'])->name('home');
Route::get('/new-order', [OrderController::class, 'newOrder'])->name('newOrder');
Route::get('/detail-order', [OrderController::class, 'detailOrder'])->name('step-2');
Route::get('/proceed-order', [OrderController::class, 'proceedOrder'])->name('step-3');
Route::post('/customer', [CustomerController::class, 'register'])->name('register');
