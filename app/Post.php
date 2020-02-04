<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Overtrue\LaravelFollow\Traits\CanBeLiked;

class Post extends Model
{
    use CanBeLiked;

    protected $fillable = [
        'author', 'desc', 'imageTweet'
    ];
}
