<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;


class CartController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    // public function store(User $user) : View
    // {
    //     $product->name = $request->input('name');
    //     $product->img_url = $request->input('img_url');
    //     $product->description = $request->input('description');
    //     $product->price = $request->input('price');

    //     $product->save();

    //     return view('admin.product-details', ['product' => $product]);
    // }

    // public function addToCart(Product $product)
    // {
    //     $cart = User::find(1)->cart;

    //     if ($cart == null)
    //     {
    //         Cart::create([,1,0]);
    //     }
    // }

    public function updatePrice(Cart $cart)
    {
        $products = $cart->products;
        $total = 0;
        
        foreach($products as $product)
        {
            $price = Product::find($product->id)->price;
            $total = $total + ($price * ($product->pivot->quantity));
        }
        $cart->total = $total;
        $cart->save();

    }

    public function add(Request $request) : View
    {
        $product_id = $request->input('product_id');

        $cart = Cart::find(1);
        if ($cart == NULL) 
        {
            $cart = new Cart;
            $cart->user_id = 1;
            $cart->total = 0;

            $cart->save();
        }
        //dd($cart);

        $pivot = $cart->products()->where('product_id', $product_id)->first();
        if ($pivot) {
            $cart->products()->updateExistingPivot($product_id, [
                'quantity' => \DB::raw('quantity + 1')
            ]);
        } else {
            $cart->products()->attach($product_id, ['quantity' => 1]);
        }
        CartController::updatePrice($cart);
        //$cart->updatePrice();

        return view('pages.cart', ['cart' => $cart]);
    }

    public function detachProduct(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        $cart = Cart::find($request->input('cart_id'));
        $cart->products()->detach($product->id);

        CartController::updatePrice($cart);
        return view('pages.cart', ['cart' => $cart]);
    }

    public function show(): View
    {
        $cart = Cart::find(1)->first();
        CartController::updatePrice($cart);
        return view('pages.cart', ['cart' => $cart]);
    }
}
