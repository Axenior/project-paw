<div class="d-flex flex-column p-3 bg-light shadow min-vh-100 collapse show" style="height:100%;">
  <a href="/admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <span class="fs-4">TOKO ONLEN</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
          <a href="/admin" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
              Home
          </a>
      </li>
      <li>
          <a href="/admin/produk" class="nav-link {{ request()->is('admin/produk*') ? 'active' : '' }}">
              Produk
          </a>
      </li>
      <li>
          <a href="/admin/pesanan" class="nav-link {{ request()->is('admin/pesanan*') ? 'active' : '' }}">
              Pesanan
          </a>
      </li>
  </ul>
</div>