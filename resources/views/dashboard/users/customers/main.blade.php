@extends('layouts.dashboard.app')
@section('title','Customers')
@section('content')
<div class="content">
  {{-- header --}}
  @component('componants.dashHeading')
  @slot('title')
  Customers
  @endslot
  @slot('link')
  /auth/customers/create
  @endslot
  @slot('Add')
  Add Customer
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
        <span class="mr-1">View :</span>
        <i class="fas fa-th-list" :class="{'active' : !grid}" @click="view()" data-toggle="tooltip"
          data-placement="bottom" title="List"></i>
        <i class="fas fa-th-large" :class="{'active' : grid }" @click="view()" data-toggle="tooltip"
          data-placement="bottom" title="Grid"></i>
      </div>
    </div>
    {{-- grid --}}
    <div class="row mx-0 my-2 justify-around" v-if="grid">
      {{-- @foreach($customers as $customer) --}}
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
              <input type="checkbox" class="custom-control-input" @click="selectAll()" name="selectAll" id="SelectAll">
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
              <input type="checkbox" class="custom-control-input" name="customer" value="{{$customer->id}}"
          id="{{customer->id}}" @change="selected()">
          <label class="custom-control-label" for="{{$customer->id}}"></label>
  </div>
  </td>
  <td><a href="/auth/customers/{{$customer->id]}"><img src="{{$customer->img}}" class="img-thumbnail d-none
          d-md-inline-block" width="35" style="margin-right:8px">{{$customer->name}}</a></td>
  <td>{{$customer->Country}}</td>
  <td>{{$customer->orders}}</td>
  <td>{{$customer->spent}}</td> --}}
  <td scope="col">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="customer" @change="selected()" value="customerID"
        id="selectAll">
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
        $('input[name="customer"]').prop('checked',true);
      }else{
        // diselect All
        $('input[name="customer"]').prop('checked',false);        
      }
    },
    selected(){
      if($('input[name="customer"]:not(:checked)').length == 0){ 
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