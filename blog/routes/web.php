<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/feedback', function () {
    return view('contact');
})->name('contact');

Route::get('contact/all', [ContactController::class, 'allData'])->name('contact-data');

Route::get('contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('contact-id');

Route::get('contact/all/{id}/update', [ContactController::class, 'oneMessageUpdate'])->name('contact-update');

Route::get('contact/all/{id}/delete', [ContactController::class, 'messageDelete'])->name('contact-delete');

Route::post('contact/all/{id}/up', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');
