<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #27374D;">
  <div class="container">
    <a class="navbar-brand text-white" href="/admin">
        <i class="bi bi-cart4 fs-5"></i>
        <span class="fs-5">ADMIN PANEL</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto d-lg-none">
              <li class="nav-item">
                  <a href=" {{ route('admin.dashboard')}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                      Home
                  </a>
              </li>
              <li>
                  <a href=" {{ route('product.index')}}" class="nav-link {{ request()->is('admin/product*') ? 'active' : '' }}">
                      Produk
                  </a>
              </li>
              <li>
                  <a href=" {{ route('order.index')}}" class="nav-link {{ request()->is('admin/order*') ? 'active' : '' }}">
                      Pesanan
                  </a>
              </li>
          </ul>
          <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                      Admin 
                  </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                        <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                      </form>
                    </li>
                  </ul>
              </li>
          </ul>
      </div>
  </div>
</nav>