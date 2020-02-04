<?php

namespace App\Providers;

use App\Post;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::share('users', User::all());


        View::share('tweets', Post::all());

        // $posts = Post::all();
        // View::share('posts', $posts);
    }
}
