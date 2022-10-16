<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
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
    return view('layout.clients.home');
});
Route::get('login', [AuthController::class, 'showLoginForm'])->name('showLogin');
Route::get('register', [AuthController::class, 'showRegister'])->name('showRegister');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('user', UsersController::class);
});
