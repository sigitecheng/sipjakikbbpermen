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

<section class="slider__area">
    <div class="swiper-container slider-active">
        <div class="swiper-wrapper">

@foreach($databeranda as $item)
    <div class="swiper-slide slider__bg"
        @if($item->header && file_exists(public_path('storage/' . $item->header)))
            style="background-image:url('{{ asset('storage/' . $item->header) }}');
                   background-size:cover; background-position:center;"
        @elseif($item->header)
            style="background-image:url('{{ asset($item->header) }}');
                   background-size:cover; background-position:center;"
        @else
            style="background:#ccc; background-size:cover; background-position:center;"
        @endif
    >

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="slider__content">

                        {{-- Judul --}}
                        <h1 class="title">
                            {{ $item->judul ?? 'Judul belum diupdate' }}
                        </h1>

                        {{-- Deskripsi default --}}
                        <p>
                            Platform digital untuk monitoring dan pembinaan konstruksi di Kabupaten Bandung Barat.
                        </p>

                        {{-- Tombol WA --}}
                        <a href="https://wa.me/6281321455855"
                           target="_blank"
                           class="tg-btn tg-btn-four">
                            Kontak Kami
                        </a>

                    </div>
                </div>
            </div>
        </div>

        {{-- Jika header kosong, beri teks info --}}
        @if(!$item->header)
            <div style="background: rgba(0,0,0,0.5); color:white; padding:8px; text-align:center;">
                Gambar header belum diupdate
            </div>
        @endif

    </div>
@endforeach




        </div>

        <div class="slider__nav">
            <button class="slider-button-prev">‹</button>
            <button class="slider-button-next">›</button>
        </div>
    </div>
</section>



        <!-- project-area -->
        <section class="project__area-five section-py-130">
            {{-- <div class="section__line-wrap">
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
            </div> --}}
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section__title mb-50 mb-md-30">
                            {{-- <span class="sub-title">Finished Projects</span> --}}
                            <h2 class="title">Berita Jasa Konstruksi <br> Kabupaten Bandung Barat</h2>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="section__content mb-50">
                            <p>Our power of choice is untrammelled and when nothing tsbeing able to do what we like best every pleasure.</p>
                        </div>
                    </div> --}}
                </div>

                <div class="swiper-container fix project-active-four">
                    <div class="swiper-wrapper">

                 @foreach ($data as $item)
    <div class="swiper-slide">
        <div class="project__item-five">
            <div class="project__thumb-five" style="width:100%; height:250px; overflow:hidden; border-radius:8px;">
                @php
                    $image = $item->gambar && file_exists(public_path('storage/' . $item->gambar))
                                ? asset('storage/' . $item->gambar)
                                : ($item->gambar ? asset($item->gambar) : asset('storage/default_project_img.jpg'));
                @endphp
                <a href="project-details.html">
                    <img src="{{ $image }}"
                         alt="{{ $item->judul ?? 'Project Image' }}"
                         style="width:100%; height:100%; object-fit:cover;"
                         loading="lazy">
                </a>
            </div>

            <div class="project__content-five">
                <span style="color: black;">{{ $item->judul ?? 'Judul Default' }}</span>
                {{-- <h6 class="title">
                    <a href="project-details.html">{{ $item->judul ?? 'Default Project Title' }}</a>
                </h6> --}}
                <a href="project-details.html" class="arrow tg-btn tg-btn-four">
                    <img src="/assets/assets/img/icons/right_arrow02.svg" alt="" class="injectable">
                </a>
            </div>
        </div>
    </div>
@endforeach


                    </div>
                </div>
                <div class="view__all-btn text-center mt-60">
                    <a href="#" class="tg-btn tg-btn-four tg-btn-five">Lihat Semua Berita<img src="/assets/assets/img/icons/right_arrow02.svg" alt="" class="injectable"></a>
                </div>
            </div>
            {{-- <div class="project__shape">
                <img src="/assets/assets/img/project/project_shape.svg" alt="shape" class="rotateme">
            </div> --}}
        </section>
        <!-- project-area-end -->

        <!-- slider-area-end -->

        <!-- marquee-area -->
        <section class="marquee__area-three">
            <div class="slider__marquee clearfix marquee-wrap-two marquee-wrap-four">
                <div class="marquee_mode marquee__group">
                    <h6 class="marquee__item marquee__item-two">
                        <a href="#"><img src="/assets/assets/img/icons/star.svg" alt="" class="injectable">Sistem Informasi Pembina Jasa Konstruksi DPUTR Kabupaten Bandung Barat</a>
                    </h6>

                </div>
            </div>
        </section>
        <!-- marquee-area-end -->


        <!-- services-area -->
        <section class="services__area-four services__bg-two section-py-130" data-background="/assets/assets/img/bg/h5_services_bg.webp">
            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-6">
    <div class="section__title mb-50 mb-md-30">
        <h2 class="title">Kegiatan Sertifikasi<br>Jasa Konstruksi</h2>
    </div>
</div>

<div class="col-lg-6">
    <div class="section__content mb-50">
    <p>
    Kegiatan sertifikasi yang bertujuan meningkatkan kompetensi, kualitas, dan profesionalisme tenaga kerja di bidang jasa konstruksi.
</p>


    </div>
</div>

                </div>

             @foreach ($data_jaskon as $item)
<div class="services__item-five" style="margin-bottom:30px;">

    <!-- Gambar dokumentasi FULL TANPA TERPOTONG -->
    <div class="services__thumb-five mb-3" style="overflow:hidden; position:relative;">
        <div class="scroll-container" style="
            display:flex;
            gap:10px;
            overflow-x:auto;
            white-space:nowrap;
            align-items:center;
        ">

            @foreach(range(1, 20) as $i)
                @php $field = 'berita' . $i; @endphp

                @if(!empty($item->$field))

                    @php
                        $imgPath = file_exists(public_path('storage/' . $item->$field))
                            ? asset('storage/' . $item->$field)
                            : asset($item->$field);
                    @endphp

                    <img src="{{ $imgPath }}" alt="Berita {{ $i }}"
                        style="
                            height:150px;
                            width:auto;
                            object-fit:contain;
                            background:#fff;
                            border-radius:6px;
                            padding:2px;
                            flex-shrink:0;
                        "
                        loading="lazy">
                @endif

            @endforeach

        </div>
    </div>

    <!-- Judul & Alamat -->
    <div class="services__content-five text-center">
        <h2 class="title mb-1">
            <a href="/kegiatansertifikasi">{{ \Illuminate\Support\Str::words($item->judul_kegiatan, 10, '...') }}</a>
        </h2>
        <p class="text-muted">{{ $item->alamat_kegiatan }}</p>
    </div>

</div>
@endforeach


<!-- Auto Scroll -->
<script>
document.querySelectorAll('.scroll-container').forEach(container => {
    let scrollAmount = 0;
    const speed = 1;

    function scrollImages() {
        scrollAmount += speed;
        if (scrollAmount >= container.scrollWidth) scrollAmount = 0;
        container.scrollLeft = scrollAmount;
        requestAnimationFrame(scrollImages);
    }

    scrollImages();
});
</script>


                <div class="view__all-btn text-center mt-50">
                    <a href="#" class="tg-btn tg-btn-four tg-btn-five">Lihat Semua Kegiatan <img src="/assets/assets/img/icons/right_arrow02.svg" alt="" class="injectable"></a>
                </div>
            </div>
            <div class="services__shape-wrap-three">
                <img src="/assets/assets/img/services/h5_services_shape01.svg" alt="shape" class="alltuchtopdown">
                <img src="/assets/assets/img/services/h5_services_shape02.svg" alt="shape" class="alltuchtopdown">
            </div>
        </section>
        <!-- services-area-end -->


        <!-- blog-post-area -->
        {{-- <section class="blog__post-area-two blog__post-area-four section-py-130">
            <div class="container">
                <div class="row align-items-center">
                                <div class="col-lg-6">
                    <div class="section__title mb-50 mb-md-30">
                        <h2 class="title">Artikel Jakon <br> Kabupaten Bandung Barat</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__content mb-50">
                        <p>Temukan informasi terbaru seputar proyek konstruksi, pengawasan bangunan, dan inovasi pelayanan jasa konstruksi di Kabupaten Bandung Barat.</p>
                    </div>
                </div>

                </div>
                <div class="row gutter-y-20">
                    <div class="col-lg-6">
                        <div class="blog__post-item-two shine__animate-item">
                            <div class="blog__post-thumb-two shine__animate-link">
                                <a href="#"><img src="/assets/assets/img/blog/h5_blog_post01.jpg" alt=""></a>
                                <a href="#" class="blog__post-tag-two">Business</a>
                            </div>
                            <div class="blog__post-content-two">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <img src="/assets/assets/img/icons/calendar.svg" alt="" class="injectable"> Oct 21, 2025
                                        </li>
                                        <li>
                                            <img src="/assets/assets/img/icons/comment.svg" alt="" class="injectable">
                                            <a href="blog-details.html">Comment: 15</a>
                                        </li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Participate In Staff Meetings Dedicated
                                To Strategically Marketing</a></h2>
                                <div class="blog__post-author">
                                    <a href="blog-details.html"><img src="/assets/assets/img/images/testi_avatar01.png" alt="img"></a>
                                    <span>By <a href="blog-details.html">Doman Smith</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog__post-item-three shine__animate-item mb-20">
                            <div class="blog__post-thumb-three shine__animate-link">
                                <a href="blog-details.html"><img src="/assets/assets/img/blog/h5_blog_post02.jpg" alt=""></a>
                                <a href="blog.html" class="blog__post-tag-two">Business</a>
                            </div>
                            <div class="blog__post-content-three">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <img src="/assets/assets/img/icons/calendar.svg" alt="" class="injectable"> Oct 21, 2025
                                        </li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">How To Monitor Optimize Google Core Web Vitals</a></h2>
                                <p>Building areathing you need toter atching presence.</p>
                                <div class="blog__post-author">
                                    <a href="blog-details.html"><img src="/assets/assets/img/images/testi_avatar02.png" alt="img"></a>
                                    <span>By <a href="blog-details.html">Doman Smith</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="blog__post-item-three shine__animate-item">
                            <div class="blog__post-thumb-three shine__animate-link">
                                <a href="blog-details.html"><img src="/assets/assets/img/blog/h5_blog_post03.jpg" alt=""></a>
                                <a href="blog.html" class="blog__post-tag-two">Business</a>
                            </div>
                            <div class="blog__post-content-three">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <img src="/assets/assets/img/icons/calendar.svg" alt="" class="injectable"> Oct 21, 2025
                                        </li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">How To Monitor Optimize Google Core Web Vitals</a></h2>
                                <p>Building areathing you need toter atching presence.</p>
                                <div class="blog__post-author">
                                    <a href="blog-details.html"><img src="/assets/assets/img/images/testi_avatar03.png" alt="img"></a>
                                    <span>By <a href="blog-details.html">Doman Smith</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-post-area-end --> --}}
        <!-- choose-area -->

        {{-- <section class="choose__area-two section-py-130">
            <div class="section__line-wrap">
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 order-0 order-lg-2">
                        <div class="choose__img-wrap-two">
                            <div class="circle__wrap circle__wrap-two">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" viewBox="0 0 29 27" fill="none">
                                        <path d="M1.24669 25.5326L27.3173 2.42458M27.3173 2.42458L14.9937 1.68215M27.3173 2.42458L26.5748 14.7481" stroke="currentColor" stroke-width="2.18247" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>

                            </div>
                            <div class="mask__img" data-aos="fade-left" data-aos-delay="400">
                                <img src="/assets/assets/img/images/h5_choose_img.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="choose__content-two">
                            <div class="section__title mb-15">
                                <span class="sub-title">Why Choose Us</span>
                                <h2 class="title">Our goal is making your working process easier</h2>
                            </div>
                            <p>Transform your business with transforeive consulting solution We go beyond short-term fixes to deliver sustainable growth strategies that future-proof your enterprise.</p>
                            <div class="progress__wrap">
                                <div class="progress__item">
                                    <h6 class="title">Consulting</h6>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay=".2s" style="width: 50%"><span>50%</span></div>
                                    </div>
                                </div>
                                <div class="progress__item">
                                    <h6 class="title">Investment</h6>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="76" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay=".2s" style="width: 76%"><span>76%</span></div>
                                    </div>
                                </div>
                                <div class="progress__item">
                                    <h6 class="title">Project Completed Rate</h6>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay=".2s" style="width: 90%"><span>90%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- choose-area-end -->

        <!-- video-area -->
        {{-- <div class="video__area-three">
            <div class="section__line-wrap">
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
            </div>
            <div class="container">
                <div class="video__inner-wrap">
                    <div class="video__bg-three" data-background="/assets/assets/img/bg/h5_video_bg.webp"></div>
                    <div class="video__btn-three">
                        <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="play__btn-two popup-video">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="28" viewBox="0 0 22 28" fill="none">
                                <path d="M0 2.66333C0 1.081 1.75049 0.125316 3.08152 0.980974L20.7163 12.3176C21.941 13.1049 21.941 14.8951 20.7163 15.6824L3.08152 27.019C1.7505 27.8747 0 26.919 0 25.3367V2.66333Z" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                    <div class="video__shape">
                        <img src="/assets/assets/img/images/h5_video_shape01.svg" alt="shape" data-aos="fade-down-right" data-aos-delay="400">
                        <img src="/assets/assets/img/images/h5_video_shape02.svg" alt="shape" data-aos="fade-up-left" data-aos-delay="400">
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- video-area-end -->

        <!-- counter-area -->
        <section class="counter__area-four">
            <div class="section__line-wrap">
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
                <div class="line__item">
                    <span></span>
                </div>
            </div>
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-6">
                        <div class="counter__item-four">
                            <p>Tenaga Kerja</p>
                            <h2 class="count"><span class="odometer" data-count="1054"></span></h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter__item-four">
                            <p>BUJK</p>
                            <h2 class="count"><span class="odometer" data-count="471"></span></h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter__item-four">
                            <p>Profil Paket Pekerjaan</p>
                            <h2 class="count"><span class="odometer" data-count="2346"></span></h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter__item-four">
                            <p>Rantai Pasok</p>
                            <h2 class="count"><span class="odometer" data-count="500"></span>+</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter-area-end -->

        <!-- brand-area -->

    </main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')
