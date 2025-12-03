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

        {{-- ======================================================= --}}
        {{-- ALERT --}}

        @include('backend.00_administrator.00_baganterpisah.06_alert')

        {{-- ======================================================= --}}

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/beagendaskktkk">
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
                        <form action="{{ route('create.bedatatkkkbbcreatenew') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Changed from POST to PUT for updating -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="card-body">
<div class="row">
    <!-- Left Column (6/12) -->
    <div class="col-md-6">

        <!-- SKK / Foto SKK -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="skkanda">
                <i class="bi bi-image" style="margin-right: 10px; color: navy;"></i> SKK Screenshot/ Jika TKK sudah Memilik SKK sebelumnya
            </label>
            <input type="file" id="skkanda" name="skkanda"
                   class="form-control @error('skkanda') is-invalid @enderror">
            @error('skkanda')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Agenda SKK -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="agendaskk_id">
                <i class="bi bi-calendar-event" style="margin-right: 10px; color: navy;"></i> Agenda SKK
            </label>
            <select id="agendaskk_id" name="agendaskk_id"
                    class="form-control @error('agendaskk_id') is-invalid @enderror">
                <option value="">Pilih Agenda SKK</option>
                @foreach($dataagendaskk as $agenda)
                    <option value="{{ $agenda->id }}" {{ old('agendaskk_id') == $agenda->id ? 'selected' : '' }}>
                        {{ $agenda->namakegiatan }}
                    </option>
                @endforeach
            </select>
            @error('agendaskk_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Jenjang Pendidikan -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="jenjangpendidikan_id">
                <i class="bi bi-mortarboard" style="margin-right: 10px; color: navy;"></i> Jenjang Pendidikan
            </label>
            <select id="jenjangpendidikan_id" name="jenjangpendidikan_id"
                    class="form-control @error('jenjangpendidikan_id') is-invalid @enderror">
                <option value="">Pilih Jenjang Pendidikan</option>
                @foreach($datajenjangpendidikan as $jenjang)
                    <option value="{{ $jenjang->id }}" {{ old('jenjangpendidikan_id') == $jenjang->id ? 'selected' : '' }}>
                        {{ $jenjang->jenjangpendidikan }}
                    </option>
                @endforeach
            </select>
            @error('jenjangpendidikan_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Nama Lengkap -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="namalengkap">
                <i class="bi bi-person" style="margin-right: 10px; color: navy;"></i> Nama Lengkap
            </label>
            <input type="text" id="namalengkap" name="namalengkap"
                   class="form-control @error('namalengkap') is-invalid @enderror"
                   value="{{ old('namalengkap') }}">
            @error('namalengkap')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- NIK -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="nik">
                <i class="bi bi-credit-card" style="margin-right: 10px; color: navy;"></i> NIK
            </label>
            <input type="text" id="nik" name="nik"
                   class="form-control @error('nik') is-invalid @enderror"
                   value="{{ old('nik') }}">
            @error('nik')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- TTL -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="ttl">
                <i class="bi bi-calendar-event" style="margin-right: 10px; color: navy;"></i> Tanggal Lahir
            </label>
            <input type="date" id="ttl" name="ttl"
                   class="form-control @error('ttl') is-invalid @enderror"
                   value="{{ old('ttl') }}">
            @error('ttl')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Jenis Kelamin -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="jeniskelamin">
                <i class="bi bi-gender-ambiguous" style="margin-right: 10px; color: navy;"></i> Jenis Kelamin
            </label>
            <select id="jeniskelamin" name="jeniskelamin"
                    class="form-control @error('jeniskelamin') is-invalid @enderror">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki"  {{ old('jeniskelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jeniskelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('jeniskelamin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <!-- Right Column -->
    <div class="col-md-6">

        <!-- Alamat -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="alamat">
                <i class="bi bi-house-door" style="margin-right: 10px; color: navy;"></i> Alamat
            </label>
            <textarea id="alamat" name="alamat"
                      class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- No Telepon -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="notelepon">
                <i class="bi bi-telephone" style="margin-right: 10px; color: navy;"></i> No Telepon
            </label>
            <input type="text" id="notelepon" name="notelepon"
                   class="form-control @error('notelepon') is-invalid @enderror"
                   value="{{ old('notelepon') }}">
            @error('notelepon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="email">
                <i class="bi bi-envelope" style="margin-right: 10px; color: navy;"></i> Email
            </label>
            <textarea id="email" name="email"
                      class="form-control @error('email') is-invalid @enderror">{{ old('email') }}</textarea>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Sekolah -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="namasekolah_id">
                <i class="bi bi-building" style="margin-right: 10px; color: navy;"></i> Nama Sekolah
            </label>
            <select id="namasekolah_id" name="namasekolah_id"
                    class="form-control @error('namasekolah_id') is-invalid @enderror">
                <option value="">Pilih Sekolah</option>
                @foreach($datanamasekolah as $sekolah)
                    <option value="{{ $sekolah->id }}" {{ old('namasekolah_id') == $sekolah->id ? 'selected' : '' }}>
                        {{ $sekolah->namasekolah }}
                    </option>
                @endforeach
            </select>
            @error('namasekolah_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Kecamatan -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="kecamatankbb_id">
                <i class="bi bi-geo-alt" style="margin-right: 10px; color: navy;"></i> Kecamatan
            </label>
            <select id="kecamatankbb_id" name="kecamatankbb_id"
                    class="form-control @error('kecamatankbb_id') is-invalid @enderror">
                <option value="">Pilih Kecamatan</option>
                @foreach($datakecamatankbb as $kec)
                    <option value="{{ $kec->id }}" {{ old('kecamatankbb_id') == $kec->id ? 'selected' : '' }}>
                        {{ $kec->kecamatankbb }}
                    </option>
                @endforeach
            </select>
            @error('kecamatankbb_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tahun Pilihan -->
        <div class="form-modern mb-3">
            <label class="form-label-modern" for="tahunpilihan_id">
                <i class="bi bi-calendar" style="margin-right: 10px; color: navy;"></i> Tahun Bimtek
            </label>
            <select id="tahunpilihan_id" name="tahunpilihan_id"
                    class="form-control @error('tahunpilihan_id') is-invalid @enderror">
                <option value="">Pilih Tahun</option>
                @foreach($datatahunpilihan as $tahun)
                    <option value="{{ $tahun->id }}" {{ old('tahunpilihan_id') == $tahun->id ? 'selected' : '' }}>
                        {{ $tahun->tahunpilihan }}
                    </option>
                @endforeach
            </select>
            @error('tahunpilihan_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <!-- Nama Asosiasi -->
<div class="form-modern mb-3">
    <label class="form-label-modern" for="namaasosiasi">
        <i class="bi bi-people" style="margin-right: 10px; color: navy;"></i> Utuasan Contoh : (DPUTR Kab Bandung Barat/Instansi/CV Lainnya)
    </label>
    <input type="text"
           id="namaasosiasi"
           name="namaasosiasi"
           class="form-control @error('namaasosiasi') is-invalid @enderror"
           value="{{ old('namaasosiasi') }}"
           placeholder="Masukkan nama asosiasi">

    @error('namaasosiasi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

    </div>
</div>

<!-- ---------------------------------------------- -->
<!--   PEMBATAS BERKAS                              -->
<!-- ---------------------------------------------- -->

<div style="display: flex; align-items: center; text-align: center; margin: 10px 0;">
    <hr style="flex: 1;">
    <span class="button-modern" style="margin: 0 10px; font-weight: bold;">Berkas Administrasi Tenaga Kerja</span>
    <hr style="flex: 1;">
</div>

<!-- ---------------------------------------------- -->
<!--  FILE UPLOAD                                   -->
<!-- ---------------------------------------------- -->

<div class="row mt-4">

    @php
        $fileFields = [
            'uploadktp' => ['label' => 'KTP', 'icon' => 'bi-credit-card'],
            'uploadfoto' => ['label' => 'Foto', 'icon' => 'bi-person'],
            'uploadijazah' => ['label' => 'Ijazah', 'icon' => 'bi-file-earmark-text'],
            'uploadpengalaman' => ['label' => 'Pengalaman Kerja', 'icon' => 'bi-file-earmark-medical'],
            'uploadkebenarandata' => ['label' => 'Surat Kebenaran Data', 'icon' => 'bi-file-earmark-check'],
            'uploadnpwp' => ['label' => 'NPWP', 'icon' => 'bi-file-earmark'],
            'uploaddaftarriwayathidup' => ['label' => 'Daftar Riwayat Hidup', 'icon' => 'bi-file-earmark-person']
        ];
    @endphp

    @foreach($fileFields as $field => $info)
        <div class="col-md-4 mb-3">

            <label class="form-label-modern" for="{{ $field }}">
                <i class="bi {{ $info['icon'] }}" style="margin-right: 8px; color: navy;"></i>
                {{ $info['label'] }}
            </label>

            <!-- Input file -->
            <input type="file" id="{{ $field }}" name="{{ $field }}"
                   class="form-control @error($field) is-invalid @enderror">
            @error($field)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>
    @endforeach

</div>

                                </div>
                                </div>
                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                                    <button type="button" onclick="openModal()" class="button-baru">
                                    <i class="bi bi-pencil-square"
                                    style="font-size: 20px; margin-right: 8px;"></i>
                                    <span style="font-family: 'Poppins', sans-serif;">Tambah Data ?</span>
                                </button>

                                </div>
                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                        Apakah Anda yakin ingin menambahkan data ini?
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
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Ambil semua input file yang ada di form
    const fileInputs = document.querySelectorAll('input[type="file"]');

    fileInputs.forEach(input => {
        input.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (!file) return;

            // Cari preview image sebelumnya
            let preview = event.target.previousElementSibling;

            // Jika sebelumnya bukan <img>, buat elemen baru
            if (!preview || preview.tagName.toLowerCase() !== 'img') {
                preview = document.createElement('img');
                preview.style.width = '100%';
                preview.style.maxHeight = '200px';
                preview.style.objectFit = 'contain';
                event.target.parentNode.insertBefore(preview, event.target);
            }

            // Buat URL untuk menampilkan preview
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        });
    });
});
</script>
