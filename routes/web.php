<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

//HomeController
Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [HomeController::class, 'about']);

// //UserController
// Route::get('/users', [UserController::class, 'index']);

// //ProductController
// Route::get('/products', [ProductController::class, 'index']);

// Route::get('/products/{id}', [ProductController::class, 'show']);

// Route::get('/products/create', [ProductController::class, 'create']);
