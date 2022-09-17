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

<<<<<<< HEAD
Route::get('/', function () {
    return view('step-1');
});
=======
Route::get('/', [PageController::class,'index'])->name('home');
Route::get('/new-order', [OrderController::class, 'newOrder'])->name('newOrder');
Route::get('/detail-order', [OrderController::class, 'detailOrder'])->name('step-2');
Route::get('/proceed-order', [OrderController::class, 'proceedOrder'])->name('step-3');
Route::post('/customer', [CustomerController::class, 'register'])->name('register');
>>>>>>> 66cb4cdc8c87558ef38b76c735aa9779eba32761
