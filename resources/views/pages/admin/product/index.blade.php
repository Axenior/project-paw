@extends('layouts.admin')

@section('title', 'Produk')

@section('content')

<div class="container">
    <h1>Daftar Produk</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    <div class="mb-3">
      <label for="filter-category" class="form-label">Kategori Produk</label>
      <select id="filter-category" class="form-select" onchange="filterProducts()">
          <option value="all">Semua</option>
          <option value="Smartphone">Smartphone</option>
          <option value="Laptop">Laptop</option>
          <option value="Tablet">Tablet</option>
      </select>
  </div>

    <div class="table-responsive">
      <table id ="products-table" class="table table-bordered">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Gambar</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Diskon</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
              @foreach($products as $product)
              <tr class ="product-row" data-category=" {{ $product->category }}">
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->category }}</td>
                  <td><img src="{{ asset($product->path) }}" alt="{{ $product->name }}" width="100px" height="100px" style="object-fit: cover"></td>
                  <td>{{ Str::limit($product->description, 50) }}</td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->discount }}</td>
                  <td>
                      <a href="{{ route('product.show', $product->id) }}" class="btn btn-info btn-sm mb-2">Detail</a>
                      <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning btn-sm mb-2">Edit</a>

                      <button type="button" class="btn btn-danger btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $product->id }}">
                          Hapus
                        </button>

                        <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $product->id }}" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Apakah Anda yakin ingin menghapus produk ini?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </div>

  <script>
  function filterProducts() {
      var category = document.getElementById('filter-category').value;
      var rows = document.querySelectorAll('#products-table .product-row');
      
      rows.forEach(function(row) {
          if (category === 'all' || row.getAttribute('data-category').trim() === category) {
              row.style.display = '';
          } else {
              row.style.display = 'none';
          }
      });
  }
  </script>
@endsection