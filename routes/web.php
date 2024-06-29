<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Josua Limbu', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Project 1',
            'author' => 'Josua Limbu',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea amet dolorum aspernatur,
            velit corporis cumque
            deserunt nobis sit porro provident quidem hic reiciendis eaque ipsa eum est minima dolorem a?'
        ],
        [
            'id' => 2,
            'title' => 'Project 2',
            'author' => 'Josua Limbu',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi reiciendis
            ratione suscipit harum laborum autem, eligendi, dolorem dignissimos rerum odit fugit quibusdam, dolores eum
            inventore quo iure repellat eos!'
        ],
    ]]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Project 1',
            'author' => 'Josua Limbu',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea amet dolorum aspernatur,
            velit corporis cumque
            deserunt nobis sit porro provident quidem hic reiciendis eaque ipsa eum est minima dolorem a?'
        ],
        [
            'id' => 2,
            'title' => 'Project 2',
            'author' => 'Josua Limbu',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi reiciendis
            ratione suscipit harum laborum autem, eligendi, dolorem dignissimos rerum odit fugit quibusdam, dolores eum
            inventore quo iure repellat eos!'
        ],
    ];

    $post = Arr::first($posts, function($post) use ($id){
        return $post['id'] == $id;
    }); 
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});