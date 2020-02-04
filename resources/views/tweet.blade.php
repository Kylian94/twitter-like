@extends('layouts.app')

@section('content')

<div class="col-12 col-md-6 main-part border-left border-right p-0">
        <!-- HEADER PART -->
        <div class="px-3">
            <div class="d-flex align-items-center mt-3">
            <a href="/">
                    <i class="fa fa-arrow-left text-info fa-2x mr-3"></i>
                </a>
                <h3 class="font-weight-bold">Tweet {{$tweet->id}}</h3>
            </div>
            

        </div>
            
        <div class="col-12 p-0">
                <hr>
        </div>
        <div class=" d-flex flex-column align-items-center justify-content-center col-12 mt-3 rounded">
            <div class="d-flex justify-content-between col-12 pt-3">
                <div class="titleCategory d-flex ">
                    <i class="fa fa-bandcamp text-info fa-3x mr-3"></i>
                    <div class="d-flex flex-column align-items-start justify-content-center">
                        <h4 class="m-0">{{$tweet->author}}</h4>
                        <p class="font-weight-light">@Twitter</p>
                    </div>
                </div>
                <i class="fa fa-bandcamp text-info fa-2x mr-3"></i>
            </div>
            <div class="col-10">
                <p class="font-weight-light">{{$tweet->desc}}</p>
                @if($tweet->imgTweet) 
                <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1579833214916-783b168e55d6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3360&q=80" alt="" srcset="">
                @endif
                <div class="my-2 d-flex align-items-center font-weight-light col-12">
                    <p class="m-0 small w-75">{{$tweet->created_at->diffForHumans()}}</p>
                    <i class="fa fa-heart-o text-info fa-1x ml-4 mr-1"></i>
                    <p class="m-0 w-75">31,4 k</p>
                    
                    <i class="fa fa-comment-o text-info fa-1x ml-3 mr-2"></i>
                    <p class="m-0">33</p>
                </div>
            </div>
        </div>
</div>



@endsection