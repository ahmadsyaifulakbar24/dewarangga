@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <h5 class="pb-2">Edit Activity Sales</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('activity_sales.update', ['activity_sales' => $activity->id]) }}">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="customer_id">Customer Name</label>
                                <select id="customer_id" name="customer_id" class="form-control  @error('customer_id') is-invalid @enderror">
                                    @foreach ($customers as $customer)    
                                        <option value="{{ $customer->id }}" @if ($activity->customer_id == $customer->id) selected @endif>{{ $customer->fullname }}</option>
                                    @endforeach
                                </select>
                                @error('customer_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="sales_id">Sales Name</label>
                                <select id="sales_id" name="sales_id" class="form-control  @error('sales_id') is-invalid @enderror">
                                    @foreach ($users as $user)    
                                        <option value="{{ $user->id }}" @if ($activity->sales_id == $user->id) selected @endif>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('sales_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="visit_date">Visite Date</label>
                                <input id="visit_date" type="date" class="form-control @error('visit_date') is-invalid @enderror" name="visit_date" value="{{ $activity->visit_date }}" required autocomplete="visit_date" autofocus>
                                @error('visit_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control  @error('status') is-invalid @enderror">
                                    <option value="target" @if ($activity->status == 'target') selected @endif>Target</option>
                                    <option value="close_deal" @if ($activity->status == 'close_deal') selected @endif>Close Deal</option>
                                    <option value="progres" @if ($activity->status == 'progres') selected @endif>Progres</option>
                                    
                                </select>
                                @error('status')
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