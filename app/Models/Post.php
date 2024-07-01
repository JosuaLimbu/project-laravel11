<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-project-1',
                'title' => 'Project 1',
                'author' => 'Josua Limbu',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea amet dolorum aspernatur,
                velit corporis cumque
                deserunt nobis sit porro provident quidem hic reiciendis eaque ipsa eum est minima dolorem a?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-project-2',
                'title' => 'Project 2',
                'author' => 'Josua Limbu',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi reiciendis
                ratione suscipit harum laborum autem, eligendi, dolorem dignissimos rerum odit fugit quibusdam, dolores eum
                inventore quo iure repellat eos!'
            ],
        ];
    }

    public static function find($slug): array
    {
        

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404);
        }

        return $post;
    }
}
