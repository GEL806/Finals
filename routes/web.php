<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderformsController;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('Contact');
Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('Order');



Route::get('/orderforms', [App\Http\Controllers\OrderformsController::class, 'index'])->name('orderforms');
Route::post('/orderforms', [App\Http\Controllers\OrderformsController::class, 'store'])->name('orderforms.store');

