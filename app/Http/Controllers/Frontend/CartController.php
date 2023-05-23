<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $addNewProduct = new Cart();
        if($request->user_id){
            $addNewProduct->user_id = $request->user_id;
        }
        $addNewProduct->ip_address = $request->ip();
        $addNewProduct->product_id = $id;
        $addNewProduct->price = $request->price;
        $addNewProduct->qty = $request->qty ? $request->qty : 1;
        $addNewProduct->save();
        session()->flash('success', 'Product added to cart');
        return redirect()->back();

    }

    public function removeCartProduct($id)
    {
        $cartproduct = Cart::find($id);
        $cartproduct->delete();
        session()->flash('success', 'Cart product has been removed');
        return redirect()->back();
    }
}
