
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
                <a href="/bedokumentasijakon">
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
   <div class="form-modern col-12 mb-3">
        <label class="form-label-modern" for="judul_kegiatan">
            <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Judul Kegiatan
        </label>
        <input type="text" id="judul_kegiatan" name="judul_kegiatan"
               class="form-control @error('judul_kegiatan') is-invalid @enderror"
               value="{{ old('judul_kegiatan', $data->judul_kegiatan) }}">
        @error('judul_kegiatan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Foto Kegiatan 1-20 -->
    <div class="row">
        @for ($i = 1; $i <= 20; $i++)
        <div class="form-modern col-md-6 mb-3">
            <label class="form-label-modern" for="berita{{ $i }}">
                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan {{ $i }}
            </label>
            <input type="file" id="berita{{ $i }}" name="berita{{ $i }}"
                   class="form-control @error('berita'.$i) is-invalid @enderror"
                   accept="image/*"
                   onchange="previewImage(event, 'previewBaru{{ $i }}')">
            @error('berita'.$i)
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <div class="mt-2">
                <p>Dokumentasi Sebelumnya :</p>
                @php $field = 'berita'.$i; @endphp
                @if($data->{$field} && file_exists(public_path('storage/' . $data->{$field})))
                    <img src="{{ asset('storage/' . $data->{$field}) }}"
                         alt="Foto Lama {{ $i }}"
                         style="width:100%; max-height:200px; object-fit:contain;">
                @elseif($data->{$field})
                    <img src="{{ asset($data->{$field}) }}"
                         alt="Foto Lama {{ $i }}"
                         style="width:100%; max-height:200px; object-fit:contain;">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>

            <div class="mt-2">
                <p>Preview Baru :</p>
                <img id="previewBaru{{ $i }}" style="width:100%; max-height:200px; object-fit:contain; display:none;">
            </div>
        </div>
        @endfor
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
