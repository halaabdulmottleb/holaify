@extends('layouts.dashboard.app')
@section('title','Collection name')
@section('content')
<div class="content">
  {{-- head --}}
  <div class="header p-2 pb-3">
    <div class="head">
      <h3>Collection Name..</h3>
    </div>
    {{-- back to collections --}}
    <div class="add">
      <a class="" href="{{route('collections')}}">
        Collections
      </a>
    </div>
  </div>
  {{-- content --}}
  <div class="main px-4 py-3">
    {{-- info --}}
    <div class="row w-100 mx-0">
      {{-- left side. --}}
      <div class="col-md-8">
        <div class="form">
          <div class="container">
            <div class="div px-4">
              {{-- title --}}
              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Title :</label>
                <div class="col-sm-7">
                  <input type="text" readonly class="form-control-plaintext" id="name" value="title">
                </div>
              </div>
              {{-- description --}}
              <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label">Description :</label>
                <div class="col-sm-7">
                  <input type="text" readonly class="form-control-plaintext" id="description"
                    value="this is a description">
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- collection products --}}
        <div class="form">
          <div class="container">
            <label class="px-2 pb-3">Products..</label>
            {{-- if customer has orders --}}
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">product</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>product</td>
                </tr>
              </tbody>
            </table>
            {{-- empty --}}
            {{-- <div class="div px-4">
                                    <label>There are no products in this collection</label>
                                </div> --}}
          </div>
        </div>
      </div>
      {{-- right side --}}
      <div class="col-md-4">
        {{-- collection --}}
        <div class="form">
          <div class="container">
            <label class="px-2 pb-2">Collection Image</label>
            <div class="div px-2">
              {{-- img --}}
              <img src="/img/default-user.svg" alt="collection-pic" width="200" class="img-thumbnail m-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- products --}}
    <div class="row w-100 mx-0">
      <div class="col-md-8">
        {{-- delte collection --}}
        <div class="col-md-4 px-0">
          <form action="" method="get">
            <button type="submit" class="btn btn-primary w-100 del-user">
              {{ __('Delete Collection') }}
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection