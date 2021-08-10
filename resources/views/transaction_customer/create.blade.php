@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <h5 class="pb-2">Create Transaction Customer</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('transaction_customer.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="transaction_date">Transaction Date</label>
                                <input id="transaction_date" type="date" class="form-control @error('transaction_date') is-invalid @enderror" name="transaction_date" value="{{ old('transaction_date') }}" required autocomplete="transaction_date" autofocus>
                                @error('transaction_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="customer_id">Customer Name</label>
                                <select id="customer_id" name="customer_id" class="form-control  @error('customer_id') is-invalid @enderror">
                                    <option value="">-- Select Customer --</option>
                                    @foreach ($customers as $customer)    
                                        <option value="{{ $customer->id }}" >{{ $customer->fullname }}</option>
                                    @endforeach
                                </select>
                                @error('customer_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nominal_transaction">Nominal Transaction</label>
                                <input id="nominal_transaction" type="number" class="form-control @error('nominal_transaction') is-invalid @enderror" name="nominal_transaction" value="{{ old('nominal_transaction') }}" required autocomplete="nominal_transaction" autofocus>
                                @error('nominal_transaction')
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