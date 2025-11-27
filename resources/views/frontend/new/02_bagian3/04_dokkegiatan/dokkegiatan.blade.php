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
                                <li class="log-in">
                                    <a href="/login"><img src="/assets/assets/img/icons/lock.svg" alt="" class="injectable">Masuk</a>
                                </li>
                                <li class="log-in">
                                    <a href="/register">
                                        <img src="/assets/assets/img/icons/user-lock.svg" alt="" class="injectable">
                                        Daftar
                                    </a>
                                </li>

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

        <!-- team-details -->
        <section class="team__details-area section-py-130">
            <div class="container">

                    @foreach ($data as $item)

                    <div class="row justify-content-center">
                        <div class="col-44">
                            <div class="team__details-img">
                                @if($item->berita1 && file_exists(public_path('storage/' . $item->berita1)))
                                    <img src="{{ asset('storage/' . $item->berita1) }}" alt="Berita 1" loading="lazy">
                                @elseif($item->berita1)
                                    <img src="{{ asset($item->berita1) }}" alt="Berita 1" loading="lazy">
                                @else
                                    <img src="assets/img/team/team_details.jpg" alt="Placeholder Berita 1">
                                @endif
                            </div>
                        </div>
                        <div class="col-56">
                        <div class="team__details-info-wrap">
                            <span>{{$item->judul_kegiatan}}</span>
                            <div class="team__details-social">
                                <ul class="list-wrap">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @php
                                            $field = 'berita' . $i;
                                            $value = $item->$field ?? null;
                                        @endphp

                                        <li style="margin: 5px 0;">
                                            @if($value && file_exists(public_path('storage/' . $value)))
                                                <a href="{{ asset('storage/' . $value) }}" target="_blank">
                                                    <img src="{{ asset('storage/' . $value) }}" alt="Berita {{ $i }}" class="injectable">
                                                </a>
                                            @elseif($value)
                                                <a href="{{ asset($value) }}" target="_blank">
                                                    <img src="{{ asset($value) }}" alt="Berita {{ $i }}" class="injectable">
                                                </a>
                                            @else
                                                <span style="font-size: 12px; color: #888;">Data berita {{ $i }} belum diupdate</span>
                                            @endif
                                        </li>
                                    @endfor
                                    </ul>

                            </div>
                            <p>{{$item->alamat_kegiatan}}</p>


                            <ul class="team__details-inner list-wrap">

                              <li>
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <span>Lihat Dokumentasi Kegiatan</span>
                                        <a href="{{ route('dokumentasi.kegiatan') }}">Kegiatan Sertifikasi Tenaga Kerja Konstruksi</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                    <div class="content">
                                        <span>Lihat Berita Kegiatan</span>
                                        <a href="{{ route('berita.kegiatan') }}">Berita Kegiatan Sertifikasi TKK</a>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>

                    @endforeach
                </div>

            </div>
        </section>
        <!-- team-details-end -->

    </main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')
