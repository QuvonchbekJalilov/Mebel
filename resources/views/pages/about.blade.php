
@extends('layouts.page')

@section('title', 'About Page')


@section('content')

        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h1 class="title wow fadeInUp" data-wow-delay="0.1s">{{__('app.about')}}</h1>
                            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                                <ul class="breadcrumb listing">
                                    <li class="breadcrumb-item single-list"><a href="/" class="single">{{__('app.home')}}</a></li>
                                    <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                            class="single active">{{__('app.about')}}</a></li>
                                </ul>
                            </nav>
                        </div>
					</div>
				</div>
            </div>
        </section>
        <!-- End-of Breadcrumbs-->

        <!-- Goal area S t a r t -->
        <section class="goal-area position-relative">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xxl-3 col-md-4 col-sm-6">
                        <div class="goal-card wow fadeInUp" data-wow-delay="0.0s">
                            <div class="circle-icon">
                                <img src="/image/BRB-1.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                            </div>
                            <a href="javascript:void(0)">
                                <h4 class="title line-clamp-1 text-color-primary">Original Products</h4>
                                <p class="pera text-color-tertiary line-clamp-2">We offer a wide range of original products, ensuring the highest quality for our customers.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6">
                        <div class="goal-card wow fadeInUp" data-wow-delay="0.0s">
                            <div class="circle-icon">
                                <img src="/image/BRB-2.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                            </div>
                            <a href="javascript:void(0)">
                                <h4 class="title line-clamp-1 text-color-primary">Satisfaction Guarantee</h4>
                                <p class="pera text-color-tertiary line-clamp-2">Your satisfaction is our priority. We guarantee high-quality products and excellent customer service.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6">
                        <div class="goal-card wow fadeInUp" data-wow-delay="0.1s">
                            <div class="circle-icon">
                                <img src="/image/5.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                            </div>
                            <a href="javascript:void(0)">
                                <h4 class="title line-clamp-1 text-color-primary">New Arrivals Every Day</h4>
                                <p class="pera text-color-tertiary line-clamp-2">Discover our latest collections with new arrivals every day, offering you the best in furniture design.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-sm-6">
                        <div class="goal-card wow fadeInUp" data-wow-delay="0.2s">
                            <div class="circle-icon">
                                <img src="/image/3.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                            </div>
                            <a href="javascript:void(0)">
                                <h4 class="title line-clamp-1 text-color-primary">Fast & Free Shipping</h4>
                                <p class="pera text-color-tertiary line-clamp-2">Enjoy fast and free shipping on all orders, ensuring your furniture arrives safely and on time.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape routedOne">
                <img src="/image/Yangi_sergeli-1.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
            </div>
        </section>
        <!-- End-of goal-->

        <!-- About area S t a r t -->
        <section class="about-area bottom-padding1">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-xl-6">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="about-gallery w-296 mb-30 wow fadeInUp" data-wow-delay="0.0s">
                                    <img src="/image/Yangi_Sergeli-2.png" alt="img">
                                </div>
                                <div class="about-gallery w-296 wow fadeInUp" data-wow-delay="0.1s">
                                    <img src="/image/Yangi_Sergeli-2.png" alt="img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-gallery w-319 mb-30 mt-96 position-relative wow fadeInUp" data-wow-delay="0.2s">
                                    <img src="/image/Yangi_Sergeli-2.png" alt="img">
                                    <div class="main-circle">
                                        <div class="curve">
                                            <h1 class="curve-text">Service Furniture Creative Design</h1>
                                        </div>
                                        <div class="child-circle"></div>
                                        <div class="sub-child-circle"></div>
                                    </div>
                                </div>
                                <div class="about-gallery w-319 wow fadeInUp" data-wow-delay="0.3s">
                                    <img src="/image/Yangi_Sergeli-2.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-caption">
                            <p class="heading">About Us</p>
                            <div class="section-title">
                                <h4 class="title">Pure and Organic Quality</h4>
                                <p class="pera">At our furniture company in Uzbekistan, we believe in offering pure and organic quality products. Our furniture pieces are crafted with precision and care, ensuring durability and timeless beauty. Join us in embracing a lifestyle of elegance and comfort.</p>
                            </div>
                        </div>
                        <div class="goal-card">
                            <div class="circle-icon">
                                <img src="/image/MSMA-2.png" alt="img" style="width: 70px;height: 70px;border-radius: 50%">
                            </div>
                            <a href="javascript:void(0)">
                                <h4 class="title line-clamp-1 text-color-primary">Product Return Policy</h4>
                                <p class="pera text-color-tertiary line-clamp-2">We offer a hassle-free return policy to ensure your satisfaction. If you're not completely happy with your purchase, we are here to help.</p>
                            </a>
                        </div>
                        <div class="goal-card mb-0">
                            <div class="circle-icon">
                                <img src="/image/MSMA-2.png" alt="img" style="width: 70px;height: 70px;border-radius: 50%">
                            </div>
                            <a href="javascript:void(0)">
                                <h4 class="title line-clamp-1 text-color-primary">100% Quality Furniture</h4>
                                <p class="pera text-color-tertiary line-clamp-2">Our furniture is made with the highest standards of quality, providing you with pieces that are both beautiful and long-lasting.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape routedOne">
                <img src="/image/MSMA-2.png" alt="img" style="width: 70px;height: 70px;border-radius: 50%">
            </div>
        </section>
        <!-- End-of about-->


        <!-- Product-budget area S t a r t -->
        <section class="product-budget-area section-padding2 product-bg">
            <div class="container">
                <div class="row justify-content-center position-relative">
                    <div class="col-xl-6">
                        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.0s">
                            <h4 class="title">You Can Easily Buy Our Products Within Your Budget</h4>
                        </div>
                    </div>
                </div>
                <div class="easy-step-section position-relative">
                    <div class="goal-card wow fadeInLeft" data-wow-delay="0.0s">
                        <div class="circle-icon">
                            <img src="/image/MSMA-2.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                            <div class="count">
                                <span class="num">01</span>
                            </div>
                        </div>
                        <a href="javascript:void(0)">
                            <h4 class="title line-clamp-1 text-color-primary">Choose Product</h4>
                            <p class="pera text-color-tertiary line-clamp-3">Randomised words which don't look ours even
                                slightly
                                believable. If you aregoing to use a If you are going to use a passage</p>
                        </a>
                    </div>
                    <div class="pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="182" height="23" viewBox="0 0 182 23"
                            fill="none">
                            <path
                                d="M169.374 13.2125C169.351 13.3047 169.323 13.3955 169.29 13.4844C168.668 15.1546 168.09 16.8443 167.516 18.5324C167.396 18.885 167.105 19.2362 167.449 19.7651C171.809 16.2405 176.85 13.9062 182.001 11.6831C176.702 9.35902 171.665 6.77376 167.15 3.16792C166.878 3.71317 167.171 4.06785 167.303 4.42769C167.931 6.12791 168.558 7.83279 169.227 9.51339C169.698 10.7072 169.75 12.013 169.374 13.2125Z"
                                fill="currentColor" />
                            <rect y="10.8948" width="170.684" height="1.21053" rx="0.605263" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="goal-card wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="circle-icon">
                            <img src="/image/MSMA-2.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                            <div class="count">
                                <span class="num">02</span>
                            </div>
                        </div>
                        <a href="javascript:void(0)">
                            <h4 class="title line-clamp-1 text-color-primary">Details Address</h4>
                            <p class="pera text-color-tertiary line-clamp-3">Randomised words which don't look ours even
                                slightly
                                believable. If you aregoing to use a If you are going to use a passage</p>
                        </a>
                    </div>
                    <div class="pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="182" height="23" viewBox="0 0 182 23"
                            fill="none">
                            <path
                                d="M169.374 13.2125C169.351 13.3047 169.323 13.3955 169.29 13.4844C168.668 15.1546 168.09 16.8443 167.516 18.5324C167.396 18.885 167.105 19.2362 167.449 19.7651C171.809 16.2405 176.85 13.9062 182.001 11.6831C176.702 9.35902 171.665 6.77376 167.15 3.16792C166.878 3.71317 167.171 4.06785 167.303 4.42769C167.931 6.12791 168.558 7.83279 169.227 9.51339C169.698 10.7072 169.75 12.013 169.374 13.2125Z"
                                fill="currentColor" />
                            <rect y="10.8948" width="170.684" height="1.21053" rx="0.605263" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="goal-card wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="circle-icon">
                            <img src="/image/MSMA-2.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                            <div class="count">
                                <span class="num">03</span>
                            </div>
                        </div>
                        <a href="javascript:void(0)">
                            <h4 class="title line-clamp-1 text-color-primary">Enjoy Products</h4>
                            <p class="pera text-color-tertiary line-clamp-3">Randomised words which don't look ours even
                                slightly
                                believable. If you aregoing to use a If you are going to use a passage</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End-of product-budget-->

        <!-- Team S t a r t -->
        <section class="team-area section-padding2">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
                        <div class="section-title">
                            <h4 class="title">Our Exclusive Team</h4>
                        </div>
                        <div class="swiper featureSwiper-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img position-relative">
                                            <a href="javascript:void(0)">
                                                <img src="/image/MSMA-2.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                                                <div class="team-shape">
                                                    <img src="/image/MGM-1.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                                                </div>
                                                <div class="social-link">
                                                    <div class="circle-icon">
                                                        <i class="ri-facebook-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-linkedin-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-twitter-fill"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <a href="javascript:void(0)">
                                                <h4 class="title">Deniella Rhodes</h4>
                                                <p class="pera">Chief Executive Officer</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img position-relative">
                                            <a href="javascript:void(0)">
                                                <img src="/image/MGM-1.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                                                <div class="team-shape">
                                                    <img src="/image/MSMA-2.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                                                </div>
                                                <div class="social-link">
                                                    <div class="circle-icon">
                                                        <i class="ri-facebook-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-linkedin-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-twitter-fill"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <a href="javascript:void(0)">
                                                <h4 class="title">Davidthy Phillips</h4>
                                                <p class="pera">Account Manager</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img position-relative">
                                            <a href="javascript:void(0)">
                                                <img src="/image/MGM-3.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                                                <div class="team-shape">
                                                    <img src="/image/chef_catering-1.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                                                </div>
                                                <div class="social-link">
                                                    <div class="circle-icon">
                                                        <i class="ri-facebook-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-linkedin-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-twitter-fill"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <a href="javascript:void(0)">
                                                <h4 class="title">Wensleydale</h4>
                                                <p class="pera">Marketing Expert</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img position-relative">
                                            <a href="javascript:void(0)">
                                                <img src="/image/chef_catering-2.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                                                <div class="team-shape">
                                                    <img src="/image/3.png" alt="img" style="width: 100px;height: 100px;border-radius: 50%">
                                                </div>
                                                <div class="social-link">
                                                    <div class="circle-icon">
                                                        <i class="ri-facebook-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-linkedin-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-twitter-fill"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <a href="javascript:void(0)">
                                                <h4 class="title">Abubokkor A K</h4>
                                                <p class="pera">Finance Director</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img position-relative">
                                            <a href="javascript:void(0)">
                                                <img src="assets/images/gallery/team-1.png" alt="img">
                                                <div class="team-shape">
                                                    <img src="assets/images/gallery/team-shape.png" alt="img">
                                                </div>
                                                <div class="social-link">
                                                    <div class="circle-icon">
                                                        <i class="ri-facebook-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-linkedin-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-twitter-fill"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <a href="javascript:void(0)">
                                                <h4 class="title">Deniella Rhodes</h4>
                                                <p class="pera">Chief Executive Officer</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img position-relative">
                                            <a href="javascript:void(0)">
                                                <img src="assets/images/gallery/team-2.png" alt="img">
                                                <div class="team-shape">
                                                    <img src="assets/images/gallery/team-shape.png" alt="img">
                                                </div>
                                                <div class="social-link">
                                                    <div class="circle-icon">
                                                        <i class="ri-facebook-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-linkedin-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-twitter-fill"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <a href="javascript:void(0)">
                                                <h4 class="title">Davidthy Phillips</h4>
                                                <p class="pera">Account Manager</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img position-relative">
                                            <a href="javascript:void(0)">
                                                <img src="assets/images/gallery/team-3.png" alt="img">
                                                <div class="team-shape">
                                                    <img src="assets/images/gallery/team-shape.png" alt="img">
                                                </div>
                                                <div class="social-link">
                                                    <div class="circle-icon">
                                                        <i class="ri-facebook-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-linkedin-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-twitter-fill"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <a href="javascript:void(0)">
                                                <h4 class="title">Wensleydale</h4>
                                                <p class="pera">Marketing Expert</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team-card">
                                        <div class="team-img position-relative">
                                            <a href="javascript:void(0)">
                                                <img src="assets/images/gallery/team-4.png" alt="img">
                                                <div class="team-shape">
                                                    <img src="assets/images/gallery/team-shape.png" alt="img">
                                                </div>
                                                <div class="social-link">
                                                    <div class="circle-icon">
                                                        <i class="ri-facebook-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-linkedin-fill"></i>
                                                    </div>
                                                    <div class="circle-icon">
                                                        <i class="ri-twitter-fill"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="team-content">
                                            <a href="javascript:void(0)">
                                                <h4 class="title">Abubokkor A K</h4>
                                                <p class="pera">Finance Director</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next swiper-common-btn"><i class="ri-arrow-right-s-line"></i></div>
                            <div class="swiper-button-prev swiper-common-btn"><i class="ri-arrow-left-s-line"></i></div>
                        </div>
					</div>
				</div>
            </div>
        </section>
        <!-- End of team -->

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
                                        <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}">
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

        <!-- Testimonial S t a r t -->
        <section class="testimonial-area section-padding2">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
                        <div class="section-title text-center">
                            <h4 class="title">What our clients say </h4>
                        </div>
                        <div class="swiper testimonialSwiper-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="shape routedOne">
                                            <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 70px;height: 70px;border-radius: 50%">
                                        </div>
                                        <p class="pera line-clamp-4">
                                            All the Lorem Ipsum generatolrs on the In our ternet repeat predefined chunks as
                                            necessary ki hol
                                            making
                                            true generator on the Internet a our combned with a
                                            of model sentence
                                        </p>
                                        <div class="user-info">
                                            <div class="user-img">
                                                <img src="/frontend/assets/images/logo/logo-2.png" alt="logo">
                                            </div>
                                            <h4 class="user-name line-clamp-1">Rhodes Jhon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="shape routedOne">
                                            <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 70px;height: 70px;border-radius: 50%">
                                        </div>
                                        <p class="pera line-clamp-4">
                                            All the Lorem Ipsum generatolrs on the In our ternet repeat predefined chunks as
                                            necessary ki hol
                                            making
                                            true generator on the Internet a our combned with a
                                            of model sentence
                                        </p>
                                        <div class="user-info">
                                            <div class="user-img">
                                                <img src="/frontend/assets/images/logo/logo-2.png" alt="logo">
                                            </div>
                                            <h4 class="user-name line-clamp-1">Steel Golden Agave</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="shape routedOne">
                                            <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 70px;height: 70px;border-radius: 50%">
                                        </div>
                                        <p class="pera line-clamp-4">
                                            All the Lorem Ipsum generatolrs on the In our ternet repeat predefined chunks as
                                            necessary ki hol
                                            making
                                            true generator on the Internet a our combned with a
                                            of model sentence
                                        </p>
                                        <div class="user-info">
                                            <div class="user-img">
                                                <img src="/frontend/assets/images/logo/logo-2.png" alt="logo">
                                            </div>
                                            <h4 class="user-name line-clamp-1">Juliyet Jhon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="shape routedOne">
                                            <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 70px;height: 70px;border-radius: 50%">
                                        </div>
                                        <p class="pera line-clamp-4">
                                            All the Lorem Ipsum generatolrs on the In our ternet repeat predefined chunks as
                                            necessary ki hol
                                            making
                                            true generator on the Internet a our combned with a
                                            of model sentence
                                        </p>
                                        <div class="user-info">
                                            <div class="user-img">
                                                <img src="/frontend/assets/images/logo/logo-2.png" alt="logo">
                                            </div>
                                            <h4 class="user-name line-clamp-1">Rhodes Jhon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="shape routedOne">
                                            <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 70px;height: 70px;border-radius: 50%">
                                        </div>
                                        <p class="pera line-clamp-4">
                                            All the Lorem Ipsum generatolrs on the In our ternet repeat predefined chunks as
                                            necessary ki hol
                                            making
                                            true generator on the Internet a our combned with a
                                            of model sentence
                                        </p>
                                        <div class="user-info">
                                            <div class="user-img">
                                                <img src="/frontend/assets/images/logo/logo-2.png" alt="logo">
                                            </div>
                                            <h4 class="user-name line-clamp-1">Steel Golden Agave</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="shape routedOne">
                                            <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 70px;height: 70px;border-radius: 50%">
                                        </div>
                                        <p class="pera line-clamp-4">
                                            All the Lorem Ipsum generatolrs on the In our ternet repeat predefined chunks as
                                            necessary ki hol
                                            making
                                            true generator on the Internet a our combned with a
                                            of model sentence
                                        </p>
                                        <div class="user-info">
                                            <div class="user-img">
                                                <img src="/frontend/assets/images/logo/logo-2.png" alt="logo">
                                            </div>
                                            <h4 class="user-name line-clamp-1">Juliyet Jhon</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
					</div>
				</div>
            </div>
        </section>
        <!-- End of testimonial -->

        <!-- Subscription area S t a r t -->
        <section class="subscription-area subscription-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="subscription-wrapper">
                            <div class="left-wrapper">
                                <div class="subscription-content">
                                    <h4 class="title">{{__('app.call')}}</h4>
                                    {{--                                <p class="pera">Join our email subscription now</p>--}}
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