<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

Route::group([
	'middleware' => ['auth', 'valid_role:admin'],
	'prefix' => 'admin',
	'as' => 'admin.',
], function () {

	Route::get('/dashboard', function () {
		return view('pages.admin.dashboard');
	})->name('dashboard.index');

	Route::middleware(['active'])->group(function () {
		// Route::get('/', [RoleController::class ,'index'])->name('roles.index');
		Route::resource('roles', RoleController::class);
	});

	Route::middleware(['active'])->group(function () {
		Route::resource('tags', TagController::class);
	});
	Route::middleware(['active'])->group(function () {
		Route::resource('blogs', BlogController::class);
	});
});
