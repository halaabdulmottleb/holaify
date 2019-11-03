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
  {{-- content --}}
  <div class="main p-3">
    {{-- @if(!$checkouts->count()) --}}
    {{-- <div class="not-yet my-3">
      <h3 class="p-2 my-3">No Abandoed Checkouts Yet</h3>
      <img src="/img/cusomters.svg" alt="add-collection" width="350" style="float:right">
    </div> 
    @else--}}
    {{-- search --}}
    <div class="search w-100 py-3">
      <div class="form-group mb-0">
        <div class="p-0 position-relative">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search"
            placeholder="Search for Checkouts">
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
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($checkouts as $checkout) --}}
        <tr>
          <th scope="row">1</th>
          <td><a href="#"> <img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
                style="margin-right:8px">Mark</a></td>
          <td>iphone7</td>
        </tr>
        {{-- $endforeach --}}
      </tbody>
    </table>
    {{-- @endif --}}
  </div>
</div>
@endsection