<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Flight;
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    public function index()
    {

        return view('products.index', [
            "products" => Product::orderBy('created_at')->paginate(3)
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(SaveProductRequest $request)
    {
        // $product = new Product();

        // $product->name = $request->name;
        // $product->description = $request->description;
        // $product->size = $request->size;

        // $product->save();

        // $request->validate([
        //     'name' => 'required|max:100',
        //     'description' => 'nullable|min:3',
        //     'size' => 'required|decimal:0,2|max:100'
        // ]);

        $product = Product::create($request->validated());

        return redirect()->route('products.show', $product)
            ->with('status', 'Product created');
    }

    public function show(Product $product)
    {

        // view('products.show', [
        //     'product' => $product
        // ]);

        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {

        return view('products.edit', compact('product'));
    }

    public function update(SaveProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.show', $product)
            ->with('status', 'Product updated');;
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('status', 'Product deleted');
    }

    /* MY TEST PB */
    public function myTest()
    {
        return view('flight.index', [
            //"products" => Product::orderBy('created_at')->paginate(3)
            "flights" => Flight::orderBy('created_at')->paginate(3)
        ]);
    }
}
