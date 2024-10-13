<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            "products" => Product::all()
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // $product = new Product();

        // $product->name = $request->name;
        // $product->description = $request->description;
        // $product->size = $request->size;

        // $product->save();

        $request->validate([
            'name' => 'required|max:100',
            'description' => 'nullable|min:3',
            'size' => 'required|decimal:0,2|max:100'
        ]);

        Product::create($request->input());

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {

        // view('products.show', [
        //     'product' => $product
        // ]);

        return view('products.show', compact('product'));
    }
}
