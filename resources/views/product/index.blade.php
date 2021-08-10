@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="pb-2">Manage Product</h5>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('product.create') }}">
                <button class="btn btn-success btn-sm mb-4">Create Product</button>
            </a>
            
            <div class="table-responsive text-nowrap mb-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">Code Product</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Created By</th>
                            <th scope="col">Last Updated</th>
                            <th scope="col">Updated By</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $products as $product)
                            <tr>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('product.edit', ['product' => $product->code_product]) }}"> 
                                            <button class="btn btn-primary btn-sm mdi mdi-pencil mr-1"></button> 
                                        </a>
            
                                        <form action="{{ route('product.destroy',  ['product' => $product->code_product]) }}" method="post" style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm mdi mdi-trash-can"></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $product->code_product }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->created_at->format('d-m-Y H:i:s') }}</td>
                                <td>{{ $product->created_by_data->name }}</td>
                                <td>{{ $product->updated_at->format('d-m-Y H:i:s') }}</td>
                                <td>{{ $product->updated_by_data->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection