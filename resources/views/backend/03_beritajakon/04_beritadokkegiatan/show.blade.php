
@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
{{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

      <!--begin::App Main-->
      <main class="app-main">
<section style="background: #FFFFFF; width: 100%; min-height: 100vh;">
            <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">

                @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                @include('backend.00_administrator.00_baganterpisah.11_alert')

            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>

        <br>
        <!-- Menampilkan pesan sukses -->

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                     @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/bedokberitajakon">
                    <button class="button-modern">
                    <!-- Ikon Kembali -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16" style="margin-right: 8px;">
                 <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
               </svg>
                    Kembali
                </button>
            </a>
        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('update.beberitajakoncreateupdate', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="container mt-4">
  <div class="row">

    <!-- Kegiatan Jaskon ID -->
    <div class="form-modern col-md-6 mb-3">
        <label class="form-label-modern">
            <i class="bi bi-link-45deg" style="margin-right:8px; color:navy;"></i> Kegiatan Jasa Konstruksi
        </label>
        <div class="form-control bg-light">
            {{ $data->kegiatanjaskon->judul_kegiatan ?? '-' }}
        </div>
    </div>

    <!-- User ID -->
    <div class="form-modern col-md-6 mb-3">
        <label class="form-label-modern">
            <i class="bi bi-person" style="margin-right:8px; color:navy;"></i> User ID
        </label>
        <div class="form-control bg-light">
            {{ $data->user->username ?? '-' }}
        </div>
    </div>

    <!-- Judul Kegiatan -->
    <div class="form-modern col-md-6 mb-3">
        <label class="form-label-modern">
            <i class="bi bi-card-text" style="margin-right:8px; color:navy;"></i> Judul Kegiatan
        </label>
        <div class="form-control bg-light">
            {{ $data->judul_kegiatan ?? '-' }}
        </div>
    </div>

    <!-- Jabatan -->
    <div class="form-modern col-md-6 mb-3">
        <label class="form-label-modern">
            <i class="bi bi-person-badge" style="margin-right:8px; color:navy;"></i> Jabatan
        </label>
        <div class="form-control bg-light">
            {{ $data->jabatan ?? '-' }}
        </div>
    </div>

    <!-- Gambar Utama -->
    <div class="form-modern col-md-6 mb-3">
        <label class="form-label-modern">
            <i class="bi bi-image" style="margin-right:8px; color:navy;"></i> Foto Berita Kegiatan
        </label>

        @if($data->gambar && file_exists(public_path('storage/' . $data->gambar)))
            <img src="{{ asset('storage/' . $data->gambar) }}"
                 class="img-fluid rounded border"
                 style="max-height:250px; object-fit:contain;">
        @elseif($data->gambar)
            <img src="{{ asset($data->gambar) }}"
                 class="img-fluid rounded border"
                 style="max-height:250px; object-fit:contain;">
        @else
            <div class="form-control bg-light">Tidak ada gambar</div>
        @endif
    </div>

    <!-- Tanggal -->
    <div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-calendar" style="margin-right:8px; color:navy;"></i> Tanggal
    </label>
    <div class="form-control bg-light">
        {{ $data->tanggal ? \Carbon\Carbon::parse($data->tanggal)->locale('id')->translatedFormat('d F Y') : '-' }}
    </div>
</div>

    <!-- Keterangan Berita (Full width) -->
    <div class="form-modern col-12 mb-3">
        <label class="form-label-modern">
            <i class="bi bi-textarea-resize" style="margin-right:8px; color:navy;"></i> Keterangan Berita
        </label>
        <div class="form-control bg-light" style="min-height:80px;">
            {!! nl2br(e($data->keterangan_berita ?? '-')) !!}
        </div>
    </div>

</div>
                            </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->

                        </form>


                                                     </div>
                        <!--end::Quick Example-->

                    </div>
                    <!-- /.card -->
                    <!-- Button Section -->

                    </div>
                    <!--end::Row-->
                    </div>

        </div>
        <!--end::Row-->
        </div>
                  <!--end::Container-->
        <!--end::App Content Header-->
        <!--begin::App Content-->
          <!--end::App Content-->
                </section>
        </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
                                                                                <!-- Link ke Bootstrap 5 JS dan CSS -->
                                                                                {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
                                                                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> --}}
