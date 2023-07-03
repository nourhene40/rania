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
    return view('welcome');
});
Route::get('test', function () {
    return view('test');
});

Route::get('aa', function () {
    return view('aa');
});

Route::get('bb', function () {
    return view('bb');
});
Route::get('ph', function () {
    return view('ph');
});
Route::get('loc', function () {
    return view('loc');
});