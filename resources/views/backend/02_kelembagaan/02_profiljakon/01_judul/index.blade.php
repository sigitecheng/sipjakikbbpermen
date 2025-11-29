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

                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            @foreach($data as $item)
                                <div class="card p-3 mb-3">
                                    <div class="d-flex flex-column">
                                        <div class="border-bottom pb-2 mb-2">
                                            <strong>Informasi OPD:</strong> {{ $item->informasiopd ?? '-' }}
                                        </div>
                                        <div class="border-bottom pb-2 mb-2">
                                            <strong>No Telepon:</strong> {{ $item->notelepon ?? '-' }}
                                        </div>
                                        <div class="border-bottom pb-2 mb-2">
                                            <strong>Instagram:</strong> {{ $item->instagram ?? '-' }}
                                        </div>
                                        <div class="border-bottom pb-2 mb-2">
                                            <strong>TikTok:</strong> {{ $item->tiktok ?? '-' }}
                                        </div>
                                        <div class="border-bottom pb-2 mb-2">
                                            <strong>Email:</strong> {{ $item->email ?? '-' }}
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <a href="/beinformasiopd/update/{{$item->id}}" class="button-berkas">
                                            <i class="bi bi-pencil-square me-1"></i> Perbaikan Data
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            <br>

                                <div style="display: flex; justify-content: flex-end; margin-top:10px; margin-bottom:10px;">
                                    <a href="/beprofiljakon">
                                    <button class="button-modern">
                                    <i class="bi bi-arrow-left me-2"></i>
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
