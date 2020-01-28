@extends('layouts.app')

@section('content')
    <div class="col-12 col-md-6 border-left border-right main-part p-0">
        <div class="d-flex flex-column align-items-start">
            <!-- HEADER PART -->
            <div class="px-3">
                <div class="d-flex align-items-center justify-content-sm-between mt-2">
                    <div class="col-2 p-0 d-md-none">
                    <a href="{{route('profile')}}">
                        <img class="img-profil-mobile rounded-circle" src="https://images.unsplash.com/photo-1453396450673-3fe83d2db2c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" srcset="">
                    </a>
                    </div>
                    <h3 class="font-weight-bold col-sm-10 ml-4 mt-2">Accueil</h3>
                </div>
            </div>
            
            <div class="col-12 p-0">
                    <hr>
            </div>
            <!-- MOBILE BUTTON ADD TWEET + MODAL -->
            <a class="btn btn-mobile-tweet btn-info text-white fixed-bottom d-md-none d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#modalTweetMobile"><i class="fa fa-bandcamp text-white fa-3x "></i></a>
            <div class="modal fade " id="modalTweetMobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content-mobile border-0">
                        <div class="modal-header">
                            
                            <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-info">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex col-12 p-0">
                                <div class="col-2 p-0">
                                    <img class="img-profil-mobile rounded-circle" src="https://images.unsplash.com/photo-1453396450673-3fe83d2db2c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" srcset="">
                                </div>
                                <div class="col-10 d-flex flex-column p-0">
                                    <div class="col-12 p-0">
                                        <textarea class="inputTweetMobile col-12 p-0"type="text" placeholder="Quoi de beau aujourd'hui ?" autofocus></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex col-12 align-items-center mt-3">
                                <div class="col-2">
                                
                                </div>
                                <div class="col-10 d-flex flex-column p-0">
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div class="col-3 d-flex align-items-center p-0">
                                            <i class="fa fa-picture-o text-info mr-3 fa-2x" aria-hidden="true"></i>
                                            <i class="fa fa-smile-o text-info fa-2x" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-3 mr-4">
                                            <a href="#" class="btn btn-info text-white btn-rounded px-4">Tweet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ADD TWEET DESKTOP PART HOME -->
            <span class="d-none d-md-block col-12 p-0">
                <div class="d-flex col-12 px-3">
                    <div class="col-2 p-0 ml-2">
                        <img class="img-profil rounded-circle" src="https://images.unsplash.com/photo-1453396450673-3fe83d2db2c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" srcset="">
                    </div>
                    <div class="col-10 d-flex flex-column p-0 mt-2">
                        <div class="col-12 p-0">
                            <textarea class="inputTweet col-12 p-0" autofocus type="text" placeholder="Quoi de beau aujourd'hui ?"></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-12 align-items-center mt-3 border-bottom ">
                    <div class="col-2">
                    
                    </div>
                    <div class="col-11 d-flex flex-column p-0 ">
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
            </span>
            <!-- TWEETS LIST PART HOME -->
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
                    <div class="col-10">
                        <p class="font-weight-light">Lorem ipsum dolor, sit amet consectetur <span class="text-info">@adipisicing elit</span>. Minima sit repudiandae vero necessitatibus laudantium repellat mollitia.</p>
                        <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1579833214916-783b168e55d6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3360&q=80" alt="" srcset="">
                        
                        <div class="my-2 d-flex align-items-center font-weight-light col-12">
                            <p class="m-0 small w-75">Il y à 2 jours</p>
                            <i class="fa fa-heart-o text-info fa-1x ml-4 mr-1"></i>
                            <p class="m-0 w-75">31,4 k</p>
                            
                            <i class="fa fa-comment-o text-info fa-1x ml-3 mr-2"></i>
                            <p class="m-0">33</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-bottom post rounded mb-5">
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
                    <div class="col-10">
                        <p class="font-weight-light">Lorem ipsum dolor, sit amet consectetur <span class="text-info">@adipisicing elit</span>. Minima sit repudiandae vero necessitatibus laudantium repellat mollitia.</p>
                        <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1513106580091-1d82408b8cd6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2555&q=80" alt="" srcset="">
                        
                        <div class="my-2  d-flex align-items-center font-weight-light col-12">
                            <p class="m-0 small w-75">Il y a 2 jours</p>
                            <i class="fa fa-heart-o text-info fa-1x ml-4 mr-1"></i>
                            <p class="m-0 w-75">31,4 k</p>
                            
                            <i class="fa fa-comment-o text-info fa-1x ml-3 mr-2"></i>
                            <p class="m-0">33</p>
                        </div>
                    </div>   
                </div>
            </div>
        </div>   
    </div>
@endsection
