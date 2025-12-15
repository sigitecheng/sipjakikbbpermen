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
        <!-- blog-post-area -->
        <section class="blog__post-area-five section-py-130" style="margin-top: -75px;">
@include('frontend.A00_new.01_halamanutama.newjudul')
            <div class="container">
                <div class="row">
                    <div class="col-70 order-0 order-lg-2">
                       @foreach ($data as $item)
<div class="inner-blog-post-wrap">
    <div class="blog__post-item-five">

        {{-- ========== GAMBAR BERITA ========== --}}
        <div class="blog__post-thumb-five">

            @php
                $path = 'storage/' . $item->gambar;
                $isStorage = $item->gambar && file_exists(public_path($path));
            @endphp

            @if ($isStorage)
                <a href="{{ route('berita.detailshow', $item->id) }}">
                    <img src="{{ asset($path) }}"
                         alt="Gambar Berita"
                         style="width:100%; max-height:300px; object-fit:cover;" loading="lazy">
                </a>
            @elseif($item->gambar)
                <a href="{{ route('berita.detailshow', $item->id) }}">
                    <img src="{{ asset($item->gambar) }}"
                         alt="Gambar Berita"
                         style="width:100%; max-height:300px; object-fit:cover;" loading="lazy">
                </a>
            @else
                <p style="color:#777;">Gambar belum diupdate</p>
            @endif

        </div>

        {{-- ========== KONTEN BERITA ========== --}}
        <div class="blog__post-content-five">

            <div class="blog__post-meta">
                <ul class="list-wrap">
                    <li>
                        <img src="/assets/img/icons/calendar.svg" alt="" class="injectable">
                        {{ \Carbon\Carbon::parse($item->tanggal)->format('M d, Y') }}
                    </li>
                    <li>
                        <img src="/assets/img/icons/user.svg" alt="" class="injectable">
                        Ditulis oleh: {{ $item->user->name ?? 'Unknown' }}
                    </li>
                </ul>
            </div>

            <h2 class="title">
                <a href="{{ route('berita.detailshow', $item->id) }}">
                    {{ $item->judul }}
                </a>
            </h2>
<p>{!! Str::limit($item->keteranganberita, 150) !!}</p>

            {{-- <p>{{ Str::limit($item->keteranganberita, 150) }}</p> --}}

            <a href="{{ route('berita.detailshow', $item->id) }}"
               class="tg-btn tg-btn-four tg-btn-six">
                Lihat Selengkapnya
                <img src="/assets/img/icons/right_arrow02.svg" alt="" class="injectable">
            </a>
        </div>

    </div>
</div>
@endforeach

                        @include('frontend.A00_new.01_halamanutama.newpaginations')

                    </div>
                    <div class="col-30">
                        <aside class="blog__sidebar">
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
                              @foreach ($data->sortByDesc('created_at')->take(10) as $item)
                                    <div class="rc-post-wrap">
                                        <div class="rc-post-item">

                                            <div class="thumb">
                                                <a href="{{ route('berita.detailshow', $item->id) }}">

                                                    @php $path = public_path('storage/' . $item->gambar); @endphp

                                                    @if($item->gambar && file_exists($path))
                                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width:100%; height:auto;">
                                                    @else
                                                        <img src="{{ asset($item->gambar) }}" alt="" style="width:100%; height:auto;">
                                                    @endif
                                                </a>
                                            </div>

                                            <div class="content">

                                                <span class="date">
                                                    <img src="/assets/img/icons/calendar.svg" alt="" class="injectable">
                                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('M d, Y') }}
                                                </span>

                                                <h2 class="title" style="font-size: 16px;">
                                                    <a href="{{ route('berita.detailshow', $item->id) }}">
                                                        {!! $item->judul !!}
                                                    </a>
                                                </h2>

                                            </div>

                                        </div>
                                        <br>
                                    </div>
                                    @endforeach

                            </div>

                            {{-- <div class="sidebar__widget">
                                <h4 class="sidebar__widget-title">Categories</h4>
                                <div class="bs-cat-list">
                                    <ul class="list-wrap">
                                        <li><a href="blog.html">Business Strategy <span>(02)</span></a></li>
                                        <li><a href="blog.html">Finance Advisory <span>(08)</span></a></li>
                                        <li><a href="blog.html">Marketing Analysis <span>(05)</span></a></li>
                                        <li><a href="blog.html">Investment Planning <span>(02)</span></a></li>
                                        <li><a href="blog.html">Data Analysis <span>(11)</span></a></li>
                                    </ul>
                                </div>
                            </div> --}}

                            {{-- <div class="sidebar__widget">
                                <div class="sidebar__contact">
                                  <a href="https://wa.me/6281321455855" target="_blank" class="tg-btn tg-btn-three">
                                        Kontak Kami <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable">
                                    </a>

                                    <div class="shape">
                                        <img src="/assets/assets/img/images/sidebar_contact_shape01.svg" alt="shape" class="rotateme">
                                        <img src="/assets/assets/img/images/sidebar_contact_shape02.svg" alt="shape" class="alltuchtopdown">
                                    </div>
                                </div>
                            </div> --}}
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-post-area-end -->


    </main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')
