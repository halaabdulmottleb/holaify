@extends('layouts.dashboard.app')
@section('title','Products')
@section('content')
<div class="content">
  {{-- header --}}
  @component('componants.dashHeading')
  @slot('title')
  Products
  @endslot
  @slot('link')
  /auth/products/create
  @endslot
  @slot('Add')
  Add Products
  @endslot
  @endcomponent
  {{-- content --}}
  <div class="main p-3">
    {{-- session message --}}
    @if (session('message'))
    @component('componants.session')
    {{session('message')}}
    @endcomponent
    @endif
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
      {{-- grid --}}
      <div class="grid">
        <span class="mr-1">View :</span>
        <i class="fas fa-th-list" :class="{'active' : !grid}" @click="view()" data-toggle="tooltip"
          data-placement="bottom" title="List"></i>
        <i class="fas fa-th-large" :class="{'active' : grid }" @click="view()" data-toggle="tooltip"
          data-placement="bottom" title="Grid"></i>
      </div>
    </div>
    {{-- grid --}}
    <div class="row mx-0 my-2 justify-around" v-if="grid">
      {{-- @foreach($products as $product) --}}
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
          <th scope="col" width="15" class="d-flex align-items-center border-0">
            <div class="custom-control custom-checkbox" style="z-index: 1;" data-toggle="tooltip" data-placement="right"
              title="Select all Products">
              <input type="checkbox" class="custom-control-input selected-all" name="selectAll" id="selectAll"
                @click="selectAll()">
              <label class="custom-control-label" for="selectAll"></label>
            </div>
            {{-- delete selected --}}
            <div class="position-absolute pl-5" v-if="selectedAll">
              <form action="" method="GET">
                @csrf
                <button class="btn btn-primary btn-dis">
                  {{ __('Delete Selected') }}
                </button>
              </form>
            </div>
          </th>
          {{-- <th scope="col">Product</th>
          <th scope="col">Inventory</th>
          <th scope="col">Type</th>
          <th scope="col">Rate</th> --}}
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($products as $product) --}}
        <tr>
          {{-- 
            <td>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="product" value="{{$product->id}}"
          id="{{$product->id}}" @change="selected()">
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
      <input type="checkbox" class="custom-control-input" name="product" value="product-id" id="Product-id"
        @change="selected()">
      <label class="custom-control-label" for="Product-id"></label>
    </div>
  </td>
  <td><a href="#"><img src="/img/default-product.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
        style="margin-right:8px">Iphone</a></td>
  <td>5 in stock</td>
  <td>Mobile</td>
  <td>3/5</td>
  </tr>
  {{-- sdasda/ --}}
  <tr>
    <td>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="product" value="product-id" id="Product-id2"
          @change="selected()">
        <label class="custom-control-label" for="Product-id2"></label>
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
    grid:false,
    selectedAll:false,
    anySelect:false
  },
  methods:{
    // grid view
    view(){
      this.grid = !this.grid;
    },
    selectAll(){
      this.selectedAll = !this.selectedAll;
      if(this.selectedAll){
        // select All
        $('input[name="product"]').prop('checked',true);
      }else{
        // diselect All
        $('input[name="product"]').prop('checked',false);        
      }
    },
    selected(){
      if($('input[name="product"]:not(:checked)').length == 0){ 
        // all are checked
        this.selectedAll = true;
        $('input[name="selectAll"]').prop('checked', true);
        $('input[name="selectAll"]').prop('indeterminate', false);
      }else{
        // some checkbox checked
        this.selectedAll = false;
        $('input[name="selectAll"]').prop('indeterminate', true);
        $('input[name="selectAll"]').prop('checked', false);
      }
    },
    closeSession(){
      $('.session').remove();
    }
  }
})
</script>
@endsection