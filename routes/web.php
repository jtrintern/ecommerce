<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::group(['middleware' => ['role:admin', 'auth', 'verified'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');

    Route::get('/product', [ProductController::class , 'index'])->name('indexProduct');
    Route::get('/product/add', [ProductController::class , 'create'])->name('addProduct');
    Route::post('/storeProduct', [ProductController::class , 'store'])->name('storeProduct');

    Route::get('/category', [CategoryController::class , 'index'])->name('indexCategory');
    Route::post('/storeCategory', [CategoryController::class , 'store'])->name('storeCategory');
    Route::get('/deleteCategory/{category}', [CategoryController::class , 'destroy'])->name('deleteCategory');
    Route::post('/editCategory/{category}', [CategoryController::class , 'update'])->name('editCategory');

    Route::get('/orders', function () {
        return view('admin.page.orders');
    })->name('admin.orders');
});

Route::group(['middleware' => ['role:user', 'auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});