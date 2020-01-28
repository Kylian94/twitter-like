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
        <main>
                <div class="d-flex ">
                    <div class="col-3 d-none d-md-block">
                        <div class="d-flex justify-content-center ">
                            <div class="d-flex col-10 flex-column mt-3">
                                <i class="fa fa-bandcamp text-info fa-3x mr-3"></i>
                                <a href="/" class="d-flex align-items-center mt-5 {{ Request::path() == '/' ? 'text-primary' : '' }}">
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
                                    <div class="d-flex col-12 p-0">
                                        <div class="col-2 p-0">
                                            <img class="img-profil rounded-circle" src="https://images.unsplash.com/photo-1453396450673-3fe83d2db2c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" srcset="">
                                        </div>
                                        <div class="col-10 d-flex flex-column p-0 mt-2">
                                            <div class="col-12 p-0">
                                                <textarea class="inputTweet col-12 p-0"type="text" placeholder="Quoi de beau aujourd'hui ?" autofocus></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex col-12 align-items-center mt-3">
                                        <div class="col-2">
                                        
                                        </div>
                                        <div class="col-10 d-flex flex-column p-0">
                                            <div class="w-100 d-flex justify-content-between align-items-center mb-1">
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
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @yield('content')
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
                        <div class="mt-5">
                            <h4 class="font-weight-bold">Vous connaissez peut-être..</h4>
                            <div class="d-flex align-items-center justify-content-between mt-3 bg-light border-bottom p-2">
                                <div class="d-flex align-items-center">
                                    <img class="img-profil rounded-circle" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80" alt="" srcset="">
                                    <div class="d-flex flex-column align-items-start ml-3">
                                        <h4 class="font-weight-bold m-0">Laurena</h4>
                                        <p class="m-0">@lorena94</p>
                                    </div>
                                </div>
                                <a class="btn btn-rounded btn-outline-info text-info font-weight-bold" href="#"
                                    onclick="event.preventDefault();
                                    document.getElementById('follow-form1').submit();">
                                Follow
                                </a>
                                <form id="follow-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </div>
                            <div class="d-flex align-items-center justify-content-between bg-light border-bottom p-2">
                                    <div class="d-flex align-items-center">
                                        <img class="img-profil rounded-circle" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=896&q=80" alt="" srcset="">
                                        <div class="d-flex flex-column align-items-start ml-3">
                                            <h4 class="font-weight-bold m-0">Igor</h4>
                                            <p class="m-0">@Igor_Tech</p>
                                        </div>
                                    </div>
                                    <a class="btn btn-rounded btn-outline-info text-info font-weight-bold" href="#"
                                        onclick="event.preventDefault();
                                        document.getElementById('follow-form2').submit();">
                                    Follow
                                    </a>
                                    <form id="follow-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
</body>
</html>
