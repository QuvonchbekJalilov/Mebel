
    





@extends('layouts.page')

@section('title', 'Contact Page')


@section('content')






        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Contact Us</h1>
                            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                                <ul class="breadcrumb listing">
                                    <li class="breadcrumb-item single-list"><a href="/" class="single">Home</a></li>
                                    <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                            class="single active">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>						
					</div>
				</div>
            </div>
        </section>
        <!-- End-of Breadcrumbs-->
        <!-- product area S t a r t -->
        <div class="product-area section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xxl-6 col-xl-4">
                        <iframe class="map-frame"
                            src="https://www.google.com/maps/embed/v1/place?q=Dhaka,+Bangladesh&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-xxl-6 col-xl-8">
                        <div class="get-touch-box">
                            <div class="row g-4">
                                <div class="col-xl-6">
                                    <div class="contact-card">
                                        <div class="circle-icon">
                                            <img src="assets/images/icon/call.png" alt="img">
                                        </div>
                                        <a href="javascript:void(0)">
                                            <p class="pera text-color-tertiary">+(323) 9847 3847 383 +(434) 5466 5467
                                                443</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-card">
                                        <div class="circle-icon">
                                            <img src="assets/images/icon/mail.png" alt="img">
                                        </div>
                                        <a href="javascript:void(0)">
                                            <p class="pera text-color-tertiary">infoyour@gmail.com
                                                Demoinfoemail@gmail.com</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-card">
                                        <div class="circle-icon">
                                            <img src="assets/images/icon/map.png" alt="img">
                                        </div>
                                        <a href="javascript:void(0)">
                                            <p class="pera text-color-tertiary">4517 Washington Ave. Manchester, Road,
                                                234 Kentucky USA</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-card">
                                        <div class="circle-icon">
                                            <img src="assets/images/icon/time.png" alt="img">
                                        </div>
                                        <a href="javascript:void(0)">
                                            <p class="pera text-color-tertiary">Mon - Sat : 9am - 11pm
                                                Sunday: 11am - 5pm</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <section class="comment-area">
                                <div class="comment-box">
                                    <h4 class="title">Get In Touch With Us</h4>
                                    <p class="pera">Duis gravida augue velit eu dignissim felis posuere quis. Integ ante
                                        urna gravid nec
                                        est
                                        tincidunt orci at turpis gravida. Phasellus acdr egestas odio.</p>
                                    <form class="custom-form">
                                        <div class="row g-4">
                                            <div class="col-xl-4 col-sm-6">
                                                <input class="form-control custom-form-control" type="text"
                                                    placeholder="Name*">
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <input class="form-control custom-form-control" type="text"
                                                    placeholder="Email*">
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <input class="form-control custom-form-control" type="text"
                                                    placeholder="Phone Number*">
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control custom-form-control custom-form-textarea"
                                                    placeholder="Comment" id="floatingTextarea2"></textarea>
                                            </div>
                                            <div class="col-12 mt-36">
                                                <a href="javascript:void(0)" class="submit-btn d-inline-block">Send Message</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End-of goal-->
        <!-- subscription area S t a r t -->
        <section class="subscription-area subscription-bg">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
                        <div class="subscription-wrapper">
                            <div class="left-wrapper">
                                <div class="subscription-content">
                                    <h4 class="title">Get a surprise discount</h4>
                                    <p class="pera">Join our email subscription now</p>
                                </div>
                                <div class="subscription-input-section">
                                    <input type="text" class="subscription-input" placeholder="Enter your email address">
                                    <button type="submit" class="subscribe-btn"><span class="btn-text">Subscribe</span><span
                                            class="icon"><i class="ri-arrow-right-line"></i></span></button>
                                </div>
                            </div>
                            <div class="right-wrapper">
                                <div class="subscription-content">
                                    <h4 class="title">Download App</h4>
                                    <p class="pera">Save $3 With App & New User only</p>
                                </div>
                                <div class="download-app">
                                    <a href="javascript:void(0)" target="_blank">
                                        <img src="assets/images/icon/google-play.png" alt="img">
                                    </a>
                                    <a href="javascript:void(0)" target="_blank">
                                        <img src="assets/images/icon/app-store.png" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>						
					</div>
				</div>
            </div>
        </section>
        <!-- End-of subscription-->
    
    
        @endsection