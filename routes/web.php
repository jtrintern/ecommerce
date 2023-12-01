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

Route::group(['middleware' => ['role:admin', 'auth', 'verified'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');

    Route::get('/product', function () {
        return view('admin.page.show_product');
    })->name('admin.product');

    Route::get('/category', function () {
        return view('admin.page.show_category');
    })->name('admin.category');

    Route::get('/product/add', function () {
        return view('admin.page.add_product');
    })->name('admin.add.product');

    Route::get('/orders', function () {
        return view('admin.page.orders');
    })->name('admin.orders');
});

Route::group(['middleware' => ['role:user', 'auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});