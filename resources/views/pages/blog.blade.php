@extends('layouts.page')
@section('title', 'Blog Page')
@section('content')
<!-- Breadcrumbs S t a r t -->
<section class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Blog</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                        <ul class="breadcrumb listing">
                            <li class="breadcrumb-item single-list"><a href="/" class="single">{{__('app.home')}}</a></li>
                            <li class="breadcrumb-item single-list" aria-current="page">
                                <a href="javascript:void(0)" class="single active">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-of Breadcrumbs-->
<!-- product area S t a r t -->
<section class="product-area section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-xxl-12 col-xl-12">
                <div class="expand-icon hamburger block d-xl-none" id="hamburger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M3 7H10M10 7C10 8.65685 11.3431 10 13 10H14C15.6569 10 17 8.65685 17 7C17 5.34315 15.6569 4 14 4H13C11.3431 4 10 5.34315 10 7ZM16 17H21M20 7H21M3 17H6M6 17C6 18.6569 7.34315 20 9 20H10C11.6569 20 13 18.6569 13 17C13 15.3431 11.6569 14 10 14H9C7.34315 14 6 15.3431 6 17Z" stroke="#071516" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="row g-4">
                    @foreach($blogs as $blog)
                    <div class="col-sm-4">
                        <div class="news-card">
                            <a href="{{ route('blog.details', $blog->id) }}">
                                <div class="news-img zoomImg">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="img">
                                    <div class="news-badge">
                                        <span class="date">{{ $blog->created_at->format('d F Y') }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="news-content">
                                <a href="{{ route('blog.details', $blog->id) }}">
                                    <h4 class="news-title line-clamp-2">
                                        @if($locale == 'uz')
                                        {{ $blog->title_uz }}
                                        @elseif($locale == 'ru')
                                        {{ $blog->title_ru }}
                                        @else
                                        {{ $blog->title_en }}
                                        @endif
                                    </h4>
                                </a>
                                <p>
                                    {!! \Illuminate\Support\Str::words($blog['description_' . $locale], 20, '...') !!}
                                </p>
                            </div>
                            <a href="{{ route('blog.details', $blog->id) }}" class="read-more-text">
                                {{__('app.read_more')}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none">
                                    <path d="M12.6227 4.38164C12.5587 4.38164 12.4989 4.38164 12.4349 4.38164C8.56302 4.38164 4.69114 4.38164 0.819254 4.38164C0.7168 4.38164 0.614347 4.37773 0.516163 4.40117C0.195996 4.46758 -0.0302552 4.76447 0.00389589 5.05746C0.0423159 5.37779 0.302718 5.60827 0.644229 5.6278C0.712532 5.63171 0.780834 5.63171 0.853405 5.63171C4.71248 5.63171 8.57583 5.63171 12.4349 5.63171C12.4989 5.63171 12.5587 5.63171 12.6654 5.63171C12.5971 5.69812 12.5587 5.73719 12.516 5.77625C11.3805 6.81928 10.2407 7.86231 9.10517 8.90534C8.82342 9.16317 8.79354 9.51866 9.0326 9.77648C9.27166 10.0382 9.68574 10.0773 9.98029 9.86633C10.0272 9.83508 10.0657 9.79602 10.1084 9.75695C11.6494 8.34671 13.1905 6.93257 14.7273 5.51842C15.0987 5.17856 15.0987 4.8387 14.7273 4.49883C13.1777 3.07687 11.6238 1.65491 10.0742 0.229051C9.8693 0.0415392 9.63878 -0.0483093 9.35276 0.0259132C8.88319 0.147015 8.70389 0.670483 9.00698 1.01425C9.0454 1.06113 9.09236 1.10019 9.13932 1.14317C10.2663 2.17448 11.389 3.20969 12.5203 4.241C12.563 4.28007 12.6185 4.2996 12.6654 4.33085C12.6483 4.34257 12.6355 4.3621 12.6227 4.38164Z" fill="#696969" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- pagination -->
        <nav class="pagination-nav">
            {{ $blogs->links() }}
        </nav>
        <!-- End pagination -->
    </div>
</section>
<!-- End-of goal-->
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