<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(): View
    {
        return view('pages.product-list');
    }

    public function showProduct(int $id): string
    {
        return view('pages.product-details', ['id' => $id]);
    }
}
