@include('frontend.A00_new.01_halamanutama.newheader')
@include('button')

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
<br>
        <section class="department-details-section";>
    <div class="container">
        <div class="row">

            <!-- BAGIAN GAMBAR PETA -->
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="department-details-imgbox">
                    <h4 class="department-details-title" style="font-size: 20px;">
                        Wilayah Administrasi Kabupaten Bandung Barat Provinsi Jawa Barat
                    </h4>

                    <!-- GANTI DENGAN GAMBAR PETA BANDUNG BARAT -->
                    <img src="/assets/icon/mapkabupatenbandungbarat.png" alt="Peta Bandung Barat">

                    <a href="#"></a>
                </div>
            </div>

            <!-- SIDEBAR -->
<div class="col-12 col-lg-4 col-xl-4">
    <div class="sidebar modern-sidebar"
        style="
            background: linear-gradient(135deg, #f8f9fa, #eef2f7);
            border-left: 6px solid #0d6efd;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
            padding: 20px;
        ">

        <div class="sidebar-widget-list-inner">
            <ul class="sidebar-menu-modern" style="list-style:none; padding:0; margin:0;">

                <li class="menu-title"
                    style="
                        display:flex;
                        justify-content: space-between;
                        align-items:center;
                        font-weight:700;
                        font-family:'Poppins';
                        color:#0d6efd;
                        font-size:16px;
                        margin-bottom:15px;
                    ">
                    <span>Data Statistika BUJK</span>
                    <i class="bi bi-bar-chart-fill"></i>
                </li>

                <li style="margin-bottom:12px;">
                    <a href="#" class="button-modern"
                        style="
                            display:flex;
                            align-items:center;
                            gap:10px;
                            padding:12px 16px;
                            background:#ffffff;
                            border-radius:10px;
                            box-shadow: 0 2px 6px rgba(0,0,0,0.06);
                            font-family:'Poppins';
                            font-weight:500;
                            color:#333;
                            text-decoration:none;
                        ">
                        <i class="bi bi-building-gear text-primary"></i>
                        Total Data Kontraktor : <strong>{{ $totalKontraktor }}</strong>
                    </a>
                </li>

                <li>
                    <a href="#" class="button-modern"
                        style="
                            display:flex;
                            align-items:center;
                            gap:10px;
                            padding:12px 16px;
                            background:#ffffff;
                            border-radius:10px;
                            box-shadow: 0 2px 6px rgba(0,0,0,0.06);
                            font-family:'Poppins';
                            font-weight:500;
                            color:#333;
                            text-decoration:none;
                        ">
                        <i class="bi bi-briefcase text-primary"></i>
                        Total Data Konsultasi Konstruksi : <strong>{{ $totalKonsultan }}</strong>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>


            <!-- BAGIAN GRAFIK -->
            <div class="col-lg-8">
                <div class="department-details-content-box">
                    <h4 style="font-size: 20px;" class="department-details-title">
                        Data Statistika BUJK Konstruksi & Konsultasi Konstruksi
                    </h4>

                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Jenis BUJK', 'Persentase'],
                                ['BUJK Konstruksi',  {{ $persenKontraktor }} ],
                                ['BUJK Konsultasi Konstruksi',   {{ $persenKonsultan }} ]
                            ]);

                            var options = {
                                title: 'Persentase BUJK Kontraktor & Konsultan',
                                is3D: true
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                        }
                    </script>

                    <div id="piechart" style="width: 900px; height: 500px;"></div>
                </div>
            </div>

            <!-- BAGIAN KETERANGAN -->
        <div class="col-lg-12">
    <div class="department-details-box"
        style="
            background: linear-gradient(135deg, #f8f9fa, #eef2f7);
            border-left: 6px solid #0d6efd;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
            padding: 25px;
        ">

        <p style="
            text-align: justify;
            font-family:'Poppins';
            font-size:15px;
            line-height:1.8;
            color:#333;
            margin:0;
        ">
            Data Statistika BUJK Kontraktor dan Konsultan Kabupaten Bandung Barat, Provinsi Jawa Barat ini memberikan gambaran menyeluruh mengenai jumlah, komposisi, serta sebaran Badan Usaha Jasa Konstruksi (BUJK) yang beroperasi di wilayah tersebut.
            <br><br>
            Pemahaman terhadap perkembangan jumlah BUJK setiap tahunnya membantu pemerintah daerah melakukan evaluasi kebijakan, menyusun strategi pembinaan usaha konstruksi, serta memastikan pemerataan kesempatan berusaha bagi seluruh pelaku industri konstruksi.
            <br><br>
            Penyediaan data statistika yang akurat dan transparan diharapkan mampu meningkatkan efektivitas perencanaan, pengawasan, serta kualitas layanan konstruksi di tingkat daerah.
        </p>
    </div>
</div>

        </div>
        <br><br>
    </div>
</section>


</main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')

