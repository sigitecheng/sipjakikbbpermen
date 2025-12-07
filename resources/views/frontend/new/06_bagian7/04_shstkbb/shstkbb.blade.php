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
            <div class="container">
                <div class="row">
                    <div class="col-70 order-0 order-lg-2">

                    </div>
                </div>
            </div>
        </section>
        <!-- blog-post-area-end -->



        <!-- cart-area -->
        <div class="cart__area" style="margin-top:-75px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
        <div class="table-responsive">
    <table class="table table-bordered align-middle">
        <tbody>
            @forelse($data as $item)
                <tr class="bg-light">
                    <td style="width: 5%; text-align:center;"><i class="bi bi-geo-alt-fill text-primary"></i></td>
                    <td class="fw-bold" style="width: 30%;">Kabupaten :</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td style="text-align:right;">{{ $item->kabupaten ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="text-align:center;"><i class="bi bi-building text-warning"></i></td>
                    <td class="fw-bold">Bangunan Kantor Tidak Sederhana</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->bangunankantortidaksederhana ?? 0, 0, ',', '.') }},-</td>
                </tr>
                <tr class="bg-light">
                    <td style="text-align:center;"><i class="bi bi-building text-warning"></i></td>
                    <td class="fw-bold">Bangunan Kantor Sederhana</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->bangunankantorsederhana ?? 0, 0, ',', '.') }},-</td>
                </tr>
                <tr>
                    <td style="text-align:center;"><i class="bi bi-house-door-fill text-success"></i></td>
                    <td class="fw-bold">Rumah Negara Tipe A</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->rumahnegaratipea ?? 0, 0, ',', '.') }},-</td>
                </tr>
                <tr class="bg-light">
                    <td style="text-align:center;"><i class="bi bi-house-door-fill text-success"></i></td>
                    <td class="fw-bold">Rumah Negara Tipe B</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->rumahnegaratipeb ?? 0, 0, ',', '.') }},-</td>
                </tr>
                <tr>
                    <td style="text-align:center;"><i class="bi bi-house-fill text-success"></i></td>
                    <td class="fw-bold">Rumah Negara Tipe C/D/E</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->rumahnegaratipecde ?? 0, 0, ',', '.') }},-</td>
                </tr>
                <tr class="bg-light">
                    <td style="text-align:center;"><i class="bi bi-slash-circle-fill text-danger"></i></td>
                    <td class="fw-bold">Pagar Rumah Depan</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->pagarrumahdepan ?? 0, 0, ',', '.') }},-</td>
                </tr>
                <tr>
                    <td style="text-align:center;"><i class="bi bi-slash-circle-fill text-danger"></i></td>
                    <td class="fw-bold">Pagar Rumah Belakang</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->pagarrumahbelakang ?? 0, 0, ',', '.') }},-</td>
                </tr>
                <tr class="bg-light">
                    <td style="text-align:center;"><i class="bi bi-slash-circle-fill text-danger"></i></td>
                    <td class="fw-bold">Pagar Rumah Samping</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->pagarrumahsamping ?? 0, 0, ',', '.') }},-</td>
                </tr>
                <tr>
                    <td style="text-align:center;"><i class="bi bi-slash-circle-fill text-danger"></i></td>
                    <td class="fw-bold">Pagar Rumah Negara Depan</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->pagarrumahnegaradepan ?? 0, 0, ',', '.') }},-</td>
                </tr>
                <tr class="bg-light">
                    <td style="text-align:center;"><i class="bi bi-slash-circle-fill text-danger"></i></td>
                    <td class="fw-bold">Pagar Rumah Negara Belakang</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->pagarrumahnegarabelakang ?? 0, 0, ',', '.') }},-</td>
                </tr>
                <tr>
                    <td style="text-align:center;"><i class="bi bi-slash-circle-fill text-danger"></i></td>
                    <td class="fw-bold">Pagar Rumah Negara Samping</td>
                    <td class="fw-bold" style="width: 5%;"> :</td>
                    <td class="text-end">Rp. {{ number_format($item->pagarrumahnegarasamping ?? 0, 0, ',', '.') }},-</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center py-4 text-danger fw-bold">
                        <i class="bi bi-folder-x me-2"></i>Data Tidak Ditemukan !!
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <style>
.table {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #dee2e6;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
    vertical-align: middle;
    padding: 8px 12px;
}
.fw-bold {
    font-weight: 600;
}
.text-end {
    text-align: right;
}
.table-hover tbody tr:hover {
    background-color: #f1f1f1;
}
.bg-light {
    background-color: #f9f9f9 !important;
}
.table-responsive {
    overflow-x: auto;
}
</style>


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
