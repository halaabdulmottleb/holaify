@extends('layouts.dashboard.app')
@section('title','Products')
@section('content')
<div class="content">
  {{-- header --}}
  <div class="header p-2">
    <div class="head">
      <h3>Products</h3>
    </div>
    {{-- add product --}}
    <div class="add">
      <a class="btn btn-primary" href="{{route('create_product')}}">
        Add Product
      </a>
    </div>
  </div>
  {{-- search --}}
  <div class="search w-100 p-3">
    <div class="form-group mb-0">
      <div class="col-md-4 position-relative">
        <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
        <input id="search" type="text" class="form-control search-input" name="search"
          placeholder="Search for Products">
      </div>
    </div>
  </div>
  {{-- content --}}
  <div class="main p-3">
    {{-- @forelse ($products as $product) --}}
    <table class="table table-hover">
      <thead>
        <tr>
            <th scope="col">#</th>
          <th scope="col">Product</th>
          <th scope="col">Inventory</th>
          <th scope="col">Type</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          {{-- <td>{{$product->name}}</td>
          <td>{{$product->inventory}} In Stock</td>
          <td>{{$product->type}}</td> --}}
          <td>1</td>
          <td><a href="#"> <img src="/img/default-product.svg" class="img-thumbnail" width="35"
                style="display:inline-block;margin-right:8px"> Iphone</a></td>
          <td>5 in stock</td>
          <td>Mobile</td>
        </tr>
      </tbody>
    </table>
    {{-- @empty --}}
    {{-- <div class="not-yet my-3">
      <h3 class="p-2 my-3">No Products Yet</h3>
      <img src="/img/product.svg" alt="add-product" width="350" style="float:right">
    </div> --}}
    {{-- @endforelse --}}
  </div>
</div>
@endsection