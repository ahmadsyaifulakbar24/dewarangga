<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_customer = Customer::all()->count();
        $total_product = Product::all()->count();
        $total_user = User::all()->count();
        $total_sales = User::role('sales')->count();
        return view('dashboard', compact('total_customer', 'total_product', 'total_user', 'total_sales'));
    }
}
