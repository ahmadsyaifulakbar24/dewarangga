@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="pb-2">Manage Activity Sales</h5>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('activity_sales.create') }}">
                <button class="btn btn-success btn-sm mb-4">Create Activity Sales</button>
            </a>
            
            <div class="table-responsive text-nowrap mb-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">Code Activity</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Sales Name</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Value</th>
                            <th scope="col">Visit Date</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $activity_sales as $activity)
                            <tr>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('activity_sales.edit', ['activity_sales' => $activity->id]) }}"> 
                                            <button class="btn btn-primary btn-sm mdi mdi-pencil mr-1"></button> 
                                        </a>
            
                                        <form action="{{ route('activity_sales.destroy',  ['activity_sales' => $activity->id]) }}" method="post" style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm mdi mdi-trash-can"></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $activity->id }}</td>
                                <td>{{ $activity->customer->fullname }}</td>
                                <td>{{ $activity->customer->company_name }}</td>
                                <td>{{ $activity->user->name }}</td>
                                <td>{{ $activity->customer->product->product_name }}</td>
                                <td>{{ $activity->customer->product_value }}</td>
                                <td>{{ $activity->visit_date }}</td>
                                <td>{{ $activity->status }}</td>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $activity_sales->links() }}
        </div>
    </div>
</div>
@endsection