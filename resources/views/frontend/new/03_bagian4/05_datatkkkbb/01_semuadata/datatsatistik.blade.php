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

            <div class="row">

    <!-- FILTER -->
    <div class="col-lg-12 mb-4">
        <label style="font-weight:600;font-family:Poppins;">Filter Berdasarkan Jenjang:</label>
        <select id="filterJenjang" class="form-select" style="max-width:300px;">
            <option value="">Semua Jenjang</option>
            @foreach($listJenjang as $j)
                <option value="{{ $j->id }}">{{ $j->jenjang }}</option>
            @endforeach
        </select>
    </div>

    <!-- CHART UTAMA -->
    <div class="col-lg-12 mb-4">
        <div style="background:linear-gradient(135deg,#f8f9fa,#eef2f7);border-left:6px solid #0d6efd;border-radius:14px;box-shadow:0 4px 12px rgba(0,0,0,.06);padding:25px;">
            <h5 style="font-weight:600;">Grafik Statistik Tenaga Kerja</h5>
            <div id="chart-global" style="height:500px;"></div>
        </div>
    </div>

    @php
    $cards = [
        [
            'title' => 'Jabatan Kerja',
            'id'    => 'jabatan',
            'data'  => $statJabatanKerja,
            'type'  => 'string',
            'field' => 'keterampilan'
        ],
        [
            'title' => 'Jenjang Pendidikan',
            'id'    => 'jenjang',
            'data'  => $statJenjangPendidikan,
            'type'  => 'relation',
            'field' => 'jenjangpendidikan'
        ],
        [
            'title' => 'Tahun Bimbingan Teknis',
            'id'    => 'tahun',
            'data'  => $statTahun,
            'type'  => 'relation',
            'field' => 'tahunpilihan'
        ],
        [
            'title' => 'Kecamatan',
            'id'    => 'kecamatan',
            'data'  => $statKecamatan,
            'type'  => 'relation',
            'field' => 'kecamatankbb'
        ],
    ];
@endphp

@foreach ($cards as $c)
    <div class="col-lg-6 mb-4 d-flex">
        <div
            style="
                background: linear-gradient(135deg, #f8f9fa, #eef2f7);
                border-left: 6px solid #0d6efd;
                border-radius: 14px;
                box-shadow: 0 4px 12px rgba(0,0,0,.06);
                padding: 22px;
                width: 100%;
                height: 100%;
            "
        >

            <!-- JUDUL CARD -->
            <h5 style="font-weight:600; margin-bottom:14px;">
                {{ $c['title'] }}
            </h5>

            <!-- LIST DATA -->
            <ul
                id="list-{{ $c['id'] }}"
                style="padding-left:18px; margin:0;"
            >
                @forelse ($c['data'] as $item)
                    <li
                        data-jenjang="{{ $item->jenjang_id ?? '' }}"
                        style="margin-bottom:6px; font-size:14px; line-height:1.6;"
                    >
                        @if ($c['type'] === 'string')
                            {{ $item->{$c['field']} ?? '-' }}
                        @else
                            {{ optional($item->{$c['field']})->{$c['field']} ?? '-' }}
                        @endif
                        : {{ $item->total }} Tenaga Kerja
                    </li>
                @empty
                    <li style="color:#999; font-size:13px;">
                        Tidak ada data
                    </li>
                @endforelse
            </ul>

            <!-- CHART -->
            <div
                id="chart-{{ $c['id'] }}"
                style="height:300px; margin-top:15px;"
            ></div>

        </div>
    </div>
@endforeach


</div>






        </div>
        <br><br>
    </div>
</section>


</main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    google.charts.load('current', { packages: ['corechart'] });
    google.charts.setOnLoadCallback(drawAllCharts);

    const filter = document.getElementById('filterJenjang');
    if (filter) {
        filter.addEventListener('change', drawAllCharts);
    }

    function drawAllCharts() {
        let jenjang = filter ? filter.value : '';

        drawChartFromList('list-jabatan', 'chart-jabatan', 'Distribusi Jabatan Kerja', jenjang);
        drawChartFromList('list-jenjang', 'chart-jenjang', 'Distribusi Jenjang Pendidikan', jenjang);
        drawChartFromList('list-tahun', 'chart-tahun', 'Distribusi Tahun Bimtek', jenjang);
        drawChartFromList('list-kecamatan', 'chart-kecamatan', 'Distribusi Kecamatan', jenjang);

        // CHART UTAMA (GLOBAL)
        drawChartFromList('list-jabatan', 'chart-global', 'Statistik Tenaga Kerja', jenjang);
    }

    function drawChartFromList(listId, chartId, title, jenjang) {

        const list = document.getElementById(listId);
        const chartContainer = document.getElementById(chartId);

        // 🔒 pengaman wajib
        if (!list || !chartContainer) {
            console.warn(`Element ${listId} atau ${chartId} tidak ditemukan`);
            return;
        }

        let dataArray = [['Kategori', 'Total']];

        list.querySelectorAll('li').forEach(li => {
            let liJenjang = li.dataset.jenjang || '';

            if (!jenjang || liJenjang === jenjang) {
                let parts = li.textContent.split(':');
                if (parts.length === 2) {
                    let label = parts[0].trim();
                    let value = parseInt(parts[1].replace(/\D/g, ''));
                    if (!isNaN(value)) {
                        dataArray.push([label, value]);
                    }
                }
            }
        });

        if (dataArray.length <= 1) {
            chartContainer.innerHTML =
                '<p style="text-align:center;color:#999;margin-top:30px;">Tidak ada data</p>';
            return;
        }

        let data = google.visualization.arrayToDataTable(dataArray);

        let options = {
            title: title,
            is3D: true,
            chartArea: { width: '85%', height: '80%' },
            legend: { position: 'right' }
        };

        new google.visualization.PieChart(chartContainer).draw(data, options);
    }

});
</script>
