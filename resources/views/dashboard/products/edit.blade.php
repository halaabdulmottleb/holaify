@extends('layouts.dashboard.app')
@section('title','Edit Product')
@section('content')
<div class="content">
    {{-- head --}}
    <div class="header p-2 pb-3">
        <div class="head">
            <h3>Edit Product..</h3>
        </div>
        {{-- back to products --}}
        <div class="add">
            <a href="/auth/products">
                Products
            </a>
        </div>
    </div>
    {{-- form --}}
    <div class="main px-4 py-3">
        <form method="POST" action="/auth/products" class="w-100 row m-0">
            @csrf
            <div class="col-md-8 p-0">
                {{-- title ,desc. --}}
                <div class="form">
                    <div class="container">
                        {{-- title --}}
                        <div class="form-group">
                            <label for="title" class="col-md-12">{{ __('Title') }}</label>
                            <div class="col-12 col-md-10 ml-md-4">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" placeholder="Enter Collection title" required>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- description --}}
                        <div class="form-group">
                            <label for="description" class="col-md-12">{{ __('Description') }}</label>

                            <div class="col-12 col-md-10 ml-md-4">
                                <textarea name="description"
                                    class="form-control @error('description') is-invalid @enderror" id="description"
                                    rows="5" placeholder="Enter Collection title"></textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                {{-- price , quantity --}}
                <div class="form">
                    <div class="container">
                        {{-- price , quantity --}}
                        <div class="form-group row">
                            {{-- price --}}
                            <div class="col-12 col-md-6">
                                <label for="price">{{ __('Price') }}</label>
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror"
                                    name="price" placeholder="Product Price">
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- quantity --}}
                            <div class="col-12 col-md-6">
                                <label for="quantity" class="">{{ __('Quantity') }}</label>
                                <input id="quantity" type="text"
                                    class="form-control @error('quantity') is-invalid @enderror" name="quantity"
                                    placeholder="Product Quantity">

                                @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- right side --}}
            <div class="col-md-4">
                {{-- image --}}
                <div class="form px-4">
                    <label>Product Image</label>
                    <div class="imgs">
                        {{-- if there is img select --}}
                        <div class="img mb-2 m-auto w-100" style="display:none;position:relative;">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <img src="#" id="img" width="215" class="img-thumbnail m-auto">
                        </div>
                        {{-- img input --}}
                        <div class="post-img w-100 my-2 text-center">
                            <label for="img-post" data-toggle="tooltip" data-placement="right" title="Upload Img"><span
                                    class="btn btn-dark">Add Image</span></label>
                            <input type="file" class="{{$errors->has('image') ? 'is-invalid' : ''}}" name="image"
                                id="img-post" style="display:none">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- type , tags and collection --}}
                <div class="form px-4">
                    {{-- type --}}
                    <div class="form-group">
                        <label for="type" class="col">{{ __('Type') }}</label>
                        <div class="col-md-12">
                            <input id="type" type="text" class="form-control @error('type') is-invalid @enderror"
                                name="type" placeholder="Product Type">
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- tags --}}
                    <div class="form-group">
                        <label for="tags" class="col">{{ __('Tags') }}</label>
                        <div class="col-md-12">
                            <input id="tags" type="text" class="form-control @error('tags') is-invalid @enderror"
                                name="tags" placeholder="Add tags">
                            @error('tags')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    {{-- collections --}}
                    <div class="form-group mb-0">
                        <label for="collection" class="col">{{ __('Collections') }}</label>
                        <div class="col-md-12">
                            <select class="custom-select @error('collection') is-invalid @enderror" id="collection"
                                name="collection_id">
                                <option selected disabled>Select Collection</option>
                                <option value="1">Collection</option>
                            </select>
                            @error('collection')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            {{-- btns --}}
            <div class="form-group row w-100 mx-0">
                {{-- submit --}}
                <div class="col-md-4 mb-2">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Create') }}
                    </button>
                </div>
                {{-- back --}}
                <div class="col-md-2">
                    <a  href="/auth/products" class="btn btn-primary w-100 btn-dis">
                        {{ __('Discard') }}
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection