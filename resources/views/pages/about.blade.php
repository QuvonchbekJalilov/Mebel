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
                            <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single active">{{__('app.about')}}</a></li>
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
                        <p class="pera text-color-tertiary ">Discover an exclusive collection of original furniture pieces, each crafted with exceptional quality. Our designs are tailored to bring both style and comfort to your home, ensuring that you find the perfect piece to complement your living space.</p>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-sm-6">
                <div class="goal-card wow fadeInUp" data-wow-delay="0.0s">
                    <div class="circle-icon">
                        <img src="/image/BRB-2.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                    </div>
                    <a href="javascript:void(0)">
                        <h4 class="title  text-color-primary">Satisfaction Guarantee</h4>
                        <p class="pera text-color-tertiary ">At NK Company, your satisfaction is our highest priority. We guarantee the highest standards of quality and exceptional customer service with every purchase. If you’re not completely satisfied, we are committed to making it right.</p>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-sm-6">
                <div class="goal-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="circle-icon">
                        <img src="/image/5.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                    </div>
                    <a href="javascript:void(0)">
                        <h4 class="title  text-color-primary">New Arrivals Every Day</h4>
                        <p class="pera text-color-tertiary ">Stay ahead of the trends with our ever-evolving collection. We add new arrivals daily, offering a diverse range of contemporary and classic furniture designs to suit every style and preference.</p>
                    </a>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-sm-6">
                <div class="goal-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="circle-icon">
                        <img src="/image/3.png" alt="img" style="width: 80px;border-radius: 50%;height: 80px;">
                    </div>
                    <a href="javascript:void(0)">
                        <h4 class="title  text-color-primary">Fast & Free Shipping</h4>
                        <p class="pera text-color-tertiary ">Enjoy the convenience of fast and free shipping on all orders. We ensure that your furniture arrives promptly and in perfect condition, so you can start enjoying your new pieces without delay.</p>
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
                        <p class="pera">At our furniture company in Uzbekistan, we are committed to providing pure and organic quality in every piece we offer. Our furniture is expertly crafted with attention to detail, ensuring durability and timeless elegance. Embrace a lifestyle of sophistication and comfort with our exquisite range.</p>
                    </div>
                </div>
                <div class="goal-card">
                    <div class="circle-icon">
                        <img src="/image/MSMA-2.png" alt="img" style="width: 70px;height: 70px;border-radius: 50%">
                    </div>
                    <a href="javascript:void(0)">
                        <h4 class="title line-clamp-1 text-color-primary">Product Return Policy</h4>
                        <p class="pera text-color-tertiary line-clamp-2">We offer a hassle-free return policy to ensure your complete satisfaction. If you're not entirely pleased with your purchase, we're here to assist you.</p>
                    </a>
                </div>
                <div class="goal-card mb-0">
                    <div class="circle-icon">
                        <img src="/image/MSMA-2.png" alt="img" style="width: 70px;height: 70px;border-radius: 50%">
                    </div>
                    <a href="javascript:void(0)">
                        <h4 class="title line-clamp-1 text-color-primary">100% Quality Furniture</h4>
                        <p class="pera text-color-tertiary line-clamp-2">Our furniture is crafted to the highest standards, offering you pieces that are both beautiful and long-lasting, ensuring a valuable addition to your home.</p>
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
                    <h4 class="title">Affordable Furniture for Every Budget</h4>
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
                    <h4 class="title line-clamp-1 text-color-primary">Choose Your Product</h4>
                    <p class="pera text-color-tertiary line-clamp-3">Browse our extensive range of furniture to find the perfect pieces for your space. We offer a variety of styles and options to suit any taste and budget.</p>
                </a>
            </div>
            <div class="pointer ">
                <svg xmlns="http://www.w3.org/2000/svg" width="182" height="23" viewBox="0 0 182 23" fill="none">
                    <path d="M169.374 13.2125C169.351 13.3047 169.323 13.3955 169.29 13.4844C168.668 15.1546 168.09 16.8443 167.516 18.5324C167.396 18.885 167.105 19.2362 167.449 19.7651C171.809 16.2405 176.85 13.9062 182.001 11.6831C176.702 9.35902 171.665 6.77376 167.15 3.16792C166.878 3.71317 167.171 4.06785 167.303 4.42769C167.931 6.12791 168.558 7.83279 169.227 9.51339C169.698 10.7072 169.75 12.013 169.374 13.2125Z" fill="currentColor" />
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
                    <h4 class="title line-clamp-1 text-color-primary">Provide Delivery Details</h4>
                    <p class="pera text-color-tertiary line-clamp-3">Enter your delivery information to ensure that your chosen furniture arrives at your desired location efficiently.</p>
                </a>
            </div>
            <div class="pointer ">
                <svg xmlns="http://www.w3.org/2000/svg" width="182" height="23" viewBox="0 0 182 23" fill="none">
                    <path d="M169.374 13.2125C169.351 13.3047 169.323 13.3955 169.29 13.4844C168.668 15.1546 168.09 16.8443 167.516 18.5324C167.396 18.885 167.105 19.2362 167.449 19.7651C171.809 16.2405 176.85 13.9062 182.001 11.6831C176.702 9.35902 171.665 6.77376 167.15 3.16792C166.878 3.71317 167.171 4.06785 167.303 4.42769C167.931 6.12791 168.558 7.83279 169.227 9.51339C169.698 10.7072 169.75 12.013 169.374 13.2125Z" fill="currentColor" />
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
                    <h4 class="title line-clamp-1 text-color-primary">Enjoy Your New Furniture</h4>
                    <p class="pera text-color-tertiary line-clamp-3">Sit back and enjoy your new furniture, crafted to enhance your living space with style, comfort, and quality.</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End-of product-budget-->



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
                            <img src="{{ asset('storage/' . $brand->image) }}" width="100px" alt="{{ $brand->name }}">
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
                    <h4 class="title">What Our Clients Say</h4>
                </div>
                <div class="swiper testimonialSwiper-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="shape routedOne">
                                    <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 45px;height: 45px;border-radius: 50%">
                                </div>
                                <p class="pera line-clamp-4">
                                    "The quality of the furniture is outstanding! The attention to detail and craftsmanship exceeded my expectations. The customer service was also top-notch."
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
                                    <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 45px;height: 45px;border-radius: 50%">
                                </div>
                                <p class="pera line-clamp-4">
                                    "I was impressed by the wide range of styles and options available. The delivery was prompt, and the furniture fits perfectly in my home."
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
                                    <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 45px;height: 45px;border-radius: 50%">
                                </div>
                                <p class="pera line-clamp-4">
                                    "Exceptional service and high-quality furniture. The design is both stylish and functional, and I couldn't be happier with my purchase."
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
                                    <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 45px;height: 45px;border-radius: 50%">
                                </div>
                                <p class="pera line-clamp-4">
                                    "The furniture arrived on time and in perfect condition. The quality is remarkable, and the overall experience was seamless."
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
                                    <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 45px;height: 45px;border-radius: 50%">
                                </div>
                                <p class="pera line-clamp-4">
                                    "Fantastic quality and design. The customer service was very responsive, and the delivery was smooth. Highly recommend!"
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
                                    <img src="/frontend/assets/images/logo/logo-2.png" alt="logo" style="width: 45px;height: 45px;border-radius: 50%">
                                </div>
                                <p class="pera line-clamp-4">
                                    "I’m extremely satisfied with my new furniture. The craftsmanship is impeccable, and it truly enhances the look of my home."
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

<!-- End-of subscription-->
@endsection