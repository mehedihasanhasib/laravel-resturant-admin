<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// user interface
Route::get('/', [HomeController::class, 'index'])->name('home');



// Admin auth(login/registration) route
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginCheck', [AuthController::class, 'loginCheck'])->name('loginCheck');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'index']);


// admin route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin')->middleware('AdminMiddleware');
Route::get('/add_menue', [DashboardController::class, 'add_menue'])->name('add_menue')->middleware('AdminMiddleware');
Route::post('/add_menue', [DashboardController::class, 'store'])->name('add_menue.store')->middleware('AdminMiddleware');
Route::get('/menue', [DashboardController::class, 'menue'])->name('menue')->middleware('AdminMiddleware');


Route::get('/add_review', [DashboardController::class, 'add_review'])->name('add_review')->middleware('AdminMiddleware');
Route::get('/manage_review', [DashboardController::class, 'manage_review'])->name('manage_review')->middleware('AdminMiddleware');

Route::get('/add_chefs', [DashboardController::class, 'add_chefs'])->name('add_chefs')->middleware('AdminMiddleware');
Route::get('/manage_chefs', [DashboardController::class, 'manage_chefs'])->name('manage_chefs')->middleware('AdminMiddleware');

Route::get('/manage_book_message', [DashboardController::class, 'manage_book_message'])->name('manage_book_message')->middleware('AdminMiddleware');