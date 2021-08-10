@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <h5 class="pb-2">Create Role User</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('role.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="role">User Role</label>
                                <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
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
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create user">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update user">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete user">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>User Role</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create user role">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update user role">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete user role">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Customer</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create customer">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update customer">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete customer">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Product</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create product">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update product">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete product">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Activity Sales</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create activity sales">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update activity sales">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete activity sales">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Customer Jurnal</td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="create transaction customer">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="update transaction customer">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" name="permission[]" value="delete transaction customer">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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