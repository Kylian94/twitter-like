<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Twitter</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Passion+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- NAV MOBILE PART -->
            <nav class="navbar fixed-bottom navbar-light bg-light d-md-none border-top py-0">
                <div class=" mr-auto d-flex justify-content-center w-100">
                    <div class="nav-item active col-4 ">
                        <a class="nav-link text-center" href="#"><i class="fa fa-home text-info fa-2x" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                    </div>
                    <div class="nav-item col-4 ">
                        <a class="nav-link text-center" href="#"><i class="fa fa-picture-o text-secondary fa-2x" aria-hidden="true"></i></a>
                    </div>
                    <div class="nav-item col-4 ">
                        <a class="nav-link text-center" href="#"><i class="fa fa-comment-o text-secondary fa-2x" aria-hidden="true"></i></a>
                    </div>
                </ul>
            </nav>
        <main> 
            <div class="d-flex ">
                <!-- RIGHTSIDE DESKTOP PART -->
                <div class="col-3 d-none d-md-block">
                    <!-- MENU NAV PART -->
                    <div class="d-flex justify-content-center ">
                        <div class="d-flex col-10 flex-column mt-3">
                            <i class="fa fa-bandcamp text-info fa-3x mr-3"></i>
                            <a href="/home" class="d-flex align-items-center mt-5 {{ Request::path() == 'home' ? 'text-primary' : '' }}">
                                <i class="fa fa-home fa-2x mr-3"></i>
                                <h4 class="font-weight-bold m-0">Accueil</h4>
                            </a>
                        <a href="{{ route('profile') }}" class="d-flex align-items-center mt-4 {{ Request::path() == 'profile' ? 'text-primary' : '' }}">
                                <i class="fa fa-user-o fa-2x mr-3"></i>
                                <h4 class="font-weight-bold m-0">Profil</h4>
                            </a>
                            <div class="d-flex align-items-center mt-4">

                            </div>
                        </div>
                    </div>
                    <a class="btn btn-rounded btn-info text-white d-none d-md-block " data-toggle="modal" data-target="#modalTweet">Tweet</a>
                    <!-- MODAL TWEET -->
                    <div class="modal fade " id="modalTweet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content border-0">
                                <div class="modal-header">
                                    
                                    <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="text-info">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('tweet.post') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="d-flex col-12 p-0">
                                            <div class="col-2 p-0 ">
                                                @if( Auth::user()->imgProfile != null)
                                                <img class="img-profil rounded-circle mr-3" src="{{ asset('images/' . Auth::user()->imgProfile ) }}" alt="" srcset="">
                                                @else 
                                                <img class="img-profil rounded-circle mr-3" src="{{ asset('images/default-image-profile.jpeg') }}" alt="" srcset="">
                                                @endif
                                            </div>
                                            
                                            <div class="col-10 d-flex flex-column p-0 mt-2">
                                                <div class="col-12 p-0">
                                                    <textarea class="inputTweet col-12 p-0" autofocus type="text" name="desc" placeholder="Quoi de beau aujourd'hui ?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex col-12 align-items-center mt-3 border-bottom ">
                                            <div class="col-1">
                                            
                                            </div>
                                            <div class="col-11 d-flex flex-column p-0 ">
                                                <div class="w-100 d-flex justify-content-between align-items-center mb-3">
                                                    <div class="col-3 d-flex align-items-center p-0">
                                                            <i class="fa fa-picture-o text-info mr-3 fa-2x" aria-hidden="true"></i>
                                                            <input type="file" name="imageTweet">
                                                        
                                                        <i class="fa fa-smile-o text-info fa-2x" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="col-3">
                                                        <button type="submit" class="btn btn-info text-white btn-rounded px-4">Tweet</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MAIN PART -->
                @yield('content')
                <!-- LEFTSIDE DESKTOP PART -->
                <div class="col-3 d-none d-md-block">
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
                    <!-- SUGGESTIONS PART -->
                    <div class="mt-5">
                        <h4 class="font-weight-bold">Vous connaissez peut-être..</h4>
                        
                        @foreach ($users as $user)
                        <div  class=" align-items-center justify-content-between bg-light border-bottom p-2 {{ Auth::user()->name == $user->name ? 'd-none' : 'd-flex' }}">
                            
                            <div class="d-flex align-items-center">
                                @if( $user->imgProfile != null)
                                    <img class="img-profil rounded-circle " src="{{ asset('images/' . $user->imgProfile ) }}" alt="" srcset="">
                                @else 
                                    <img class="img-profil rounded-circle" src="{{ asset('images/default-image-profile.jpeg') }}" alt="" srcset="">
                                @endif
                                <div class="d-flex flex-column align-items-start ml-3">
                                    <h4 class="font-weight-bold m-0">{{$user->name}}</h4>
                                    <p class="m-0">{{ '@'.App\User::find($tweet->user_id)->email }}</p>
                                </div>
                            </div>
                            @if(Auth::user()->isFollowing($user->id))
                            <form action="{{ url('unfollow') }}" method="post" >
                                    @csrf
                                    <input type="hidden" name="id" value={{$user->id}}>
                                    <button type="submit" class="btn btn-rounded btn-outline-info text-info font-weight-bold">
                                        Unfollow   
                                    </button>
                            </form>
                            @else 
                            <form  action="{{ url('follow') }}" method="post" >
                                @csrf
                                <input type="hidden" name="id" value={{$user->id}}>
                                <button type="submit" class="btn btn-rounded btn-outline-info text-info font-weight-bold">
                                    Follow   
                                </button>
                            </form>
                            @endif          
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
