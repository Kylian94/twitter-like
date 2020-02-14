@extends('layouts.app')

@section('content')
    <div class="col-12 col-md-6 main-part border-left border-right p-0">
        <!-- HEADER PART -->
        <div class="px-3">
            <div class="d-flex align-items-center mt-3">
                <a href="{{ url()->previous() }}">
                    <i class="fa fa-arrow-left text-info fa-2x mr-3"></i>
                </a>
                <h3 class="font-weight-bold">{{Auth::user()->name}}</h3>
            </div>
        </div>
        <!-- NAV PANEL TAB PART-->
        <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
            <li class="nav-item col-6 p-0 text-center">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Followers</a>
            </li>
            <li class="nav-item col-6 p-0 text-center">
                <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Followings</a>
            </li>
        </ul>
        <!-- PANEL TAB PART-->
        <div class="tab-content mb-5 " id="myTabContent">
            <!-- TWEET USER TAB PART-->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                @if(count($followers) == 0)
                <div class="d-flex flex-column align-items-center just-content-center text-dark mt-4">
                        <h4 class="mt-4">Aucuns followers pour le moment..</h4>
                        <p>Engagez de nouvelles conversations en découvrant des personnes qui partagent les mêmes centres d'interet que vous.</p>
                    </div>
                @endif
                @foreach ($followers as $follower)
                    <div class="border-bottom post rounded">
                        <div class=" d-flex flex-column align-items-center justify-content-center post col-12 pt-3 rounded">
                            <div class="d-flex justify-content-between col-12 pt-3">
                                <div class="titleCategory d-flex mb-3">
                                    @if( $follower->imgProfile)
                                    <img class="img-profil rounded-circle mr-3" src="{{ asset('images/' . $follower->imgProfile ) }}" alt="" srcset="">
                                    @else 
                                    <img class="img-profil rounded-circle mr-3" src="{{ asset('images/default-image-profile.jpeg') }}" alt="" srcset="">
                                    @endif
                                    <div class="d-flex flex-column align-items-start justify-content-center">
                                        <h4 class="m-0">{{$follower->name}}</h4>
                                        <p class="font-weight-light">{{ '@'. $follower->email }}</p>
                                    </div>
                                </div>
                                <i class="fa fa-bandcamp text-info fa-2x mr-3"></i>
                            </div>
                            <div class="col-10">
                            </div>
                        </div>
                    </div>  
                @endforeach
            </div>
            <!-- RETWEET USER TAB PART-->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                
                @foreach ($followings as $following)
                    <div class="border-bottom post rounded">
                        <div class=" d-flex flex-column align-items-center justify-content-center post col-12 pt-3 rounded">
                            <div class="d-flex justify-content-between col-12 pt-3">
                                <div class="titleCategory d-flex mb-3">
                                    @if( $following->imgProfile)
                                    <img class="img-profil rounded-circle mr-3" src="{{ asset('images/' . $following->imgProfile ) }}" alt="" srcset="">
                                    @else 
                                    <img class="img-profil rounded-circle mr-3" src="{{ asset('images/default-image-profile.jpeg') }}" alt="" srcset="">
                                    @endif
                                    <div class="d-flex flex-column align-items-start justify-content-center">
                                        <h4 class="m-0">{{$following->name}}</h4>
                                        <p class="font-weight-light">{{ '@'. $following->email }}</p>
                                    </div>
                                </div>
                                <i class="fa fa-bandcamp text-info fa-2x mr-3"></i>
                            </div>
                            <div class="col-10">
                            </div>
                        </div>
                    </div>     
                @endforeach
            </div>
        </div>        
    </div>
@endsection
