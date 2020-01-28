@extends('layouts.app')

@section('content')


    <div class="col-6 vh-100 ">
        <div class="d-flex flex-column align-items-start p-2">
                <h3 class="font-weight-bold mt-3">Home</h3>
                <div class="col-12 p-0">
                        <hr>
                </div>
                <div class="d-flex col-12 p-0">
                    <div class="col-2 p-0">
                        <img class="img-profil rounded-circle" src="https://images.unsplash.com/photo-1453396450673-3fe83d2db2c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" srcset="">
                    </div>
                    <div class="col-10 d-flex flex-column p-0 mt-2">
                        <div class="col-12 p-0">
                            <textarea class="inputTweet col-12 p-0" autofocus type="text" placeholder="What's happening ?"></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-12 align-items-center mt-3 border-bottom">
                    <div class="col-2">
                    
                    </div>
                    <div class="col-10 d-flex flex-column p-0">
                        <div class="w-100 d-flex justify-content-between align-items-center mb-3">
                            <div class="col-3 d-flex align-items-center p-0">
                                <i class="fa fa-picture-o text-info mr-3 fa-2x" aria-hidden="true"></i>
                                <i class="fa fa-smile-o text-info fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="col-3">
                                    <a href="#" class="btn btn-info text-white btn-rounded px-4">Tweet</a>

                            </div>
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
    


@endsection
