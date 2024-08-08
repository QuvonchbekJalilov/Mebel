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
                <iframe class="map-frame" src="https://www.google.com/maps/embed/v1/place?q=Dhaka,+Bangladesh&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                    <div class="col-xl-6 col-sm-6">
                                        <input id="last_name" class="form-control custom-form-control" type="text" placeholder="{{__('app.name')}}" required>
                                    </div>

                                    <div class="col-xl-6 col-sm-6">
                                        <input id="phone_number_footer" class="form-control custom-form-control" type="text" placeholder="{{__('app.phone_number')}}" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control custom-form-control custom-form-textarea" placeholder="{{__('app.comment')}}" id="floatingTextarea2" required></textarea>
                                    </div>
                                    <div class="col-12 mt-36">
                                        <button type="submit" class="submit-btn d-inline-block">{{ __('app.send') }}</button>
                                    </div>
                                </div>
                            </form>
                            <script>
                                document.addEventListener('DOMContentLoaded', () => {
                                    const phoneInput = document.getElementById('phone_number_footer');
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
                                        value = value.replace(/[^\d+ ]/g, '');

                                        // Format value according to the pattern
                                        const match = value.match(/^\+998\s?(90|91|93|94|95|98|99|33|97|71)?\s?(\d{0,3})?\s?(\d{0,2})?\s?(\d{0,2})?/);
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

                                    // Adjusted selector to use the form class instead of an ID
                                    document.querySelector('.custom-form').addEventListener('submit', (e) => {
                                        if (!pattern.test(phoneInput.value)) {
                                            e.preventDefault();
                                            alert('Please enter a valid phone number: +998 (XX) XXX-XX-XX');
                                        }
                                    });
                                });
                            </script>
                            <script>
                                function sendphone(event) {
                                    event.preventDefault(); // Prevent default form submission

                                    const phone_number_footer = document.getElementById('phone_number_footer').value;
                                    const last_name = document.getElementById('last_name').value;
                                    const comment = document.getElementById('floatingTextarea2').value;

                                    if (!last_name || !phone_number_footer || !comment) { // Changed from 'email' to 'comment'
                                        alert('Iltimos, barcha maydonlarni to\'ldiring.');
                                        return;
                                    }

                                    const message = `Bog\'lanish uchun raqam qoldirishdi:\n\nIsm: ${last_name}\nTelefon raqam: ${phone_number_footer}\nIzoh: ${comment}`;
                                    const telegramBotToken = '7401296722:AAHbhdImAvBvFtKgom7wOrRUK95xpuQqnHg'; // Bot token
                                    const telegramChatId = '5758548856'; // Chat ID

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
                                                document.getElementById('floatingTextarea2').value = '';
                                            } else {
                                                console.error('Error in API response:', data); // Log detailed error
                                                alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Xatolik:', error); // Log fetch error
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
@endsection