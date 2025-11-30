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
                @include('backend.00_administrator.00_baganterpisah.13_judulcreate')


                           {{-- ======================================================= --}}
        {{-- ALERT --}}


        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/beberitajakon">
                 <button class="button-modern">
    <!-- Ikon Panah Kiri -->
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-arrow-left" viewBox="0 0 16 16" style="margin-right: 8px;">
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
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- User ID -->
                                        <div class="form-modern mb-3">
                                            <label class="form-label-modern" for="user_id">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Penulis Berita
                                            </label>
                                            <select id="user_id" name="user_id" class="form-control" disabled>
                                                <option value="" disabled selected>Pilih Penulis</option>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}" {{ $data->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Judul Berita -->
                                        <div class="form-modern mb-3">
                                            <label class="form-label-modern" for="judul">
                                                <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Judul Berita
                                            </label>
                                            <input type="text" id="judul" name="judul" class="form-control" value="{{ $data->judul }}" disabled />
                                        </div>

                                        <!-- Tanggal -->
                                        <div class="form-modern mb-3">
                                            <label class="form-label-modern" for="tanggal">
                                                <i class="bi bi-calendar" style="margin-right: 8px; color: navy;"></i> Tanggal
                                            </label>
                                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ $data->tanggal }}" disabled />
                                        </div>

                                        <!-- keteranganberita -->
                                        <div class="form-modern mb-3">
                                            <label class="form-label-modern" for="keteranganberita">
                                                <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i> keteranganberita
                                            </label>
                                            <textarea id="keteranganberita" name="keteranganberita" class="form-control" style="height: 400px;" disabled>{{ $data->keteranganberita }}</textarea>
                                        </div>

                                    </div>
                                    <!-- End Left Column -->

                                    <!-- Right Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Foto -->
                                        <!-- Foto -->
                                        <div class="form-modern mb-3">
                                            <label class="form-label-modern" for="foto">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Berita 1
                                            </label>
                                            <div class="form-control" style="border: none;">
                                                <div style="margin-top: 10px;">
                                                    @if($data->gambar && file_exists(public_path('storage/' . $data->gambar)))
                                                        <!-- Menampilkan gambar dari storage -->
                                                        <img src="{{ asset('storage/' . $data->gambar) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 200px; object-fit: contain;">
                                                    @elseif($data->gambar)
                                                        <!-- Menampilkan gambar dari path luar storage -->
                                                        <img src="{{ asset($data->gambar) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 200px; object-fit: contain;">
                                                    @else
                                                        <!-- Placeholder jika tidak ada data -->
                                                        <p>Data belum diupdate</p>
                                                    @endif
                                             </div>

                                            </div>
                                        </div>

                                        <!-- Foto 1 -->
                                        <div class="form-modern mb-3">
                                            <label class="form-label-modern" for="foto1">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Berita 2
                                            </label>
                                            <div class="form-control" style="border: none;">
                                                <div style="margin-top: 10px;">
                                                    @if($data->gambar1 && file_exists(public_path('storage/' . $data->gambar1)))
                                                        <!-- Menampilkan gambar dari storage -->
                                                        <img src="{{ asset('storage/' . $data->gambar1) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 200px; object-fit: contain;">
                                                    @elseif($data->gambar1)
                                                        <!-- Menampilkan gambar dari path luar storage -->
                                                        <img src="{{ asset($data->gambar1) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 200px; object-fit: contain;">
                                                    @else
                                                        <!-- Placeholder jika tidak ada data -->
                                                        <p>Data belum diupdate</p>
                                                    @endif
                                             </div>
                                            </div>
                                        </div>

                                        <!-- Foto 2 -->
                                        <div class="form-modern mb-3">
                                            <label class="form-label-modern" for="foto2">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Berita 3
                                            </label>
                                            <div class="form-control" style="border: none;">
                                                <div style="margin-top: 10px;">
                                                    @if($data->gambar2 && file_exists(public_path('storage/' . $data->gambar2)))
                                                        <!-- Menampilkan gambar dari storage -->
                                                        <img src="{{ asset('storage/' . $data->gambar2) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 200px; object-fit: contain;">
                                                    @elseif($data->gambar2)
                                                        <!-- Menampilkan gambar dari path luar storage -->
                                                        <img src="{{ asset($data->gambar2) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 200px; object-fit: contain;">
                                                    @else
                                                        <!-- Placeholder jika tidak ada data -->
                                                        <p>Data belum diupdate</p>
                                                    @endif
                                             </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Right Column -->
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
