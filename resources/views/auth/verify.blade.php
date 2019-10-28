@extends('layouts.app')
@section('title','Verify Email')
@section('content')
<div class="row m-0 h-full">
    {{-- form --}}
    <div class="col-12 col-md-5 p-0">
        <div class="container form">
            <div id="login-form" class="login-form p-4">
                <div class="header d-flex p-2 my-3">
                    <img src="/img/brand2.svg" width="35" class="mr-2 wow fadeIn" data-wow-duration="2s"
                        data-wow-delay="0s" alt="brand-img">
                    <h1 class="pl-2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">Holafiy</h1>
                </div>
                <div class="card p-2 mt-4">
                    <div class="card-header px-4">
                        <h3 class="wow slideInDown" data-wow-duration="2s" data-wow-delay="0s">
                            {{ __('Verify Your Email Address') }}..</h3>
                    </div>
                    <div class="card-body wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/bla.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection