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



Route::group(['as' => 'web.'], function () {
    Route::get('/', function () {
        return view('web.home');
    })->name('home');
    
    Route::get('/products', function () {
        return view('web.products');
    })->name('products');

    Route::get('/about', function () {
        return view('web.about');
    })->name('about');

    Route::get('/contact', function () {
        return view('web.contact');
    })->name('contact');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
