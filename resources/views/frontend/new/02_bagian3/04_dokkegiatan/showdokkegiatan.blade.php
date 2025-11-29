@include('frontend.A00_new.01_halamanutama.newheader')

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="transparent-header">
        <div class="tg-header__top">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="tg-header__top-info">
                            <ul class="list-wrap">
                                <li><i class="fas fa-building"></i> Dinas Pekerjaan Umum Dan Tata Ruang Kabupaten Bandung Barat</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tg-header__top-right">
                            <ul class="list-wrap">
                                                             @include('frontend.A00_new.01_halamanutama.newheader')


                                {{-- <li>
                                    <div class="tg-header__top-social">
                                        <ul class="list-wrap">
                                            <li><a href="https://www.facebook.com/" target="_blank"><img src="/assets/assets/img/icons/facebook.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://x.com/home" target="_blank"><img src="/assets/assets/img/icons/twitter.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><img src="/assets/assets/img/icons/instagram.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://www.pinterest.com/" target="_blank"><img src="/assets/assets/img/icons/pinterest.svg" alt="" class="injectable"></a></li>
                                        </ul>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.A00_new.01_halamanutama.newnavbar')

        <!-- Mobile Menu  -->
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                <div class="nav-logo">
                    <a href="index.html"><img src="/storage/logo/sipjakikbb.png" alt="Logo"></a>
                </div>
                {{-- <div class="tgmobile__search">
                    <form action="#">
                        <input type="text" placeholder="Search here...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div> --}}
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                {{-- <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div> --}}
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->

        <!-- offCanvas-menu -->
        <div class="offCanvas__info">
            <div class="offCanvas__close-icon menu-close">
                <button><img src="/assets/assets/img/icons/times.svg" alt="" class="injectable"></button>
            </div>
            <div class="offCanvas__logo mb-30">
                <a href="index.html"><img src="/storage/logo/sipjakikbb.png" alt="Logo"></a>
            </div>
            <div class="offCanvas__content">
                <p>Sistem Pembina Jasa Konstruksi</p>
            </div>
            {{-- <div class="offCanvas__img">
                <ul class="list-wrap">
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta01.jpg" alt="img"></a></li>
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta02.jpg" alt="img"></a></li>
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta03.jpg" alt="img"></a></li>
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta04.jpg" alt="img"></a></li>
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta05.jpg" alt="img"></a></li>
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta06.jpg" alt="img"></a></li>
                </ul>
            </div> --}}
            <div class="offCanvas__side-info">
                <div class="contact-list">
                    <i class="flaticon-placeholder"></i>
                    <p>Dinas Pekerjaan Umum Dan Tata Ruang Kabupaten Bandung Barat</p>
                </div>
                {{-- <div class="contact-list">
                    <i class="flaticon-telephone"></i>
                    <a href="tel:0123456789">+123 888 9999</a>
                </div> --}}
                {{-- <div class="contact-list">
                    <i class="flaticon-envelope"></i>
                    <a href="mailto:info@beeko.com">info@beeko.com</a>
                </div> --}}
            </div>
            <div class="offCanvas__social">
                <h6 class="title">Follow us</h6>
                <ul class="list-wrap">
                    <li><a href="/" target="_blank"><img src="/assets/assets/img/icons/facebook.svg" alt="" class="injectable"></a></li>
                    <li><a href="/" target="_blank"><img src="/assets/assets/img/icons/twitter.svg" alt="" class="injectable"></a></li>
                    <li><a href="/" target="_blank"><img src="/assets/assets/img/icons/instagram.svg" alt="" class="injectable"></a></li>
                    <li><a href="/" target="_blank"><img src="/assets/assets/img/icons/pinterest.svg" alt="" class="injectable"></a></li>
                </ul>
            </div>
        </div>
        <div class="offCanvas__overly"></div>
        <!-- offCanvas-menu-end -->

    </header>
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">



        <!-- breadcrumb-area -->
        <section class="breadcrumb__area">
            <div class="breadcrumb__bg" data-background="assets/img/bg/breadcrumb__bg.jpg"></div>
                </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-details-area -->
        <section class="shop__details-area section-py-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="shop__details-images-wrap">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active" id="itemOne-tab-pane" role="tabpanel" aria-labelledby="itemOne-tab" tabindex="0">
                                    <span class="flash-sale">-10%</span>
                                    <a href="#" class="popup-image expand-img">

                                        <img src="/assets/assets/img/icons/expand.svg" alt="" class="injectable">

                                    </a>

                                @if($data->berita1 && file_exists(public_path('storage/' . $data->berita1)))
                                        <img src="{{ asset('storage/' . $data->berita1) }}" alt="Berita 1" class="injectable" loading="lazy">
                                    @elseif($data->berita1)
                                        <img src="{{ asset($data->berita1) }}" alt="Berita 1" class="injectable" loading="lazy">
                                    @else
                                        <img src="assets/img/icons/expand.svg" alt="Placeholder Berita 1" class="injectable">
                                    @endif

                                </div>
                                {{-- <div class="tab-pane" id="itemTwo-tab-pane" role="tabpanel" aria-labelledby="itemTwo-tab" tabindex="0">
                                    <span class="flash-sale">-10%</span>
                                    <a href="/assets/img/shop/shop_details-img02.jpg" class="popup-image expand-img">
                                        <img src="assets/assets/img/icons/expand.svg" alt="" class="injectable">
                                    </a>
                                    <img src="assets/assets/img/shop/shop_details-img02.jpg" alt="img">
                                </div> --}}

                            </div>
                            @php
    $beritas = ['berita1','berita2','berita3','berita4'];
@endphp

<ul class="nav nav-tabs" id="myTab" role="tablist">
    @foreach($beritas as $index => $field)
        @php
            $value = $data->$field ?? null;
            $tabId = 'item' . ($index + 1) . '-tab';
            $tabPane = 'item' . ($index + 1) . '-tab-pane';
        @endphp
        <li class="nav-item" role="presentation">
            <button class="nav-link {{ $index == 0 ? 'active' : '' }}"
                    id="{{ $tabId }}"
                    data-bs-toggle="tab"
                    data-bs-target="#{{ $tabPane }}"
                    type="button"
                    role="tab"
                    aria-controls="{{ $tabPane }}"
                    aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                <img src="{{ $value && file_exists(public_path('storage/' . $value)) ? asset('storage/' . $value) : ($value ? asset($value) : '/assets/assets/img/shop/shop_details-img0' . ($index + 1) . '.jpg') }}"
                     alt="Berita {{ $index + 1 }}">
            </button>
        </li>
    @endforeach
</ul>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shop__details-content">
                            <h2 class="title">{{$data->judul_kegiatan}}</h2>
                                                   </div>
                                                   <p>{{$data->alamat_kegiatan}}</p>

    <div class="team__details-info-wrap">
        <ul class="team__details-inner list-wrap">
            <li>
                <div class="icon">
                    <i class="flaticon-placeholder"></i>
                </div>
                <div class="content">
                    <span>Dokumentasi</span>
                    <a href="{{ url('/dokkegiatan') }}" style="text-decoration: none; color: inherit;">
                        Lihat Dokumentasi Lainnya
                    </a>
                </div>
            </li>
        </ul>
    </div>


                                                </div>

                </div>

            </div>

        </section>
        <!-- shop-details-area-end -->

        <!-- related-product-area -->
        <section class="related__product-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="related__product-title">
                            <h2 class="title">Dokumentasi Kegiatan</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="related__product-nav">
                            <button class="shop-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                                    <path d="M8.09961 15.1667L1.43294 8.50008L8.09961 1.83342" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="shop-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                                    <path d="M1.59961 15.1667L8.26628 8.50008L1.59961 1.83342" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-container shop-active fix">
                    <div class="swiper-wrapper">

                       @php
    $beritas = range(6, 20); // berita6 sampai berita20
@endphp

@foreach($beritas as $i)
    @php
        $field = 'berita' . $i;
        $value = $data->$field ?? null;
        $path = $value && file_exists(public_path('storage/' . $value)) ? asset('storage/' . $value) : ($value ? asset($value) : null);
        $isImage = $path && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $path);
    @endphp

    @if($value && $isImage)
        <div class="swiper-slide">
            <div class="shop__item">
                <div class="shop__thumb">
                    <a href="{{ $path }}" target="_blank">
                        <img class="shop-thumb-img" src="{{ $path }}" alt="Berita {{ $i }}">
                    </a>
                </div>
            </div>
        </div>
    @endif
@endforeach


                    </div>
                </div>
            </div>
        </section>



    </main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')
