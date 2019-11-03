@extends('layouts.dashboard.app')
@section('title','Orders')
@section('content')
<div class="content">
  {{-- header --}}
  <div class="header p-2">
    <div class="head">
      <h3>Orders</h3>
    </div>
    {{-- add order --}}
    {{-- <div class="add">
      <a class="btn btn-primary" href="{{route('create_admin')}}">
    Add Order
    </a>
  </div> --}}
</div>
{{-- content --}}
<div class="main p-3">
  {{-- @if (!$orders->count()) --}}
  {{-- <div class="not-yet">
      <h3 class="my-3">No Orders Yet</h3>
      <img src="/img/not-found.svg" alt="no-order" width="380">
    </div>
    @else --}}
  {{-- search --}}
  <div class="search w-100 py-3">
    <div class="form-group mb-0">
      <div class="p-0 position-relative">
        <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
        <input id="search" type="text" class="form-control search-input" name="search" placeholder="Search for Orders">
      </div>
    </div>
  </div>
  {{-- table --}}
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Customer</th>
        <th scope="col">Order</th>
        <th scope="col">address</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach($orders as $order) --}}
      <tr>
        {{-- <td>1</td>
          <td><a href="/auth/orders/{{$order->id}}"> <img src="{{$order->img}}" class="img-thumbnail d-none d-md-inline-block" width="35"
          style="margin-right:8px">{{$order->custoemer->name}}</a></td>
        <td>{{$order->product->title}}</td>
        <td>{{$order->customer->address}}</td> --}}
        <td>1</td>
        <td><a href="#"><img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
              style="margin-right:8px">Mark</a></td>
        <td>order</td>
        <td>41st.</td>
      </tr>
      {{-- @endforeach --}}
    </tbody>
  </table>
  {{-- @endif --}}
</div>
</div>
@endsection