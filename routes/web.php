<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page/home/home');
});

Route::get('/about', function () {
    return view('page/about/about', ['nama' => 'Josua Limbu']);
});

Route::get('/blog', function () {
    return view('page/blog/blog');
});

Route::get('/contact', function () {
    return view('page/contact/contact');
});