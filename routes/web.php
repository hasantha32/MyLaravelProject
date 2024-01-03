<?php

use App\Http\Controllers\ProductsController;
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
    return view('welcome');
});
//Route::get('/crud', function () {
//    return view('crud');
//});
//Route::get('/products', function () {
//    return view('products');
//});

Route::view('crud', 'pages.crud');
Route::view('products', 'pages.products');
Route::post('adding', [ProductsController::class,'adding']);
//Route::post('save-products', [ProductsController::class,'save']);
Route::get('read',[ProductsController::class,'read']);
