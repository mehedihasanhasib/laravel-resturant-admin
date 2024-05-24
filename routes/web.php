<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


// user interface
Route::get('/', [HomeController::class, 'index'])->name('home');


// Admin auth(login/registration) route
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginCheck', [AuthController::class, 'loginCheck'])->name('loginCheck');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'index']);


// admin dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin')->middleware('AdminMiddleware');

// admin add menu
Route::get('/menue', [MenuController::class, 'index'])->name('menue')->middleware('AdminMiddleware');
Route::get('/add_menue', [MenuController::class, 'create'])->name('add_menue')->middleware('AdminMiddleware');
Route::post('/add_menue', [MenuController::class, 'store'])->name('add_menue.store')->middleware('AdminMiddleware');
Route::get('/menu/{id}', [MenuController::class, 'edit'])->name('menu.edit')->middleware('AdminMiddleware');
Route::put('/menu/{id}', [MenuController::class, 'update'])->name('menu.update')->middleware('AdminMiddleware');
Route::delete('/menu/{id}', [MenuController::class, 'destroy'])->name('menu.delete')->middleware('AdminMiddleware');

// admin add review
Route::get('/manage_review', [ReviewController::class, 'index'])->name('manage_review')->middleware('AdminMiddleware');
Route::get('/add_review', [ReviewController::class, 'create'])->name('add_review')->middleware('AdminMiddleware');
Route::post('/add_review', [ReviewController::class, 'store'])->name('review.store')->middleware('AdminMiddleware');
Route::get('/review/{id}', [ReviewController::class, 'edit'])->name('review.edit')->middleware('AdminMiddleware');
Route::put('/review/{id}', [ReviewController::class, 'update'])->name('review.update')->middleware('AdminMiddleware');
Route::delete('/review/{id}', [ReviewController::class, 'destroy'])->name('review.delete')->middleware('AdminMiddleware');

// admin add chefs
Route::get('/manage_chefs', [ChefController::class, 'index'])->name('manage_chefs')->middleware('AdminMiddleware');
Route::get('/add_chefs', [ChefController::class, 'create'])->name('add_chefs')->middleware('AdminMiddleware');
Route::post('/add_chefs', [ChefController::class, 'store'])->name('add_chefs.store')->middleware('AdminMiddleware');
Route::get('/chefs/{id}', [ChefController::class, 'edit'])->name('add_chefs.edit')->middleware('AdminMiddleware');
Route::put('/chefs/{id}', [ChefController::class, 'update'])->name('add_chefs.update')->middleware('AdminMiddleware');
Route::delete('/chefs/{id}', [ChefController::class, 'destroy'])->name('add_chefs.delete')->middleware('AdminMiddleware');

// bookings
Route::get('/manage_book_message', [DashboardController::class, 'manage_book_message'])->name('manage_book_message')->middleware('AdminMiddleware');
Route::post('/booking', [DashboardController::class, 'booking_store'])->name('booking.store')->middleware('AdminMiddleware');
