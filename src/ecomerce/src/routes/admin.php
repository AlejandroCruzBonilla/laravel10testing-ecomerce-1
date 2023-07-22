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
    return view('admin.dashboard');
  })->name('dashboard');

  Route::middleware(['active'])->group(function () {
    // Route::get('/', [RoleController::class ,'index'])->name('roles.index');
    Route::resource('role', RoleController::class);
  });

  Route::middleware(['active'])->group(function () {
    Route::resource('tag', TagController::class);
  });
  Route::middleware(['active'])->group(function () {
    Route::resource('blog', BlogController::class);
  });
});
