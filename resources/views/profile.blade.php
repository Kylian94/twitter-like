@extends('layouts.app')

@section('content')

    <div class="col-6 vh-100 ">
        <div class="d-flex align-items-center mt-3">
                <i class="fa fa-arrow-left text-info fa-2x mr-3"></i>
                <h3 class="font-weight-bold">Kylian</h3>
        </div>
        <p class="font-weight-light ml-5">0 tweet</p>
        <div class="col-12 p-0">
                <hr>
        </div>
        <div class="col-12 img-cover">

        </div>
        <div class="col-12 d-flex align-items-end justify-content-between edit-profile">
            <div class="col-2 p-0">
                <img class="img-profil-user img-thumbnail rounded-circle" src="https://images.unsplash.com/photo-1453396450673-3fe83d2db2c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" srcset="">
            </div>
            <a href="#" class="btn btn-outline-info btn-rounded text-info mr-4 font-weight-bold px-4">Edit profile</a>
        </div>
        <div class="mt-5">
            <h4 class="font-weight-bold pt-3 m-0">Kylian</h4>
            <p class="font-weight-light">@KylianP</p>
            <div class="d-flex align-items-center">
                    <i class="fa fa-calendar fa-1x" aria-hidden="true"></i>
            <p class="p-0 ml-2 m-0">À rejoint en {{Auth::user()->created_at}}</p>
            </div>
            <div class="d-flex align-items-center mt-2">
                <a href="" class="font-weight-light"><span class="font-weight-bold">5</span> following</a>
                <a href="" class="ml-4 font-weight-light"><span class="font-weight-bold">6</span> followers</a>
            </div>
        </div>
        <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
            <li class="nav-item col-4 p-0 text-center">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tweet</a>
            </li>
            <li class="nav-item col-4 p-0 text-center">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Retweet</a>
            </li>
            <li class="nav-item col-4 p-0 text-center">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Likes</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
                
    </div>
    
@endsection
