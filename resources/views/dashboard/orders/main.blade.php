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
  {{-- @forelse ($orders as $order) --}}
  {{-- search --}}
  <div class="search w-100 py-3">
    <div class="form-group mb-0">
      <div class="col-md-4 p-0 position-relative">
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
      <tr>
        <td>1</td>
        <td><a href="#"> <img src="/img/default-user.svg" class="img-thumbnail" width="35"
              style="display:inline-block;margin-right:8px"> Mark</a></td>
        <td>order</td>
        <td>41st.</td>
      </tr>
    </tbody>
  </table>
  {{-- @empty --}}
  {{-- <div class="not-yet">
      <h3 class="my-3">No Orders Yet</h3>
      <img src="/img/not-found.svg" alt="no-order" width="380">
    </div> --}}
  {{-- @endforelse --}}
</div>
</div>
@endsection