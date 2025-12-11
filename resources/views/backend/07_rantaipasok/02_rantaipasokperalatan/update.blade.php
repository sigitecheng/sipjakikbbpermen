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



        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">

                <a href="/berantaiperalatan">
                    <button class="button-modern">

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
                        <form action="{{ route('update.rantaipasokperalatan', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">

    <!-- ======================= KOLOM KIRI ======================= -->
    <div class="col-md-6">

        <!-- Informasi Rantai Pasok ID -->
        {{-- <input type="hidden" name="informasirantaipasok_id"
               value="{{ old('informasirantaipasok_id', $data->informasirantaipasok_id) }}"> --}}

        <!-- Gambar -->
     <div class="form-modern mb-3">
    <label class="form-label-modern" for="gambar">
        <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Gambar
    </label>

    <!-- Input Upload -->
    <input type="file" id="gambar" name="gambar"
           class="form-control @error('gambar') is-invalid @enderror"
           accept="image/*">

    @error('gambar')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <!-- Preview Data Lama -->
    <div style="margin-top: 10px;">
        <strong>Gambar/Foto Lama:</strong><br>

        @if($data->gambar && file_exists(public_path('storage/' . $data->gambar)))
            <img src="{{ asset('storage/' . $data->gambar) }}"
                 alt="Gambar Lama"
                 style="width: 100%; max-height: 300px; object-fit: contain;"
                 loading="lazy">
        @elseif($data->gambar)
            <img src="{{ asset($data->gambar) }}"
                 alt="Gambar Lama"
                 style="width: 100%; max-height: 300px; object-fit: contain;"
                 loading="lazy">
        @else
            <p>Data belum diupdate</p>
        @endif
    </div>

    <!-- Preview Gambar Baru -->
    <div id="previewBaruContainer" style="margin-top: 15px; display:none;">
        <strong>Gambar/Foto Baru:</strong><br>
        <img id="previewBaru"
             src=""
             alt="Preview Baru"
             style="width: 100%; max-height: 300px; object-fit: contain;">
    </div>
</div>

<script>
    // Preview Gambar Baru
    document.getElementById('gambar').addEventListener('change', function (event) {
        const file = event.target.files[0];
        const previewContainer = document.getElementById('previewBaruContainer');
        const previewImage = document.getElementById('previewBaru');

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewContainer.style.display = "block";
            };
            reader.readAsDataURL(file);
        } else {
            previewContainer.style.display = "none";
        }
    });
</script>



    </div>

    <!-- ======================= KOLOM KANAN ======================= -->
    <div class="col-md-6">
  <!-- Nama Material -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="namamaterial">
                <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Nama Material
            </label>
            <input type="text" id="namamaterial" name="namamaterial"
                class="form-control @error('namamaterial') is-invalid @enderror"
                value="{{ old('namamaterial', $data->namamaterial) }}">
            @error('namamaterial')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Harga -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="harga_view">
                <i class="bi bi-cash-stack" style="margin-right: 8px; color: navy;"></i> Harga
            </label>
            <input type="text" id="harga_view"
                class="form-control @error('harga') is-invalid @enderror"
                value="{{ old('harga', number_format($data->harga, 0, ',', '.')) }}" />
            <input type="hidden" id="harga" name="harga"
                   value="{{ old('harga', $data->harga) }}">
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Satuan -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="satuan">
                <i class="bi bi-rulers" style="margin-right: 8px; color: navy;"></i> Satuan
            </label>
            <select id="satuan" name="satuan"
                class="form-select @error('satuan') is-invalid @enderror">
                <option value="">-- Pilih Satuan --</option>
                @php
                    $satuanList = ['buah','lembar','batang','kg','liter','m','meter lari','m2','m3','set','paket','roll','kaleng','pasang','unit'];
                @endphp
                @foreach ($satuanList as $s)
                    <option value="{{ $s }}"
                        {{ old('satuan', $data->satuan) == $s ? 'selected' : '' }}>
                        {{ ucfirst($s) }}
                    </option>
                @endforeach
            </select>
            @error('satuan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Lokasi -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="lokasi">
                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Lokasi
            </label>
            <input type="text" id="lokasi" name="lokasi"
                class="form-control @error('lokasi') is-invalid @enderror"
                value="{{ old('lokasi', $data->lokasi) }}">
            @error('lokasi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ketersediaan -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="ketersediaan">
                <i class="bi bi-check-circle" style="margin-right: 8px; color: navy;"></i> Ketersediaan
            </label>
            <select id="ketersediaan" name="ketersediaan"
                class="form-select @error('ketersediaan') is-invalid @enderror">
                <option value="">-- Pilih --</option>
                <option value="Tersedia" {{ old('ketersediaan', $data->ketersediaan) == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Tidak Tersedia" {{ old('ketersediaan', $data->ketersediaan) == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
            </select>
            @error('ketersediaan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Keterangan -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="keterangan">
                <i class="bi bi-info-circle" style="margin-right: 8px; color: navy;"></i> Keterangan
            </label>
            <input type="text" id="keterangan" name="keterangan"
                class="form-control @error('keterangan') is-invalid @enderror"
                value="{{ old('keterangan', $data->keterangan) }}">
            @error('keterangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </div>

</div>

<!-- Script Format Harga -->
<script>
    const hargaView = document.getElementById('harga_view');
    const hargaHidden = document.getElementById('harga');

    function formatRupiah(angka) {
        let number_string = angka.replace(/[^,\d]/g, '');
        let split = number_string.split(',');
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        let ribuan = split[0].substr(sisa).match(/\d{3}/g);

        if (ribuan) rupiah += (sisa ? '.' : '') + ribuan.join('.');

        return split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
    }

    hargaView.addEventListener('input', function () {
        let raw = this.value.replace(/\./g, '').replace(/[^0-9]/g, '');
        this.value = formatRupiah(raw);
        hargaHidden.value = raw;
    });

    window.addEventListener('DOMContentLoaded', () => {
        let oldValue = hargaView.value.replace(/\./g, '').replace(/[^0-9]/g, '');
        hargaHidden.value = oldValue;
        hargaView.value = formatRupiah(oldValue);
    });
</script>

                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                                   <button type="button" onclick="openModal()"
                                    class="button-berkas">

                                    <i class="bi bi-pencil-square"></i>

                                Perbaikan Data ?
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
