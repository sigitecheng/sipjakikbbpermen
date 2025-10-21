@include('frontend.00_atas.header')
@include('frontend.00_atas.pembaharuan')

{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">

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


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3" style="margin-top: 0px;">
        <div class="container col-11">
                    <!-- Popular News Start -->
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


            {{-- @include('tambahan.layanankami') --}}

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

  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}


    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}





@include('frontend.00_atas.footer1')

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
@include('frontend.00_atas.footer2')
