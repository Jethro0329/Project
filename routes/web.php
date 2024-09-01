<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('resources/views/gallery.blade.php', function () {
    return view('gallery');
});

Route::get('resources/views/review.blade.php', function () {
    return view('review');
});

// web.php
Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('user', ['username' => $username]);
})->where('username', '[A-Za-z]+');
