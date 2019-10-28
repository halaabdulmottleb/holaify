<nav id="navbarSupportedContent2" class="collapse wow slideInLeft" data-wow-duration="2s" data-wow-delay="0s">
  <ul class="nav nav-tabs py-3">
    <div class="container">
      {{-- home --}}
      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}"><i class="fas fa-home"></i> Home</a>
      </li>
      {{-- orders --}}
      <li class="nav-item">
        <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false"><i class="fab fa-opencart"></i>
          Orders</a>
        <div class="dropdown-ul">
          <div class="li">
            <a class="dropdown-li" href="{{route('orders')}}">All Orders</a>
          </div>
          <div class="li">
            <a class="dropdown-li" href="{{route('checkouts')}}">Abandoned checkouts</a>
          </div>
        </div>
      </li>
      {{-- products --}}
      <li class="nav-item">
        <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-tags"></i>
          Products</a>
        <div class="dropdown-ul">
          <div class="li">
            <a class="dropdown-li" href="{{route('products')}}">All Products</a>
          </div>
          <div class="li">
            <a class="dropdown-li" href="{{route('collections')}}">Collections</a>
          </div>
        </div>
      </li>
      {{-- users --}}
      <li class="nav-item">
        <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i>
          Users</a>
        <div class="dropdown-ul">
          <div class="li">
            <a class="dropdown-li" href="{{route('admins')}}">Admins</a>
          </div>
          <div class="li">
            <a class="dropdown-li" href="{{route('customers')}}">Customers</a>
          </div>
        </div>
      </li>
      {{-- analytics --}}
      <li class="nav-item">
        <a class="nav-link" href="{{route('analytics')}}"><i class="fas fa-chart-pie"></i> Analytics</a>
      </li>
    </div>
  </ul>
</nav>