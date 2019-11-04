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
      <a class="btn btn-primary" href="/auth/collections/create">
        Add Collection
      </a>
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
    {{-- @if(!$collections->count()) --}}
    {{-- <div class="not-yet ">
      <h3 class="my-3">No Collections Yet</h3>
      <img src="/img/not-found.svg" alt="no-collection" width="380">
    </div>
    @else --}}
    {{-- select & search --}}
    <div class="search w-100 py-3">
      {{-- search --}}
      <div class="form-group mb-0">
        <div class="p-0 position-relative">
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
          <th scope="col" width="15">#</th>
          <th scope="col">Collections</th>
          <th scope="col">no. of Products</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($collections as $collection) --}}
        <tr>
          {{-- <td>1</td>
          <td><a href="/auth/collections/{{$collection->id}}">{{$collection->title}}</a></td>
          <td>{{$collection->no-of-products}}</td>
          --}}
          <td>1</td>
          <td><a href="#">Phones</a></td>
          <td>3 Product</td>
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