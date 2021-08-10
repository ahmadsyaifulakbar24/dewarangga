<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::orderBy('code_product', 'asc')->paginate(15);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'code_product' => ['required', 'unique:products,code_product'],
            'product_name' => ['required', 'string'],
        ]);

        $input = $request->input();
        $input['created_by'] = Auth::user()->id;
        $input['updated_by'] = Auth::user()->id;

        Product::create($input);

        return redirect()->route('product.index');
    }


    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        
        $this->validate($request, [
            'code_product' => ['required', 'unique:products,code_product,' . $product->code_product . ',code_product'],
            'product_name' => ['required', 'string'],
        ]);

        $input = $request->all();
        $input['updated_by'] = Auth::user()->id;
        $product->update($input);

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
