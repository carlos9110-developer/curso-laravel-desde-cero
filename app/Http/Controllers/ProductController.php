<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with([
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $product = Product::create(request()->all());

        //return redirect()->back(); // retorna a la ubicación anterior
        //return redirect()->action('MainController@index');
        return redirect()->route('products.index');
    }

    public function show($productId)
    {
        $product = Product::findOrFail($productId);

        return view('products.show')->with([
            'product' => $product,
            'html' => '<h2>Hola soy un titulo</h2>'
        ]);
    }

    public function edit($product)
    {
        return view('products.edit')->with([
            'product' => Product::findOrFail($product)
        ]);
    }

    public function update($product)
    {
        $product = Product::findOrFail($product);
        $product->update(request()->all());
        return redirect()->route('products.index');
    }

    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        $product->delete();
        return redirect()->route('products.index');
    }
}
