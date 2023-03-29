<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\isLogin;

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

// Auth controller
Route::get('/logreg/login', [isLogin::class, 'index']);

// Cart Controller
Route::get('/cart',[cartController::class,'index']);
Route::get('/cart',[cartController::class,'create']);
Route::post('/cart',[cartController::class,'store']);
Route::get('/cart/{id}',[cartController::class,'edit']);
Route::get('/cart/{id}',[cartController::class,'update']);
Route::get('/cart/{id}/delete',[cartController::class,'destroy']);
// Product Controller
Route::get('/products', [productsController::class, 'index']);
Route::get('/products/add', [productsController::class, 'create']);
Route::get('/products/{id}/edit', [productsController::class, 'edit']);
Route::get('/products/{id}/delete', [productsController::class, 'destroy']);

Route::post('/products',[productsController::class,'store']);
route::put('/products/{id}',[productsController::class,'update']);

Route::get('/products/cgdashboard',[productsController::class,'dashboard']);
// Categories Controller
Route::get('/categories', [categoriesController::class, 'index']);
Route::get('/categories/add',[categoriesController::class,'create']);
Route::get('/categories/{id}/edit',[categoriesController::class,'edit']);
Route::get('/categories/{id}/delete',[categoriesController::class,'destroy']);

Route::post('/categories',[categoriesController::class,'store']);
Route::put('/categories/{id}',[categoriesController::class,'update']);

Route::get('/categories/cgdashboard',[categoriesController::class,'dashboard']);
