<?php

namespace App\Http\Controllers;

use App\Models\ActivitySales;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ActivitySalesController extends Controller
{

    public function index()
    {
        $activity_sales = ActivitySales::orderBy('id', 'desc')->paginate(15);
        return view('activity_sales.index', compact('activity_sales'));
    }

    public function create()
    {
        $customers = Customer::orderBy('fullname', 'asc')->get();
        $users = User::role('sales')->orderBy('name', 'asc')->get();
        return view('activity_sales.create', compact('customers', 'users'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_id' => ['required', 'exists:customers,id'],
            'sales_id' => [ 'required', 'exists:users,id'],
            'visit_date' => ['required', 'date'],
            'status' => ['required', 'in:target,close_deal,progres']
        ]);

        $input = $request->all();
        ActivitySales::create($input);

        return redirect()->route('activity_sales.index');
    }

    public function edit(ActivitySales $activity_sales)
    {
        $activity = $activity_sales;
        $customers = Customer::orderBy('fullname', 'asc')->get();
        $users = User::orderBy('name', 'asc')->where('user_role_id', '6')->get();

        return view('activity_sales.edit', compact('activity', 'customers', 'users'));
    }

    public function update(Request $request, ActivitySales $activity_sales)
    {
        $this->validate($request, [
            'customer_id' => ['required', 'exists:customers,id'],
            'sales_id' => [
                'required',
                Rule::exists('users', 'id')->where(function($query) {
                    return $query->where('user_role_id', '6');
                })
            ],
            'visit_date' => ['required', 'date'],
            'status' => ['required', 'in:target,close_deal,progres']
        ]);

        $input = $request->all();
        $activity_sales->update($input);

        return redirect()->route('activity_sales.index');
    }

    public function destroy(ActivitySales $activity_sales)
    {
        $activity_sales->delete();

        return redirect()->route('activity_sales.index');
    }
}
