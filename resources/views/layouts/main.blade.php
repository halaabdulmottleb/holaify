<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Holafiy - @yield('title')</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">
  {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
    {{-- navbar --}}
    <nav class="navbar navbar-expand-md shadow-sm">
      <div class="container">
        {{-- nav brand --}}
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="/img/brand.svg" width="30" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0s"
            alt="brand-img">
          <span class="wow fadeInLeft" data-wow-duration="1s"
            data-wow-delay="1s">{{ config('app.name', 'Holaify') }}</span>
        </a>

        <div class="navs">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <div class="nav-item">
              {{-- cart --}}
              <a class="nav-link" href="/cart" v-pre>
                {{-- <i class="lni-cart"></i> --}}
                <img src="/img/cart.svg" alt="cart" width="25">
              </a>
            </div>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                <img src="/img/default-user.svg" width="25" style="display:inline-block;border-radius:50%">
                <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                {{-- profile --}}
                <a class="dropdown-item" href="/auth">
                  <i class="far fa-user pr-2"></i> {{ __('Dashboard') }}
                </a>
                {{-- profile --}}
                <a class="dropdown-item" href="#">
                  <i class="far fa-user pr-2"></i> {{ __('Profile') }}
                </a>
                {{-- logout --}}
                <a class="dropdown-item" href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt pr-2"></i> {{ __('Logout') }}
                </a>
                {{-- {{ route('logout') }} --}}
                <form id="logout-form" action="#" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    {{-- main content --}}
    <div class="main p-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
      {{-- content --}}
      @yield('content')
    </div>
  </div>
  {{-- loading --}}
  {{-- @include('componants.loading') --}}
  {{-- script files --}}
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script>
  let app = new Vue({
    el:'#app',
    data:{},
    methods:{
      loading(){
        
      }
    }
  })
  </script>
</body>

</html>