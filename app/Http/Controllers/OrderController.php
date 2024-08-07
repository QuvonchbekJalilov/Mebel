<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'products' => 'required|array',
            'products.*.id' => 'required|integer',
            'products.*.quantity' => 'required|integer',
            'products.*.total_price' => 'required|numeric',
            'total_price' => 'required|string',
        ]);

        try {
            // Handle total price with commas
            $totalPrice = str_replace(',', '', $request->input('total_price')); // Remove commas

            // Prepare product details
            $products = collect($request->input('products'))->map(function ($product) {
                return [
                    'product_id' => (int) $product['id'],
                    'quantity' => (int) $product['quantity'],
                    'total_price' => (float) $product['total_price'],
                ];
            });

            // Debugging output
            Log::info('Creating order with data:', [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => $request->phone_number,
                'products' => $products->toArray(),
                'total_price' => $totalPrice,
            ]);

            // Create order
            $order = new Order();
            $order->first_name = $request->first_name;
            $order->last_name = $request->last_name;
            $order->phone_number = $request->phone_number;
            $order->products = $products->toArray(); // Use array, casting will handle JSON encoding
            $order->total_price = $totalPrice; // Use the parsed total price
            $order->save();

            // Clear the cart
            Cart::destroy();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error('Order creation failed: ' . $e->getMessage());

            return response()->json(['success' => false, 'message' => 'Order creation failed. Please try again.'], 500);
        }
    }
}
