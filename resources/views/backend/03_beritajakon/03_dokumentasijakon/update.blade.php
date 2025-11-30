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


        {{-- @include('backend.00_administrator.00_baganterpisah.06_alert') --}}


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
                        <form action="{{ route('update.bedokumentasijakon', $data->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                                            <!-- begin::Body -->
                            <div class="card-body">

                                <div class="row">
    <!-- Judul -->
    <div class="form-modern col-12 mb-3">
        <label class="form-label-modern" for="judul_kegiatan">
            <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Judul Kegiatan
        </label>
        <input type="text" id="judul_kegiatan" name="judul_kegiatan" class="form-control @error('judul_kegiatan') is-invalid @enderror" value="{{ old('judul_kegiatan', $data->judul_kegiatan) }}">
        @error('judul_kegiatan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Foto Kegiatan 1 -->
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
                    <!-- Menampilkan gambar dari storage -->
                    <img src="{{ asset('storage/' . $data->{$field}) }}"
                         alt="Foto Lama {{ $i }}"
                         style="width:100%; max-height:200px; object-fit:contain;">
                @elseif($data->{$field})
                    <!-- Menampilkan gambar dari path luar storage -->
                    <img src="{{ asset($data->{$field}) }}"
                         alt="Foto Lama {{ $i }}"
                         style="width:100%; max-height:200px; object-fit:contain;">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>

            <div class="mt-2">
                <p>Dokumentasi Baru :</p>
                <img id="previewBaru{{ $i }}" style="width:100%; max-height:200px; object-fit:contain; display:none;">
            </div>
        </div>
    @endfor
</div>

<!-- Javascript Preview Image -->
<script>
function previewImage(event, previewId) {
    const input = event.target;
    const preview = document.getElementById(previewId);
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>                                </div>
                                <!-- End row -->

                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                                   <button type="button" onclick="openModal()" class="button-berkas">
                                    <!-- Icon Pen Square -->
                                    <i class="bi bi-pencil-square" style="margin-right: 8px;"></i>
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
