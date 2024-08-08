<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product; // Import the Product model
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB; // Import DB for transactions

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->paginate(10);

        return view('admin.order.index', compact('orders'));
    }
    public function store(Request $request)
    {
        // Log the incoming request data for debugging
        Log::info('Incoming request data:', $request->all());
    
        // Validate request
        // $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'phone_number' => 'required|string|max:15',
        //     'products' => 'required|array',
        //     'products.*.id' => 'required|integer',
        //     'products.*.quantity' => 'required|integer',
        //     'products.*.total_price' => 'required|numeric',
        //     'total_price' => 'required|string',
        // ]);
        // Start a database transaction
        DB::beginTransaction();
    
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
            })->values(); // Use values() to reindex
    
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
            $order->products = json_encode($products->toArray()); // Encode as JSON string
            $order->total_price = $totalPrice; // Use the parsed total price
            $order->save();
            // Update stock for each product
            foreach ($products as $product) {
                $productModel = Product::find($product['product_id']);
    
                if ($productModel) {
                    // Ensure stock does not go below zero
                    if ($productModel->stock >= $product['quantity']) {
                        $productModel->stock -= $product['quantity'];
                        $productModel->save();
                    } else {
                        // Log an error if stock is insufficient
                        throw new \Exception('Insufficient stock for product ID: ' . $product['product_id']);
                    }
                }
            }
    
            // Clear the cart
            Cart::destroy();
    
            // Commit the transaction
            DB::commit();
            Log::info('Transaction committed successfully');
    
            // Redirect to orders page with success message
            return redirect()->route('shop')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            // Rollback the transaction if something went wrong
            DB::rollBack();
    
            Log::error('Order creation failed: ' . $e->getMessage());
    
            return redirect()->back()->with('error', 'Order creation failed. Please try again.');
        }
    }
    

    public function updateStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:orders,id',
            'status' => 'required|string'
        ]);

        $order = Order::find($request->id);
        $order->status = $request->status;
        $order->save();

        return response()->json(['success' => true]);
    }
}
