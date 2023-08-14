<?php

use App\Http\Controllers\Web\BlogController;
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
		return view('pages.web.home');
	})->name('home.index');

	Route::get('/welcome', function () {
		return view('welcome');
	})->name('welcome.index');

	Route::group(['prefix' => 'products',], function () {
		Route::get('/', function () {
			return view('pages.web.products.index');
		})->name('products.index');
	});

	Route::group(['prefix' => 'blogs',], function () {
		Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
	});

	Route::get('/about', function () {
		return view('pages.web.about');
	})->name('about.index');

	Route::get('/contact', function () {
		return view('pages.web.contact');
	})->name('contact.index');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
