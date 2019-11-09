@extends('layouts.main')
@section('title','Home')
@section('content')
<div class="container">
    {{-- recommend items --}}
    <div class="recommend-div mb-4">
        <div class="header">
            Recommended For You
        </div>
        <div class="recommended my-2">
            {{-- max four div --}}
            <div class="w-64 max-w-xs rounded overflow-hidden recommend">
                <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
                <div class="px-2 body">
                    <div class="d-flex justify-content-between m-1">
                        <div class="font-bold text-sm title">The Coldest Sunset</div>
                        <div class="price font-bold text-sm">EGP 10.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- top rated --}}
    <div class="rated-div">
        <div class="header">
            Top Rated
        </div>
        <div class="rateded my-3">
            {{-- top item --}}
            <div class="md:w-1/3">
                <div class="w-full m-auto max-w-xs rounded overflow-hidden shadow-md rated">
                    <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
                    <div class="px-6 py-3 body">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <div class="d-flex justify-content-between my-3 mx-1">
                            <div class="price font-bold text-base mb-2">EGP 10.00</div>
                            <div class="rate">
                                <input type="radio" name="stars" id="star-1" class="d-none" />
                                <input type="radio" name="stars" id="star-2" class="d-none" />
                                <input type="radio" name="stars" id="star-3" class="d-none" />
                                <input type="radio" name="stars" id="star-4" class="d-none" />
                                <input type="radio" name="stars" id="star-5" class="d-none" />
                                <section>
                                    <label for="star-1">
                                        <i class="lni-star-filled"></i>
                                    </label>
                                    <label for="star-2">
                                        <i class="lni-star-filled"></i>
                                    </label>
                                    <label for="star-3"><i class="lni-star-filled"></i>
                                    </label>
                                    <label for="star-4"><i class="lni-star-filled"></i>
                                    </label>
                                    <label for="star-5"><i class="lni-star-filled"></i>
                                    </label>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- more items --}}
            <div class="md:w-2/3">
                {{-- 4 only --}}
                <div class="w-100 top-rated">
                    <div class="w-48 max-w-xs rounded overflow-hidden shadow-md rated">
                        <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
                        <div class="p-3 body">
                            <div class="font-bold text-lg mb-2 title w-100">The Coldest Sunset</div>
                            <div class="d-flex flex-column">
                                <div class="rate">
                                    <input type="radio" name="stars" id="star-1" class="d-none" />
                                    <input type="radio" name="stars" id="star-2" class="d-none" />
                                    <input type="radio" name="stars" id="star-3" class="d-none" />
                                    <input type="radio" name="stars" id="star-4" class="d-none" />
                                    <input type="radio" name="stars" id="star-5" class="d-none" />
                                    <section>
                                        <label for="star-1">
                                            <i class="lni-star-filled"></i>
                                        </label>
                                        <label for="star-2">
                                            <i class="lni-star-filled"></i>
                                        </label>
                                        <label for="star-3"><i class="lni-star-filled"></i>
                                        </label>
                                        <label for="star-4"><i class="lni-star-filled"></i>
                                        </label>
                                        <label for="star-5"><i class="lni-star-filled"></i>
                                        </label>
                                    </section>
                                </div>
                                <div class="price font-bold text-base mb-2">EGP 10.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- recentaly added --}}
    <div class="added-div">
        <div class="header">
            Recently added
        </div>
        <div class="just-added my-3">
            {{-- max 4 divs --}}
            <div class="w-64 max-w-xs rounded overflow-hidden shadow-md added">
                <img class="w-full" src="/img/shopping.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-2 body">
                    <div class="font-bold text-lg mb-2 title w-100">The Coldest Sunset</div>
                    <div class="d-flex justify-content-between m-1">
                        <span class="new">New</span>
                        <div class="price font-bold text-base mb-2">EGP 10.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection