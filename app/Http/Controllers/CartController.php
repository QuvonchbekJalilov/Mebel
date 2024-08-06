<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validate the input
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1'
        ]);

        $productId = $request->input('product_id');
        $quantity = $request->input('qty'); // Get the quantity from the form input

        $product = Product::findOrFail($productId);

        // Ensure locale handling is correct
        $locale = App::getLocale();
        $titleField = 'title_' . $locale;
        $productTitle = $product->$titleField ?? $product->title_en; // Fallback to 'title_en'

        // Adding item to the cart with the specified quantity
        Cart::add([
            'id' => $product->id,
            'name' => $productTitle,
            'qty' => $quantity, // Use the dynamic quantity here
            'price' => $product->price,
            'options' => [
                'image' => $product->image ?? null,
                'rating_count' => $product->rating_count ?? 0 // Add any extra attributes you need
            ]
        ]);

        return redirect()->back()->with('success', 'Item added to cart successfully');
    }



    public function viewCart()
    {
        $cartContent = Cart::content();
        $total = Cart::subtotal();
        return view('pages.cart', compact('cartContent', 'total'));
    }


    public function updateCartItem(Request $request, $rowId)
    {
        $newQty = $request->input('qty');

        // Ensure the cart item exists
        $item = Cart::get($rowId);
        if (!$item) {
            return response()->json(['success' => false, 'message' => 'Item not found'], 404);
        }

        // Update the cart item quantity
        Cart::update($rowId, $newQty);

        $product = Product::find($item->id); // Get the product details
        $newTotalPrice = $product->price * $item->qty;

        // Calculate new cart subtotal
        $newSubtotal = floatval(Cart::subtotal());

        return response()->json([
            'success' => true,
            'newTotalPrice' => number_format($newTotalPrice, 2), // Format to 2 decimal places
            'newSubtotal' => number_format($newSubtotal, 2) // Format to 2 decimal places
        ]);
    }


    public function removeCartItem($rowId)
    {
        // Ensure the cart item exists before removing
        if (!Cart::get($rowId)) {
            return response()->json(['success' => false, 'message' => 'Item not found'], 404);
        }

        Cart::remove($rowId);

        return response()->json(['success' => true, 'newSubtotal' => number_format(Cart::subtotal(), 2)]);
    }
}
