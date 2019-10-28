@extends('layouts.dashboard.app')
@section('title','Customer Name')
@section('content')
<div class="content">
    {{-- head --}}
    <div class="header p-2 pb-3">
        <div class="head">
            <h3>Customer Name..</h3>
        </div>
        {{-- back to customers --}}
        <div class="add">
            <a href="{{route('customers')}}">
                Customers
            </a>
        </div>
    </div>
    {{-- content --}}
    <div class="main p-3">
        {{-- info --}}
        <div class="row w-100 mx-0">
            {{-- left side. --}}
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
                {{-- address --}}
                <div class="form">
                    <div class="container">
                        <label class="px-2 pb-3">Address Info.</label>
                        <div class="div px-4">
                            {{-- company --}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Company :</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="company"
                                        value="Holafiy">
                                </div>
                            </div>
                            {{-- address --}}
                            <div class="form-group row">
                                <label for="address" class="col-sm-3 col-form-label">Address :</label>
                                <div class="col-sm-7">
                                    <input type="text" readonly class="form-control-plaintext" id="address"
                                        value="41st">
                                </div>
                            </div>
                            {{-- company --}}
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="apartment">{{ __('Apartment :') }}</label>
                                    <input type="text" readonly class="form-control-plaintext" id="apartment" value="3">
                                </div>
                                {{-- city --}}
                                <div class="col-md-4">
                                    <label for="city">{{ __('City :') }}</label>
                                    <input type="text" readonly class="form-control-plaintext" id="city" value="Cairo">
                                </div>
                                {{-- country --}}
                                <div class="col-md-5">
                                    <label for="country">{{ __('Country :') }}</label>
                                    <input type="text" readonly class="form-control-plaintext" id="country"
                                        value="Egypt">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- right side --}}
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
        {{-- orders --}}
        <div class="row w-100 mx-0">
            <div class="col-md-8">
                {{-- cusotmer orders --}}
                <div class="form">
                    <div class="container">
                        <label class="px-2 pb-3">Orders..</label>
                        {{-- if customer has orders --}}
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Order</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>order</td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- empty --}}
                        {{-- <div class="div px-4">
                                <label>This customer hasn’t placed any orders yet</label>
                            </div> --}}
                    </div>
                </div>
                {{-- delte coustomer --}}
                <div class="col-md-4 px-0">
                    <form action="" method="get">
                        <button type="submit" class="btn btn-primary w-100 del-user">
                            {{ __('Delete Customer') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection