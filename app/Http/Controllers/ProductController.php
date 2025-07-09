<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function exploreProducts(): View
    {
        $products = DB::select('select * from products');

        return view('pages.explorer', ['products' => $products]);
    }

    public function showProduct(int $id): View
    {
        $product = DB::select('select * from products where id = ?', [$id]);

        return view('pages.product-details', ['product' => $product]);
    }

    public function customizeProduct(): View
    {
        return view('pages.customize');
    }
}
