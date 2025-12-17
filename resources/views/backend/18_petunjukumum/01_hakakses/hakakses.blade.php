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
            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer;">
                {{-- <option value="10">10</option> --}}
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
            </select>
        </div>


        <script>
                  function updateEntries() {
                let selectedValue = document.getElementById("entries").value;
                let url = new URL(window.location.href);
                url.searchParams.set("perPage", selectedValue);
                window.location.href = url.toString();
            }
        </script>

                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Judul Peraturan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                            <i class="bi bi-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                        </div>
                        <script>
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);
                                window.location.href = url.toString();
                            }

                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/permenuu?search=${input}`)
                                .then(response => response.text())
                                .then(html => {
                                    let parser = new DOMParser();
                                    let doc = parser.parseFromString(html, "text/html");
                                    let newTableBody = doc.querySelector("#tableBody").innerHTML;
                                    document.querySelector("#tableBody").innerHTML = newTableBody;
                                })
                                .catch(error => console.error("Error fetching search results:", error));
                        }

                                </script>
<!-- Tombol Download Excel -->
<button onclick="exportTableToExcel('tabelBujkkonstruksi', 'data_undangundangjasakonstruksi')" class="button-berkas">
    <i class="bi bi-download"></i> Download Excel
</button>

<!-- Tombol Create -->
<a href="/permenuu/create">
    <button class="button-modern">
        <i class="bi bi-plus-lg"></i> Tambah Data
    </button>
</a>

                        </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

                        <div class="container-fluid px-0 mb-4">
    <div class="d-flex justify-content-center p-4"
         style="
            background: linear-gradient(135deg, #f8f9fa, #eef2f7);
            border-left: 6px solid #0d6efd;
            border-radius: 14px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.08);
            font-family: 'Poppins', sans-serif;
         ">
        <img src="{{ asset('assets/assets//petunjukumum/01hakakses.png') }}"
             alt="Ilustrasi Hak Akses Aplikasi"
             style="
                max-width:50%;
                height:auto;
                border-radius:12px;
             ">
    </div>
</div>

                     </div>

                 </div>

                 <div class="container-fluid px-0">
    <div class="p-4"
         style="
            background: linear-gradient(135deg, #f8f9fa, #eef2f7);
            border-left: 6px solid #0d6efd;
            border-radius: 14px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.08);
            font-family: 'Poppins', sans-serif;
         ">

        <p style="
            font-size:14px;
            color:#495057;
            line-height:1.8;
            margin-bottom:0;
        ">
            Sistem Informasi Pembina Jasa Konstruksi dirancang dengan mekanisme hak akses
            untuk memastikan pengelolaan data berjalan secara tertib, aman, dan sesuai
            kewenangan masing-masing pengguna. Setiap akun memiliki peran dan batasan
            akses yang berbeda, mulai dari Super Admin DPUTR Kabupaten Bandung Barat,
            Lembaga Sertifikasi Profesi, Dinas atau OPD, Supplier rantai pasok, hingga
            Tenaga Kerja Konstruksi. Pembagian hak akses ini bertujuan untuk mendukung
            transparansi, akuntabilitas, serta efektivitas pengelolaan layanan jasa
            konstruksi secara terintegrasi.
        </p>

    </div>
</div>

<br>
<div class="container-fluid px-0">
    <div class="p-4"
         style="
            background: linear-gradient(135deg, #f8f9fa, #eef2f7);
            border-left: 6px solid #0d6efd;
            border-radius: 14px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.08);
            font-family: 'Poppins', sans-serif;
         ">

        <p style="
            font-size:14px;
            color:#495057;
            line-height:1.8;
            margin-bottom:0;
        ">
            Dalam Sistem Informasi Pembina Jasa Konstruksi, pengelolaan akun dibagi ke dalam
            beberapa hak akses untuk memastikan setiap proses berjalan sesuai kewenangan.
            DPUTR Kabupaten Bandung Barat berperan sebagai Super Admin yang memiliki akses
            penuh dalam pengaturan sistem, pengelolaan data master, serta pengawasan
            keseluruhan aktivitas aplikasi. Lembaga Sertifikasi Profesi (LSP) bertugas
            dalam pengelolaan dan penerbitan data sertifikasi tenaga kerja konstruksi
            sesuai ketentuan yang berlaku. Dinas atau OPD menggunakan sistem ini untuk
            mengelola data kegiatan, pelaporan, serta monitoring program jasa konstruksi
            di lingkup masing-masing. Supplier rantai pasok berperan dalam penyediaan
            dan pencatatan kebutuhan material atau pendukung kegiatan konstruksi.
            Sementara itu, Tenaga Kerja Konstruksi (TKK) menggunakan aplikasi untuk
            mengakses informasi pribadi, status sertifikasi, serta partisipasi dalam
            kegiatan yang diselenggarakan secara terintegrasi.
        </p>

    </div>
</div>

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

