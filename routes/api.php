<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('testing', function () {
//     return 'this is a test api';
// });

Route::post('add-product', [ProductsController::class, 'adding']);
Route::PUT('edit-product', [ProductsController::class, 'edit']);
Route::delete('delete-product', [ProductsController::class, 'delete']);
Route::get('getdata', [ProductsController::class, 'getData']);