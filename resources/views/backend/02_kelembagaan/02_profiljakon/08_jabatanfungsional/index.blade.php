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

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">

                                <a href="/bejabatan/create">
                                    <button class="button-modern">
                                    <!-- Ikon Kembali -->
                                    <i class="fa fa-plus" style="margin-right: 8px;"></i>
                                    Buat Baru
                                </button>
                            </a>
                        </div>
<hr>
                            <table class="zebra-table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px; text-align:center;">No</th>
                                        <th style="width: 500px; text-align:center;">Jabatan</th>
                                        <th style="width: 500px; text-align:center;">Nama Lengkap</th>
                                        <th style="width: 300px; text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
<tr class="align-middle">
    <td class="text-center">{{ $loop->iteration }}</td>
    <td class="text-center">{!! $item->jabatan !!}</td>
    <td class="text-center">{!! $item->namalengkap !!}</td>
    <td class="text-center">
        <!-- Update Icon -->
        <a href="/bejabatan/update/{{$item->id}}" class="button-berkas" title="Update">
            <i class="bi bi-pencil-square"></i> Update
        </a>

        <!-- Delete Icon -->
        <a href="javascript:void(0)" class="button-merah" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
           data-judul="{{ $item->namalengkap }}" onclick="setDeleteUrl(this)">
            <i class="bi bi-trash"></i> Hapus
        </a>
    </td>
</tr>
@empty
<tr>
    <td colspan="100%">
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

<!-- Modal Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                <h5 class="modal-title" id="deleteModalLabel">DPUTR Kab Bandung Barat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda ingin menghapus data: <span id="itemName"></span>?</p>
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
    const namalengkap = button.getAttribute('data-judul');
    document.getElementById('itemName').innerText = namalengkap;
    const deleteUrl = "/bejabatan/delete/" + encodeURIComponent(namalengkap);
    document.getElementById('deleteForm').action = deleteUrl;
}
</script>

<style>
/* Hover effect for buttons */
.button-berkas:hover, .button-merah:hover {
    background-color: #fff !important;
    color: black !important;
}
.button-berkas:hover i, .button-merah:hover i {
    color: black !important;
}

/* FadeIn animation for empty message */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

                                </tbody>
                            </table>

                            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px; margin-top: 20px;">

                                <a href="/beprofiljakon">
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

                        </div>
                    </div>
                    <!-- /.card-body -->
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
