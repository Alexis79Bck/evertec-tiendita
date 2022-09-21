<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
Route::controller(OrderController::class)->group(function () {
    Route::get('/orders', 'index')->name('orders');
    Route::get('/order/new-order', 'create')->name('create');
    Route::post('/order/new-order', 'accept')->name('accept');
    Route::get('/order/detail-order', 'detail')->name('detail');
    Route::get('/order/proceed-order', 'proceed')->name('proceed');
});

