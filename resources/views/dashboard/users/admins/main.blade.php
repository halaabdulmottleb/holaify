@extends('layouts.dashboard.app')
@section('title','Admins')
@section('content')
<div class="content">
  {{-- header --}}
  @component('componants.dashHeading')
  @slot('title')
  Admins
  @endslot
  @slot('link')
  /auth/admins/create
  @endslot
  @slot('Add')
  Add Admin
  @endslot
  @endcomponent
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
        <span class="mr-1">View :</span>
        <i class="fas fa-th-list" :class="{'active' : !grid}" @click="view()" data-toggle="tooltip"
          data-placement="bottom" title="List"></i>
        <i class="fas fa-th-large" :class="{'active' : grid }" @click="view()" data-toggle="tooltip"
          data-placement="bottom" title="Grid"></i>
      </div>
    </div>
    {{-- grid --}}
    <div class="row mx-0 my-2 justify-around" v-if="grid">
      {{-- @foreach($admin as $admin) --}}
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
              <input type="checkbox" class="custom-control-input" @click="selectAll()" name="selectAll"
                id="selectAll">
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
              <input type="checkbox" class="custom-control-input" name="admin" value="{{$admin->id}}"
          id="{{$admin->id}}" @change="selected()">
          <label class="custom-control-label" for="{{$admin->id}}"></label>
  </div>
  </td>
  <td><a href="/auth/admins/{{$admin->id}}"> <img src="{{$admin->img}}" class="img-thumbnail d-none d-md-inline-block"
        width="35" style="margin-right:8px">{{$admin->name}}</a></td>
  <td>{{$admin->email}}</td>
  <td>{{$admin->number}}</td> --}}
  <td>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="admin" @change="selected()" value="adminID" id="adminID">
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
        $('input[name="admin"]').prop('checked',true);
      }else{
        // diselect All
        $('input[name="admin"]').prop('checked',false);        
      }
    },
    selected(){
      if($('input[name="admin"]:not(:checked)').length == 0){ 
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