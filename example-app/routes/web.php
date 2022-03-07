<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view("hello_world");
});
Route::get('/product', function () {
    return view("product");
});
Route::get('/product/id', function () {
    return view("id");
});
Route::get('/cart', function () {
    return view("cart");
});
