@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    
    <div class="row">
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card shadow text-white" style="background-color:#3b5998;">
                <div class="card-body">
                    <p class="card-text fs-4">Jumlah Produk</p>
                    <div class="h2 mb-0 font-weight-bold text-gray-800">{{ $totalProducts }}</div>
                </div>
                <div class="card-footer bg-transparent text-center">
                    <a href="{{ route('product.index') }}" style="display: block; text-decoration: none; color: inherit;">
                        <span style="cursor: pointer; text-decoration: none;">Lihat Selengkapnya</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card shadow text-white" style="background-color:#218838;">
                <div class="card-body">
                    <p class="card-text fs-4">Produk Terjual</p>
                    <div class="h2 mb-0 font-weight-bold text-gray-800">{{ $soldProducts }}</div>
                </div>
                <div class="card-footer bg-transparent text-center">
                    <a href="{{ route('order.index') }}" style="display: block; text-decoration: none; color: inherit;">
                        <span style="cursor: pointer; text-decoration: none;">Lihat Selengkapnya</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card shadow text-white" style="background-color:#e67e22;">
                <div class="card-body">
                    <p class="card-text fs-4">Pesanan Diproses</p>
                    <div class="h2 mb-0 font-weight-bold text-gray-800">{{ $ordersProcessing }}</div>
                </div>
                <div class="card-footer bg-transparent text-center">
                    <a href="{{ route('order.index') }}" style="display: block; text-decoration: none; color: inherit;">
                        <span style="cursor: pointer; text-decoration: none;">Lihat Selengkapnya</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card shadow text-white" style="background-color:#6f42c1;">
                <div class="card-body">
                    <p class="card-text fs-4">Pesanan Selesai</p>
                    <div class="h2 mb-0 font-weight-bold text-gray-800">{{ $ordersCompleted }}</div>
                </div>
                <div class="card-footer bg-transparent text-center">
                    <a href="{{ route('order.index') }}" style="display: block; text-decoration: none; color: inherit;">
                        <span style="cursor: pointer; text-decoration: none;">Lihat Selengkapnya</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Pesanan Terkini</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Nama Pembeli</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentOrders as $order)
                                    <tr>
                                        <td>{{ $order->product_name }}</td>
                                        <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>Rp. {{ number_format($order->product_price, 0, ',', '.') }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->created_at->format('d M Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('order.index') }}" class="btn btn-primary">Lihat Semua Pesanan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
