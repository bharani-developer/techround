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
Route::group([ 'middleware' => 'auth'], function () {
Route::resource('contacts', 'App\Http\Controllers\ContactController');
Route::resource('customers', 'App\Http\Controllers\CustomerController');
Route::resource('products', 'App\Http\Controllers\ProductController');
Route::resource('joins', 'App\Http\Controllers\JoinsController');
Route::resource('orders', 'App\Http\Controllers\OrderController');

});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');