<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'can:manage-users']], function () {
    Route::get('/users', [UserController::class ,'index'])->name('users.index');
    Route::get('/users/{user}/edit', [UserController::class ,'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class ,'update'])->name('users.update');
});

