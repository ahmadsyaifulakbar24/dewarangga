@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <h5 class="pb-2">Update User</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('user.update', ['user' => $user->id]) }}">
                            @method('patch')
                            @csrf
        
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="name">Fullname</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input id="nik" type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $user->nik }}" required autocomplete="nik" autofocus>
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $user->phone_number }}" required autocomplete="phone_number" autofocus>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender" class="form-control  @error('gender') is-invalid @enderror">
                                    <option value="male" @if ($user->gender == 'male') selected @endif>Laki-Laki</option>
                                    <option value="female" @if ($user->gender == 'female') selected @endif>Perempuan</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address" required autocomplete="address" autofocus> {{ $user->address }} </textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="role">User Role {{ $user->roles->first()->name }}</label>
                                <select id="role" name="role" class="form-control  @error('role') is-invalid @enderror">
                                    @foreach ($roles as $role)    
                                        <option value="{{ $role->name }}" @if ($user->roles->first()->name == $role->name) selected @endif>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-success btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection