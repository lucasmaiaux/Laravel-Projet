<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductController extends Controller
{
    public function exploreProducts(): View
    {
        return view('pages.explorer');
    }

    public function showProduct(int $id): string
    {
        return view('pages.product-details', ['id' => $id]);
    }

    public function customizeProduct(): View
    {
        return view('pages.customize');
    }
}
