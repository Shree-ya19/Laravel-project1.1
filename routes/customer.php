<?php

use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',[CustomerController::class,'dashboard'])->name('dashboard');
Route::put('logout',[CustomerAuthController::class,'logout'])->name('logout');
    
Route::resource('order',OrderController::class);        
Route::post('add_to_cart/{product}',[OrderController::class,'addToCart'])->name('addToCart');
