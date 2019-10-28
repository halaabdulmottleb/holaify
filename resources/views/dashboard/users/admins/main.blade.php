@extends('layouts.dashboard.app')
@section('title','Admins')
@section('content')
<div class="content">
  {{-- header --}}
  <div class="header p-2">
    <div class="head">
      <h3>Admins</h3>
    </div>
    {{-- add admins --}}
    <div class="add">
      <a class="btn btn-primary" href="{{route('create_admin')}}">
        Add Admin
      </a>
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
    {{-- @forelse ($admins as $admin) --}}
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" width="15">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Number</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><a href="#"> <img src="/img/default-user.svg" class="img-thumbnail" width="35"
                style="display:inline-block;margin-right:8px"> Mark</a></td>
          <td>admin@admin.com</td>
          <td>01155536247</td>
        </tr>
      </tbody>
    </table>
    {{-- @empty --}}
    {{-- <div class="not-yet my-3">
      <h3 class="p-2 my-3">No Admins Yet</h3>
      <img src="/img/admins.svg" alt="No-admin" width="350" style="float:right">
    </div> --}}
    {{-- @endforelse --}}
  </div>
</div>
@endsection