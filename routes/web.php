<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/gurukulam', 'gurukulam')->name('gurukulam');
Route::view('/shanti-nilayam', 'shanti-nilayam')->name('shanti');
Route::view('/courses', 'courses')->name('courses');
Route::view('/teachers', 'teachers')->name('teachers');
Route::view('/support-us', 'support')->name('support');
Route::view('/contact', 'contact')->name('contact');
