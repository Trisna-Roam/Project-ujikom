<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('profile', [AuthController::class, 'profile'])->name('profile');
    
});

Route::middleware(['auth'])->group(function() {
    Route::get('list', [ProductController::class, 'showIndex'])->name('view.index');
    Route::get('show/{id}', [ProductController::class, 'viewShow'])->name('viewShow');
});




Route::middleware(['auth', 'admin'])->group(function () {
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('dashboard', function() {
            return view('dashboard');
        })->name('dashboard');
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });
});

    Route::get('profile', [\App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

