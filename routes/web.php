<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\UserController;
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

// Auth Routes
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/logout', [LogoutController::class, 'logout'])->name('auth.logout');

// User Routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('pages.index', ['title' => 'Dashboard']);
    })->name('dashboard');
    Route::get('/order', [DriverController::class, 'index'])->name('order');
    Route::get('/history/{user}', [OrderHistoryController::class, 'index'])->name('history');
    Route::get('/profile/{user}', [UserController::class, 'show'])->name('profile');
    Route::put('/profile/{user}', [UserController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{user}', [UserController::class, 'destroy'])->name('profile.delete');

    Route::post('order', [OrderHistoryController::class, 'store'])->name('order.store');
});
