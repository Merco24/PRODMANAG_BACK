<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //getProduct
    public function getProducts(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Product::all());
    }
}
