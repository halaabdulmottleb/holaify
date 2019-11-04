@extends('layouts.dashboard.app')
@section('title','Customers')
@section('content')
<div class="content">
  {{-- header --}}
  <div class="header p-2">
    <div class="head">
      <h3>Customers</h3>
    </div>
    {{-- add Customer --}}
    <div class="add">
      <a class="btn btn-primary" href="/auth/customers/create">
        Add Customer
      </a>
    </div>
  </div>

  {{-- content --}}
  <div class="main p-3">
    {{-- @if(!$customers->count()) --}}
    {{-- <div class="not-yet">
      <h3 class="my-3">No Customers Yet</h3>
      <img src="/img/not-found.svg" alt="no-product" width="380">
    </div>
    @else--}}
    {{-- search --}}
    <div class="search w-100 py-3">
      <div class="form-group mb-0">
        <div class="position-relative p-0">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search"
            placeholder="Search for Customers">
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
      <div class="p-0 div-table bg-white m-4">
        <div class="bg-white rounded-lg p-4">
          <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto" src="/img/default-user.svg">
          <div class="text-center m-2">
            <a href="#">
              <h2 class="text-lg">Erin Lindford</h2>
            </a>
            <div class="text-gray-600">Cairo/Egypt</div>
            <div class="text-gray-600">0 orders</div>
            <div class="text-gray-600">EGP 0.00 Spent</div>
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
              <input type="checkbox" class="custom-control-input"  onchange="checkAll(this)" name="selectAll" id="SelectAll">
              <label class="custom-control-label" for="SelectAll"></label>
            </div>
          </th>
          <th scope="col">Name</th>
          <th scope="col">Country</th>
          <th scope="col">Orders</th>
          <th scope="col">Spent</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($customers as $customer) --}}
        <tr>
          {{-- <td scope="col">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="customer" value="{{$customer->id}}" id="{{customer->id}}">
              <label class="custom-control-label" for="{{$customer->id}}"></label>
            </div>
          </td>
            <td><a href="/auth/customers/{{$customer->id]}"><img src="{{$customer->img}}" class="img-thumbnail d-none
          d-md-inline-block" width="35"
          style="margin-right:8px">{{$customer->name}}</a></td>
          <td>{{$customer->Country}}</td>
          <td>{{$customer->orders}}</td>
          <td>{{$customer->spent}}</td> --}}
          <td scope="col">
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="customer" value="customerID" id="selectAll">
                  <label class="custom-control-label" for="selectAll"></label>
                </div>
          </td>
          <td><a href="#"><img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
                style="margin-right:8px">Mark</a></td>
          <td>Egypt</td>
          <td>0 Orders</td>
          <td>LE 0.00 spent</td>
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
    }
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