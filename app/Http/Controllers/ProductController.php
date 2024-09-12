<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        return 'all products';
    }
    public function getProduct($slug)
    {

       return 'single product';
    }

    public function createProduct()
    {
        return 'create product';
    }

}
