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

    //getProductById
    public function getProductById($id): \Illuminate\Http\JsonResponse
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return response()->json(['message' => 'Produit introuvable'], 404);
        }
        return response()->json(Product::find($id), 200);
    }

    //add Product
    public function addProduct(Request $request): \Illuminate\Http\JsonResponse
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }
}
