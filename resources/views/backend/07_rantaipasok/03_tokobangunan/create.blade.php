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

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.13_judulcreate')
                    </div>
                           {{-- ======================================================= --}}

        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
               <a
               @can('admin2')
               href="/betokobangunan"
               @endcan
               @can('supplier')
               href="/besuppliertokobangunan"
               @endcan
               >
  <button class="button-modern"  >
    <!-- Ikon Kembali -->
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        viewBox="0 0 16 16">
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
                           @php
                            $action = '#';
                            if (auth()->check() && auth()->user()->can('admin2')) {
                                $action = route('create.betokobangunan');
                            } elseif (auth()->check() && auth()->user()->can('supplier')) {
                                $action = route('create.betokobangunansupplier');
                            }
                        @endphp
                        <!--begin::Quick Example-->
                        <form action="{{ $action}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- begin::Body -->
                            <div class="card-body">
      <div class="row">
<div class="row">

    <!-- Left Column -->
    <div class="col-md-6">

        <!-- Hidden informasirantaipasok_id -->
        <input type="hidden" name="informasirantaipasok_id"
               value="{{ auth()->user()->informasirantaipasok->first()?->id }}">

        <!-- Nama Material -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="namamaterial">
                <i class="bi bi-box-seam" style="margin-right: 8px; color: navy;"></i> Nama Material
            </label>
            <input type="text" id="namamaterial" name="namamaterial"
                class="form-control @error('namamaterial') is-invalid @enderror"
                value="{{ old('namamaterial') }}">
            @error('namamaterial')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
<!-- Gambar Material -->
<div class="form-modern mb-3">
    <label class="form-label-modern" for="gambar">
        <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Gambar Material
    </label>
    <input type="file" id="gambar" name="gambar"
        class="form-control @error('gambar') is-invalid @enderror" accept="image/*">
    @error('gambar')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <!-- Preview Gambar -->
    <div class="mt-2">
        <img id="gambarPreview" src="#" alt="Preview Gambar" style="max-width: 200px; display: none; border: 1px solid #ccc; padding: 5px;">
    </div>
</div>

<!-- Script Preview -->
<script>
    const gambarInput = document.getElementById('gambar');
    const gambarPreview = document.getElementById('gambarPreview');

    gambarInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                gambarPreview.src = e.target.result;
                gambarPreview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        } else {
            gambarPreview.src = '#';
            gambarPreview.style.display = 'none';
        }
    });
</script>


        <!-- Keterangan -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="keterangan">
                <i class="bi bi-text-paragraph" style="margin-right: 8px; color: navy;"></i> Keterangan
            </label>
            <input type="text" id="keterangan" name="keterangan"
                class="form-control @error('keterangan') is-invalid @enderror"
                value="{{ old('keterangan') }}">
            @error('keterangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ketersediaan -->
<div class="form-modern mb-3">
    <label class="form-label-modern" for="ketersediaan">
        <i class="bi bi-text-paragraph" style="margin-right: 8px; color: navy;"></i> Ketersediaan
    </label>
    <select id="ketersediaan" name="ketersediaan"
        class="form-select @error('ketersediaan') is-invalid @enderror">
        <option value="">-- Pilih Ketersediaan --</option>
        <option value="Tersedia" {{ old('ketersediaan') == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
        <option value="Tidak Tersedia" {{ old('ketersediaan') == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
    </select>
    @error('ketersediaan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>



        <!-- Keterangan -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="notelepon">
                <i class="bi bi-text-paragraph" style="margin-right: 8px; color: navy;"></i> No Telepon
            </label>
            <input type="text" id="notelepon" name="notelepon"
                class="form-control @error('notelepon') is-invalid @enderror"
                value="{{ old('notelepon') }}">
            @error('notelepon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </div>
    <!-- End Left Column -->

    <!-- Right Column -->
    <div class="col-md-6">

      <!-- Lokasi -->
<div class="form-modern mb-3">
    <label class="form-label-modern" for="lokasi">
        <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Lokasi
    </label>
    <textarea id="lokasi" name="lokasi"
        class="form-control @error('lokasi') is-invalid @enderror"
        rows="6"
        placeholder="Masukkan lokasi lengkap...">{{ old('lokasi') }}</textarea>
    @error('lokasi')
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
                value="{{ old('harga') }}">
            <input type="hidden" id="harga" name="harga" value="{{ old('harga') }}">
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
                <option value="buah" {{ old('satuan') == 'buah' ? 'selected' : '' }}>Buah</option>
                <option value="lembar" {{ old('satuan') == 'lembar' ? 'selected' : '' }}>Lembar</option>
                <option value="batang" {{ old('satuan') == 'batang' ? 'selected' : '' }}>Batang</option>
                <option value="kg" {{ old('satuan') == 'kg' ? 'selected' : '' }}>Kilogram (kg)</option>
                <option value="liter" {{ old('satuan') == 'liter' ? 'selected' : '' }}>Liter</option>
                <option value="m" {{ old('satuan') == 'm' ? 'selected' : '' }}>Meter (m)</option>
                <option value="m2" {{ old('satuan') == 'm2' ? 'selected' : '' }}>Meter Persegi (m²)</option>
                <option value="m3" {{ old('satuan') == 'm3' ? 'selected' : '' }}>Meter Kubik (m³)</option>
                <option value="set" {{ old('satuan') == 'set' ? 'selected' : '' }}>Set</option>
                <option value="paket" {{ old('satuan') == 'paket' ? 'selected' : '' }}>Paket</option>
                <option value="roll" {{ old('satuan') == 'roll' ? 'selected' : '' }}>Roll</option>
                <option value="kaleng" {{ old('satuan') == 'kaleng' ? 'selected' : '' }}>Kaleng</option>
                <option value="pasang" {{ old('satuan') == 'pasang' ? 'selected' : '' }}>Pasang</option>
                <option value="unit" {{ old('satuan') == 'unit' ? 'selected' : '' }}>Unit</option>
            </select>
            @error('satuan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </div>
    <!-- End Right Column -->

</div>

<!-- Script format Rupiah untuk Harga -->
<script>
    const inputHargaView = document.getElementById('harga_view');
    const inputHargaHidden = document.getElementById('harga');

    function formatRupiah(angka) {
        let number_string = angka.replace(/[^,\d]/g, '').toString();
        let split = number_string.split(',');
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            let separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        return split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
    }

    inputHargaView.addEventListener('input', function () {
        let raw = this.value.replace(/\./g, '').replace(/[^0-9]/g, '');
        this.value = formatRupiah(raw);
        inputHargaHidden.value = raw;
    });

    window.addEventListener('DOMContentLoaded', () => {
        let oldValue = inputHargaView.value.replace(/\./g, '').replace(/[^0-9]/g, '');
        inputHargaHidden.value = oldValue;
        inputHargaView.value = formatRupiah(oldValue);
    });
</script>

</div>
                          <!-- End row -->
                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                              <div class="flex justify-end">
                                  <button type="button" onclick="openModal()" class="button-baru">
                                        <i class="bi bi-plus-lg"></i>
                                        <span>Tambah Data</span>
                                    </button>
                                    </div>

                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                        Apakah Anda ingin menambahkan data?
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
                                    Ya
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


                    <br><br>

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


