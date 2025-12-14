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




        <!-- cart-area -->
        <div class="cart__area" style="margin-top:25px;">
           <div class="container mb-4">
    <div class="row">
        <div class="col-12">

            <!-- CARD WRAPPER -->
            <div class="p-4"
                style="
                    background: linear-gradient(135deg, #f8f9fa, #eef2f7);
                    border-left: 6px solid #0d6efd;
                    border-radius: 12px;
                    box-shadow: 0 3px 10px rgba(0,0,0,0.06);
                ">

                <!-- TITLE -->
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div style="
                        width:42px;
                        height:42px;
                        border-radius:10px;
                        background:#0d6efd;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        color:white;
                        box-shadow: 0 3px 8px rgba(13,110,253,0.35);
                    ">
                        <i class="bi bi-cash-stack"></i>
                    </div>

                    <div>
                        <div style="
                            font-family:'Poppins';
                            font-size:18px;
                            font-weight:700;
                            color:#212529;
                        ">
                            SHST Kabupaten Bandung Barat
                        </div>

                        <div style="
                            font-family:'Poppins';
                            font-size:13px;
                            color:#6c757d;
                        ">
                            {{-- Informasi tarif berdasarkan jenis bangunan --}}
                        </div>
                    </div>
                </div>

<table class="table align-middle mb-0"
    style="
        font-family:'Poppins';
        background:white;
        border-radius:10px;
        overflow:hidden;
    ">

    <tbody>
        @forelse($data as $item)

        <!-- KABUPATEN -->
        <tr style="border-bottom:1px solid #eef1f5;">
            <td style="width:50px; text-align:center;">
                <i class="bi bi-geo-alt-fill text-primary fs-5"></i>
            </td>
            <td style="font-weight:600; color:#495057;">Kabupaten</td>
            <td style="width:10px; font-weight:600;">:</td>
            <td class="text-end fw-semibold text-dark">
                {{ $item->kabupaten ?? '-' }}
            </td>
        </tr>

        <!-- BANGUNAN KANTOR TIDAK SEDERHANA -->
        <tr style="border-bottom:1px solid #eef1f5;">
            <td class="text-center">
                <i class="bi bi-building text-warning fs-5"></i>
            </td>
            <td class="fw-semibold text-secondary">
                Bangunan Kantor Tidak Sederhana
            </td>
            <td class="fw-semibold">:</td>
            <td class="text-end fw-bold text-primary">
                Rp {{ number_format($item->bangunankantortidaksederhana ?? 0, 0, ',', '.') }},00
            </td>
        </tr>

        <!-- BANGUNAN KANTOR SEDERHANA -->
        <tr style="border-bottom:1px solid #eef1f5; background:#f9fafb;">
            <td class="text-center">
                <i class="bi bi-building text-warning fs-5"></i>
            </td>
            <td class="fw-semibold text-secondary">
                Bangunan Kantor Sederhana
            </td>
            <td class="fw-semibold">:</td>
            <td class="text-end fw-bold text-primary">
                Rp {{ number_format($item->bangunankantorsederhana ?? 0, 0, ',', '.') }},00
            </td>
        </tr>

        <!-- RUMAH NEGARA A -->
        <tr style="border-bottom:1px solid #eef1f5;">
            <td class="text-center">
                <i class="bi bi-house-door-fill text-success fs-5"></i>
            </td>
            <td class="fw-semibold text-secondary">
                Rumah Negara Tipe A
            </td>
            <td class="fw-semibold">:</td>
            <td class="text-end fw-bold text-primary">
                Rp {{ number_format($item->rumahnegaratipea ?? 0, 0, ',', '.') }},00
            </td>
        </tr>

        <!-- RUMAH NEGARA B -->
        <tr style="border-bottom:1px solid #eef1f5; background:#f9fafb;">
            <td class="text-center">
                <i class="bi bi-house-door-fill text-success fs-5"></i>
            </td>
            <td class="fw-semibold text-secondary">
                Rumah Negara Tipe B
            </td>
            <td class="fw-semibold">:</td>
            <td class="text-end fw-bold text-primary">
                Rp {{ number_format($item->rumahnegaratipeb ?? 0, 0, ',', '.') }},00
            </td>
        </tr>

        <!-- RUMAH NEGARA C/D/E -->
        <tr style="border-bottom:1px solid #eef1f5;">
            <td class="text-center">
                <i class="bi bi-house-fill text-success fs-5"></i>
            </td>
            <td class="fw-semibold text-secondary">
                Rumah Negara Tipe C / D / E
            </td>
            <td class="fw-semibold">:</td>
            <td class="text-end fw-bold text-primary">
                Rp {{ number_format($item->rumahnegaratipecde ?? 0, 0, ',', '.') }},00
            </td>
        </tr>

        <!-- PAGAR -->
        @php
            $pagar = [
                'pagarrumahdepan' => 'Pagar Rumah Depan',
                'pagarrumahbelakang' => 'Pagar Rumah Belakang',
                'pagarrumahsamping' => 'Pagar Rumah Samping',
                'pagarrumahnegaradepan' => 'Pagar Rumah Negara Depan',
                'pagarrumahnegarabelakang' => 'Pagar Rumah Negara Belakang',
                'pagarrumahnegarasamping' => 'Pagar Rumah Negara Samping',
            ];
        @endphp

        @foreach($pagar as $field => $label)
        <tr style="border-bottom:1px solid #eef1f5; background:#f9fafb;">
            <td class="text-center">
                <i class="bi bi-slash-circle-fill text-danger fs-5"></i>
            </td>
            <td class="fw-semibold text-secondary">{{ $label }}</td>
            <td class="fw-semibold">:</td>
            <td class="text-end fw-bold text-primary">
                Rp {{ number_format($item->$field ?? 0, 0, ',', '.') }},00
            </td>
        </tr>
        @endforeach

        @empty
        <tr>
            <td colspan="4" class="text-center py-4 text-danger fw-bold">
                <i class="bi bi-folder-x me-2"></i> Data Tidak Ditemukan
            </td>
        </tr>
        @endforelse
    </tbody>
</table>


            </div>
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

    fetch(`/satuanhargaalatkbb?search=${encodeURIComponent(input)}`)
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
