<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::query()->with('category')->get();

        return response()->json($products);
    }

   
    public function store(Request $request)
    {
        return 'product Added Successfully';
    }

 
    public function show(string $id)
    {
        $product = Product::where('id', $id)->with(relations: 'category')->first();

        return response()->json($product);
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        $product = Product::where('id', $id)->delete();
    }
}
