@extends('layouts.template')

@section('content')
<section>
    <div class="d-flex vh-100">
        <!-- LEFTSIDE WITH BACKGROUND PART -->
        <div class="col-6 bg-home-visitor ">
            <div class="layer d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column justify-content-center">
                    <div class="d-flex align-items-center">
                            <i class="fa fa-search text-white fa-3x mr-4"></i>
                            <h5 class="text-white font-weight-bold">Suivez vos idées.</h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-users text-white fa-3x mr-4"></i>
                        <h5 class="text-white font-weight-bold">Découvrez ce dont les gens parlent.</h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-comment text-white fa-3x mr-4"></i>
                        <h5 class="text-white font-weight-bold">Rejoignez la conversation.</h5>
                    </div>     
                </div>
            </div>
        </div>
        <!-- RIGHTSIDE WITH CTA PART -->
        <div class="col-6 d-flex align-items-center justify-content-center bg-white">
            <div class="d-flex flex-column justify-content-center col-6">
                <i class="fa fa-bandcamp text-info fa-3x mr-3"></i>
                <h1 class="font-weight-bold mt-2">Découvrez ce qui se passe dans le monde en temps réel</h1>
                <h6 class="font-weight-bold mt-5">Rejoignez Twitter aujourd'hui.</h6>
                <a class="btn btn-info text-white font-weight-bold btn-rounded mt-3" href="{{ route('register') }}">S'inscrire</a>
                <a class="btn btn-outline-info font-weight-bold text-info btn-rounded mt-3" href="{{ route('login') }}">Se connecter</a>
            </div>  
        </div>
    </div>    
</section>
@endsection
