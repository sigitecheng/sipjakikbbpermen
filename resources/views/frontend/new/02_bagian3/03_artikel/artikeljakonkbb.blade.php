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
                                @include('frontend.A00_new.01_halamanutama.newlogin')


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
      @include('frontend.A00_new.01_halamanutama.newlogo')
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
                <a href="#"><img src="/storage/logo/sipjakikbb.png" alt="Logo"></a>
                <a href="#"><img src="/assets/icon/pupr.png" alt="Logo"></a>
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
            <div class="breadcrumb__bg"></div>
                   </section>
        <!-- about-area -->
        <section class="about__area-six section-py-130">
            <div class="container">
                @foreach ($data->sortByDesc('created_at')->take(1) as $item)
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 order-0 order-lg-2">
                        <div class="about__img-six">
                        <div style="margin-top: 10px;">
                            @if($item->berkas && file_exists(public_path('storage/' . $item->berkas)))
                                <!-- Menampilkan PDF dari storage -->
                                <iframe src="{{ asset('storage/' . $item->berkas) }}"
                                        style="width: 100%; height: 400px; border: 1px solid #ccc;"
                                        frameborder="0"
                                        loading="lazy"></iframe>
                            @elseif($item->berkas)
                                <!-- Menampilkan PDF dari path luar storage -->
                                <iframe src="{{ asset($item->berkas) }}"
                                        style="width: 100%; height: 400px; border: 1px solid #ccc;"
                                        frameborder="0"
                                        loading="lazy"></iframe>
                            @else
                                <!-- Placeholder jika tidak ada file -->
                                <p>Data belum diupdate</p>
                            @endif
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-six">
                            <div class="section__title mb-10">
                                <span class="sub-title">Artikel Jasa Konstruksi</span>
                                <h2 class="title">{{$item->judul}}</h2>
                            </div>

                       <div class="about__content-bottom-two">
    @if($item->berkas && file_exists(public_path('storage/' . $item->berkas)))
        <!-- Tombol download hanya muncul jika file ada -->
        <a href="{{ asset('storage/' . $item->berkas) }}" class="tg-btn tg-btn-seven" download>
            Download <img src="/assets/assets/img/icons/right_arrow.svg" alt="" class="injectable">
        </a>

        <!-- Preview PDF tersembunyi -->
        <iframe src="{{ asset('storage/' . $item->berkas) }}"
                style="display: none;"
                frameborder="0"
                loading="lazy"></iframe>
    @elseif($item->berkas)
        <!-- Tombol download jika file path luar storage -->
        <a href="{{ asset($item->berkas) }}" class="tg-btn tg-btn-seven" download>
            Download <img src="/assets/assets/img/icons/right_arrow.svg" alt="" class="injectable">
        </a>

        <!-- Preview PDF tersembunyi -->
        <iframe src="{{ asset($item->berkas) }}"
                style="display: none;"
                frameborder="0"
                loading="lazy"></iframe>
    @else
        <p>Data belum diupdate</p>
    @endif
</div>

                        </div>
                    </div>
                </div>


                @endforeach
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services__area-five services__bg-three section-py-130" data-background="/assets/assets/img/bg/h6_services_bg.jpg">
            <div class="container">
                <div class="row justify-content-center mb-50">
                    <div class="col-lg-6">
                        <div class="section__title text-center">
                            <span class="sub-title">Kumpulan Artikel Jasa Konstruksi</span>
                            {{-- <h2 class="title">Explore Our Popular Insurance Services That We Provide</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container custom-container-two">
                <div class="row gutter-y-30 justify-content-center">

                    @foreach ($data as $item)

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-six shine__animate-item">
                            <div class="services__thumb-six shine__animate-link">
                                <a href="services-details.html">
                                @if($item->berkas && file_exists(public_path('storage/' . $item->berkas)))
                                <!-- Menampilkan PDF dari storage -->
                                <iframe src="{{ asset('storage/' . $item->berkas) }}"
                                        style="width: 100%; height: 400px; border: 1px solid #ccc;"
                                        frameborder="0"
                                        loading="lazy"></iframe>
                            @elseif($item->berkas)
                                <!-- Menampilkan PDF dari path luar storage -->
                                <iframe src="{{ asset($item->berkas) }}"
                                        style="width: 100%; height: 400px; border: 1px solid #ccc;"
                                        frameborder="0"
                                        loading="lazy"></iframe>
                            @else
                                <!-- Placeholder jika tidak ada file -->
                                <p>Data belum diupdate</p>
                            @endif
                                </a>
                                <div class="services__icon-six">
                                    <i class="flaticon-health-insurance"></i>
                                </div>
                            </div>
                            <div class="services__content-six">
                                {{-- <h3 class="title"><a href="services-details.html">Life Insurance</a></h3> --}}
                                <p>{{$item->judul}}</p>
                       <a href="{{ route('artikeljakon.show', $item->id) }}" class="tg-btn tg-btn-seven">
                                Selengkapnya <img src="/assets/assets/img/icons/right_arrow.svg" alt="" class="injectable">
                            </a>

                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>


                 @include('frontend.A00_new.01_halamanutama.newpaginations')

                         </div>
        </section>
        <!-- services-area-end -->




    </main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')
