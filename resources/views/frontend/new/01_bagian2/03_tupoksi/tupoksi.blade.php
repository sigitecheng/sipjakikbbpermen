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
    height: 215px;
">
</section>

        <!-- contact-map -->
        <div class="contact-map" style="margin-top: -75px;">
       <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.708872415356!2d107.5077697!3d-6.8426327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e30b6d2e588f%3A0x771927a54beabd65!2sDINAS%20PUTR%20Kabupaten%20Bandung%20Barat!5e0!3m2!1sid!2sid!4v1732690000000!5m2!1sid!2sid"
  width="600"
  height="450"
  style="border:0;"
  allowfullscreen=""
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade">
</iframe>


            </div>
        <!-- contact-map-end -->

        <!-- contact-area -->
        <section class="contact__area">
            <div class="container">
    <div class="row">

        @foreach ($data as $item)
        <div class="col-12 mb-4">
            <div class="p-4 position-relative"
                style="
                    background: linear-gradient(135deg, #f8f9fa, #eef2f7);
                    border-left: 6px solid #0d6efd;
                    border-radius: 14px;
                    box-shadow: 0 3px 12px rgba(0,0,0,0.06);
                ">

                {{-- HEADER --}}
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div style="
                        width:44px;
                        height:44px;
                        border-radius:12px;
                        background:#0d6efd;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        color:white;
                        box-shadow:0 3px 8px rgba(13,110,253,.35);
                    ">
                        <i class="bi bi-list-check"></i>
                    </div>

                    <div>
                        <div style="font-family:'Poppins'; font-size:18px; font-weight:700;">
                            {{ $item->judul ?? 'Judul belum diisi' }}
                        </div>
                        <div style="font-size:13px; color:#6c757d;">
                            Uraian Tugas & Dasar Peraturan
                        </div>
                    </div>
                </div>

                {{-- LIST TUGAS --}}
                <ul style="
                    font-size:14px;
                    line-height:1.8;
                    padding-left:18px;
                ">
                    <li><strong>Penyusunan Program:</strong> Rencana kerja dan kegiatan bina jasa konstruksi sebagai pedoman kerja tahunan.</li>
                    <li><strong>Kebijakan Teknis:</strong> Menyusun bahan kebijakan sesuai peraturan perundang-undangan sebagai kajian pimpinan.</li>
                    <li><strong>Sistem Informasi:</strong> Pelaksanaan sistem informasi jasa konstruksi untuk efisiensi.</li>
                    <li><strong>Pengawasan & Pembinaan:</strong> Pengembangan badan usaha, pasar jasa konstruksi, dan evaluasi penyelenggaraan.</li>
                    <li><strong>Penyuluhan & Bimtek:</strong> Pelatihan, penyuluhan, dan bimtek terkait jasa konstruksi.</li>
                    <li><strong>Laporan & Evaluasi:</strong> Monitoring dan evaluasi kegiatan pembinaan.</li>
                </ul>

                {{-- PERATURAN --}}
                <div class="mt-3">
                    @if($item->peraturan && file_exists(public_path('storage/' . $item->peraturan)))
                        <embed
                            src="{{ asset('storage/' . $item->peraturan) }}"
                            type="application/pdf"
                            style="
                                width:100%;
                                height:400px;
                                border:none;
                                border-radius:10px;
                                box-shadow:0 2px 8px rgba(0,0,0,.08);
                            "
                        />
                    @elseif($item->peraturan)
                        <embed
                            src="{{ asset($item->peraturan) }}"
                            type="application/pdf"
                            style="
                                width:100%;
                                height:400px;
                                border:none;
                                border-radius:10px;
                                box-shadow:0 2px 8px rgba(0,0,0,.08);
                            "
                        />
                    @else
                        <div class="alert alert-warning mb-0">
                            <i class="bi bi-exclamation-circle me-1"></i>
                            Data peraturan belum diupdate
                        </div>
                    @endif
                </div>

                {{-- KETERANGAN --}}
                <div class="mt-3" style="font-size:14px; text-align:justify;">
                    <strong>Keterangan:</strong><br>
                    {!! $item->keterangan ?? '<span class="text-muted">Keterangan belum diupdate</span>' !!}
                </div>

                {{-- WATERMARK --}}
                <img src="/storage/logo/sipjakikbb.png"
                    style="
                        position:absolute;
                        right:20px;
                        bottom:20px;
                        width:90px;
                        opacity:.12;
                    ">
            </div>
        </div>
        @endforeach

    </div>
</div>

        </section>
        <!-- contact-area-end -->

        <!-- cta-area -->
        {{-- <section class="cta__area-two">
            <div class="container">
                <div class="cta__inner-wrap-two">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="cta__content-three">
                                <h2 class="title">Let’s Request a Schedule For Free Consultation</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cta__content-right">
                                <div class="cta__contact">
                                    <div class="icon">
                                        <i class="flaticon-telephone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call For More Info</span>
                                        <a href="tel:0123456789">+123 8989 444</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="tg-btn tg-btn-three tg-border-btn ">Read More <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                    <div class="cta__shape-three">
                        <img src="assets/img/images/h2_cta_shape.svg" alt="shape">
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- cta-area-end -->


    </main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')
