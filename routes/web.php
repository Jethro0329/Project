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