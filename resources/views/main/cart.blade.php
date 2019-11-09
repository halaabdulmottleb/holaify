@extends('layouts.main')
@section('title','Cart')
@section('content')
<div class="container">
    <div class="cart-div p-3">
        <div class="row justify-content-center mx-0">
            {{-- no cart --}}
            <div class="p-3 d-flex justify-content-center no-cart">
                {{-- img --}}
                <div class="img m-auto">
                    <img src="/img/empty-cart.gif" width="520" alt="no-cart">
                </div>
                {{-- empty cart --}}
                <div class="text m-auto">
                    <div class="p-3">Cart is empty</div>
                </div>
            </div>
            {{-- cart --}}
        </div>
    </div>
</div>
@endsection