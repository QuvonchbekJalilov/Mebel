@extends('layouts.page')

@section('title', 'Shop_details Page')


@section('content')

<section class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h1 class="title wow fadeInUp" data-wow-delay="0.1s">{{__('app.shop_detail')}}</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="/" class="single">{{__('app.home')}}</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single active">{{__('app.shop_detail')}}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-of Breadcrumbs-->
<!-- product area S t a r t -->
<section class="product-details-area top-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-xxl-6 col-lg-6">
                <div class="product-image-container">


                    <div class="xzoom-thumbs">
                        <div class="xzoom-gallery-box">
                            <a href="#">
                                <img class="xzoom-gallery" width="500" src="/storage/{{$product->image}}" xpreview="/storage/{{$product->image}}" data-fancybox="gallery" alt="img">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-lg-6">
                <div class="product-details-content">
                    <div class="first-section">
                        <div class="category-name">
                            <p class="pera"><span class="highlight">{{__('app.single_category')}}: </span>{{ $product->category['name_'.App::getLocale()]}}</p>
                        </div>
                        <h4 class="product-name">{{ $product['title_'.$locale]}}</h4>
                        <div class="product-price-section">
                            <div class="price-section">
                                @if($product->getDiscount())
                                <h4 class="price discounted">{{ $product->price }} UZS</h4>
                                <h4 class="price">{{ $product->getDiscountedPrice() }} UZS</h4>
                                @else
                                <h4 class="price">{{ $product->price }} UZS</h4>
                                @endif
                            </div>

                        </div>
                        <div class="stock-section">
                            <p class="stock-count highlight">{{$product->stock}} {{__('app.stock')}}</p>
                            <!-- <p class="stock-count">( Sold 21 Products in last
                                10 Hours )</p> -->
                        </div>
                        <div class="">{!!$product['description_'.$locale]!!}</div>
                    </div>

                    <div class="third-section">
                        <div class="row g-4">
                            <div class="col-md-3">
                                <h4 class="label">{{__('app.quantity')}}</h4>
                            </div>
                            <div class="col-md-9">
                                <div class="quantity-section">
                                    <div class="quantity-btn position-relative">
                                        <input type="number" id="quantity-input" name="qty" value="1" class="num-count" min="1">
                                        <button class="increase-num">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
                                                <path d="M0 5.36618C0.0532405 5.553 0.143084 5.71647 0.319443 5.84199C0.618921 6.04924 1.0515 6.05508 1.35098 5.84491C1.40755 5.80404 1.46411 5.76026 1.51735 5.71355C2.97481 4.43501 4.4356 3.15355 5.89306 1.875C5.92633 1.84581 5.95295 1.81078 6.03281 1.75824C6.0561 1.79327 6.06941 1.83705 6.10269 1.86625C7.57346 3.15938 9.04755 4.4496 10.5183 5.74274C10.7779 5.97043 11.0773 6.058 11.4367 5.95875C11.9591 5.8128 12.1721 5.22315 11.8427 4.83784C11.8061 4.79405 11.7628 4.75318 11.7196 4.71232C10.0225 3.2236 8.32881 1.73489 6.63177 0.249093C6.32231 -0.0223789 5.92966 -0.0749219 5.57361 0.106059C5.4871 0.149845 5.41056 0.214063 5.34069 0.275363C3.69356 1.72029 2.04976 3.16522 0.399304 4.60723C0.216289 4.76778 0.0532405 4.93125 0 5.16185C0 5.22899 0 5.29613 0 5.36618Z" fill="currentColor" />
                                            </svg>
                                        </button>
                                        <button class="decrease-num">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6" fill="none">
                                                <path d="M12 0.633816C11.9468 0.446997 11.8569 0.28353 11.6806 0.158011C11.3811 -0.0492418 10.9485 -0.0550799 10.649 0.155092C10.5925 0.195958 10.5359 0.239744 10.4826 0.286449C9.02519 1.56499 7.5644 2.84645 6.10694 4.125C6.07367 4.15419 6.04705 4.18922 5.96719 4.24176C5.9439 4.20673 5.93059 4.16294 5.89731 4.13375C4.42654 2.84062 2.95245 1.5504 1.48168 0.257257C1.22213 0.0295717 0.922652 -0.0579998 0.563279 0.0412478C0.0408569 0.1872 -0.172105 0.776848 0.157321 1.16216C0.193924 1.20595 0.237181 1.24681 0.280439 1.28768C1.97748 2.7764 3.67119 4.26511 5.36823 5.75091C5.67769 6.02238 6.07034 6.07492 6.42639 5.89394C6.5129 5.85015 6.58944 5.78594 6.65931 5.72464C8.30644 4.27971 9.95024 2.83478 11.6007 1.39277C11.7837 1.23222 11.9468 1.06875 12 0.838149C12 0.771011 12 0.703873 12 0.633816Z" fill="currentColor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <form id="add-to-cart-form" action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" id="hidden-quantity" name="qty" value="1"> <!-- Hidden input for quantity -->
                                        <button type="submit" class="cart-btn" name="submit" value="addtocart">{{__('app.cart')}}</button>
                                    </form>
                                </div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const quantityInput = document.getElementById('quantity-input');
                                        const hiddenQuantityInput = document.getElementById('hidden-quantity');
                                        const increaseBtn = document.querySelector('.increase-num');
                                        const decreaseBtn = document.querySelector('.decrease-num');
                                        const addToCartForm = document.getElementById('add-to-cart-form');

                                        // Increase quantity
                                        increaseBtn.addEventListener('click', function() {
                                            let currentValue = parseInt(quantityInput.value, 10);
                                            if (currentValue < 999) { // Optional: Set an upper limit if needed
                                                quantityInput.value = currentValue + 1;
                                                hiddenQuantityInput.value = quantityInput.value; // Update hidden input
                                            }
                                        });

                                        // Decrease quantity
                                        decreaseBtn.addEventListener('click', function() {
                                            let currentValue = parseInt(quantityInput.value, 10);
                                            if (currentValue > 1) { // Prevent going below 1
                                                quantityInput.value = currentValue - 1;
                                                hiddenQuantityInput.value = quantityInput.value; // Update hidden input
                                            }
                                        });

                                        // Ensure hidden quantity is updated on form submission
                                        addToCartForm.addEventListener('submit', function() {
                                            hiddenQuantityInput.value = quantityInput.value;
                                        });
                                    });
                                </script>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-of product area-->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInput = document.getElementById('quantity-input');
        const increaseBtn = document.querySelector('.increase-num');
        const decreaseBtn = document.querySelector('.decrease-num');
        const addToCartBtn = document.querySelector('.cart-btn');

        // Increase quantity
        increaseBtn.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value, 10);
            if (currentValue < 999) { // Optional: Set an upper limit if needed
                quantityInput.value = currentValue + 1;
            }
        });

        // Decrease quantity
        decreaseBtn.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value, 10);
            if (currentValue > 1) { // Prevent going below 1
                quantityInput.value = currentValue - 1;
            }
        });

        // Add to Cart
        addToCartBtn.addEventListener('click', function() {
            const productId = /* Insert the product ID dynamically here, e.g., from a data attribute or context */ ;
            const quantity = quantityInput.value;

            fetch('/add-to-cart', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        qty: quantity
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Item added to cart successfully!');
                        // Optionally update the cart UI here
                    } else {
                        alert('Failed to add item to cart.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
</script>

<!-- Related Products Start -->
<section class="related-product feature-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4 class="title">{{__('app.shopdetail1')}}</h4>
                </div>
                <div class="swiper featureSwiper-active">
                    <div class="swiper-wrapper">
                        @foreach ($relatedProducts as $relatedProduct)
                        <div class="swiper-slide">
                            <div class="product-card best-product-card">
                                <div class="top-card">
                                    <div class="price-section">
                                        @if($relatedProduct->getDiscount())
                                        <h4 class="price text-color-primary">
                                            {{ $relatedProduct->getDiscountedPrice() }} UZS
                                            <span class="text-muted text-decoration-line-through">{{ $relatedProduct->price }} UZS</span>
                                        </h4>
                                        @else
                                        <h4 class="price text-color-primary">{{ $relatedProduct->price }} UZS</h4>
                                        @endif
                                    </div>

                                </div>
                                <div class="product-img-card best-product-img-card">
                                    <a href="{{ route('shop_details', $relatedProduct->id) }}">
                                        <img src="{{ asset('storage/' . $relatedProduct->image) }}" alt="{{ $relatedProduct['title_'. $locale] }}">
                                    </a>
                                    <div class="special-icon">
                                        <button class="icon-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" fill="none">
                                                <path d="M0.978546 2.56816V5.13649H1.65442H2.33029V3.71701V2.292L5.45619 5.35743L8.58209 8.42285L9.07209 7.9368L9.56773 7.45628L6.44183 4.39085L3.31593 1.32542H4.76905H6.21654V0.662629V-0.000165939H3.59754H0.978546V2.56816Z" fill="#111111" />
                                                <path d="M15.1167 0.662629V1.32542H16.5642H18.0173L14.8914 4.39085L11.7655 7.45628L12.2611 7.9368L12.7511 8.42285L15.877 5.35743L19.0029 2.292V3.71701V5.13649H19.6788H20.3547V2.56816V-0.000165939H17.7357H15.1167V0.662629Z" fill="#111111" />
                                                <path d="M5.43926 13.6535L2.33026 16.7078V15.2828V13.8633H1.65439H0.978516V16.4317V19H3.59751H6.21651V18.3372V17.6744H4.76902H3.3159L6.4418 14.609L9.5677 11.5436L9.08896 11.0741C8.82988 10.8145 8.59895 10.6046 8.58206 10.6046C8.56516 10.6046 7.15146 11.9799 5.43926 13.6535Z" fill="#111111" />
                                                <path d="M12.2442 11.0741L11.7655 11.5436L14.8914 14.609L18.0173 17.6744H16.5641H15.1167V18.3372V19H17.7356H20.3546V16.4317V13.8633H19.6788H19.0029V15.2828V16.7078L15.8883 13.6535C14.1817 11.9799 12.768 10.6046 12.7511 10.6046C12.7342 10.6046 12.5033 10.8145 12.2442 11.0741Z" fill="#111111" />
                                            </svg>
                                        </button>
                                        <button class="icon-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="25" viewBox="0 0 22 25" fill="none">
                                                <path d="M9.4304 0.827005C9.4304 1.27952 9.41567 1.65419 9.40094 1.65419C9.38622 1.65419 9.14565 1.69798 8.87563 1.75637C4.21162 2.6906 0.73079 6.34481 0.0827378 10.9868C-0.0694564 12.0475 -0.00563302 13.663 0.225113 14.7432C0.809342 17.5069 2.62094 20.1004 5.01677 21.6185L5.29661 21.7937L5.98885 21.2779C6.36688 20.9957 6.68109 20.7524 6.68109 20.733C6.68109 20.7184 6.55835 20.6405 6.41107 20.5627C5.65992 20.1734 4.68293 19.3949 4.02015 18.6601C2.76332 17.2636 1.95816 15.5606 1.69796 13.77C1.60468 13.1083 1.60468 11.7945 1.69796 11.1668C1.89925 9.83845 2.37056 8.58308 3.07753 7.48341C3.96123 6.11612 5.30643 4.91914 6.77928 4.1844C7.52552 3.8146 8.56142 3.46426 9.2733 3.33775L9.4304 3.30856V3.98977C9.4304 4.36444 9.44022 4.67098 9.45495 4.67098C9.50404 4.67098 12.5725 2.36946 12.5725 2.3354C12.5725 2.30134 9.50404 -0.000179291 9.45495 -0.000179291C9.44022 -0.000179291 9.4304 0.369621 9.4304 0.827005Z" fill="#111111" />
                                                <path d="M16.0134 3.6345C15.6354 3.91672 15.331 4.16487 15.3457 4.18434C15.3604 4.20867 15.5077 4.30112 15.6795 4.39357C17.118 5.20129 18.4583 6.56371 19.288 8.07697C19.7888 8.98687 20.211 10.3104 20.3288 11.3419C20.427 12.1545 20.3681 13.551 20.211 14.2906C19.5335 17.4728 17.2997 20.0371 14.2165 21.1757C13.8287 21.3168 12.778 21.6039 12.6406 21.6039C12.5866 21.6039 12.5718 21.4822 12.5718 20.9227C12.5718 20.548 12.562 20.2414 12.5473 20.2414C12.4982 20.2414 9.42976 22.543 9.42976 22.577C9.42976 22.6111 12.4982 24.9126 12.5473 24.9126C12.562 24.9126 12.5718 24.5428 12.5718 24.0854V23.2631L12.7584 23.2339C13.215 23.1609 14.5062 22.8154 14.9284 22.65C18.7578 21.1659 21.3795 17.8767 21.9244 13.8673C22.0668 12.8357 22.003 11.2203 21.7771 10.1693C21.1929 7.40549 19.3813 4.81202 16.9855 3.2939L16.7056 3.11873L16.0134 3.6345Z" fill="#111111" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <a href="{{ route('shop_details', $relatedProduct->id) }}">
                                    <h4 class="product-title line-clamp-1">{{ $relatedProduct['title_'.$locale] }}</h4>
                                </a>

                                <div class="cart-card best-product-cart-card d-none d-md-block">
                                    <a href="{{ route('shop_details', $relatedProduct->id) }}">
                                        <h4 class="product-title line-clamp-1">{{ $relatedProduct['title_'.$locale] }}</h4>
                                    </a>

                                    <div class="button-section">
                                        <form id="add-to-cart-form" action="{{ route('cart.add') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $relatedProduct->id }}">
                                            <input type="hidden" id="hidden-quantity" name="qty" value="1"> <!-- Hidden input for quantity -->
                                            <button type="submit" class="cart-btn" name="submit" value="addtocart">{{__('app.cart')}}</button>
                                        </form>

                                        <div class="fill-pill-btn qty-btn">
                                            <div class="qty-container best-product-qty-container">
                                                <div class="qty-btn-minus qty-btn mr-1">
                                                    <i class="ri-subtract-fill"></i>
                                                </div>
                                                <input type="text" name="qty" value="0" class="input-qty input-rounded">
                                                <div class="qty-btn-plus qty-btn ml-1">
                                                    <i class="ri-add-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-section d-block d-md-none">
                                    <form id="add-to-cart-form" action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $relatedProduct->id }}">
                                        <input type="hidden" id="hidden-quantity" name="qty" value="1"> <!-- Hidden input for quantity -->
                                        <button type="submit" class="cart-btn" name="submit" value="addtocart">{{__('app.cart')}}</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next swiper-common-btn"><i class="ri-arrow-right-s-line"></i></div>
                    <div class="swiper-button-prev swiper-common-btn"><i class="ri-arrow-left-s-line"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-of Related Products -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const qtyContainers = document.querySelectorAll('.qty-container');

        qtyContainers.forEach(container => {
            const minusBtn = container.querySelector('.qty-btn-minus');
            const plusBtn = container.querySelector('.qty-btn-plus');
            const qtyInput = container.querySelector('.input-qty');

            minusBtn.addEventListener('click', () => {
                let qty = parseInt(qtyInput.value);
                if (qty > 1) {
                    qtyInput.value = qty - 1;
                }
            });

            plusBtn.addEventListener('click', () => {
                let qty = parseInt(qtyInput.value);
                qtyInput.value = qty + 1;
            });

            // Update hidden input quantity
            qtyInput.addEventListener('change', () => {
                const hiddenQtyInput = document.getElementById('hidden-quantity');
                hiddenQtyInput.value = qtyInput.value;
            });
        });
    });
</script>
<!-- subscription area S t a r t -->
<section class="subscription-area subscription-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscription-wrapper">
                    <div class="left-wrapper">
                        <div class="subscription-content">
                            <h4 class="title">{{__('app.call')}}</h4>
                            {{--<p class="pera">Join our email subscription now</p>--}}
                        </div>
                        <div class="subscription-input-section">
                            <form id="phone-form" onsubmit="return sendMessage()">
                                <input type="text" id="phone_number" class="subscription-input" name="form_phone" placeholder="{{__('app.enter_phone')}}">
                                <button type="submit" class="subscribe-btn">
                                    <span class="btn-text">{{__('app.send')}}</span>
                                    <span class="icon"><i class="ri-arrow-right-line"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="right-wrapper">
                        <img src="/frontend/assets/images/logo/logo-2.png" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-of subscription-->
<script>
    function sendMessage() {
        const phoneNumber = document.getElementById('phone_number').value;

        // Ensure phone number is filled
        if (!phoneNumber) {
            alert('Please enter your phone number.');
            return false;
        }

        // Regular expression to validate phone number format
        const pattern = /^\+998([- ])?(90|91|93|94|95|98|99|33|97|71)([- ])?(\d{3})([- ])?(\d{2})([- ])?(\d{2})$/;

        // Check if the phone number is valid
        if (!pattern.test(phoneNumber)) {
            alert('Please enter a valid phone number: +998 (XX) XXX-XX-XX');
            return false;
        }

        // Telegram Bot API details
        const telegramBotToken = '6713804569:AAGCneOQLB20Ma2tkqwOy3D-PD_65nq8mjY';
        const telegramChatId = '1347969244';
        const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;

        // Prepare the message data
        const data = {
            chat_id: telegramChatId,
            text: `Yangi Habar:\n\nTelefon: ${phoneNumber}`
        };

        // Send the message via Telegram API
        fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.ok) {
                    alert("Habar Jo'natildi!");
                    document.getElementById('phone-form').reset();
                } else {
                    alert('Xatolik yuz berdi qayta urunib koring.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Xatolik yuz berdi qayta urunib koring.');
            });

        // Prevent default form submission
        return false;
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const phoneInput = document.getElementById('phone_number');
        const pattern = /^\+998[- ]?(90|91|93|94|95|98|99|33|97|71)[- ]?(\d{3})[- ]?(\d{2})[- ]?(\d{2})$/;

        // Set initial value to +998
        phoneInput.value = '+998 ';

        phoneInput.addEventListener('input', (e) => {
            let value = e.target.value;

            // Ensure the value always starts with +998
            if (!value.startsWith('+998 ')) {
                value = '+998 ' + value.replace(/^\+998\s*/, '');
            }

            // Remove invalid characters
            value = value.replace(/[^\d+]/g, '');

            // Format value according to the pattern
            let match = value.match(/^\+998\s?(90|91|93|94|95|98|99|33|97|71)?\s?(\d{0,3})?\s?(\d{0,2})?\s?(\d{0,2})?/);
            if (match) {
                let formattedValue = '+998 ';
                if (match[1]) formattedValue += match[1] + ' ';
                if (match[2]) formattedValue += match[2] + (match[2].length === 3 ? ' ' : '');
                if (match[3]) formattedValue += match[3] + (match[3].length === 2 ? ' ' : '');
                if (match[4]) formattedValue += match[4];
                value = formattedValue;
            }

            e.target.value = value.trim();
        });

        phoneInput.addEventListener('keydown', (e) => {
            const value = e.target.value;
            // Allow user to clear the input completely
            if (e.key === 'Backspace' && value.length <= 5) {
                phoneInput.value = ''; // Clear the input field
            }
        });

        document.getElementById('phone-form').addEventListener('submit', (e) => {
            if (!pattern.test(phoneInput.value)) {
                e.preventDefault();
                alert('Please enter a valid phone number: +998 (XX) XXX-XX-XX');
            }
        });
    });
</script>
@endsection