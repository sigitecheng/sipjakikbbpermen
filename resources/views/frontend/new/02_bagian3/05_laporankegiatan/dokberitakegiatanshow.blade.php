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
                <p>Sistem Informasi <br> Pembina Jasa Konstruksi</p>
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
<section class="breadcrumb__area">
            <div class="breadcrumb__bg" data-background="/assets/assets/img/bg/perbaikanbanner.png"></div>
                   </section>

                   <section class="about__area-six section-py-200">
            <div class="container">
                {{-- @foreach ($data->sortByDesc('created_at')->take(1) as $item) --}}
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 order-0 order-lg-2">
                        <div class="about__img-six">
                                               <div style="margin-top: 10px;">
                                @php
                                    // Cek ekstensi file
                                    $ext = strtolower(pathinfo($databerita->gambar, PATHINFO_EXTENSION));
                                    $isImage = in_array($ext, ['jpg','jpeg','png','gif','webp']);
                                @endphp

                                @if($databerita->gambar && $isImage && file_exists(public_path('storage/' . $databerita->gambar)))
                                    <!-- Menampilkan gambar dari storage -->
                                    <img src="{{ asset('storage/' . $databerita->gambar) }}"
                                        alt="Preview Gambar"
                                        style="width: 100%; max-height: 400px; object-fit: contain; border: 1px solid #ccc;">

                                @elseif($databerita->gambar && $isImage)
                                    <!-- Menampilkan gambar dari luar storage -->
                                    <img src="{{ asset($databerita->gambar) }}"
                                        alt="Preview Gambar"
                                        style="width: 100%; max-height: 400px; object-fit: contain; border: 1px solid #ccc;">

                                @else
                                    <!-- Placeholder jika tidak ada / bukan gambar -->
                                    <p>Data belum diupdate</p>
                                @endif
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-six">



<div class="section__title mb-10">
                                <span class="sub-title">Berita Kegiatan Sertifikasi Tenaga Kerja</span>
                                <h2 class="title">{{$databerita->kegiatanjaskon->judul_kegiatan}}</h2>
                            </div>
                       <p>{{ \Carbon\Carbon::parse($databerita->tanggal)->translatedFormat('d F Y') }}</p>
                     @php
    $full = $databerita->keterangan_berita ?? '';
    $plain = strip_tags($full);
    $isLong = mb_strlen($plain) > 400;
    $short = \Illuminate\Support\Str::limit($plain, 400, '');
@endphp

<div class="berita-box" style="margin-bottom: 1rem;">
    <!-- Ringkasan -->
    <p class="short-text" style="display: block;">
        {{ $short }}@if($isLong)...@endif
    </p>

    <!-- Isi penuh -->
    <div class="full-text" style="display: none;">
        {!! $full !!}
    </div>

    @if($isLong)
        <button type="button" class="toggle-btn"
                style="margin-top:6px; background:#FFD699; color:#000000; padding:6px 10px; border:none; border-radius:6px;">
            ... Selengkapnya
        </button>
    @endif
</div>

<script>
document.addEventListener('click', function(e) {
    if (!e.target.matches('.toggle-btn')) return;

    const btn = e.target;
    const box = btn.closest('.berita-box');
    const shortText = box.querySelector('.short-text');
    const fullText = box.querySelector('.full-text');

    if (fullText.style.display === "none") {
        // Buka
        shortText.style.display = "none";
        fullText.style.display = "block";
        btn.textContent = "Tutup";
    } else {
        // Tutup
        fullText.style.display = "none";
        shortText.style.display = "block";
        btn.textContent = "... Selengkapnya";
    }
});
</script>


                        </div>
                    </div>
                </div>


                {{-- @endforeach --}}
            </div>
        </section>
        <!-- about-area-end -->

        <!-- services-area -->
        <section class="services__area-five services__bg-three section-py-130" data-background="/assets/assets/img/bg/h6_services_bg.jpg">
            <div class="container">
                <div class="row justify-content-center mb-50">
                    <div class="col-lg-6">
                        <div class="section__title text-center">
                            <span class="sub-title">Dok Berita Sertifikasi Tenaga Kerja Konstruksi </span>
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
                              <a href="#">
    @php
        $ext = strtolower(pathinfo($item->gambar, PATHINFO_EXTENSION));
        $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']);
    @endphp

    @if($item->gambar && $isImage && file_exists(public_path('storage/' . $item->gambar)))
        <!-- Gambar dari storage -->
        <img src="{{ asset('storage/' . $item->gambar) }}"
             alt="Gambar"
             style="width: 100%; max-height: 400px; object-fit: cover; border:1px solid #ccc; border-radius:6px;">

    @elseif($item->gambar && $isImage)
        <!-- Gambar dari luar storage -->
        <img src="{{ asset($item->gambar) }}"
             alt="Gambar"
             style="width: 100%; max-height: 400px; object-fit: cover; border:1px solid #ccc; border-radius:6px;">

    @else
        <p>Data belum diupdate</p>
    @endif
</a>

                                <div class="services__icon-six">
                                    <i class="flaticon-health-insurance"></i>
                                </div>
                            </div>
                          <p>
                                {{ \Illuminate\Support\Str::words(strip_tags($item->keterangan_berita), 5, '...') }}
                            </p>

                            <div class="services__content-six">
                                {{-- <h3 class="title"><a href="services-details.html">Life Insurance</a></h3> --}}
                                <p>{{$item->judul}}</p>
                       <a href="{{ route('berita.detailskegiatan', $item->id) }}" class="tg-btn tg-btn-seven">
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
