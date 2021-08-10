@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <h5 class="pb-2">Create Custumer</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('customer.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="fullname">Fullname</label>
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>
                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="registered_date">Registered Date</label>
                                <input id="registered_date" type="date" class="form-control @error('registered_date') is-invalid @enderror" name="registered_date" value="{{ old('registered_date') }}" required autocomplete="registered_date" autofocus>
                                @error('registered_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="company_name">Company Name</label>
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>
                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="code_product">Product</label>
                                <select id="code_product" name="code_product" class="form-control  @error('code_product') is-invalid @enderror">
                                    <option value="">-- Select Product --</option>
                                    @foreach ($products as $product)    
                                        <option value="{{ $product->code_product }}" >{{ $product->product_name }}</option>Z
                                    @endforeach
                                </select>
                                @error('code_product')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="product_value">Product Value</label>
                                <input id="product_value" type="number" class="form-control @error('product_value') is-invalid @enderror" name="product_value" value="{{ old('product_value') }}" required autocomplete="product_value" autofocus>
                                @error('product_value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address" required autocomplete="address" autofocus> {{ old('address') }} </textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                @error('phone_number')
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