<?php

use App\Http\Controllers\RetreatApplicationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/gurukulam', 'gurukulam')->name('gurukulam');
Route::view('/shanti-nilayam', 'shanti-nilayam')->name('shanti');
Route::view('/courses', 'courses')->name('courses');
Route::view('/masters', 'masters')->name('masters');
Route::redirect('/teachers', '/masters', 301);
Route::view('/support-us', 'support')->name('support');
Route::view('/contact', 'contact')->name('contact');
Route::get('/retreat-application', [RetreatApplicationController::class, 'create'])->name('application.create');
Route::post('/retreat-application', [RetreatApplicationController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('application.store');
