<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FeedbackController, LoginController, RegisterController, ContactMailFormController};


Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//    Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');
//    Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-id');
//    Route::get('/contact/all/{id}/update', [ContactController::class, 'oneMessageUpdate'])->name('contact-update');
//    Route::get('/contact/all/{id}/delete', [ContactController::class, 'messageDelete'])->name('contact-delete');
//    Route::post('/contact/all/{id}/up', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');
//    Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');

});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register/submit', [RegisterController::class, 'submitRegisterForm'])->name('submit-register');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'submitLoginForm'])->name('submit-login');
    Route::post('/feedback/submit', [FeedbackController::class, 'submit'])->name('feedback-form');
});

Route::get('/contact_mail_form', [ContactMailFormController::class, 'showContactMailForm'])->name('contact-mail');
Route::post('/contact_mail_form/submit', [ContactMailFormController::class, 'submitContactMailForm'])->name('submit-contact-mail');

