@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <h5 class="pb-2">Update Role User</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('role.update', ['role' => $role->id]) }}">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="role">User Role</label>
                                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ $role->name }}" required autocomplete="role" autofocus>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="table-responsive text-nowrap mb-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Access</th>
                                            <th scope="col">Create</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>User</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create user" @if  ($role->hasPermissionTo('create user') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update user" @if  ($role->hasPermissionTo('update user') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete user" @if  ($role->hasPermissionTo('delete user') == 1) checked @endif>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>User Role</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create user role" @if  ($role->hasPermissionTo('create user role') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update user role" @if  ($role->hasPermissionTo('update user role') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete user role" @if  ($role->hasPermissionTo('delete user role') == 1) checked @endif>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Customer</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create customer" @if  ($role->hasPermissionTo('create customer') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update customer" @if  ($role->hasPermissionTo('update customer') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete customer" @if  ($role->hasPermissionTo('delete customer') == 1) checked @endif>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Product</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create product" @if  ($role->hasPermissionTo('create product') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update product" @if  ($role->hasPermissionTo('update product') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete product" @if  ($role->hasPermissionTo('delete product') == 1) checked @endif>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Activity Sales</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create activity sales" @if  ($role->hasPermissionTo('create activity sales') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update activity sales" @if  ($role->hasPermissionTo('update activity sales') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete activity sales" @if  ($role->hasPermissionTo('delete activity sales') == 1) checked @endif>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Customer Jurnal</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create transaction customer" @if  ($role->hasPermissionTo('create transaction customer') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update transaction customer" @if  ($role->hasPermissionTo('update transaction customer') == 1) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete transaction customer" @if  ($role->hasPermissionTo('delete transaction customer') == 1) checked @endif>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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