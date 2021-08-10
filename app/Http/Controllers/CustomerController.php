<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function index()
    {
        $customers = Customer::orderBy('id', 'desc')->paginate(15);
        return view('customer.index', compact('customers'));
    }


    public function create()
    {
        $products = Product::orderBy('code_product', 'asc')->get();
        return view('customer.create', compact('products'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => ['required', 'unique:customers,username'],
            'fullname' => ['required', 'string'],
            'registered_date' => ['required', 'date'],
            'company_name' => ['required', 'string'],
            'code_product' => ['required', 'exists:products,code_product'],
            'product_value' => ['required', 'numeric'],
            'address' => ['required', 'string'],
            'phone_number' => ['required', 'numeric'],
        ]);

        $input = $request->all();
        Customer::create($input);

        return redirect()->route('customer.index');
    }

    public function edit(Customer $customer)
    {
        $products = Product::orderBy('code_product', 'asc')->get();
        return view('customer.edit', compact('customer', 'products'));
    }

  
    public function update(Request $request, Customer $customer)
    {
        $this->validate($request, [
            'username' => ['required', 'unique:customers,username,' . $customer->id],
            'fullname' => ['required', 'string'],
            'registered_date' => ['required', 'date'],
            'company_name' => ['required', 'string'],
            'code_product' => ['required', 'exists:products,code_product'],
            'product_value' => ['required', 'numeric'],
            'address' => ['required', 'string'],
            'phone_number' => ['required', 'numeric'],
        ]);

        $input = $request->all();
        $customer->update($input);

        return redirect()->route('customer.index');
    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        
        return redirect()->route('customer.index');
    }
}
