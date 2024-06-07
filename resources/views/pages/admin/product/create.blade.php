@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
<h1>Input Produk</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="admin/produk/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok Produk</label>
        <input type="text" class="form-control" id="stok" name="stok" required>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Garansi</label>
        <input type="text" class="form-control" id="garansi" name="stok" required>
    </div>
    <div class="mb-3">
        <label for="diskon" class="form-label">Diskon (%)</label>
        <input type="number" class="form-control" id="diskon" name="diskon" min="0" max="100">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga Produk</label>
        <input type="number" class="form-control" id="harga" name="harga" required>
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar Produk</label>
        <input type="file" class="form-control" id="gambar" name="gambar">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Produk</button>
</form>

@endsection
