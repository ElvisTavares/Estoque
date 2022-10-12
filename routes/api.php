<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


Route::prefix('v1')->group(function(){
   // Route::get('/product/list', [App\Http\Controllers\ProductController::class, 'index'])->name('list');
 //   Route::post('/product/create', [ProductController::class, 'store'])->name('store');
  //  Route::post('/product', [ProductController::class, 'update'])->name('update');
    Route::resource('/product', ProductController::class);
});