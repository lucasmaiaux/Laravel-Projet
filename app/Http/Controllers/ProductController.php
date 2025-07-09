<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function exploreProducts(): View
    {
        // $products = DB::select('select * from products');
        $products = Product::all();

        return view('pages.explorer', ['products' => $products]);
    }

    public function exploreProductsByName(): View
    {
        $products = Product::all()->sortBy('name');
        return view('pages.explorer', ['products' => $products]);
    }

    public function exploreProductsByPrice(): View
    {
        $products = Product::all()->sortBy('price');
        return view('pages.explorer', ['products' => $products]);
    }

    public function showProduct(Product $product): View
    {
        // $product = DB::select('select * from products where id = ?', [$id]);
        // $product = Product::where('id', $id)->firstOrFail();
        // $product = Product::findOrFail($id);

        return view('pages.product-details', ['product' => $product]);
    }

    public function customizeProduct(): View
    {
        return view('pages.customize');
    }
}
