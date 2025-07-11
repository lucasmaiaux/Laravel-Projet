<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function showBackOffice(): View
    {
        return view('admin.backoffice');
    }

    public function exploreProducts(): View
    {
        $products = Product::all();

        return view('admin.explorer', ['products' => $products]);
    }

    public function showProduct(Product $product): View
    {
        return view('admin.product-details', ['product' => $product]);
    }

    public function editProduct(Product $product): View
    {
        return view('admin.product-edit', ['product' => $product]);
    }

    public function store(Request $request, Product $product) : View
    {
        $product->name = $request->input('name');
        $product->img_url = $request->input('img_url');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $product->save();

        return view('admin.product-details', ['product' => $product]);
    }


}