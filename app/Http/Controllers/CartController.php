<?php

namespace App\Http\Controllers;
use App\Models\Product;     // ---- added
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    //
    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        return view('cart',['cartItems'=>$cartItems]);
    }

    // add to cart ---
    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        $price = $product->sale_price ? $product->sale_price : $product->regular_price;  // hadi ma3anaha ida kayen sale price -> use it , else -> use regular price 
        Cart::instance('cart')->add($product->id,$product->name,$request->quantity,$price)->associate('App\Models\Product');
        return redirect()->back()->with('message','produit ajouté avec succéss !');
    }

    // update cart quantity --
    public function updateCart(Request $request)
    {
        Cart::instance('cart')->update($request->rowId,$request->quantity);
        return redirect()->route('cart.index');
    }

    // delete cart item ---
    public function removeItem(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
        return redirect()->route('cart.index');
    }
    
    // clear cart ---
    public function clearCart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->route('cart.index');
    }
}
