@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <h5 class="pb-2">Create Product</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('product.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="code_product">Code Product</label>
                                <input id="code_product" type="text" class="form-control @error('code_product') is-invalid @enderror" name="code_product" value="{{ old('code_product') }}" required autocomplete="code_product" autofocus>
                                @error('code_product')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input id="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" required autocomplete="product_name" autofocus>
                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-success btn-block">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection