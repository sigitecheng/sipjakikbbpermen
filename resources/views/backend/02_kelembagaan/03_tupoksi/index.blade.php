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

<section style="background: #FFFFFF; width: 100%;">

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
                            <table class="table table-striped">
                                <thead>
                                    @foreach ($data as $item )

                                    <tr>
                                        <th style="width: 100px; text-align:left;">Judul</th>
                                        <td>:</td>
                                        <td>{{$item->judul}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 100px; text-align:left;">Keterangan</th>
                                        <td>:</td>
                                        <td style="text-align: justify;">{{$item->keterangan}}</td>
                                    </tr>

                                    <tr>
    <th style="width: 100px; text-align:left;">Peraturan</th>
    <td>:</td>
    <td>

        <div style="margin-top: 10px;">
            @if($item->peraturan && file_exists(public_path('storage/' . $item->peraturan)))
                <!-- Jika PDF ada di storage -->
                <embed
                    src="{{ asset('storage/' . $item->peraturan) }}"
                    type="application/pdf"
                    style="width: 100%; height: 400px; border: 1px solid #ddd;"
                />

            @elseif($item->peraturan)
                <!-- Jika PDF berada di path luar storage -->
                <embed
                    src="{{ asset($item->peraturan) }}"
                    type="application/pdf"
                    style="width: 100%; height: 400px; border: 1px solid #ddd;"
                />

            @else
                <!-- Jika belum ada data -->
                <p>Data belum diupdate</p>
            @endif
        </div>

    </td>
</tr>

                                    @endforeach
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                                <a href="/betupoksi/update/{{$item->id}}">
                                    <button class="button-berkas" type="button">
                                        <i class="bi bi-pencil-square"
                                        style="font-size: 18px; margin-right: 8px; color: black;"></i>
                                        Perbaikan Data
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
