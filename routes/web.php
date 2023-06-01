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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index')->middleware('auth');
Route::get('users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create')->middleware('auth');
Route::post('users/store', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store')->middleware('auth');
Route::get('users/{id}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit')->middleware('auth');
Route::put('users/{id}/update', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update')->middleware('auth');
Route::delete('users/{id}/destroy', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');
