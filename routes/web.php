<?php

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

Route::get('/', function () {
    return 'Hello, Laravel!';
});

Route::get('/hello', function () {
    return 'JANGAN SALAH PASANGAN';
});

Route::get('/about', function () {
    return 'Ini adalah halaman tentang Laravel';
});

Route::get('/home', function () {
    return 'Ini adalah halaman Home!';
});
