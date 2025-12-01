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

<section style="
    background-image: url('/assets/assets/img/bg/perbaikanbanner.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 145px;
">
</section>
        <!-- blog-details-area -->
        <section class="blog__details-area section-py-130" style="margin-top: -75px;">
            <div class="container">
                <div class="row">
                    <div class="col-70">
                        <div class="blog__details-wrap">
                            <div class="blog__post-thumb-five blog__details-thumb">
                             {{-- LOGIKA GAMBAR START --}}
        @if($datashow->gambar && file_exists(public_path('storage/' . $datashow->gambar)))
            <!-- Gambar dari storage -->
            <img src="{{ asset('storage/' . $datashow->gambar) }}"
                 alt="Gambar Berita"
                 style="width: 100%; max-height: 400px; object-fit: contain;"
                 loading="lazy">

        @elseif($datashow->gambar)
            <!-- Gambar dari path luar -->
            <img src="{{ asset($datashow->gambar) }}"
                 alt="Gambar Berita"
                 style="width: 100%; max-height: 400px; object-fit: contain;"
                 loading="lazy">

        @else
            <!-- Jika data kosong -->
            <p>Gambar belum diupdate</p>
        @endif
        {{-- LOGIKA GAMBAR END --}}

                            </div>
                            <div class="blog__details-wrap">

    <div class="blog__post-thumb-five blog__details-thumb">


    </div>

    <div class="blog__details-content">

        <div class="blog__post-meta">
            <ul class="list-wrap">
                <li>
                    <img src="/assets/assets/img/icons/calendar.svg" alt="" class="injectable">
                    {{ \Carbon\Carbon::parse($datashow->tanggal)->format('d M Y') }}
                </li>
                <li>
                    <img src="/assets/assets/img/icons/comment.svg" alt="" class="injectable">
                    <a href="#">Comment: 0</a>
                </li>
            </ul>
        </div>

        <h2 class="title">{{ $datashow->judul }}</h2>

        <p>{!! $datashow->keteranganberita !!}</p>
        <br>
                     {{-- Tampilkan hanya jika ada gambar1 --}}
@if($datashow->gambar1 || $datashow->gambar2)
<div class="d-flex justify-content-between flex-wrap gap-2">

    @if($datashow->gambar1)
        <div style="width: 48%; max-height: 250px; overflow: hidden; border: 1px solid #ddd; border-radius: 6px;">
            @if(file_exists(public_path('storage/' . $datashow->gambar1)))
                <img src="{{ asset('storage/' . $datashow->gambar1) }}"
                     alt="Gambar Berita 1"
                     style="width: 100%; height: 100%; object-fit: cover;"
                     loading="lazy">
            @else
                <img src="{{ asset($datashow->gambar1) }}"
                     alt="Gambar Berita 1"
                     style="width: 100%; height: 100%; object-fit: cover;"
                     loading="lazy">
            @endif
        </div>
    @endif

    @if($datashow->gambar2)
        <div style="width: 48%; max-height: 250px; overflow: hidden; border: 1px solid #ddd; border-radius: 6px;">
            @if(file_exists(public_path('storage/' . $datashow->gambar2)))
                <img src="{{ asset('storage/' . $datashow->gambar2) }}"
                     alt="Gambar Berita 2"
                     style="width: 100%; height: 100%; object-fit: cover;"
                     loading="lazy">
            @else
                <img src="{{ asset($datashow->gambar2) }}"
                     alt="Gambar Berita 2"
                     style="width: 100%; height: 100%; object-fit: cover;"
                     loading="lazy">
            @endif
        </div>
    @endif

</div>
@endif


    </div>



</div>

                        </div>
                    </div>
                    <div class="col-30">
                        <aside class="blog__sidebar blog__sidebar-two">
                            <div class="sidebar__widget">
                                <form action="#" class="shop__search blog__search">
                                    <input type="text" placeholder="Search">
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path d="M17 17L13.5247 13.5247M15.681 8.3405C15.681 12.3945 12.3945 15.681 8.3405 15.681C4.28645 15.681 1 12.3945 1 8.3405C1 4.28645 4.28645 1 8.3405 1C12.3945 1 15.681 4.28645 15.681 8.3405Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <div class="sidebar__widget">
                                <h4 class="sidebar__widget-title">Berita Terakhir</h4>
                               <div class="rc-post-wrap">

                                    @foreach ($data as $item)
                                        <div class="rc-post-item">
                                            <div class="thumb">
                                               <a href="{{ route('berita.detailshow', $item->id) }}">

                                                    @if($item->gambar && file_exists(public_path('storage/' . $item->gambar)))
                                                        <!-- Gambar dari storage -->
                                                        <img src="{{ asset('storage/' . $item->gambar) }}"
                                                            loading="lazy">

                                                    @elseif($item->gambar)
                                                        <!-- Gambar dari path luar -->
                                                        <img src="{{ asset($item->gambar) }}"
                                                            loading="lazy">

                                                    @else
                                                        <!-- Placeholder -->
                                                        <div style="width:100%; height:150px; background:#eaeaea;
                                                                    display:flex; align-items:center; justify-content:center;
                                                                    color:#555; font-size:14px;">
                                                            Gambar belum diupdate
                                                        </div>
                                                    @endif

                                                </a>

                                            </div>
                                            <div class="content">
                                                <span class="date">
                                                    <img src="assets/img/icons/calendar.svg" alt="" class="injectable">
                                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                                </span>
                                                <h2 class="title">
                                                    <a href="{{ route('berita.detailshow', $item->id) }}">
                                                        {{ $item->judul }}
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>

                                @include('frontend.A00_new.01_halamanutama.newpaginations')

                            </div>
                            <div class="sidebar__widget">
                                <div class="sidebar__contact">
                                <a href="https://wa.me/6281321455855" target="_blank" class="tg-btn tg-btn-three">
                                        Kontak Kami
                                        <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable">
                                    </a>

                                    <div class="shape">
                                        <img src="/assets/assets/img/images/sidebar_contact_shape01.svg" alt="shape" class="rotateme">
                                        <img src="/assets/assets/img/images/sidebar_contact_shape02.svg" alt="shape" class="alltuchtopdown">
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')
