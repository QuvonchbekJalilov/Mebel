@extends('layouts.page')
@section('title', 'Contact Page')
@section('content')
    <!-- Breadcrumbs Start -->
    <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h1 class="title wow fadeInUp" data-wow-delay="0.1s">{{__('app.contact')}}</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                            <ul class="breadcrumb listing">
                                <li class="breadcrumb-item single-list"><a href="/" class="single">{{__('app.home')}}</a></li>
                                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single active">{{__('app.contact')}}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumbs -->

    <!-- Product Area Start -->
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
                            @foreach ($contacts as $contact)
                                <div class="col-xl-6">
                                    <div class="contact-card">
                                        <div class="circle-icon">
                                            @php
                                                $image = $loop->index == 0 ? 'call.png' : ($loop->index == 1 ? 'mail.png' : ($loop->index == 2 ? 'map.png' : 'time.png'));
                                            @endphp
                                            <img src="{{ asset('storage/' . $image) }}" alt="img">
                                        </div>
                                        <a href="javascript:void(0)">
                                            <p class="pera text-color-tertiary">
                                                @if ($loop->index == 0)
                                                    {{ $contact->phone_number }}
                                                @elseif ($loop->index == 1)
                                                    {{ $contact->email }}
                                                @elseif ($loop->index == 2)
                                                    {{ $contact->address }}
                                                @elseif ($loop->index == 3)
                                                    {{ $contact->working_hours }}
                                                @endif
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <section class="comment-area">
                            <div class="comment-box">
                                <h4 class="title">{{ __('app.call') }}</h4>
                                <p class="pera"> {{ __('app.call_text') }}</p>
                                <form class="custom-form" onsubmit="sendphone(event)">
                                    <div class="row g-4">
                                        <div class="col-xl-4 col-sm-6">
                                            <input id="last_name" class="form-control custom-form-control" type="text" placeholder="{{__('app.name')}}" required>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <input id="email" class="form-control custom-form-control" type="text" placeholder="Email" required>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <input id="phone_number_footer" class="form-control custom-form-control" type="text" placeholder="{{__('app.phone_number')}}" required>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control custom-form-control custom-form-textarea" placeholder="{{__('app.comment')}}" id="floatingTextarea2"></textarea>
                                        </div>
                                        <div class="col-12 mt-36">
                                            <button type="submit" class="submit-btn d-inline-block">{{ __('app.send') }}</button>
                                        </div>
                                    </div>
                                </form>

                                <script>
                                    function sendphone(event) {
                                        event.preventDefault(); // Prevent default form submission

                                        const phone_number_footer = document.getElementById('phone_number_footer').value;
                                        const last_name = document.getElementById('last_name').value;
                                        const email = document.getElementById('email').value;
                                        const comment = document.getElementById('floatingTextarea2').value;

                                        if (!last_name || !phone_number_footer || !email) {
                                            alert('Iltimos, barcha maydonlarni to\'ldiring.');
                                            return;
                                        }

                                        const message = `Bog\'lanish uchun raqam qoldirishdi:\n\nIsm: ${last_name}\nTelefon raqam: ${phone_number_footer}\nEmail: ${email}\nIzoh: ${comment}`;
                                        const telegramBotToken = '7401296722:AAHbhdImAvBvFtKgom7wOrRUK95xpuQqnHg'; // Bu yerga o'zingizning bot tokeningizni qo'ying
                                        const telegramChatId = '5758548856'; // Bu yerga o'zingizning chat ID ni qo'ying

                                        const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;
                                        const data = {
                                            chat_id: telegramChatId,
                                            text: message
                                        };

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
                                                    alert('Xabar yuborildi!');
                                                    document.getElementById('last_name').value = '';
                                                    document.getElementById('phone_number_footer').value = '';
                                                    document.getElementById('email').value = '';
                                                    document.getElementById('floatingTextarea2').value = '';
                                                } else {
                                                    alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                                                }
                                            })
                                            .catch(error => {
                                                console.error('Xatolik:', error);
                                                alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                                            });
                                    }
                                </script>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End-of Product Area -->

    <!-- Subscription Area Start -->
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
                                <input type="text" class="subscription-input"
                                       placeholder="{{__('app.enter_phone')}}">
                                <button type="submit" class="subscribe-btn"><span
                                            class="btn-text">{{__('app.subscribe')}}</span><span class="icon"><i
                                                class="ri-arrow-right-line"></i></span></button>
                            </div>
                        </div>
                        <div class="right-wrapper">
                            <div class="logo logo-large light-logo">
                                <img src="/frontend/assets/images/logo/logo-2.png" alt="logo">
                            </div>
                            {{--                                <div class="subscription-content">--}}
                            {{--                                    <h4 class="title">Download App</h4>--}}
                            {{--                                    <p class="pera">Save $3 With App & New User only</p>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="download-app">--}}
                            {{--                                    <a href="javascript:void(0)" target="_blank">--}}
                            {{--                                        <img src="assets/images/icon/google-play.png" alt="img">--}}
                            {{--                                    </a>--}}
                            {{--                                    <a href="javascript:void(0)" target="_blank">--}}
                            {{--                                        <img src="assets/images/icon/app-store.png" alt="img">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Subscription Area -->
@endsection
