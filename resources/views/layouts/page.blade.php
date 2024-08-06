<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="....">
    <meta name="keywords" content="...">
    <meta name="author" content="PointTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="/frontend/assets/images/icon/favicon.svg">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/bootstrap-5.3.0.min.css">
    <!-- fonts & icon -->
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/remixicon.css">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/plugin.css">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="/frontend/assets/css/main-style.css">
</head>

<body>

    <header>
        <div class="header-area-two">
            <div class="main-header">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper header-sticky">
                            <div class="container">
                                <!-- Main-menu for desktop -->
                                <div class="main-menu">
                                    <nav>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Logo-->
                                            <div class="position-relative">
                                                <div class="logo logo-large light-logo">
                                                    <a href="javascript:void(0)"><img src="/frontend/assets/images/logo/logo-2.png"
                                                            alt="logo"></a>
                                                </div>
                                            </div>
                                            <div class="search-header-position d-block d-lg-none">
                                                <div class="d-flex gap-15">
                                                    <div class="search-bar">
                                                        <a href="javascript:void(0)" class="rounded-btn">
                                                            <i class="ri-search-line"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="listing d-none d-lg-block" id="navigation">
                                                <li class="single-list">
                                                    <a href="/" class="single">Home <i
                                                            class=""></i></a>
                                                    
                                                </li>
                                                <li class="single-list">
                                                    <a href="{{route('about')}}" class="single active">About</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="{{route('shop')}}" class="single">Shop</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="{{route('blog')}}" class="single">Blog</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="{{route('contact')}}" class="single">Contact</a>
                                                </li>
                                               
                                               
                                                <li class="d-block d-lg-none">
                                                    <div class="login-wrapper">
                                                        <a href="javascript:void(0)">
                                                            <p class="pera text-color-primary">
                                                                Wishlist
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="d-block d-lg-none">
                                                    <div class="login-wrapper">
                                                        <a href="javascript:void(0)">
                                                            <p class="pera text-color-primary">
                                                                Track Order
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="d-none d-lg-block">
                                                <div class="header-right">
                                                    <div class="header-icon search-bar header-search-box">
                                                        <p class="pera">Search</p>
                                                        <div class="search-icon-two">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M22.785 23.9941C22.5326 23.8063 22.2509 23.6479 22.0337 23.4249C19.9089 21.3181 17.8017 19.1996 15.6886 17.0869C15.624 17.0224 15.583 16.9344 15.5301 16.8522C13.0884 18.7242 10.4177 19.3991 7.47701 18.7653C5.02937 18.2372 3.07479 16.8991 1.67195 14.8334C-1.0046 10.9192 -0.370684 5.87229 2.88109 2.71505C6.52026 -0.811896 11.932 -0.817765 15.5712 2.2045C19.3747 5.36174 20.3021 11.1539 16.8978 15.4672C16.9564 15.5318 17.0151 15.5963 17.0797 15.6609C19.1928 17.7736 21.3117 19.8862 23.4189 22.0106C23.642 22.2395 23.8063 22.5211 24 22.7794C24 22.9202 24 23.061 24 23.2019C23.865 23.6009 23.6009 23.865 23.2017 24C23.0667 23.9941 22.9259 23.9941 22.785 23.9941ZM17.0034 9.49314C16.9799 5.34413 13.6166 1.99323 9.49616 2.00497C5.35807 2.02258 1.99478 5.39108 2.01238 9.51075C2.02999 13.648 5.35807 17.0048 9.51377 16.993C13.7164 16.9813 16.9799 13.6069 17.0034 9.49314Z"
                                                                    fill="#13172B" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="header-icon">
                                                        <a href="{{ route('cart.index')}}">
                                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M19.7472 6.21264C19.5903 5.81551 19.2308 5.78119 17.464 5.78119H15.9959V5.15364C15.9959 4.17798 15.8541 3.49649 15.5099 2.79539C14.8872 1.52556 13.8443 0.638157 12.4926 0.226322C11.8345 0.0302096 10.8524 -0.053138 10.255 0.0351124C8.59958 0.290058 7.18715 1.31474 6.46828 2.77578C6.11896 3.49159 5.97721 4.17798 5.97721 5.15364V5.7861H4.50403C2.73722 5.7861 2.37778 5.82042 2.22084 6.23225C2.13984 6.4921 1.38047 12.0764 1.05647 14.4837C0.772972 16.5821 0.509722 18.5628 0.317347 20.0532C-0.0167771 22.6223 -0.00665214 22.6615 0.00347284 22.7057V22.7106C0.0490353 22.8773 0.499597 23.3136 0.636284 23.4411L1.2286 24H20.7091L21.1495 23.6225C21.3469 23.4509 22 22.8675 22 22.5782C22 22.3821 19.7877 6.32541 19.7472 6.21264ZM20.4003 22.2056C20.3952 22.2399 20.3547 22.3429 20.2838 22.4164L20.1826 22.5243H1.79053L1.52728 22.2497L2.56509 14.7435C2.92959 12.0715 3.25359 9.74266 3.44597 8.35026C3.53203 7.74231 3.57253 7.43344 3.59278 7.28145C4.27622 7.27655 7.26309 7.27165 10.979 7.27165H18.3702L18.3803 7.32558C18.4613 7.7178 20.3648 21.7692 20.4003 22.2056ZM7.50102 5.7861V5.22718C7.50102 4.84966 7.55165 4.32997 7.60734 4.08973C7.90602 2.86403 8.92358 1.86876 10.1943 1.55008C10.7258 1.4226 11.5966 1.46673 12.1281 1.65304H12.1332C12.6901 1.83444 13.1457 2.12861 13.5659 2.57967C14.2443 3.29547 14.4721 3.93774 14.4721 5.12422V5.7861H7.50102Z" fill="#13172B"></path>
                                                            </svg>
                                                            <?php 
                                                                use Gloudemans\Shoppingcart\Facades\Cart;
                                                            ?>
                                                            <div class="count"><span class="count-num">{{ Cart::content()->count()}}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="header-right">
                                                            <div class="currency-menu">
                                                                <div class="dropdown mx-3">
                                                                    <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        @if($lang == 'en') English @endif
                                                                        @if($lang == 'ru') Русский @endif
                                                                        @if($lang == 'uz') Uzbek @endif

                                                                    </button>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <li><a class="dropdown-item " href="/uz">Uzbek</a></li>
                                                                        <li><a class="dropdown-item" href="/ru">Русский</a></li>
                                                                        <li><a class="dropdown-item" href="/en">English</a></li>
                                                                    </ul>
                                                                </div>
{{--                                                                <select class="form-select nice-select" id="languageSelect" onchange="changeLanguage()">--}}
{{--                                                                     <option value="#" onclick="changeLanguage('eng')">--}}
{{--                                                                         Русский @if($lang == 'ru') @endif--}}
{{--                                                                         @if($lang == 'en') English @endif--}}
{{--                                                                         @if($lang == 'uz') Uzbek @endif--}}
{{--                                                                     </option>--}}
{{--                                                                    <option value="#" onclick="changeLanguage('ru')">--}}
{{--                                                                        English @if($lang == 'en') English @endif--}}
{{--                                                                    </option>--}}
{{--                                                                  <option value="#" onclick="changeLanguage('uz')">--}}
{{--                                                                      Uzbek @if($lang == 'uz') Uzbek @endif--}}
{{--                                                                  </option>--}}
{{--                                                                </select>--}}
                                                            </div>
                                                           
                                                        </div>
                                                    </div>










                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="div">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- search overlay -->
            <div class="search-container">
                <div class="top-section">
                    <div class="search-icon">
                        <i class="ri-search-line"></i>
                    </div>
                    <div class="modal-search-box">
                        <input type="text" id="searchField" class="search-field" placeholder="Search...">
                        <button id="closeSearch" class="close-search-btn">
                            <kbd class="light-text"> ESC </kbd>
                        </button>
                    </div>
                </div>
                <div class="body-section">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="listing">
                                <li>
                                    <h4 class="search-label">Recent</h4>
                                </li>
                                <li class="single-list">
                                    <a href="javascript:void(0)">
                                        <div class="search-flex">
                                            <div class="content-img">
                                                <img src="/frontend/assets/images/news/news-1.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h4 class="title line-clamp-1">Modern studio apartment design bedroom
                                                    and living space</h4>
                                                <p class="pera line-clamp-2">Wonderful evening escapade starting at
                                                    Madinat Jumeirah to the
                                                    musical fountains to see another. Wonderful evening escapade
                                                    starting at Madinat Jumeirah to
                                                    the musical fountains to see another</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="single-list">
                                    <a href="javascript:void(0)">
                                        <div class="search-flex">
                                            <div class="content-img">
                                                <img src="/frontend/assets/images/news/news-2.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h4 class="title line-clamp-1">Comfortable armchair in a room decorated
                                                </h4>
                                                <p class="pera line-clamp-2">Give a great end to your day in Dubai with
                                                    our premium evening Red
                                                    Dune Desert Safari. Give a great end to your day in Dubai with our
                                                    premium evening Red Dune
                                                    Desert Safari.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="single-list">
                                    <a href="javascript:void(0)">
                                        <div class="search-flex">
                                            <div class="content-img">
                                                <img src="/frontend/assets/images/news/news-3.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h4 class="title line-clamp-1">Cafe with coffee tables as sofas plants
                                                    and shelves</h4>
                                                <p class="pera line-clamp-2">Admission to Dubai’s biggest, multicultural
                                                    festival park with
                                                    replicas of iconic landmarks. Admission to Dubai’s biggest,
                                                    multicultural festival park with
                                                    replicas of iconic landmarks</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <h4 class="search-label">Recent</h4>
                                </li>
                                <li class="single-list">
                                    <a href="javascript:void(0)">
                                        <div class="search-flex">
                                            <div class="content-img">
                                                <img src="/frontend/assets/images/news/news-1.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h4 class="title line-clamp-1">Modern studio apartment design bedroom
                                                    and living space</h4>
                                                <p class="pera line-clamp-2">Wonderful evening escapade starting at
                                                    Madinat Jumeirah to the
                                                    musical fountains to see another. Wonderful evening escapade
                                                    starting at Madinat Jumeirah to
                                                    the musical fountains to see another</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="single-list">
                                    <a href="javascript:void(0)">
                                        <div class="search-flex">
                                            <div class="content-img">
                                                <img src="/frontend/assets/images/news/news-2.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h4 class="title line-clamp-1">Comfortable armchair in a room decorated
                                                </h4>
                                                <p class="pera line-clamp-2">Give a great end to your day in Dubai with
                                                    our premium evening Red
                                                    Dune Desert Safari. Give a great end to your day in Dubai with our
                                                    premium evening Red Dune
                                                    Desert Safari.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="single-list">
                                    <a href="javascript:void(0)">
                                        <div class="search-flex">
                                            <div class="content-img">
                                                <img src="/frontend/assets/images/news/news-3.png" alt="img">
                                            </div>
                                            <div class="content">
                                                <h4 class="title line-clamp-1">Cafe with coffee tables as sofas plants
                                                    and shelves</h4>
                                                <p class="pera line-clamp-2">Admission to Dubai’s biggest, multicultural
                                                    festival park with
                                                    replicas of iconic landmarks. Admission to Dubai’s biggest,
                                                    multicultural festival park with
                                                    replicas of iconic landmarks</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="right-section" id="filterMenu">
                                <h4 class="title">Filter Options</h4>
                                <!-- List of Filter -->
                                <ul class="listing">
                                    <li>
                                        <h4 class="search-label">Post Type</h4>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Posts (3)</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Posts (3)</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Links (44)</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Blogs (23)</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- List of Filter -->
                                <ul class="listing">
                                    <li>
                                        <h4 class="search-label">Categories</h4>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Articles (3)</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Poll (3)</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Article (44)</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Blogs (23)</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- List of Filter -->
                                <ul class="listing">
                                    <li>
                                        <h4 class="search-label">ecommerce</h4>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Articles (3)</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Poll (3)</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Article (44)</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-list">
                                        <div class="d-flex align-items-center gap-8">
                                            <label class="checkbox-label">
                                                <input class="checkbox-style" type="checkbox" value="remember"
                                                    name="remember">
                                                <span class="checkmark-style"></span>
                                            </label>
                                            <div class="content">
                                                <p class="pera">Blogs (23)</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="div">
                            <div class="filter_menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <!-- Footer S t a r t -->
    <footer>
        <div class="footer-wrapper footer-bg-one">
            <div class="container">
                <div class="footer-area position-relative">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">About Us</h4>
                                    <p class="pera">Etoshi is an exciting contemporary brand which focuses on
                                        high-quality products
                                        graphics with a British style</p>
                                    <ul class="info-listing">
                                        <li class="footer-info-list">
                                            <a href="#" class="single">
                                                <i class="ri-mail-fill"></i>
                                                <p class="pera">info@mydomain.com</p>
                                            </a>
                                        </li>
                                        <li class="footer-info-list">
                                            <a href="#" class="single">
                                                <div class="d-flex gap-6">
                                                    <i class="ri-phone-fill"></i>
                                                    <p class="pera">+777 2345 7885</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="footer-menu-section">
                                <div class="logo logo-large light-logo">
                                    <a href="javascript:void(0)"><img src="/frontend/assets/images/logo/logo-dark.png" alt="logo"></a>
                                </div>
                                <div class="footer-social-section">
                                    <h4 class="title">Follow Us</h4>
                                    <ul class="footer-social-lists">
                                        <li class="list-icon">
                                            <a href="javascript:void(0)" class="list">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                        </li>
                                        <li class="list-icon">
                                            <a href="javascript:void(0)" class="list">
                                                <i class="ri-whatsapp-fill"></i>
                                            </a>
                                        </li>
                                        <li class="list-icon">
                                            <a href="javascript:void(0)" class="list">
                                                <i class="ri-twitter-fill"></i>
                                            </a>
                                        </li>
                                        <li class="list-icon">
                                            <a href="javascript:void(0)" class="list">
                                                <i class="ri-instagram-fill"></i>
                                            </a>
                                        </li>
                                        <li class="list-icon">
                                            <a href="javascript:void(0)" class="list">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </li>
                                        <li class="list-icon">
                                            <a href="javascript:void(0)" class="list">
                                                <i class="ri-pinterest-fill"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-menu">
                                    <ul class="menu-lists">
                                        <li class="list">
                                            <a href="/" class="menu-list">Home</a>
                                        </li>
                                        <li class="list">
                                            <a href="{{route('about')}}" class="menu-list">About</a>
                                        </li>
                                        <li class="list">
                                            <a href="{{route('shop')}}" class="menu-list">Shop</a>
                                        </li>
                                        <li class="list">
                                            <a href="{{route('blog')}}" class="menu-list">Blog</a>
                                        </li>
                                        <li class="list">
                                            <a href="{{route('contact')}}" class="menu-list">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">My Accounts</h4>
                                    <ul class="listing">
                                        <li class="single-list"><a href="javascript:void(0)" class="single">My
                                                Orders</a></li>
                                        <li class="single-list"><a href="javascript:void(0)" class="single">My Credit
                                                Slips</a></li>
                                        <li class="single-list"><a href="javascript:void(0)" class="single">My
                                                Addresses</a></li>
                                        <li class="single-list"><a href="javascript:void(0)" class="single">My Personal
                                                Info</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="d-flex justify-content-between gap-14 flex-wrap">
                        <div class="privacy-section d-flex">
                            <a href="https://dora.uz/">
                                <p class="pera mr-25">© 2024 Barcha huquqlar himoyalanadi - DORA</p>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End-of Footer -->

    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Add an overlay element -->
    <div class="overlay"></div>
    <!-- jquery-->
    <script src="/frontend/assets/js/jquery-3.7.0.min.js"></script>
    <script src="/frontend/assets/js/popper.min.js"></script>
    <script src="/frontend/assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="/frontend/assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="/frontend/assets/js/main.js"></script>
</body>

</html>