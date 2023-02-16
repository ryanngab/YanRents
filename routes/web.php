<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BarangController;
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







Route::middleware(['auth'])->group(function () {
    Route::get('/{barang:id}/detail',[LoginController::class, 'detail'])->name('partials.detail');
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::resource('dashboard/user', MotorController::class);
    // Route::get('/dashboard/create' ,[MotorController::class, 'index'])->name('login');
    // Route::get('/dashboard/create' ,[MotorController::class, 'edit'])->name('login');
    // Route::put('/dashboard/{id}/edit' ,[MotorController::class, 'update'])->name('user.update');



});

Route::get('/dash',[LoginController::class, 'indexDash'])->name('dashboard.indexDash');

Route::middleware(['guest'])->group(function () {
    Route::get('/login' ,[LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authanticate']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::get('/',[LoginController::class, 'landing'])->name('landing');



// route untuk memberikan function store dari RegisterController kepada /register yang mana methodnya POST

Route::middleware(['Admin', 'Admin:1'])->group(function () {
        Route::get('/dashboard/category',[CategoryController::class, 'index'])->name('category.index');
        Route::resource('dashboard', BarangController::class);
});