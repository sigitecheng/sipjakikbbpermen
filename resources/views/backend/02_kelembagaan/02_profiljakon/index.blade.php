
<style>
:root {
    --primary-green: #FF8C00;  /* Orange PUPR */
    --dark-green: #E67300;
    --light-green: #FFE5B4;
    --accent-green: #FFD699;
}

    .dashboard-card {
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.3s ease;
        border: none;
        height: 100%;
        position: relative;
    }

    .dashboard-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background-color: var(--primary-green);
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    .card-content {
        padding: 25px 20px;
        display: flex;
        align-items: center;
    }

    .number-container {
        background-color: var(--primary-green);
        border-radius: 14px;
        width: 80px;
        height: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 20px;
        flex-shrink: 0;
        box-shadow: 0 4px 10px rgba(66, 181, 73, 0.3);
    }

    .info-icon {
        font-size: 36px;
        color: white;
    }

    .info-content {
        flex-grow: 1;
    }

    .info-text {
        font-size: 16px;
        font-weight: 600;
        margin: 0;
        color: #333;
        letter-spacing: 0.3px;
    }

    .small-text {
        font-size: 13px;
        color: #777;
    }
/* Warna khusus untuk setiap kartu */
.card-1 .number-container { background-color: #FFD700 !important; }
.card-1 .number-container { background-color: #FFC700 !important; } /* ini akan menimpa yang atas */
.card-3 .number-container { background-color: #FFB800 !important; }
.card-4 .number-container { background-color: #FFA500 !important; }

.card-1::before { background-color: #FFD700 !important; }
.card-1::before { background-color: #FFC700 !important; } /* ini akan menimpa yang atas */
.card-3::before { background-color: #FFB800 !important; }
.card-4::before { background-color: #FFA500 !important; }


    /* Warna khusus untuk setiap kartu */
    /* .card-1 .number-container { background-color: #42b549; }
    .card-1 .number-container { background-color: #3fa845; }
    .card-3 .number-container { background-color: #3b9a40; }
    .card-4 .number-container { background-color: #378d3c; }

    .card-1::before { background-color: #42b549; }
    .card-1::before { background-color: #3fa845; }
    .card-3::before { background-color: #3b9a40; }
    .card-4::before { background-color: #378d3c; } */

    @media (max-width: 576px) {
        .number-container {
            width: 60px;
            height: 60px;
        }

        .info-icon {
            font-size: 26px;
        }

        .info-text {
            font-size: 14px;
        }

        .card-content {
            padding: 20px 15px;
        }
    }

    .info-text {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 0;
        display: flex;
        align-items: baseline;
        gap: 6px;
    }

    .info-number {
        font-size: 20px;
        font-weight: 800;
        color: var(--primary-green);
        text-shadow: 0 1px 3px rgba(66, 181, 73, 0.3);
        letter-spacing: -0.5px;
        background: linear-gradient(to bottom right, #4caf50, #66bb6a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .info-text span {
        font-weight: 600;
        color: #333;
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
        <section style="background-image: url('/assets/gambarbaru/padalarang2.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy">

            <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->

            @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
            @include('backend.00_administrator.00_baganterpisah.11_alert')

            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <br>

        <!-- Menampilkan pesan sukses -->
        <div class="container-fluid">
            <!--begin::Row-->
  <!-- =========================================================== -->
  {{-- <h5 class="mt-4 mb-2">Info Box With <code>bg-*</code></h5> --}}
  <!--begin::Row-->

            <div class="row">
<div class="col-md-3 col-sm-6 col-12">
    <a href="/beinfoopd" style="text-decoration: none;">
        <div class="dashboard-card card-1">
            <div class="card-content">
                <div class="number-container">
                    <img src="/assets/icon/pupr.png" alt="icon" width="40">
                </div>
                <div class="info-content">
                    <i class="bi bi-bank info-icon" style="color:#FFD700"></i>
                    <p class="info-text">Informasi OPD</p>
                    {{-- <div class="progress mt-2" style="height: 6px; border-radius: 4px;">
                        <div class="progress-bar" style="width: 50%; background-color: #3fa845;"></div>
                    </div> --}}
                    <small class="text-muted">Pengaturan</small>
                </div>
            </div>
        </div>
    </a>
</div>


<div class="col-md-3 col-sm-6 col-12">
    <a href="/bekepaladinas" style="text-decoration: none;">
        <div class="dashboard-card card-1">
            <div class="card-content">
                <div class="number-container">
                    <img src="/assets/icon/pupr.png" alt="icon" width="40">
                </div>
                <div class="info-content">
                    <i class="bi bi-person-badge info-icon" style="color:#FFD700"></i>
                    <p class="info-text">Informasi Kepala Dinas DPUTR</p>
                    {{-- <div class="progress mt-2" style="height: 6px; border-radius: 4px;">
                        <div class="progress-bar" style="width: 80%; background-color: #3b9a40;"></div>
                    </div> --}}
                    <small class="text-muted">Pengaturan</small>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="col-md-3 col-sm-6 col-12">
    <a href="/bekabid" style="text-decoration: none;">
        <div class="dashboard-card card-1">
            <div class="card-content">
                <div class="number-container">
                    <img src="/assets/icon/pupr.png" alt="icon" width="40">
                </div>
                <div class="info-content">
                    <i class="bi bi-people info-icon" style="color:#FFD700"></i>
                    <p class="info-text">Informasi Kepala Bidang Jasa Konstruksi</p>
                    {{-- <div class="progress mt-2" style="height: 6px; border-radius: 4px;">
                        <div class="progress-bar" style="width: 65%; background-color: #378d3c;"></div>
                    </div> --}}
                    <small class="text-muted">Pengaturan</small>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="col-md-3 col-sm-6 col-12">
    <a href="/beinformasiopd" style="text-decoration: none;">
        <div class="dashboard-card card-1">
            <div class="card-content">

                <!-- Ikon Utama -->
                <div class="number-container">
                    <img src="/assets/icon/pupr.png" alt="icon" width="40">
                </div>

                <!-- Informasi -->
                <div class="info-content">
                    <i class="bi bi-building info-icon" style="color:#FFD700"></i>

                    <p class="info-text">Informasi Judul OPD DPUTR KBB</p>
                    <small class="text-muted">Pengaturan</small>
                </div>

            </div>
        </div>
    </a>
</div>



            </div>
<br>

            {{-- ================================================================================================= --}}

            <div class="row">
<div class="col-md-3 col-sm-6 col-12">
    <a href="/besubbid" style="text-decoration: none;">
        <div class="dashboard-card card-1">
            <div class="card-content">
                <div class="number-container">
                    <img src="/assets/icon/pupr.png" alt="icon" width="40">
                </div>
                <div class="info-content">
                    <i class="bi bi-diagram-3 info-icon" style="color:#FFD700"></i>
                    <p class="info-text">Sub Koordinator <br> Jasa Konstruksi</p>
                    {{-- <div class="progress mt-2" style="height: 6px; border-radius: 4px;">
                        <div class="progress-bar" style="width: 70%; background-color: var(--primary-green);"></div>
                    </div> --}}
                    <small class="text-muted">Pengaturan</small>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="col-md-3 col-sm-6 col-12">
    <a href="/beinformasi" style="text-decoration: none;">
        <div class="dashboard-card card-1">
            <div class="card-content">
                <div class="number-container">
                    <img src="/assets/icon/pupr.png" alt="icon" width="40">
                </div>
                <div class="info-content">
                    <i class="bi bi-info-circle info-icon" style="color:#FFD700"></i>
                    <p class="info-text">Keterangan OPD</p>
                    {{-- <div class="progress mt-2" style="height: 6px; border-radius: 4px;">
                        <div class="progress-bar" style="width: 60%; background-color: #3fa845;"></div>
                    </div> --}}
                    <small class="text-muted">Pengaturan</small>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="col-md-3 col-sm-6 col-12">
    <a href="/besipjaki" style="text-decoration: none;">
        <div class="dashboard-card card-1">
            <div class="card-content">
                <div class="number-container">
                    <img src="/assets/icon/pupr.png" alt="icon" width="40">
                </div>
                <div class="info-content">
                    <i class="bi bi-person-workspace info-icon" style="color:#FFD700"></i>
                    <p class="info-text">Operator SIPJAKI</p>
                    {{-- <div class="progress mt-2" style="height: 6px; border-radius: 4px;">
                        <div class="progress-bar" style="width: 75%; background-color: #3b9a40;"></div>
                    </div> --}}
                    <small class="text-muted">Pengaturan</small>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="col-md-3 col-sm-6 col-12">
    <a href="/bejabatan" style="text-decoration: none;">
        <div class="dashboard-card card-1">
            <div class="card-content">
                <div class="number-container">
                    <img src="/assets/icon/pupr.png" alt="icon" width="40">
                </div>
                <div class="info-content">
                    <i class="bi bi-people-fill info-icon" style="color:#FFD700" ></i>
                    <p class="info-text">Personil Jabatan Fungsional</p>
                    {{-- <div class="progress mt-2" style="height: 6px; border-radius: 4px;">
                        <div class="progress-bar" style="width: 65%; background-color: #378d3c;"></div>
                    </div> --}}
                    <small class="text-muted">Pengaturan</small>
                </div>
            </div>
        </div>
    </a>
</div>



            </div>

  {{-- ================================================================================== --}}
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
