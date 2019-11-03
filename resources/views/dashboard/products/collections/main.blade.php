@extends('layouts.dashboard.app')
@section('title','Collections')
@section('content')
<div class="content">
  {{-- header --}}
  <div class="header p-2 pb-3">
    <div class="head">
      <h3>Collections</h3>
    </div>
    {{-- add collection --}}
    <div class="add">
      <a class="btn btn-primary" href="/auth/collections/create">
        Add Collection
      </a>
    </div>
  </div>
  {{-- content --}}
  <div class="main p-3">

    {{-- @if(!$collections->count()) --}}
    {{-- <div class="not-yet ">
      <h3 class="my-3">No Collections Yet</h3>
      <img src="/img/not-found.svg" alt="no-collection" width="380">
    </div>
    @else --}}
    {{-- select & search --}}
    <div class="search w-100 py-3">
      {{-- search --}}
      <div class="form-group mb-0">
        <div class="p-0 position-relative">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search"
            placeholder="Search for Collections">
        </div>
      </div>
    </div>
    {{-- table --}}
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="row">#</th>
          <th scope="col">Collections</th>
          <th scope="col">no. of Products</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($collections as $collection) --}}
        <tr>
          {{-- <td>1</td>
          <td>{{$collection->title}}</td>
          <td>{{$collection->no-of-products}}</td>
          --}}
          <td>1</td>
          <td><a href="#">Phones</a></td>
          <td>3 Product</td>
        </tr>
        {{-- @endforeach --}}
      </tbody>
    </table>
    {{-- @endif --}}
  </div>
</div>
@endsection