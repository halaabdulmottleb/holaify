@extends('layouts.dashboard.app')
@section('title','Overview')
@section('content')

<div class="content dash">
    {{-- head --}}
    <div class="head">
        <div class="py-2">
            {{-- <h3>Welcome,{{Auth::user()->name}}</h3> --}}
            <h3>Welcome, Mahmoud</h3>
        </div>
        <div class="add">
            <div class="dropdown">
                <button class="btn btn-primary rounded-full dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Create
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/auth/collections/create">Collection</a>
                    <a class="dropdown-item" href="/auth/products/create">Product</a>
                    <a class="dropdown-item" href="/auth/admins/create">Admin</a>
                    <a class="dropdown-item" href="/auth/customers/create">Customer</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Content --}}
    <div class="overview p-5">
        {{-- overview --}}
        <div class="row justify-center py-3">
            <div class="div-table">
                <div class="heading">
                    Total Sale
                </div>
                <div class="body">
                    0.00
                </div>
            </div>
            <div class="div-table">
                <div class="heading">
                    Total Order
                </div>
                <div class="body">
                    0
                    {{-- {{$orders->count()}} --}}
                </div>
            </div>
            <div class="div-table">
                <div class="heading">
                    Total Customers
                </div>
                <div class="body">
                    0
                    {{-- {{$customers->count()}} --}}
                </div>
            </div>
            <div class="div-table">
                <div class="heading">
                    Total Products
                </div>
                <div class="body">
                    0
                    {{-- {{$products->count()}} --}}
                </div>
            </div>
        </div>
        {{-- activity --}}
        <div class="row justify-content-around py-3">
            <div class="top-customer m-1">
                <div class="heading pb-3">
                    <h3>Top Customers</h3>
                </div>
                <div class="list mx-3">
                    <ul class="lists mx-2">
                        <li class="customer">
                            <div>Mahmoud</div>
                            <div class="orders">5 Orders</div>
                        </li>
                        <li class="customer">
                            <div>Mahmoud</div>
                            <div class="orders">100 Orders</div>
                        </li>
                        <li class="customer">
                            <div>Mahmoud</div>
                            <div class="orders"">500 Orders</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection