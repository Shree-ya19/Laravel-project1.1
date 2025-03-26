<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\SystemSettingController;
use App\Models\About;
use Illuminate\Contracts\View\View;

Route::get('/dashboard', function () {
    return View('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('profile',[DashboardController::class,'profile'])->name('profile');
Route::put('profile',[DashboardController::class,'profileUpdate'])->name('profile.update');

Route::put('logout',[DashboardController::class,'logout'])->name('profile.logout');

Route::resource('systemSetting',SystemSettingController::class);
Route::resource('about',AboutController::class);
Route::resource('feature',FeatureController::class);
Route::resource('category',CategoryController::class);

