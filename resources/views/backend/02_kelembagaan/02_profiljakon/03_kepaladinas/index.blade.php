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

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">

                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <div class="card card-primary card-outline mb-6">
                            <!--begin::Header-->
                            {{-- <div class="card-header"><div class="card-title">Quick Example</div></div> --}}
                            <!--end::Header-->
                            <!--begin::Form-->

                            @foreach ($data as $item)

                            <form>
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Left Column (6/12) -->
                                        <div class="col-md-6">
                                            <!-- Nama Lengkap -->
                                            <div class="form-modern mb-3">
                                                <label class="form-label-modern">
                                                    <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Nama Lengkap
                                                </label>
                                                <input class="form-control" value="{{$item->namalengkap}}" readonly/>
                                                <div class="form-text"></div>
                                            </div>

                                            <!-- NIP -->
                                            <div class="form-modern mb-3">
                                                <label class="form-label-modern">
                                                    <i class="bi bi-person-badge" style="margin-right: 8px; color: navy;"></i> NIP
                                                </label>
                                                <input class="form-control" value="{{$item->nip}}" readonly />
                                            </div>

                                            <!-- Tempat Tanggal Lahir -->
                                            <div class="form-modern mb-3">
                                                <label class="form-label-modern">
                                                    <i class="bi bi-calendar-date" style="margin-right: 8px; color: navy;"></i> Tempat Tanggal Lahir
                                                </label>
                                                <input class="form-control" value="{{$item->ttl}}" readonly/>
                                            </div>

                                            <!-- Pangkat Golongan -->
                                            <div class="form-modern mb-3">
                                                <label class="form-label-modern">
                                                    <i class="bi bi-trophy" style="margin-right: 8px; color: navy;"></i> Pangkat Golongan
                                                </label>
                                                <input class="form-control" value="{{$item->pangkatgolongan}}" readonly/>
                                            </div>

                                        </div>

                                        <!-- Right Column (6/12) -->
                                        <div class="col-md-6">
                                            <!-- Jabatan -->
                                            <div class="form-modern mb-3">
                                                <label class="form-label-modern">
                                                    <i class="bi bi-briefcase" style="margin-right: 8px; color: navy;"></i> Jabatan
                                                </label>
                                                <input class="form-control" value="{{$item->jabatan}}" readonly/>
                                            </div>

                                            <!-- Perangkat Daerah -->
                                            <div class="form-modern mb-3">
                                                <label class="form-label-modern">
                                                    <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i> Perangkat Daerah
                                                </label>
                                                <input class="form-control" value="{{$item->perangkatdaerah}}" readonly/>
                                            </div>

                                            <!-- Pendidikan Terakhir -->
                                            <div class="form-modern mb-3">
                                                <label class="form-label-modern">
                                                    <i class="bi bi-book" style="margin-right: 8px; color: navy;"></i> Pendidikan Terakhir
                                                </label>
                                                <input class="form-control" value="{{$item->pendidikanterakhir}}" readonly/>
                                            </div>

                                        </div>
                                              <!-- End Right Column -->

                                    </div> <!-- end row -->
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Quick Example-->

                    </div>
                    <!-- /.card -->
                    <!-- Button Section -->
                    <br><br>
                    <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                        <a href="/bekepaladinas/update/{{$item->id}}">
                           <button class="button-berkas" type="button" onclick="openModal()">
                                <i class="bi bi-pencil-square" style="margin-right: 8px;"></i>
                                Perbaikan Data ?
                            </button>



                        </a>

                            <a href="/beprofiljakon">
                               <button class="button-modern">
                                        <i class="bi bi-arrow-left" style="margin-right: 8px;"></i>
                                        Kembali
                                    </button>

                            </a>
                </div>

                @endforeach
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
