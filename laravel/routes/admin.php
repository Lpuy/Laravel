<?php

use App\Http\Controllers\Admin\{GoodsController, AuthController, HomeController};
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
Route::get('login', function () {
    return view('admin.auth.login');
})->name('admin_login');
Route::post('login/submit', [AuthController::class, 'adminLoginSubmit'])->name('admin_login_submit');
});

Route::middleware('auth:admin')->group(function () {
    Route::resource('goods', GoodsController::class);
    Route::get('home', [HomeController::class, 'showHome'])->name('admin_home');
    Route::get('logout', [HomeController::class, 'logout'])->name('admin_logout');
});
