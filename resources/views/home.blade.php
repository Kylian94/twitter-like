@extends('layouts.app')

@section('content')

<div class="d-flex">
    <div class="col-3 d-flex justify-content-center border-right">
        <div class="d-flex col-10 flex-column mt-3">
            <i class="fa fa-bandcamp text-info fa-3x mr-3"></i>
            <a href="{{ route('home') }}" class="d-flex align-items-center mt-5">
                <i class="fa fa-home fa-2x mr-3"></i>
                <h4 class="font-weight-bold m-0">Home</h4>
            </a>
        <a href="{{ route('profile') }}" class="d-flex align-items-center mt-4">
                <i class="fa fa-user-o fa-2x mr-3"></i>
                <h4 class="font-weight-bold m-0">Profil</h4>
            </a>
            <div class="d-flex align-items-center mt-4">
                <a href="#" class="btn btn-info text-white btn-rounded col-12">Tweet</a>
            </div>
        </div>
    </div>
    <div class="col-6 vh-100 ">
        <div class="d-flex flex-column align-items-start p-2">
                <h3 class="font-weight-bold mt-3">Home</h3>
                <div class="border-bottom post rounded">
                    <div class=" d-flex flex-column align-items-center justify-content-center col-12 mt-3 rounded">
                        <div class="d-flex justify-content-between col-12 pt-3">
                            <div class="titleCategory d-flex ">
                                <i class="fa fa-bandcamp text-info fa-3x mr-3"></i>
                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <h4 class="m-0">Twitter Music</h4>
                                    <p class="font-weight-light">@Twitter</p>
                                </div>
                            </div>
                            <i class="fa fa-bandcamp text-info fa-2x mr-3"></i>
                        </div>
                        <p class="font-weight-light">Lorem ipsum dolor, sit amet consectetur <span class="text-info">@adipisicing elit</span>. Minima sit repudiandae vero necessitatibus laudantium repellat mollitia.</p>
                        <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1579833214916-783b168e55d6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3360&q=80" alt="" srcset="">
                        
                        <div class="my-2 d-flex align-items-center font-weight-light col-12">
                            <p class="m-0 small">14:29 - 1 nov 2019</p>
                            <i class="fa fa-heart-o text-info fa-1x ml-5 mr-2"></i>
                            <p class="mr-3 m-0">31,4 k</p>
                            
                            <i class="fa fa-comment-o text-info fa-1x ml-4 mr-2"></i>
                            <p class="m-0">33</p>
                        </div>
                    </div>
                </div>

                <div class="border-bottom post rounded">
                    <div class=" d-flex flex-column align-items-center justify-content-center col-12 mt-3 rounded">
                        <div class="d-flex justify-content-between col-12 pt-3">
                            <div class="titleCategory d-flex ">
                                <i class="fa fa-bandcamp text-info fa-3x mr-3"></i>
                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <h4 class="m-0">Twitter Music</h4>
                                    <p class="font-weight-light">@Twitter</p>
                                </div>
                            </div>
                            <i class="fa fa-bandcamp text-info fa-2x mr-3"></i>
                        </div>
                        <p class="font-weight-light">Lorem ipsum dolor, sit amet consectetur <span class="text-info">@adipisicing elit</span>. Minima sit repudiandae vero necessitatibus laudantium repellat mollitia.</p>
                        <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1579833214916-783b168e55d6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3360&q=80" alt="" srcset="">
                        
                        <div class="my-2 d-flex align-items-center font-weight-light col-12">
                            <p class="m-0 small">14:29 - 1 nov 2019</p>
                            <i class="fa fa-heart-o text-info fa-1x ml-5 mr-2"></i>
                            <p class="mr-3 m-0">31,4 k</p>
                            
                            <i class="fa fa-comment-o text-info fa-1x ml-4 mr-2"></i>
                            <p class="m-0">33</p>
                        </div>
                    </div>
                </div>

        </div>
        
    </div>
    <div class="col-3 border-left">
        <div class="d-flex col-10 flex-column mt-3">
            <div class="d-flex align-items-center mt-2">
                <a class="btn btn-rounded btn-outline-info text-info w-100" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                Se déconnecter
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <div class="mt-5">
            <h4 class="font-weight-bold">Vous connaissez peut-être..</h4>
            <div class="d-flex align-items-center justify-content-between mt-3 bg-light border-bottom p-2">
                <div class="d-flex align-items-center">
                    <img class="img-profil rounded-circle" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80" alt="" srcset="">
                    <div class="d-flex flex-column align-items-center ml-3">
                        <h4 class="font-weight-bold m-0">Laurena</h4>
                        <p class="m-0">@lorena94</p>
                    </div>
                </div>
                <a class="btn btn-rounded btn-outline-info text-info font-weight-bold" href="#"
                    onclick="event.preventDefault();
                    document.getElementById('follow-form').submit();">
                Follow
                </a>
                <form id="follow-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
            </div>
            <div class="d-flex align-items-center justify-content-between bg-light border-bottom p-2">
                    <div class="d-flex align-items-center">
                        <img class="img-profil rounded-circle" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=896&q=80" alt="" srcset="">
                        <div class="d-flex flex-column align-items-center ml-3">
                            <h4 class="font-weight-bold m-0">Igor</h4>
                            <p class="m-0">@Igor_Tech</p>
                        </div>
                    </div>
                    <a class="btn btn-rounded btn-outline-info text-info font-weight-bold" href="#"
                        onclick="event.preventDefault();
                        document.getElementById('follow-form').submit();">
                    Follow
                    </a>
                    <form id="follow-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>
                </div>
        </div>
    </div>
</div>

@endsection
