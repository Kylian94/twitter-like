@extends('layouts.app')

@section('content')
    <div class="col-12 col-md-6 main-part border-left border-right p-0">
        <!-- HEADER PART -->
        <div class="px-3">
            <div class="d-flex align-items-center mt-3">
                <a href="/">
                    <i class="fa fa-arrow-left text-info fa-2x mr-3"></i>
                </a>
                <h3 class="font-weight-bold">Kylian</h3>
            </div>
            <p class="font-weight-light ml-5">0 tweet</p>
        </div>
        <!-- PROFILE PART -->
        <div class="col-12 banner-profile">
            <img class="img-cover" src="" alt="" srcset="">
        </div>
        <div class="px-3">
            <div class="col-12 d-flex align-items-end justify-content-between edit-profile">
                <!-- ICON USER PART + BTN EDIT PROFILE-->
                <div class="col-md-2 col-3 p-0">
                    <img class="img-profil-user img-thumbnail rounded-circle" src="https://images.unsplash.com/photo-1453396450673-3fe83d2db2c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" srcset="">
                </div>
                <a href="#" class="btn btn-outline-info btn-rounded text-info mr-4 font-weight-bold px-4" data-toggle="modal" data-target="#modalEditProfile">Edit profile</a>
            </div>
            <!-- MODAL EDIT PROFILE PART -->
            <div class="modal fade " id="modalEditProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-header">
                            <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="text-info">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nom" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="email">Adresse email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Adresse email" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" value="{{Auth::user()->password}}">
                                </div>
                                <button type="submit" class="btn btn-info btn-rounded text-white">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- USER INFORMATIONS -->
            <div class="mt-5">
                <h4 class="font-weight-bold pt-3 m-0">{{Auth::user()->name}}</h4>
                <p class="font-weight-light">@KylianP</p>
                <div class="d-flex align-items-center">
                        <i class="fa fa-calendar fa-1x" aria-hidden="true"></i>
                <p class="p-0 ml-2 m-0">À rejoint {{Auth::user()->created_at->diffForHumans()}}</p>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <a href="" class="font-weight-light"><span class="font-weight-bold">5</span> following</a>
                    <a href="" class="ml-4 font-weight-light"><span class="font-weight-bold">6</span> followers</a>
                </div>
            </div>
        </div>
        <!-- NAV PANEL TAB PART-->
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
        <!-- PANEL TAB PART-->
        <div class="tab-content mb-5 " id="myTabContent">
            <!-- TWEET USER TAB PART-->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="border-bottom post rounded">
                    <div class=" d-flex flex-column align-items-center justify-content-center col-12 pt-3 rounded">
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
            </div>
            <!-- RETWEET USER TAB PART-->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="border-bottom post rounded">
                    <div class=" d-flex flex-column align-items-center justify-content-center col-12 pt-3 rounded">
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
            </div>
            <!-- LIKE PANEL TAB PART-->
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="border-bottom post rounded">
                    <div class=" d-flex flex-column align-items-center justify-content-center col-12 pt-3 rounded">
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
                            <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1499092346589-b9b6be3e94b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2251&q=80" alt="" srcset="">
                            
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
            </div>
        </div>        
    </div>
@endsection
