@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
<div class="container">
    <h1>Tambah Produk</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-2">
            <label for="name">Nama Produk</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group mb-2">
            <label for="category">Kategori</label>
            <select class="form-control" id="category" name="category" required>
                <option value="">Pilih Kategori</option>
                <option value="Smartphone" {{ old('category') == 'Smartphone' ? 'selected' : '' }}>Smartphone</option>
                <option value="Laptop" {{ old('category') == 'Laptop' ? 'selected' : '' }}>Laptop</option>
                <option value="Tablet" {{ old('category') == 'Tablet' ? 'selected' : '' }}>Tablet</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="image">Gambar</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="form-group mb-2">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group mb-2">
            <label for="warranty">Garansi</label>
            <select class="form-control" id="warranty" name="warranty" required>
                <option value="">Pilih Garansi</option>
                <option value="1 Tahun" {{ old('warranty') == '1 Tahun' ? 'selected' : '' }}>1 Tahun</option>
                <option value="2 Tahun" {{ old('warranty') == '2 Tahun' ? 'selected' : '' }}>2 Tahun</option>
                <option value="3 Tahun" {{ old('warranty') == '3 Tahun' ? 'selected' : '' }}>3 Tahun</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="memory">Memori</label>
            <select class="form-control" id="memory" name="memory" required>
                <option value="">Pilih Memori</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="price">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', 0) }}" required>
        </div>
        <div class="form-group mb-2">
            <label for="discount">Diskon</label>
            <input type="number" class="form-control" id="discount" name="discount" value="{{ old('discount', 0) }}">
        </div>
        <a href="{{ route('product.index') }}" class="btn btn-secondary mt-4">Batal</a>
        <button type="submit" class="btn btn-primary mt-4 mx-2">Simpan</button>
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
