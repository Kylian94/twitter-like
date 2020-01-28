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
                <div class="d-flex">
                    <div class="col-3 d-flex justify-content-center border-right">
                        <div class="d-flex col-10 flex-column mt-3">
                            <i class="fa fa-bandcamp text-info fa-3x mr-3"></i>
                            <a href="/" class="d-flex align-items-center mt-5 {{ Request::path() == '/' ? 'active' : '' }}">
                                <i class="fa fa-home fa-2x mr-3"></i>
                                <h4 class="font-weight-bold m-0">Home</h4>
                            </a>
                        <a href="{{ route('profile') }}" class="d-flex align-items-center mt-4 {{ Request::path() == 'profile' ? 'active' : '' }}">
                                <i class="fa fa-user-o fa-2x mr-3"></i>
                                <h4 class="font-weight-bold m-0">Profile</h4>
                            </a>
                            <div class="d-flex align-items-center mt-4">
                                <button href="#" data-toggle="modal" data-target="#modalTweet" class="btn btn-info text-white btn-rounded col-12 ">Tweet</button>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL TWEET -->
                    <div class="modal fade" id="modalTweet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
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
                                    <div class="d-flex flex-column align-items-start ml-3">
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
                                        <div class="d-flex flex-column align-items-start ml-3">
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
        </main>
    </div>
</body>
</html>
