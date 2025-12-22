@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
 <!--begin::App Wrapper-->
 <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_style.01_cssdashboard.style')
@include('button')

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
                 <div class="card-header">
                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')


                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                        <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
                            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
                            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer;">
                                <option value="10">10</option>
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
                                   <button class="button-modern">
    <i class="bi bi-file-earmark"></i> {{$totalpenyedia1}} (PU)
</button>


                    <button class="button-modern">
    <i class="bi bi-file-earmark"></i> {{$totalpenyedia2}} (NON-PU)
</button>


                    <button class="button-modern">
    <i class="bi bi-file-earmark"></i> {{$totalpenyedia3}} (SWASTA)
</button>

<div style="position: relative; display: inline-block; margin-right:10px;">
   <div class="d-flex align-items-center px-3 py-2 rounded"
            style="
                border: 1px solid #d0d0d5;
                flex: 1;
                min-width: 280px;
                background: white;
                height: 44px;
                box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);
            ">

            <input type="text"
                id="searchMaterial"
                placeholder="Cari Paket Pekerjaan ?"
                oninput="searchMaterial()"
                class="w-100 border-0 outline-none"
                style="
                    font-family: 'Poppins';
                    background: transparent;
                    font-size: 14px;
                    color: #333;
                " />

            <button type="button" class="ms-2"
                style="border:none; background:none; color:#0d6efd;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 18 18" fill="none">
                    <path d="M17 17L13.5247 13.5247M15.681 8.3405C15.681
                    12.3945 12.3945 15.681 8.3405 15.681C4.28645 15.681
                    1 12.3945 1 8.3405C1 4.28645 4.28645 1 8.3405 1C12.3945
                    1 15.681 4.28645 15.681 8.3405Z"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
</div>
<script>
    function updateEntries() {
        let selectedValue = document.getElementById("entries").value;
        let url = new URL(window.location.href);
        url.searchParams.set("perPage", selectedValue);
        window.location.href = url.toString();
    }


                            function searchMaterial() {
                                let input = document.getElementById("searchMaterial").value;

                                fetch(`/betertibjakonpenyelenggaraan?search=${encodeURIComponent(input)}`)
                                    .then(response => response.text())
                                    .then(html => {
                                        let parser = new DOMParser();
                                        let doc = parser.parseFromString(html, "text/html");
                                        let newTableBody = doc.querySelector("#tabeltertibjakonusaha").innerHTML;
                                        document.querySelector("#tabeltertibjakonusaha").innerHTML = newTableBody;
                                    })
                                    .catch(error => console.error("Error fetching search results:", error));
                            }

</script>



                                <button class="button-berkas" onclick="exportSelectedColumnsToExcel('tabeltertibjakonusaha', 'Data_TertibJakonPenyelenggaraan')">
                                    <i class="bi bi-download"></i> Download Excel
                                </button>

                                <a href="/betertibjakonpenyelenggaraan/create">
                                    <button class="button-modern";>
                                    <!-- Ikon Kembali -->
                                    <i class="fa fa-plus " style="margin-right: 8px;"></i>
                                    Buat Baru
                                </button>
                                </a>

                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">

                    <div class="table-responsive" style="width: 100%; overflow-x: auto;">
                        <table id="tabeltertibjakonusaha" class="zebra-table" style="white-space: nowrap;">
                            <thead>
          <tr>
    <th rowspan="2" style="text-align:center; width:60px;">
        <i class="bi bi-list-ol"></i><br>No
    </th>

    <th rowspan="2" style="text-align:center; min-width:120px;">
        <i class="bi bi-buildings"></i><br>Penyedia
    </th>

    <th rowspan="2" style="text-align:center; min-width:220px;">
        <i class="bi bi-house-fill"></i><br>Nama Pekerjaan
    </th>

    <th rowspan="2" style="text-align:center; min-width:180px;">
        <i class="bi bi-file-earmark-text-fill"></i><br>Nomor Kontrak
    </th>

    <th rowspan="2" style="text-align:center; min-width:220px;">
        <i class="bi bi-geo-alt-fill"></i><br>
        Pengawasan Pemilihan<br>Penyedia Jasa
    </th>

    <th rowspan="2" style="text-align:center; min-width:220px;">
        <i class="bi bi-geo-alt-fill"></i><br>
        Pengawasan Penyusunan<br>Pelaksanaan Kontrak Kerja
    </th>

    <th rowspan="2" style="text-align:center; min-width:220px;">
        <i class="bi bi-geo-alt-fill"></i><br>
        Pengawasan Terhadap<br>Standar K3 Konstruksi
    </th>

    <th rowspan="2" style="text-align:center; min-width:220px;">
        <i class="bi bi-geo-alt-fill"></i><br>
        Pengawasan Terhadap<br>Manajemen Mutu Konstruksi
    </th>

    <th rowspan="2" style="text-align:center; min-width:240px;">
        <i class="bi bi-geo-alt-fill"></i><br>
        Pengawasan Terhadap<br>Penggunaan Material Peralatan
    </th>

    <th rowspan="2" style="text-align:center; min-width:260px;">
        <i class="bi bi-geo-alt-fill"></i><br>
        Pengawasan Terhadap<br>Pengelolaan & Pemanfaatan Sumber Material
    </th>

    <th rowspan="2" style="text-align:center; width:120px;">
        <i class="bi bi-tools"></i><br>Aksi
    </th>
</tr>

                            </thead>

                          <tbody id="tableBody">
                            @forelse($data as $item)
                            <tr>
                              <td style="text-align: center;">{{ $loop->iteration }}</td>
                              <td style="text-align: center;">
                                @if($item->penyediastatustertibjakon->penyedia ?? 'Data Belum Di Buat')
                                  {{ $item->penyediastatustertibjakon->penyedia ?? 'Data Belum Di Buat' }}
                                @else
                                  <button class="button-berkas">
                                    Data Belum Di Update
                                  </button>
                                @endif
                              </td>


{{-- <td style="text-align: left; white-space: normal; word-wrap: break-word; max-width: 300px;">
  @if($item->kegiatankonstruksi)
    {{ $item->kegiatankonstruksi }}
  @else
    <button class="button-berkas">
      Data Belum Di Update
    </button>
  @endif
</td> --}}

<td style="text-align: left; white-space: normal; word-wrap: break-word; max-width: 300px;">
  @if($item->namapekerjaan)
    {{ $item->namapekerjaan }}
  @else
    <button class="button-berkas">
      Data Belum Di Update
    </button>
  @endif
</td>

<td style="text-align: left;">
  @if($item->nomorkontrak)
    {{ $item->nomorkontrak }}
  @else
    <button class="button-berkas">
      Data Belum Di Update
    </button>
  @endif
</td>

{{-- <td style="text-align: left;">
  @if($item->bujk)
    {{ $item->bujk }}
  @else
    <button class="button-berkas">
      Data Belum Di Update
    </button>
  @endif
</td> --}}


                           {{-- <td style="text-align: center; vertical-align: middle;">
                                <a href="/betertibjakonpenyelenggaraan/index/{{ $item->id }}" style="text-decoration: none;">
                                    <button style="background-color: #800000; color: white; padding: 8px 16px; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
                                        <i class="bi bi-file-earmark-text "></i> Buat Berkas
                                    </button>
                                </a>
                            </td> --}}


                        <td style="text-align: center; vertical-align: middle;">
                            <div style="display: flex; justify-content: center; gap: 8px;">
                                <a href="/betertibjakonpenyelenggaraan1/{{$item->id}}" style="text-decoration: none;">
                                    <button class="button-modern">
                                        <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                    </button>
                                </a>

                                <a href="/beuploadberkaspenyelenggaraan1/{{$item->id}}" style="text-decoration: none;">
                                    @if(!empty($item->berkasdukung1))
                                    <button class="button-berkas">
                                        <i class="bi bi-check-circle" style="margin-right: 5px;"></i> Berkas Ada
                                    </button>
                                    @else
                                    <button class="button-newvalidasi">
                                        <i class="bi bi-file-earmark-text "></i> Upload Berkas
                                    </button>
                                    @endif
                                </a>


                            </div>
                        </td>

                                <td style="text-align: center; vertical-align: middle;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <a href="{{ url('/betertibjakonpenyelenggaraan2/' . $item->id) }}" style="text-decoration: none;">
                                            <button class="button-modern">
                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                            </button>
                                        </a>
                                        <a href="/beuploadberkaspenyelenggaraan2/{{$item->id}}" style="text-decoration: none;">
                                            @if(!empty($item->berkasdukung2))
                                        <button class="button-berkas">
                                            <i class="bi bi-check-circle" style="margin-right: 5px;"></i> Berkas Ada
                                        </button>
                                        @else
                                        <button class="button-newvalidasi">
                                            <i class="bi bi-file-earmark-text"></i> Upload Berkas
                                        </button>
                                        @endif
                                    </a>
                                </div>

                            </td>

                            <td style="text-align: center; vertical-align: middle;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <a href="{{ url('/betertibjakonpenyelenggaraan3/' . $item->id) }}" style="text-decoration: none;">
                                            <button class="button-modern">
                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                            </button>
                                        </a>


                                        <a href="/beuploadberkaspenyelenggaraan3/{{$item->id}}" style="text-decoration: none;">
                                            @if(!empty($item->berkasdukung3))
                                            <button class="button-berkas">
                                                <i class="bi bi-check-circle" style="margin-right: 5px;"></i> Berkas Ada
                                            </button>
                                            @else
                                            <button class="button-newvalidasi">
                                                <i class="bi bi-file-earmark-text "></i> Upload Berkas
                                            </button>
                                            @endif
                                        </a>
                                    </div>
                                </td>

                                <td style="text-align: center; vertical-align: middle;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <a href="{{ url('/betertibjakonpenyelenggaraan4/' . $item->id) }}" style="text-decoration: none;">
                                            <button class="button-modern">
                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                            </button>
                                        </a>


                                    <a href="/beuploadberkaspenyelenggaraan4/{{$item->id}}" style="text-decoration: none;">
                                        @if(!empty($item->berkasdukung4))
                                        <button class="button-berkas">
                                            <i class="bi bi-check-circle" style="margin-right: 5px;"></i> Berkas Ada
                                        </button>
                                        @else
                                        <button class="button-newvalidasi">
                                            <i class="bi bi-file-earmark-text "></i> Upload Berkas
                                        </button>
                                        @endif
                                    </a>
                                </div>
                            </td>

                            <td style="text-align: center; vertical-align: middle;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <a href="{{ url('/betertibjakonpenyelenggaraan5/' . $item->id) }}" style="text-decoration: none;">
                                            <button class="button-modern">
                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                            </button>
                                        </a>


                                        <a href="/beuploadberkaspenyelenggaraan5/{{$item->id}}" style="text-decoration: none;">
                                            @if(!empty($item->berkasdukung5))
                                            <button class="button-berkas">
                                                <i class="bi bi-check-circle" style="margin-right: 5px;"></i> Berkas Ada
                                            </button>
                                            @else
                                            <button class="button-newvalidasi">
                                                <i class="bi bi-file-earmark-text "></i> Upload Berkas
                                            </button>
                                            @endif
                                        </a>
                                    </div>
                                </td>

                                <td style="text-align: center; vertical-align: middle;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                    <a href="{{ url('/betertibjakonpenyelenggaraan6/' . $item->id) }}" style="text-decoration: none;">
                                        <button class="button-modern">
                                            <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                        </button>
                                    </a>

                                    <a href="/beuploadberkaspenyelenggaraan6/{{$item->id}}" style="text-decoration: none;">
                                        @if(!empty($item->berkasdukung6))
                                            <button class="button-berkas">
                                                <i class="bi bi-check-circle" style="margin-right: 5px;"></i> Berkas Ada
                                            </button>
                                            @else
                                            <button class="button-newvalidasi">
                                                <i class="bi bi-file-earmark-text "></i> Upload Berkas
                                            </button>
                                            @endif
                                        </a>
                                    </div>
                                </td>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>


                              <td style="text-align: center;">
                                <!-- Tombol Aksi -->
                                {{-- <a href="/bebujkkonsultan/show/{{$item->namalengkap}}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a> --}}
                                <a href="/betertibjakonpenyelenggaraan/update/{{$item->id}}" class="button-berkas"><i class="bi bi-pencil-square"></i></a>
                                {{-- <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-judul="{{ $item->id }}" onclick="setDeleteUrl(this)">
                                  <i class="bi bi-trash"></i>
                                </a> --}}
                                <a href="javascript:void(0)" class="button-merah"
                                data-bs-toggle="modal"
                                data-bs-target="#deleteModal"
                                data-url="{{ route('betertibjakonpenyelenggaraandeletedata', $item->id) }}"
                                onclick="setDeleteUrl(this)">
                                    <i class="bi bi-trash"></i>
                                </a>

                              </td>
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
                                <p>Apakah Anda Ingin Menghapus Data ini?</p>
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
                    var deleteUrl = button.getAttribute('data-url');
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
    function exportSelectedColumnsToExcel(originalTableId, filename = 'data-terpilih') {
        const originalTable = document.getElementById(originalTableId);
        const selectedColumns = [
            0,  // No
            1,  // Penyedia
            2,  // NIB
            3,  // Nama Pekerjaan
            4,  // Tahun Pelaksanaan
            5,  // Badan Usaha
            6,  // PJBU
            7,  // Sesuai Jenis
            8,  // Sesuai Sifat
            9,  // Sesuai Klasifikasi
            10, // Sesuai Layanan
            11, // Sesuai Bentuk
            12, // Sesuai Kualifikasi
            13, // Pemenuhan Syarat
            14  // Pelaksanaan Pengembangan Usaha
        ];

        const nibColumnIndexInExport = selectedColumns.indexOf(2); // NIB akan berada di kolom ini dalam tabel hasil export

        const tempTable = document.createElement('table');
        for (const row of originalTable.rows) {
            const newRow = tempTable.insertRow();
            selectedColumns.forEach(i => {
                const cell = row.cells[i];
                if (cell) {
                    const newCell = cell.cloneNode(true);
                    newRow.appendChild(newCell);
                }
            });
        }

        const worksheet = XLSX.utils.table_to_sheet(tempTable);

        const range = XLSX.utils.decode_range(worksheet['!ref']);
        for (let R = range.s.r; R <= range.e.r; ++R) {
            for (let C = range.s.c; C <= range.e.c; ++C) {
                const cell_address = { c: C, r: R };
                const cell_ref = XLSX.utils.encode_cell(cell_address);
                const cell = worksheet[cell_ref];
                if (!cell) continue;
                if (!cell.s) cell.s = {};

                // Set style border
                cell.s.border = {
                    top: { style: "thin", color: { auto: 1 } },
                    right: { style: "thin", color: { auto: 1 } },
                    bottom: { style: "thin", color: { auto: 1 } },
                    left: { style: "thin", color: { auto: 1 } }
                };

                // Set alignment
                cell.s.alignment = {
                    vertical: "center",
                    horizontal: "center",
                    wrapText: true
                };

                // Pastikan kolom NIB disimpan sebagai teks (hindari notasi eksponensial)
                if (C === nibColumnIndexInExport && R > 0) {
                    cell.z = '@'; // Format text
                    cell.t = 's'; // Tipe string
                    cell.v = "'" + cell.v; // Tambah apostrof untuk paksa teks
                }
            }
        }

        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, "Kolom Terpilih");

        XLSX.writeFile(workbook, filename + ".xlsx");
    }
    </script>


<script>
    function printModalContent(id) {
        const modalContent = document.querySelector(`#modalKtp${id} .modal-content`);
        if (!modalContent) {
            alert("Konten tidak ditemukan.");
            return;
        }

        const printWindow = window.open('', '', 'width=1200,height=800');
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Dokumen</title>
                <style>
                    @media print {
                        @page {
                            size: A4 landscape;
                            margin: 0mm;
                        }
                        body {
                            font-family: Arial, sans-serif;
                            font-size: 12px;
                            color: #000;
                        }
                        table {
                            border-collapse: collapse;
                            width: 100%;
                            page-break-inside: auto;
                        }
                        th, td {
                            border: 1px solid #000;
                            padding: 4px;
                            vertical-align: top;
                        }
                        .no-border td {
                            border: none;
                        }
                    }

                    body {
                        margin: 10mm;
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                    }

                    h5 {
                        font-size: 1rem;
                        margin-bottom: 10px;
                    }

                    .table-bordered {
                        border: 1px solid #000;
                        width: 100%;
                        margin-top: 10px;
                    }

                    .table-bordered th, .table-bordered td {
                        border: 1px solid #000;
                        padding: 6px;
                        text-align: left;
                    }

                    .table-secondary {
                        background-color: #f8f9fa;
                    }

                    /* Penyesuaian khusus untuk bagian tim pemeriksa */
                    .tim-pemeriksa-container {
                        display: flex;
                        justify-content: flex-end;
                    }

                    .tim-pemeriksa {
                        width: 50%;
                    }

                    .tim-pemeriksa table {
                        width: 100%;
                        border: 1px solid #000;
                    }

                    .tim-pemeriksa td, .tim-pemeriksa th {
                        text-align: center;
                        padding: 3px;
                        height: 15px;
                        font-size: 11px;
                    }
                </style>
            </head>
            <body>
                ${modalContent.innerHTML}
                <script>
                    window.onload = function() {
                        window.print();
                        window.onafterprint = window.close;
                    }
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }
</script>

<script>
    function printModalContentSurat2(id) {
        const modalContent = document.querySelector(`#modalSurat2${id} .modal-content`);
        if (!modalContent) {
            alert("Konten tidak ditemukan.");
            return;
        }

        const printWindow = window.open('', '', 'width=1200,height=800');
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Dokumen</title>
                <style>
                    @media print {
                        @page {
                            size: A4 landscape;
                            margin: 0mm;
                        }
                        body {
                            font-family: Arial, sans-serif;
                            font-size: 12px;
                            color: #000;
                        }
                        table {
                            border-collapse: collapse;
                            width: 100%;
                            page-break-inside: auto;
                        }
                        th, td {
                            border: 1px solid #000;
                            padding: 4px;
                            vertical-align: top;
                        }
                        .no-border td {
                            border: none;
                        }
                    }

                    body {
                        margin: 10mm;
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                    }

                    h5 {
                        font-size: 1rem;
                        margin-bottom: 10px;
                    }

                    .table-bordered {
                        border: 1px solid #000;
                        width: 100%;
                        margin-top: 10px;
                    }

                    .table-bordered th, .table-bordered td {
                        border: 1px solid #000;
                        padding: 6px;
                        text-align: left;
                    }

                    .table-secondary {
                        background-color: #f8f9fa;
                    }

                    /* Penyesuaian khusus untuk bagian tim pemeriksa */
                    .tim-pemeriksa-container {
                        display: flex;
                        justify-content: flex-end;
                    }

                    .tim-pemeriksa {
                        width: 50%;
                    }

                    .tim-pemeriksa table {
                        width: 100%;
                        border: 1px solid #000;
                    }

                    .tim-pemeriksa td, .tim-pemeriksa th {
                        text-align: center;
                        padding: 3px;
                        height: 15px;
                        font-size: 11px;
                    }
                </style>
            </head>
            <body>
                ${modalContent.innerHTML}
                <script>
                    window.onload = function() {
                        window.print();
                        window.onafterprint = window.close;
                    }
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }
</script>

<script>
    function printModalContentSurat3(id) {
        const modalContent = document.querySelector(`#modalSurat3${id} .modal-content`);
        if (!modalContent) {
            alert("Konten tidak ditemukan.");
            return;
        }

        const printWindow = window.open('', '', 'width=1200,height=800');
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Dokumen</title>
                <style>
                    @media print {
                        @page {
                            size: A4 landscape;
                            margin: 0mm;
                        }
                        body {
                            font-family: Arial, sans-serif;
                            font-size: 12px;
                            color: #000;
                        }
                        table {
                            border-collapse: collapse;
                            width: 100%;
                            page-break-inside: auto;
                        }
                        th, td {
                            border: 1px solid #000;
                            padding: 4px;
                            vertical-align: top;
                        }
                        .no-border td {
                            border: none;
                        }
                    }

                    body {
                        margin: 10mm;
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                    }

                    h5 {
                        font-size: 1rem;
                        margin-bottom: 10px;
                    }

                    .table-bordered {
                        border: 1px solid #000;
                        width: 100%;
                        margin-top: 10px;
                    }

                    .table-bordered th, .table-bordered td {
                        border: 1px solid #000;
                        padding: 6px;
                        text-align: left;
                    }

                    .table-secondary {
                        background-color: #f8f9fa;
                    }

                    /* Penyesuaian khusus untuk bagian tim pemeriksa */
                    .tim-pemeriksa-container {
                        display: flex;
                        justify-content: flex-end;
                    }

                    .tim-pemeriksa {
                        width: 50%;
                    }

                    .tim-pemeriksa table {
                        width: 100%;
                        border: 1px solid #000;
                    }

                    .tim-pemeriksa td, .tim-pemeriksa th {
                        text-align: center;
                        padding: 3px;
                        height: 15px;
                        font-size: 11px;
                    }
                </style>
            </head>
            <body>
                ${modalContent.innerHTML}
                <script>
                    window.onload = function() {
                        window.print();
                        window.onafterprint = window.close;
                    }
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }
</script>
