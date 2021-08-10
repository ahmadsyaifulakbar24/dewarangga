@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="pb-2">Transaction Customer</h5>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('transaction_customer.create') }}">
                <button class="btn btn-success btn-sm mb-4">Create Transaction Customer</button>
            </a>
            
            <div class="table-responsive text-nowrap mb-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">Code Transaction</th>
                            <th scope="col">Transaction Date</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Nominal Transaction</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $transaction_customers as $transaction_customer)
                            <tr>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('transaction_customer.edit', ['transaction_customer' => $transaction_customer->id]) }}"> 
                                            <button class="btn btn-primary btn-sm mdi mdi-pencil mr-1"></button> 
                                        </a>

                                        <form action="{{ route('transaction_customer.destroy',  ['transaction_customer' => $transaction_customer->id]) }}" method="post" style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm mdi mdi-trash-can"></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $transaction_customer->id}}</td>
                                <td>{{ $transaction_customer->transaction_date}}</td>
                                <td>{{ $transaction_customer->customer->fullname}}</td>
                                <td>{{ $transaction_customer->customer->product->product_name}}</td>
                                <td>{{ $transaction_customer->nominal_transaction}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $transaction_customers->links() }}
            </div>
        </div>
    </div>
</div>
@endsection