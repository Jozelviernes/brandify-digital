<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
// Services Page
Route::view('/services', 'pages.services')->name('services');

// About Page
Route::view('/about', 'pages.about')->name('about');

// Contact Page
Route::view('/contact', 'pages.contact')->name('contact');