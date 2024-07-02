<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $table = 'blog_posts';
//    protected $primaryKey = 'post_id';

    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
