@extends('layouts.dashboard.app')
@section('title','Home')
@section('content')

<div class="content dash">
    {{-- head --}}
    <div class="head">
        <div class="img">
            {{-- img --}}
        </div>
        <div class="p-3">
            {{-- <h3>Welcome {{Auth::user()->name}} to <span class="brand">Holafiy Dashboard</span></h3> --}}
            <h3>Welcome Mahmoud to <span class="brand">Holafiy Dashboard</span></h3>
        </div>
    </div>
    {{-- overview --}}
    <div class="overview row d-flex justify-content-around mx-0 py-3">
        <div class="img">
            <img src="/img/dashboard.svg" width="400" alt="activity">
        </div>
        <div class="activity">
            <div class="heading p-3">
                <h3>Activity :</h3>
            </div>
            <div class="body mx-3">
                <div class="container">
                    <div class="order">
                        <div class="float-left">Mahmoud Order Product</div>
                        <div class="float-right">3min</div>
                    </div>
                    <div class="order">
                        <div class="float-left">Mahmoud Order Product</div>
                        <div class="float-right">3min</div>
                    </div>
                    <div class="order">
                        <div class="float-left">Mahmoud Order Product</div>
                        <div class="float-right">3min</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="heading p-3">
        <h3>Overview :</h3>
    </div>
    <div class="row justify-around">
        <div class="div-table">
            <div class="heading">
                Total Sale
            </div>
            <div class="body">
                EGP 0.00
            </div>
        </div>
        <div class="div-table">
            <div class="heading">
                Total Order
            </div>
            <div class="body">
                0 Orders
            </div>
        </div>
        <div class="div-table">
            <div class="heading">
                Total Customers
            </div>
            <div class="body">
                0 Customer
            </div>
        </div>
        <div class="div-table">
            <div class="heading">
                Total Products
            </div>
            <div class="body">
                0 Products
            </div>
        </div>
    </div>
</div>
@endsection