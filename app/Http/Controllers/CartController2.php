<?php

namespace App\Http\Controllers;

use App\Models\CreatePost;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController2 extends Controller
{
    public function store(Request $request)
    {
        $product = CreatePost::findOrFail($request->input(key: 'product_id'));
        Cart::add(
            $product->product_name, 
            $product->product_description,
            $product->product_price,
            $product->author_id,
        );

        return redirect()->route(route:'cart');
    }

    public function destroy($id) 
    {

        Cart::remove($id);

        return redirect()->back()->with('msg','Item has been removed from cart');
    }
}
