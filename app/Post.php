<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Overtrue\LaravelFollow\Traits\CanBeLike;

class Post extends Model
{
    use CanBeLike;
}
