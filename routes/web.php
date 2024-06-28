<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page/home/home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('page/about/about', ['name' => 'Josua Limbu', 'title' => 'About']);
});

Route::get('/blog', function () {
    return view('page/blog/blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('page/contact/contact', ['title' => 'Contact']);
});