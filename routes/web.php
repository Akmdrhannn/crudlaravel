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
// Cart Controller
Route::get('/cart', [cartController::class, 'index']);
// Product Controller
Route::get('/products', [productsController::class, 'index']);
// Route::get('/products/find', [productsController::class, 'find']);
Route::get('/products/add', [productsController::class, 'create']);
Route::get('/products/{id}/edit', [productsController::class, 'edit']);
Route::get('/products/{id}/delete', [productsController::class, 'destroy']);

Route::post('/products',[productsController::class,'store']);
route::put('/products/{id}',[productsController::class,'update']);
// Categories Controller
Route::get('/categories', [categoriesController::class, 'index']);
Route::get('/categories/add',[categoriesController::class,'create']);
Route::get('/categories/{id}/edit',[categoriesController::class,'edit']);
Route::get('/categories/{id}/delete',[categoriesController::class,'destroy']);
Route::post('/categories',[categoriesController::class,'store']);
Route::put('/categories/{id}',[categoriesController::class,'update']);
