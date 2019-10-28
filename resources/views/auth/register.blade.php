@extends('layouts.app')
@section('title','Register')

@section('content')
{{-- asdasdasd --}}
<div class="row m-0 h-full">
    {{-- form --}}
    <div class="col-12 col-md-5 p-0">
        <div class="container form">
            <div id="login-form" class="login-form p-4">
                <div class="header d-flex p-2 my-3">
                    <img src="/img/brand.svg" width="35" class="mr-2 wow fadeIn" data-wow-duration="2s"
                        data-wow-delay="0s" alt="brand-img">
                    <h1 class="pl-2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">Holafiy</h1>
                </div>
                <div class="card p-2 mt-2">
                    {{-- header --}}
                    <div class="card-header px-4">
                        <h3 class="wow slideInDown" data-wow-duration="2s" data-wow-delay="0s">Welcome ..</h3>
                        <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">Create a new account
                        </h3>
                    </div>
                    {{-- register form --}}
                    <div class="card-body wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- names --}}
                            <div class="form-group row mb-0">
                                {{-- name --}}
                                <div class="col-md-6 position-relative mb-3">
                                    <i class="lni-user"></i>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name" required
                                        autofocus placeholder="Full Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- username --}}
                                <div class="col-md-6 position-relative mb-3">
                                    <i class="lni-user"></i>
                                    <input id="UserName" type="text"
                                        class="form-control @error('userName') is-invalid @enderror" name="userName"
                                        required placeholder="UserName" autocomplete="none">

                                    @error('userName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- email --}}
                            <div class="form-group row">
                                <div class="col-md-12 position-relative">
                                    <i class="fas fa-at"></i>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email" required
                                        placeholder="Email Address" autocomplete="none">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- mobile --}}
                            <div class="form-group row">
                                <div class="col-md-12 position-relative">
                                    <i class="lni-phone-handset"></i>
                                    <input id="number" type="text"
                                        class="form-control @error('number') is-invalid @enderror" name="number"
                                        required placeholder="Phone Number">
                                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- password --}}
                            <div class="form-group row mb-1">
                                <div class="col-md-6 position-relative mb-3">
                                    <i class="lni-lock"></i>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Password" autocomplete="none">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 position-relative mb-3">
                                    <i class="lni-lock"></i>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>
                            {{-- submit btn --}}
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary w-100 heartbeat">
                                        {{ __('Sign Up') }} <i class="fas fa-sign-in-alt"></i>
                                    </button>
                                </div>
                                <div class="col-md-4 register">
                                    Have account?
                                    <a href="{{ route('login') }}" data-toggle="tooltip" data-placement="bottom"
                                        title="Login">
                                        Log in
                                    </a>
                                </div>
                            </div>
                            {{-- social acc --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-8 m-auto social text-center p-0">
                                    <span class="d-block text-gray-300 font-weight-bold my-2">Or with <i
                                            class="lni-angle-double-down pl-2"></i></span>
                                    {{-- github account --}}
                                    <a href="#" class="btn btn-primary github" data-toggle="tooltip"
                                        data-placement="bottom" title="Google">
                                        <i class="fab fa-google"></i> Google
                                    </a>
                                    {{-- facebook account --}}
                                    <a href="#" class="btn btn-primary face" data-toggle="tooltip"
                                        data-placement="bottom" title="Facebook">
                                        <i class="fab fa-facebook"></i> Facebook
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- left-side --}}
    <div class="d-none d-md-block col-md-7 p-0">
        <div class="bd-example log-pic">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/product.svg" class="d-block m-auto" style="width:64%;height:89vh;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/log.svg" class="d-block m-auto" style="width:64%;height:89vh;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/log3.svg" class="d-block m-auto" style="width:64%;height:89vh;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection