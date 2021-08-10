@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="pb-2">Manage User</h5>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('user.create') }}">
                <button class="btn btn-success btn-sm mb-4">Create User</button>
            </a>
            
            <div class="table-responsive text-nowrap mb-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">Username</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">NIK</th>
                            <th scope="col">User Role</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $users as $user)
                            <tr>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('user.edit', ['user' => $user->id]) }}"> 
                                            <button class="btn btn-primary btn-sm mdi mdi-pencil mr-1"></button> 
                                        </a>
            
                                        <form action="{{ route('user.destroy',  ['user' => $user->id]) }}" method="post" style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm mdi mdi-trash-can"></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->nik }}</td>
                                <td>{{ !empty($user->roles->first()->name) ? $user->roles->first()->name : ''}}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ $user->gender == 'male' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                <td>{{ $user->address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection