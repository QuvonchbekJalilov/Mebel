@extends('layouts.page')

@section('title', 'Cart')

@section('content')
<!-- Breadcrumbs Start -->
<?php

use Gloudemans\Shoppingcart\Facades\Cart;

?>

<style>
    .cart-summary {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .summary-title {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #333;
        font-weight: 600;
    }

    .summary-content {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.25rem;
    }

    .subtotal-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }

    .subtotal-label {
        color: #555;
    }

    .subtotal-amount {
        font-weight: 700;
        color: #333;
    }
</style>
<section class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h1 class="title wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Shopping Cart</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Home</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single active">Shopping Cart</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-of Breadcrumbs -->

<!-- Cart area Start -->
<div class="wishlist-product section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if($cartContent->isEmpty())
                <div class="alert alert-info">
                    Your shopping cart is empty.
                </div>
                @else
                <div class="table-responsive">
                    <table class="table product-cart-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Information</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartContent as $cart)
                            @php
                            $product = App\Models\Product::find($cart->id);
                            $locale = App::getLocale();
                            $titleField = 'title_' . $locale;
                            $productTitle = $product->$titleField ?? $product->title_en; // Fallback to 'title_en'

                            // Use the getDiscountedPrice method to get the effective price
                            $effectivePrice = $product->getDiscountedPrice();
                            $totalPrice = $effectivePrice * $cart->qty;
                            @endphp
                            <tr data-rowid="{{ $cart->rowId }}">
                                <td class="cart-img">
                                    <div class="thumb-img">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $productTitle }}">
                                    </div>
                                </td>
                                <td class="cart-info">
                                    <div class="cart-box">
                                        <a href="{{ route('shop_details', $cart->id) }}">
                                            <p class="cart-pera mb-15">{{ $productTitle }}</p>
                                        </a>

                                        <p class="cart-pera">
                                            @if ($product->getDiscount())
                                            <span class="discounted-price">{{ number_format($effectivePrice, 2) }} So'm</span>
                                            @else
                                            {{ number_format($effectivePrice, 2) }} So'm
                                            @endif
                                        </p>
                                    </div>
                                </td>
                                <td class="cart-qty">
                                    <div class="quantity-section">
                                        <div class="quantity-btn position-relative">
                                            <button class="decrease-num" data-rowid="{{ $cart->rowId }}" data-action="decrement">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
                                                    <path d="M12 0.633816C11.9468 0.446997 11.8569 0.28353 11.6806 0.158011C11.3811 -0.0492418 10.9485 -0.0550799 10.649 0.155092C10.5925 0.195958 10.5359 0.239744 10.4826 0.286449C9.02519 1.56499 7.5644 2.84645 6.10694 4.125C6.07367 4.15419 6.04705 4.18922 5.96719 4.24176C5.9439 4.20673 5.93059 4.16294 5.89731 4.13375C4.42654 2.84062 2.95245 1.5504 1.48168 0.257257C1.22213 0.0295717 0.922652 -0.0579998 0.563279 0.0412478C0.0408569 0.1872 -0.172105 0.776848 0.157321 1.16216C0.193924 1.20595 0.237181 1.24681 0.280439 1.28768C1.97748 2.7764 3.67119 4.26511 5.36823 5.75091C5.67769 6.02238 6.07034 6.07492 6.42639 5.89394C6.5129 5.85016 6.58944 5.78594 6.65931 5.72464C8.30644 4.27971 9.96024 2.83478 11.6107 1.39277C11.7937 1.23222 11.9568 1.06875 12 0.838151C12 0.771016 12 0.704881 12 0.633816Z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <input type="text" name="qty" value="{{ $cart->qty }}" class="num-count" readonly>
                                            <button class="increase-num" data-rowid="{{ $cart->rowId }}" data-action="increment">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
                                                    <path d="M0 5.36618C0.0532405 5.553 0.143084 5.71647 0.319443 5.84199C0.618921 6.04924 1.0515 6.05508 1.35098 5.84491C1.40755 5.80404 1.46411 5.76026 1.51735 5.71355C2.97481 4.43501 4.4356 3.15355 5.89306 1.875C5.92633 1.84581 5.95295 1.81078 6.03281 1.75824C6.0561 1.79327 6.06941 1.83705 6.10269 1.86625C7.57346 3.15938 9.04755 4.4496 10.5183 5.74274C10.7779 5.97043 11.0773 6.058 11.4367 5.95875C11.9591 5.8128 12.1721 5.22315 11.8427 4.83784C11.8061 4.79405 11.7628 4.75318 11.7196 4.71232C10.0225 3.2236 8.32881 1.73489 6.63177 0.249093C6.32231 -0.0223789 5.92966 -0.0749219 5.57361 0.106059C5.4871 0.149845 5.41056 0.214063 5.34069 0.275363C3.69356 1.72029 2.04976 3.16522 0.399312 4.60723C0.206302 4.76778 0.0431832 4.93125 0 5.16185C0 5.22898 0 5.29512 0 5.36618Z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart-total">
                                    <div class="total-section">
                                        <p class="total">{{ number_format($totalPrice, 2) }} so'm</p>
                                    </div>
                                </td>
                                <td class="cart-action">
                                    <button class="btn btn-danger btn-sm remove-item" data-rowid="{{ $cart->rowId }}">
                                        <i class="fa fa-trash"></i> Remove
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="cart-summary mt-3">
                    <h4>Cart Summary</h4>
                    <div class="summary-content">
                        <div class="subtotal-container">
                            <span class="subtotal-label">Umumiy Narxi:</span>
                            <span class="subtotal-amount">{{ Cart::subtotal() }} so'm</span>
                        </div>
                    </div>
                    <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Cart area End -->

<!-- Modal for Checkout -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Order Summary -->
                <h4>Order Summary</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product Title</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartContent as $cart)
                            @php
                            $product = App\Models\Product::find($cart->id);
                            $locale = App::getLocale();
                            $titleField = 'title_' . $locale;
                            $productTitle = $product->$titleField ?? $product->title_en;
                            $effectivePrice = $product->getDiscountedPrice();
                            @endphp
                            <tr>
                                <td>{{ $productTitle }}</td>
                                <td>{{ number_format($effectivePrice, 2) }} So'm</td>
                                <td>{{ $cart->qty }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Customer Information Form -->
                <h4>Customer Information</h4>
                <form id="orderForm">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <input type="hidden" name="products" value="{{ json_encode($cartContent) }}">
                    <input type="hidden" name="total_price" value="{{ Cart::subtotal() }}">
                    <button type="submit" class="btn btn-success">Place Order</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Update quantity
        document.querySelectorAll('.increase-num, .decrease-num').forEach(function(button) {
            button.addEventListener('click', function() {
                const rowId = this.dataset.rowid;
                const action = this.dataset.action;
                const input = this.closest('.quantity-btn').querySelector('.num-count');
                let qty = parseInt(input.value);

                if (action === 'increment') {
                    qty++;
                } else if (action === 'decrement' && qty > 1) {
                    qty--;
                }

                updateCartQuantity(rowId, qty);
            });
        });

        // Remove item
        document.querySelectorAll('.remove-item').forEach(function(button) {
            button.addEventListener('click', function() {
                const rowId = this.dataset.rowid;
                removeCartItem(rowId);
            });
        });

        // Open the checkout modal
        document.querySelector('.btn-primary').addEventListener('click', function(event) {
            event.preventDefault();
            $('#checkoutModal').modal('show');
        });

        // Submit order form
        document.getElementById('orderForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            fetch('/orders', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        first_name: formData.get('first_name'),
                        last_name: formData.get('last_name'),
                        phone_number: formData.get('phone_number'),
                        products: formData.get('products'),
                        total_price: formData.get('total_price'),
                    })
                })
                .then(response => {
                    if (response.ok) {
                        return response.json(); // Only parse JSON if the response is OK
                    } else {
                        // Handle HTML error response
                        return response.text().then(html => {
                            throw new Error('Server returned HTML: ' + html);
                        });
                    }
                })
                .then(data => {
                    if (data.success) {
                        alert('Order placed successfully!');
                        window.location.href = '/order-success';
                    } else {
                        alert('Error placing order');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred: ' + error.message);
                });

        });

        // Update cart quantity
        function updateCartQuantity(rowId, qty) {
            fetch(`/cart/update/${rowId}`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        qty: qty
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Error updating cart');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred');
                });
        }

        // Remove cart item
        function removeCartItem(rowId) {
            fetch(`/cart/remove/${rowId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Error removing item');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred');
                });
        }
    });
</script>


@endsection