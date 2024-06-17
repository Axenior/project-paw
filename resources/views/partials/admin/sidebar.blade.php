<div class="d-flex flex-column p-3 bg-light shadow min-vh-100 collapse show" style="height:100%;">
  <a href="/admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <span class="fs-4">GadgetKu</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
          <a href="/admin" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
              Home
          </a>
      </li>
      <li>
          <a href="/admin/product" class="nav-link {{ request()->is('admin/product*') ? 'active' : '' }}">
              Produk
          </a>
      </li>
      <li>
          <a href="/admin/order" class="nav-link {{ request()->is('admin/order*') ? 'active' : '' }}">
              Pesanan
          </a>
      </li>
  </ul>
</div>