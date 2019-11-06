@extends('layouts.dashboard.app')
@section('title','Orders')
@section('content')
<div class="content">
  {{-- header --}}
  @component('componants.dashHeading')
  @slot('title')
  Orders
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
  {{-- @if (!$orders->count()) --}}
  {{-- <div class="not-yet">
      <h3 class="my-3">No Orders Yet</h3>
      <img src="/img/not-found.svg" alt="no-order" width="380">
    </div>
    @else --}}
  {{-- search --}}
  <div class="search w-100 py-3">
    <div class="form-group mb-0">
      <div class="p-0 position-relative">
        <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
        <input id="search" type="text" class="form-control search-input" name="search" placeholder="Search for Orders">
      </div>
    </div>
  </div>
  {{-- table --}}
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" width="15">#</th>
        <th scope="col">Customer</th>
        <th scope="col">Order</th>
        <th scope="col">address</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach($orders as $order) --}}
      <tr>
        {{-- <td>1</td>
          <td><a href="/auth/orders/{{$order->id}}"> <img src="{{$order->img}}"
          class="img-thumbnail d-none d-md-inline-block" width="35"
          style="margin-right:8px">{{$order->custoemer->name}}</a></td>
        <td>{{$order->product->title}}</td>
        <td>{{$order->customer->address}}</td> --}}
        <td>1</td>
        <td><a href="#"><img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
              style="margin-right:8px">Mark</a></td>
        <td>order</td>
        <td>41st.</td>
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
  },
  methods:{
    closeSession(){
      $('.session').remove();
    }
  }
 })
</script>
@endsection