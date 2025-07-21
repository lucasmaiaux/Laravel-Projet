<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.index', ['products' => $products]);
    }

    public function indexAdmin()
    {
        $products = Product::all();
        return view('admin.index', ['products' => $products]);
    }

    public function indexByName()
    {
        $products = Product::all()->sortBy('name');
        return view('pages.index', ['products' => $products]);
    }

    public function indexByPrice()
    {
        $products = Product::all()->sortBy('price');
        return view('pages.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(ProductStoreRequest $request, Product $product) : View
    // {
    //     $product->name = $request->input('name');
    //     $product->img_url = $request->input('img_url');
    //     $product->description = $request->input('description');
    //     $product->price = $request->input('price');

    //     $product->save();

    //     return view('admin.product-details', ['product' => $product]);
    // }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'img_url' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|gt:0'
        ]);

        $product = Product::create($fields);

        return view('admin.product-details', ['product' => $product]);
    }

    public function APIstore(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'img_url' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|gt:0'
        ]);

        $product = $request->user()->posts()->create($fields);

        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $product_id)
    {
        $product = Product::find($product_id);

        if (!$product) {
            return view('pages.product-not-available');
        }

        return view('pages.product-details', ['product' => $product]);
    }

    // public function show(Request $request)
    // {
    //     $id = $request->query('id');
    //     return new ProductResource(Product::findOrFail($id));
    // }

    public function showAdmin(Product $product)
    {
        return view('admin.product-details', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product-edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->destroy($product);

        $products = Product::all();
        return view('admin.index', ['products' => $products]);
    }

    public function delete(Product $product)
    {
        $product->delete();

        $products = Product::all();
        return view('admin.index', ['products' => $products]);
    }

    public function customize()
    {
        return view('pages.customize');
    }
}
