@include('frontend.A00_new.01_halamanutama.newheader')
                @include('backend.00_administrator.00_baganterpisah.11_alert')
<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="transparent-header">
        <div class="tg-header__top">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="tg-header__top-info">
                            <ul class="list-wrap">
                                <li><i class="fas fa-building"></i> Dinas Pekerjaan Umum Dan Tata Ruang Kabupaten Bandung Barat</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tg-header__top-right">
                            <ul class="list-wrap">
                                @include('frontend.A00_new.01_halamanutama.newlogin')


                                {{-- <li>
                                    <div class="tg-header__top-social">
                                        <ul class="list-wrap">
                                            <li><a href="https://www.facebook.com/" target="_blank"><img src="/assets/assets/img/icons/facebook.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://x.com/home" target="_blank"><img src="/assets/assets/img/icons/twitter.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><img src="/assets/assets/img/icons/instagram.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://www.pinterest.com/" target="_blank"><img src="/assets/assets/img/icons/pinterest.svg" alt="" class="injectable"></a></li>
                                        </ul>
                                    </div>
                                </li> --}}

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.A00_new.01_halamanutama.newnavbar')

        <!-- Mobile Menu  -->
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
      @include('frontend.A00_new.01_halamanutama.newlogo')
                          {{-- <div class="tgmobile__search">
                    <form action="#">
                        <input type="text" placeholder="Search here...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div> --}}
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                {{-- <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div> --}}
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->

        <!-- offCanvas-menu -->
        <div class="offCanvas__info">
            <div class="offCanvas__close-icon menu-close">
                <button><img src="/assets/assets/img/icons/times.svg" alt="" class="injectable"></button>
            </div>
            <div class="offCanvas__logo mb-30">
                <a href="#"><img src="/storage/logo/sipjakikbb.png" alt="Logo"></a>
                <a href="#"><img src="/assets/icon/pupr.png" alt="Logo"></a>
            </div>
            <div class="offCanvas__content">
                <p>Sistem Pembina Jasa Konstruksi</p>
            </div>
            {{-- <div class="offCanvas__img">
                <ul class="list-wrap">
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta01.jpg" alt="img"></a></li>
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta02.jpg" alt="img"></a></li>
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta03.jpg" alt="img"></a></li>
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta04.jpg" alt="img"></a></li>
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta05.jpg" alt="img"></a></li>
                    <li><a href="javascript:void(0)"><img src="/assets/assets/img/images/footer_insta06.jpg" alt="img"></a></li>
                </ul>
            </div> --}}
            <div class="offCanvas__side-info">
                <div class="contact-list">
                    <i class="flaticon-placeholder"></i>
                    <p>Dinas Pekerjaan Umum Dan Tata Ruang Kabupaten Bandung Barat</p>
                </div>
                {{-- <div class="contact-list">
                    <i class="flaticon-telephone"></i>
                    <a href="tel:0123456789">+123 888 9999</a>
                </div> --}}
                {{-- <div class="contact-list">
                    <i class="flaticon-envelope"></i>
                    <a href="mailto:info@beeko.com">info@beeko.com</a>
                </div> --}}
            </div>
            <div class="offCanvas__social">
                <h6 class="title">Follow us</h6>
                <ul class="list-wrap">
                    <li><a href="/" target="_blank"><img src="/assets/assets/img/icons/facebook.svg" alt="" class="injectable"></a></li>
                    <li><a href="/" target="_blank"><img src="/assets/assets/img/icons/twitter.svg" alt="" class="injectable"></a></li>
                    <li><a href="/" target="_blank"><img src="/assets/assets/img/icons/instagram.svg" alt="" class="injectable"></a></li>
                    <li><a href="/" target="_blank"><img src="/assets/assets/img/icons/pinterest.svg" alt="" class="injectable"></a></li>
                </ul>
            </div>
        </div>
        <div class="offCanvas__overly"></div>
        <!-- offCanvas-menu-end -->

    </header>
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">

<section style="
    background-image: url('/assets/assets/img/bg/perbaikanbanner.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 145px;
">
</section>
        <!-- about-area -->
        <section class="about__area-six section-py-130" style="margin-top: -75px;">
            {{-- @include('frontend.A00_new.01_halamanutama.newjudul') --}}

<div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="w-100 d-flex align-items-center justify-content-between p-4"
                style="
                    background: linear-gradient(135deg, #f8f9fa, #eef2f7);
                    border-left: 6px solid #0d6efd;
                    border-radius: 12px;
                    box-shadow: 0 3px 10px rgba(0,0,0,0.06);
                ">

                <!-- TITLE -->
                <div class="d-flex align-items-center gap-3">
                    <div style="
                        width:42px;
                        height:42px;
                        border-radius:10px;
                        background:#0d6efd;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        color:white;
                        box-shadow: 0 3px 8px rgba(13,110,253,0.35);
                    ">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>

                    <div>
                        <div style="
                            font-family:'Poppins';
                            font-size:18px;
                            font-weight:700;
                            color:#212529;
                        ">
                            {{ $data->namakegiatan ?? 'Data Paket Pekerjaan' }}
                        </div>

                        <div style="
                            font-family:'Poppins';
                            font-size:13px;
                            color:#6c757d;
                        ">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container">

    {{-- ================= FORM ================= --}}
    <div class="row" style="margin-top: 25px;">
        <div class="col-lg-8 mx-auto">
            <form action="{{ route('daftarpesertatkkkbb') }}" method="POST" enctype="multipart/form-data">
                @csrf


<input type="hidden" name="agendaskk_id" value="{{ $data->id }}">
<!-- JANGAN -->
{{-- <input type="hidden" name="user_id" value="{{ Auth::id() }}"> --}}

{{-- ================= DATA SKK ================= --}}
<h5 class="fw-semibold mb-3">Data SKK</h5>
<div class="row">
   <div class="col-md-6 mb-3">
    <label class="form-label" style="color: red; font-size:12px;">Upload Screnshoot SKK Anda Jika Sudah Memiliki </label>

    <!-- Gambar Contoh SKK -->
    <div class="mb-2 text-center">
        <img src="{{ asset('assets/icon/skksc.jpg') }}"
             alt="Contoh SKK"
             style="
                max-width: 100%;
                height: auto;
                border-radius: 8px;
                border: 1px solid #ddd;
             ">
        <small class="text-muted d-block mt-1">
            Contoh tampilan SKK
        </small>
    </div>

    <!-- Upload Foto -->
    <input type="file"
           name="skkanda"
           class="form-control"
           accept="image/*"
           onchange="previewSKK(this)">

    <!-- Preview Upload -->
    <div class="mt-2 text-center">
        <img id="preview-skk"
             style="display:none; max-width:100%; height:auto; border-radius:8px; border:1px solid #ccc;">
    </div>
</div>

<script>
function previewSKK(input) {
    const preview = document.getElementById('preview-skk');
    const file = input.files[0];

    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    }
}
</script>

<div class="col-md-6 mb-3">
    <label class="form-label">Jenjang SKK</label>

    <select name="jenjang_id"
            class="form-select @error('jenjang_id') is-invalid @enderror">
        <option value="">-- Pilih --</option>

        @foreach($listjenjang as $j)
            <option value="{{ $j->id }}"
                {{ old('jenjang_id') == $j->id ? 'selected' : '' }}>
                Jenjang {{ $j->jenjang }}
            </option>
        @endforeach
    </select>

    @error('jenjang_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

</div>

{{-- ================= DATA PRIBADI ================= --}}
<h5 class="fw-semibold mt-4 mb-3">Data Pribadi</h5>
<div class="row">
    {{-- NAMA LENGKAP --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="namalengkap"
               class="form-control @error('namalengkap') is-invalid @enderror"
               value="{{ old('namalengkap') }}">

        @error('namalengkap')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- NIK --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">NIK</label>
        <input type="text" name="nik"
               class="form-control @error('nik') is-invalid @enderror"
               value="{{ old('nik') }}">

        @error('nik')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- TEMPAT LAHIR --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">Tempat Lahir</label>
        <input type="text" name="tempatlahir"
               class="form-control @error('tempatlahir') is-invalid @enderror"
               value="{{ old('tempatlahir') }}">

        @error('tempatlahir')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- TANGGAL LAHIR --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="ttl"
               class="form-control @error('ttl') is-invalid @enderror"
               value="{{ old('ttl') }}">

        @error('ttl')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- JENIS KELAMIN --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select name="jeniskelamin"
                class="form-select @error('jeniskelamin') is-invalid @enderror">
            <option value="">-- Pilih --</option>
            <option value="Laki-laki" {{ old('jeniskelamin') == 'Laki-laki' ? 'selected' : '' }}>
                Laki-laki
            </option>
            <option value="Perempuan" {{ old('jeniskelamin') == 'Perempuan' ? 'selected' : '' }}>
                Perempuan
            </option>
        </select>

        @error('jeniskelamin')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- NO TELEPON --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">No Telepon</label>
        <input type="text" name="notelepon"
               class="form-control @error('notelepon') is-invalid @enderror"
               value="{{ old('notelepon') }}">

        @error('notelepon')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- ALAMAT --}}
    <div class="col-md-12 mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" rows="2"
                  class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>

        @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- EMAIL --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email"
               class="form-control @error('email') is-invalid @enderror"
               value="{{ old('email') }}">

        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

</div>

{{-- ================= DATA PENDIDIKAN ================= --}}
<h5 class="fw-semibold mt-4 mb-3">Data Pendidikan</h5>
<div class="row">
    <div class="col-md-6 mb-3">
        <label>Jenjang Pendidikan</label>
        <select name="jenjangpendidikan_id" class="form-select">
            <option value="">-- Pilih --</option>
            @foreach($listJenjang as $j)
                <option value="{{ $j->id }}">{{ $j->jenjangpendidikan }}</option>
            @endforeach
        </select>
    </div>


    <div class="col-md-6 mb-3">
        <label>Tahun Lulus Sekolah/Universitas</label>
        <input type="number" name="tahunlulus" class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Tahun Bimbingan Teknis</label>
        <select name="tahunpilihan_id" class="form-select">
            <option value="">-- Pilih --</option>
            @foreach($listtahunpilihan as $t)
                <option value="{{ $t->id }}">{{ $t->tahunpilihan }}</option>
            @endforeach
        </select>
    </div>
</div>

{{-- ================= PEKERJAAN & WILAYAH ================= --}}
<h5 class="fw-semibold mt-4 mb-3">Pekerjaan & Wilayah</h5>
<div class="text-center p-2">
    <img src="{{ asset('assets/icon/jenjangbaru.jpg') }}"
         alt="Jenjang Baru KBB"
         class="img-fluid rounded"
         style="border:1px solid #ddd;">
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label>Jabatan Kerja</label>
        <select name="jabatankerja_id" class="form-select">
            <option value="">-- Pilih --</option>
            @foreach($listjabatankerja as $j)
                <option value="{{ $j->id }}">{{ $j->jabatankerja }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label>Kecamatan</label>
        <select name="kecamatankbb_id" class="form-select">
            <option value="">-- Pilih --</option>
            @foreach($listkecamatankbb as $k)
                <option value="{{ $k->id }}">{{ $k->kecamatankbb }}</option>
            @endforeach
        </select>
    </div>
</div>

{{-- ================= UPLOAD DOKUMEN ================= --}}
<h5 class="fw-semibold mt-4 mb-3">Upload Dokumen</h5>

<div class="row">

    {{-- KTP --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">KTP | jpg,jpeg,png,pdf Max 20 Mb </label>
        <input type="file" name="uploadktp" class="form-control"
               accept="image/*,application/pdf"
               onchange="previewFile(this,'preview_ktp')">

        <div id="preview_ktp" class="mt-2 d-none"></div>
    </div>

    {{-- FOTO --}}
    <div class="col-md-6 mb-3">
        <label class="form-label"> (Pas Foto Latar Merah 4x6) | jpg,jpeg,png,pdf Max 20 Mb </label>
        <input type="file" name="uploadfoto" class="form-control"
               accept="image/*"
               onchange="previewFile(this,'preview_foto')">

        <div id="preview_foto" class="mt-2 d-none"></div>
    </div>

    {{-- IJAZAH --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">Ijazah | pdf Max 20 Mb </label>
        <input type="file" name="uploadijazah" class="form-control"
               accept="image/*,application/pdf"
               onchange="previewFile(this,'preview_ijazah')">

        <div id="preview_ijazah" class="mt-2 d-none"></div>
    </div>

    {{-- PENGALAMAN --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">Pengalaman | pdf Max 20 Mb </label>
        <input type="file" name="uploadpengalaman" class="form-control"
               accept="application/pdf"
               onchange="previewFile(this,'preview_pengalaman')">

        <div id="preview_pengalaman" class="mt-2 d-none"></div>
    </div>

    {{-- NPWP --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">NPWP | jpg,jpeg,png,pdf Max 20 Mb</label>
        <input type="file" name="uploadnpwp" class="form-control"
               accept="image/*,application/pdf"
               onchange="previewFile(this,'preview_npwp')">

        <div id="preview_npwp" class="mt-2 d-none"></div>
    </div>

    {{-- CV --}}
    <div class="col-md-6 mb-3">
        <label class="form-label">Daftar Riwayat Hidup | pdf Max 20 Mb</label>
        <input type="file" name="uploaddaftarriwayathidup" class="form-control"
               accept="application/pdf"
               onchange="previewFile(this,'preview_cv')">

        <div id="preview_cv" class="mt-2 d-none"></div>
    </div>
{{-- SURAT PERNYATAAN --}}
<div class="col-md-12 mb-4">
    <label class="form-label fw-semibold">
        Surat Pernyataan Kebenaran Data
        <span class="text-muted">(PDF • Maks 20 MB)</span>
    </label>

    {{-- LINK DOWNLOAD TEMPLATE --}}
    <div class="mb-2">
        <a href="{{ asset('assets/icon/BUKTI_KEBENARAN_DATANEW.docx') }}"
           class="btn btn-sm btn-outline-primary"
           download>
            <i class="bi bi-download me-1"></i>
            Download Template Surat Pernyataan
        </a>
    </div>

    {{-- INPUT FILE --}}
    <input type="file"
           name="uploadkebenarandata"
           class="form-control"
           accept="application/pdf"
           onchange="previewFile(this,'preview_surat')">

    {{-- PREVIEW --}}
    <div id="preview_surat" class="mt-3 d-none"></div>

    {{-- INFO --}}
    <small class="text-muted">
        Silakan unduh template, isi & tanda tangani, lalu upload dalam bentuk PDF.
    </small>
</div>

<script>
function previewFile(input, previewId) {
    const preview = document.getElementById(previewId);
    preview.innerHTML = '';
    preview.classList.remove('d-none');

    if (!input.files || !input.files[0]) {
        preview.classList.add('d-none');
        return;
    }

    const file = input.files[0];

    // VALIDASI UKURAN (20 MB)
    if (file.size > 20 * 1024 * 1024) {
        alert('Ukuran file maksimal 20 MB');
        input.value = '';
        preview.classList.add('d-none');
        return;
    }

    const fileURL = URL.createObjectURL(file);

    if (file.type === 'application/pdf') {
        preview.innerHTML = `
            <iframe src="${fileURL}"
                    width="100%"
                    height="300"
                    style="border:1px solid #ddd; border-radius:8px;">
            </iframe>
        `;
    } else {
        preview.innerHTML = `<small class="text-danger">File harus PDF</small>`;
    }
}
</script>



</div>

<script>
function previewFile(input, previewId) {
    const preview = document.getElementById(previewId);
    preview.innerHTML = '';
    preview.classList.remove('d-none');

    if (!input.files || !input.files[0]) {
        preview.classList.add('d-none');
        return;
    }

    const file = input.files[0];
    const fileURL = URL.createObjectURL(file);

    if (file.type.includes('image')) {
        preview.innerHTML = `
            <img src="${fileURL}" class="img-fluid rounded shadow-sm"
                 style="max-height:200px;">
        `;
    } else if (file.type === 'application/pdf') {
        preview.innerHTML = `
            <iframe src="${fileURL}" width="100%" height="200"
                    style="border:1px solid #ddd;"></iframe>
        `;
    } else {
        preview.innerHTML = `<small class="text-danger">Format tidak didukung</small>`;
    }
}
</script>

{{-- ================= LAINNYA ================= --}}
<h5 class="fw-semibold mt-4 mb-3">Informasi Tambahan</h5>
<div class="row">
    <div class="col-md-6 mb-3">
        <label>Nama Utusan/Asosiasi/PT/CV/Lainnya</label>
        <input type="text" name="namaasosiasi" class="form-control">
    </div>

    @foreach([
        'punyaskk' => 'Memiliki SKK?',
        'punyasiki' => 'Memiliki SIKI?',
        'portalpupr' => 'Terdaftar Portal PUPR?',
        'siappatuh' => 'Terdaftar SIAP PATUH?'
    ] as $name => $label)
    <div class="col-md-6 mb-3">
        <label>{{ $label }}</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="{{ $name }}" value="Ya">
            <label class="form-check-label">Ya</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="{{ $name }}" value="Tidak">
            <label class="form-check-label">Tidak</label>
        </div>
    </div>
    @endforeach
</div>

{{-- ================= BUTTON TRIGGER MODAL ================= --}}
<button type="button" class="btn btn-primary w-100 mt-4" data-bs-toggle="modal" data-bs-target="#modalKonfirmasi">
    <i class="bi bi-save me-1"></i> Simpan Data Peserta
</button>

{{-- ================= MODAL KONFIRMASI ================= --}}
<div class="modal fade" id="modalKonfirmasi" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-question-circle me-1"></i> Konfirmasi Data
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p>Apakah Anda yakin data yang diinput sudah <strong>lengkap dan benar</strong>?</p>
                <div class="alert alert-warning mb-0">
                    <i class="bi bi-exclamation-triangle me-1"></i>
                    Data yang disimpan tidak dapat diubah tanpa persetujuan admin.
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Periksa Lagi
                </button>
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-check-circle me-1"></i> Ya, Simpan Data
                </button>
            </div>

        </div>
    </div>
</div>





            </form>
        </div>
    </div>
</div>


        </section>
        <!-- about-area-end -->

    </main>
    <!-- main-area-end -->

@include('frontend.A00_new.01_halamanutama.newfooter')
