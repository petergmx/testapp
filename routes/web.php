<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoController;
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


Route::get('login', [SessionsController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->name('login.store')->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('/', [TodoController::class, 'index'])->name('home')->middleware('auth');
Route::get('todos/', [TodoController::class, 'index'])->name('todos')->middleware('auth');
Route::get('todos/{todo}/show', [TodoController::class, 'show'])->name('todos.show')->middleware('auth');
Route::get('todos/create', [TodoController::class, 'create'])->name('todos.create')->middleware('auth');
Route::post('todos/store', [TodoController::class, 'store'])->name('todos.store')->middleware('auth');
Route::get('todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit')->middleware('auth');
Route::patch('todos/{todo}/update', [TodoController::class, 'update'])->name('todos.update')->middleware('auth');
Route::delete('todos/{todo}/delete', [TodoController::class, 'destroy'])->name('todos.delete')->middleware('auth');

Route::get('categories/', [CategoryController::class, 'index'])->name('categories')->middleware('auth');
Route::get('categories/{category}/show', [CategoryController::class, 'show'])->name('categories.show')->middleware('auth');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create')->middleware('auth');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth');
Route::patch('categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update')->middleware('auth');
Route::delete('categories/{category}/delete', [CategoryController::class, 'destroy'])->name('categories.delete')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
});
