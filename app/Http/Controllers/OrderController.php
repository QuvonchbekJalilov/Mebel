<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validate request
        

        // Create order
        $order = new Order();
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->phone_number = $request->phone_number;
        $order->products = $request->products;
        $order->total_price = $request->total_price;
        $order->save();

        // Clear the cart
        Cart::destroy();

        return response()->json(['success' => true]);
    }
}
