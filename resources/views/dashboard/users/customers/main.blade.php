@extends('layouts.dashboard.app')
@section('title','Customers')
@section('content')
<div class="content">
  {{-- header --}}
  <div class="header p-2">
    <div class="head">
      <h3>Customers</h3>
    </div>
    {{-- add Customer --}}
    <div class="add">
      <a class="btn btn-primary" href="/auth/customers/create">
        Add Customer
      </a>
    </div>
  </div>

  {{-- content --}}
  <div class="main p-3">
    {{-- @forelse ($customers as $customer) --}}
    {{-- search --}}
    <div class="search w-100 py-3">
      <div class="form-group mb-0">
        <div class="col-md-4 position-relative p-0">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search"
            placeholder="Search for Customers">
        </div>
      </div>
    </div>
    {{-- table --}}
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Country</th>
          <th scope="col">Orders</th>
          <th scope="col">Spent</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            {{-- <td scope="col">1</td>
            <td><a href="{{$customer->id]}"><img src="{{$customer->img}}" class="img-thumbnail" width="35"
                  style="display:inline-block;margin-right:8px">{{$customer->name}}</a></td>
            <td>{{$customer->Country}}</td>
            <td>{{$customer->orders}}</td>
            <td>{{$customer->spent}}</td> --}}
          <td scope="col">1</td>
          <td><a href="#"><img src="/img/default-user.svg" class="img-thumbnail" width="35"
                style="display:inline-block;margin-right:8px"> Mark</a></td>
          <td>Egypt</td>
          <td>0 Orders</td>
          <td>LE 0.00 spent</td>
        </tr>
      </tbody>
    </table>
    {{-- @empty --}}
    {{-- <div class="not-yet">
      <h3 class="my-3">No Customers Yet</h3>
      <img src="/img/not-found.svg" alt="no-product" width="380">
    </div> --}}
    {{-- @endforelse --}}
  </div>
</div>
@endsection