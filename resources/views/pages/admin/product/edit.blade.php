@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
<div class="container">
    <h1>Edit Produk</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-2">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="form-group mb-2">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" id="category" name="category" required>
                <option value="">Pilih Kategori</option>
                <option value="Smartphone" {{ $product->category == 'Smartphone' ? 'selected' : '' }}>Smartphone</option>
                <option value="Laptop" {{ $product->category == 'Laptop' ? 'selected' : '' }}>Laptop</option>
                <option value="Tablet" {{ $product->category == 'Tablet' ? 'selected' : '' }}>Tablet</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group mb-2">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
        </div>
        <div class="form-group mb-2">
            <label for="warranty" class="form-label">Garansi</label>
            <select class="form-select" id="warranty" name="warranty" required>
                <option value="">Pilih Garansi</option>
                <option value="1 Tahun" {{ $product->warranty == '1 Tahun' ? 'selected' : '' }}>1 Tahun</option>
                <option value="2 Tahun" {{ $product->warranty == '2 Tahun' ? 'selected' : '' }}>2 Tahun</option>
                <option value="3 Tahun" {{ $product->warranty == '3 Tahun' ? 'selected' : '' }}>3 Tahun</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="memory" class="form-label">Memori</label>
            <select class="form-select" id="memory" name="memory" value="{{ $product->memory }} required>
                <option value=">Pilih Memori</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="form-group mb-2">
            <label for="discount" class="form-label">Diskon</label>
            <input type="number" class="form-control" id="discount" name="discount" value="{{ $product->discount }}">
        </div>
        <a href="{{ route('product.index') }}" class="btn btn-secondary mt-4">Batal</a>
        <button type="submit" class="btn btn-primary mt-4 mx-2">Simpan Perubahan</button>
    </form>
</div>

<script>
    var categoryDropdown = document.getElementById('category');
    var memoryDropdown = document.getElementById('memory');

    var memoryOptions = {
        'Smartphone': ['6/128 GB', '8/256 GB', '8/512 GB', '12/256 GB', '12/512 GB'],
        'Laptop': ['256 GB SSD', '512 GB SSD', '1 TB SSD' , '1 TB HDD', '2 TB HDD'],
        'Tablet': ['128 GB', '256 GB', '512 GB','1 TB']
    };

    function updateMemoryOptions() {
        var selectedCategory = categoryDropdown.value;
        memoryDropdown.innerHTML = '<option value="">Pilih Memori</option>';

        if (memoryOptions[selectedCategory]) {
            memoryOptions[selectedCategory].forEach(function(option) {
                var optionElement = document.createElement('option');
                optionElement.textContent = option;
                memoryDropdown.appendChild(optionElement);
            });
        }
    }
    categoryDropdown.addEventListener('change', updateMemoryOptions);

    updateMemoryOptions();
</script>
@endsection
