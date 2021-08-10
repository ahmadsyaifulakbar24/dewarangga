<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\TransactionCustomer;
use Illuminate\Http\Request;

class TransactionCustomerController extends Controller
{
 
    public function index()
    {
        $transaction_customers = TransactionCustomer::orderBy('id', 'desc')->paginate(15);
        return view('transaction_customer.index', compact('transaction_customers'));
    }

    public function create()
    {
        $customers = Customer::orderBy('fullname', 'asc')->get();
        return view('transaction_customer.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'transaction_date' => ['required', 'date'],
            'customer_id' => ['required', 'exists:customers,id'],
            'nominal_transaction' => ['required', 'numeric'],
        ]);

        $input = $request->all();
        TransactionCustomer::create($input);

        return redirect()->route('transaction_customer.index');
    }

    public function edit(TransactionCustomer $transaction_customer)
    {
        $customers = Customer::orderBy('fullname', 'asc')->get();
        return view('transaction_customer.edit', compact('transaction_customer', 'customers'));
    }

 
    public function update(Request $request, TransactionCustomer $transaction_customer)
    {
        $this->validate($request, [
            'transaction_date' => ['required', 'date'],
            'customer_id' => ['required', 'exists:customers,id'],
            'nominal_transaction' => ['required', 'numeric'],
        ]);

        $input = $request->all();
        $transaction_customer->update($input);

        return redirect()->route('transaction_customer.index');
    }


    public function destroy(TransactionCustomer $transaction_customer)
    {
        $transaction_customer->delete();
        return redirect()->route('transaction_customer.index');
    }
}
