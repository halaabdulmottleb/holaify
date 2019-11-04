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
      <a class="btn btn-primary" href="/auth/admins/create">
        Add Admin
      </a>
    </div>
  </div>
  {{-- content --}}
  <div class="main p-3">
    {{-- @if(!$admins->count()) --}}
    {{-- <div class="not-yet">
      <h3 class="my-3">No Admins Yet</h3>
      <img src="/img/not-found.svg" alt="No-admin" width="380">
    </div> 
    @else--}}
    {{-- search --}}
    <div class="search w-100 py-3">
      <div class="form-group mb-0">
        <div class="p-0 position-relative">
          <label for="search" class="position-absolute"><i class="fas fa-search"></i></label>
          <input id="search" type="text" class="form-control search-input" name="search"
            placeholder="Search for Admins">
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
          <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-6" src="/img/default-user.svg">
          <div class="text-center m-2">
            <a href="#">
              <h2 class="text-lg">Erin Lindford</h2>
            </a>
            <div class="text-gray-600">erinlindford@example.com</div>
            <div class="text-gray-600">(555) 765-4321</div>
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
              <input type="checkbox" class="custom-control-input"  onchange="checkAll(this)" name="selectAll" id="selectAll">
              <label class="custom-control-label" for="selectAll"></label>
            </div>
          </th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Number</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($admin as admin) --}}
        <tr>
          {{-- 
            <td>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="admin" value="{{$admin->id}}" id="{{$admin->id}}">
          <label class="custom-control-label" for="{{$admin->id}}"></label>
  </div>
  </td>
  <td><a href="/auth/admins/{{$admin->id}}"> <img src="{{$admin->img}}" class="img-thumbnail d-none d-md-inline-block"
        width="35" style="margin-right:8px">{{$admin->name}}</a></td>
  <td>{{$admin->email}}</td>
  <td>{{$admin->number}}</td> --}}
  <td>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="admin" value="adminID" id="adminID">
      <label class="custom-control-label" for="adminID"></label>
    </div>
  </td>
  <td><a href="#"><img src="/img/default-user.svg" class="img-thumbnail d-none d-md-inline-block" width="35"
        style="margin-right:8px">Mark</a></td>
  <td>admin@admin.com</td>
  <td>01155536247</td>
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