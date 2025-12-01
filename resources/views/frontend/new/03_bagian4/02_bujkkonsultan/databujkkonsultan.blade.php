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
<section class="breadcrumb__area">
            <div class="breadcrumb__bg" data-background="/assets/assets/img/bg/perbaikanbanner.png"></div>
                   </section>

        <!-- blog-post-area -->
        <section class="blog__post-area-five section-py-200">
            <div class="container">
                <div class="row">
                    <div class="col-70 order-0 order-lg-2">

                    </div>
                    <div class="col-30">
                        <aside class="blog__sidebar">
                            <div class="sidebar__widget">
                          <div class="shop__search blog__search" style="margin-bottom: 20px;">
                            <input
                                type="text"
                                id="searchMaterial"
                                placeholder="Cari BUJK Konsultasi Konstruksi"
                                oninput="searchMaterial()"
                                class="w-full appearance-none outline-none text-sm font-medium placeholder:font-normal placeholder:text-[#545768] bg-transparent font-[Poppins]"
                            />
                            <button type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M17 17L13.5247 13.5247M15.681 8.3405C15.681 12.3945 12.3945 15.681 8.3405 15.681C4.28645 15.681 1 12.3945 1 8.3405C1 4.28645 4.28645 1 8.3405 1C12.3945 1 15.681 4.28645 15.681 8.3405Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
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
        <div class="cart__area" style="margin-top:-75px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
    <!-- Container scroll horizontal -->
    <div style="overflow-x: auto; width: 100%;">
        <table class="table cart__table" style="min-width: 1200px;"> <!-- Bisa sesuaikan lebar minimal -->
            <thead>
                <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Asosiasi</th>
                    <th style="text-align: center;">Nama BUJK</th>
                    <th style="text-align: center;">Alamat</th>
                    <th style="text-align: center;">No. Telepon</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">Nomor Induk Usaha</th>
                    <th style="text-align: center;">PJU</th>
                    <th style="text-align: center;">No. Akte</th>
                    <th style="text-align: center;">Tanggal Pengesahan</th>
                    <th style="text-align: center;">Nama Notaris</th>
                    <th style="text-align: center;">No. Pengesahan</th>
                    <th style="text-align: center;">Berkas SBU</th>
                    <th style="text-align: center;">Klasifikasi Layanan</th>
                </tr>
            </thead>
            <tbody id="tableBody">
            @forelse($data as $item)
                <tr>
                    <td style="text-align: center;">{{ $loop->iteration }}</td>
                    <td>{{ $item->asosiasimasjaki->namaasosiasi ?? '-' }}</td>
                    <td>{{ $item->namalengkap ?? '-' }}</td>
                    <td>{{ $item->alamat ?? '-' }}</td>
                    <td>{{ $item->no_telepon ?? '-' }}</td>
                    <td>{{ $item->email ?? '-' }}</td>
                    <td>{{ $item->nomorindukberusaha ?? '-' }}</td>
                    <td>{{ $item->pju ?? '-' }}</td>
                    <td>{{ $item->no_akte ?? '-' }}</td>
                  <td>
    {{ $item->tanggal
        ? \Carbon\Carbon::parse($item->tanggal)
            ->locale('id') // set locale ke Indonesia
            ->isoFormat('dddd, DD MMMM YYYY') // format lengkap: Hari, Tanggal Bulan Tahun
        : '-'
    }}
</td>
                    <td>{{ $item->nama_notaris ?? '-' }}</td>
                    <td>{{ $item->no_pengesahan ?? '-' }}</td>
         <td>
    <div>
        @if($item->uploadberkas && file_exists(public_path('storage/' . $item->uploadberkas)))
            <!-- Tombol PDF dari storage -->
            <a href="{{ asset('storage/' . $item->uploadberkas) }}" target="_blank"
               class="button-modern" style="display: flex; align-items: center;">
                <i class="bi bi-file-earmark-pdf" style="margin-right: 6px;"></i> Lihat PDF
            </a>
        @elseif($item->uploadberkas)
            <!-- Tombol PDF dari path luar storage -->
            <a href="{{ asset($item->uploadberkas) }}" target="_blank"
               class="button-modern" style="display: flex; align-items: center;">
                <i class="bi bi-file-earmark-pdf" style="margin-right: 6px;"></i> Lihat PDF
            </a>
        @else
            <!-- Placeholder jika tidak ada data -->
            <span class="text-danger" style="font-size: 14px;">Data belum diupdate</span>
        @endif
    </div>
</td>
<td>
    <a href="{{ route('bujkkonsultan.showlayanan', $item->namalengkap) }}" style="color: black;"
       class="button-modern">
        <i class="bi bi-eye" style="margin-right: 6px; font-size: 16px; color:black;"></i>
        Lihat
    </a>
</td>




                </tr>
            @empty
                <tr>
                    <td colspan="13">
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
                            animation: fadeIn 0.5s ease-in-out;
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

    fetch(`/databujkkonsultasi?search=${encodeURIComponent(input)}`)
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
