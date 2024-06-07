@extends('layouts.admin')

@section('title', 'Produk')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="/admin/produk/create" class="btn btn-primary mb-3">Tambah Produk</a>
    {{-- <div class="row">
        @foreach ($produks as $produk)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset($produk->gambar) }}" class="card-img-top" alt="{{ $produk->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produk->nama }}</h5>
                        <p class="card-text">Harga: Rp {{ number_format($produk->harga) }}</p>
                        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus produk ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}
</div>
@endsection