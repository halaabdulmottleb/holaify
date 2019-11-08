@extends('layouts.main')
@section('title','Profile')
@section('content')
<div class="container-fluid">
  <div class="product-div">
    <div class="row mx-0 w-100">
      {{-- ptoduct image --}}
      <div class="product-img m-1">
        <img src="/img/shopping.jpg" class="img-fluid my-4 mx-auto" height="330" alt="product-img">
      </div>
      {{-- product info --}}
      <div class="product-info m-1 p-3">
        <div class="info m-2">
          <div class="product-title pb-1">Product title</div>
          <div class="product-price pb-1 mb-2">EGP 10.00</div>
          <div class="product-des p-2">
            <div class="header">
              Description :
            </div>
            <div class="des">
              this is description about that product
              b
              asd
              asd
              asd
              as
              asd
            </div>
          </div>
          <div class="product-type p-2">
            <div class="header">Type :</div>
            <span>Mobile</span>
          </div>
          <div class="product-tags p-2">
            <div class="header">Tags :</div>
            <span class="tag"><a href="/tags"> #Tag</a></span>
            <span class="tag"><a href="/tags"> #Tag</a></span>
            <span class="tag"><a href="/tags"> #Tag</a></span>
            <span class="tag"><a href="/tags"> #Tag</a></span>
          </div>
          <div class="add-to-cart py-3 px-2">
            <button class="btn btn-primary">Add to Cart <i class="lni-cart"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection