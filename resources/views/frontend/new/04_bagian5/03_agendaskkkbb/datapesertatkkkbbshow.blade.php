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

<section class="blog__post-area-five section-py-130" style="margin-top: -75px;">
@include('frontend.A00_new.01_halamanutama.newjudul')
    <div class="container">
        <div class="row justify-content-center">

            <!-- FILTER + SEARCH FULL WIDTH (STYLE SERAGAM MODERN) -->
<div class="col-12 mb-4">
    <div class="w-100 d-flex flex-wrap align-items-center justify-content-between gap-3 p-4"
        style="
            background: linear-gradient(135deg, #f8f9fa, #eef2f7);
            border-left: 6px solid #0d6efd;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.06);
        ">

        <!-- SEARCH BAR -->
        <div class="d-flex align-items-center px-3 py-2 rounded"
            style="
                border: 1px solid #d0d0d5;
                flex: 1;
                min-width: 280px;
                background: white;
                height: 44px;
                box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);
            ">
            <input type="text"
                id="searchMaterial"
                placeholder="Cari Peserta  ?"
                oninput="searchMaterial()"
                class="w-100 border-0 outline-none"
                style="
                    font-family: 'Poppins';
                    background: transparent;
                    font-size: 14px;
                    color: #333;
                " />

            <button type="button" class="ms-2"
                style="border:none; background:none; color:#0d6efd;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 18 18" fill="none">
                    <path d="M17 17L13.5247 13.5247M15.681 8.3405C15.681
                    12.3945 12.3945 15.681 8.3405 15.681C4.28645 15.681
                    1 12.3945 1 8.3405C1 4.28645 4.28645 1 8.3405 1C12.3945
                    1 15.681 4.28645 15.681 8.3405Z"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>



        <!-- TAMPILKAN DATA -->
        <div class="d-flex align-items-center gap-2" style="flex: 1; min-width: 200px;">
            <label style="
                font-family: 'Poppins';
                font-weight: 600;
                white-space: nowrap;
                color: #0d6efd;
            ">
                Tampilkan Data :
            </label>

            <select id="entries" onchange="updateEntries()"
                class="form-select"
                style="
                    font-family: 'Poppins';
                    height: 44px;
                    border-radius: 8px;
                    box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);
                ">
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
            </select>
        </div>

    </div>
</div>



        </div>
    </div>
</section>

<script>
    function updateEntries() {
        let selectedValue = document.getElementById("entries").value;
        let url = new URL(window.location.href);
        url.searchParams.set("perPage", selectedValue);
        window.location.href = url.toString();
    }
</script>



        <!-- cart-area -->
        <div class="cart__area" style="margin-top:-75px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
<table class="table cart__table">
    <thead>
        <tr style="background:#f8f9fa;">
            <th style="text-align:center; font-weight:600; color:#0d6efd;"><i class="bi bi-list-ol me-1 text-primary"></i>No</th>
            <th style="text-align:center; font-weight:600; color:#0d6efd;"><i class="bi bi-person-fill me-1 text-primary"></i>Nama Lengkap</th>
            <th style="text-align:center; font-weight:600; color:#0d6efd;"><i class="bi bi-mortarboard me-1 text-primary"></i>Jenjang</th>
            {{-- <th style="text-align:center; font-weight:600; color:#0d6efd;"><i class="bi bi-credit-card me-1 text-primary"></i>NIK</th> --}}
            <th style="text-align:center; font-weight:600; color:#0d6efd;"><i class="bi bi-gender-ambiguous me-1 text-primary"></i>Jenis Kelamin</th>
            {{-- <th style="text-align:center; font-weight:600; color:#0d6efd;"><i class="bi bi-calendar me-1 text-primary"></i>Tanggal Lahir</th>
            <th style="text-align:center; font-weight:600; color:#0d6efd;"><i class="bi bi-telephone me-1 text-primary"></i>Telepon</th>
            <th style="text-align:center; font-weight:600; color:#0d6efd;"><i class="bi bi-building me-1 text-primary"></i>Instansi</th> --}}
            {{-- <th style="text-align:center; font-weight:600; color:#0d6efd;"><i class="bi bi-award me-1 text-primary"></i>Sertifikat</th> --}}
            {{-- <th style="text-align:center; font-weight:600; color:#0d6efd;"><i class="bi bi-check2-circle me-1 text-primary"></i>Verifikasi</th> --}}
        </tr>
    </thead>
    <tbody>
        @forelse($datapeserta as $peserta)
            <tr>
                <td style="text-align:center;">{{ $loop->iteration }}</td>
                <td>{{ $peserta->namalengkap ?? '-' }}</td>
                <td style="text-align:center;">{{ optional($peserta->jenjangpendidikan)->jenjangpendidikan ?? '-' }}</td>
                {{-- <td style="text-align:center;">{{ $peserta->nik ?? '-' }}</td> --}}
                <td style="text-align:center;">{{ $peserta->jeniskelamin ?? '-' }}</td>
                {{-- <td style="text-align:center;">{{ $peserta->tanggallahir ? \Carbon\Carbon::parse($peserta->tanggallahir)->translatedFormat('d F Y') : '-' }}</td>
                <td style="text-align:center;">{{ $peserta->notelepon ?? '-' }}</td>
                <td style="text-align:center;">{{ $peserta->instansi ?? '-' }}</td> --}}
                {{-- <td style="text-align:center;">{{ $peserta->sertifikat ?? '-' }}</td> --}}
             {{-- <td style="text-align:center;">
    @if($peserta->verifikasi === null)
        <span class="badge bg-warning">
            <i class="bi bi-hourglass-split me-1"></i> Belum Diverifikasi
        </span>
    @elseif($peserta->verifikasi === 'lolos')
        <span class="badge bg-success">
            <i class="bi bi-check-circle me-1"></i> Lolos
        </span>
    @elseif($peserta->verifikasi === 'gugur')
        <span class="badge bg-danger">
            <i class="bi bi-x-circle me-1"></i> Tidak Lolos
        </span>
    @endif
</td> --}}

            </tr>
        @empty
            <tr>
                <td colspan="10" class="text-center" style="padding:30px; font-weight:600; font-family:'Poppins'; color:#6c757d; background-color:#f8f9fa; border:2px dashed #ced4da; border-radius:12px;">
                    <i class="bi bi-folder-x me-1" style="font-size:20px; color:#dc3545;"></i>Data Tidak Ditemukan !!
                </td>
            </tr>
        @endforelse
    </tbody>
</table>


{{-- @include('frontend.A00_new.01_halamanutama.newpaginations') --}}

<br><br>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')


<script>
function searchMaterial() {
    let input = document.getElementById("searchMaterial").value;

    fetch(`/datapesertapelatihan?search=${encodeURIComponent(input)}`)
        .then(response => response.text())
        .then(html => {
            let parser = new DOMParser();
            let doc = parser.parseFromString(html, "text/html");
            let newTableBody = doc.querySelector("#tableBody").innerHTML;
            document.querySelector("#tableBody").innerHTML = newTableBody;
        })
        .catch(error => console.error("Error fetching search results:", error));
}
</script>
