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



                            <div style="margin-left: 10px;" style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
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
{{--
                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Bahan Material...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                            <i class="bi bi-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                        </div> --}}
                        <script>
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);
                                window.location.href = url.toString();
                            }

                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/besuppliermaterial?search=${input}`)
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
<button onclick="exportTableToExcel('tabelBujkkonstruksi', 'data_rantaipasokmaterial')"
class="button-berkas"
>
    <i class="bi bi-download"></i> Download Excel
</button>

<!-- Tombol Create -->
<a href="/berantaiperalatan/create" style="text-decoration: none;">
    <button class="button-modern">
        <i class="bi bi-plus-lg"></i> Tambah Data
    </button>
</a>

                        </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

<table id="tabelBujkkonstruksi" class="zebra-table table-striped" >
 <thead>
     <tr>
     <th style="width: 60px; text-align:center;">
  <i class="bi bi-hash"></i> No
</th>
<th style="width: 200px; text-align:center;">
  <i class="bi bi-image"></i> Foto/Gambar Produk
</th>
<th style="width: 500px; text-align:center;">
  <i class="bi bi-box-seam"></i> PT/CV
</th>
<th style="width: 500px; text-align:center;">
  <i class="bi bi-box-seam"></i> Nama Material
</th>
<th style="width: 150px; text-align:center;">
  <i class="bi bi-currency-dollar"></i> Harga
</th>
<th style="width: 50px; text-align:center;">
  <i class="bi bi-geo-alt"></i> Lokasi
</th>
<th style="width: 150px; text-align:center;">
  <i class="bi bi-check2-circle"></i> Status
</th>
<th style="width: 150px; text-align:center;">
  <i class="bi bi-rulers"></i> Satuan
</th>
<th style="width: 150px; text-align:center;">
  <i class="bi bi-card-text"></i> Keterangan
</th>
<th style="width: 150px; text-align:center;">
  <i class="bi bi-card-text"></i> No Telepon
</th>
<th style="width: 120px; text-align:center;">
  <i class="bi bi-gear"></i> Aksi
</th>

     </tr>
 </thead>
 <tbody id="tableBody">
     @forelse($data as $item )
     <tr class="align-middle">
         <td style="text-align: center;">{{ $loop->iteration }}</td>
         <td style="text-align: center;">
          @php
    // jika gambar kosong → pakai default
    $gambar = $item->gambar ?: '/assets/icon/peralatan.png';
@endphp

<div style="margin-top: 10px;">

    {{-- Jika file ada di public (assets/icon/...) --}}
    @if(file_exists(public_path($gambar)))
        <img src="{{ asset($gambar) }}"
             alt="Gambar"
             style="width: 100%; max-height: 100px; object-fit: contain;"
             loading="lazy">

    {{-- Jika file tidak ditemukan (jarang terjadi) --}}
    @else
        <p>Gambar tidak ditemukan</p>
    @endif

</div>


    </td>
    <td style="text-align: left;">{{ $item->informasirantaipasok->namaperusahaan }}</td>
        <td style="text-align: left;">{{ $item->namamaterial }}</td>
            <td style="display: flex; justify-content: center; align-items: center; height: 60px;">
            <span style="margin-right: 5px;">Rp.</span>
            <span>{{ number_format((float)$item->harga, 0, ',', '.') }},00</span>
        </td>

@php
    $words = explode(' ', $item->lokasi);
    $chunks = array_chunk($words, 2);
    $text = collect($chunks)->map(fn($c) => implode(' ', $c))->implode("\n");
@endphp

<td style="text-align: left; white-space: pre-line;">
    {{ $text }}
</td>

     <td style="text-align: center;">
    @if(strtolower($item->ketersediaan) == 'tersedia')
        <span class="button-hijau">{{ $item->ketersediaan }}</span>
    @else
        <span class="button-merah">{{ $item->ketersediaan }}</span>
    @endif
</td>


        <td style="text-align: center;">{{ $item->satuan }}</td>
        <td style="text-align: center;">{{ $item->keterangan }}</td>
<td style="text-align: center;">
    @if($item->notelepon)
        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $item->notelepon) }}" target="_blank">
            <i class="bi bi-whatsapp" style="font-size: 22px; color: green;"></i>
        </a>
    @else
        -
    @endif
</td>

        <td style="text-align: center; vertical-align: middle;">
            {{-- <a href="/bebujkkonstruksi/show/{{$item->namalengkap}}" class="btn btn-sm btn-info me-2" title="Show">
                <i class="bi bi-eye"></i>
            </a> --}}
            <a href="/berantaiperalatan/update/{{$item->id}}" class="button-berkas" title="Update">
                <i class="bi bi-pencil-square"></i>
            </a>
            <a href="javascript:void(0)" class="button-merah" title="Delete"
               data-bs-toggle="modal" data-bs-target="#deleteModal"
               data-judul="{{ $item->id }}"
               onclick="setDeleteUrl(this)">
                <i class="bi bi-trash"></i>
            </a>
        </td>

        <!-- CSS untuk Hover -->
        <style>
            .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
                background-color: white !important; /* Ganti background menjadi putih */
                color: white !important; /* Ganti warna teks menjadi putih */
                border-color: transparent !important; /* Menyembunyikan border saat hover */
            }

            /* Ganti warna ikon untuk tombol hover agar tetap terlihat */
            .btn-info:hover i, .btn-warning:hover i, .btn-danger:hover i {
                color: navy !important; /* Ganti ikon menjadi navy atau warna lain yang diinginkan */
            }
        </style>

        </tr>

 @empty
    <tr>
        <td colspan="100%"> {{-- Memenuhi semua kolom --}}
            <div style="
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 30px;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
                color: #6c757d;
                background-color: #f8f9fa;
                border: 2px dashed #ced4da;
                border-radius: 12px;
                font-size: 16px;
                animation: fadeIn 0.5s ease-in-out;
            ">
                <i class="bi bi-folder-x" style="margin-right: 8px; font-size: 20px; color: #dc3545;"></i>
                Data Tidak Ditemukan !!
            </div>
        </td>
    </tr>
@endforelse

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

    </tbody>
</table>
                     </div>
                 </div>


                 @include('frontend.A00_new.01_halamanutama.newpaginations')

                 <br><br>


                 <!-- Modal Konfirmasi Hapus -->
                 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                 <h5 class="modal-title" id="deleteModalLabel">DPUTR Kabupaten Bandung Barat</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <p>Apakah Anda Ingin Menghapus Data Ini ?</p>
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
                     var id = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = id;
                     var deleteUrl = "/berantaiperalatan/delete/" + encodeURIComponent(id);
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
