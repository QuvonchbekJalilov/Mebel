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
        $productId = $request->input('product_id');
        $product = Product::findOrFail($productId);
        Cart::add([
            'id' => $product->id,
            'name' => $product->title_ . App::getLocale(),
            'qty' => 1,
            'price' => $product->price,
            'attributes' => [
                'image' => $product->image ? $product->image : null,
            ]
        ]);

        return redirect()->back()->with('success', 'Cart added successfully');
    }

    public function viewCart()
    {
        $cartContent = Cart::content();
        $total  = Cart::subtotal();
        return view('pages.cart', compact('cartContent', 'total'));
    }

    public function updateCartItem(Request $request)
    {
        $rowId = $request->input('rowId');
        $action = $request->input('action');
        $cart = Cart::get($rowId);

        if ($action === 'increment') {
            Cart::update($rowId, $cart->qty + 1);
        } else if ($action === 'decrement') {
            $newQty = max($cart->qty - 1, 1); // Ensure quantity doesn't go below 1
            Cart::update($rowId, $newQty);
        }

        $item = Cart::get($rowId);
        $newTotalPrice = $item->price * $item->qty;

        return response()->json([
            'success' => true,
            'newTotalPrice' => number_format($newTotalPrice, 2) // Format to 2 decimal places
        ]);
    }


    public function deleteCartItem($rowId)
    {
        Cart::remove($rowId);

        return redirect()->route('cart.index')->with('success', 'Item removed from cart');
    }
}
