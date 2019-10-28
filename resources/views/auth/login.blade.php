@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="row m-0 h-full">
    {{-- form --}}
    <div class="col-12 col-md-5 p-0">
        <div class="container form">
            <div id="login-form" class="login-form p-4">
                <div class="header d-flex p-2 my-3">
                    <img src="/img/brand.svg" width="35" class="mr-1 wow fadeIn" data-wow-duration="2s"
                        data-wow-delay="0s" alt="brand-img">
                    <h1 class="pl-2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">Holafiy</h1>
                </div>
                <div class="card p-2 mt-4">
                    {{-- header --}}
                    <div class="card-header px-4">
                        <h3 class="wow slideInDown" data-wow-duration="2s" data-wow-delay="0s">Welcome ..</h3>
                        <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">Log in to your account
                        </h3>
                    </div>
                    {{-- login form --}}
                    <div class="card-body wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            {{-- email --}}
                            <div class="form-group row">
                                <div class="col-md-11 position-relative">
                                    <i class="fas fa-at"></i>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        placeholder="E-mail Address" v-model="email" required autocomplete="email"
                                        autofocus>
                                    {{-- email error --}}
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- password --}}
                            <div class="form-group row">
                                <div class="col-md-11 position-relative">
                                    <i class="lni-lock"></i>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password" name="password" v-model="password" autocomplete="none">
                                    {{-- password error --}}
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- remember check --}}
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label text-gray-300" for="remember">Keep me
                                            Signed in</label>
                                    </div>
                                </div>
                            </div>
                            {{-- submit btn --}}
                            <div class="form-group row">
                                <div class="col-md-8 m-auto text-center">
                                    <button type="submit" class="btn btn-primary w-100 heartbeat">
                                        {{ __('Login') }} <i class="fas fa-sign-in-alt"></i>
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                            {{-- social acc --}}
                            <div class="form-group row">
                                <div class="col-md-8 m-auto social text-center p-0">
                                    <span class="d-block text-gray-300 font-weight-bold my-2">Or with <i
                                            class="lni-angle-double-down pl-2"></i></span>
                                    {{-- github acc --}}
                                    <a href="#" class="btn btn-primary github" data-toggle="tooltip"
                                        data-placement="bottom" title="Google">
                                        <i class="fab fa-google"></i> Google
                                    </a>
                                    {{-- face acc --}}
                                    <a href="#" class="btn btn-primary face" data-toggle="tooltip"
                                        data-placement="bottom" title="Facebook">
                                        <i class="fab fa-facebook"></i> Facebook
                                    </a>
                                </div>
                            </div>
                            {{-- register --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-12 m-auto register">
                                    First time here?
                                    <a href="{{ route('register') }}" data-toggle="tooltip" data-placement="bottom"
                                        title="Register">
                                        Create an account
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