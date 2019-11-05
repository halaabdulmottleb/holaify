@extends('layouts.dashboard.app')
@section('title','Abandoned Checkouts')
@section('content')
<div class="content">
  {{-- header --}}
  <div class="header p-2">
    <div class="head">
      <h3>Abandoned Checkouts</h3>
    </div>
  </div>
  {{-- content --}}
  <div class="main p-3">
    {{-- session message --}}
    @if (session('message'))
    <div class="text-center session">
      <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
        role="alert">
        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{ session('message')}}</span>
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20" style="color:white" @click="closeSession()">
          <title>Close</title>
          <path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
      </div>
    </div>
    @endif
    {{-- @if(!$checkouts->count()) --}}
    {{-- <div class="not-yet">
      <h3 class="p-2 my-3">No Abandoed Checkouts Yet</h3>
      <img src="/img/not-found.svg" alt="no-order" width="380">      
    </div> 
    @else--}}
    {{-- search --}}
    <div class="search w-100 py-3">
      <div class="form-group mb-0">
        <div class="p-0 position-relative">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search"
            placeholder="Search for Checkouts">
        </div>
      </div>
    </div>
    {{-- table --}}
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" width="15">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="SelectAll" id="SelectAll">
              <label class="custom-control-label" for="SelectAll"></label>
            </div>
          </th>
          <th scope="col">Customer</th>
          <th scope="col">Order</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($checkouts as $checkout) --}}
        <tr>
          {{-- <td>
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="{{$checkout->id}}" id="{{$checkout->id}}">
          <label class="custom-control-label" for="{{$cheakout->id}}"></label>
  </div>
  </td>
  <td><a href=""><img src="{{$checkout->customer->img}}" class="img-thumbnail d-none d-md-inline-block" width="35"
        style="margin-right:8px">{{$checkout->customer->name}}</a></td>
  <td>{{$checkout->order->title}}</td> --}}
  <td>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="" id="">
      <label class="custom-control-label" for=""></label>
    </div>
  </td>
  <td><a href="#"> <img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
        style="margin-right:8px">Mark</a></td>
  <td>iphone7</td>
  </tr>
  {{-- $endforeach --}}
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
  },
  methods:{
    closeSession(){
      $('.session').remove();
    }
  }
 })
</script>
@endsection