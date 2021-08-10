@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="pb-2">Manage Roles</h5>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('role.create') }}">
                <button class="btn btn-success btn-sm mb-4">Create Role</button>
            </a>
            
            <div class="table-responsive text-nowrap mb-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">User Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $roles as $role)
                            <tr>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('role.edit', ['role' => $role->id]) }}"> 
                                            <button class="btn btn-primary btn-sm mdi mdi-pencil mr-1"></button> 
                                        </a>

                                        <form action="{{ route('role.destroy',  ['role' => $role->id]) }}" method="post" style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm mdi mdi-trash-can"></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $role->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection