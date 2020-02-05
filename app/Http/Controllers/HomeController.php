<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    protected $layout = 'layouts.app';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $tweets = Post::orderBy('created_at', 'desc')->get();
        return view('home', compact('users', 'tweets'));
    }

    public function welcome()
    {
        return view('welcome');
    }
    public function followers()
    {
        $user = Auth::user();
        $followers = $user->followers()->get();
        $followings = $user->followings()->get();
        return view('followers', compact('followers', 'followings'));
    }
    public function profile()
    {
        $user = Auth::user();
        $tweets = Post::orderBy('created_at', 'desc')->get();
        $likes = $user->likes()->get();

        return view('profile', compact('likes', 'tweets'));
    }

    public function follow(Request $request)
    {
        $user = User::find($request->id);
        auth()->user()->follow($user);
        error_log('user follow.');
        return back();
    }

    public function unfollow(Request $request)
    {
        $user = User::find($request->id);
        auth()->user()->unfollow($user);
        error_log('user unfollow.');
        return back();
    }

    public function UploadProfile(Request $request)
    {
        $request->validate([
            'imageProfil' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imageBanner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->imageProfil) {

            $imageProfilName = time() . '.' . $request->imageProfil->extension();
            $request->imageProfil->move(public_path('images'), $imageProfilName);
        } else {
            if (Auth::user()->imgProfile) {

                $imageProfilName = Auth::user()->imgProfile;
            } else {
                $imageProfilName = null;
            }
        }

        if ($request->imageBanner) {

            $imageBannerName = time() + 1 . '.' . $request->imageBanner->extension();
            $request->imageBanner->move(public_path('images'), $imageBannerName);
        } else {
            if (Auth::user()->imgBanner) {
                $imageBannerName = Auth::user()->imgBanner;
            } else {
                $imageBannerName = null;
            }
        }

        $user = Auth::user();
        $password = Auth::user()->password;
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password != $password) {
            $user->password = bcrypt($request->password);
        }

        $user->imgProfile = $imageProfilName;
        $user->imgBanner = $imageBannerName;
        $user->save();


        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('imageBanner', $imageBannerName)
            ->with('imageProfil', $imageProfilName);
    }

    public function storeTweet(Request $request)
    {
        $request->validate([
            'desc' => 'required',
            'imageTweet' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageTweetName = null;

        if ($request->imageTweet) {

            $imageTweetName = time() . '.' . $request->imageTweet->extension();
            $request->imageTweet->move(public_path('images'), $imageTweetName);
        }

        $tweet = new Post;
        $tweet->user_id = Auth::user()->id;
        $tweet->author = Auth::user()->name;
        $tweet->desc = $request->desc;
        $tweet->imgTweet = $imageTweetName;
        $tweet->save();

        return back();
    }
}
