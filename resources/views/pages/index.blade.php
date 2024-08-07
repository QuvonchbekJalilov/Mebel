@extends('layouts.app')

@section('title', 'Home Page')


@section('content')


<section class="hero-area-bg hero-padding1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper heroSwiperOne-active">
                    <div class="swiper-wrapper">
                        <!-- Single Slider -->
                        <div class="swiper-slide">
                            <div class="hero-caption-one position-relative mx-auto wow fadeInUp" data-wow-delay="0.0s">
                                <h4 class="title">Discover The Premium
                                    <span class="outline-text">Furniture</span> in Our Partroll Store
                                </h4>
                            </div>
                            <div class="text-center d-block wow fadeInUp" data-wow-delay="0.1s">
                                <a href="/shop" class="outline-pill-btn ">
                                    Explore Products
                                    <svg xmlns="http://www.w3.org/2000/svg" width="78" height="19" viewBox="0 0 78 19" fill="none">
                                        <path d="M66.918 10.9147C66.8987 10.9909 66.8754 11.0659 66.8482 11.1394C66.3343 12.5191 65.8568 13.9149 65.3832 15.3094C65.2835 15.6007 65.0431 15.8908 65.3278 16.3278C68.9295 13.4161 73.0932 11.4878 77.3487 9.65131C72.9717 7.73141 68.8104 5.59576 65.0804 2.61703C64.8556 3.06744 65.0978 3.36045 65.2072 3.6577C65.7259 5.06223 66.2433 6.47061 66.7965 7.85894C67.1854 8.84516 67.2283 9.92384 66.918 10.9147Z" fill="currentColor" />
                                        <rect y="8.90649" width="68" height="1" rx="0.5" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                            <div class="hero-image mx-auto wow fadeInUp" data-wow-delay="0.2s">
                                <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                            </div>
                        </div>
                        <!-- Single Slider -->
                        <div class="swiper-slide">
                            <div class="hero-caption-one position-relative mx-auto wow fadeInUp" data-wow-delay="0.0s">
                                <h4 class="title">
                                    Explore our Exclusive Collection of
                                    <span class="outline-text">Luxury</span> Furniture
                                </h4>
                            </div>
                            <div class="text-center d-block wow fadeInUp" data-wow-delay="0.1s">
                                <a href="/shop" class="outline-pill-btn ">
                                    Explore Products
                                    <svg xmlns="http://www.w3.org/2000/svg" width="78" height="19" viewBox="0 0 78 19" fill="none">
                                        <path d="M66.918 10.9147C66.8987 10.9909 66.8754 11.0659 66.8482 11.1394C66.3343 12.5191 65.8568 13.9149 65.3832 15.3094C65.2835 15.6007 65.0431 15.8908 65.3278 16.3278C68.9295 13.4161 73.0932 11.4878 77.3487 9.65131C72.9717 7.73141 68.8104 5.59576 65.0804 2.61703C64.8556 3.06744 65.0978 3.36045 65.2072 3.6577C65.7259 5.06223 66.2433 6.47061 66.7965 7.85894C67.1854 8.84516 67.2283 9.92384 66.918 10.9147Z" fill="currentColor" />
                                        <rect y="8.90649" width="68" height="1" rx="0.5" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                            <div class="hero-image mx-auto wow fadeInUp" data-wow-delay="0.2s">
                                <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                            </div>
                        </div>
                        <!-- Single Slider -->
                        <div class="swiper-slide">
                            <div class="hero-caption-one position-relative mx-auto wow fadeInUp" data-wow-delay="0.0s">
                                <h4 class="title">
                                    Elevate Your Space with
                                    <span class="outline-text">Elegant</span> Furniture Designs
                                </h4>
                            </div>
                            <div class="text-center d-block">
                                <a href="/shop" class="outline-pill-btn wow fadeInUp" data-wow-delay="0.1s">
                                    Explore Products
                                    <svg xmlns="http://www.w3.org/2000/svg" width="78" height="19" viewBox="0 0 78 19" fill="none">
                                        <path d="M66.918 10.9147C66.8987 10.9909 66.8754 11.0659 66.8482 11.1394C66.3343 12.5191 65.8568 13.9149 65.3832 15.3094C65.2835 15.6007 65.0431 15.8908 65.3278 16.3278C68.9295 13.4161 73.0932 11.4878 77.3487 9.65131C72.9717 7.73141 68.8104 5.59576 65.0804 2.61703C64.8556 3.06744 65.0978 3.36045 65.2072 3.6577C65.7259 5.06223 66.2433 6.47061 66.7965 7.85894C67.1854 8.84516 67.2283 9.92384 66.918 10.9147Z" fill="currentColor" />
                                        <rect y="8.90649" width="68" height="1" rx="0.5" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                            <div class="hero-image mx-auto wow fadeInUp" data-wow-delay="0.2s">
                                <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="ri-arrow-right-s-line"></i></div>
                    <div class="swiper-button-prev"><i class="ri-arrow-left-s-line"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- shape 01 -->
    <div class="shape-one heartbeat2">
        {{-- <img src="assets/images/hero/hero-shape.png" alt="img">--}}
        <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
    </div>
    <!-- shape 02 -->
    <div class="shape-two routedOne">
        {{-- <img src="assets/images/hero/hero-shape.png" alt="img">--}}
        <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
    </div>
</section>
<!-- End-of Hero-->

<!-- Brand S t a r t -->
<section class="brand-area pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4 class="title">Brands</h4>
                </div>
                <div class="swiper brandSwiper-active">
                    <div class="swiper-wrapper">
                        @foreach($brands as $brand)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $brand->image) }}" style="width: 130px !important;" alt="{{ $brand->name }}">
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next swiper-common-btn">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div class="swiper-button-prev swiper-common-btn">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of Brand -->

<!-- Goal area S t a r t -->
<section class="goal-area position-relative">
    <div class="container">
        <div class="row g-4">
            <div class="col-xxl-3 col-md-4 col-sm-6">
                <div class="goal-card wow fadeInUp" data-wow-delay="0.0s">
                    <div class="circle-icon">
                        {{-- <img src="assets/images/goal/icon-1.png" alt="img">--}}
                        <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                    </div>
                    <a href="javascript:void(0)">
                        <h4 class="title line-clamp-1 text-color-primary">Original Product</h4>
                        <p class="pera text-color-tertiary line-clamp-2">There are many variations of passages
                            of our
                            Lorem Ipsum available but the.</p>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-sm-6">
                <div class="goal-card wow fadeInUp" data-wow-delay="0.0s">
                    <div class="circle-icon">
                        <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">

                        {{-- <img src="assets/images/goal/icon-2.png" alt="img">--}}
                    </div>
                    <a href="javascript:void(0)">
                        <h4 class="title line-clamp-1 text-color-primary">Satisfaction Guarantee</h4>
                        <p class="pera text-color-tertiary line-clamp-2">There are many variations of passages
                            of our
                            Lorem Ipsum available but the.</p>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-sm-6">
                <div class="goal-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="circle-icon">
                        <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">

                        {{-- <img src="assets/images/goal/icon-3.png" alt="img">--}}
                    </div>
                    <a href="javascript:void(0)">
                        <h4 class="title line-clamp-1 text-color-primary">New Arrival Everyday</h4>
                        <p class="pera text-color-tertiary line-clamp-2">There are many variations of passages
                            of our
                            Lorem Ipsum available but the.</p>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-sm-6">
                <div class="goal-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="circle-icon">
                        <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">

                        {{-- <img src="assets/images/goal/icon-4.png" alt="img">--}}
                    </div>
                    <a href="javascript:void(0)">
                        <h4 class="title line-clamp-1 text-color-primary">Fast & Free Shipping</h4>
                        <p class="pera text-color-tertiary line-clamp-2">There are many variations of passages
                            of our
                            Lorem Ipsum available but the.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="shape routedOne">
        <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">

        {{-- <img src="assets/images/goal/shape.png" alt="img">--}}
    </div>
</section>
<!-- End-of goal-->

<!-- Feature area S t a r t -->
<section class="feature-area feature-bg position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4 class="title">Featured Products</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper featureSwiper-active">
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                        <div class="swiper-slide">
                            <div class="product-card feature-card h-calc">
                                <div class="top-card">
                                    <div class="price-section">
                                        @php
                                        $discount = $product->getDiscount();
                                        @endphp
                                        @if ($discount)
                                        <h4 class="price discounted">{{ $product->price }} UZS</h4>
                                        <h4 class="price text-color-primary">{{ $product->getDiscountedPrice() }} UZS</h4>
                                        @else
                                        <h4 class="price text-color-primary">{{ $product->price }} UZS</h4>
                                        @endif
                                    </div>

                                </div>
                                <div class="product-img-card feature-img-card">
                                    <a href="/shop" class="zoomImg">
                                        <img src="{{ 'storage/' . $product->image }}" alt="{{ $product->{'title_' . $locale} }}">
                                    </a>
                                    @if ($discount)
                                    <div class="discount-badge">
                                        <span class="percentage">- {{ $discount->percentage }}%</span>
                                    </div>
                                    @endif
                                    <div class="special-icon">
                                        <button class="icon-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" fill="none">
                                                <!-- SVG content -->
                                            </svg>
                                        </button>
                                        <div class="divider"></div>
                                        <button class="icon-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="25" viewBox="0 0 22 25" fill="none">
                                                <!-- SVG content -->
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <a href="/shop">
                                    <h4 class="product-title line-clamp-1">{{ $product->{'title_' . $locale} }}</h4>
                                </a>

                                <div class="cart-card feature-cart-card d-none d-md-block">
                                    <a href="/shop">
                                        <h4 class="product-title line-clamp-1">{{ $product->{'title_' . $locale} }}</h4>
                                    </a>

                                    <div class="button-section">
                                        <form id="add-to-cart-form" action="{{ route('cart.add') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" id="hidden-quantity" name="qty" value="1"> <!-- Hidden input for quantity -->
                                            <button type="submit" class="cart-btn" name="submit" value="addtocart">Add to Cart</button>
                                        </form>
                                        <div class="fill-pill-btn qty-btn">
                                            <div class="qty-container featury-qty-container">
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
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" id="hidden-quantity" name="qty" value="1"> <!-- Hidden input for quantity -->
                                        <button type="submit" class="cart-btn" name="submit" value="addtocart">Add to Cart</button>
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

<!-- End-of feature-->

<!-- Categories area S t a r t -->
<section class="category-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-with-button wow fadeInLeft" data-wow-delay="0.0s">
                    <div class="section-title position-relative">
                        <h4 class="title">Choose The <span class="outline-text">Categories</span>
                            That You Want</h4>
                        <div class="shape routedOne">
                            <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                        </div>
                    </div>
                    <div class="text-center d-block">
                        <a href="/shop" class="outline-pill-btn ">
                            See All Categories
                            <svg xmlns="http://www.w3.org/2000/svg" width="78" height="19" viewBox="0 0 78 19" fill="none">
                                <path d="M66.918 10.9147C66.8987 10.9909 66.8754 11.0659 66.8482 11.1394C66.3343 12.5191 65.8568 13.9149 65.3832 15.3094C65.2835 15.6007 65.0431 15.8908 65.3278 16.3278C68.9295 13.4161 73.0932 11.4878 77.3487 9.65131C72.9717 7.73141 68.8104 5.59576 65.0804 2.61703C64.8556 3.06744 65.0978 3.36045 65.2072 3.6577C65.7259 5.06223 66.2433 6.47061 66.7965 7.85894C67.1854 8.84516 67.2283 9.92384 66.918 10.9147Z" fill="currentColor" />
                                <rect y="8.90649" width="68" height="1" rx="0.5" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 mb-24">
            <div class="col-xl-6">
                <div class="category-card h-calc gallery-one wow fadeInUp" data-wow-delay="0.0s">
                    <a href="/shop" class="zoomImg">
                        <img src="/image/BRB-2.png" alt="img">
                    </a>
                    <div class="collection-card lg">
                        <a href="/shop">
                            <h4 class="title text-color-primary line-clamp-1">Exclusive Papillon XL Beds</h4>
                            <p class="pera text-color-tertiary">35 Categories</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="row g-4">
                    <div class="col-xl-12 col-lg-6">
                        <div class="category-card h-calc gallery-two wow fadeInUp" data-wow-delay="0.1s">
                            <a href="/shop" class="zoomImg">
                                <img src="/image/BRB-1.png" alt="img">
                            </a>
                            <div class="collection-card">
                                <a href="/shop">
                                    <h4 class="title text-color-primary">Contemporary Sofa</h4>
                                    <p class="pera text-color-tertiary">48 Categories</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-6">
                        <div class="category-card h-calc gallery-two wow fadeInUp" data-wow-delay="0.2s">
                            <a href="/shop" class="zoomImg">
                                <img src="/image/BRB-1.png" alt="img">
                            </a>
                            <div class="collection-card">
                                <a href="/shop">
                                    <h4 class="title text-color-primary">Vocan Center Table</h4>
                                    <p class="pera text-color-tertiary">24 Categories</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-md-6">
                <div class="category-card h-calc gallery-three wow fadeInUp" data-wow-delay="0.0s">
                    <a href="/shop" class="zoomImg">
                        <img src="/image/BRB-1.png" alt="img">
                    </a>
                    <div class="collection-card sm">
                        <a href="/shop">
                            <h4 class="title text-color-primary line-clamp-1">Glass Coffee Table</h4>
                            <p class="pera text-color-tertiary">15 Categories</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="category-card h-calc gallery-three wow fadeInUp" data-wow-delay="0.1s">
                    <a href="/shop" class="zoomImg">
                        <img src="/image/BRB-1.png" alt="img">
                    </a>
                    <div class="collection-card sm">
                        <a href="/shop">
                            <h4 class="title text-color-primary line-clamp-1">Mambo Lamp Light</h4>
                            <p class="pera text-color-tertiary">22 Categories</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="category-card h-calc gallery-three wow fadeInUp" data-wow-delay="0.2s">
                    <a href="/shop" class="zoomImg">
                        <img src="/image/BRB-1.png" alt="img">
                    </a>
                    <div class="collection-card sm">
                        <a href="/shop">
                            <h4 class="title text-color-primary line-clamp-1">Luxury Chat Chair</h4>
                            <p class="pera text-color-tertiary">32 Categories</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End-of categories-->

<!-- Deals area S t a r t -->
<section class="deals-area section-bg">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-12">
                <div class="deals-card">
                    <div class="row align-items-center g-4">
                        <div class="col-xl-6">
                            <div class="deals-banner">
                                {{-- <img src="assets/images/gallery/deals-1.png" alt="img">--}}
                                <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                                <div class="shape-container">
                                    <div class="shape">
                                        <h4 class="title">Up to</h4>
                                        <h4 class="highlight-title">40%</h4>
                                        <h4 class="title">Off</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="deals-content">
                                <p class="deal-subtitle">Deal of the Week</p>
                                <div class="section-title">
                                    <h4 class="title">Deal of the Week Let's <span class="outline-text">Shopping</span> Today</h4>
                                </div>
                                <div class="bottom-content">
                                    <a href="javascript:void(0)" class="fill-pill-btn shop-btn">Shop Now</a>
                                    <div class="price-section">
                                        <h4 class="price discounted">$450</h4>
                                        <h4 class="price text-color-primary">$350</h4>
                                    </div>
                                </div>
                                <div class="progress-section">
                                    <div class="progress-content">
                                        <h4 class="title">Availavle: 15</h4>
                                        <p class="title">Already Sold: 85</p>
                                    </div>
                                    <div class="progress custom-progress-two">
                                        <div class="progress-bar" style="width: 40%"></div>
                                    </div>

                                </div>
                                <div class="deals-footer">
                                    <div class="section-title">
                                        <h4 class="title">Hurry Up:</h4>
                                        <p class="pera">Offer ends in</p>
                                    </div>
                                    <div class="count-down">
                                        <div class="circle">
                                            <h4 class="number">20</h4>
                                            <p class="pera">Days</p>
                                        </div>
                                        <div class="circle">
                                            <h4 class="number">12</h4>
                                            <p class="pera">Hours</p>
                                        </div>
                                        <div class="circle">
                                            <h4 class="number">42</h4>
                                            <p class="pera">Min</p>
                                        </div>
                                        <div class="circle">
                                            <h4 class="number">23</h4>
                                            <p class="pera">Sec</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-one heartbeat2">
                        <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                    </div>
                    <div class="shape-two routedOne">
                        <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-of deals-->

<!-- Best product area S t a r t -->
<section class="best-product-area">
    <div class="container">
        <div class="row g-4 mb-24">
            <div class="col-xxl-6">
                <div class="section-with-button">
                    <div class="section-title position-relative wow fadeInUp" data-wow-delay="0.0s">
                        <h4 class="title">Our Best All Products <span class="outline-text">Collections</span></h4>
                        <div class="shape routedOne">
                            <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="row g-4">
                    @foreach($sell as $product)
                    <div class="col-xxl-6 col-xl-4 col-sm-6">
                        <div class="product-card best-product-card">
                            <div class="top-card">
                                <div class="price-section">
                                    <h4 class="price text-color-primary">${{ $product->price }}</h4>
                                </div>
                                <button class="wishlist-icon">
                                    <img src="assets/images/icon/wish-icon-2.png" alt="img">
                                </button>
                            </div>
                            <div class="product-img-card best-product-img-card">
                                <a href="{{ route('shop.details', $product->id) }}" class="zoomImg">
                                    <img src="{{ $product->image_url }}" alt="img">
                                </a>
                                <div class="special-icon">
                                    <button class="icon-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" fill="none">
                                            <!-- SVG content -->
                                        </svg>
                                    </button>
                                    <div class="divider"></div>
                                    <button class="icon-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="25" viewBox="0 0 22 25" fill="none">
                                            <!-- SVG content -->
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="{{ route('shop.details', $product->id) }}">
                                <h4 class="product-title line-clamp-1">{{ $product->name }}</h4>
                            </a>
                            <div class="product-review">
                                <div class="product-ratting">
                                    <!-- Replace with dynamic stars based on product rating -->
                                    <i class="ri-star-s-fill"></i>
                                    <i class="ri-star-s-fill"></i>
                                    <i class="ri-star-s-fill"></i>
                                    <i class="ri-star-s-fill"></i>
                                    <i class="ri-star-s-fill"></i>
                                </div>
                                <p class="count-ratting">({{ $product->reviews_count }})</p>
                            </div>
                            <div class="button-section">
                                <a href="javascript:void(0)" class=" cart-btn">Add to Cart</a>
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
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
</section>
<!-- End-of best product-->

<section class="news-area bottom-padding1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4 class="title">Latest Blog & News</h4>
                </div>
                <div class="swiper newsSwiper-active">
                    <div class="swiper-wrapper">
                        @foreach($news as $article)
                        <div class="swiper-slide">
                            <div class="news-card">
                                <a href="{{ route('blog.details', $article->id) }}">
                                    <div class="news-img zoomImg">
                                        <img src="{{ asset('storage/'.$article->image) }}" alt="img">
                                        <div class="news-badge">
                                            <span class="date">
                                                {{ $article->created_at->format('d F Y') }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="author-info">
                                    <div class="icon-with-title">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">By {{ $article->author }}</p>
                                    </div>
                                    <div class="icon-with-title">
                                        <i class="ri-message-2-line"></i>
                                        <p class="pera">{{ $article->comments_count }} Comments</p>
                                    </div>
                                </div>
                                <div class="news-content">
                                    <a href="{{ route('blog.details', $article->id) }}">
                                        <h4 class="news-title line-clamp-2">{{ $article->title }}</h4>
                                    </a>
                                </div>
                                <a href="{{ route('blog.details', $article->id) }}" class="read-more-text">Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                        <path d="M12.6227 4.38164C12.5587 4.38164 12.4989 4.38164 12.4349 4.38164C8.56302 4.38164 4.69114 4.38164 0.819254 4.38164C0.7168 4.38164 0.614347 4.37773 0.516163 4.40117C0.195996 4.46758 -0.0302552 4.76447 0.00389589 5.05746C0.0423159 5.37779 0.302718 5.60827 0.644229 5.6278C0.712532 5.63171 0.780834 5.63171 0.853405 5.63171C4.71248 5.63171 8.57583 5.63171 12.4349 5.63171C12.4989 5.63171 12.5587 5.63171 12.6654 5.63171C12.5971 5.69812 12.5587 5.73719 12.516 5.77625C11.3805 6.81928 10.2407 7.86231 9.10517 8.90534C8.82342 9.16317 8.79354 9.51866 9.0326 9.77648C9.27166 10.0382 9.68574 10.0773 9.98029 9.86633C10.0272 9.83508 10.0657 9.79602 10.1084 9.75695C11.6494 8.34671 13.1905 6.93257 14.7273 5.51842C15.0987 5.17856 15.0987 4.8387 14.7273 4.49883C13.1777 3.07687 11.6238 1.65491 10.0742 0.229051C9.8693 0.0415392 9.63878 -0.0483093 9.35276 0.0259132C8.88319 0.147015 8.70389 0.670483 9.00698 1.01425C9.0454 1.06113 9.09236 1.10019 9.13932 1.14317C10.2663 2.17448 11.389 3.20969 12.5203 4.241C12.563 4.28007 12.6185 4.2996 12.6654 4.33085C12.6483 4.34257 12.6355 4.3621 12.6227 4.38164Z" fill="#696969" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Subscription area S t a r t -->
<section class="subscription-area subscription-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscription-wrapper">
                    <div class="left-wrapper">
                        <div class="subscription-content">
                            <h4 class="title">{{__('app.call')}}</h4>
                            {{-- <p class="pera">Join our email subscription now</p>--}}
                        </div>
                        <div class="subscription-input-section">
                            <input type="text" class="subscription-input" placeholder="{{__('app.enter_phone')}}">
                            <button type="submit" class="subscribe-btn">
                                <span class="btn-text">{{__('app.subscribe')}}</span>
                                <span class="icon"><i class="ri-arrow-right-line"></i></span>
                            </button>
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


@endsection