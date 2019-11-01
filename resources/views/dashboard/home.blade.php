@extends('layouts.dashboard.app')
@section('title','Home')
@section('content')

<div class="content dash">
    {{-- head --}}
    <div class="head">
        <div class="img">
            {{-- img --}}
        </div>
        <div class="p-3">
            {{-- <h3>Welcome {{Auth::user()->name}} to <span class="brand">Holafiy Dashboard</span></h3> --}}
            <h3>Welcome Mahmoud to <span class="brand">Holafiy Dashboard</span></h3>
        </div>
    </div>
    {{-- overview --}}
    <div class="overview row mx-0">
        <div class="col-md-7">
            activity
        </div>
        <div class="col-md-5">
            bla bla
        </div>
    </div>
</div>
@endsection