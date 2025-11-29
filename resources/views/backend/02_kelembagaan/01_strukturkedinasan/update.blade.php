
@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('button')
{{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

      <!--begin::App Main-->
      <main class="app-main">
<section style="background: #FFFFFF; width: 100%; min-height: 100vh;">

            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">

                        @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')

                      </div>
              <!--end::Row-->
            </div>
            <!--end::Container-->
          </div>

            <div class="card-header">

          <!--begin::Container-->
          @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

        </div>

        <br>
        <!-- Menampilkan pesan sukses -->

        {{-- ======================================================= --}}

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                           {{-- ======================================================= --}}
        {{-- ALERT --}}


        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/bestrukturdinas">
                    <button class="button-modern">

                        <!-- Ikon SVG Kembali -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 16 16" style="margin-right: 8px;">
                          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                        </svg>

                        <span>
                            Kembali
                        </span>
                    </button>
                </a>
            </div>

        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('update.strukturcreatebaru', $data->judul) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Menggunakan PUT untuk update data -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <div class="form-modern mb-3">
                                            <label class="form-label-modern" for="judul">
                                                <i class="bi bi-calendar-event" style="margin-right: 8px; color: navy;"></i> Judul
                                            </label>
                                            <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $data->judul) }}" />
                                            @error('judul')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-modern mb-3">
                                            <label class="form-label-modern" for="keterangan">
                                                <i class="bi bi-tags-fill" style="margin-right: 8px; color: navy;"></i> Keterangan
                                            </label>
                                            <textarea id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" rows="6">{{ old('keterangan', $data->keterangan) }}</textarea>
                                            @error('keterangan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End Left Column -->

                                    <!-- Right Column (6/12) -->
                                   <div class="col-md-6">
    <div class="form-modern mb-3">
        <label class="form-label-modern" for="peraturan">
            <i class="bi bi-file-earmark-pdf" style="margin-right: 8px; color: navy;"></i>
            File Struktur Organisasi (PDF)
        </label>

        <!-- PREVIEW PDF BARU -->
        <div id="preview-pdf-wrapper" style="display:none; margin-top:15px;">
            <p style="font-weight:600;">Preview PDF Baru:</p>

            <iframe id="preview-pdf"
                    src=""
                    frameborder="0"
                    width="100%"
                    height="300px"
                    style="border:2px dashed #ffc107; border-radius:6px;">
            </iframe>

            <!-- Tombol batal preview -->
            <button type="button" class="btn btn-sm btn-secondary mt-2"
                onclick="clearPreviewPDF()">
                Batal Preview
            </button>
        </div>

        <!-- PDF LAMA -->
        <div id="old-pdf-wrapper" style="margin-top:20px; transition:0.3s;">
            <p style="font-weight:600;">PDF Lama:</p>

            @if($data->peraturan && file_exists(public_path('storage/' . $data->peraturan)))
                <iframe src="{{ asset('storage/' . $data->peraturan) }}"
                        frameborder="0" width="100%" height="300px"
                        style="border-radius:6px; border:1px solid #ddd;"></iframe>

            @elseif($data->peraturan)
                <iframe src="{{ asset($data->peraturan) }}"
                        frameborder="0" width="100%" height="300px"
                        style="border-radius:6px; border:1px solid #ddd;"></iframe>

            @else
                <p>Data belum diupdate</p>
            @endif
        </div>

        <!-- INPUT FILE PDF -->
        <input type="file" name="peraturan" id="peraturan"
               class="form-control mt-3 @error('peraturan') is-invalid @enderror"
               accept="application/pdf"
               onchange="previewPDF(event)">

        @error('peraturan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>


                                </div> <!-- end row -->
                            </div>
                            <!-- end::Body -->
                            <br><br>


                        <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                            <div class="flex justify-end" style="margin-top: -40px;">
<button class="button-berkas" type="button" onclick="openModal()">

    <i class="bi bi-pencil-square" style="font-size: 20px; margin-right: 8px;"></i>

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


<script>
let currentPdfUrl = null;

function previewPDF(event) {
    const file = event.target.files[0];
    const previewWrapper = document.getElementById('preview-pdf-wrapper');
    const previewPDF = document.getElementById('preview-pdf');
    const oldWrapper = document.getElementById('old-pdf-wrapper');

    if (file) {
        // Revoke URL lama
        if (currentPdfUrl) {
            URL.revokeObjectURL(currentPdfUrl);
            currentPdfUrl = null;
        }

        currentPdfUrl = URL.createObjectURL(file);

        previewPDF.src = currentPdfUrl;
        previewWrapper.style.display = "block";

        // Pudarkan PDF lama
        oldWrapper.style.opacity = "0.45";
        oldWrapper.style.filter = "grayscale(70%)";
        oldWrapper.style.pointerEvents = "none";
    } else {
        clearPreviewPDF();
    }
}

function clearPreviewPDF() {
    const previewWrapper = document.getElementById('preview-pdf-wrapper');
    const previewPDF = document.getElementById('preview-pdf');
    const oldWrapper = document.getElementById('old-pdf-wrapper');
    const input = document.getElementById('peraturan');

    // Bersihkan URL
    if (currentPdfUrl) {
        URL.revokeObjectURL(currentPdfUrl);
        currentPdfUrl = null;
    }

    previewPDF.src = "";
    previewWrapper.style.display = "none";

    oldWrapper.style.opacity = "1";
    oldWrapper.style.filter = "none";
    oldWrapper.style.pointerEvents = "auto";

    // reset input file
    input.value = "";
}
</script>
