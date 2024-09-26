<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Controllers\AdminPanelController::class, 'dashboard'])->name('dashboard');

Route::resource('/categories',Controllers\CategoryController::class);

Route::get('/orders',[Controllers\OrderController::class, 'index'])->name('orders.index');
