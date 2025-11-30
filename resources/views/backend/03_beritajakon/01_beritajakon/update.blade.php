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

                           {{-- ======================================================= --}}
        {{-- ALERT --}}


        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/beberitajakon">
                   <button class="button-modern">
    <!-- Ikon Panah Kiri -->
    <svg xmlns="http://www.w3.org/2000/svg"
         width="16" height="16"
         fill="currentColor"
         viewBox="0 0 16 16"
         style="margin-right: 8px;">
        <path fill-rule="evenodd"
              d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
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
            <select id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                <option value="" disabled selected>Pilih Penulis</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id', $data->user_id) == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            @error('user_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Judul Berita -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="judul">
                <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Judul Berita
            </label>
            <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror"
                   value="{{ old('judul', $data->judul) }}" />
            @error('judul')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tanggal -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="tanggal">
                <i class="bi bi-calendar" style="margin-right: 8px; color: navy;"></i> Tanggal
            </label>
            <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror"
                   value="{{ old('tanggal', $data->tanggal) }}" />
            @error('tanggal')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- keteranganberita -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="keteranganberita">
                <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i> keteranganberita
            </label>
            <textarea id="keteranganberita" name="keteranganberita" class="form-control @error('keteranganberita') is-invalid @enderror" style="height: 300px;">{{ old('keteranganberita', $data->keteranganberita) }}</textarea>
            @error('keteranganberita')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <!-- End Left Column -->

    <!-- Right Column (6/12) -->
    <div class="col-md-6">
    <!-- Foto 1 -->
    <div class="form-modern mb-3">
        <label class="form-label-modern" for="gambar">
            <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Berita 1
        </label>
        <input type="file" id="gambar" name="gambar" class="form-control @error('gambar') is-invalid @enderror" onchange="previewHeader(event, 'preview-gambar', 'old-gambar-wrapper')" />
        @error('gambar')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <!-- Preview Gambar Baru -->
        <div id="preview-gambar" style="margin-top: 10px; display: none;">
            <p style="font-weight: bold; color: green; margin-bottom: 5px;">Foto Baru:</p>
            <img src="" alt="Preview Foto 1" style="width: 100%; max-height: 200px; object-fit: contain;">
        </div>

        <!-- Gambar Lama -->
        @if($data->gambar)
        <div id="old-gambar-wrapper" style="margin-top: 10px;">
            <p style="font-weight: bold; color: gray; margin-bottom: 5px;">Foto Lama:</p>
            @if(file_exists(public_path('storage/' . $data->gambar)))
                <img src="{{ asset('storage/' . $data->gambar) }}" alt="Foto 1" style="width: 100%; max-height: 200px; object-fit: contain;">
            @else
                <img src="{{ asset($data->gambar) }}" alt="Foto 1" style="width: 100%; max-height: 200px; object-fit: contain;">
            @endif
        </div>
        @endif
    </div>

    <!-- Foto 2 -->
    <div class="form-modern mb-3">
        <label class="form-label-modern" for="gambar1">
            <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Berita 2
        </label>
        <input type="file" id="gambar1" name="gambar1" class="form-control @error('gambar1') is-invalid @enderror" onchange="previewHeader(event, 'preview-gambar1', 'old-gambar1-wrapper')" />
        @error('gambar1')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <div id="preview-gambar1" style="margin-top: 10px; display: none;">
            <p style="font-weight: bold; color: green; margin-bottom: 5px;">Foto Baru:</p>
            <img src="" alt="Preview Foto 2" style="width: 100%; max-height: 200px; object-fit: contain;">
        </div>

        @if($data->gambar1)
        <div id="old-gambar1-wrapper" style="margin-top: 10px;">
            <p style="font-weight: bold; color: gray; margin-bottom: 5px;">Foto Lama:</p>
            @if(file_exists(public_path('storage/' . $data->gambar1)))
                <img src="{{ asset('storage/' . $data->gambar1) }}" alt="Foto 2" style="width: 100%; max-height: 200px; object-fit: contain;">
            @else
                <img src="{{ asset($data->gambar1) }}" alt="Foto 2" style="width: 100%; max-height: 200px; object-fit: contain;">
            @endif
        </div>
        @endif
    </div>

    <!-- Foto 3 -->
    <div class="form-modern mb-3">
        <label class="form-label-modern" for="gambar2">
            <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Berita 3
        </label>
        <input type="file" id="gambar2" name="gambar2" class="form-control @error('gambar2') is-invalid @enderror" onchange="previewHeader(event, 'preview-gambar2', 'old-gambar2-wrapper')" />
        @error('gambar2')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <div id="preview-gambar2" style="margin-top: 10px; display: none;">
            <p style="font-weight: bold; color: green; margin-bottom: 5px;">Foto Baru:</p>
            <img src="" alt="Preview Foto 3" style="width: 100%; max-height: 200px; object-fit: contain;">
        </div>

        @if($data->gambar2)
        <div id="old-gambar2-wrapper" style="margin-top: 10px;">
            <p style="font-weight: bold; color: gray; margin-bottom: 5px;">Foto Lama:</p>
            @if(file_exists(public_path('storage/' . $data->gambar2)))
                <img src="{{ asset('storage/' . $data->gambar2) }}" alt="Foto 3" style="width: 100%; max-height: 200px; object-fit: contain;">
            @else
                <img src="{{ asset($data->gambar2) }}" alt="Foto 3" style="width: 100%; max-height: 200px; object-fit: contain;">
            @endif
        </div>
        @endif
    </div>
</div>

</div>

                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-top:20px; margin-bottom:20px;">
                                <div class="flex justify-end">
                                    <button type="button" onclick="openModal()" class="button-berkas">
                                    <!-- Icon Pencil Square -->
                                    <i class="bi bi-pencil-square" style="margin-right: 6px;"></i>
                                    <span style="font-family: 'Poppins', sans-serif;">Perbaikan Data ?</span>
                                </button>

                                </div>
                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                        Apakah Anda yakin ingin memperbarui data ini?
                                    </p>

                                      <!-- Tombol -->
                                      <div style="display: flex; justify-content: center; gap: 12px;">
                                        <button id="confirmSubmitBtn"
                                        onclick="submitForm()"
                                        style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; border: none; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                        onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                    <!-- Telegram SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 448 512" fill="white">
                                        <path d="M446.7 68.8c-5.7-4.8-13.8-5.7-20.3-2.2L26.1 263.5c-7.2 3.7-11.4 11.5-10.4 19.5s6.7 14.5 14.4 16.5l85.1 23.3 40.6 98.8c2.9 7.1 9.6 11.7 17.1 11.7h.4c7.7-.2 14.4-5.1 16.8-12.3l33.2-96.5 109.7 88.1c3.5 2.8 7.9 4.3 12.3 4.3 2.5 0 5-.5 7.4-1.4 6.4-2.5 11.2-8.2 12.7-15.1L448 89.4c1.3-7.6-1.6-15.3-7.3-20.6z"/>
                                    </svg>
                                    Ya, Update
                                </button>

                                <!-- Tombol Batal dengan ikon X (SVG) -->
                                <button type="button"
                                        onclick="closeModal()"
                                        style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                        onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 384 512" fill="white">
                                        <path d="M231.6 256l142.7-142.7c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L186.3 210.7 43.6 68c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L141 256 0 397.7c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L186.3 301.3l142.7 142.7c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L231.6 256z"/>
                                    </svg>
                                    Batal
                                </button>

                                      </div>
                                    </div>
                                </div>

                                <!-- Script -->
                                <script>
                                function openModal() {
                                    const modal = document.getElementById("confirmModal");
                                    if (modal) modal.style.display = "flex";
                                }

                                function closeModal() {
                                    const modal = document.getElementById("confirmModal");
                                    if (modal) modal.style.display = "none";
                                }

                                </script>

                            </div>

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



<!-- Script Preview -->
<script>
function previewHeader(event, previewId, oldWrapperId) {
    const previewDiv = document.getElementById(previewId);
    const previewImg = previewDiv.querySelector('img');
    const oldWrapper = document.getElementById(oldWrapperId);

    const file = event.target.files[0];
    if (file) {
        previewDiv.style.display = "block";
        previewImg.src = URL.createObjectURL(file);

        oldWrapper.style.opacity = "0.4";
        oldWrapper.style.filter = "grayscale(100%)";
    }
}
</script>
