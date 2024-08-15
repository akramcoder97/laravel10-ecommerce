<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;     // ---- added
use Cart;

class CheckoutController extends Controller
{
    //
    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        return view('checkout',['cartItems'=>$cartItems]);
    }

    public function placeOrder(Request $request)
    {
        $order = new Order;

        $order->name=$request->name;
        $order->phone=$request->phone;
        $order->wilaya=$request->wilaya;
        $order->commune=$request->commune;
        $order->address=$request->address;

        $order->product_name = $request->productname;
        $order->price=$request->price;
        $order->qty=$request->qty;
        $order->subtotal=$request->subtotal;
        $order->total=$request->total;

        $order->save();
        Cart::instance('cart')->destroy();
        return redirect()->back()->with('message','produit ajouté avec succéss !');
    }
}
