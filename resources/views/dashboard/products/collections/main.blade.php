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
      <a class="btn btn-primary" href="{{route('create_collection')}}">
        Add Collection
      </a>
    </div>
  </div>
  {{-- search --}}
  <div class="search w-100 p-3">
    <div class="form-group mb-0">
      <div class="col-md-4 position-relative">
        <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
        <input id="search" type="text" class="form-control search-input" name="search"
          placeholder="Search for Collections">
      </div>
    </div>
  </div>
  {{-- content --}}
  <div class="main p-3">
    {{-- @forelse ($collections as $collection) --}}
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="row">#</th>
          <th scope="col">Collections</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><a href="#">Phones</a></td>
        </tr>
      </tbody>
    </table>
    {{-- @empty --}}
    {{-- <div class="not-yet my-3">
      <h3 class="p-2 my-3">No Collections Yet</h3>
      <img src="/img/cusomters.svg" alt="add-collection" width="350" style="float:right">
    </div> --}}
    {{-- @endforelse --}}
  </div>
</div>
@endsection