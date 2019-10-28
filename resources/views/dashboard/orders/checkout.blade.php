@extends('layouts.dashboard.app')
@section('title','Abandoned Orders')
@section('content')
<div class="content">
  {{-- header --}}
  <div class="header p-2">
    <div class="head">
      <h3>Abandoned Checkouts</h3>
    </div>
  </div>
  {{-- search --}}
  <div class="search w-100 p-3">
    <div class="form-group mb-0">
      <div class="col-md-4 position-relative">
        <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
        <input id="search" type="text" class="form-control search-input" name="search" placeholder="Search for Admins">
      </div>
    </div>
  </div>
  {{-- content --}}
  <div class="main p-3">
    {{-- @forelse ($checkouts as $checkout) --}}
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Customer</th>
          <th scope="col">Order</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><a href="#"> <img src="/img/default-user.svg" class="img-thumbnail" width="35"
                style="display:inline-block;margin-right:8px"> Mark</a></td>
          <td>iphone7</td>
        </tr>
      </tbody>
    </table>
    {{-- @empty --}}
    {{-- <div class="not-yet my-3">
      <h3 class="p-2 my-3">No Abandoed Checkouts Yet</h3>
      <img src="/img/cusomters.svg" alt="add-collection" width="350" style="float:right">
    </div> --}}
    {{-- @endforelse --}}
  </div>
</div>
@endsection