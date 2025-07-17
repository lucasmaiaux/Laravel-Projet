<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::all());
    }

    public function show(Request $request)
    {
        $id = $request->query('id');
        return new ProductResource(Product::findOrFail($id));
    }

    public function store(ProductStoreRequest $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->img_url = $request->input('img_url');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $product->save();

        // Retour JSON
        return response()->json([
            'message' => 'Produit créé avec succès.',
            'product' => $product
        ], 201); // 201 Created
    }

    public function edit(ProductStoreRequest $request)
    {
        $product_id = $request->query('id');
        $product = Product::findOrFail($product_id);

        $product->name = $request->input('name');
        $product->img_url = $request->input('img_url');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $product->save();

        // Retour JSON
        return response()->json([
            'message' => 'Produit modifié avec succès.',
            'product' => $product
        ], 201); // 201 Created
    }

    public function delete(Request $request)
    {
        $product_id = $request->query('id');
        Product::findOrFail($product_id)->delete();

        // Retour JSON
        return response()->json([
            'message' => 'Produit supprimé avec succès.',
        ], 201); // 201 Created
    }
}
