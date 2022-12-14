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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home1', function () {
    return view('home1');
});

Route::get('/admin/list', function () {
    return view('layouts.list');
});

Route::get('/admin/insert', function () {
    return view('layouts.insert');
});

Route::get('test', function () {
    return view('test');
});

Route::get('products', function () {
    return view('app.products');
});

Route::get('products/insert', function () {
    return view('app.insert');
});
