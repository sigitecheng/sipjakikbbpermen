<style>
    .form-group {
    margin-bottom: 20px;
    padding: 15px;
    background: #fff;
    border-left: 4px solid #2517eb;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    min-height: 80px;
}
.form-group label {
    margin-bottom: 5px;
    font-weight: 600;
    color: #2517eb;
}
.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-family: inherit;
    font-size: inherit;
}

</style>
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

     <!-- Menampilkan pesan sukses -->
<br>

     <div class="container-fluid">
         <!--begin::Row-->
         <div class="row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                            <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
        </div>


        <script>
                  function updateEntries() {
                let selectedValue = document.getElementById("entries").value;
                let url = new URL(window.location.href);
                url.searchParams.set("perPage", selectedValue);
                window.location.href = url.toString();
            }
        </script>

<!-- Tombol Create -->
<a href="/beprofilrantaipasok">
   <button class="button-modern">
    <i class="bi bi-arrow-left" style="font-size: 18px; transition: all 0.3s ease;"></i>
    Kembali
</button>
</a>


                        </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

<div class="admin-profile-container" style="
    max-width: 800px;
    margin: 30px auto;
    padding: 30px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    border: 2px solid;
    border-image: linear-gradient(45deg, #D4AF37, #2ECC71) 1;
    position: relative;
    overflow: hidden;
">
    <!-- Hiasan sudut -->
    <div class="corner-decor" style="
        position: absolute;
        width: 50px;
        height: 50px;
        top: 0;
        right: 0;
        border-top: 2px solid #D4AF37;
        border-right: 2px solid #D4AF37;
        border-top-right-radius: 10px;
    "></div>

    <div class="corner-decor" style="
        position: absolute;
        width: 50px;
        height: 50px;
        bottom: 0;
        left: 0;
        border-bottom: 2px solid #2ECC71;
        border-left: 2px solid #2ECC71;
        border-bottom-left-radius: 10px;
    "></div>

    <h4 style="
        text-align: center;
        margin-bottom: 30px;
        color: #333;
        font-family: 'Arial', sans-serif;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    ">Update Profil Akun Anda !</h4>

    <form action="{{ route('admin.informasirantaipasok', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

   <input type="hidden" name="user_id" value="{{ $user->id }}">

    {{-- Foto Perusahaan --}}

    <div style="margin-top: 10px; text-align:center;">
        @php
            $fotoUrl = $informasi && $informasi->fotoperusahaan
                        ? (file_exists(public_path('storage/' . $informasi->fotoperusahaan))
                            ? asset('storage/' . $informasi->fotoperusahaan)
                            : (file_exists(public_path($informasi->fotoperusahaan))
                                ? asset($informasi->fotoperusahaan)
                                : $informasi->fotoperusahaan)
                          )
                        : asset('/assets/icon/akunfotoperusahaan.png');
        @endphp

        <img id="fotoperusahaanPreview" src="{{ $fotoUrl }}" alt="Foto Perusahaan" style="
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #2517eb;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 10px;
        ">

        <label for="fotoperusahaanInput" style="display:block; margin-bottom:5px; font-weight:600; color:#2517eb; cursor:pointer;">
            Ganti Foto Perusahaan
        </label>
        <input type="file" name="fotoperusahaan" accept="image/*" id="fotoperusahaanInput" style="display:block; margin:0 auto;">
        @error('fotoperusahaan')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    <script>
        const fotoperusahaanInput = document.getElementById('fotoperusahaanInput');
        const fotoperusahaanPreview = document.getElementById('fotoperusahaanPreview');

        fotoperusahaanInput.addEventListener('change', function(){
            const file = this.files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function(e){
                    fotoperusahaanPreview.setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    </script>

    {{-- Nama Perusahaan --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>Nama Perusahaan</label>
        <input type="text" name="namaperusahaan" value="{{ old('namaperusahaan', $informasi->namaperusahaan ?? '') }}" placeholder="Masukan Nama Perusahaan" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
        @error('namaperusahaan')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Tahun Berdiri --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>Tahun Berdiri</label>
        <input type="text" name="tahunberdiri" value="{{ old('tahunberdiri', $informasi->tahunberdiri ?? '') }}" placeholder="Masukan Tahun Berdiri" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
        @error('tahunberdiri')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    {{-- NIB --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>NIB</label>
        <input type="text" name="nib" value="{{ old('nib', $informasi->nib ?? '') }}" placeholder="Masukan NIB" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
        @error('nib')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    {{-- NPWP --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>NPWP</label>
        <input type="text" name="npwp" value="{{ old('npwp', $informasi->npwp ?? '') }}" placeholder="Masukan NPWP" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
        @error('npwp')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Telepon --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>Telepon</label>
        <input type="text" name="telepon" value="{{ old('telepon', $informasi->telepon ?? '') }}" placeholder="Masukan Nomor Telepon" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
        @error('telepon')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Email --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $informasi->email ?? '') }}" placeholder="Masukan Email" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
        @error('email')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Website --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>Website (Jika Ada)</label>
        <input type="text" name="website" value="{{ old('website', $informasi->website ?? '') }}" placeholder="Masukan Website" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
        @error('website')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Alamat Lengkap --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>Alamat Lengkap</label>
        <textarea name="alamatlengkap" placeholder="Masukan Alamat Lengkap" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">{{ old('alamatlengkap', $informasi->alamatlengkap ?? '') }}</textarea>
        @error('alamatlengkap')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Pimpinan --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>Nama Pimpinan</label>
        <input type="text" name="namapimpinan" value="{{ old('namapimpinan', $informasi->namapimpinan ?? '') }}" placeholder="Masukan Nama Pimpinan" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
        @error('namapimpinan')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Jabatan --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>Jabatan</label>
        <input type="text" name="jabatan" value="{{ old('jabatan', $informasi->jabatan ?? '') }}" placeholder="Masukan Jabatan Pimpinan" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
        @error('jabatan')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Keterangan Perusahaan --}}
    <div class="form-group" style="margin-bottom:20px; padding:15px; background: #f9f9f9; border-left:4px solid #2517eb; border-radius:5px;">
        <label>Keterangan Perusahaan</label>
        <textarea name="keteranganperusahaan" placeholder="Deskripsi Singkat Perusahaan" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">{{ old('keteranganperusahaan', $informasi->keteranganperusahaan ?? '') }}</textarea>
        @error('keteranganperusahaan')
            <div style="color:red; font-size:13px;">{{ $message }}</div>
        @enderror
    </div>



                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">

                                   <button type="button" onclick="openModal()"
                                 class="button-berkas">
                    <!-- Icon Pencil Square Bootstrap -->
                    <i class="bi bi-pencil-square"></i>


                                Input Informasi ?
                            </button>

                                </div>
                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                        Apakah Anda yakin ingin menambahkan <br> informasi perusahaan/toko anda?
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

    </form>
</div>

<script>
    function previewImage(input) {
        const preview = document.getElementById('avatar-preview');
        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
</script>

                    </div>
                 </div>

                 {{-- @include('backend.00_administrator.00_baganterpisah.07_paginations') --}}

                 <br><br>


                 <!-- Modal Konfirmasi Hapus -->
                 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                 <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <p>Apakah Anda Ingin Menghapus Data : <span id="itemName"></span>?</p>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                 <form id="deleteForm" method="POST" action="">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger">Hapus</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>

                 <script>
                 function setDeleteUrl(button) {
                     var namasekolah = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = namasekolah;
                     var deleteUrl = "/namasekolah/delete/" + encodeURIComponent(namasekolah);
                     document.getElementById('deleteForm').action = deleteUrl;
                 }
                 </script>

                 <style>
                     .table-responsive {
                         max-width: 100%;
                         overflow-x: auto;
                     }
                 </style>

             </div>
             <!-- /.card -->
         </div>
         <!-- /.col -->
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

   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
   <script>
    function exportTableToExcel(tableID, filename = '') {
        var table = document.getElementById(tableID);
        var wb = XLSX.utils.table_to_book(table, {sheet:"Sheet 1"});
        return XLSX.writeFile(wb, filename + '.xlsx');
    }
    </script>
