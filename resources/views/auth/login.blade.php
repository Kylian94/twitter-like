@extends('layouts.template')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="col-md-8">
            <div class="card rounded-card border-info">
                <div class="pt-3  border-info border-bottom-0 d-flex justify-content-center">
                    <i class="fa fa-bandcamp text-info fa-3x mr-3"></i>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Adresse Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-rounded btn-info text-white font-weight-bold">
                                    Se connecter
                                </button>
                                <a href="{{ route('register') }}" class="small ml-4 text-info">Pas encore inscrit ? Cliquez ici</a>
                                
                            </div>
                            <div class="col-10 offset-1">
                                    <hr class="my-3" style="border-bottom: 0.5px #eeeeee solid; border-top: 0;">
                            </div>
                            
                            <div class="col-md-8 offset-md-2 text-center">
                            @if (Route::has('password.request'))
                                    <a class="small text-info " href="{{ route('password.request') }}">
                                        Mot de passe oublié ?
                                    </a>
                                @endif
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
