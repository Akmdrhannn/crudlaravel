<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\categoriesController;


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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [indexController::class, 'index']);
Route::get('cart', [cartController::class, 'index']);
Route::get('products', [productsController::class, 'index']);
Route::get('categories', [categoriesController::class, 'index']);
