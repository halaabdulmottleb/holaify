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
  {{-- content --}}
  <div class="main p-3">
    {{-- @forelse ($collections as $collection) --}}
    {{-- select & search --}}
    <div class="search w-100 py-3">
      {{-- search --}}
      <div class="form-group mb-0">
        <div class="col-md-4 p-0 position-relative">
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
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="collectionID" name="collectionID">
              <label class="custom-control-label" for="customCheck1">1</label>
            </div>
          </td>
          <td><a href="#">Phones</a></td>
        </tr>
      </tbody>
    </table>
    {{-- @empty --}}
    {{-- <div class="not-yet ">
      <h3 class="my-3">No Collections Yet</h3>
      <img src="/img/not-found.svg" alt="no-collection" width="380">
    </div> --}}
    {{-- @endforelse --}}
  </div>
</div>
@endsection