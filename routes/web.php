<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UploadController;
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

Route::get('/',[FrontendController::class,'index'])->name('welcome');
Route::get('about',[FrontendController::class,'about'])->name('about');

Route::get('contact',[FrontendController::class,'contact'])->name('contact');

Route::get('home',[FrontendController::class,'home'])->name('home');

Route::get('category',[FrontendController::class,'category'])->name('category');

Route::get('product',[FrontendController::class,'product'])->name('product');

Route::get('cart',[FrontendController::class,'cart'])->name('cart');

Route::get('checkout',[FrontendController::class,'checkout'])->name('checkout');

Route::post('upload',[UploadController::class,'store'])->name('upload');

require __DIR__.'/auth.php';
