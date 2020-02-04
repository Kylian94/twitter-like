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
        $tweets = Post::orderBy('created_at', 'DESC')->get();
        return view('home', compact('users', 'tweets'));
    }

    public function welcome()
    {
        return view('welcome');
    }
    public function profile()
    {
        $user = Auth::user();
        $likes = $user->likes()->get();

        return view('profile', compact('likes'));
    }

    public function like()
    {
        $user = User::find(2);
        auth()->user()->follow($user);
        error_log('Some message here.');
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
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password) {
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

        $tweet = new Post;
        $tweet->author = Auth::user()->name;
        $tweet->desc = $request->desc;
        $tweet->imgTweet = $request->imageTweet;
        $tweet->save();

        return Redirect::to('home');
    }
}
