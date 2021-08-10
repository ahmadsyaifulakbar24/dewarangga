@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="pb-2">Dashboard</h5>
    <div class="row mb-3">
        <div class="col-6 col-md-3 mb-3">
            <div class="card card-custom card-height">
                <div class="card-body">
                    <h6>Users</h6>
                    <div class="d-flex justify-content-between align-items-center position-relative">
                        <i class="mdi mdi-account-group mdi-36px"></i>
                        <h3>{{ $total_user }}</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-6 col-md-3 mb-3">
            <div class="card card-custom card-height">
                <div class="card-body">
                    <h6>Sales</h6>
                    <div class="d-flex justify-content-between align-items-center position-relative">
                        <i class="mdi mdi-account-group mdi-36px"></i>
                        <h3>{{ $total_sales }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3 mb-3">
            <div class="card card-custom card-height">
                <div class="card-body">
                    <h6>Nasabah</h6>
                    <div class="d-flex justify-content-between align-items-center position-relative">
                        <i class="mdi mdi-account-group mdi-36px"></i>
                        <h3>{{ $total_customer }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3 mb-3">
            <div class="card card-custom card-height">
                <div class="card-body">
                    <h6>Produk</h6>
                    <div class="d-flex justify-content-between align-items-center position-relative">
                        <i class="mdi mdi-account-group mdi-36px"></i>
                        <h3>{{ $total_product }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
