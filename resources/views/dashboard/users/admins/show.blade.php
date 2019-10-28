@extends('layouts.dashboard.app')
@section('title','Admin Name')
@section('content')
<div class="content">
    {{-- head --}}
    <div class="header p-2 pb-3">
        <div class="head">
            <h3>Admin Name..</h3>
        </div>
        {{-- back to admins --}}
        <div class="add">
            <a href="{{route('admins')}}">
                Admins
            </a>
        </div>
    </div>
    {{-- content --}}
    <div class="main p-3">
        {{-- personal inf. --}}
        <div class="w-100 row m-0">
            {{-- label --}}
            <div class="col-md-8">
                <div class="form">
                    <div class="container">
                        <label class="px-3 pb-4">Personal Info.</label>
                        <div class="div px-4">
                            {{-- name --}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Full Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="name"
                                        value="Mahmoud Mustafa">
                                </div>
                            </div>
                            {{-- userName --}}
                            <div class="form-group row">
                                <label for="username" class="col-sm-3 col-form-label">UserName :</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="username"
                                        value="mahmoudmo">
                                </div>
                            </div>
                            {{-- email --}}
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email :</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="email"
                                        value="mahmoud@gmail.com">
                                </div>
                            </div>
                            {{-- number --}}
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">Phone :</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="phone"
                                        value="01155536247">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- security --}}
                <div class="form">
                    <div class="container">
                        <label class="px-2 pb-3">Security Info.</label>
                        <div class="div px-2">
                            {{-- password --}}
                            <div class="form-group">
                                <label for="title" class="col">{{ __(' Change Admin Password') }} <i
                                        class="lni-pencil-alt"></i></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- inputs --}}
            <div class="col-md-4">
                {{-- profile pic --}}
                <div class="form">
                    <div class="container">
                        <label class="px-2 pb-2">Profile Pic.</label>
                        <div class="div px-2">
                            {{-- img --}}
                            <img src="/img/default-user.svg" alt="admin-pic" width="200" class="img-thumbnail m-auto">
                        </div>
                    </div>
                </div>
                {{-- other info. --}}
                <div class="form">
                    <div class="container">
                        <label class="px-2 pb-3">Other info.</label>
                        <div class="div px-2">
                            <label class="col">{{ __('Birth Day : ') }} 6 / 6 / 96</label>
                        </div>
                        <div class="div px-2">
                            <label class="col">{{ __('Joined In : ') }} 6 / 6 / 96</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- delete btn --}}
        <div class="row w-100 m-0">
            {{-- delte admin --}}
            <div class="col-md-4">
                <div class="form-group">
                    <form action="" method="get">
                        <button type="submit" class="btn btn-primary w-100 del-user">
                            {{ __('Delete Admin') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection