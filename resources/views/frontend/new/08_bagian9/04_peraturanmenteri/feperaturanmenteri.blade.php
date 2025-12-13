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
    <div class="container">
        <div class="row justify-content-center">

            <!-- FILTER + SEARCH FULL WIDTH -->
            <div class="col-12 mb-4">
                <div class="w-100 d-flex flex-wrap align-items-center justify-content-between gap-3 p-4"
                    style="background: #f8f9fa; border: 1px solid #e2e2e2; border-radius: 10px;">

                    <!-- SEARCH BAR -->
                    <div class="d-flex align-items-center px-3 py-2 rounded"
                        style="border: 1px solid #d0d0d5; flex: 1; min-width: 280px; background: white; height: 44px;">
                        <input type="text" id="searchMaterial" placeholder="Cari Peraturan ?"
                            oninput="searchData()"
                            class="w-100 border-0 outline-none"
                            style="font-family: 'Poppins'; background: transparent; font-size: 14px;" />

                        <button type="button" class="ms-2" style="border: none; background: none;">
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
                        <label style="font-family: 'Poppins'; font-weight: 600; white-space: nowrap;">Tampilkan:</label>

                        <select id="entries" onchange="updateEntries()"
                            class="form-select"
                            style="font-family: 'Poppins'; height: 44px;">

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

            <!-- TEMPAT KONTEN TABEL -->
            <div class="col-12">
                <!-- tabel berada di sini -->
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

    function searchData() {
    let keyword = document.getElementById('searchInput').value;

    fetch(`/perundangundang?search=${encodeURIComponent(keyword)}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(res => res.text())
    .then(html => {
        document.getElementById('tableBody').innerHTML = html;
    })
    .catch(err => console.error(err));
}
</script>


        <!-- cart-area -->
        <div class="cart__area" style="margin-top:-75px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
       <table class="table cart__table">
    <thead>
        <tr>
            <th style="text-align:center;">
                <i class="bi bi-list-ol"></i> No
            </th>

            <th style="text-align:left;">
                <i class="bi bi-card-text"></i> Judul Peraturan
            </th>

            <th style="text-align:center;">
                <i class="bi bi-download"></i> Unduh
            </th>
        </tr>
    </thead>

    <tbody>
        @forelse($data as $item)
        <tr>
            <!-- NO -->
            <td style="text-align:center;">
                {{ $loop->iteration }}
            </td>

            <!-- JUDUL (ENTER SETIAP 5 KATA) -->
            <td style="text-align:left; white-space:normal;">
                @php
                    $text = trim((string) $item->judul);
                    $words = preg_split('/\s+/', $text);
                    $chunks = array_chunk($words, 5);

                    foreach ($chunks as $chunk) {
                        echo e(implode(' ', $chunk)) . '<br>';
                    }
                @endphp
            </td>

            <!-- DOWNLOAD -->
            <td style="text-align:center;">

        @if($item->peraturan && file_exists(public_path('storage/' . $item->peraturan)))
            <!-- PDF dari storage -->
            <iframe
                src="{{ asset('storage/' . $item->peraturan) }}"
                width="100%"
                style="border: 1px solid #ddd; border-radius: 6px;">
            </iframe>

            <!-- Tombol Download -->
            <div style="margin-top: 8px;">
                <a href="{{ asset('storage/' . $item->peraturan) }}"
                   class="button-berkas"
                   download>
                    Download Berkas
                </a>
            </div>

        @elseif($item->peraturan)
            <!-- PDF dari path luar storage -->
            <iframe
                src="{{ asset($item->peraturan) }}"
                width="100%"
                style="border: 1px solid #ddd; border-radius: 6px;">
            </iframe>

            <!-- Tombol Download -->
                  <div style="margin-top: 8px;">
                    <a href="{{ asset('storage/' . $item->peraturan) }}"
                   class="button-berkas"
                   download>
                    Download Berkas
                    </a>
                        </div>



        @else
            <!-- Placeholder jika tidak ada data -->
            <button class="btn btn-secondary btn-sm" disabled>
                Data Belum Diupdate
            </button>
        @endif

    </td>
        </tr>

        @empty
        <tr>
            <td colspan="4">
                <div style="
                    width:100%;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    padding:30px;
                    font-weight:600;
                    font-family:'Poppins', sans-serif;
                    color:#6c757d;
                    background-color:#f8f9fa;
                    border:2px dashed #ced4da;
                    border-radius:12px;
                    font-size:16px;
                ">
                    <i class="bi bi-folder-x"
                       style="margin-right:8px; font-size:20px; color:#dc3545;"></i>
                    Data Peraturan Tidak Ditemukan
                </div>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@include('frontend.A00_new.01_halamanutama.newpaginations')

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

    fetch(`/perundangundang?search=${encodeURIComponent(input)}`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(res => res.text())
    .then(html => {
        document.getElementById("tableBody").innerHTML = html;
    })
    .catch(err => console.error(err));
}
</script>

