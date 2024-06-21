<nav class="navbar navbar-expand bg-midnight-blue">
  <div class="container">
    <a class="navbar-brand text-white" href="/homepage">
      <i class="bi bi-cart4 fs-5"></i>
      <span class="fs-6">GadgetKu</span>
    </a>
    <div class="" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="mr-2 d-lg-inline text-gray-600 small">{{auth()->user() ? auth()->user()->username : 'Guest'}}</span>
            <i class="bi bi-person fs-5"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            @if (!auth()->user())
            <li><a class="dropdown-item" href="/login">Login</a></li>
            <li><a class="dropdown-item" href="/register">Register</a></li>
            @else            
              @if (auth()->user()->level == 'client')
                <li><a class="dropdown-item" href="/cart">Keranjang</a></li>
                <li><a class="dropdown-item" href="/history">Riwayat Pemesanan</a></li>
                    
                @else
                <li><a class="dropdown-item" href="/admin">Dashboard</a></li>

              @endif
                <li><hr class="dropdown-divider"></li>
              <li>                    
                <form action="{{route('logout')}}" method="POST">
                  @csrf
                  <button class="dropdown-item" type="submit">Logout</button>
                </form>
              </li>
            @endif
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>