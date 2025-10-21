@include('frontend.00_atas.header')
@include('frontend.00_atas.pembaharuan')


{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">
 {{-- <style>
    .navbar {
    z-index: 9999;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: white;
    border-bottom: 1px solid black;
}

/* Media Queries */
@media (max-width: 1024px) {
    .navbar {
        /* Adjustments for smaller screens */
        padding: 10px;
    }
}

@media (max-width: 768px) {
    .navbar {
        padding: 5px;
    }
}

@media (max-width: 480px) {
    .navbar {
        padding: 2px;
        font-size: 12px;
    }
} --}}
{{--  --}}
 {{-- </style> --}}


    <div class="div" style="z-index: 9999; position: fixed;
            top: 0; left: 0; width: 100%; z-index: 9999;
            background-color: white; border-bottom: 1px solid black;
            ">

        @include('frontend.00_atas.header1')
        <header>

                @include('frontend.00_atas.header2_navbar')

        </div>
        </header>

{{-- ======================================================================================================================= --}}
{{-- ======================================================================================================================= --}}




    <!-- Main News Slider Start -->
    <div class="container-fluid" style="margin-top: 2px;">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">

                    @foreach ($data as $item )


                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <a href="/portalberita/{{ $item->judul}}">
                        <div style="margin-top: 0px; height: 100%;">
    @if($item->gambar && file_exists(public_path('storage/' . $item->gambar)))
        <!-- Jika file ada di storage -->
        <img class="img-fluid h-100" src="{{ asset('storage/' . $item->gambar) }}" style="object-fit: cover;" alt="Gambar" loading="lazy">
    @elseif($item->gambar)
        <!-- Jika path luar storage -->
        <img class="img-fluid h-100" src="{{ asset($item->gambar) }}" style="object-fit: cover;" alt="Gambar" loading="lazy">
    @else
        <!-- Placeholder -->
        <div class="d-flex justify-content-center align-items-center h-100" style="background-color: #f8f9fa; border-radius: 8px;">
            <p class="text-muted mb-0">Data belum diupdate</p>
        </div>
    @endif
</div>

                        </a>
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="/portalberita/{{ $item->judul}}">News</a>
                                {{-- <a class="text-white" href="">Jan 01, 2045</a> --}}
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" style="font-size: 24px;" href="/portalberita/{{ $item->judul}}">{{ $item->judul }}</a>
                        </div>
                    </div>


                    @endforeach



                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">

@foreach ($data->sortByDesc('id')->take(4) as $item)
    <div class="col-md-6 px-0">
        <a href="/portalberita/{{ $item->judul }}">
            <div class="position-relative overflow-hidden" style="height: 250px;">
                @if($item->gambar && file_exists(public_path('storage/' . $item->gambar)))
                    <img class="img-fluid w-100 h-100" src="{{ asset('storage/' . $item->gambar) }}" style="object-fit: cover;" alt="{{ $item->judul }}">
                @elseif($item->gambar)
                    <img class="img-fluid w-100 h-100" src="{{ asset($item->gambar) }}" style="object-fit: cover;" alt="{{ $item->judul }}">
                @else
                    <div class="d-flex justify-content-center align-items-center w-100 h-100 bg-light">
                        <p class="text-muted mb-0">Data belum diupdate</p>
                    </div>
                @endif

                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="/portalberita/{{ $item->judul }}">News</a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/portalberita/{{ $item->judul }}">{{ $item->judul }}</a>
                </div>
            </div>
        </a>
    </div>
@endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <a href="">
                        <div class="d-flex justify-content-between">
                            <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">News</div>
                            <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            @foreach ($data as $item)
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">{{$item->judul}}</a></div>
                            @endforeach
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container col-11">
            {{-- <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">
                    <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" style="width:40px;">
                    Layanan Kami</h4>
            </div> --}}
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">


                {{-- @foreach ( $data_layanankami as $item )

                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <a href="/">
                        <img class="img-fluid h-300" src="{{ asset('storage/' . $item->gambar) }}" style="object-fit: cover; padding:10px; cursor:pointer">
                        <div class="overlay">
                            <div class="">
                                <button class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="/">{{ $item->program}}</button> <br>
                                <p class="text-white" href=""><small>{{$item->keterangan}}</small></p>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach --}}


            </div>

<div class="mb-6 mt-0" style="margin-bottom:50px;">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">
            <img src="/assets/icon/sipjakikbb.png" alt="icon" style="width: 40px;">
            KEGIATAN SERTIFIKASI JASA KONSTRUKSI
        </h4>
    </div>

    <div class="bg-white border border-top-0 p-3">

        @foreach ($data_jaskon as $item)
        <div class="w-100 h-100 d-flex flex-column justify-content-center border border-left-0" style="margin-bottom:10px;">
            <div class="mb-2">
                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2 ml-2"
                   href="/kegiatansertifikasi"
                   style="margin-top:15px; display: inline-block; max-width: 100%; white-space: normal;"
                   title="{{ $item->judul_kegiatan }}">
                    <span class="judul-kegiatan-text">
                        {{ \Illuminate\Support\Str::words($item->judul_kegiatan, 7, '...') }}
                    </span>
                </a>
            </div>

            <div class="mb-2">
                <a href="/kegiatansertifikasi">
                    <p class="px-3" style="color: #000000;">{{ $item->alamat_kegiatan }}</p>
                </a>
            </div>
        </div>

        {{-- ================== Gambar Berjalan (Responsif) ================== --}}
        <div class="berita-container">
            <div class="berita-marquee">
                @foreach(range(1, 20) as $i)
                    @php $field = 'berita' . $i; @endphp
                    @if(!empty($item->$field))
                        @if(file_exists(public_path('storage/' . $item->$field)))
                            <img src="{{ asset('storage/' . $item->$field) }}" alt="Berita {{ $i }}" loading="lazy">
                        @else
                            <img src="{{ asset($item->$field) }}" alt="Berita {{ $i }}" loading="lazy">
                        @endif
                    @endif
                @endforeach
            </div>
        </div>

        @endforeach

    </div>
</div>

{{-- ================== CSS Responsif ================== --}}

<!-- Popular News End -->


        </div>

    </div>


    <br><br><br>
    <!-- Featured News Slider End -->



    </div>
    <!-- News With Sidebar End -->
    <!-- News With Sidebar End -->
{{-- ================================================================================================================================= --}}
{{-- ================================================================================================================================= --}}
{{-- ================================================================================================================================= --}}



    </section>


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}



    {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}


    {{-- <section id="sec-4">
        <div class="container">
            <h1>made with love</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni reiciendis accusamus autem tenetur vero, facilis omnis, ullam quis mollitia deleniti ea similique laboriosam numquam ab dignissimos! Ducimus, eveniet at. A debitis eum tenetur dolor magni.</p>
            <div class="filter">
                <a href="#">Show all</a>
                <a href="#">buildings</a>
                <a href="#">interior design</a>
                <a href="#">isolation</a>
                <a href="#">plumping</a>
            </div>
            <div class="cont">
                <img class="wow animated fadeIn slow" src="/assets/bahan1/Images/gallery1.jpg" alt="pic">
                <aside>
                    <img src="/assets/bahan1/Images/gallery3.jpg" alt="pic" class="wow animated flipInX delay-1s">
                    <img src="/assets/bahan1/Images/gallery2.jpg" alt="pic" class="wow animated flipInX delay-1s slower">
                    <img src="/assets/bahan1/Images/gallery4.jpg" alt="pic" class="wow animated flipInX delay-2s">
                    <img src="/assets/bahan1/Images/gallery5.jpg" alt="pic" class="wow animated flipInX delay-2s slower">
                </aside>
            </div>
        </div>
    </section> --}}

  {{-- --------------------------------------------------------------------------------------- --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}

     <section id="sec-5">
        {{-- <div class="container">
            <h1 style="
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
            text-transform: uppercase;
            text-align: center;
            border: 2px solid black;
            padding: 10px;
            border-radius: 25px;
            width: 500px;
            margin-left: 325px;
            background: linear-gradient(to right, #f0f0f0, #e0e0e0);
            transition: background 0.5s ease, color 0.5s ease;
        " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">

        Himbauan Dinas Terkait</h1>
            <p>
                Kami informasikan bahwa Sistem Informasi Pembina Jasa Konstruksi kini tersedia untuk memudahkan akses informasi terkait jasa konstruksi. Sistem ini menyediakan data terpercaya, regulasi terbaru, dan informasi penting lainnya mengenai layanan konstruksi. Silakan kunjungi platform ini untuk mendapatkan informasi yang Anda butuhkan dan memastikan kepatuhan terhadap peraturan yang berlaku.
                <div class="cont">
                    @foreach ($datahimbauandinas as $item )

                    <article class="quoteblock">
                        <div class="quotetxt arrow">
                            <p><img style="width:10%" src="{{asset('storage/' . $item->foto_pejabat)}}" alt="{{asset('storage/' . $item->foto_pejabat)}}"></p>
                            <p><span style="color: black">{!! $item->himbauan !!}</span></p>
                        </div>
                        <figure>
                            <img style="width:30%" class="customer" src="{{ asset('storage/' . $item->foto_pejabat)}}" alt="Dinas Terkait">
                            <figcaption>{{$item->nama_lengkap}}</figcaption>
                            <figcaption>{{$item->jabatan}}</figcaption>
                        </figure>
                    </article>

                    @endforeach
            </div>
        </div> --}}
<div class="contactUs" style="background-color: #FFCB0F; height: auto; padding: 40px 0; margin-top: -100px; margin-bottom: -35px;">
    <div class="container" style="margin-top:50px;">

        <!-- ========== Judul & Header Section ========== -->
        <aside class="text-center">
            <h3 class="info-title">
                Informasi Lebih Lanjut <i class="fas fa-arrow-right ml-2"></i>
            </h3>

            <h5 class="info-subtitle">
                <img src="assets/icon/pupr.png" alt="Logo SIPJAKIKBB" class="info-logo">
                Q&A Jasa Konstruksi <br> Hub Kami
            </h5>

            <p class="info-text">
                Dinas Pekerjaan Umum dan Penataan Ruang <br>
                Pemerintah Kabupaten Bandung Barat
            </p>
        </aside>

        {{-- Alert --}}
        @include('tambahan.alert')

        <!-- ========== Form ========== -->
      <form action="{{ route('create.qapertanyaan') }}" method="POST" enctype="multipart/form-data" class="qa-form">
    @csrf
    @method('POST')

    <!-- Anda Sebagai -->
    <div class="form-group">
        <label for="qasebagai_id" class="form-label-custom">
            <i class="fas fa-map-marker-alt mr-2"></i> Anda Sebagai
        </label>
        <select class="form-control form-input" id="qasebagai_id" name="qasebagai_id" required>
            <option value="" disabled selected>Anda Sebagai ?</option>
            @foreach ($dataqasebagai as $item)
                <option value="{{ $item->id }}">{{ $item->sebagai }}</option>
            @endforeach
        </select>
    </div>

    <!-- Pertanyaan -->
    <div class="form-group">
        <label for="qapertanyaan_id" class="form-label-custom">
            <i class="fas fa-question-circle mr-2"></i> Pertanyaan Saudara
        </label>
        <select class="form-control form-input" id="qapertanyaan_id" name="qapertanyaan_id" required>
            <option value="" disabled selected>Pertanyaan ?</option>
            @foreach ($dataqapertanyaan as $item)
                <option value="{{ $item->id }}">{{ $item->pertanyaan }}</option>
            @endforeach
        </select>
    </div>

    <!-- Email -->
    <div class="form-group">
        <label for="email" class="form-label-custom">
            <i class="fas fa-envelope mr-2"></i> Email
        </label>
        <input type="email" class="form-control form-input" id="email" name="email" required placeholder="Masukan Email Saudara">
    </div>

    <!-- Nama Lengkap -->
    <div class="form-group">
        <label for="nama_lengkap" class="form-label-custom">
            <i class="fas fa-user mr-2"></i> Nama Lengkap
        </label>
        <input type="text" class="form-control form-input" id="nama_lengkap" name="nama_lengkap" required placeholder="Nama Lengkap">
    </div>

    <!-- Telepon -->
    <div class="form-group">
        <label for="telepon" class="form-label-custom">
            <i class="fas fa-phone-alt mr-2"></i> Telepon
        </label>
        <input type="tel" class="form-control form-input" id="telepon" name="telepon" required placeholder="No Whatsapp">
    </div>

    <!-- Tombol Kirim -->
    <div class="form-group text-center">
        <button class="btn submit-btn" type="submit">
            <i class="fas fa-save mr-2"></i> Kirim Pertanyaan !
        </button>
    </div>
</form>
<style>
/* Container form */
.qa-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 10px;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Form group */
.form-group {
    display: flex;
    flex-direction: column;
    gap: 0px; /* rapatkan jarak label dan input */
}

/* Label styling */
.form-label-custom {
    font-size: 14px;
    font-weight: 600;
    color: #000;
    display: flex;
    align-items: center;
    gap: 5px; /* jarak icon dan teks label */
    margin-bottom: 0; /* hapus margin bawah berlebih */
    margin-top: -110px; /* hapus margin bawah berlebih */
}

/* Input & select styling */
.form-input {
    width: 100%;
    padding: 8px 12px;
    font-size: 14px;
    border-radius: 6px;
    border: 1px solid #ccc;
    transition: border 0.3s, box-shadow 0.3s;
    margin-top: -80px;
}

.form-input:focus {
    outline: none;
    border-color: navy;
    box-shadow: 0 0 5px rgba(0,0,128,0.3);
}

/* Tombol */
.submit-btn {
    width: 100%;
    padding: 10px 0;
    font-size: 14px;
    font-weight: 600;
    border-radius: 8px;
    border: none;
    background: linear-gradient(to right, black, navy);
    color: #fff;
    transition: background 0.3s, transform 0.2s;
}

.submit-btn:hover {
    background: linear-gradient(to right, navy, black);
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 768px) {
    .qa-form {
        max-width: 100%;
        padding: 0 15px;
    }

    .form-label-custom {
        font-size: 13px;
    }

    .form-input,
    .submit-btn {
        font-size: 13px;
    }
}
</style>

    </div>
</div>

<!-- ========== STYLE TAMBAHAN ========== -->
<style>
    .info-title {
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        font-size: 18px;
        color: #333;
        border: 2px solid black;
        padding: 5px 10px;
        border-radius: 25px;
        display: inline-block;
        transition: background 0.5s ease, color 0.5s ease;
    }

    .info-title:hover {
        background: linear-gradient(to right, black, yellow);
        color: white;
    }

    .info-subtitle {
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .info-logo {
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-right: 10px;
        vertical-align: middle;
    }

    .info-text {
        font-size: 14px;
        text-transform: uppercase;
        color: #333;
        font-weight: 700;
    }

    .form-label-custom {
        flex: 0 0 200px;
        text-align: left;
        font-size: 14px;
        color: #000;
    }

    .qa-form input, .qa-form select {
        color: #000;
    }

    /* Responsif */
    @media (max-width: 768px) {
        .contactUs {
            height: auto !important;
            padding: 30px 15px;
        }

        .info-subtitle {
            font-size: 1.2rem;
        }

        .form-label-custom {
            flex: 0 0 100%;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .qa-form input, .qa-form select {
            width: 100%;
            font-size: 13px;
        }

        .btn {
            width: 100%;
            font-size: 14px;
        }
    }
</style>

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}





@include('frontend.00_atas.footer1')

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
@include('frontend.00_atas.footer2')
