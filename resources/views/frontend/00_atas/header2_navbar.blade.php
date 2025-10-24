<style>
    /* Desktop Navbar */
nav {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    position: relative;
    z-index: 10;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 6px 10px;
    font-size: 15px;
}

.menu-icon {
    display: none;
    font-size: 26px;
    color: white;
    cursor: pointer;
    margin-left: auto;
}

#menu {
    display: none;
}

/* Desktop Dropdown Hover */
.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    background: #333;
    min-width: 150px;
    border-radius: 5px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    z-index: 99;
}

.dropdown-content a {
    display: block;
    padding: 8px 15px;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Responsive Navbar */
@media (max-width: 992px) {
    .menu-icon {
        display: block;
        z-index: 20;
    }

    #menu:checked ~ nav {
        display: flex;
        flex-direction: column;
        width: 100%;
        background: #222;
        border-radius: 8px;
        margin-top: 10px;
        padding: 10px 0;
        position: relative;
        z-index: 15;
    }

    nav {
        display: none;
    }

    nav a {
        display: block;
        width: 100%;
        text-align: left;
        padding: 10px 15px;
        color: white;
    }

    /* Dropdown Mobile turun ke bawah */
    .dropdown {
        width: 100%;
        position: relative;
    }

    .dropdown-content {
        position: relative;
        display: none;
        flex-direction: column;
        box-shadow: none;
        border-radius: 0;
        background: #333;
        min-width: 100%;
        z-index: 20;
    }

    /* Toggle dropdown mobile */
    .dropdown.open .dropdown-content {
        display: flex;
    }

    .dropdown-content a {
        padding-left: 35px;
    }
}

</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(drop => {
            drop.addEventListener('click', function (e) {
                e.stopPropagation(); // cegah click bubble
                this.classList.toggle('open');

                dropdowns.forEach(d => {
                    if(d !== this) d.classList.remove('open');
                });
            });
        });

        // klik di luar dropdown untuk menutup
        document.addEventListener('click', function () {
            dropdowns.forEach(d => d.classList.remove('open'));
        });
    });
</script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<div class="container mt-0 mb-0">
    <div style="display: flex; align-items: center; ">
        <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 60px; height: 60px; object-fit: cover; padding: 0;">
        <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; padding: 0;">
        <h1 style="margin-left: 10px;">
            <span>SIPJAKI</span>KBB
            <p style="margin: 0; font-size: 16px; color: white" >Dinas Pekerjaan Umum & Tata Ruang Kabupaten Bandung Barat</p>
        </h1>
    </div>

    <label for="menu"><i class="fas fa-bars"></i></label>
    <input type="checkbox" id="menu">
    <nav>
<style>
    .dropdown {
        position: relative;
        display: inline-block;
        z-index: 1000; /* pastikan di atas elemen lain */
    }

    .dropdown a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: black;
        position: relative;
        z-index: 1001;
    }

    .dropdown .arrow {
        margin-left: 5px;
        color: black;
        font-size: 0.8em;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        top: 100%; /* muncul tepat di bawah tombol */
        left: 0;
        background-color: #f9f9f9;
        min-width: 325px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 2000; /* sangat tinggi supaya nggak ketutup */
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

        {{-- <a href="/">DASHBOARD</a> --}}

<div class="dropdown">
    <a href="/" class="dropdown-toggle" style="text-align: left; font-weight: 600;">DASHBOARD</a>
    {{-- <i class="bi bi-chevron-down arrow"></i> --}}
</div>

<div class="dropdown">
    <a href="#" class="dropdown-toggle" style="text-align: left; font-weight: 600;">PROFIL</a>
    {{-- <i class="bi bi-chevron-down arrow"></i> --}}
    <div class="dropdown-content" style="min-width: 200px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); padding: 6px 0;">

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-building" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color:white; padding: 5px; border-radius: 50%;"></i>
            <a href="/profil/struktur" style="color: black; text-decoration: none; text-align:left; font-size: 14px; font-weight: 500;">
                STRUKTUR
            </a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-list-task" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color:white; padding: 5px; border-radius: 50%;"></i>
            <a href="/profil/rencanastrategis" style="color: black; text-decoration: none; text-align:left; font-size: 14px; font-weight: 500;">
                RENSTRA
            </a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-clipboard-check" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color:white; padding: 5px; border-radius: 50%;"></i>
            <a href="/profil/tupoksi" style="color: black; text-decoration: none; text-align:left; font-size: 14px; font-weight: 500;">
                TUPOKSI
            </a>
        </div>

    </div>
</div>

<div class="dropdown">
    <a href="#" class="dropdown-toggle" style="text-align: left; font-weight: 600;">BERITA</a>
    {{-- <i class="bi bi-chevron-down arrow"></i> --}}
    <div class="dropdown-content" style="min-width: 280px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); padding: 6px 0;">

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-megaphone-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/berita" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">
                BERITA
            </a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-award-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/kegiatansertifikasi" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">
                DOKUMENTASI SERTIFIKASI
            </a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-calendar-event-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/feagendasertifikasi" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">
                AGENDA SERTIFIKASI
            </a>
        </div>

    </div>
</div>
<div class="dropdown">
    <a href="#" class="dropdown-toggle" style="text-align: left; font-weight: 600;">DATA JAKON</a>
    <div class="dropdown-content" style="min-width: 350px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); padding: 6px 0;">

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-shield-check" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(135deg, black, yellow); color: white; padding: 6px; border-radius: 50%;"></i>
            <a href="/datajakon/pengawasan" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">
                PENGAWASAN DAN KETERTIBAN
            </a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-people-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(135deg, black, yellow); color: white; padding: 6px; border-radius: 50%;"></i>
            <a href="/datajakon/asosiasi" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">
                ASOSIASI PENGUSAHA
            </a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-cash-stack" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(135deg, black, yellow); color: white; padding: 6px; border-radius: 50%;"></i>
            <a href="/datajakon/standarbiayaumum" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">
                STANDAR BIAYA UMUM
            </a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-diagram-3-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(135deg, black, yellow); color: white; padding: 6px; border-radius: 50%;"></i>
            <a href="/datajakon/paketpekerjaan" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">
                PROGRESS PAKET PEKERJAAN
            </a>
        </div>

    </div>
</div>


        {{-- <a href="#">PROFIL</a> --}}

<div class="dropdown">
    <a href="#" class="dropdown-toggle" style="text-align: left; font-weight: 600;">TENAGA KERJA</a>
    <div class="dropdown-content" style="min-width: 350px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); padding: 6px 0;">

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-award-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(135deg, black, yellow); color: white; padding: 6px; border-radius: 50%;"></i>
            <a href="/tenagakerja/skaskt" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">
                SERTIFIKAT KETERAMPILAN KERJA
            </a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-person-badge-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(135deg, black, yellow); color: white; padding: 6px; border-radius: 50%;"></i>
            <a href="/tenagakerja/pjt" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">
                PENANGGUNG JAWAB TEKNIS (PJT)
            </a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-person-video3" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(135deg, black, yellow); color: white; padding: 6px; border-radius: 50%;"></i>
            <a href="/tenagakerja/timpembina" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">
                PEMBINA JASA KONSTRUKSI
            </a>
        </div>

    </div>
</div>


<div class="dropdown">
    <a href="#" class="dropdown-toggle" style="text-align: left; font-weight: 600; letter-spacing: 0.5px;">IKK</a>
    {{-- <i class="bi bi-chevron-down arrow"></i> --}}
    <div class="dropdown-content" style="min-width: 230px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); padding: 6px 0;">

        <div style="display: flex; align-items: center; color: black; text-decoration: none; padding: 6px 12px; transition: all 0.3s ease; border-radius: 6px;">
            <i class="bi bi-info-circle-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color:white; padding: 5px; border-radius: 50%;"></i>
            <a href="/404" style="color: black; text-decoration: none; text-align:left; font-size: 14px; font-weight: 500;">INDIKATOR KINERJA KUNCI</a>
        </div>

        <div style="display: flex; align-items: center; color: black; text-decoration: none; padding: 6px 12px; transition: all 0.3s ease; border-radius: 6px;">
            <i class="bi bi-graph-up-arrow" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color:white; padding: 5px; border-radius: 50%;"></i>
            <a href="/spm/informasispm" style="color: black; text-decoration: none; text-align:left; font-size: 14px; font-weight: 500;">LAPORAN SPM</a>
        </div>

    </div>
</div>

<div class="dropdown">
    <a href="/ijinusahajasakonstruksi" class="dropdown-toggle" style="text-align: left; font-weight: 600;">SBU/IUJK</a>
    {{-- <i class="bi bi-chevron-down arrow"></i> --}}
</div>

        {{-- <a href="/ijinusahajasakonstruksi">SBU/IUJK</a> --}}
        {{-- <a href="/tdup">TDUP</a> --}}

<div class="dropdown">
    <a href="#" class="dropdown-toggle" style="text-align: left; font-weight: 600; letter-spacing: 0.5px;">PELATIHAN</a>
    {{-- <i class="bi bi-chevron-down arrow"></i> --}}
    <div class="dropdown-content" style="min-width: 230px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); padding: 6px 0;">

        <div style="display: flex; align-items: center; color: black; text-decoration: none; padding: 6px 12px; transition: all 0.3s ease; border-radius: 6px;">
            <i class="bi bi-easel-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color:white; padding: 5px; border-radius: 50%;"></i>
            <a href="/404" style="color: black; text-decoration: none; text-align:left; font-size: 14px; font-weight: 500;">PELATIHAN</a>
        </div>

        <div style="display: flex; align-items: center; color: black; text-decoration: none; padding: 6px 12px; transition: all 0.3s ease; border-radius: 6px;">
            <i class="bi bi-eye-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color:white; padding: 5px; border-radius: 50%;"></i>
            <a href="/404" style="color: black; text-decoration: none; text-align:left; font-size: 14px; font-weight: 500;">PENGAWASAN</a>
        </div>

        <div style="display: flex; align-items: center; color: black; text-decoration: none; padding: 6px 12px; transition: all 0.3s ease; border-radius: 6px;">
            <i class="bi bi-exclamation-triangle-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color:white; padding: 5px; border-radius: 50%;"></i>
            <a href="/pelatihan/kecelakaan" style="color: black; text-decoration: none; text-align:left; font-size: 14px; font-weight: 500;">KECELAKAAN</a>
        </div>

    </div>
</div>

<div class="dropdown">
    <a href="#" class="dropdown-toggle" style="text-align: left; font-weight: 600; letter-spacing: 0.5px;">PERATURAN</a>
    {{-- <i class="bi bi-chevron-down arrow"></i> --}}
    <div class="dropdown-content" style="min-width: 260px; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); padding: 6px 0;">

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/undangundang" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">UNDANG UNDANG</a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/pemerintah" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">PERATURAN PEMERINTAH</a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/presiden" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">PERATURAN PRESIDEN</a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/menteri" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">PERATURAN MENTERI</a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/keputusanmenteri" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">KEPUTUSAN MENTERI</a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/suratedaranmenteri" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">SURAT EDARAN MENTERI</a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/referensi" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">REFERENSI</a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/daerah" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">PERATURAN DAERAH</a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/gubernur" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">PERATURAN GUBERNUR</a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/walikotadanbupati" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">PERATURAN WALIKOTA/ BUPATI</a>
        </div>

        <div style="display: flex; align-items: center; padding: 6px 12px;">
            <i class="bi bi-file-earmark-text-fill" style="margin-left: 3px; margin-right: 8px; background: linear-gradient(90deg, black, yellow); color: white; padding: 5px; border-radius: 50%;"></i>
            <a href="/peraturan/suratkeputusan" style="color: black; text-decoration: none; text-align: left; font-size: 14px; font-weight: 500;">SURAT KEPUTUSAN</a>
        </div>

    </div>
</div>

        {{-- <a href="/login">LOGIN</a> --}}

<div class="dropdown">
    <a href="/login" class="dropdown-toggle" style="text-align: left; font-weight: 600;">LOGIN</a>
    {{-- <i class="bi bi-chevron-down arrow"></i> --}}
</div>

    </nav>
</div>
