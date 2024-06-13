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
            <div class="card shadow text-white" style="background-color:#E3651D;">
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
            <div class="card shadow text-white" style="background-color:#663399;">
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
            <div class="card shadow text-white" style="background-color:#006633;">
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
</div>
@endsection
