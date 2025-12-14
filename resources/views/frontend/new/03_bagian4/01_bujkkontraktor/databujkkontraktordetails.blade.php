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
        <!-- blog-post-area -->
        <section class="blog__post-area-five section-py-130" style="margin-top: -75px;">
            @include('frontend.A00_new.01_halamanutama.newjudul')
            <div class="container">


                <div class="row">
                    <div class="col-70 order-0 order-lg-2">

                    </div>
                    <div class="col-30">
                        <aside class="blog__sidebar">
                         <aside class="blog__sidebar">

        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
            <!-- Button: Kembali -->
            <a href="{{ url()->previous() }}"
               class="button-baru">
                <i class="bi bi-arrow-left-circle"></i>
                Kembali
            </a>

            <!-- Button: Nama Lengkap -->
            <a href="#"
               class="button-modern">
                <i class="bi bi-person-badge"></i>
                BUJK Konstruksi : {{ $data->namalengkap ?? 'Tidak Ada Nama' }}
            </a>

        </div>



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
                        </aside>
                    </div>
                </div>
            </div>

        </section>
        <!-- blog-post-area-end -->



        <!-- cart-area -->
        <div class="cart__area" style="margin-top:-100px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
    <!-- Container scroll horizontal -->
    <div style="overflow-x: auto; width: 100%;">
        <table class="table cart__table" style="min-width: 1400px;">
    <thead>
       <tr>
    <th class="text-center" style="min-width:60px;">
        <i class="bi bi-list-ol text-primary"></i>
        No
    </th>

    <th class="text-center" style="min-width:220px;">
        <i class="bi bi-person-fill text-primary"></i>
        Nama Pengurus
    </th>

    <th class="text-center" style="min-width:260px;">
        <i class="bi bi-diagram-3-fill text-primary"></i>
        Sub Klasifikasi Layanan
    </th>

    <th class="text-center" style="min-width:120px;">
        <i class="bi bi-hash text-primary"></i>
        Kode
    </th>

    <th class="text-center" style="min-width:160px;">
        <i class="bi bi-award-fill text-primary"></i>
        Kualifikasi
    </th>

    <th class="text-center" style="min-width:180px;">
        <i class="bi bi-building-fill text-primary"></i>
        Penerbit
    </th>

    <th class="text-center" style="min-width:180px;">
        <i class="bi bi-calendar-event-fill text-primary"></i>
        Tanggal Terbit
    </th>

    <th class="text-center" style="min-width:180px;">
        <i class="bi bi-calendar-x-fill text-primary"></i>
        Masa Berlaku
    </th>

    <th class="text-center" style="min-width:220px;">
        <i class="bi bi-person-badge-fill text-primary"></i>
        Nama PSJK
    </th>

    <th class="text-center" style="min-width:220px;">
        <i class="bi bi-layers-fill text-primary"></i>
        Sub Kualifikasi BU
    </th>

    <th class="text-center" style="min-width:140px;">
        <i class="bi bi-check-circle-fill text-primary"></i>
        Status
    </th>
</tr>

    </thead>

    <tbody>
    @forelse($subdata as $item)
        <tr>
            <td style="text-align: center;">{{ $loop->iteration }}</td>

            <td>{{ $item->nama_pengurus ?? '-' }}</td>
            <td>{{ $item->sub_klasifikasi_layanan ?? '-' }}</td>
            <td>{{ $item->kode ?? '-' }}</td>
            <td>{{ $item->kualifikasi ?? '-' }}</td>
            <td>{{ $item->penerbit ?? '-' }}</td>

            <td>
                {{ $item->tanggal_terbit
                    ? \Carbon\Carbon::parse($item->tanggal_terbit)->locale('id')->isoFormat('DD MMMM YYYY')
                    : '-' }}
            </td>

            <td>
                {{ $item->masa_berlaku
                    ? \Carbon\Carbon::parse($item->masa_berlaku)->locale('id')->isoFormat('DD MMMM YYYY')
                    : '-' }}
            </td>

            <td>{{ $item->nama_psjk ?? '-' }}</td>
            <td>{{ $item->sub_kualifikasi_bu ?? '-' }}</td>
            @php
    $today = \Carbon\Carbon::today();
    $masaBerlaku = \Carbon\Carbon::parse($item->masa_berlaku);
    $status = $masaBerlaku->isFuture() || $masaBerlaku->isToday() ? 'Berlaku' : 'Tidak Berlaku';
    $class = $status === 'Berlaku' ? 'button-hijau' : 'button-merah';
@endphp

<td style="text-align: center;">
    <span class="{{ $class }}" style="padding: 6px 12px; border-radius: 6px; display: inline-block;">
        {{ $status }}
    </span>
</td>



        </tr>
    @empty
        <tr>
            <td colspan="10">
                <div style="
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 30px;
                    font-weight: 600;
                    font-family: 'Poppins', sans-serif;
                    color: #6c757d;
                    background-color: #f8f9fa;
                    border: 2px dashed #ced4da;
                    border-radius: 12px;
                    font-size: 16px;
                ">
                    <i class="bi bi-folder-x" style="margin-right: 8px; font-size: 20px; color: #dc3545;"></i>
                    Data Tidak Ditemukan !!
                </div>
            </td>
        </tr>
    @endforelse
    </tbody>
</table>

    </div>
</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>



{{-- @include('frontend.A00_new.01_halamanutama.newpaginations') --}}

<br><br>
                    </div>

                 @include('frontend.A00_new.01_halamanutama.newpaginationssubdata')

                </div>
                <br><br>
            </div>
        </div>
    </main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')


<script>
function searchMaterial() {
    let input = document.getElementById("searchMaterial").value;

    fetch(`/databujkkontruksi?search=${encodeURIComponent(input)}`)
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

