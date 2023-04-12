<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        //$products = DB::table('products')->get();
        $products = Product::all();
        dd($products);
        return 'This is the list of products from CONTROLLER';
    }

    public function create()
    {
        return 'This is the form to create a product from CONTROLLER';
    }

    public function store()
    {
        //
    }

    public function show($productId)
    {
        //$product = DB::table('products')->find($productId);
        //$product = Product::find($productId);
        $product = Product::findOrFail($productId);
        return $product;
        dd($product);
        return "Showing product with id {$product} from CONTROLLER";
    }

    public function edit($product)
    {
        return "Showing the form to edit the product with id {$product}";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
