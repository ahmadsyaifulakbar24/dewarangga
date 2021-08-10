@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="pb-2">Manage Customer</h5>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('customer.create') }}">
                <button class="btn btn-success btn-sm mb-4">Create Customer</button>
            </a>
            
            <div class="table-responsive text-nowrap mb-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">Username</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Registered Date</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Product</th>
                            <th scope="col">Nilai Product</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $customers as $customer)
                            <tr>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('customer.edit', ['customer' => $customer->id]) }}"> 
                                            <button class="btn btn-primary btn-sm mdi mdi-pencil mr-1"></button> 
                                        </a>
            
                                        <form action="{{ route('customer.destroy',  ['customer' => $customer->id]) }}" method="post" style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm mdi mdi-trash-can"></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $customer->username }}</td>
                                <td>{{ $customer->fullname }}</td>
                                <td>{{ date('d-m-Y', strtotime($customer->registered_date)) }}</td>
                                <td>{{ $customer->company_name }}</td>
                                <td>{{ $customer->product->product_name }}</td>
                                <td>{{ $customer->product_value }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>{{ $customer->phone_number }}</td>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $customers->links() }}
        </div>
    </div>
</div>
@endsection