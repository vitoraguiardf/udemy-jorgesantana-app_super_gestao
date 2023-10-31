<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::view('/', 'welcome')->name('welcome');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Auth
Route::view('/vendors', 'vendors.index')->name('vendors');
Route::view('/customers', 'customers.index')->name('customers');
Route::view('/products', 'products.index')->name('products');
Route::view('/sales', 'sales.index')->name('sales');

Route::get('/home', 'HomeController@index')->name('home');
