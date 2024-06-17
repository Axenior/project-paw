@extends('layouts.admin')

@section('title', 'Pesanan')

@section('content')
<div class="container">
    <h1>Halaman Pesanan</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="mb-3">
        <label for="filter-status" class="form-label">Status Pesanan:</label>
        <select id="filter-status" class="form-select" onchange="filterOrders()">
            <option value="all">Semua</option>
            <option value="dipesan">Dipesan</option>
            <option value="diproses">Diproses</option>
            <option value="selesai">Selesai</option>
        </select>
    </div>
    
    <table id="orders-table" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pembeli</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Diskon</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchases as $purchase)
            <tr class="order-row" data-status="{{ $purchase->status }}">
                <td>{{ $purchase->id }}</td>
                <td>{{ $purchase->first_name }} {{ $purchase->last_name }}</td>
                <td>{{ $purchase->product_name }}</td>
                <td>{{ $purchase->product_category }}</td>
                <td><img src="{{ asset($purchase->product_path) }}" alt="{{ $purchase->product_name }}" width="100px" height="100px" style="object-fit: cover"></td>
                <td>{{ Str::limit($purchase->product_description, 50) }}</td>
                <td>{{ $purchase->product_price }}</td>
                <td>{{ $purchase->product_discount }}</td>
                <td>{{ $purchase->quantity }}</td>
                <td>{{ $purchase->status }}</td>
                <td>
                    <a href="{{ route('order.show', $purchase->id) }}" class="btn btn-info btn-sm mb-2">Detail</a>

                    @if($purchase->status == 'dipesan')
                        <button type="button" class="btn btn-success btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#acceptModal{{ $purchase->id }}">
                            Terima
                        </button>
                        <button type="button" class="btn btn-danger btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#rejectModal{{ $purchase->id }}">
                            Tolak
                        </button>
                    @elseif($purchase->status == 'diproses')
                        <form action="{{ route('order.complete', $purchase->id) }}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-info btn-sm mb-2">Selesai</button>
                        </form>
                    @endif

                    <div class="modal fade" id="acceptModal{{ $purchase->id }}" tabindex="-1" aria-labelledby="acceptModalLabel{{ $purchase->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="acceptModalLabel{{ $purchase->id }}">Konfirmasi Terima Pesanan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menerima pesanan ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('order.accept', $purchase->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-success">Terima</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="rejectModal{{ $purchase->id }}" tabindex="-1" aria-labelledby="rejectModalLabel{{ $purchase->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="rejectModalLabel{{ $purchase->id }}">Konfirmasi Tolak Pesanan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menolak pesanan ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('order.reject', $purchase->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-danger">Tolak</button>
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

<script>
function filterOrders() {
    var status = document.getElementById('filter-status').value;
    var rows = document.querySelectorAll('#orders-table .order-row');
    
    rows.forEach(function(row) {
        if (status === 'all' || row.getAttribute('data-status') === status) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}
</script>
@endsection
