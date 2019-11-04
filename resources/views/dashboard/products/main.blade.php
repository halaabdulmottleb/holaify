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
      <a class="btn btn-primary" href="/auth/products/create">
        Add Product
      </a>
    </div>
  </div>
  {{-- content --}}
  <div class="main p-3">
    {{-- @if(!$products->count()) --}}
    {{-- <div class="not-yet">
      <h3 class="my-3">No Products Yet</h3>
      <img src="/img/not-found.svg" alt="no-product" width="380">
    </div> --}}
    {{-- @else --}}
    {{-- search --}}
    <div class="search w-100 py-3">
      <div class="form-group mb-0">
        <div class="p-0 position-relative">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search"
            placeholder="Search for Products">
        </div>
      </div>
      <div class="grid">
        <i class="fas fa-th-list" :class="{'active' : !grid}" @click="table()" data-toggle="tooltip"
          data-placement="bottom" title="List"></i>
        <i class="fas fa-th-large" :class="{'active' : grid }" @click="Grid()" data-toggle="tooltip"
          data-placement="bottom" title="Grid"></i>
      </div>
    </div>
    {{-- grid --}}
    <div class="row mx-0 my-2 justify-around" v-if="grid == true">
      {{-- @foreach($admin as admin) --}}
      <div class="p-0 div-table bg-white m-2">
        <div class="bg-white rounded-lg p-4">
          <img class="h-16 w-16 md:h-24 md:w-24 mx-auto img-thumbnail " src="/img/default-product.svg">
          <div class="text-center m-2">
            <a href="#">
              <h2 class="text-lg">Product name</h2>
            </a>
            <div class="text-gray-600">10 In Stock</div>
            <div class="text-gray-600">Prdocuct type</div>
            <div class="text-gray-600">3/5</div>
          </div>
        </div>
      </div>
      {{-- @endforeach --}}
    </div>
    {{-- table --}}
    <table class="table table-hover" v-else>
      <thead>
        <tr>
          <th scope="col" width="15">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" onchange="checkAll(this)" name="selectAll"
                id="selectAll">
              <label class="custom-control-label" for="selectAll"></label>
            </div>
          </th>
          <th scope="col">Product</th>
          <th scope="col">Inventory</th>
          <th scope="col">Type</th>
          <th scope="col">Rate</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($products as $product) --}}
        <tr>
          {{-- 
            <td>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="product" value="{{$product->id}}"
          id="{{$product->id}}">
          <label class="custom-control-label" for="{{$product->id}}"></label>
  </div>
  </td>
  <td><a href="/auth/products/{{$product->id}}"><img src="{{$product->img}}"
        class="img-thumbnail d-none d-md-inline-block" width="35" style="margin-right:8px">{{$product->title}}</a></td>
  <td>{{$product->inventory}} In Stock</td>
  <td>{{$product->type}}</td> --}}
  {{-- <td>{{$product->rate}}</td> --}}
  <td>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="product" value="product-id" id="Product-id">
      <label class="custom-control-label" for="Product-id"></label>
    </div>
  </td>
  <td><a href="#"><img src="/img/default-product.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
        style="margin-right:8px">Iphone</a></td>
  <td>5 in stock</td>
  <td>Mobile</td>
  <td>3/5</td>
  </tr>
  {{-- @endforeach --}}
  </tbody>
  </table>
  {{-- @endif --}}
</div>
</div>
@endsection
@section('script')
<script>
  let app = new Vue({  
  el:".content",
  data:{
    grid:false
  },
  methods:{
    Grid(){
      this.grid = true;
    },
    table(){
      this.grid = false;
    },
  }
 })
 function checkAll(ele) {
     var checkboxes = $('input[name="product"]');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }
</script>
@endsection