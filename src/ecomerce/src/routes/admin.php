<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagsController;
use Illuminate\Support\Facades\Route;

Route::group([
  'middleware' => ['auth', 'valid_role:admin'],
  'prefix' => 'admin',
  'as' => 'admin.',
], function () {

  Route::get('/', function () {
    return view('admin.dashboard');
  })->name('dashboard');

  Route::middleware(['active'])->group(function () {
    // Route::get('/', [RoleController::class ,'index'])->name('roles.index');
    Route::resource('roles',RoleController::class);
  });

  Route::middleware(['active'])->group(function () {
    // Route::get('/', [TagsController::class ,'index'])->name('tags.index');
    Route::resource('tags',TagsController::class);
  });

});
