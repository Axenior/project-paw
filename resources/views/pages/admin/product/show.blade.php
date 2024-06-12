@extends('layouts.admin')

@section('title', 'Detail Produk')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="col">
                <h1>Detail Produk</h1>
            </div>
            @if($product->path)
            <img src="{{ asset($product->path) }}" alt="{{ $product->name }}" class="img-fluid mb-3" width="100%">
            @endif
        </div>
        <div class="col-md-6">
            <div class="row mb-3">
                <div class="col text-end">
                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p><strong>Kategori:</strong> {{ $product->category }}</p>
                    <p><strong>Deskripsi:</strong> {{ $product->description }}</p>
                    <p><strong>Garansi:</strong> {{ $product->warranty }}</p>
                    <p><strong>Memori:</strong> {{ $product->memory }}</p>
                    <p><strong>Harga:</strong> Rp {{ number_format($product->price) }}</p>
                    <p><strong>Diskon:</strong> {{ $product->discount }}%</p>
                    <p><strong>Harga Setelah Diskon:</strong> Rp {{ number_format($product->price - ($product->price * $product->discount / 100)) }}</p>
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $product->id }}">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
