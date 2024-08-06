<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        dd($request->all());   
        // Validate request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'products' => 'required|json',
            'total_price' => 'required|numeric',
        ]);

        try {
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

            return response()->json(['success' => true]); // Ensure JSON response
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Order creation failed: ' . $e->getMessage());

            // Return a JSON error response
            return response()->json(['success' => false, 'message' => 'Order creation failed. Please try again.'], 500);
        }
    }
}
