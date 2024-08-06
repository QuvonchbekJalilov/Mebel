@extends('layouts.page')
@section('title', 'Blog_details Page')
@section('content')
        <!-- Breadcrumbs S t a r t -->
        <section class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h1 class="title wow fadeInUp" data-wow-delay="0.1s">{{__('app.blog_detail')}}</h1>
                            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                                <ul class="breadcrumb listing">
                                    <li class="breadcrumb-item single-list"><a href="/" class="single">{{__('app.home')}}</a>
                                    </li>
                                    <li class="breadcrumb-item single-list" aria-current="page"><a
                                            href="javascript:void(0)" class="single active">{{__('app.blog_detail')}}</a></li>
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
                <div class="row">
                    <div class="col-xxl-8 col-xl-8">
                        <div class="expand-icon hamburger block d-xl-none" id="hamburger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M3 7H10M10 7C10 8.65685 11.3431 10 13 10H14C15.6569 10 17 8.65685 17 7C17 5.34315 15.6569 4 14 4H13C11.3431 4 10 5.34315 10 7ZM16 17H21M20 7H21M3 17H6M6 17C6 18.6569 7.34315 20 9 20H10C11.6569 20 13 18.6569 13 17C13 15.3431 11.6569 14 10 14H9C7.34315 14 6 15.3431 6 17Z"
                                    stroke="#071516" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
{{--                        --}}
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="blog-details-section">
                                    <h4 class="common-title">{{ $blog['title_' . $locale] }}</h4>
                                    <div class="blog-details-info">
                                        <div class="content">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
                                                    viewBox="0 0 9 9" fill="none">
                                                    <path
                                                        d="M8.99978 4.21994C8.93293 4.36024 8.83682 4.46382 8.66991 4.47086C8.45461 4.47988 8.29254 4.32726 8.2921 4.1113C8.29056 3.47047 8.29188 2.82964 8.29122 2.18881C8.291 1.94691 8.2226 1.73425 8.02732 1.57503C7.89119 1.46398 7.73176 1.42527 7.56242 1.41802C7.44851 1.41318 7.33415 1.4189 7.22002 1.41604C7.16218 1.4145 7.14217 1.43759 7.14393 1.49389C7.14679 1.58163 7.14547 1.66938 7.14415 1.75712C7.14129 1.96714 6.98933 2.11932 6.78481 2.11866C6.58469 2.118 6.43361 1.96604 6.43031 1.76108C6.42877 1.67048 6.42811 1.57965 6.43031 1.48905C6.43163 1.43671 6.41161 1.41626 6.35839 1.41626C5.87854 1.41736 5.39869 1.41758 4.91884 1.41604C4.86034 1.41582 4.84209 1.43913 4.84363 1.49455C4.84627 1.58801 4.84583 1.68191 4.84341 1.77538C4.83813 1.97088 4.68133 2.11954 4.48385 2.11866C4.29142 2.11778 4.13617 1.96912 4.13067 1.7778C4.12803 1.68125 4.12803 1.58471 4.13023 1.48817C4.13155 1.43495 4.11021 1.41604 4.05766 1.41626C3.58352 1.41736 3.10961 1.41758 2.63547 1.41604C2.5761 1.41582 2.5596 1.44089 2.56092 1.49521C2.56334 1.58867 2.56334 1.68257 2.5607 1.77604C2.55542 1.97132 2.39797 2.11976 2.20026 2.11844C2.00806 2.11734 1.85302 1.96846 1.84774 1.77692C1.8451 1.68345 1.8451 1.58955 1.84752 1.49609C1.84884 1.44265 1.83433 1.4145 1.77407 1.41582C1.61331 1.41956 1.45256 1.41098 1.29224 1.43297C1.01801 1.4708 0.762466 1.73557 0.732338 2.01134C0.720902 2.11646 0.717604 2.22114 0.717604 2.32648C0.717824 4.0528 0.717824 5.77935 0.717824 7.50567C0.717824 7.75044 0.782918 7.96683 0.9815 8.12847C1.1306 8.24964 1.30521 8.28615 1.48994 8.28659C2.35618 8.28791 3.2222 8.28659 4.08844 8.28769C4.32177 8.2879 4.48121 8.46384 4.45526 8.69211C4.43789 8.84495 4.33761 8.93423 4.20588 8.99559C3.21099 8.99559 2.21588 8.99559 1.22099 8.99559C1.21285 8.99251 1.20493 8.98789 1.19636 8.98657C0.520561 8.88827 -0.00415358 8.27559 2.47808e-05 7.55647C0.0105806 5.75406 0.0035434 3.95164 0.0035434 2.14945C0.0035434 2.05885 0.00750185 1.9689 0.0206967 1.87852C0.103604 1.30762 0.608087 0.802917 1.17744 0.71935C1.36129 0.692301 1.54536 0.706595 1.72921 0.702417C1.84708 0.699778 1.84708 0.701757 1.8473 0.579925C1.8473 0.503834 1.8462 0.427744 1.84774 0.351654C1.85192 0.149773 2.00674 -0.00108786 2.20796 1.1709e-05C2.4039 0.00111128 2.55718 0.151972 2.56136 0.349675C2.56334 0.443358 2.56378 0.537041 2.56158 0.630505C2.56026 0.683724 2.58203 0.702417 2.63437 0.702417C3.10829 0.701317 3.58242 0.701097 4.05634 0.702637C4.11571 0.702856 4.13221 0.677786 4.13067 0.623248C4.12803 0.532643 4.12869 0.441819 4.13067 0.351214C4.13463 0.152632 4.28681 0.00155111 4.48253 1.1709e-05C4.68397 -0.00152769 4.83989 0.148893 4.84407 0.350334C4.84605 0.440939 4.84649 0.531763 4.84407 0.622368C4.84275 0.675807 4.85704 0.702856 4.91752 0.702637C5.39737 0.701097 5.87722 0.701097 6.35708 0.702637C6.41689 0.702856 6.43229 0.676687 6.43097 0.622808C6.42855 0.529344 6.42855 0.435441 6.43119 0.341978C6.43646 0.150433 6.59128 0.00133119 6.78327 1.1709e-05C6.98097 -0.00130777 7.13865 0.146914 7.14415 0.341978C7.14679 0.432582 7.14898 0.523627 7.14371 0.614011C7.13953 0.685703 7.16856 0.705056 7.23585 0.703076C7.3645 0.699118 7.49337 0.701097 7.62202 0.702417C7.97366 0.705935 8.2789 0.831066 8.53994 1.0633C8.79702 1.29201 8.94128 1.58339 9 1.91964C8.99978 2.68648 8.99978 3.4531 8.99978 4.21994Z"
                                                        fill="#AD8C5C" />
                                                    <path
                                                        d="M6.62932 8.99586C6.37488 8.95232 6.12616 8.88986 5.89723 8.76539C5.25574 8.41639 4.86231 7.88353 4.76599 7.15936C4.61623 6.03428 5.32567 5.03587 6.4314 4.78429C7.51579 4.53733 8.6622 5.23929 8.93402 6.31753C8.95975 6.41935 8.97822 6.52293 8.99999 6.62563C8.99999 6.78946 8.99999 6.9533 8.99999 7.11736C8.99515 7.14001 8.98966 7.16266 8.9857 7.18553C8.85771 7.9152 8.46692 8.45091 7.8063 8.78892C7.59034 8.89954 7.35767 8.95408 7.12127 8.99586C6.95699 8.99586 6.79316 8.99586 6.62932 8.99586ZM8.28967 6.87303C8.27428 6.08376 7.66951 5.46074 6.87474 5.4603C6.09691 5.45986 5.46993 6.06419 5.46422 6.86489C5.45872 7.63723 6.05952 8.2774 6.87101 8.2818C7.6517 8.2862 8.27054 7.67638 8.28967 6.87303Z"
                                                        fill="#AD8C5C" />
                                                    <path
                                                        d="M2.56131 3.69688C2.56021 3.89591 2.40341 4.05051 2.20307 4.05007C1.99987 4.04963 1.84505 3.89063 1.84769 3.68523C1.85011 3.48731 2.00889 3.33447 2.21033 3.33644C2.40869 3.3382 2.56241 3.49588 2.56131 3.69688Z"
                                                        fill="#AD8C5C" />
                                                    <path
                                                        d="M4.08887 3.69696C4.08777 3.89598 3.93076 4.05036 3.73019 4.04992C3.52721 4.04948 3.37239 3.89026 3.37503 3.68464C3.37767 3.48672 3.53645 3.3341 3.73811 3.33608C3.93647 3.33806 4.08997 3.49596 4.08887 3.69696Z"
                                                        fill="#AD8C5C" />
                                                    <path
                                                        d="M5.61623 3.69821C5.61469 3.89679 5.45723 4.05095 5.25645 4.05007C5.05369 4.04919 4.89931 3.88953 4.90239 3.68391C4.90525 3.48621 5.06447 3.33425 5.26635 3.33645C5.46471 3.33843 5.61777 3.49699 5.61623 3.69821Z"
                                                        fill="#AD8C5C" />
                                                    <path
                                                        d="M7.14336 3.6991C7.1416 3.89746 6.9837 4.05118 6.78292 4.05008C6.58038 4.04898 6.42644 3.8891 6.42974 3.68304C6.43282 3.48556 6.59248 3.33382 6.79458 3.33646C6.99272 3.33888 7.14534 3.49744 7.14336 3.6991Z"
                                                        fill="#AD8C5C" />
                                                    <path
                                                        d="M2.20106 5.57776C2.00204 5.57666 1.84722 5.41986 1.84766 5.21952C1.8481 5.01632 2.00709 4.8615 2.21249 4.86392C2.41042 4.86634 2.56326 5.02512 2.5615 5.22656C2.55974 5.42492 2.40184 5.57864 2.20106 5.57776Z"
                                                        fill="#AD8C5C" />
                                                    <path
                                                        d="M4.08887 5.2239C4.08799 5.42314 3.93119 5.57796 3.73107 5.57774C3.52765 5.57752 3.37261 5.41875 3.37503 5.21335C3.37723 5.0152 3.53579 4.86236 3.73723 4.8639C3.93581 4.86544 4.08975 5.02312 4.08887 5.2239Z"
                                                        fill="#AD8C5C" />
                                                    <path
                                                        d="M1.84768 6.74137C1.84987 6.54323 2.00821 6.38995 2.20943 6.39149C2.41175 6.39303 2.56503 6.55335 2.56152 6.75985C2.558 6.95711 2.3979 7.10819 2.19536 7.10533C1.99766 7.10247 1.8457 6.94325 1.84768 6.74137Z"
                                                        fill="#AD8C5C" />
                                                    <path
                                                        d="M3.37502 6.7415C3.37722 6.54335 3.53534 6.39007 3.73656 6.39161C3.9391 6.39315 4.09238 6.55347 4.08864 6.75975C4.08513 6.95701 3.92503 7.10809 3.72271 7.10523C3.525 7.10237 3.37282 6.94338 3.37502 6.7415Z"
                                                        fill="#AD8C5C" />
                                                    <path
                                                        d="M6.51653 6.50937C6.51653 6.38666 6.51455 6.26395 6.51697 6.14124C6.52093 5.94486 6.67619 5.79465 6.87213 5.79443C7.06873 5.79399 7.22487 5.94332 7.22993 6.13882C7.23235 6.23228 7.23433 6.32597 7.22949 6.41921C7.22575 6.49068 7.24884 6.52103 7.32317 6.51487C7.40212 6.5085 7.47997 6.51531 7.55276 6.55534C7.69571 6.63429 7.77114 6.80054 7.73155 6.95778C7.69219 7.1137 7.55584 7.22541 7.39442 7.22761C7.21629 7.23003 7.03794 7.23069 6.85981 7.22739C6.67157 7.22409 6.52159 7.07411 6.51719 6.88631C6.51411 6.76074 6.51653 6.63495 6.51653 6.50937Z"
                                                        fill="#AD8C5C" />
                                                </svg>
                                            </div>
                                            <p class="pera">{{ $blog->created_at->format('Y/m/d') }}</p>
                                        </div>
{{--                                        <div class="content">--}}
{{--                                            <div class="icon">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="9"--}}
{{--                                                    viewBox="0 0 14 9" fill="none">--}}
{{--                                                    <path--}}
{{--                                                        d="M13.9997 4.63751C13.8522 4.92673 13.6288 5.1581 13.4205 5.39946C12.5276 6.43342 11.5171 7.32965 10.3348 8.01826C9.44228 8.53782 8.49331 8.89762 7.45813 8.98163C6.57895 9.0529 5.72576 8.91484 4.90131 8.60117C3.79738 8.18112 2.83164 7.5352 1.94391 6.76223C1.30522 6.20617 0.726737 5.59227 0.201622 4.92707C-0.0669222 4.5869 -0.0676064 4.41268 0.201964 4.07319C1.17967 2.84195 2.312 1.78493 3.67012 0.987856C4.56504 0.462788 5.5188 0.102643 6.55876 0.0182874C7.43794 -0.0529841 8.29113 0.0861159 9.11558 0.39978C10.2195 0.820178 11.1849 1.4661 12.0723 2.23976C12.7038 2.78996 13.2758 3.39766 13.7982 4.05322C13.8755 4.15032 13.9422 4.25326 14 4.36275C13.9997 4.45434 13.9997 4.54593 13.9997 4.63751ZM7.07601 8.04271C7.19779 8.05166 7.39758 8.02893 7.59531 8.00208C8.4567 7.88433 9.24489 7.55964 9.9845 7.1117C11.0919 6.44099 12.0254 5.56817 12.8622 4.58414C12.9203 4.51563 12.9128 4.47603 12.8581 4.41233C12.3672 3.83837 11.8428 3.29919 11.2639 2.8144C10.5144 2.18673 9.70774 1.65375 8.78888 1.30634C8.02224 1.01643 7.23508 0.887663 6.41919 0.997497C5.55745 1.11353 4.76995 1.44062 4.03034 1.88856C2.92298 2.55893 1.98941 3.43209 1.15299 4.41612C1.09483 4.48464 1.1027 4.52423 1.15675 4.58827C1.36577 4.83686 1.58745 5.07306 1.81254 5.3065C2.54873 6.06983 3.35744 6.74088 4.28589 7.25597C5.12915 7.72422 6.02031 8.03272 7.07601 8.04271Z"--}}
{{--                                                        fill="#AD8C5C" />--}}
{{--                                                    <path--}}
{{--                                                        d="M9.79178 4.50636C9.75621 6.09293 8.53219 7.3042 6.99961 7.29731C5.41332 7.29008 4.21975 6.02785 4.22659 4.49362C4.23378 2.90051 5.48447 1.69578 7.01227 1.70267C8.60335 1.7099 9.76921 2.97867 9.79178 4.50636ZM8.83016 4.50223C8.83084 3.48342 8.02179 2.66569 7.01158 2.66397C5.99864 2.66225 5.1848 3.47516 5.18172 4.49086C5.17898 5.5169 5.98975 6.33635 7.00714 6.33601C8.01802 6.33601 8.82947 5.51965 8.83016 4.50223Z"--}}
{{--                                                        fill="#AD8C5C" />--}}
{{--                                                </svg>--}}
{{--                                            </div>--}}
{{--                                            <p class="pera">4.5k Views</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="content">--}}
{{--                                            <div class="icon">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11"--}}
{{--                                                    viewBox="0 0 12 11" fill="none">--}}
{{--                                                    <path--}}
{{--                                                        d="M11.0998 4.28786L11.0981 4.29696C11.0928 4.32523 11.0875 4.35372 11.0823 4.38238C11.0478 4.57029 11.012 4.76565 10.9502 4.95564L10.9502 4.95567C10.7534 5.55988 10.4146 6.07441 10.0172 6.54502L10.0172 6.54503C9.4431 7.22447 8.77938 7.80759 8.12233 8.38485C8.0667 8.43373 8.01112 8.48256 7.95565 8.5314L7.95565 8.5314C7.5586 8.88096 7.15958 9.22852 6.76082 9.57586C6.62377 9.69524 6.48675 9.81458 6.34985 9.93398L6.34984 9.934C6.34355 9.93948 6.33693 9.9454 6.32996 9.95165C6.2711 10.0044 6.18712 10.0796 6.0667 10.0961L6.06659 10.0961C5.886 10.1205 5.76175 10.0267 5.66467 9.94108L5.66466 9.94106C5.3954 9.70352 5.12517 9.4676 4.85473 9.23148C4.72572 9.11886 4.59667 9.00619 4.46766 8.89328M11.0998 4.28786L0.937523 3.44221C0.823359 4.213 0.973145 4.93203 1.3396 5.60686L1.33961 5.60689C1.64936 6.17694 2.06439 6.65962 2.50811 7.10963L2.50812 7.10963C3.04272 7.65173 3.61577 8.15089 4.18535 8.64703C4.27961 8.72913 4.37378 8.81116 4.46766 8.89328M11.0998 4.28786V4.27859M11.0998 4.28786V4.27859M4.46766 8.89328L4.53351 8.81803M4.46766 8.89328C4.46766 8.89329 4.46767 8.89329 4.46767 8.8933L4.53351 8.81803M4.53351 8.81803C4.43933 8.73564 4.34497 8.65345 4.25061 8.57125C3.68089 8.07498 3.11104 7.57859 2.57932 7.03942L10.9838 4.36498C10.9492 4.55336 10.9146 4.74156 10.8551 4.92471C10.6637 5.51244 10.3333 6.01572 9.94079 6.48049C9.37175 7.15397 8.71349 7.73233 8.05542 8.31052C8.00012 8.35911 7.94481 8.4077 7.88957 8.45635C7.49273 8.80572 7.094 9.15303 6.69529 9.50032C6.55821 9.61973 6.42113 9.73913 6.28413 9.85862C6.27711 9.86473 6.27014 9.8709 6.26318 9.87707C6.20201 9.93124 6.14138 9.98494 6.05317 9.99698C5.91924 10.0151 5.8249 9.94904 5.73081 9.86607C5.46139 9.62838 5.19084 9.39218 4.92031 9.15599C4.79133 9.04339 4.66236 8.93079 4.53351 8.81803ZM11.0998 4.27859C11.0998 4.06048 11.0998 3.84218 11.1 3.6239L11.1 3.61508L11.0985 3.60639C11.0966 3.59585 11.0948 3.5862 11.0931 3.57703C11.0896 3.55796 11.0865 3.54102 11.0839 3.52274M11.0998 4.27859L11.0839 3.52274M5.73908 1.99227L5.73911 1.99231C5.83718 2.11634 5.92537 2.24713 6.00463 2.38351C6.26799 1.9333 6.60424 1.53713 7.06581 1.27069L7.06583 1.27068C7.96863 0.749716 8.88645 0.7862 9.75914 1.32772C10.5641 1.82719 10.9563 2.60576 11.0839 3.52274M5.73908 1.99227L11.0839 3.52281C11.0839 3.52279 11.0839 3.52276 11.0839 3.52274M5.73908 1.99227C5.1823 1.28882 4.47366 0.879427 3.5495 0.918555C2.86057 0.947689 2.26778 1.20884 1.78078 1.69946M5.73908 1.99227L1.78078 1.69946M3.38757 6.83583L3.38758 6.83584C3.9498 7.37126 4.5344 7.87772 5.12106 8.38596C5.41471 8.64036 5.70888 8.8952 6.001 9.15434L6.00101 9.15435C6.00185 9.15509 6.00265 9.15578 6.00339 9.15641L3.38757 6.83583ZM3.38757 6.83583C2.9881 6.45552 2.60991 6.06113 2.29486 5.61155C2.00423 5.19622 1.78946 4.75731 1.72762 4.25742M3.38757 6.83583L1.62837 4.26965M5.99673 3.76069C6.0984 3.7654 6.18619 3.73325 6.25885 3.66345C6.32702 3.59797 6.37726 3.50377 6.42004 3.392L6.42006 3.39195C6.62231 2.86274 6.89218 2.39556 7.34191 2.06539C7.72977 1.78071 8.15894 1.68038 8.63379 1.753L8.6338 1.753C9.47245 1.88114 10.0486 2.54507 10.2319 3.34286C10.421 4.16618 10.2112 4.90004 9.73391 5.58336L9.7339 5.58338C9.37627 6.09566 8.94141 6.5389 8.48312 6.96709C7.94775 7.46732 7.39572 7.94581 6.84201 8.42575C6.56745 8.66374 6.29247 8.90209 6.0189 9.14363L5.08903 2.31988C4.71583 1.89237 4.25515 1.64346 3.70525 1.62757M5.99673 3.76069L6.00136 3.6608M5.99673 3.76069C5.99677 3.76069 5.99681 3.76069 5.99685 3.7607L6.00136 3.6608M5.99673 3.76069C5.8763 3.75523 5.78606 3.70787 5.71923 3.63416C5.65631 3.56476 5.61805 3.47613 5.58843 3.39462M6.00136 3.6608C6.15142 3.66775 6.24478 3.57013 6.32665 3.35625L6.00136 3.6608ZM5.58843 3.39462L5.68242 3.36047L5.58844 3.39465C5.58844 3.39464 5.58844 3.39463 5.58843 3.39462ZM5.58843 3.39462C5.45296 3.0221 5.27057 2.67974 5.01371 2.38567L5.01369 2.38565C4.65629 1.97622 4.22134 1.74317 3.70462 1.72759M3.70462 1.72759C3.70537 1.72758 3.70613 1.72756 3.70689 1.72755L3.70525 1.62757M3.70462 1.72759C3.70387 1.72757 3.70312 1.72755 3.70236 1.72752L3.70525 1.62757M3.70462 1.72759C3.31077 1.73436 2.96651 1.82149 2.65738 2.02551M3.70525 1.62757C3.29589 1.63427 2.93125 1.72494 2.60229 1.94205M2.60229 1.94205L2.65739 2.02551C2.65738 2.02551 2.65738 2.02551 2.65738 2.02551M2.60229 1.94205C1.81436 2.46222 1.5245 3.42704 1.62837 4.26965M2.60229 1.94205L2.65738 2.02551M2.65738 2.02551C1.9093 2.51938 1.62707 3.44172 1.72762 4.25742M1.62837 4.26965L1.72762 4.25738C1.72762 4.25739 1.72762 4.2574 1.72762 4.25742M1.62837 4.26965L1.72762 4.25742M1.78078 1.69946C1.30233 2.18138 1.0365 2.7735 0.937524 3.4422L1.78078 1.69946Z"--}}
{{--                                                        fill="#AD8C5C" stroke="#D8A023" stroke-width="0.2" />--}}
{{--                                                </svg>--}}
{{--                                            </div>--}}
{{--                                            <p class="pera">1.2k Likes</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="content">--}}
{{--                                            <div class="icon">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"--}}
{{--                                                    viewBox="0 0 9 9" fill="none">--}}
{{--                                                    <path--}}
{{--                                                        d="M1.6442 7.32452C1.38061 7.26573 1.1375 7.16859 0.919983 7.01778C0.333958 6.61135 0.0166339 6.049 0.00895672 5.33583C-0.00383859 4.23668 -0.00127953 3.13754 0.00639765 2.03839C0.0166339 1.00826 0.745966 0.177511 1.76703 0.0215853C1.86939 0.00624838 1.97688 0.00113607 2.0818 0.00113607C3.69656 0.00113607 5.31133 -0.00142009 6.9261 0.00113607C7.92669 0.00369222 8.74559 0.66318 8.95288 1.63707C8.98359 1.78278 8.99638 1.93359 8.99638 2.0844C8.99894 3.15032 9.0015 4.21879 8.99894 5.28471C8.99638 6.30717 8.32079 7.13536 7.32531 7.32708C7.18457 7.35519 7.04126 7.3603 6.89795 7.3603C6.17885 7.36286 5.46232 7.36286 4.74322 7.3603C4.66645 7.3603 4.60247 7.3782 4.5385 7.42165C3.80149 7.91499 3.06448 8.40577 2.32747 8.89911C2.23278 8.96301 2.13298 9.00902 2.01526 8.99624C1.79518 8.97324 1.64932 8.80964 1.64676 8.57959C1.6442 8.20384 1.64676 7.82552 1.64676 7.44977C1.6442 7.41143 1.6442 7.37309 1.6442 7.32452ZM2.45798 7.82553C2.50404 7.79741 2.53219 7.77696 2.56034 7.75907C3.11054 7.39353 3.66074 7.028 4.20838 6.65736C4.32609 6.57812 4.44381 6.54489 4.58456 6.54489C5.36763 6.54745 6.14814 6.54745 6.93122 6.54489C7.64775 6.54234 8.1826 6.00554 8.1826 5.28726C8.1826 4.21368 8.1826 3.14009 8.1826 2.06651C8.1826 1.3559 7.6452 0.816549 6.93378 0.816549C5.31645 0.816549 3.69656 0.816549 2.07924 0.816549C1.36526 0.816549 0.827856 1.3559 0.827856 2.07162C0.827856 3.14265 0.827856 4.21112 0.827856 5.28215C0.827856 5.98254 1.32687 6.50655 2.02806 6.54234C2.31211 6.55767 2.45798 6.70849 2.46054 6.99222C2.45798 7.26317 2.45798 7.53157 2.45798 7.82553Z"--}}
{{--                                                        fill="#AD8C5C" />--}}
{{--                                                    <path--}}
{{--                                                        d="M4.4929 3.27286C3.68424 3.27286 2.87813 3.27286 2.06947 3.27286C1.76494 3.27286 1.56534 2.99679 1.6677 2.72328C1.72912 2.55713 1.85707 2.47278 2.03109 2.45489C2.06179 2.45233 2.09506 2.45233 2.12577 2.45233C3.70983 2.45233 5.29133 2.45233 6.87539 2.45233C6.94448 2.45233 7.01614 2.45744 7.08267 2.47789C7.27204 2.53668 7.38208 2.72584 7.35393 2.93033C7.32834 3.11693 7.15944 3.26774 6.95984 3.2703C6.72952 3.27541 6.49921 3.2703 6.27145 3.2703C5.68031 3.27286 5.0866 3.27286 4.4929 3.27286Z"--}}
{{--                                                        fill="#AD8C5C" />--}}
{{--                                                    <path--}}
{{--                                                        d="M4.49249 4.9063C3.95508 4.9063 3.42024 4.90886 2.8854 4.9063C2.59878 4.90375 2.40941 4.67114 2.47339 4.40274C2.51177 4.23403 2.6602 4.10623 2.83422 4.096C2.85981 4.09344 2.8854 4.09344 2.91099 4.09344C3.973 4.09344 5.03757 4.09344 6.09958 4.09344C6.33757 4.09344 6.49879 4.21614 6.53974 4.42319C6.58836 4.66858 6.41178 4.89863 6.161 4.9063C5.9358 4.91397 5.70804 4.90886 5.48029 4.90886C5.15017 4.9063 4.82261 4.9063 4.49249 4.9063Z"--}}
{{--                                                        fill="#AD8C5C" />--}}
{{--                                                </svg>--}}
{{--                                            </div>--}}
{{--                                            <p class="pera">695 Comments</p>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="details-img">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="img">
                                    </div>
                                    <p class="common-pera">
                                        {!! $blog['description_' . $locale] !!}
                                    </p>
                                </div>
                                <section class="comment-area mt-5">
                                    <div class="comment-box">
                                        <h4 class="title">{{__('app.call')}}</h4>
                                        <p class="pera">{{__('app.call_text')}}</p>
                                        <form class="custom-form" onsubmit="sendphone(event)">
                                            <div class="row g-4">
                                                <div class="col-xl-4 col-sm-6">
                                                    <input id="last_name" class="form-control custom-form-control" type="text" placeholder="{{__('app.name')}}" required>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <input id="email" class="form-control custom-form-control" type="text" placeholder="Email*" required>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <input id="phone_number_footer" class="form-control custom-form-control" type="text" placeholder="{{__('app.phone_number')}}" required>
                                                </div>
                                                <div class="col-12">
                                                    <textarea class="form-control custom-form-control custom-form-textarea" placeholder="{{__('app.comment')}}" id="floatingTextarea2"></textarea>
                                                </div>
                                                <div class="col-12 mt-36">
                                                    <button type="submit" class="submit-btn d-inline-block">{{__('app.send')}}</button>
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
                    <div class="col-xxl-4 col-xl-4">
                        <div class="news-filter">
                            <div class="search-filter-section">
                                <div class="expand-icon close-btn block d-xl-none">
                                    <i class="ri-arrow-left-double-line"></i>
                                </div>
                                <div class="search-section">
                                    <div class="heading">
                                        <h4 class="title">{{__('app.category')}}</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10"
                                            viewBox="0 0 20 10" fill="none">
                                            <path
                                                d="M20 1.05636C19.9113 0.744994 19.7615 0.47255 19.4676 0.263351C18.9685 -0.0820697 18.2475 -0.0917998 17.7484 0.258486C17.6541 0.326597 17.5598 0.399573 17.4711 0.477415C15.042 2.60832 12.6073 4.74409 10.1782 6.875C10.1228 6.92365 10.0784 6.98203 9.94531 7.0696C9.90649 7.01122 9.88431 6.93824 9.82885 6.88959C7.37757 4.73436 4.92074 2.58399 2.46946 0.428762C2.03688 0.0492861 1.53775 -0.0966664 0.938797 0.0687463C0.0680942 0.312 -0.286842 1.29475 0.262201 1.93694C0.323206 2.00991 0.395302 2.07802 0.467398 2.14614C3.2958 4.62733 6.11865 7.10852 8.94705 9.58485C9.46282 10.0373 10.1172 10.1249 10.7106 9.82323C10.8548 9.75026 10.9824 9.64323 11.0989 9.54106C13.8441 7.13285 16.5837 4.72463 19.3345 2.32128C19.6395 2.0537 19.9113 1.78126 20 1.39692C20 1.28502 20 1.17312 20 1.05636Z"
                                                fill="currentColor" />
                                        </svg>
                                    </div>
                                    <div class="offer-list">
                                        @foreach($categories as $category)
{{--                                            {{ $categories }}--}}
                                            <?php
                                                $categorybyid = \App\Models\Category::find($category->category_id);
                                                ?>
                                            <div class="d-flex">
                                                <label class="checkbox-label">
                                                    <input class="checkbox-style" type="checkbox" value="{{ $category->id }}" name="categories[]">
                                                    <span class="checkmark-style"></span>
                                                </label>
                                                <div class="content pl-24 d-flex justify-content-between w-100">
                                                    <p class="pera">{{ $categorybyid['name_' . $locale] }}</p>
                                                    <p class="pera">({{ $category->count() }})</p>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cover"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End-of goal-->
        <!-- subscription area S t a r t -->

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
        <!-- End-of subscription-->
        @endsection