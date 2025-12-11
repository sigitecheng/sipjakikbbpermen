<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// namespace App\Models;

use App\Models\agendapelatihan;
use App\Models\agendaskk;
use App\Models\agendasertifikasi;
use App\Models\asosiasimasjaki;
use App\Models\agendastatus;
use App\Models\Agendastatus as ModelsAgendastatus;
use App\Models\allskktenagakerjablora;
use App\Models\artikeljakonmasjaki;
use App\Models\asosiasipengusaha;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Tukangterampil;
use App\Models\peraturan;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\keputusanmenteri;
use App\Models\laporankegiatan;
use App\Models\layanankami;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\referensi;
use App\Models\suratedaran;
use App\Models\pergubernur;
use App\Models\suratkeputusan;
use App\Models\berita;
use App\Models\beritaagenda;
use App\Models\bujkkonsultan;
use App\Models\bujkkontraktor;
use App\Models\bulanrekap;
use App\Models\giskbb;
use App\Models\headerberanda;
use App\Models\himbauandinas;
use App\Models\informasirantaipasok;
use App\Models\isadmin;
use App\Models\jabatankerja;
use App\Models\jenjangpendidikan;
use App\Models\kategorimaterial;
use App\Models\kategoripelatihan;
use App\Models\kecamatankbb;
use App\Models\kegiatanjaskon;
use App\Models\keterampilanpekerja;
use App\Models\ketertiban;
use App\Models\metodepengadaan;
use App\Models\namasekolah;
use App\Models\paketpekerjaan;
use App\Models\Paketpekerjaan as ModelsPaketpekerjaan;
use App\Models\paketpekerjaanmasjaki;
use App\Models\paketstatuspekerjaan;
use App\Models\pelatihan;
use App\Models\penanggungjawabteknis;
use App\Models\pengawasanbangunangedung;
use App\Models\pengawasanketertiban;
use App\Models\pengawasanlokasi;
use App\Models\pengawasanstatus;
use App\Models\pengawasantindakan;
use App\Models\pesertapelatihan;
use App\Models\profiljakonidentitasopd;
use App\Models\profiljakoninformasi;
use App\Models\profiljakonkabid;
use App\Models\profiljakonkepaladinas;
use App\Models\profiljakonpersonil;
use App\Models\profiljakonsipjaki;
use App\Models\profiljenispekerjaan;
use App\Models\qa;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\rantaipasokmaterial;
use App\Models\rantaipasokperalatan;
use App\Models\rantaipasoktokobangunan;
use App\Models\renstra;
use App\Models\satuanhargamaterial;
use App\Models\satuanhargaupahtenagakerja;
use App\Models\satuanhargaperalatan;
use App\Models\sbulampiran1;
use App\Models\sbulampiran2;
use App\Models\sbulampiran3;
use App\Models\shstblora;
// use App\Models\sertifikasiagenda;
use App\Models\standarbiayaumum;
use App\Models\statusadmin;
use App\Models\strukturdinas;
use App\Models\sumberdana;
use App\Models\tahunpilihan;
use App\Models\timpembina;
use App\Models\tupoksi;
use App\Models\uijk;
// use App\Models\paketpekerjaan;
use Database\Factories\SkktenagakerjaFactory;
// use Carbon\Carbon;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Asosiasipengusaha::factory(15)->create();
        // Paketpekerjaan::factory(15)->create();
        // Penanggungjawabteknis::factory(15)->create();
        // Ketertiban::factory(15)->create();
        // Beritaagenda::factory(15)->create();
        // User::factory(15)->create();
        // // \App\Models\sertifikasiagenda::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // asosiasipengusaha::factory(15)->create();
        // paketpekerjaan::factory(15)->create();
        // penanggungjawabteknis::factory(15)->create();
        // ketertiban::factory(15)->create();
        // beritaagenda::factory(15)->create();
        // Qa::factory(15)->create();
        // BAHAN TUKANG TERAMPIL BLORA
        Tukangterampil::factory(994)->create();

// =============== CREATE TIM ASOSIASI PENGUSAHA
// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Pengusaha Konstruksi Indonesia',
//     'alamat_kantor' => 'Jl. Raya Konstruksi No. 123, Bandung, Jawa Barat',
//     'pengawasanlokasi_id' => 1,
//     'provinsi' => 'JAWA BARAT',
//     'kontak' => '+62 812-3456-7890',
//     'email' => 'info@apki.or.id',
//     'website' => 'https://www.apki.or.id',
//     'kepala_asosiasi' => 'Yuyu Yuhana, ST., MM',
//     'foto_asosiasi' => 'asosiasipengusaha/asosiasipengusaha.png',
//     'jumlah_anggota' => '234',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Kontraktor Nasional',
//     'alamat_kantor' => 'Jl. Kontraktor No. 45, Jakarta',
//     'pengawasanlokasi_id' => 12,
//     'provinsi' => 'DKI JAKARTA',
//     'kontak' => '+62 811-2345-6789',
//     'email' => 'info@akn.or.id',
//     'website' => 'https://www.akn.or.id',
//     'kepala_asosiasi' => 'Budi Santoso',
//     'foto_asosiasi' => 'asosiasipengusaha/akn.png',
//     'jumlah_anggota' => '150',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Jasa Konstruksi',
//     'alamat_kantor' => 'Jl. Jasa Konstruksi No. 101, Surabaya',
//     'pengawasanlokasi_id' => 13,
//     'provinsi' => 'JAWA TIMUR',
//     'kontak' => '+62 813-4567-8901',
//     'email' => 'info@ajk.or.id',
//     'website' => 'https://www.ajk.or.id',
//     'kepala_asosiasi' => 'Rina Suryani',
//     'foto_asosiasi' => 'asosiasipengusaha/ajk.png',
//     'jumlah_anggota' => '120',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Pengusaha Material Konstruksi',
//     'alamat_kantor' => 'Jl. Material Konstruksi No. 15, Medan',
//     'pengawasanlokasi_id' => 14,
//     'provinsi' => 'SUMATERA UTARA',
//     'kontak' => '+62 814-5678-9012',
//     'email' => 'info@apmk.or.id',
//     'website' => 'https://www.apmk.or.id',
//     'kepala_asosiasi' => 'Andi Wijaya',
//     'foto_asosiasi' => 'asosiasipengusaha/apmk.png',
//     'jumlah_anggota' => '98',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Ahli Konstruksi',
//     'alamat_kantor' => 'Jl. Ahli Konstruksi No. 22, Semarang',
//     'pengawasanlokasi_id' => 15,
//     'provinsi' => 'JAWA TENGAH',
//     'kontak' => '+62 815-6789-0123',
//     'email' => 'info@aak.or.id',
//     'website' => 'https://www.aak.or.id',
//     'kepala_asosiasi' => 'Hendrik Tanjung',
//     'foto_asosiasi' => 'asosiasipengusaha/aak.png',
//     'jumlah_anggota' => '200',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Konsultan Konstruksi',
//     'alamat_kantor' => 'Jl. Konsultan Konstruksi No. 30, Bali',
//     'pengawasanlokasi_id' => 15,
//     'provinsi' => 'BALI',
//     'kontak' => '+62 816-7890-1234',
//     'email' => 'info@akk.or.id',
//     'website' => 'https://www.akk.or.id',
//     'kepala_asosiasi' => 'Lina Agustina',
//     'foto_asosiasi' => 'asosiasipengusaha/akk.png',
//     'jumlah_anggota' => '250',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Pemborong Konstruksi',
//     'alamat_kantor' => 'Jl. Pemborong No. 5, Yogyakarta',
//     'pengawasanlokasi_id' => 14,
//     'provinsi' => 'DI YOGYAKARTA',
//     'kontak' => '+62 817-8901-2345',
//     'email' => 'info@apk.or.id',
//     'website' => 'https://www.apk.or.id',
//     'kepala_asosiasi' => 'Budi Prasetyo',
//     'foto_asosiasi' => 'asosiasipengusaha/apk.png',
//     'jumlah_anggota' => '80',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Pekerja Konstruksi',
//     'alamat_kantor' => 'Jl. Pekerja Konstruksi No. 8, Makassar',
//     'pengawasanlokasi_id' => 13,
//     'provinsi' => 'SULAWESI SELATAN',
//     'kontak' => '+62 818-9012-3456',
//     'email' => 'info@apk.or.id',
//     'website' => 'https://www.apk.or.id',
//     'kepala_asosiasi' => 'Diana Suharno',
//     'foto_asosiasi' => 'asosiasipengusaha/apk.png',
//     'jumlah_anggota' => '150',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Perusahaan Jasa Konstruksi',
//     'alamat_kantor' => 'Jl. Jasa Konstruksi No. 11, Palembang',
//     'pengawasanlokasi_id' => 12,
//     'provinsi' => 'SUMATERA SELATAN',
//     'kontak' => '+62 819-0123-4567',
//     'email' => 'info@apjk.or.id',
//     'website' => 'https://www.apjk.or.id',
//     'kepala_asosiasi' => 'Rizky Firmansyah',
//     'foto_asosiasi' => 'asosiasipengusaha/apjk.png',
//     'jumlah_anggota' => '300',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Penyedia Konstruksi',
//     'alamat_kantor' => 'Jl. Penyedia Konstruksi No. 14, Banjarmasin',
//     'pengawasanlokasi_id' => 11,
//     'provinsi' => 'KALIMANTAN SELATAN',
//     'kontak' => '+62 820-1234-5678',
//     'email' => 'info@apk.or.id',
//     'website' => 'https://www.apk.or.id',
//     'kepala_asosiasi' => 'Teguh Santoso',
//     'foto_asosiasi' => 'asosiasipengusaha/apk.png',
//     'jumlah_anggota' => '175',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Perancang Konstruksi',
//     'alamat_kantor' => 'Jl. Perancang Konstruksi No. 6, Samarinda',
//     'pengawasanlokasi_id' => 10,
//     'provinsi' => 'KALIMANTAN TIMUR',
//     'kontak' => '+62 821-2345-6789',
//     'email' => 'info@apk.or.id',
//     'website' => 'https://www.apk.or.id',
//     'kepala_asosiasi' => 'Maya Arista',
//     'foto_asosiasi' => 'asosiasipengusaha/apk.png',
//     'jumlah_anggota' => '220',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Konstruksi Berkelanjutan',
//     'alamat_kantor' => 'Jl. Konstruksi Berkelanjutan No. 3, Jakarta',
//     'pengawasanlokasi_id' => 9,
//     'provinsi' => 'DKI JAKARTA',
//     'kontak' => '+62 822-3456-7890',
//     'email' => 'info@akb.or.id',
//     'website' => 'https://www.akb.or.id',
//     'kepala_asosiasi' => 'Ferry Hidayat',
//     'foto_asosiasi' => 'asosiasipengusaha/akb.png',
//     'jumlah_anggota' => '250',
//     'status' => 'AKTIF',
// ]);

// asosiasipengusaha::create([
//     'nama_asosiasi' => 'Asosiasi Pembangunan Infrastruktur',
//     'alamat_kantor' => 'Jl. Infrastruktur No. 9, Denpasar',
//     'pengawasanlokasi_id' => 8,
//     'provinsi' => 'BALI',
//     'kontak' => '+62 823-4567-8901',
//     'email' => 'info@api.or.id',
//     'website' => 'https://www.api.or.id',
//     'kepala_asosiasi' => 'Rudi Prabowo',
//     'foto_asosiasi' => 'asosiasipengusaha/api.png',
//     'jumlah_anggota' => '400',
//     'status' => 'AKTIF',
// ]);


// =============== CREATE PAKET PEKERJAAN

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Pekerjaan Umum dan Penataan Ruang',
//     'jumlah_pagu' => '3875647586',
//     'pekerjaan' => 'Pembangunan Jembatan Cikapundung',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '50',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Bina Marga',
//     'jumlah_pagu' => '2543567500',
//     'pekerjaan' => 'Perbaikan Jalan Raya',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '30',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Cipta Karya',
//     'jumlah_pagu' => '434500900',
//     'pekerjaan' => 'Pembangunan Gedung Serbaguna',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '70',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Perumahan Rakyat',
//     'jumlah_pagu' => '1543236400',
//     'pekerjaan' => 'Renovasi Rumah Susun',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '20',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Lingkungan Hidup',
//     'jumlah_pagu' => '3432546300',
//     'pekerjaan' => 'Pembangunan TPS',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '40',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Pendidikan',
//     'jumlah_pagu' => '543563100',
//     'pekerjaan' => 'Renovasi Sekolah Baru',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '10',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Kesehatan',
//     'jumlah_pagu' => '843523400',
//     'pekerjaan' => 'Pembangunan Puskesmas',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '80',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Kebudayaan dan Pariwisata',
//     'jumlah_pagu' => '6748563700',
//     'pekerjaan' => 'Pembangunan Taman Wisata',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '60',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Pemadam Kebakaran',
//     'jumlah_pagu' => '1364827400',
//     'pekerjaan' => 'Pengadaan Mobil Pemadam',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '90',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Pertanian',
//     'jumlah_pagu' => '754637500',
//     'pekerjaan' => 'Pengadaan Alat Pertanian',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '20',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Perhubungan',
//     'jumlah_pagu' => '957385700',
//     'pekerjaan' => 'Pembangunan Terminal Bus',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '75',
// ]);

// paketpekerjaan::create([
//     'metodepengadaan_id' => 2,
//     'instansi' => 'Dinas Sosial',
//     'jumlah_pagu' => '552948500',
//     'pekerjaan' => 'Pembangunan Panti Asuhan',
//     'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
//     'tahun' => '2024',
//     'progress_fisik' => '35',
// ]);


// =============== CREATE PENANGGUNG JAWAB TEKNIS
penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 11, // Pastikan ID ini valid dalam tabel metodepengadaan
    'nama_lengkap' => 'Yuyu Yuhana, ST., MM',
    'nopjt' => '45345356',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Jembatan',
    'foto_pjt' => 'Profesional',
    'tanggal_terbit' => '2024-01-15', // Format YYYY-MM-DD
    'masa_berlaku' => '2024-12-31', // Format YYYY-MM-DD
]);


penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 12,
    'nama_lengkap' => 'Andi Prasetyo, ST.',
    'nopjt' => '45345357',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Gedung',
    'foto_pjt' => 'gedung.png',
    'tanggal_terbit' => '2024-02-20',
    'masa_berlaku' => '2025-02-20',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 13,
    'nama_lengkap' => 'Budi Santoso, MT.',
    'nopjt' => '45345358',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Jalan',
    'foto_pjt' => 'jalan.png',
    'tanggal_terbit' => '2024-03-10',
    'masa_berlaku' => '2025-03-10',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 14,
    'nama_lengkap' => 'Siti Aisyah, ST.',
    'nopjt' => '45345359',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Saluran',
    'foto_pjt' => 'saluran.png',
    'tanggal_terbit' => '2024-04-05',
    'masa_berlaku' => '2025-04-05',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 15,
    'nama_lengkap' => 'Rudi Hartono, ST., MM',
    'nopjt' => '45345360',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Jembatan Flyover',
    'foto_pjt' => 'flyover.png',
    'tanggal_terbit' => '2024-05-15',
    'masa_berlaku' => '2025-05-15',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 15,
    'nama_lengkap' => 'Dewi Lestari, ST.',
    'nopjt' => '45345361',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Pembangunan Bendungan',
    'foto_pjt' => 'bendungan.png',
    'tanggal_terbit' => '2024-06-20',
    'masa_berlaku' => '2025-06-20',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 14,
    'nama_lengkap' => 'Agus Salim, ST., MM',
    'nopjt' => '45345362',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Penataan Ruang',
    'foto_pjt' => 'penataan_ruang.png',
    'tanggal_terbit' => '2024-07-25',
    'masa_berlaku' => '2025-07-25',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 13,
    'nama_lengkap' => 'Fiona Larasati, ST.',
    'nopjt' => '45345363',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Instalasi Air',
    'foto_pjt' => 'instalasi_air.png',
    'tanggal_terbit' => '2024-08-30',
    'masa_berlaku' => '2025-08-30',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 12,
    'nama_lengkap' => 'Nina Oktavia, ST.',
    'nopjt' => '45345364',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Drainase',
    'foto_pjt' => 'drainase.png',
    'tanggal_terbit' => '2024-09-10',
    'masa_berlaku' => '2025-09-10',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 13,
    'nama_lengkap' => 'Rian Setiawan, ST., MT.',
    'nopjt' => '45345365',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Jaringan Listrik',
    'foto_pjt' => 'jaringan_listrik.png',
    'tanggal_terbit' => '2024-10-12',
    'masa_berlaku' => '2025-10-12',
]);


// =============== CREATE KETERTIBAN DAN PENGAWASAN
// ketertiban::create([
//     'pengawasanlokasi_id' => 1,
//     'pengawasanbangunangedung_id' => 1,
//     'penanggungjawabteknis_id' => 1,
//     'pengawasanstatus_id' => 1,
//     'pengawasantindakan_id' => 1,
//     'judul' => 'Laporan Ketertiban Gedung Perkantoran',
//     'tanggal_laporan' => now(),
//     'keterangan' => 'Gedung Perkantoran dalam kondisi baik dan sudah memenuhi PKKPR yang diizinkan.',
// ]);

// ketertiban::create([
//     'pengawasanlokasi_id' => 2,
//     'pengawasanbangunangedung_id' => 2,
//     'penanggungjawabteknis_id' => 2,
//     'pengawasanstatus_id' => 2,
//     'pengawasantindakan_id' => 1,
//     'judul' => 'Laporan Ketertiban Gedung Kesehatan',
//     'tanggal_laporan' => now(),
//     'keterangan' => 'Gedung Kesehatan harus menambah IMB/PBG karena ada ketidaksesuaian.',
// ]);

// ketertiban::create([
//     'pengawasanlokasi_id' => 3,
//     'pengawasanbangunangedung_id' => 3,
//     'penanggungjawabteknis_id' => 1,
//     'pengawasanstatus_id' => 1,
//     'pengawasantindakan_id' => 2,
//     'judul' => 'Laporan Ketertiban Gedung Pendidikan',
//     'tanggal_laporan' => now(),
//     'keterangan' => 'Gedung Pendidikan sudah memenuhi ketentuan.',
// ]);

// ketertiban::create([
//     'pengawasanlokasi_id' => 4,
//     'pengawasanbangunangedung_id' => 4,
//     'penanggungjawabteknis_id' => 3,
//     'pengawasanstatus_id' => 2,
//     'pengawasantindakan_id' => 2,
//     'judul' => 'Laporan Ketertiban Gedung Olahraga',
//     'tanggal_laporan' => now(),
//     'keterangan' => 'Gedung Olahraga ada ketidaksesuaian antara IMB dan Bangunan Terbangun.',
// ]);

// ketertiban::create([
//     'pengawasanlokasi_id' => 5,
//     'pengawasanbangunangedung_id' => 5,
//     'penanggungjawabteknis_id' => 1,
//     'pengawasanstatus_id' => 1,
//     'pengawasantindakan_id' => 1,
//     'judul' => 'Laporan Ketertiban Gedung Komersial',
//     'tanggal_laporan' => now(),
//     'keterangan' => 'Gedung Komersial dalam keadaan Laik Fungsi.',
// ]);

// ketertiban::create([
//     'pengawasanlokasi_id' => 6,
//     'pengawasanbangunangedung_id' => 6,
//     'penanggungjawabteknis_id' => 2,
//     'pengawasanstatus_id' => 1,
//     'pengawasantindakan_id' => 2,
//     'judul' => 'Laporan Ketertiban Gedung Transportasi',
//     'tanggal_laporan' => now(),
//     'keterangan' => 'Gedung Transportasi memerlukan pemeliharaan lebih lanjut.',
// ]);

// ketertiban::create([
//     'pengawasanlokasi_id' => 7,
//     'pengawasanbangunangedung_id' => 7,
//     'penanggungjawabteknis_id' => 1,
//     'pengawasanstatus_id' => 2,
//     'pengawasantindakan_id' => 1,
//     'judul' => 'Laporan Ketertiban Gedung Perhotelan',
//     'tanggal_laporan' => now(),
//     'keterangan' => 'Gedung Perhotelan sudah sesuai dengan IMB yang diterbitkan.',
// ]);

// ketertiban::create([
//     'pengawasanlokasi_id' => 8,
//     'pengawasanbangunangedung_id' => 8,
//     'penanggungjawabteknis_id' => 3,
//     'pengawasanstatus_id' => 2,
//     'pengawasantindakan_id' => 2,
//     'judul' => 'Laporan Ketertiban Gedung Rekreasi',
//     'tanggal_laporan' => now(),
//     'keterangan' => 'Gedung Rekreasi dalam keadaan Laik Fungsi',
// ]);


// =============== CREATE BERITA AGENDA
// beritaagenda::create([
//     'pengawasanlokasi_id' => 11,
//     'statusprogram' => 'Selesai',
//     'nama_agenda' => 'Rapat Koordinasi Proyek Konstruksi',
//     'keterangan' => 'Rapat koordinasi untuk membahas progres proyek Kabupaten Bandung Barat.',
//     'kuota' => '50',
//     'tanggal_mulai' => '2024-07-20',
//     'tanggal_selesai' => '2024-07-27',
// ]);

// beritaagenda::create([
//     'pengawasanlokasi_id' => 13,
//     'statusprogram' => 'Selesai',
//     'nama_agenda' => 'Pelatihan Keselamatan Kerja',
//     'keterangan' => 'Pelatihan untuk meningkatkan keselamatan kerja di lokasi proyek.',
//     'kuota' => '25',
//     'tanggal_mulai' => '2024-08-02',
//     'tanggal_selesai' => '2024-08-11',
// ]);

// beritaagenda::create([
//     'pengawasanlokasi_id' => 11,
//     'statusprogram' => 'Selesai',
//     'nama_agenda' => 'Pelatihan Sertifikasi Para Pekerja Konstruksi',
//     'keterangan' => 'Pelatihan Sertifikasi Pekerja Konstruksi di Kecamatan Cililin.',
//     'kuota' => '30',
//     'tanggal_mulai' => '2024-08-11',
//     'tanggal_selesai' => '2024-08-14',
// ]);

// beritaagenda::create([
//     'pengawasanlokasi_id' => 12,
//     'statusprogram' => 'Selesai',
//     'nama_agenda' => 'Sosialisasi Proyek Baru',
//     'keterangan' => 'Sosialisasi Paket Pekerjaan Konstruksi Tahun 2024.',
//     'kuota' => '30',
//     'tanggal_mulai' => '2024-08-12',
//     'tanggal_selesai' => '2024-08-30',
// ]);

// beritaagenda::create([
//     'pengawasanlokasi_id' => 15,
//     'statusprogram' => 'Selesai',
//     'nama_agenda' => 'Workshop Teknologi Konstruksi',
//     'keterangan' => 'Workshop tentang teknologi terbaru dalam industri konstruksi.',
//     'kuota' => '40',
//     'tanggal_mulai' => '2024-11-03',
//     'tanggal_selesai' => '2024-11-15',
// ]);

// beritaagenda::create([
//     'pengawasanlokasi_id' => 4,
//     'statusprogram' => 'Selesai',
//     'nama_agenda' => 'Pelatihan Sertifikasi Para Pekerja Konstruksi',
//     'keterangan' => 'Pelatihan Sertifikasi Pekerja Konstruksi di Kecamatan Cikalong Wetan.',
//     'kuota' => '30',
//     'tanggal_mulai' => '2024-12-02',
//     'tanggal_selesai' => '2024-12-04',
// ]);

// beritaagenda::create([
//     'pengawasanlokasi_id' => 14,
//     'statusprogram' => 'Selesai',
//     'nama_agenda' => 'Evaluasi Proyek Tahunan',
//     'keterangan' => 'Evaluasi kinerja proyek yang telah dilaksanakan selama satu tahun.',
//     'kuota' => '20',
//     'tanggal_mulai' => '2024-12-12',
//     'tanggal_selesai' => '2024-12-23',
// ]);


// beritaagenda::create([
//     'pengawasanlokasi_id' => 16,
//     'statusprogram' => 'Selesai',
//     'nama_agenda' => 'Penyampaian Laporan Proyek',
//     'keterangan' => 'Penyampaian laporan akhir proyek yang telah selesai dilaksanakan.',
//     'kuota' => '10',
//     'tanggal_mulai' => '2024-12-18',
//     'tanggal_selesai' => '2024-12-18',
// ]);


// =============== CREATE QA PERTANYAAN
qa::create([
    'qasebagai_id' => 1,
'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Suhardi Wiharja',
    'email' => 'suhardi@example.com',
    'telepon' => '081234567890',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Dewi Sari',
    'email' => 'dewi@example.com',
    'telepon' => '081234567891',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Budi Santoso',
    'email' => 'budi@example.com',
    'telepon' => '081234567892',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 2,
    'nama_lengkap' => 'Rina Agustina',
    'email' => 'rina@example.com',
    'telepon' => '081234567893',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 1,
    'nama_lengkap' => 'Joko Widodo',
    'email' => 'joko@example.com',
    'telepon' => '081234567894',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 2,
    'nama_lengkap' => 'Siti Aminah',
    'email' => 'siti@example.com',
    'telepon' => '081234567895',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Toni Prasetyo',
    'email' => 'toni@example.com',
    'telepon' => '081234567896',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Anisa Putri',
    'email' => 'anisa@example.com',
    'telepon' => '081234567897',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Farhan Rizky',
    'email' => 'farhan@example.com',
    'telepon' => '081234567898',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Indah Permata',
    'email' => 'indah@example.com',
    'telepon' => '081234567899',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 5,
    'nama_lengkap' => 'Rizal Mardiansyah',
    'email' => 'rizal@example.com',
    'telepon' => '081234567900',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 6,
    'nama_lengkap' => 'Fika Ramadhani',
    'email' => 'fika@example.com',
    'telepon' => '081234567901',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Krisna Utama',
    'email' => 'krisna@example.com',
    'telepon' => '081234567902',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 6,
    'nama_lengkap' => 'Lina Oktaviana',
    'email' => 'lina@example.com',
    'telepon' => '081234567903',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 5,
    'nama_lengkap' => 'Dika Rahman',
    'email' => 'dika@example.com',
    'telepon' => '081234567904',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Putri Lestari',
    'email' => 'putri@example.com',
    'telepon' => '081234567905',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Asep Mulyana',
    'email' => 'asep@example.com',
    'telepon' => '081234567906',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 2,
    'nama_lengkap' => 'Sari Rahmawati',
    'email' => 'sari@example.com',
    'telepon' => '081234567907',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 7,
    'nama_lengkap' => 'Denny Saputra',
    'email' => 'denny@example.com',
    'telepon' => '081234567908',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 5,
    'nama_lengkap' => 'Fahri Maulana',
    'email' => 'fahri@example.com',
    'telepon' => '081234567909',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 6,
    'nama_lengkap' => 'Hani Salsabila',
    'email' => 'hani@example.com',
    'telepon' => '081234567910',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Aulia Nabila',
    'email' => 'aulia@example.com',
    'telepon' => '081234567911',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Wira Nugraha',
    'email' => 'wira@example.com',
    'telepon' => '081234567912',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Eka Saputri',
    'email' => 'eka@example.com',
    'telepon' => '081234567913',
]);


// =============== CREATE TIM PEMBINA
        timpembina::create([
            'jabatandalamkedinasan'  => 'Fungsional Pembina Jasa Konstruksi Ahli Muda',
            'nama_lengkap'  => 'Yuyu Yuhana, ST., MM',
            // 'jabatan'  => 'Yuyu Yuhana, ST., MM',
            'email'  => 'sipjakikbb@gmail.com',
            // 'alamatkantor'  => 'Kantor Bupati Pemerintah Kabupaten Bandung Barat',
            'telepon'  => '081317051502',
            'fototimpembina'  => 'timpembina/sipjakikbb.png',

            // 'Jabatan'  => 'Yuyu Yuhana, ST., MM',

        ]);
        // =========================================================

        User::create([
            'name'  => 'Sigit Septiadi ',
            'username' => 'Super Admin SIPJAKI KBB',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);


        User::create([
            'name'  => 'Yuyu Yuhana, S.T., M.M',
            'username' => 'Yuyu Yuhana, S.T., M.M',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto2.png',
            'email' => 'sipjakikbb@gmail.com',
            'password' => bcrypt('adminadmin$$123')
        ]);

        User::create([
            'name'  => 'Andri Nuryadin',
            'username' => 'Andri Nuryadin',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto3.png',
            'email' => 'sipjakikbbadmin1@gmail.com',
            'password' => bcrypt('adminandri')
        ]);

        User::create([
            'name'  => 'Ginanjar',
            'username' => 'Ginanjar',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto4.png',
            'email' => 'sipjakikbbadmin2@gmail.com',
            'password' => bcrypt('adminginanjar')
        ]);

        User::create([
            'name'  => 'User 3 Sipjaki',
            'username' => 'sipjakikbbuser$3',
            'statusadmin_id' => '2',
            'avatar' => 'user/avatar/foto5.png',
            'email' => 'sipjakikbbuser3@gmail.com',
            'password' => bcrypt('sipjakiuser$$333')
        ]);

        User::create([
            'name'  => 'User 4 Sipjaki',
            'username' => 'sipjakikbbuser$4',
            'statusadmin_id' => '2',
            'avatar' => 'user/avatar/foto6.png',
            'email' => 'sipjakikbbuser4@gmail.com',
            'password' => bcrypt('sipjakiuser$$444')
        ]);

        // akun penampungan skk 7
        User::create([
            'name'  => 'Akun Admin Migrasi SKK KBB',
            'username' => 'allskkkbb',
            'statusadmin_id' => '3',
            'avatar' => 'user/avatar/foto6.png',
            'email' => 'sigitechindo@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        // akun id 8
        User::create([
            'name'  => 'Akun LSP',
            'username' => 'Akun LSP',
            'statusadmin_id' => '7',
            'avatar' => 'user/avatar/foto6.png',
            'email' => 'lsptkkkbb@gmail.com',
            'password' => bcrypt('adminlsptkkkbb$$')
        ]);


        // =================================================================
statusadmin::create(['id' => 1, 'statusadmin' => 'super_admin']);
statusadmin::create(['id' => 2, 'statusadmin' => 'admin']);
statusadmin::create(['id' => 3, 'statusadmin' => 'pekerja']);
statusadmin::create(['id' => 4, 'statusadmin' => 'supp_pabrik']);
statusadmin::create(['id' => 5, 'statusadmin' => 'supp_peralatan']);
statusadmin::create(['id' => 6, 'statusadmin' => 'supp_tokobangunan']);
statusadmin::create(['id' => 7, 'statusadmin' => 'lsppenerbit']);
statusadmin::create(['id' => 8, 'statusadmin' => 'operator']);
statusadmin::create(['id' => 9, 'statusadmin' => 'dinas']);
statusadmin::create(['id' => 10, 'statusadmin' => 'supplier']);

        // ===================================================================================
        // DATA TENAGA KERJA SKK KABUPATEN BANDUNG BARAT
        // skktenagakerja::factory(1235)->create();

// / MULAI BARU TKK KBB
        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Kanangasari',
            'nama' => 'WAHYUDIN',
            'alamat' => 'Kp. Cibitung RT/RW 002/011 Kelurahan Kanangasari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1962-08-10',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A01_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/01_WAHYUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/01_WAHYUDIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/01_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/01_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Kanangasari',
            'nama' => 'JAJANG JAENUDIN',
            'alamat' => 'KP. Cisela RT/RW 001/011 Kelurahan Kanangasari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1970-03-11',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A02_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/02_JAJANG_JAENUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/02_JAJANG_JAENUDIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/02_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/02_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cipada',
            'nama' => 'ADE SUTARYA',
            'alamat' => 'Kp. Lembang Dano RT/RW 002/002 Kelurahan Cipada Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1963-06-03',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A03_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/03_ADE_SUTARYA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/03_ADE_SUTARYA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/03_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/03_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cipada',
            'nama' => 'ASEP SUTISNA',
            'alamat' => 'Kp. Lembang RT/RW 002/002 Kelurahan Cipada Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1978-02-12',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A04_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/04_ASEP_SUTISNA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/04_ASEP_SUTISNA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/04_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/04_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Mekarjaya',
            'nama' => 'LILI SUMANTRI',
            'alamat' => 'Kp. Cipadagirang Kecamatan Cikalong Wetan Kabupaten Bandung Barat ',
            'tanggal_lahir' => '1982-07-07',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A05_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/05_LILI_SUMANTRI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/05_LILI_SUMANTRI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/05_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/05_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Mandalasari',
            'nama' => 'SOLIIHIN',
            'alamat' => 'Kp. Ciawitali Kecamatan Cikalong Wetan Kabupaten Bandung Barat ',
            'tanggal_lahir' => '1993-03-11',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A06_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/06_SOLIHIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/06_SOLIHIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/06_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/06_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Mandalasari',
            'nama' => 'DANI SAPRUDIN',
            'alamat' => 'Kp. Sirnaraja RT/RW 003/012 Kelurahan Mandalasari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1992-08-28',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A07_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/07_DANI_SAPRUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/07_DANI_SAPRUDIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/07_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/07_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Puteran',
            'nama' => 'ENDANG SUPRIATNA',
            'alamat' => 'Kp. Cigatrot RT/RW 004/005 Kelurahan Puteran Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1967-10-25',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A08_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/08_ENDANG_SUPRIATNA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/08_ENDANG_SUPRIATNA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/08_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/08_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Puteran',
            'nama' => 'SISWANDI',
            'alamat' => 'Kp. Hegarmanah RT/RW 001/016 Kelurahan Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1984-09-19',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A09_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/09_SISWANDI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/09_SISWANDI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/09_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Puteran',
            'nama' => 'PARMAN',
            'alamat' => 'Kp. Blok Lembur RT/RW 001/009 Kelurahan Puteran Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1972-10-10',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A10_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/10_PARMAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/10_PARMAN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/10_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cipada',
            'nama' => 'YUDI LESMANA',
            'alamat' => 'Kp. Lembang RT/RW 001/001 Kelurahan Cipada Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1991-04-10',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A11_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/11_YUDI_LESMANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/11_YUDI_LESMANA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/11_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cipada',
            'nama' => 'ATO SUGIARTO',
            'alamat' => 'Kp. Cipicung RT/RW 001/003 Kelurahan Cipada Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1991-08-08',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A12_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/12_ATO_SUGIARTO_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/12_ATO_SUGIARTO_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/12_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cipada',
            'nama' => 'SLAMET TRIADI',
            'alamat' => 'Kp. Lembang Dano RT/RW 001/001 Kelurahan Cipada Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1999-05-12',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A13_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/13_SLAMET_TRIADI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/13_SLAMET_TRIADI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/13_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Ganjarsari',
            'nama' => 'DEPI RISMAWAN',
            'alamat' => 'Kp. Ganjarsari RT/RW 002/008 Kelurahan Ganjarsari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1999-12-22',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A14_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/14_DEPI_RISMAWAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/14_DEPI_RISMAWAN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/14_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'DADAN',
            'alamat' => 'Kp. Cisomang Barat RT/RW 001/012 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1975-11-30',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A15_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/15_DADAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/15_DADAN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/15_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'JAJANG',
            'alamat' => 'Kp. Cisomang Barat RT/RW 003/011 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1972-04-21',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A16_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/16_JAJANG_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/16_JAJANG_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/16_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'APIN ARIPIN',
            'alamat' => 'Kp. Cisomang Barat RT/RW 001/017 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1973-07-03',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A17_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/17_APIN_ARIPIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/17_APIN_ARIPIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/17_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'DUYEH',
            'alamat' => 'Kp. Cisomang Barat RT/RW 002/011 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1969-08-02',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A18_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/18_DUYEH_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/18_DUYEH_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/18_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Ganjarsari',
            'nama' => 'AYI NURDIN',
            'alamat' => 'Kp. Bojong Sero RT/RW 003/004 Kelurahan Ganjarsari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1980-07-01',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A19_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/19_AYI_NURDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/19_AYI_NURDIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/19_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Ganjarsari',
            'nama' => 'ASEP RAHMAT',
            'alamat' => 'Kp. Jambudipa RT/RW 001/002 Kelurahan Ganjarsari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1976-06-27',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A20_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/20_ASEP_RAHMAT_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/20_ASEP_RAHMAT_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/20_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cikalong Wetan',
            'nama' => 'YANA HERDIANA',
            'alamat' => 'Kp. Lapang RT/RW 005/004 Kelurahan Cikalong Wetan Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1972-09-30',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A21_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/21_YANA_HERDIANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/21_YANA_HERDIANA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/21_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Wangunjaya',
            'nama' => 'DODO ABDUL FATAH',
            'alamat' => 'Kp. Babakan RT/RW 003/003 Kelurahan Wangunjaya Wetan Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1973-07-01',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A22_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/22_DODO_ABDUL_FATAH_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/22_DODO_ABDUL_FATAH_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/22_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat ',
            'nama' => 'WAWAN',
            'alamat' => 'Kp. Cikara RT/RW 001/012 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1980-04-03',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A23_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/23_WAWAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/23_WAWAN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/23_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat ',
            'nama' => 'ENDANG MUSTOPA',
            'alamat' => 'Kp. Pasirnangka RT/RW 002/004 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1971-07-01',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A24_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/24_ENDANG_MUSTOPA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/24_ENDANG_MUSTOPA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/24_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Wangunjaya',
            'nama' => 'TATANG',
            'alamat' => 'Kp. Babakan RT/RW 001/003 Kelurahan Wangunjaya Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1979-02-01',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A25_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/25_TATANG_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/25_TATANG_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/25_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'YAYAN MULYANA',
            'alamat' => 'Kp. Cianca RT/RW 001/007 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1970-07-05',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A26_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/26_YAYAN_MULYANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/26_YAYAN_MULYANA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/26_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'MULYANA',
            'alamat' => 'Kp. Cibungbulang RT/RW 001/011 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1980-12-12',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A27_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/27_MULYANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/27_MULYANA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/27_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Wangunjaya',
            'nama' => 'AYI SOPIAN',
            'alamat' => 'Kp. Tengek RT/RW 002/008 Kelurahan Wangunjaya Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1967-03-23',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A28_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/28_AYI_SOPANDI_KTA GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/28_AYI_SOPANDI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/28_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Wangunjaya',
            'nama' => 'OBAR S BIN SAPDI',
            'alamat' => 'Kp. Tengek RT/RW 002/011 Kelurahan Wangunjaya Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1977-08-08',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A29_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/29_OBAR_S_BIN_SAPDI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/29_OBAR_S_BIN_SAPDI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/29_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Sadangmekar',
            'nama' => 'RIFKI NOVALIMANI',
            'alamat' => 'Kp. Cilengsar RT/RW 002/001 Kelurahan Sadangmekar Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '2004-10-19',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '11',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A30_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/30_RIFKI_NOVALIMANI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/30_RIFKI_NOVALIMANI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/30_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ------------------------------------------ CIKALONG WETAN SIPJAKI KBB KABUPATEN BANDUNG BARAT --------------
        // ------------------------------------------ CIKALONG WETAN SIPJAKI KBB KABUPATEN BANDUNG BARAT --------------
        // ------------------------------------------ CIKALONG WETAN SIPJAKI KBB KABUPATEN BANDUNG BARAT --------------

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Budiharja',
            'nama' => 'ANTON HILMAN',
            'alamat' => '-',
            'tanggal_lahir' => '1993-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-01.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/ANTON_HILMAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/ANTON_HILMAN_SKK_TUKANG_BANGUNAN_GEDUNG__J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/antonkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/antonkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batu Layang',
            'nama' => 'ENDANG SOEMANTRI',
            'alamat' => '-',
            'tanggal_lahir' => '1985-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-02.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/ENDANG_SOMANTRI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/ENDANG_SOMANTRI_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/endangkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/endangkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1985-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batu Layang',
            'nama' => 'LUBIS',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-03.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/LUBIS_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/LUBIS_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/lubiskegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/lubiskegiatan2.jpg',
            // 'usia' => $this->calculateAge('1988-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batu Layang',
            'nama' => 'JAJANG SAEFUL MUMIN',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-04.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/JAJANG_SAEPUL_MUMIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/JAJANG_SAEPUL_MUMIN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/antonkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/antonkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Bongas',
            'nama' => 'ABDUL RIZKI MAJID',
            'alamat' => '-',
            'tanggal_lahir' => '1992-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-05.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/ABDUL_RIZKIL MAJID_KTA GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/ABDUL_RIZKIL MAJID_SKK_TUKANG_BANGUNAN GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/abdulkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/abdulkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1992-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karanganyar',
            'nama' => 'MUHAMMAD HUSNI PURNAMA MUIZ',
            'alamat' => '-',
            'tanggal_lahir' => '1993-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-06.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/MUHAMMAD_HUSNI_PURNAMA_MUIZ_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/MUHAMMAD_HUSNI_PURNAMA_MUIZ_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/husnikegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/husnikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karang Tanjung ',
            'nama' => 'UJANG MULYANA',
            'alamat' => '-',
            'tanggal_lahir' => '1995-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-07.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/UJANG_MULYANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/UJANG_MULYANA_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/ujangmulyanakegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/ujangmulyanakegiatan2.jpg',
            // 'usia' => $this->calculateAge('1995-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karyamukti ',
            'nama' => 'HENDRI',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-08.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/HENDRI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/HENDRI_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/hendrikegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/hendrikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Kidang Panunjang ',
            'nama' => 'HENDRAWAN',
            'alamat' => '-',
            'tanggal_lahir' => '1982-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-09.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/HENDRAWAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/HENDRAWAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/hendrawankegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/hendrawankegiatan2.jpg',
            // 'usia' => $this->calculateAge('1982-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Muka Payung ',
            'nama' => 'KARSIM WIDIANTO',
            'alamat' => '-',
            'tanggal_lahir' => '1975-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-10.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/KARSIM_WIDIANTO_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/KARSIM_WIDIANTO_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/kasimkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/kasimkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1975-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Kidang Panunjang ',
            'nama' => 'MAMAT HIDAYAT',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-11.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/MAMAT_HIDAYAT_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/MAMAT_HIDAYAT_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/mamatkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/mamatkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1988-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Nangerang ',
            'nama' => 'ROHMAT',
            'alamat' => '-',
            'tanggal_lahir' => '1975-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-12.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/ROHMAT_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/ROHMAT_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/rohmatkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/rohmatkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1975-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Ranca Panggung ',
            'nama' => 'NURJAMAH AMINUDIN',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-13.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/NURJAMAH_AMINUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/NURJAMAH_AMINUDIN_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/nurjamahkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/nurjamahkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Cililin ',
            'nama' => 'BEBEN',
            'alamat' => '-',
            'tanggal_lahir' => '1985-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-14.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/BEBEN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/BEBEN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/bebenkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/bebenkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1985-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batulayang ',
            'nama' => 'PANDI SUPRIADI',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-15.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/PANDI_SUPRIADI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/PANDI_SUPRIADI_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/pandikegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/pandikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Budiharja ',
            'nama' => 'SULAEMAN',
            'alamat' => '-',
            'tanggal_lahir' => '1990-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-16.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/SULAEMAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/SULAEMAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/sulaemankegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/sulaemankegiatan2.jpg',
            // 'usia' => $this->calculateAge('1990-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Bongas ',
            'nama' => 'AHMAD EFENDI',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-17.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/AHMAD_EFENDI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/AHMAD_EFENDI_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/ahmadefendikegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/ahmadefendikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1988-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karanganyar ',
            'nama' => 'IAN SOPIAN',
            'alamat' => '-',
            'tanggal_lahir' => '1982-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-18.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/IAN_SOPIAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/IAN_SOPIAN_ SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/iankegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/iankegiatan2.jpg',
            // 'usia' => $this->calculateAge('1982-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Mukapayung ',
            'nama' => 'BULDANI',
            'alamat' => '-',
            'tanggal_lahir' => '1993-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-19.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/BULDANI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/BULDANI_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/buldanikegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/buldanikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Nangerang ',
            'nama' => 'SAEHUDIN',
            'alamat' => '-',
            'tanggal_lahir' => '1978-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-20.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/SAEHUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/SAEHUDIN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/saehudinkegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/saehudinkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1978-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batulayang ',
            'nama' => 'CECEP JAMALUDIN',
            'alamat' => '-',
            'tanggal_lahir' => '1992-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-21.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/CECEP_JAMALUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/CECEP_JAMALUDIN_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/cecepjamaludinkegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/cecepjamaludinkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1992-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karangmukti ',
            'nama' => 'Yopi Sopian',
            'alamat' => '-',
            'tanggal_lahir' => '1995-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-22.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/YOPI_SOFYAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/YOPI_SOFYAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/yopikegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/yopikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1995-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karangmukti ',
            'nama' => 'RUKMANA',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-23.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/RUKMANA_S_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/RUKMANA_S_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/rukmanakegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/rukmanakegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batulayang ',
            'nama' => 'IDRUS SUPARDI',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-24.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/IDRUS_SUPARDI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/IDRUS_SUPARDI_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/idruskegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/idruskegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Bongas ',
            'nama' => 'AGUS SETIAWAN',
            'alamat' => '-',
            'tanggal_lahir' => '1984-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-25.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/AGUS_SETIAWAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/AGUS_SETIAWAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/agussetiawankegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/agussetiawankegiatan2.jpg',
            // 'usia' => $this->calculateAge('1984-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Kidang Panunjang',
            'nama' => 'DEDE MEDIANSYAH',
            'alamat' => '-',
            'tanggal_lahir' => '1984-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-26.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/DEDE_MEDIANSYAH_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/DEDE_MEDIANSYAH_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/mediansyahkegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/mediansyahkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1984-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Nangerang',
            'nama' => 'Dadang Eki Gunawan',
            'alamat' => '-',
            'tanggal_lahir' => '1986-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-27.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/DADANG_EKKI_GUNAWAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/DADANG_EKKI_GUNAWAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/dadangekikegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/dadangekikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1986-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karanganyar',
            'nama' => 'Ade Supriatna',
            'alamat' => '-',
            'tanggal_lahir' => '1991-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-28.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/ADE_SUPRIATNA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/ADE_SUPRIATNA_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/adesupriatnakegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/adesupriatnakegiatan2.jpg',
            // 'usia' => $this->calculateAge('1991-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Mukapayung',
            'nama' => 'AJANG KUSWANA',
            'alamat' => '-',
            'tanggal_lahir' => '1987-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-29.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/AJANG_KUSWANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/AJANG_KUSWANA_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/ajangkuswanakegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/ajangkuswanakegiatan2.jpg',
            // 'usia' => $this->calculateAge('1987-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Bongas',
            'nama' => 'YUSUF SOPIAN',
            'alamat' => '-',
            'tanggal_lahir' => '1987-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '10',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-30.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/YUSUP_SOPYAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/YUSUP_SOPYAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/yusufsopiankegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/yusufsopiankegiatan2.jpg',
            // 'usia' => $this->calculateAge('1987-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);





// ======================================================================================================
        //     Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'DEDE ROYANI',
        //     'alamat' => 'KP.CIGARUNG RT 004/007 ',
        //     'tanggal_lahir' => '1994-03-09',
        //     'nik' => '3217122003940000',
        //     'keterampilan' => 'LAS LISTRIK',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1994-03-09'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'RONI RUSTANDI',
        //     'alamat' => 'KP.SARONGGE RT 001/003',
        //     'tanggal_lahir' => '1993-03-26',
        //     'nik' => '3217122603930000',
        //     'keterampilan' => 'LAS LISTRIK',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1993-03-26'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'AHMAD SANDI FAUIZI',
        //     'alamat' => 'KP.CISALADAK RT 001/003',
        //     'tanggal_lahir' => '1998-10-24',
        //     'nik' => '3217122410980010',
        //     'keterampilan' => 'LAS LISTRIK',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1998-10-24'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'IMAN',
        //     'alamat' => 'KP.SADANG RT 003/003 ',
        //     'tanggal_lahir' => '1985-07-06',
        //     'nik' => '3217120607850040',
        //     'keterampilan' => 'PEMASANGAN BATU BATA',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1985-07-06'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'DEDI MULYADI',
        //     'alamat' => 'KP.SADANG RT 003/003  ',
        //     'tanggal_lahir' => '1976-06-12',
        //     'nik' => '3217121206760020',
        //     'keterampilan' => 'PEMASANGAN BATU BATA',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1976-06-12'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'AYI HERMAN',
        //     'alamat' => 'KP.CILAME RT 003/005',
        //     'tanggal_lahir' => '1980-04-20',
        //     'nik' => '3217122004800010',
        //     'keterampilan' => 'PEMASANGAN BATU BATA',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1980-04-20'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'ANTO.S',
        //     'alamat' => 'KP.SADANG RT 003/003',
        //     'tanggal_lahir' => '1986-03-08',
        //     'nik' => '3217120803860010',
        //     'keterampilan' => 'PEMASANGAN BATU BATA',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1986-03-08'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'ASEP SUTISNA',
        //     'alamat' => 'KP.CIBANAS RT 005/003',
        //     'tanggal_lahir' => '1973-07-04',
        //     'nik' => '3217120407730010',
        //     'keterampilan' => 'PEMASANGAN BATU BATA',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1973-07-04'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'IWAN SETIAWAN',
        //     'alamat' => 'KP.CISALADAK RT 001/003 ',
        //     'tanggal_lahir' => '1977-06-02',
        //     'nik' => '3217120206770000',
        //     'keterampilan' => 'PEMASANGAN BATU BATA',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1977-06-02'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'NANDANG',
        //     'alamat' => 'KP.CISALADAK RT 002/003',
        //     'tanggal_lahir' => '1964-07-01',
        //     'nik' => '3217120107640160',
        //     'keterampilan' => 'KAYU',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1964-07-01'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'DASEP',
        //     'alamat' => 'KP.BABAKAN RT 004/005 ',
        //     'tanggal_lahir' => '1968-09-08',
        //     'nik' => '3217120809680000',
        //     'keterampilan' => 'KAYU',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1968-09-08'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'ABUDIN',
        //     'alamat' => 'KP.SUKASENANG RT 001/002',
        //     'tanggal_lahir' => '1971-02-10',
        //     'nik' => '3275101002710010',
        //     'keterampilan' => 'KONSTRUKSI',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1971-02-10'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'MUHAMMAD NANDA I',
        //     'alamat' => 'KP.SUKASENANG  RT 001/002',
        //     'tanggal_lahir' => '1994-10-29',
        //     'nik' => '3217122910940000',
        //     'keterampilan' => 'KONSTRUKSI',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1994-10-29'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'HILMAN',
        //     'alamat' => 'KP.SUKASENANG  RT 001/002',
        //     'tanggal_lahir' => '1975-05-03',
        //     'nik' => '3217120305750040',
        //     'keterampilan' => 'BATU BATA',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1975-05-03'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'AANG ANWAR',
        //     'alamat' => 'KP.BABAKAN RT 004/005 ',
        //     'tanggal_lahir' => '1987-07-25',
        //     'nik' => '3217121607870005',
        //     'keterampilan' => 'KONSTRUKSI BANGUNAN',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1987-07-25'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'NANANG RIANA',
        //     'alamat' => 'KP.SUKASENANG  RT 001/002',
        //     'tanggal_lahir' => '1982-08-18',
        //     'nik' => '3217121808820012',
        //     'keterampilan' => 'KONSTRUKSI BANGUNAN',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1982-08-18'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);

        // Tukangterampil::create([
        //     'kecamatan' => 'Cipongkor',
        //     'desa' => 'MEKARSARI',
        //     'nama' => 'IWAN SETIAWAN',
        //     'alamat' => 'KP.CINAGEN RT 004/001 ',
        //     'tanggal_lahir' => '1984-07-02',
        //     'nik' => '3217120207840010',
        //     'keterampilan' => 'KONSTRUKSI BANGUNAN',
        //     'tahun_bimtek' => 'BELUM',
        //     'kualifikasi' => 'BELUM',
        //     'registrasi' => 'BELUM',
        //     'foto' => 'professional',
        //     'usia' => $this->calculateAge('1984-07-02'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'deleted_at' => null, // Jika Anda menggunakan soft deletes
        // ]);




//======================== ===================================================================================
//======================== ===================================================================================
strukturdinas::create([
    'judul' => 'Struktur Dinas Pekerjaan Umum Dan Tata Ruang Kabupaten Bandung Barat',
    'peraturan' => 'struktur/01_dinas/BAGAN_DPUTR.pdf',
    'keterangan' => 'Dinas Pekerjaan Umum dan Tata Ruang (PUTR) Pemerintah Kabupaten Bandung Barat memiliki peran vital dalam pengelolaan infrastruktur dan penataan ruang yang mendukung pembangunan daerah. Dinas ini bertanggung jawab dalam merencanakan, melaksanakan, serta mengawasi pembangunan berbagai infrastruktur seperti jalan, jembatan, dan gedung, serta fasilitas publik lainnya. Selain itu, Dinas PUTR juga berperan dalam penataan ruang yang berfokus pada pengembangan wilayah yang terencana dan berkelanjutan. Struktur organisasi Dinas PUTR Kabupaten Bandung Barat dibangun dengan sistem yang terstruktur dan terorganisir guna memastikan efektivitas dalam pelaksanaan.',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
renstra::create([
    'judul' => 'Rencana Strategis Pemerintah Kabupaten Bandung Barat',
    'peraturan' => 'struktur/02_renstra/JASA_KONSTRUKSI_RENCARA_STRATEGIS_KABUPATEN_BANDUNG_BARAT.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
tupoksi::create([
    'judul' => 'Tupoksi Program Jasa Konstruksi DPUTR Kabupaten Bandung Barat',
    'peraturan' => 'struktur/03_tupoksi/SOTK_DPUTR.pdf',
    'keterangan' => 'Dinas Pekerjaan Umum dan Tata Ruang (DPUTR) Kabupaten Bandung Barat memiliki peran strategis dalam pembinaan jasa konstruksi guna mendukung pembangunan infrastruktur yang berkualitas. DPUPR bertugas menyusun kebijakan teknis, mengembangkan sistem informasi konstruksi, serta meningkatkan kapasitas badan usaha konstruksi agar lebih kompetitif dan profesional. Selain itu, DPUPR juga berperan dalam pengawasan dan penjaminan mutu konstruksi, penyuluhan serta bimtek kepada para pelaku jasa konstruksi, serta pengembangan pasar dan kerja sama konstruksi. Dengan pendekatan berbasis regulasi dan inovasi, DPUPR terus berupaya menciptakan ekosistem konstruksi yang tertib, berdaya saing, dan mendukung pertumbuhan ekonomi Kabupaten Bandung Barat.',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
standarbiayaumum::create([
    'judul' => 'Permen PUPR Nomor 08 Tahun 2023',
    'peraturan' => 'standarbiayaumum/Permen_PUPR_Nomor_8_Tahun_2023.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

standarbiayaumum::create([
    'judul' => 'Permen PUPR Nomor 14 Tahun 2020',
    'peraturan' => 'standarbiayaumum/Permen_PUPR_Nomor_14_Tahun_2020.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);
//======================== ===================================================================================

//======================== ===================================================================================
sbulampiran1::create([
    'judul' => '0_COVER_LAMPIRAN_I_PL',
    'peraturan' => 'standarbiayaumum/lampiran1/0_COVER_LAMPIRAN_I_PL.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'A_SDP_Pengadaan_Langsung_JKK_Perorangan',
    'peraturan' => 'standarbiayaumum/lampiran1/A_SDP_Pengadaan_Langsung_JKK_Perorangan.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'B_SDP_Pengadaan_Langsung_JKK_BUJK',
    'peraturan' => 'standarbiayaumum/lampiran1/B_SDP_Pengadaan_Langsung_JKK_BUJK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'C_SDP_Pengadaan_Langsung_PK_Perorangan',
    'peraturan' => 'standarbiayaumum/lampiran1/C_SDP_Pengadaan_Langsung_PK_Perorangan.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'D_SDP_Pengadaan_Langsung_PK_BUJK',
    'peraturan' => 'standarbiayaumum/lampiran1/D_SDP_Pengadaan_Langsung_PK_BUJK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
sbulampiran2::create([
    'judul' => '0_COVER_LAMPIRAN_II_JK',
    'peraturan' => 'standarbiayaumum/lampiran2/0_COVER_LAMPIRAN_II_JK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'A_Dok_Kualifikasi',
    'peraturan' => 'standarbiayaumum/lampiran2/A_Dok_Kualifikasi.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'B_Seleksi_Kualitas_Biaya_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/B_Seleksi_Kualitas_Biaya_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'C_Seleksi_BU_Kualitas_Biaya_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/C_Seleksi_BU_Kualitas_Biaya_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'D_Seleksi_BU_Kualitas_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/D_Seleksi_BU_Kualitas_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'E_Seleksi_BU_Kualitas_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/E_Seleksi_BU_Kualitas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'F_Seleksi_BU_Pagu_Anggaran_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/F_Seleksi_BU_Pagu_Anggaran_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'G_Seleksi_BU_Pagu_Anggaran_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/G_Seleksi_BU_Pagu_Anggaran_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'H_Seleksi_BU_Biaya_Terendah_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/H_Seleksi_BU_Biaya_Terendah_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'I_Seleksi_BU_Biaya_Terendah_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/I_Seleksi_BU_Biaya_Terendah_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'J_Seleksi_TA_Kualitas_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/J_Seleksi_TA_Kualitas_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'K_Seleksi_TA_Kualitas_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/K_Seleksi_TA_Kualitas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
sbulampiran3::create([
    'judul' => '0_COVER_LAMPIRAN_III_PK',
    'peraturan' => 'standarbiayaumum/lampiran3/0_COVER_LAMPIRAN_III_PK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'A_SDP_PK_Pasca_Harga_Terendah_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/A_SDP_PK_Pasca_Harga_Terendah_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'B_SDP_PK_Pasca_Harga_Terendah_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/B_SDP_PK_Pasca_Harga_Terendah_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'C_SDP_PK_Pasca_Harga_Terendah_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/C_SDP_PK_Pasca_Harga_Terendah_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'D_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/D_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'E_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/E_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'F_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/F_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'G_SDP_PK_Pasca_Sistem_Nilai_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/G_SDP_PK_Pasca_Sistem_Nilai_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'H_SDP_PK_Pasca_Sistem_Nilai_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/H_SDP_PK_Pasca_Sistem_Nilai_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'I_SDP_PK_Pasca_Sistem_Nilai_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/I_SDP_PK_Pasca_Sistem_Nilai_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'J_SDP_PK_Prakualifikasi',
    'peraturan' => 'standarbiayaumum/lampiran3/J_SDP_PK_Prakualifikasi.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'K_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/K_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'L_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/L_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'M_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/M_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'N_SDP_PK_Pra_Sistem_Nilai_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/N_SDP_PK_Pra_Sistem_Nilai_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'O_SDP_PK_Pra_Sistem_Nilai_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/O_SDP_PK_Pra_Sistem_Nilai_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'P_SDP_PK_Pra_Sistem_Nilai_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/P_SDP_PK_Pra_Sistem_Nilai_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);
//======================== ===================================================================================
// DATA BACKEND
//======================== ===================================================================================

//======================== ===================================================================================
//======================== ===================================================================================
keterampilanpekerja::create([
    'id' => '1',
    'keterampilan' => 'GALI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '2',
    'keterampilan' => 'RELIEF',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '3',
    'keterampilan' => 'BANGUNAN GEDUNG LEVEL 1',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '4',
    'keterampilan' => 'PEMBESIAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '5',
    'keterampilan' => 'KITCHENSET',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '6',
    'keterampilan' => 'KONSTRUKSI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '7',
    'keterampilan' => 'PENGECATAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '8',
    'keterampilan' => 'AHLI TEMBOK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '9',
    'keterampilan' => 'LAS LISTRIK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '10',
    'keterampilan' => 'MESIN BROKER',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '11',
    'keterampilan' => 'KAYU DAN KUSEN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '12',
    'keterampilan' => 'HAMMER DRILL',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '13',
    'keterampilan' => 'OPERATOR BEKO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '14',
    'keterampilan' => 'PASANG KERAMIK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '15',
    'keterampilan' => 'PEMASANGAN BATU',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '16',
    'keterampilan' => 'PASANG BATU DAN COR',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '17',
    'keterampilan' => 'BENGKEL DAN MEKANIK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '18',
    'keterampilan' => 'PEMASANGAN BATU BATA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '19',
    'keterampilan' => 'KAYU DAN PEMASANGAN BATU',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '20',
    'keterampilan' => 'PEMASANGAN BATU, BESI DAN KAYU',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '21',
    'keterampilan' => 'PEMASANGAN KAYU DAN BATU BATA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '22',
    'keterampilan' => 'PEMASANGAN BATU, COR, BESI, DAN KAYU ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
metodepengadaan::create([
    'id' => '1',
    'metode' => 'LANGSUNG',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '2',
    'metode' => 'PELELANGAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '3',
    'metode' => 'UNDANGAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '4',
    'metode' => 'KONSULTASI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '5',
    'metode' => 'PENUNJUKAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '6',
    'metode' => 'E-TENDERING',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '7',
    'metode' => 'KUALIFIKASI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '8',
    'metode' => 'TERBUKA TERBATAS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '9',
    'metode' => 'LANGSUNG TERBATAS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== PENGAWASAN LOKASI  ===================================================================================
agendastatus::create([
    'id' => '1',
    'status' => 'SEGERA HADIR',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

agendastatus::create([
    'id' => '2',
    'status' => 'DI BATALKAN ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

agendastatus::create([
    'id' => '3',
    'status' => 'BERJALAN ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

agendastatus::create([
    'id' => '4',
    'status' => 'SELESAI ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);
//======================== PENGAWASAN LOKASI  ===================================================================================
pengawasanlokasi::create([
    'id' => '1',
    'kota' => 'LEMBANG',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '2',
    'kota' => 'PARONGPONG',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '3',
    'kota' => 'CISARUA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '4',
    'kota' => 'CIKALONG WETAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '5',
    'kota' => 'CIPEUNDEY',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '6',
    'kota' => 'NGAMPRAH',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '7',
    'kota' => 'CIPATAT',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '8',
    'kota' => 'PADALARANG',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '9',
    'kota' => 'BATUJAJAR',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '10',
    'kota' => 'CIHAMPELAS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '11',
    'kota' => 'CILILIN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '12',
    'kota' => 'CIPONGKOR',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '13',
    'kota' => 'RONGGA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '14',
    'kota' => 'SINDANGKERTA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '15',
    'kota' => 'GUNUNG HALU',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '16',
    'kota' => 'SAGULING',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
pengawasanbangunangedung::create([
    'id' => '1',
    'bangunan' => 'GEDUNG PERKANTORAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '2',
    'bangunan' => 'GEDUNG KOMERSIAL',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '3',
    'bangunan' => 'GEDUNG INDUSTRI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '4',
    'bangunan' => 'GEDUNG PENDIDIKAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '5',
    'bangunan' => 'GEDUNG KESEHATAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '6',
    'bangunan' => 'GEDUNG PERUMAHAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '7',
    'bangunan' => 'GEDUNG PEMERINTAHAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '8',
    'bangunan' => 'GEDUNG BUDAYA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '9',
    'bangunan' => 'GEDUNG HIBURAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '10',
    'bangunan' => 'GEDUNG TRANSPORTASI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================

pengawasanstatus::create([
    'id' => '1',
    'status' => 'RESIKO TINGGI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanstatus::create([
    'id' => '2',
    'status' => 'RESIKO SEDANG',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanstatus::create([
    'id' => '3',
    'status' => 'RESIKO RENDAH',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//  ================================================================
pengawasantindakan::create([
    'id' => '1',
    'tindakan' => 'BELUM DI TINDAKLANJUTI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasantindakan::create([
    'id' => '2',
    'tindakan' => 'SEDANG DI PROSES',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasantindakan::create([
    'id' => '3',
    'tindakan' => 'SELESAI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//  ================================================================


        peraturan::create([
            'judul' => 'UNDANG- UNDANG JASA KONSTRUKSI',
            'peraturan' => 'peraturan/01_uud/UU_NO_02_TAHUN_2017.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ======================================================
        perpemerintah::create([
            'judul' => 'PERATURAN PEMERINTAH NOMOR 29 TAHUN 2000',
            'peraturan' => 'peraturan/02_pemerintah/PERATURAN_PEMERINTAH_NO_29_TAHUN_2000.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        // ======================================================
        perpresiden::create([
            'judul' => 'PERATURAN PRESIDEN NOMOR 12 TAHUN 2021',
            'peraturan' => 'peraturan/03_presiden/PERATURAN_PRESIDEN_NOMOR_12_TAHUN_2021.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

// ==========================================================================================
// ==========================================================================================

        permenteri::create([
            'judul' => 'LAMPIRAN_1_A_COVER_LAMPIRAN_I_PL',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_A_COVER_LAMPIRAN_I_PL.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_A_SDP_PENGADAAN_LANGSUNG_JKK_PERORANGAN',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_A_SDP_PENGADAAN_LANGSUNG_JKK_PERORANGAN.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_B_SDP_PENGADAAN_LANGSUNG_JKK_BUJK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_B_SDP_PENGADAAN_LANGSUNG_JKK_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_C_SDP_PENGADAAN_LANGSUNG_PK_PERORANGAN',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_C_SDP_PENGADAAN_LANGSUNG_PK_PERORANGAN.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_D_SDP_PENGADAAN_LANGSUNG_PK_BUJK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_D_SDP_PENGADAAN_LANGSUNG_PK_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_A_COVER_LAMPIRAN_II_JK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_A_COVER_LAMPIRAN_II_JK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_B_DOK_KUALIFIKASI',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_B_DOK_KUALIFIKASI.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_C_SELEKSI_KUALITAS_BIAYA_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_C_SELEKSI_KUALITAS_BIAYA_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_D_SELEKSI_BU_KUALITAS_BIAYA_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_D_SELEKSI_BU_KUALITAS_BIAYA_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_E_SELEKSI_BU_KUALITAS_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_E_SELEKSI_BU_KUALITAS_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_F_SELEKSI_BU_KUALITAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_F_SELEKSI_BU_KUALITAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_G_SELEKSI_BU_PAGU_ANGGARAN_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_G_SELEKSI_BU_PAGU_ANGGARAN_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_H_SELEKSI_BU_PAGU_ANGGARAN_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_H_SELEKSI_BU_PAGU_ANGGARAN_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_I_SELEKSI_BU_BIAYA_TERENDAH_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_I_SELEKSI_BU_BIAYA_TERENDAH_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_J_SELEKSI_BU_BIAYA_TERENDAH_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_J_SELEKSI_BU_BIAYA_TERENDAH_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_K_SELEKSI_TA_KUALITAS_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_K_SELEKSI_TA_KUALITAS_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_L_SELEKSI_TA_KUALITAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_L_SELEKSI_TA_KUALITAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_A_COVER_LAMPIRAN_III_PK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_A_COVER_LAMPIRAN_III_PK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_B_SDP_PK_PASCA_HARGA_TERENDAH_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_B_SDP_PK_PASCA_HARGA_TERENDAH_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_C_SDP_PK_PASCA_HARGA_TERENDAH_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_C_SDP_PK_PASCA_HARGA_TERENDAH_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_D_SDP_PK_PASCA_HARGA_TERENDAH_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_D_SDP_PK_PASCA_HARGA_TERENDAH_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_E_SDP_PK_PASCA_HARGA_TERENDA_AMBANG_BATAS_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_E_SDP_PK_PASCA_HARGA_TERENDA_AMBANG_BATAS_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_F_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_F_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_G_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_G_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_H_SDP_PK_PASCA_SISTEM_NILAI_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_H_SDP_PK_PASCA_SISTEM_NILAI_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_I_SDP_PK_PASCA_SISTEM_NILAI_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_I_SDP_PK_PASCA_SISTEM_NILAI_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_J_SDP_PK_PASCA_SISTEM_NILAI_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_J_SDP_PK_PASCA_SISTEM_NILAI_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_K_SDP_PK_PRAKUALIFIKASI',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_K_SDP_PK_PRAKUALIFIKASI.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_L_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_L_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_M_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_M_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_N_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_N_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_O_SDP_PK_PRA_SISTEM_NILAI_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_O_SDP_PK_PRA_SISTEM_NILAI_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_P_SDP_PK_PRA_SISTEM_NILAI_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_P_SDP_PK_PRA_SISTEM_NILAI_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_Q_SDP_PK_PRA_SISTEM_NILAI_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_Q_SDP_PK_PRA_SISTEM_NILAI_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

// ============================================================================================================
        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_DIRJEN_BINAKOS_NO_89_PENETAPAN_STANDAR_SKEMA_SERTIFIKAT_BUJK',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_DIRJEN_BINAKOS_NO_89_PENETAPAN_STANDAR_SKEMA_SERTIFIKAT_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_DIRJEN_PENETAPAN_SKEMA_BUJK_NOMOR_144_TAHUN_2022',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_DIRJEN_PENETAPAN_SKEMA_BUJK_NOMOR_144_TAHUN_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_MENTERI_PUPR_NO_713_TAHUN_2022',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_MENTERI_PUPR_NO_713_TAHUN_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_MENTERI_PUPR_NO_1410_KPTS_M_2020',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_MENTERI_PUPR_NO_1410_KPTS_M_2020.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ====================================================================================================================================================================================
        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BINKON_NO_54_TAHUN_2024',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BINKON_NO_54_TAHUN_2024.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BK_NOMOR_33_TAHUN_2023',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BK_NOMOR_33_TAHUN_2023.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_KEMENTERIAN_2022_SE_DJB_TATA_CARA_PELAKSANAAN_SERTIFIKASI_KOMPETENSI_FINAL',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_KEMENTERIAN_2022_SE_DJB_TATA_CARA_PELAKSANAAN_SERTIFIKASI_KOMPETENSI_FINAL.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_PENCABUTAN_DIRJEN_BK_NO_59_2022',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_PENCABUTAN_DIRJEN_BK_NO_59_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BINKON_NO_73_TAHUN_2023',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BINKON_NO_73_TAHUN_2023.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ===========================================================================================================================================================

        referensi::create([
            'judul' => 'PERATURAN_PEMERINTAH_NOMOR_22_TAHUN_2020',
            'peraturan' => 'peraturan/07_suratreferensi/PERATURAN_PEMERINTAH_NOMOR_22_TAHUN_2020.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ===========================================================================================================================================================

        perdaerah::create([
            'judul' => 'PERATURAN_DAERAH_NO_11-TAHUN_2019',
            'peraturan' => 'peraturan/08_daerah/PERATURAN_DAERAH_NO_11-TAHUN_2019.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        perdaerah::create([
            'judul' => 'PERATURAN_DAERAH_NOMOR_01_TAHUN_2021_OCR',
            'peraturan' => 'peraturan/08_daerah/PERATURAN_DAERAH_NOMOR_01_TAHUN_2021_OCR.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


// ===========================================================================================================================================================

pergubernur::create([
    'judul' => 'PERATURAN_GUBERNUR_NOMOR_99_TAHUN_2009',
    'peraturan' => 'peraturan/09_gubernur/PERATURAN_GUBERNUR_NOMOR_99_TAHUN_2009.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// ===========================================================================================================================================================

perbupatiwalikota::create([
    'judul' => 'PERATURAN_BUPATI_NOMOR_71_TAHUN_2023',
    'peraturan' => 'peraturan/10_bupatiwalikota/PERATURAN_BUPATI_NOMOR_71_TAHUN_2023.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

perbupatiwalikota::create([
    'judul' => 'PERATURAN_BUPATI_NOMOR_72_TAHUN_2023_LANJUTAN',
    'peraturan' => 'peraturan/10_bupatiwalikota/PERATURAN_BUPATI_NOMOR_72_TAHUN_2023_LANJUTAN.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// ===========================================================================================================================================================

suratkeputusan::create([
    'judul' => 'PERATURAN MENTERI PEKERJAAN UMUM DAN PERUMAHAN RAKYAT REPUBLIK INDONESIA NOMOR 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/01.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'PERATURAN MENTERI PEKERJAAN UMUM DAN PERUMAHAN RAKYAT REPUBLIK INDONESIA NOMOR 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI DALAM RANGKA MENDUKUNG KEMUDAHAN PERIZINAN BERUSAHA BAGI PELAKU USAHA JASA KONSTRUKSI - RELAKSASI',
    'peraturan' => 'peraturan/11_keputusan/02.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'PERMEN PUPR NO. 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI DALAM RANGKA MENDUKUNG KEMUDAHAN PERIZINAN BERUSAHA BAGI PELAKU USAHA JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/03.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


suratkeputusan::create([
    'judul' => 'SURAT EDARAN LPJK NOMOR : 07/SE/LPJK/2022 TENTANG PEDOMAN PEMBERIAN REKOMENDASI LISENSI LSP, PENCATATAN LSP TERLISENSI, SERTA DAFTAR PENYESUAIAN STANDAR KOMPETENSI DAN JABKER KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/04.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN DIRJEN BIKON NO. 12.1/KPTS/Dk/2022 - TENTANG PENETAPAN JABATAN KERJA DAN KONVERSI JABATAN KERJA EKSISTING SERTA JENJANG KUALIFIKASI BIDANG JASA KONSTRUKSI - TAHUN 2022',
    'peraturan' => 'peraturan/11_keputusan/05.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN DIREKTUR JENDERAL BINA KONSTRUKSI, KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT NOMOR 144/KPTS/DK/2022 TENTANG PENETAPAN STANDAR SKEMA SERTIFIKASI BADAN USAHA JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/06.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'SE MENTERI PUPR NO. 05 TAHUN 2022 PERUBAHAN ATAS SE NO. 03/SE/M/2022 TENTANG PEDOMAN PERPANJANGAN MASA BERLAKU SKK JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/07.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'SE MENTERI PUPR NO. 02 TAHUN 2021 TENTANG PERUBAHAN SE MENTERI PUPR NO. 30 TAHUN 2020',
    'peraturan' => 'peraturan/11_keputusan/08.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN NO. 89 DIREKTUR JENDERAL DJBK PUPR TAHUN 2021',
    'peraturan' => 'peraturan/11_keputusan/09.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

// ============================== ============================== ============================== ==============================

berita::create([
    'judul' => 'Tansformasi Digital Sistem Informasi Pembina Jasa Konstruksi Pemerintah Kabupaten Bandung Barat',
    'user_id' => 1,
    'gambar' => 'berita/databerita/petakbb.jpg',
    'keteranganberita' => '
    <p>Pemerintah Kabupaten Bandung Barat telah meluncurkan inisiatif transformasi digital dalam sistem informasi pembina jasa konstruksi sebagai langkah penting untuk meningkatkan efisiensi dan transparansi dalam sektor konstruksi. Program ini bertujuan untuk memodernisasi cara pemerintah mengelola dan mengawasi proyek-proyek konstruksi di daerahnya, dengan memanfaatkan teknologi informasi terkini untuk mempermudah akses, pelaporan, dan monitoring. Transformasi ini diharapkan dapat membawa perubahan positif dalam cara proyek konstruksi dikelola dan dievaluasi, serta meningkatkan kualitas layanan kepada masyarakat.</p>

<p>Sistem informasi baru ini dirancang untuk menyediakan platform terintegrasi yang memungkinkan pemantauan real-time atas proyek konstruksi, pengelolaan data secara efisien, dan komunikasi yang lebih baik antara pihak terkait. Melalui sistem ini, setiap tahap proyek konstruksi, mulai dari perencanaan hingga pelaksanaan, dapat dipantau secara langsung oleh pihak berwenang. Hal ini bertujuan untuk memastikan bahwa semua proyek memenuhi standar kualitas dan regulasi yang ditetapkan, serta meminimalkan potensi penyelewengan atau kesalahan yang mungkin terjadi.</p>

<p>Transformasi digital ini juga mencakup peningkatan aksesibilitas bagi para kontraktor dan penyedia jasa konstruksi. Dengan sistem informasi yang terintegrasi, para pemangku kepentingan dapat mengakses informasi penting, seperti persyaratan perizinan dan prosedur pengajuan, secara online. Ini akan mempercepat proses administrasi dan mengurangi birokrasi, sehingga memberikan kemudahan bagi para pelaku industri untuk berpartisipasi dalam proyek-proyek pemerintah. Selain itu, transparansi yang lebih tinggi diharapkan dapat meningkatkan kepercayaan masyarakat terhadap proses pengadaan dan pelaksanaan proyek konstruksi.</p>

<p>Peluncuran sistem informasi pembina jasa konstruksi ini merupakan bagian dari komitmen Pemerintah Kabupaten Bandung Barat untuk mendorong inovasi dan efisiensi dalam pelayanan publik. Dengan adanya transformasi digital ini, diharapkan sektor konstruksi di daerah ini dapat berkembang lebih pesat dan berkelanjutan. Ke depan, pemerintah akan terus memantau dan mengevaluasi efektivitas sistem ini, serta melakukan perbaikan yang diperlukan untuk memastikan bahwa manfaat dari transformasi digital dapat dirasakan secara optimal oleh semua pihak terkait.</p>
',

'tanggal' => '2024-10-10',

    // 'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Selamat Datang di Sistem Informasi Jasa Konstruksi Pemerintah Kabupaten Bandung Barat',
    'user_id' => 1,
    'gambar' => 'berita/databerita/berita1.jpg',
    'keteranganberita' => '
<p>Bandung Barat, 11 Agustus 2024 – Pemerintah Kabupaten Bandung Barat dengan bangga memperkenalkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK), sebuah inovasi digital terbaru yang dirancang untuk memperbaiki dan memodernisasi pengelolaan proyek konstruksi di daerah ini. Dengan peluncuran sistem ini, pemerintah bertujuan untuk meningkatkan transparansi, efisiensi, dan akuntabilitas dalam administrasi konstruksi, serta memberikan kemudahan akses informasi kepada masyarakat.</p>

<p>SIPJK menawarkan berbagai fitur unggulan seperti pendaftaran online, pelaporan kemajuan proyek secara real-time, dan akses mudah ke data proyek. Sistem ini diharapkan dapat mengurangi birokrasi, mempercepat proses administrasi, dan meminimalkan potensi terjadinya praktik korupsi. Selain itu, SIPJK juga bertujuan untuk meningkatkan keterlibatan publik dengan menyediakan informasi yang transparan dan mudah diakses tentang status dan perkembangan proyek konstruksi.</p>

<p>Bupati Bandung Barat, menyampaikan antusiasmenya atas peluncuran SIPJK dan mengungkapkan harapannya bahwa sistem ini akan membawa perubahan positif dalam pengelolaan konstruksi di wilayahnya. Ia percaya bahwa SIPJK akan menjadi alat yang efektif dalam mendukung pembangunan berkelanjutan dan menjadi contoh bagi daerah lain dalam penerapan teknologi informasi untuk sektor publik.</p>

',

'tanggal' => '2024-11-05',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// ======================================================
// BERITA CISOMANG BARAT
// ======================================================

berita::create([
    'judul' => 'Kabupaten Bandung Barat Gelar Pelatihan Jasa Konstruksi di Kecamatan Cisomang Barat',
    'user_id' => 1,
    'gambar' => 'berita/databerita/cisomangbarat.jpg',
    'keteranganberita' => '
<p>
Cisomang Barat 2 Desember 2024 - Kabupaten Bandung Barat telah sukses melaksanakan Pelatihan Jasa Konstruksi di Kecamatan Cisomang Barat. Kegiatan ini bertujuan untuk meningkatkan kompetensi tenaga kerja di sektor konstruksi, sejalan dengan kebutuhan akan tenaga terampil yang semakin meningkat. Pelatihan kali ini diikuti oleh sebanyak 30 peserta yang berasal dari berbagai latar belakang, termasuk pekerja konstruksi, tukang, dan pemuda yang tertarik untuk terjun ke industri ini.
</p>

<p>
Pelatihan yang berlangsung selama beberapa hari ini mencakup berbagai materi, mulai dari teknik konstruksi dasar hingga penerapan standar keselamatan kerja. Para peserta mendapatkan bimbingan langsung dari instruktur berpengalaman serta praktek lapangan untuk mengasah keterampilan mereka. Diharapkan, setelah mengikuti pelatihan ini, peserta mampu menerapkan ilmu yang didapat untuk meningkatkan kualitas pekerjaan konstruksi di wilayah mereka masing-masing.
</p>

<p>
Pemerintah Kabupaten Bandung Barat terus mendorong inisiatif serupa guna memperkuat sektor jasa konstruksi dan menciptakan tenaga kerja yang lebih profesional. Dengan adanya pelatihan ini, diharapkan pertumbuhan sektor konstruksi di daerah dapat lebih maju dan berdaya saing, serta mampu mendukung pembangunan infrastruktur yang berkualitas dan berkelanjutan.
</p>

<p>
Masyarakat Kecamatan Cisomang Barat menyambut baik kegiatan ini dan berharap pelatihan serupa dapat diadakan secara berkala. Beberapa peserta mengungkapkan rasa terima kasih mereka karena mendapatkan kesempatan untuk meningkatkan keterampilan secara gratis. Pemerintah daerah pun berkomitmen untuk terus mengadakan program pelatihan guna mendukung peningkatan kualitas sumber daya manusia di berbagai sektor.
</p>

',

'tanggal' => '2024-12-08',

    // 'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


// ======================================================
// BERITA CISOMANG BARAT
// ======================================================


berita::create([
    'judul' => 'Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Bandung Barat Luncurkan Sistem Informasi Pembina Jasa Konstruksi untuk Meningkatkan Transparansi dan Efisiensi',
    'user_id' => 1,
    'gambar' => 'berita/databerita/beritabaru2.png',
    'keteranganberita' => '<p>Bandung Barat, 11 Agustus 2024 – Pemerintah Kabupaten Bandung Barat baru-baru ini meluncurkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK) sebagai upaya untuk meningkatkan transparansi dan efisiensi dalam pengelolaan proyek konstruksi di wilayahnya. Sistem ini dirancang untuk mempermudah proses pendaftaran, pengawasan, dan evaluasi terhadap penyedia jasa konstruksi, sekaligus mempercepat akses informasi bagi masyarakat dan pemangku kepentingan.</p>

<p>Dengan adanya SIPJK, diharapkan proses administrasi terkait jasa konstruksi menjadi lebih terintegrasi dan mudah diakses. Sistem ini menawarkan fitur-fitur seperti pendaftaran online, pelaporan secara real-time, dan akses langsung ke data proyek yang sedang berlangsung. Hal ini diharapkan dapat mengurangi birokrasi, meminimalisir praktik korupsi, dan memastikan bahwa setiap proyek konstruksi sesuai dengan standar dan regulasi yang berlaku.</p>

<p>Peluncuran SIPJK ini merupakan bagian dari komitmen pemerintah daerah dalam mendukung pembangunan yang transparan dan berkelanjutan. Bupati Bandung Barat, [Nama Bupati], mengungkapkan harapannya agar sistem ini dapat memperbaiki kinerja sektor konstruksi dan memberikan manfaat jangka panjang bagi masyarakat. Inovasi ini juga diharapkan menjadi contoh bagi daerah lain dalam menerapkan teknologi informasi untuk pengelolaan sektor publik.</p>',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Bimbingan Teknis : Pelatihan dan Bimbingan Teknis Tenaga Tukang Terampil oleh Gatensi Provinsi Jawa Barat',
    'user_id' => 1,
    'gambar' => 'berita/databerita/berita3.jpeg',
    'keteranganberita' => '<p>Bandung Barat, 14 Agustus 2024 – Pemerintah Kabupaten Bandung Barat secara resmi menyelenggarakan acara Bimbingan Teknis dengan tema "Pelatihan dan Bimbingan Teknis Tenaga Tukang Terampil oleh Gatensi Provinsi Jawa Barat" sebagai langkah penting dalam meningkatkan kompetensi tenaga kerja di sektor konstruksi. Acara ini bertujuan untuk memperkuat keterampilan dan pengetahuan tenaga tukang terampil, guna memastikan kualitas kerja yang lebih baik dan kepatuhan terhadap standar industri yang berlaku.</p>

<p>Bimbingan teknis ini menghadirkan berbagai materi penting, termasuk teknik terbaru dalam pelaksanaan proyek konstruksi, penggunaan alat dan bahan bangunan yang efisien, serta prosedur keselamatan kerja yang sesuai dengan regulasi. Melalui pelatihan ini, diharapkan tenaga tukang akan mendapatkan keterampilan praktis yang dibutuhkan untuk menangani berbagai tantangan di lapangan dan meningkatkan kualitas pekerjaan konstruksi.</p>

<p>Gatensi Provinsi Jawa Barat menyambut positif pelaksanaan bimbingan teknis ini dan menyatakan komitmennya untuk terus mendukung pengembangan profesional di sektor konstruksi. Acara ini diharapkan dapat menjadi model bagi inisiatif pelatihan lainnya dan memberikan dampak positif yang signifikan dalam kualitas dan efisiensi proyek konstruksi di Kabupaten Bandung Barat.</p>

<p>Dengan pelaksanaan bimbingan teknis ini, diharapkan seluruh tenaga tukang dapat meningkatkan keterampilan mereka dan berkontribusi secara lebih efektif terhadap proyek-proyek konstruksi yang ada. Pemerintah daerah juga berkomitmen untuk terus mendukung pengembangan dan peningkatan kapasitas tenaga kerja demi pembangunan yang lebih baik dan berkelanjutan.</p>

',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);



// ============================================================================================
// BERITA CISOMANG BARAT
// ============================================================================================

berita::create([
    'judul' => 'Pemerintah Kabupaten Bandung Barat Laksanakan Sertifikasi Jasa Konstruksi di Kecamatan Cisomang Barat',
    'user_id' => 1,
    'gambar' => 'berita/databerita/pelatihancisomangbarat.jpg',
    'keteranganberita' => '
    <p>
    Bandung Barat, 2 Desember 2024 – Dalam upaya meningkatkan kompetensi dan legalitas tenaga kerja di sektor konstruksi, Pemerintah Kabupaten Bandung Barat baru-baru ini melaksanakan program Sertifikasi Jasa Konstruksi di Kecamatan Cisomang Barat. Inisiatif ini bertujuan untuk meningkatkan efisiensi, transparansi, dan akuntabilitas dalam sektor jasa konstruksi, sekaligus memastikan bahwa para pekerja memiliki keterampilan yang sesuai dengan standar industri. Sertifikasi ini diharapkan dapat membawa perubahan signifikan dalam kualitas tenaga kerja dan pelaksanaan proyek konstruksi di wilayah tersebut.
    </p>

<p>
Pemerintah Kabupaten Bandung Barat telah melaksanakan program Sertifikasi Jasa Konstruksi di Kecamatan Cisomang Barat, yang diikuti oleh 30 peserta dari berbagai latar belakang, termasuk pekerja konstruksi dan masyarakat yang ingin mendapatkan pengakuan resmi atas keterampilannya. Acara ini turut dihadiri oleh perwakilan dari Pemerintah Provinsi Jawa Barat, Kepala Desa setempat, Kapolsek Cikalong Wetan, serta perangkat desa, yang menunjukkan dukungan penuh terhadap peningkatan kualitas tenaga kerja di sektor konstruksi. Para peserta mendapatkan pembekalan dari instruktur berpengalaman mengenai standar kerja, keselamatan, serta regulasi yang berlaku dalam industri konstruksi.
</p>

<p>
Pemerintah Kabupaten Bandung Barat menegaskan komitmennya untuk terus mengadakan program sertifikasi guna meningkatkan daya saing tenaga kerja lokal dan memastikan pembangunan infrastruktur yang berkualitas serta berkelanjutan. Dengan adanya sertifikasi resmi, para pekerja diharapkan memiliki peluang lebih besar dalam mendapatkan proyek konstruksi, baik di tingkat daerah maupun nasional. Masyarakat Cisomang Barat menyambut baik kegiatan ini dan berharap sertifikasi jasa konstruksi dapat dilakukan secara rutin di masa mendatang agar lebih banyak tenaga kerja yang mendapat manfaat.

</p>',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// ============================================================================================
// BERITA CISOMANG BARAT
// ============================================================================================


berita::create([
    'judul' => 'Pemerintah Kabupaten Bandung Barat Berkolaborasi dengan PT. Cisangkan dalam bimbingan teknis untuk para tukang terampil ',
    'user_id' => 1,
    'gambar' => 'berita/databerita/29.jpeg',
    'keteranganberita' => '<p>Bandung Barat, 14 Agustus 2024 – Pemerintah Kabupaten Bandung Barat bekerja sama dengan PT. Cisangkan dalam menyelenggarakan bimbingan teknis untuk para tukang terampil di Desa Batulayang, Kecamatan Cililin.</p>

<p>Pemerintah Kabupaten Bandung Barat dengan bangga memperkenalkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK), sebuah terobosan digital yang bertujuan untuk mendukung pembangunan berkelanjutan di wilayah tersebut. Sistem ini dirancang untuk meningkatkan transparansi, efisiensi, dan akuntabilitas dalam pengelolaan proyek konstruksi, serta memastikan bahwa semua kegiatan pembangunan mengikuti standar yang telah ditetapkan.</p>

<p>SIPJK menawarkan berbagai fitur inovatif, termasuk pendaftaran online untuk penyedia jasa konstruksi, pemantauan proyek secara real-time, dan pelaporan kemajuan yang mudah diakses. Dengan adanya sistem ini, diharapkan akan terjadi penurunan birokrasi dan praktik korupsi yang seringkali menghambat proses konstruksi. Sistem ini juga bertujuan untuk memberikan kemudahan akses informasi kepada masyarakat, sehingga meningkatkan keterlibatan publik dalam proses pembangunan.</p>

<p>Bupati Bandung Barat menegaskan bahwa peluncuran SIPJK adalah langkah strategis dalam upaya mendukung pembangunan yang lebih berkelanjutan dan terencana. Ia berharap sistem ini dapat menjadi contoh bagi daerah lain dalam penerapan teknologi untuk pengelolaan sektor publik dan memajukan kualitas serta transparansi dalam proyek-proyek konstruksi.',

'tanggal' => '2024-08-14',

    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


berita::create([
    'judul' => 'Transformasi Digital di Kabupaten Bandung Barat: Sistem Informasi Pembina Jasa Konstruksi Hadir untuk Memperbaiki Pengelolaan Konstruksi',
    'user_id' => 1,
    'gambar' => 'berita/databerita/23.jpg',
    'keteranganberita' => '<p>Bandung Barat, 11 Agustus 2024 – Dalam upaya untuk mendigitalkan dan menyempurnakan pengelolaan konstruksi, Pemerintah Kabupaten Bandung Barat baru-baru ini meluncurkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK). Inisiatif ini bertujuan untuk memperbaiki efisiensi, transparansi, dan akuntabilitas dalam administrasi proyek konstruksi di wilayahnya. SIPJK diharapkan akan membawa perubahan signifikan dalam cara proyek konstruksi dikelola dan diawasi.</p>

<p>Sistem ini dilengkapi dengan berbagai fitur canggih yang memungkinkan pendaftaran dan pemantauan proyek secara online, serta pelaporan kemajuan yang dapat diakses secara real-time. Dengan penerapan SIPJK, diharapkan proses administrasi yang selama ini rumit dan memakan waktu dapat dipercepat, serta mengurangi potensi terjadinya penyimpangan atau praktik korupsi. Selain itu, sistem ini memberikan kemudahan bagi masyarakat untuk mendapatkan informasi yang transparan mengenai status proyek-proyek konstruksi.</p>

<p>Bupati Bandung Barat, menyatakan bahwa peluncuran SIPJK adalah langkah penting dalam transformasi digital pemerintah daerah. Ia berharap sistem ini tidak hanya akan meningkatkan kualitas pengelolaan konstruksi tetapi juga dapat menjadi acuan bagi daerah lain dalam menerapkan teknologi untuk sektor publik. Peluncuran ini merupakan bagian dari komitmen pemerintah daerah untuk mendukung pembangunan yang lebih terintegrasi dan berkelanjutan.</p>',

'tanggal' => '2024-08-11',

    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


berita::create([
    'judul' => 'Kunjungan Provinsi Jawa Barat : Implementasi Sipjaki di Kabupaten Bandung Barat',
    'user_id' => 1,
    'gambar' => 'berita/databerita/berita8.jpeg',
    'keteranganberita' => '
<p>Kunjungan dari Pemerintah Provinsi Jawa Barat baru-baru ini fokus pada implementasi Sistem Informasi Pengelolaan Jasa Konstruksi (Sipjaki) yang bertujuan untuk merevolusi sektor konstruksi di wilayah tersebut. Dalam kunjungan ini, para pejabat dan teknisi dari provinsi melakukan evaluasi mendalam mengenai penerapan Sipjaki di lapangan serta dampaknya terhadap efisiensi dan transparansi dalam pengelolaan proyek konstruksi. Sipjaki diharapkan menjadi solusi teknologi yang dapat menyederhanakan proses administrasi dan meningkatkan akuntabilitas dalam sektor konstruksi.</p>

<p>Implementasi Sipjaki menawarkan platform digital yang komprehensif untuk mengelola berbagai aspek dari proyek konstruksi, mulai dari perizinan, pengawasan, hingga pelaporan. Dengan fitur-fitur yang memungkinkan pemantauan secara real-time, sistem ini bertujuan untuk mengurangi birokrasi dan mempercepat proses administrasi. Selama kunjungan, para pejabat mengevaluasi bagaimana sistem ini telah diterapkan di berbagai proyek dan bagaimana sistem ini dapat diintegrasikan lebih lanjut untuk memaksimalkan manfaatnya bagi industri konstruksi.</p>

<p>Kunjungan ini juga mencakup sesi diskusi dengan para pelaku industri konstruksi lokal untuk mendapatkan umpan balik mengenai penggunaan Sipjaki. Para kontraktor, pengembang, dan penyedia jasa konstruksi berbagi pengalaman mereka dalam menggunakan sistem, mengidentifikasi tantangan yang dihadapi, dan memberikan rekomendasi untuk perbaikan. Hal ini penting untuk memastikan bahwa sistem yang diterapkan benar-benar sesuai dengan kebutuhan dan tantangan yang ada di lapangan, serta dapat memberikan manfaat yang maksimal bagi semua pihak terkait.</p>

<p>Sebagai bagian dari upaya berkelanjutan untuk meningkatkan kualitas dan efisiensi di sektor konstruksi, Pemerintah Provinsi Jawa Barat berkomitmen untuk mendukung pengembangan dan penerapan teknologi seperti Sipjaki. Kunjungan ini tidak hanya bertujuan untuk mengevaluasi kemajuan implementasi tetapi juga untuk merencanakan langkah-langkah selanjutnya dalam pengembangan sistem. Dengan dukungan dan evaluasi yang terus-menerus, diharapkan bahwa Sipjaki akan semakin meningkatkan kinerja dan transparansi sektor konstruksi di Jawa Barat.</p>
',

'tanggal' => '2024-09-15',

    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


berita::create([
    'judul' => 'Pelatihan Jasa Konstruksi di Kecamatan Cipatat: Tingkatkan Kompetensi Para Pekerja',
    'user_id' => 1,
    'gambar' => 'dokumentasipelatihan/cipatat/cipatat1.jpeg',
    'keteranganberita' => '
<p>Kecamatan Cipatat mengadakan kegiatan pelatihan jasa konstruksi bagi para tenaga kerja dan aparatur pemerintahan sebagai bentuk peningkatan kapasitas sumber daya manusia di bidang konstruksi. Kegiatan ini diinisiasi oleh Pemerintah Kabupaten Bandung Barat melalui Dinas PUPR dan mendapat dukungan penuh dari pemerintah kecamatan setempat.</p>

<p>Pelatihan tersebut mencakup materi tentang pemahaman peraturan jasa konstruksi, penggunaan aplikasi <strong>Sistem Informasi Pembina Jasa Konstruksi (Sipjaki)</strong>, serta tata cara pelaporan kegiatan konstruksi yang baik dan sesuai standar. Peserta juga mendapatkan pembekalan mengenai pentingnya sertifikasi kompetensi kerja (SKK) dalam meningkatkan daya saing tenaga kerja lokal di bidang konstruksi.</p>

<p>Camat Cipatat dalam sambutannya menyampaikan bahwa pelatihan ini diharapkan dapat membuka wawasan dan meningkatkan kemampuan teknis para peserta, terutama dalam hal pengelolaan data jasa konstruksi berbasis digital. Pemerintah daerah berkomitmen untuk terus mengadakan kegiatan serupa agar kualitas sumber daya manusia di sektor konstruksi semakin meningkat dan siap bersaing secara profesional.</p>
',

'tanggal' => '2025-09-21',

    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Kolaborasi Kecamatan Cipatat dan Dinas PUPR : Penguatan Pelatihan Para Pekerja Melalui Pelatihan Jasa Konstruksi',
    'user_id' => 1,
    'gambar' => 'dokumentasipelatihan/cipatat/cipatat2.jpeg',
    'keteranganberita' => '
<p>Pemerintah Kecamatan Cipatat menjalin kerja sama erat dengan Dinas PUPR Kabupaten Bandung Barat dalam memperkuat pengelolaan data konstruksi berbasis digital melalui pelatihan jasa konstruksi. Kolaborasi ini merupakan bagian dari upaya implementasi <strong>Sipjaki</strong> yang diharapkan mampu meningkatkan efisiensi, transparansi, dan akurasi data sektor konstruksi di wilayah Cipatat.</p>

<p>Melalui kegiatan ini, aparatur kecamatan, perangkat desa, dan perwakilan pelaku jasa konstruksi dilatih untuk memahami cara penginputan, validasi, dan sinkronisasi data konstruksi agar selaras dengan sistem yang digunakan oleh kabupaten. Dinas PUPR memberikan pendampingan teknis langsung untuk memastikan seluruh peserta mampu menerapkan sistem dengan benar di lapangan.</p>

<p>Kegiatan kolaboratif ini menjadi langkah strategis dalam membangun tata kelola sektor konstruksi yang lebih baik di tingkat kecamatan. Dengan penguatan data yang terintegrasi, Pemerintah Kecamatan Cipatat berharap seluruh proyek konstruksi dapat terpantau secara menyeluruh, akurat, dan akuntabel melalui platform Sipjaki.</p>
',

'tanggal' => '2025-10-14',

    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Kunjungan Komisi V DPR RI: Pengawasan Jasa Konstruksi di Daerah Kabupaten Bandung Barat',
    'user_id' => 1,
    'gambar' => 'dokumentasipelatihan/cipatat/11.jpg',
    'keteranganberita' => '
<p>Komisi V DPR RI melakukan kunjungan kerja ke Kabupaten Bandung Barat dalam rangka pengawasan pelaksanaan proyek jasa konstruksi di wilayah tersebut. Kegiatan ini bertujuan memastikan seluruh proyek berjalan sesuai dengan standar teknis dan anggaran yang telah ditetapkan.</p>

<p>Dalam kunjungan ini, anggota Komisi V DPR RI meninjau sejumlah proyek infrastruktur, termasuk jalan, jembatan, dan fasilitas publik lainnya. Mereka berdiskusi langsung dengan Dinas PUPR Kabupaten Bandung Barat, kontraktor, serta pengawas lapangan untuk memastikan kualitas pekerjaan dan kepatuhan terhadap peraturan yang berlaku.</p>

<p>Kunjungan ini menjadi bagian dari upaya DPR RI untuk meningkatkan transparansi, efisiensi, dan akuntabilitas dalam sektor jasa konstruksi di daerah, sekaligus memberikan masukan strategis bagi pemerintah daerah dalam memperbaiki pelaksanaan proyek yang sedang berjalan maupun yang akan datang.</p>
',

'tanggal' => '2025-02-16',

    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


berita::create([
    'judul' => 'Pengawasan Pembangunan Gedung Damkar Dinas Pemadam Kebakaran',
    'user_id' => 1,
    'gambar' => 'dokumentasipelatihan/cipatat/17.jpg',
    'keteranganberita' => '
<p>Dinas PUPR Kabupaten Bandung Barat melakukan pengawasan pembangunan Gedung Damkar Dinas Pemadam Kebakaran untuk memastikan proyek berjalan sesuai dengan standar teknis dan anggaran yang ditetapkan. Kegiatan ini bertujuan meningkatkan kualitas infrastruktur publik dan keselamatan masyarakat.</p>

<p>Tim pengawas meninjau langsung progres pembangunan gedung, memeriksa kualitas material, serta memastikan pelaksanaan konstruksi sesuai dengan desain dan spesifikasi teknis. Selain itu, koordinasi dilakukan dengan kontraktor pelaksana dan pihak terkait agar pekerjaan berjalan lancar dan tepat waktu.</p>

<p>Pengawasan ini menjadi langkah penting dalam menjaga akuntabilitas dan transparansi proyek pembangunan gedung Damkar, sekaligus memastikan fasilitas tersebut dapat segera digunakan untuk mendukung operasional pemadam kebakaran di Kabupaten Bandung Barat.</p>
',

'tanggal' => '2025-03-14',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Pembaharuan Aplikasi SIPJAKI internal DPUTR Kabupaten Bandung Barat',
    'user_id' => 1,
    'gambar' => 'berita/databerita/beritabaru1.png',
    'keteranganberita' => '
        <p>Bandung Barat, 27 Desember 2025 – Dinas Pekerjaan Umum dan Tata Ruang (DPUTR) Kabupaten Bandung Barat resmi melakukan pembaharuan pada aplikasi Sistem Informasi Pembina Jasa Konstruksi (SIPJAKI) internal. Pembaharuan ini dilakukan untuk meningkatkan efisiensi kerja, mempercepat proses pengelolaan data, serta menunjang kebutuhan administrasi dan teknis di lingkungan DPUTR.</p>

        <p>Pembaruan sistem meliputi peningkatan performa aplikasi, penyempurnaan antarmuka pengguna, serta penambahan fitur-fitur baru yang mendukung monitoring dan pelaporan kegiatan pembinaan jasa konstruksi. Dengan adanya pembaruan ini, diharapkan seluruh staf internal dapat bekerja lebih cepat, terstruktur, dan akurat dalam mengolah data.</p>

        <p>DPUTR Kabupaten Bandung Barat berkomitmen untuk terus meningkatkan kualitas layanan digital sebagai bagian dari transformasi teknologi di lingkungan pemerintah daerah. Pembaharuan SIPJAKI ini menjadi langkah konkrit menuju sistem administrasi yang lebih efektif, transparan, dan modern.</p>
    ',
    'tanggal' => '2025-11-27',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// =================================== ===================================== ===========================
layanankami::create([
    'gambar' => '/assets/library/layanankami/1.png',
    'program' => 'Sertifikat Laik Fungsi',
    'keterangan' => 'Sertifikat Laik Fungsi Untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/2.png',
    'program' => 'Persetujuan Bangunan Gedung',
    'keterangan' => 'Persetujuan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/3.png',
    'program' => 'Inspeksi Lapangan',
    'keterangan' => 'Inspeksi Lapangan Untuk Konstruksi Di Lapangan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


layanankami::create([
    'gambar' => '/assets/library/layanankami/4.png',
    'program' => 'Pemeliharaan Perbaikan',
    'keterangan' => 'Pemeliharaan Perbaikan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/5.png',
    'program' => 'Penyediaan Material',
    'keterangan' => 'Penyediaan Material untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/6.png',
    'program' => 'Insfrastruktur Perkotaan',
    'keterangan' => 'Insfrastruktur Perkotaan untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/7.png',
    'program' => 'Insfrastruktur Jalan',
    'keterangan' => 'Insfrastruktur Jalan untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/8.png',
    'program' => 'Insfrastruktur Industri',
    'keterangan' => 'Insfrastruktur Industri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/9.png',
    'program' => 'Teknik Konstruksi ',
    'keterangan' => 'Teknik Konstruksi untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/10.png',
    'program' => 'Teknik Struktur ',
    'keterangan' => 'Teknik Struktur untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/11.png',
    'program' => 'Teknik Rekayasa & Air Limbah ',
    'keterangan' => 'Teknik Rekayasa & Air Limbah untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// =============================== =============================== =============================== ===============================
uijk::create([
    'nama_perusahaan' => 'PT. Mega Sukma',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG003(M1),   BG009(M1),   SI001(M1),   SI003(M2),   SI004(M2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Bina Kreasi Nusantara',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Arsitektur, Perencanaan Rekayasa',
    'sub_klasifikasi_bidang_usaha' => 'AR102(K1), AR104(K1), RE102(K1), RE103(K1), RE104(K2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Rifana Jaya Perdana',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG009(M1), SI001(M1), SI002(M1), SI003(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Multicipta Rancana Selaras',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Rekayasa,Perencanaan Penataan Ruang, Konsultasi Spesialis',
    'sub_klasifikasi_bidang_usaha' => 'RE103 (B), RE104 (B), PR101 (B), PR102 (B), SP303 (B), SP304 (B)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Mutiara Jaya',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(K1), BG007(K1), SI001(K3), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Berkah Karunia Abadi',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI003(K1), SI008(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Yasuba Dwi Perkasa',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung, Bangunan Sipil, Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'BG004(M1),BG007(M1),BG008(M2),BG009(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Setia Mandiri CO',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), SI001(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Beton Elemen Persada',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG002(M1), BG003(M1), BG006(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Putri Kembar Sejahtera',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Rapi Indah',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M2),BG002(M2),BG003(M2),BG004(M1),BG006(M1),BG007(M1),BG008(M1),BG009(M2),',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Bandung Rainer Syailendra',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(K1),BG002(K1), BG004(K1), BG006(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Rumah Mulia Indonesia',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG002(M1), BG007(M1), SI012(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Wijaya Kusumah',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1),BG008(K1),BG009(K1), SI001(K1),SI002(K2),SI003(K2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Aditya Putra Karya Utama',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(M1),BG008(M1),BG009(M1),SI001(M1),SI003(M2),SI004(M1),SI012(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Graha Teknik',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1),BG007(K2),BG008(K1),BG009(K3),SI001(K1),SI003(K3)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Trisula',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1),BG007(K1),SI001(K1),SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Bina Arya Sejahtera',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI003(K1), SI004(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Hanjuang',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Gumas Jaya',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1),BG009(K1),SI001(K1),SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. RH Niaga Buana',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), EL010(K1), EL011(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Bina Sarana Putra',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Jasa Konstruksi Terintegrasi, Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'TI503(B1),TI504(B1), EL001(M1),EL009(M1),EL010(M1),MK007(M1),MK009(B1),MK010(B1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Mobar Sarana Energi',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'MK007(M1), MK010(M1), EL001(M1), EL009(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Abbas Kusuma',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), SI001(K1), SI003(K1), SI008(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Tri Hazna Pertiwi',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007 (K1) ; BG009 (K2) ; SI001 (K1) ; SI002 (K1) ; SI003 (K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => '',
    'kategori_perusahaan' => '',
    'klasifikasi_bidang_usaha' => '',
    'sub_klasifikasi_bidang_usaha' => '',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


uijk::create([
    'nama_perusahaan' => 'PT. Martadinar Gemilang Sejahtera',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), EL008(K1), EL010(K1), EL011(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Mega Braja Waskita',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), SI001(K1), SI003(K1), SI004(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Hiber',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1), BG008(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Subur Abadi Putra',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG002(M1), SI002(M1), SI003(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Dwi Puteri',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1), BG007(K1), BG008(K2), SI001(K2), SI003(K2), SI008(K2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Permata',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Kayu Manis',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(K1), BG007(K1), SI001(K3), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Citra Indah',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Pelaksana Spesialis',
    'sub_klasifikasi_bidang_usaha' => 'SP004(K1),SP008(K1),SP011(K1)SP015(K3),SP016(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Cendrawasih Milik Kita',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Merdeka Sakti',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1), BG007(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. YDP Usaha Perdana',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => ' Perencanaan Arsitektur, Pengawasan Rekayasa',
    'sub_klasifikasi_bidang_usaha' => '(AR101) (M1), (AR102) (M1), (RE201) (K1), (RE202) (K1), (RE203) (K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Sinergi Karsa Utama',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(M1), SI001(M1), SI003(M1),SI004(M1).',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Tiga Arga Kencana',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Sipil dan Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'SI003(M1), SI004(M1), BG002(M1), BG003(M1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Gatra Kencana',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Sipil dan Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'SI001(K1), SI003(K1), BG007(K1), BG009(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Agung Bandung',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Sipil dan Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), BG009(K3), SI001(K1), SI003(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Wahana Wahid Perkasa',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI003(K1), SI004(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Aria Putra Perkasa',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG008(K1), BG009(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Ruang Hijau',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Penataan Ruang',
    'sub_klasifikasi_bidang_usaha' => 'PR103(M1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT.BINA SARANA PUTRA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(MK007)(M1),(MK009)(B1),MK010)(B1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. RAHAJENG',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL006)(K1),(EL007)(K1),(EL010)(K1),(EL011)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. GENERAL MULTI UTAMA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan gedung dan Instalasi Mekanikal dan elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(BG002)(M1),(BG006)(M1),(EL010)(M1),(MK002)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. SYAM KARYA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(SI001)(K1),(SI003)(K1),',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. DHERA GITA INDONESIA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL006)(M1),(EL007)(M1),(EL010)(M1), (EL010)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. PUTRA BUNGSU',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil ',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(SI001)(K1),(SI003)(K1),(SI008)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. DAYA UNGGUL PERKASA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL002)(K1),(EL006)(K1),(EL007)(K1),(EL010)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. GUNA BANGUN UTAMA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(M1),(BG007)(M1),(BG007)(M1),(BG009)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. NAGA MAS JAYA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(K1),(BG007)(K1),(BG009)(K2),(SI001)(K1),(SI002)(K1),(SI003)(K2)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. REKA BAHANATAMA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG008)(K1),(BG009)(K1),(SI001)(K1),(SI003)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. MITRA JAYATAMA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(BG008)(K1),(BG009)(K1),(SI001)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. ECOPLAN REKABUMI INTERCONSULT',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Rekayasa,Perencanaan Penataan Ruang,Konsultasi Lainnya, Pengawasan Penataan Ruang',
    'sub_klasifikasi_bidang_usaha' => '(RE103)(B),(RE104)(B),(PR101)(B),(PR102)(B),(PR103)(B),(PR104)(B),(KL401)(B),(PR201)(B)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. BOJONG SARI',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => ' Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(SI001)(K1),(SI003) (K2),(SI004) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV.Kartika Jaya',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(K1),(SI001)(K1),(SI003) (K1),(SI004) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. RIKATNA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG006)(K1),(BG009)(K1),(SI003) (K1),(SI004) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. FATIH BERKAH ELECTRIK',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL003)(K1),(EL006)(K1),(EL007)(K1),(EL010)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. SEKAR WANGI',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG001) (K1),(BG004) (K1),(BG007) (K1),(SI001) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. GUNA BANGUN UTAMA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(M1),(BG007)(M1),(BG007)(M1),(BG009)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. REKA JAYA KARYA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG008) (M1),(BG009) (M1),(SI001) (M1),(SI003) (M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. PELITA PERSADA REKAYASA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Arsitektur,Perencaan Rekayasa, Pengawasan Rekayasa',
    'sub_klasifikasi_bidang_usaha' => '(AR101)(M1), (AR102)(M1),(RE102)(M1),(RE105)(M1),(RE201)(M1), (RE204)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// uijk::create([
//     'nama_perusahaan' => '',
//     'kategori_perusahaan' => '',
//     'klasifikasi_bidang_usaha' => '',
//     'sub_klasifikasi_bidang_usaha' => '',
//     'keterangan' => '2018',
//     'created_at' => Carbon::now(),
//     'updated_at' => Carbon::now(),
// ]);

// ============================== ============================================================
kegiatanjaskon::create([
                // 'laporankegiatan_id' => 2, // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'id' => 1,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'user_id' => 1,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'judul_kegiatan' => 'KECAMATAN CILILIN BIMBINGAN TEKNIS KESELAMATAN DAN KESEHATAN KERJA PARA PEKERJA KONSTRUKSI',
                'alamat_kegiatan' => 'DESA BATULAYANG 40562 JAWA BARAT INDONESIA',
                'pengawasanlokasi_id' => '11',
                'tanggal' => '',
                'berita1' => 'dokumentasipelatihan/new/BERITA1.jpg',
                'berita2' => 'dokumentasipelatihan/new/BERITA2.jpg',
                'berita3' => 'dokumentasipelatihan/new/BERITA3.jpg',
                'berita4' => 'dokumentasipelatihan/new/BERITA4.jpg',
                'berita5' => 'dokumentasipelatihan/new/BERITA5.jpg',
                'berita6' => 'dokumentasipelatihan/new/BERITA6.jpg',
                'berita7' => 'dokumentasipelatihan/new/BERITA7.jpg',
                'berita8' => 'dokumentasipelatihan/new/BERITA8.jpg',
                'berita9' => 'dokumentasipelatihan/new/BERITA9.jpg',
                'berita10' => 'dokumentasipelatihan/new/BERITA10.jpg',
                'berita11' => 'dokumentasipelatihan/new/BERITA11.jpg',
                'berita12' => 'dokumentasipelatihan/new/BERITA12.jpg',
                'berita13' => 'dokumentasipelatihan/new/BERITA13.jpg',
                'berita14' => 'dokumentasipelatihan/new/BERITA14.jpg',
                'berita15' => 'dokumentasipelatihan/new/BERITA15.jpg',
                'berita16' => 'dokumentasipelatihan/new/BERITA16.jpg',
                'berita17' => 'dokumentasipelatihan/new/BERITA17.jpg',
                'berita18' => 'dokumentasipelatihan/new/BERITA18.jpg',
                'berita19' => 'dokumentasipelatihan/new/BERITA19.jpg',
                'berita20' => 'dokumentasipelatihan/new/BERITA20.jpg',

                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

kegiatanjaskon::create([
                // 'laporankegiatan_id' => 2, // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'id' => 2,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'user_id' => 1,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'judul_kegiatan' => 'KECAMATAN CIKALONG WETAN BIMBINGAN TEKNIS KESELAMATAN DAN KESEHATAN KERJA PARA PEKERJA KONSTRUKSI',
                'alamat_kegiatan' => 'DESA CISOMANG BARAT 40556 JAWA BARAT INDONESIA',
                'pengawasanlokasi_id' => '11',
                'tanggal' => '',
                'berita1' => 'dokumentasipelatihan/new/01_CB.jpg',
                'berita2' => 'dokumentasipelatihan/new/02_CB.jpg',
                'berita3' => 'dokumentasipelatihan/new/03_CB.jpg',
                'berita4' => 'dokumentasipelatihan/new/04_CB.jpg',
                'berita5' => 'dokumentasipelatihan/new/05_CB.jpg',
                'berita6' => 'dokumentasipelatihan/new/06_CB.jpg',
                'berita7' => 'dokumentasipelatihan/new/07_CB.jpg',
                'berita8' => 'dokumentasipelatihan/new/08_CB.jpg',
                'berita9' => 'dokumentasipelatihan/new/09_CB.jpg',
                'berita10' => 'dokumentasipelatihan/new/10_CB.jpg',
                'berita11' => 'dokumentasipelatihan/new/11_CB.jpg',
                'berita12' => 'dokumentasipelatihan/new/12_CB.jpg',
                'berita13' => 'dokumentasipelatihan/new/13_CB.jpg',
                'berita14' => 'dokumentasipelatihan/new/14_CB.jpg',
                'berita15' => 'dokumentasipelatihan/new/15_CB.jpg',
                'berita16' => 'dokumentasipelatihan/new/16_CB.jpg',
                'berita17' => 'dokumentasipelatihan/new/17_CB.jpg',
                'berita18' => 'dokumentasipelatihan/new/18_CB.jpg',
                'berita19' => 'dokumentasipelatihan/new/19_CB.jpg',
                'berita20' => 'dokumentasipelatihan/new/20_CB.jpg',

                'tanggal' => '2024-12-02', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

kegiatanjaskon::create([
                // 'laporankegiatan_id' => 2, // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'id' => 3,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'user_id' => 1,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'judul_kegiatan' => 'KECAMATAN CIPATAT BIMBINGAN TEKNIS KESELAMATAN DAN KESEHATAN KERJA PARA PEKERJA KONSTRUKSI',
                'alamat_kegiatan' => 'DESA CIPATAT 4055 JAWA BARAT INDONESIA',
                'pengawasanlokasi_id' => '17',
                'tanggal' => '',
                'berita1' => 'dokumentasipelatihan/cipatat/cipatat1.jpeg',
                'berita2' => 'dokumentasipelatihan/cipatat/cipatat2.jpeg',
                'berita3' => 'dokumentasipelatihan/cipatat/cipatat3.jpeg',
                'berita4' => 'dokumentasipelatihan/cipatat/cipatat4.jpeg',
                'berita5' => 'dokumentasipelatihan/cipatat/cipatat5.jpeg',
                'berita6' => 'dokumentasipelatihan/cipatat/cipatat6.jpeg',
                'berita7' => 'dokumentasipelatihan/cipatat/cipatat7.jpeg',
                'berita8' => 'dokumentasipelatihan/cipatat/cipatat8.jpeg',

                'tanggal' => '2024-12-02', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);


// ==========================================================================================================
laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'kegiatanjaskon_id' => '1',
                'user_id' => '1',
                'judul_kegiatan' => 'sambutan oleh bapak sekdis pupr kabupaten bandung barat  ',
                'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
                'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
                'keterangan_berita' => '

<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

<p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

<p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

<p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                    'kegiatanjaskon_id' => '1',
                    'user_id' => '1',
                    'judul_kegiatan' => 'sambutan oleh camat cililin kabupaten bandung barat  ',
                'jabatan' => 'camat kecamatan cililin kabupaten bandung barat',
                'gambar' => 'acarasertifikasi/beritaacara/PA_CAMAT.jpeg',
                'keterangan_berita' => '

<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Camat Cililin, dalam sambutannya, mengapresiasi penyelenggaraan acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diadakan di Desa Batulayang. Acara ini merupakan inisiatif penting dari Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) untuk mendukung peningkatan kualitas dan keselamatan dalam proyek-proyek konstruksi di wilayah kami. Dengan adanya bimbingan teknis ini, diharapkan semua pihak dapat memahami dan menerapkan standar keselamatan yang tinggi serta mengikuti semua regulasi yang berlaku.</p>

<p>Dalam sambutannya, Camat Cililin menegaskan betapa pentingnya implementasi standar K3 dalam sektor konstruksi untuk mencegah risiko dan kecelakaan kerja. Pelatihan ini dirancang untuk memberi peserta pengetahuan mendalam tentang praktik terbaik dalam keselamatan kerja dan bagaimana cara mengelola risiko secara efektif. Peserta diharapkan tidak hanya mendapatkan informasi teoritis, tetapi juga keterampilan praktis yang berguna dalam menghadapi tantangan di lapangan.</p>

<p>Selama bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan konstruksi dibahas secara mendetail. Narasumber yang berpengalaman diundang untuk memberikan wawasan dan solusi terhadap berbagai masalah yang sering muncul dalam proyek konstruksi. Tujuan dari kegiatan ini adalah untuk meningkatkan kesadaran dan kemampuan semua peserta sehingga dapat menciptakan lingkungan kerja yang lebih aman dan produktif di wilayah Kecamatan Cililin.</p>

<p>Di akhir acara, Camat Cililin menyampaikan terima kasih kepada semua pihak yang telah berkontribusi dalam pelaksanaan bimbingan teknis ini. Diharapkan bahwa pelatihan ini memberikan manfaat besar dan dapat diterapkan dalam setiap proyek konstruksi yang dilakukan. Komitmen bersama untuk mencapai standar keselamatan yang tinggi akan mendukung kesuksesan proyek dan meningkatkan keselamatan kerja di Kabupaten Bandung Barat.</p>



',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                    'kegiatanjaskon_id' => '1',
                    'user_id' => '1',
                    'judul_kegiatan' => 'sambutan oleh bpk yuyu yuhana, ST., MM pembina jasa konstruksi ahli muda pemerintah kabupaten bandung barat',
                'jabatan' => 'kepala putr kabupaten bandung barat',
                'gambar' => 'acarasertifikasi/beritaacara/PA_YUYU.jpeg',
                'keterangan_berita' => '
<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Kepala Dinas Pekerjaan Umum dan Tata Ruang (PUTR) Kabupaten Bandung Barat, dalam sambutannya, mengapresiasi pelaksanaan acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang. Acara ini merupakan bagian dari upaya berkelanjutan Dinas PUTR untuk meningkatkan kualitas dan keselamatan di sektor konstruksi. Kegiatan ini bertujuan memastikan bahwa semua aspek pekerjaan konstruksi dilakukan sesuai dengan standar yang tinggi dan mematuhi regulasi yang berlaku.</p>

<p>Dalam sambutannya, Kepala Dinas PUTR menekankan betapa pentingnya penerapan standar K3 dalam industri konstruksi untuk mencegah risiko dan kecelakaan di tempat kerja. Bimbingan teknis ini dirancang untuk memberikan peserta pengetahuan mendalam mengenai praktik terbaik dalam keselamatan kerja serta cara-cara efektif untuk mengelola risiko. Harapannya, peserta dapat memperoleh keterampilan praktis yang diperlukan untuk menghadapi berbagai tantangan di lapangan dan mencegah terjadinya kecelakaan.</p>

<p>Selama sesi bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan dalam konstruksi akan dibahas secara komprehensif. Narasumber berpengalaman akan berbagi wawasan dan solusi terkait tantangan dalam pelaksanaan proyek konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait, sehingga dapat menciptakan lingkungan kerja yang lebih aman dan produktif.</p>

<p>Penutupan acara ditandai dengan ucapan terima kasih dari Kepala Dinas PUTR kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, hasil dari pelatihan ini akan memberikan manfaat yang signifikan dan dapat diterapkan dalam setiap proyek konstruksi. Komitmen bersama untuk mencapai standar keselamatan yang tinggi merupakan langkah penting menuju kesuksesan dan keamanan dalam industri konstruksi di Kabupaten Bandung Barat.</p>


',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                    'kegiatanjaskon_id' => '1',
                    'user_id' => '1',
                    'judul_kegiatan' => 'Sambutan oleh bpk Laswono, ST PEMBEKALAN PEKERJA/TUKANG KONSTRUKSI REGULASI SERTIFIKASI KOMPETENSI KERJA (SKK) ',
                'jabatan' => 'Pembina Jasa Konstruksi Ahli Muda Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat',
                'gambar' => 'acarasertifikasi/beritaacara/PA_LASWONO.jpeg',
                'keterangan_berita' => '
<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Pembina Jasa Konstruksi Ahli Muda Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat, Bapak Laswono, ST, memberikan sambutan pada acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari upaya Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa semua pekerjaan konstruksi dilakukan dengan mematuhi standar yang tinggi dan regulasi yang berlaku.</p>

<p>Dalam sambutannya, Bapak Laswono menekankan pentingnya penerapan regulasi dan sertifikasi kompetensi kerja (SKK) dalam industri konstruksi. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

<p>Selama bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan dalam konstruksi dan regulasi SKK akan dibahas secara mendalam. Narasumber berpengalaman akan memberikan wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait sehingga dapat menciptakan lingkungan kerja yang aman dan produktif.</p>

<p>Penutupan acara diwarnai dengan ucapan terima kasih dari Bapak Laswono kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat yang signifikan dan dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan dan kualitas yang tinggi di Kabupaten Bandung Barat.</p>

',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                    'kegiatanjaskon_id' => '1',
                    'user_id' => '1',
                    'judul_kegiatan' => 'sambutan oleh ibu Dra. Fauzia Mulyawati, ST., MT tentang Pembekalan Pekerja/Tukang Konstruksi Terkait Keselamatan Kerja dan Kesehatan (K3)',
                'jabatan' => 'Dosen Universitas Langlangbuana Bandung',
                'gambar' => 'acarasertifikasi/beritaacara/BU_FAUZIA.jpeg',
                'keterangan_berita' => '

<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Dra. Fauzia Mulyawati, ST., MT, Dosen Universitas Langlangbuana Bandung, memberikan bimbingan dan pengarahan pada acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari upaya untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini bertujuan memastikan bahwa semua pekerjaan konstruksi dilakukan dengan mematuhi standar tinggi dan regulasi yang berlaku.</p>

<p>Dalam sambutannya, Dra. Fauzia Mulyawati menekankan pentingnya pemahaman mengenai Keselamatan Kerja dan Kesehatan (K3) di sektor konstruksi. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai penerapan praktik K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko serta menerapkan standar keselamatan dan kesehatan di lokasi kerja.</p>

<p>Selama bimbingan, berbagai topik teknis terkait K3 akan dibahas secara mendalam. Narasumber berpengalaman akan memberikan wawasan dan solusi mengenai tantangan dalam penerapan K3 serta praktik keselamatan yang efektif di industri konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait, sehingga dapat menciptakan lingkungan kerja yang aman dan produktif.</p>

<p>Penutupan acara diwarnai dengan ucapan terima kasih dari Dra. Fauzia Mulyawati kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat signifikan dan dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan dan kesehatan kerja yang tinggi di Kabupaten Bandung Barat.</p>

',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
]);

laporankegiatan::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                    'kegiatanjaskon_id' => '1',
                    'user_id' => '1',
                    'judul_kegiatan' => 'sambutan oleh ibu Rosita, SE., MM tentang Pembekalan Pekerja/Tukang Konstruksi Terkait Regulasi Badan Penjaminan Jaminan Sosial (BPJS) Ketenagakerjaan',
                'jabatan' => 'Badan Penyelenggara Jaminan Sosial',
                'gambar' => 'acarasertifikasi/beritaacara/BU_ROSITA.jpg',
                'keterangan_berita' => '

<p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

<p>Ibu Rosita, SE., MM, dari BPJS Ketenagakerjaan, memberikan bimbingan dan pengarahan dalam acara bimbingan teknis mengenai Regulasi Badan Penjaminan Jaminan Sosial (BPJS) Ketenagakerjaan yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari komitmen untuk meningkatkan pemahaman tentang regulasi dan jaminan sosial di sektor konstruksi, serta memastikan bahwa setiap pekerja konstruksi memahami hak dan kewajiban mereka di bawah BPJS Ketenagakerjaan.</p>

<p>Dalam sambutannya, Ibu Rosita menekankan pentingnya pemahaman mengenai regulasi BPJS Ketenagakerjaan untuk pekerja dan tukang konstruksi. Bimbingan ini dirancang untuk memberikan informasi mendalam mengenai cara BPJS Ketenagakerjaan berfungsi dan bagaimana pekerja dapat memanfaatkan jaminan sosial untuk perlindungan mereka. Peserta diharapkan memperoleh pengetahuan dan keterampilan yang diperlukan untuk mengelola dan memanfaatkan manfaat BPJS secara efektif.</p>

<p>Selama sesi bimbingan, berbagai aspek teknis terkait regulasi BPJS Ketenagakerjaan akan dibahas secara rinci. Ibu Rosita akan membagikan wawasan mengenai hak-hak pekerja, prosedur klaim, serta mekanisme perlindungan yang disediakan oleh BPJS. Tujuan utama dari kegiatan ini adalah untuk meningkatkan pemahaman dan kesadaran semua pihak terkait, sehingga mereka dapat memanfaatkan perlindungan sosial dengan maksimal.</p>

<p>Penutupan acara diwarnai dengan ucapan terima kasih dari Ibu Rosita kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung kepatuhan terhadap regulasi BPJS Ketenagakerjaan di Kabupaten Bandung Barat.</p>

',
                'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
                'created_at' => now(),
                'updated_at' => now(),
            ]);

// ============== ============== ============== ============== ============== ============== ==============
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);



//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);

            // ================= =====================================================================================
giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'LEMBANG',
                'gambar' => '/assets/library/giskbb/LEMBANG.jpeg',
                'laki_laki' => '38671',
                'perempuan' => '36666',
                'total_penduduk' => '194937',
                'keterangan_gis' => '

                <p>Kecamatan Lembang terletak di Kabupaten Bandung Barat, Provinsi Jawa Barat, Indonesia. Terkenal dengan pemandangan alam yang indah dan udara yang sejuk, Lembang menjadi salah satu destinasi populer bagi wisatawan yang mencari suasana pegunungan. Dengan lokasi strategisnya di wilayah Kabupaten Bandung Barat, kecamatan ini menawarkan berbagai fasilitas dan layanan yang mendukung kehidupan sehari-hari masyarakatnya, serta akses yang mudah ke pusat-pusat ekonomi dan pendidikan.</p>

<p>Fasilitas di Kecamatan Lembang cukup lengkap untuk memenuhi kebutuhan warganya. Terdapat berbagai sekolah, pusat kesehatan, dan pasar yang memudahkan penduduk dalam menjalani aktivitas sehari-hari. Infrastruktur yang memadai juga mendukung mobilitas masyarakat, sementara akses transportasi yang baik memperkuat konektivitas antara Lembang dan wilayah sekitarnya.</p>

<p>Berdasarkan data terbaru, jumlah penduduk di Kecamatan Lembang mencapai total 75.337 jiwa. Dari jumlah tersebut, terdapat 38.671 laki-laki dan 36.666 perempuan. Angka ini menunjukkan bahwa kecamatan ini memiliki struktur demografis yang seimbang, dengan proporsi laki-laki dan perempuan yang hampir merata.</p>

<p>Keseimbangan jumlah laki-laki dan perempuan di Kecamatan Lembang mencerminkan dinamika sosial yang stabil. Dengan total penduduk yang cukup besar dan komposisi gender yang seimbang, ada peluang besar untuk pengembangan berbagai inisiatif komunitas. Program-program yang fokus pada pendidikan, kesehatan, dan ekonomi dapat memperkuat kualitas hidup masyarakat di Lembang, serta mendukung pertumbuhan dan kemajuan wilayah ini secara keseluruhan.</p>',

                'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'PARONGPONG',
                'gambar' => '/assets/library/giskbb/PARONGPONG.jpeg',
                'laki_laki' => '56101',
                'perempuan' => '54436',
                'total_penduduk' => '110537',
                'keterangan_gis' => '
              <p>Kecamatan Parongpong adalah sebuah kecamatan di Kabupaten Bandung Barat, Provinsi Jawa Barat, Indonesia. Wilayah ini terkenal dengan kekayaan wisata bunga yang menjadi daya tarik utama bagi pengunjung. Parongpong dikenal sebagai pusat budidaya bunga dan tanaman hias, dengan mayoritas petani di wilayah ini berfokus pada produksi bunga dan tanaman hias lainnya. Keindahan alam dan potensi wisata yang dimilikinya menjadikan Parongpong salah satu destinasi favorit bagi wisatawan yang ingin menikmati keindahan alam dan keunikan tanaman hias.</p>

<p>Di Kecamatan Parongpong, petani bunga tersebar terutama di daerah Cihideung. Daerah ini dikenal dengan berbagai jenis tanaman hias, bunga, dan bibit pohon yang berjajar di sepanjang jalan utama desa Cihideung. Pemandangan ini tidak hanya memperindah kawasan tersebut tetapi juga menarik banyak pengunjung yang tertarik untuk membeli atau sekadar menikmati keindahan tanaman hias. Aktivitas ini telah menjadi bagian integral dari kehidupan masyarakat di Parongpong, yang secara aktif terlibat dalam sektor pertanian dan wisata.</p>

<p>Data terbaru menunjukkan bahwa jumlah penduduk di Kecamatan Parongpong mencapai total 110.537 jiwa. Dari jumlah tersebut, terdapat 56.101 laki-laki dan 54.436 perempuan. Keseimbangan jumlah laki-laki dan perempuan ini mencerminkan struktur demografis yang relatif seimbang dan memberikan gambaran tentang dinamika sosial di kecamatan ini. Struktur populasi yang seimbang ini penting untuk pengembangan berbagai inisiatif sosial dan ekonomi di kawasan ini.</p>

<p>Sebagai bentuk pengakuan terhadap potensi wisata yang dimiliki, pemerintah Kabupaten Bandung Barat telah mendeklarasikan Kecamatan Parongpong sebagai kota wisata bunga. Keputusan ini diambil untuk mendorong pengembangan sektor pariwisata serta meningkatkan kesejahteraan masyarakat melalui promosi dan pengembangan industri bunga dan tanaman hias. Dengan total penduduk yang signifikan dan potensi wisata yang kuat, Kecamatan Parongpong berada dalam posisi strategis untuk berkembang menjadi pusat wisata yang lebih dikenal dan diminati.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ]);


giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CISARUA',
                'gambar' => '/assets/library/giskbb/CISARUA.png',
                'laki_laki' => '39293',
                'perempuan' => '38080',
                'total_penduduk' => '79118',
                'keterangan_gis' => '
     <p>Kecamatan Cisarua adalah sebuah kecamatan yang terletak di Kabupaten Bandung Barat, Provinsi Jawa Barat, Indonesia. Terletak sekitar 9 kilometer dari ibu kota kabupaten ke arah timur laut, Kecamatan Cisarua memiliki posisi strategis yang mendukung perkembangan ekonominya. Pusat pemerintahan kecamatan ini berada di Desa Jambudipa, yang menjadi pusat administrasi dan kegiatan pemerintah daerah.</p>

<p>Cisarua dikenal sebagai kecamatan yang memiliki potensi besar di bidang pertanian dan peternakan. Produk utama dari kawasan ini meliputi jamur, susu, tanaman palawija, dan sayur-sayuran. Keberagaman produk pertanian ini menunjukkan kekayaan sumber daya alam yang dimiliki Cisarua, serta kontribusinya terhadap perekonomian lokal. Iklim yang cukup dingin di wilayah ini juga mendukung pertumbuhan berbagai jenis tanaman dan produk peternakan.</p>

<p>Menurut data terbaru, jumlah penduduk di Kecamatan Cisarua mencapai total 77.373 jiwa. Dari jumlah tersebut, terdapat 39.293 laki-laki dan 38.080 perempuan. Angka ini menunjukkan struktur demografis yang seimbang, dengan jumlah laki-laki dan perempuan yang hampir merata. Keseimbangan ini penting untuk pengembangan berbagai program sosial dan ekonomi di kecamatan ini.</p>

<p>Dengan potensi pertanian dan peternakan yang dimilikinya, serta iklim yang mendukung, Kecamatan Cisarua berada dalam posisi yang baik untuk berkembang lebih lanjut. Potensi sumber daya alam yang ada di Cisarua memberikan peluang besar untuk meningkatkan kesejahteraan masyarakat melalui pengembangan sektor pertanian dan peternakan yang berkelanjutan.</p>

                    ',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIKALONG WETAN',
                'gambar' => '/assets/library/giskbb/CIKALONGWETAN.png',
                'laki_laki' => '39293',
                'perempuan' => '38080',
                'total_penduduk' => '125630',
                'keterangan_gis' => ' DATA BELUM DIISI

                    ',

'created_at' => now(),
                'updated_at' => now(),
            ]);


giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIPEUNDEY',
                'gambar' => '/assets/library/giskbb/CIPEUNDEY.png',
                'laki_laki' => '43453',
                'perempuan' => '41920',
                'total_penduduk' => '87376',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'NGAMPRAH',
                'gambar' => '/assets/library/giskbb/NGAMPRAH.png',
                'laki_laki' => '89279',
                'perempuan' => '86595',
                'total_penduduk' => '175874',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);


giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIPATAT',
                'gambar' => '/assets/library/giskbb/CIPATAT.png',
                'laki_laki' => '72219',
                'perempuan' => '69570',
                'total_penduduk' => '141789',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'PADALARANG',
                'gambar' => '/assets/library/giskbb/PADALARANG.png',
                'laki_laki' => '93110',
                'perempuan' => '89871',
                'total_penduduk' => '182981',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'BATUJAJAR',
                'gambar' => '/assets/library/giskbb/BATUJAJAR.png',
                'laki_laki' => '55063',
                'perempuan' => '53516',
                'total_penduduk' => '108579',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIHAMPELAS',
                'gambar' => '/assets/library/giskbb/CIHAMPELAS.png',
                'laki_laki' => '68421',
                'perempuan' => '65263',
                'total_penduduk' => '133684',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CILILIN',
                'gambar' => '/assets/library/giskbb/CILILIN.png',
                'laki_laki' => '49169',
                'perempuan' => '46959',
                'total_penduduk' => '96128',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIPONGKOR',
                'gambar' => '/assets/library/giskbb/CIPONGKOR.png',
                'laki_laki' => '51118',
                'perempuan' => '48679',
                'total_penduduk' => '99797',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'RONGGA',
                'gambar' => '/assets/library/giskbb/RONGGA.png',
                'laki_laki' => '30394',
                'perempuan' => '28604',
                'total_penduduk' => '58998',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'SINDANGKERTA',
                'gambar' => '/assets/library/giskbb/SINDANGKERTA.png',
                'laki_laki' => '37059',
                'perempuan' => '36063',
                'total_penduduk' => '73122',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);



giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'GUNUNG HALU',
                'gambar' => '/assets/library/giskbb/GUNUNGHALU.png',
                'laki_laki' => '40001',
                'perempuan' => '37911',
                'total_penduduk' => '77912',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'SAGULING',
                'gambar' => '/assets/library/giskbb/saguling.png',
                'laki_laki' => '17442',
                'perempuan' => '16863',
                'total_penduduk' => '34305',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

// ===================== ===================== ===================== =====================
            pelatihan::create([
                'tahun'  => '2015',
                'kasus' => '110285',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2016',
                'kasus' => '101367',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2017',
                'kasus' => '123040',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2018',
                'kasus' => '173415',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2019',
                'kasus' => '182835',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2020',
                'kasus' => '221740',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2021',
                'kasus' => '234270',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2022',
                'kasus' => '265334',
                'created_at' => now(),
                'updated_at' => now(),
            ]);


            // =======================================================================================================================
            // qa::create([
            //     'qasebagai_id'   => random_int(1, 9),       // Menghasilkan nomor acak antara 1 dan 9
            //     'qapertanyaan_id' => random_int(1, 11),    // Misalnya, nomor acak antara 1 dan 100 (sesuaikan rentangnya jika perlu)
            //     'nama_lengkap'    => 'Nama Lengkap',        // Ganti dengan nama lengkap yang sesuai
            //     'email'           => 'email@example.com',   // Ganti dengan email yang sesuai
            //     'telepon'         => '08123456789',         // Ganti dengan nomor telepon yang sesuai
            //     'created_at'      => now(),
            //     'updated_at'      => now(),
            // ]);

        // =======================================================================================================================
            qasebagai::create([
                'sebagai'           => 'Kontraktor',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qasebagai::create([
                'sebagai'           => 'Pengawas',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qasebagai::create([
                'sebagai'           => 'Tenaga Ahli',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qasebagai::create([
                'sebagai'           => 'Tenaga Tukang',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qasebagai::create([
                'sebagai'           => 'Dinas Terkait',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qasebagai::create([
                'sebagai'           => 'Masyarakat Umum',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);


        // =======================================================================================================================
            qapertanyaan::create([
                'pertanyaan'        => 'Sertifikat Laik Fungsi',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Persetujuan Bangunan Gedung ',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Inspeksi Lapangan',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Pemeliharaan Perbaikan',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Penyediaan Material',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Insfrastruktur Perkotaan',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Insfrastruktur Jalan',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Insfrastruktur Industri',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Teknik Konstruksi',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Teknik Struktur',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Teknik Rekayasa & Air Limbah',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

// ============================================================================

        himbauandinas::create([
            'nama_lengkap'          => 'Yuyu Yuhana, ST., MM',       // Menghasilkan nomor acak antara 1 dan 9
            'jabatan'               => 'Fungsional Pembina Jasa Konstruksi Ahli Muda Pemerintah Kabupaten Bandung Barat',       // Menghasilkan nomor acak antara 1 dan 9
            'himbauan'              => '<p>Kami mendorong semua pihak memanfaatkan Sistem Informasi Pembina Jasa Konstruksi (SIPJAKI) secara maksimal. Sistem ini dirancang untuk memudahkan akses informasi penting terkait peraturan dan sertifikasi dalam industri konstruksi. Dengan menggunakan SIPJK, saudara akan memperoleh informasi terkini dan membantu memastikan proyek konstruksi berjalan sesuai standar. Mari kita tingkatkan kualitas dan profesionalisme industri konstruksi bersama</p>',       // Menghasilkan nomor acak antara 1 dan 9
            'foto_pejabat'          => 'himbauan/dinas/PERSETUJUAN_BANGUNAN_GEDUNG.png',
            'created_at'            => now(),
            'updated_at'            => now(),
]);
        himbauandinas::create([
            'nama_lengkap'          => '______',       // Menghasilkan nomor acak antara 1 dan 9
            'jabatan'               => '______',       // Menghasilkan nomor acak antara 1 dan 9
            'himbauan'              => '______',       // Menghasilkan nomor acak antara 1 dan 9
            'foto_pejabat'          => '',
            'created_at'            => now(),
            'updated_at'            => now(),
]);
        himbauandinas::create([
            'nama_lengkap'          => '_____',       // Menghasilkan nomor acak antara 1 dan 9
            'jabatan'               => '_____',       // Menghasilkan nomor acak antara 1 dan 9
            'himbauan'              => '_____',       // Menghasilkan nomor acak antara 1 dan 9
            'foto_pejabat'          => '',
            'created_at'            => now(),
            'updated_at'            => now(),
]);

profiljakonidentitasopd::create([
    'namaopd'           => 'Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Bandung Barat',
    'alamatopd'         => 'Komplek Perkantoran Pemda Kabupaten Bandung Barat',
    'rtrw'              => '01 / 03',
    'kodepos'           => '40552',
    'kelurahan'         => 'Mekarsari',
    'kecamatan'         => 'Ngamprah',
    'kota'              => 'Kabupaten Bandung Barat',
    'provinsi'          => 'Jawa Barat',
    'negara'            => 'Indonesia',
    'posisigeografis'   => '-6.8370, 107.4721', // opsional, bisa diganti koordinat resmi
    'tipedinas'         => 'A',
    'created_at'        => now(),
    'updated_at'        => now(),
]);

profiljakonkepaladinas::create([
    'namalengkap'        => '-',
    'nip'                => '-',
    'ttl'                => null,
    'pangkatgolongan'    => '-',
    'jabatan'            => '-',
    'perangkatdaerah'    => '-',
    'pendidikanterakhir' => '-',
    // 'created_at'         => now(),
    // 'updated_at'         => now(),
]);

profiljakonkabid::create([
    'namalengkap'        => 'Yuyu Yuhana, S.T., M.M',
    'nip'                => '-',
    'ttl'                => null,
    'pangkatgolongan'    => '-',
    'jabatan'            => 'Kepala Bidang Jasa Konstruksi',
    'perangkatdaerah'    => '-',
    'pendidikanterakhir' => 'S2',
    // 'created_at'         => now(),
    // 'updated_at'         => now(),
]);

profiljakoninformasi::create([
    'informasiopd'        => 'OPD yang menangani Bina Jasa Konstruksi di DPUTR Kabupaten Bandung Barat setara dengan eselon IV, dibawah Bidang Jasa Konstruksi. Pada Bidang Jasa Konstruksi bidang Subkoordinator Bina Jasa Konstruksi, hal tersebut tertuang dalam Perbup Nomor 66 Tahun 2021 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi Serta Tata Kerja Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Bandung Barat.',
    'notelepon'                => '-',
    'instagram'                => null,
    'tiktok'    => '-',
    'email'            => '-',
]);

profiljakonsipjaki::create([
    'nomor'        => '-',
    'operator1'                => '-',
    'operator2'                => '-',
    'operator3'                => '-',
    'operator4'                => '-',
    // 'created_at'         => now(),
    // 'updated_at'         => now(),
]);

profiljakonpersonil::create([
    'jabatan'        => '-',
    'namalengkap'                => '-',
    // 'created_at'         => now(),
    // 'updated_at'         => now(),
]);


// ====================================
headerberanda::create([
    'judul' => 'Sistem Informasi Pembina Jasa Konstruksi ',
    'header' => '/assets/gambarbaru/padalarang1.jpeg',
]);

headerberanda::create([
    'judul' => 'Transparan dan Efisien',
    'header' => '/assets/gambarbaru/padalarang.avif',
]);

headerberanda::create([
    'judul' => 'Peningkatan Kualitas Infrastruktur',
    'header' => '/assets/gambarbaru/padalarang2.jpg',
]);

artikeljakonmasjaki::create([
    'user_id'    => 1, // ID user yang sesuai
    'judul'      => 'Perubahan alur permohonan akun tenaga kerja konstruksi untuk pencatatan pengalaman kerja',
    'tanggal'    => now(), // otomatis tanggal sekarang
    'berkas'     => '/assets/gambarbaru/Panduan.pdf', // path file
    'keterangan' => 'Artikel ini menjelaskan perubahan alur permohonan akun bagi tenaga kerja konstruksi, yang digunakan untuk pencatatan pengalaman kerja secara resmi sesuai panduan terbaru dari Kementerian.',
]);

bujkkontraktor::create([
    'bujkkontraktorsub_id' => 1,
    'asosiasimasjaki_id'   => 1,
    'user_id'              => 1,

    'namalengkap'          => 'Konstruksi PT Maju Jaya Konstruksi',
    'alamat'               => 'Jl. Raya Cihampelas No. 88, Kabupaten Bandung Barat',
    'no_telepon'           => '081234567890',
    'email'                => 'majujaya@example.com',
    'nomorindukberusaha'   => '9876543210123',

    'pju'                  => 'Direktur Utama',
    'no_akte'              => 'AKT-55/2022',
    'tanggal'              => now(),
    'nama_notaris'         => 'Notaris Bambang Wijaya, SH',
    'no_pengesahan'        => 'SK-PNG-8891/2023',

    'uploadberkas'         => null, // mengikuti format contoh kamu
]);

bujkkonsultan::create([
    'bujkkonsultansub_id' => 1,
    'asosiasimasjaki_id'   => 1,
    'user_id'              => 1,

    'namalengkap'          => 'Konsultasi Konstruksi PT Maju Jaya Konstruksi',
    'alamat'               => 'Jl. Raya Cihampelas No. 88, Kabupaten Bandung Barat',
    'no_telepon'           => '081234567890',
    'email'                => 'majujaya@example.com',
    'nomorindukberusaha'   => '9876543210123',

    'pju'                  => 'Direktur Utama',
    'no_akte'              => 'AKT-55/2022',
    'tanggal'              => now(),
    'nama_notaris'         => 'Notaris Bambang Wijaya, SH',
    'no_pengesahan'        => 'SK-PNG-8891/2023',

    'uploadberkas'         => null, // mengikuti format contoh kamu
]);

    asosiasimasjaki::create([
    'namaasosiasi'   => 'DPUTR Kabupaten Bandung Barat ', // Nama asosiasi
    'alamat'         => 'Komplek Pemda Kabupaten Bandung Barat Jl. Raya Padalarang-Cisarua Km.2 Ngamprah', // Alamat asosiasi
    'notelepon'      => null, // Nomor telepon asosiasi
    'pic'            => null, // Person In Charge
    'jumlahanggota'  => null, // Jumlah anggota
]);

    asosiasimasjaki::create([
    'namaasosiasi'   => 'Asosiasi Jakon Kabupaten Bandung Barat ', // Nama asosiasi
    'alamat'         => 'Jl. Pemuda No. 10, KBB, Jawa Barat', // Alamat asosiasi
    'notelepon'      => '081234567890', // Nomor telepon asosiasi
    'pic'            => 'Budi Santoso', // Person In Charge
    'jumlahanggota'  => '50', // Jumlah anggota
]);


    asosiasimasjaki::create([
    'namaasosiasi'   => 'Konsultan Baru  ', // Nama asosiasi
    'alamat'         => 'Jl. Pemuda No. 10, KBB, Jawa Barat', // Alamat asosiasi
    'notelepon'      => '081234567890', // Nomor telepon asosiasi
    'pic'            => 'Budi Santoso', // Person In Charge
    'jumlahanggota'  => '50', // Jumlah anggota
]);

// JENJANG PENDIDIKAN
jenjangpendidikan::create([
    'id' => '1',
    'jenjangpendidikan' => 'Non Pendidikan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '2',
    'jenjangpendidikan' => 'SD/MI/Sederajat',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '3',
    'jenjangpendidikan' => 'SMP/Mts/Sederajat',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '4',
    'jenjangpendidikan' => 'SMA/MA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '5',
    'jenjangpendidikan' => 'SMK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '6',
    'jenjangpendidikan' => 'STM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '7',
    'jenjangpendidikan' => 'Diploma 1',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '8',
    'jenjangpendidikan' => 'Diploma 2',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '9',
    'jenjangpendidikan' => 'Diploma 3',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '10',
    'jenjangpendidikan' => 'Diploma 4',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '11',
    'jenjangpendidikan' => 'Strata 1 (S1)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '12',
    'jenjangpendidikan' => 'Profesi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '13',
    'jenjangpendidikan' => 'Strata 2 (S2)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

jenjangpendidikan::create([
    'id' => '14',
    'jenjangpendidikan' => 'Strata 3 (S3)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

// JABATAN KERJA
// JABATAN KERJA JAKI BLORA
jabatankerja::create([
    'id' => '1',
    'jabatankerja' => 'Pelaksana Konstruksi Bangunan Unit Distribusi SPAM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '2',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Bangunan Air Limbah Permukiman (setempat dan terpusat)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '3',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Drainase Perkotaan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '4',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '5',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '6',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Pemasangan Pipa Leachate (Lindi) dan Pipa Gas/Ventilasi Di TPA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '7',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Saluran Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '8',
    'jabatankerja' => 'Pelaksana Lapangan Perkerasan Jalan Beton Muda',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '9',
    'jabatankerja' => 'Personil Keselamatan dan Kesehatan Kerja',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '10',
    'jabatankerja' => 'Ahli Geodesi Dan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '11',
    'jabatankerja' => 'Ahli Madya Bidang Keahlian Manajemen Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '12',
    'jabatankerja' => 'Ahli Madya Bidang Keahlian Teknik Mekanikal',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '13',
    'jabatankerja' => 'Ahli Madya Bidang Keahlian Teknik Sumber Daya Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '14',
    'jabatankerja' => 'Ahli Madya Geoteknik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '15',
    'jabatankerja' => 'Ahli Madya K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '16',
    'jabatankerja' => 'Ahli Madya Perencana Struktur Jalan Rel',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '17',
    'jabatankerja' => 'Ahli Madya Survei Terestris',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '18',
    'jabatankerja' => 'Ahli Madya Teknik Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '19',
    'jabatankerja' => 'Ahli Madya Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '20',
    'jabatankerja' => 'Ahli Madya Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '21',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Manajemen Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '22',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '23',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '24',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Mekanikal',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '25',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Sumber Daya Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '26',
    'jabatankerja' => 'Ahli Muda Elektrikal Konstruksi Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '27',
    'jabatankerja' => 'Ahli Muda Geoteknik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '28',
    'jabatankerja' => 'Ahli Muda K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '29',
    'jabatankerja' => 'Ahli Muda Pemeliharaan Jalan Dan Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '30',
    'jabatankerja' => 'Ahli Muda Pengukuran Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '31',
    'jabatankerja' => 'Ahli Muda Perawatan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '32',
    'jabatankerja' => 'Ahli Muda Perencana Beton Pracetak Untuk Struktur Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '33',
    'jabatankerja' => 'Ahli Muda Perencana Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '34',
    'jabatankerja' => 'Ahli Muda Quantity Surveyor',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '35',
    'jabatankerja' => 'Ahli Muda Teknik Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '36',
    'jabatankerja' => 'Ahli Muda Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '37',
    'jabatankerja' => 'Ahli Muda Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '38',
    'jabatankerja' => 'Ahli Pelaksana Teknik Plambing',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '39',
    'jabatankerja' => 'Ahli Teknik Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '40',
    'jabatankerja' => 'Ahli Utama Bidang Keahlian Manajemen Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '41',
    'jabatankerja' => 'Ahli Utama Bidang Keahlian Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '42',
    'jabatankerja' => 'Ahli Utama Bidang Keahlian Teknik Sumber Daya Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '43',
    'jabatankerja' => 'Ahli Utama K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '44',
    'jabatankerja' => 'Ahli Utama Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '45',
    'jabatankerja' => 'Ahli Utama Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '46',
    'jabatankerja' => 'Juru Gambar Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '47',
    'jabatankerja' => 'Juru Gambar Pekerjaan Jalan dan Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '48',
    'jabatankerja' => 'Juru Ukur (Surveyor)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '49',
    'jabatankerja' => 'Kepala Pengelola Lingkungan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '50',
    'jabatankerja' => 'Manajer Lapangan Pelaksanaan Pekerjaan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '51',
    'jabatankerja' => 'Manajer Pelaksana Konstruksi Sistem Produksi Air Minum (SPAM)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '52',
    'jabatankerja' => 'Manajer Pelaksanaan Pekerjaan Jalan/ Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '53',
    'jabatankerja' => 'Manajer pengelolaan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '54',
    'jabatankerja' => 'Manajer Produksi Campuran Aspal Panas (Asphalt Mixing Plant Manager)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '55',
    'jabatankerja' => 'Operator Scaffolding',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '56',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Gedung Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '57',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Jalan Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '58',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Pemasangan Jembatan Rangka Baja Standar Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '59',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Pemasangan Jembatan Rangka Baja Standar Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '60',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Saluran Irigasi Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '61',
    'jabatankerja' => 'Pelaksana Pekerjaan Pemeliharaan Jaringan Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '62',
    'jabatankerja' => 'Pelaksana Pekerjaan Pemeliharaan Sungai Muda',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '63',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '64',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '65',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jembatan Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '66',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jembatan Muda',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '67',
    'jabatankerja' => 'Pemasang Perancah Dan Acuan/Cetakan Beton',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '68',
    'jabatankerja' => 'Pengawas Lapangan Pekerjaan Drainase Perkotaan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '69',
    'jabatankerja' => 'Pengawas Pekerjaan Struktur Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '70',
    'jabatankerja' => 'Pengawas Pekerjaan Struktur Bangunan Gedung Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '71',
    'jabatankerja' => 'Petugas Keselamatan dan Kesehatan Kerja (K3) Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '72',
    'jabatankerja' => 'Petugas Keselamatan Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '73',
    'jabatankerja' => 'Supervisor K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '74',
    'jabatankerja' => 'Teknisi Laboratorium Beton Aspal',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '75',
    'jabatankerja' => 'Teknisi Scaffolding',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '76',
    'jabatankerja' => 'Tukang Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '77',
    'jabatankerja' => 'Tukang Besi Beton',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '78',
    'jabatankerja' => 'Tukang Kayu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '79',
    'jabatankerja' => 'Tukang Pasang Rangka Atap Baja Ringan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '80',
    'jabatankerja' => 'Tukang Plester Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '81',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Jalan Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '82',
    'jabatankerja' => 'Pelaksana Konstruksi Bangunan Unit Distribusi SPAM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '83',
    'jabatankerja' => 'Supervisor K3 Konstruksi Utama',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

// NAMA SEKOLAH
namasekolah::create(['id' => 1, 'namasekolah' => 'SMA Negeri 1 Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 2, 'namasekolah' => 'SMA Negeri 2 Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 3, 'namasekolah' => 'SMA Negeri 1 Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 4, 'namasekolah' => 'SMA Negeri 2 Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 5, 'namasekolah' => 'SMA Negeri 1 Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 6, 'namasekolah' => 'SMA Negeri 1 Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 7, 'namasekolah' => 'SMA Negeri 1 Parongpong', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 8, 'namasekolah' => 'SMA Negeri 1 Cihampelas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 9, 'namasekolah' => 'SMA Negeri 1 Lembang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 10, 'namasekolah' => 'SMA Negeri 2 Lembang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 11, 'namasekolah' => 'SMA Negeri 1 Cipatat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

// SMK
namasekolah::create(['id' => 12, 'namasekolah' => 'SMK Negeri 1 Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 13, 'namasekolah' => 'SMK Negeri 1 Lembang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 14, 'namasekolah' => 'SMK Negeri 2 Lembang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 15, 'namasekolah' => 'SMK Negeri 1 Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 16, 'namasekolah' => 'SMK Negeri 1 Cipatat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

// SMA/SMK Swasta
namasekolah::create(['id' => 17, 'namasekolah' => 'SMA Al-Masoem', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 18, 'namasekolah' => 'SMAK 1 Kristen Bandung Barat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 19, 'namasekolah' => 'SMA Bina Budaya', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 20, 'namasekolah' => 'SMA PGRI Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 21, 'namasekolah' => 'SMA PGRI Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 22, 'namasekolah' => 'SMA Terpadu Riyadhusshalihiin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 23, 'namasekolah' => 'SMK Bina Nusantara Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 24, 'namasekolah' => 'SMK Al Muttaqien Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 25, 'namasekolah' => 'SMK PGRI Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 26, 'namasekolah' => 'SMK PGRI Cihampelas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 27, 'namasekolah' => 'SMK PGRI Lembang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 28, 'namasekolah' => 'SMK Ma\'arif Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 29, 'namasekolah' => 'SMK Muhammadiyah Cipatat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 30, 'namasekolah' => 'SMK YP 17 Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 31, 'namasekolah' => 'SMK YPM Cihampelas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 32, 'namasekolah' => 'SMK Annur Cikalong Wetan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 33, 'namasekolah' => 'SMK Mutiara Baru', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 34, 'namasekolah' => 'SMK Alfalah Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

// MA (Madrasah Aliyah)
namasekolah::create(['id' => 35, 'namasekolah' => 'MA Negeri 1 Bandung Barat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 36, 'namasekolah' => 'MA Al-Islamiyah Cipongkor', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 37, 'namasekolah' => 'MA Daarul Falah Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 38, 'namasekolah' => 'MA Miftahul Huda Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 39, 'namasekolah' => 'MA Riyadlul Ulum Cipatat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

// Tambahan SMA/SMK umum lain
namasekolah::create(['id' => 40, 'namasekolah' => 'SMA Plus Al-Ghifari', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 41, 'namasekolah' => 'SMA Advent Parongpong', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 42, 'namasekolah' => 'SMK Komputer Indonesia', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 43, 'namasekolah' => 'SMK Informatika Raharja', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 44, 'namasekolah' => 'SMK Teknologi Cikalong Wetan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 45, 'namasekolah' => 'SMK Yaspim Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 46, 'namasekolah' => 'SMK Taruna Bhakti', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 47, 'namasekolah' => 'SMK Pelayaran Bahari Bandung Barat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 48, 'namasekolah' => 'SMK Bina Mandiri Cihampelas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 49, 'namasekolah' => 'SMK Yayasan Pendidikan Wiraswasta', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 50, 'namasekolah' => 'SMK Widya Utama Lembang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 51, 'namasekolah' => 'SMK Darul Falah Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 52, 'namasekolah' => 'SMK Bina Siswa Mandiri Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 53, 'namasekolah' => 'SMK PGRI Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 54, 'namasekolah' => 'SMK Paramarta Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 55, 'namasekolah' => 'SMK Bina Profesi Cikalongwetan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 56, 'namasekolah' => 'SMK YP Karya Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 57, 'namasekolah' => 'SMK Taruna Jaya Cihampelas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 58, 'namasekolah' => 'SMK Miftahul Ulum Cipongkor', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 59, 'namasekolah' => 'SMK YAPANA Lembang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 60, 'namasekolah' => 'SMK AL IHSAN Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

// MA tambahan
namasekolah::create(['id' => 61, 'namasekolah' => 'MA Darussalam Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 62, 'namasekolah' => 'MA Al-Falah Cikalongwetan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 63, 'namasekolah' => 'MA Al-Hikmah Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 64, 'namasekolah' => 'MA Muhammadiyah Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 65, 'namasekolah' => 'MA Darul Amanah Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

// SMA Swasta tambahan
namasekolah::create(['id' => 66, 'namasekolah' => 'SMA Budi Bakti Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 67, 'namasekolah' => 'SMA Wirakarya Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 68, 'namasekolah' => 'SMA Kartika Siliwangi Parongpong', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 69, 'namasekolah' => 'SMA Pasundan Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 70, 'namasekolah' => 'SMA Sasmita Jaya Cihampelas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

// SMK tambahan lain
namasekolah::create(['id' => 71, 'namasekolah' => 'SMK Bina Dharma Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 72, 'namasekolah' => 'SMK Al-Huda Cipatat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 73, 'namasekolah' => 'SMK Pelita Bangsa Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 74, 'namasekolah' => 'SMK Teknologi Wiyatamandala', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 75, 'namasekolah' => 'SMK YAPEM Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 76, 'namasekolah' => 'SMK Al-Furqon Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 77, 'namasekolah' => 'SMK Teknologi Mandiri Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 78, 'namasekolah' => 'SMK Bina Karya Parongpong', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 79, 'namasekolah' => 'SMK Harapan Bangsa Cihampelas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 80, 'namasekolah' => 'SMK An-Nur Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

// Tambahan biar mencapai 100 sekolah
namasekolah::create(['id' => 81, 'namasekolah' => 'SMK Nusantara Lembang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 82, 'namasekolah' => 'SMK Mitra Mandiri Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 83, 'namasekolah' => 'SMK Sahabat Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 84, 'namasekolah' => 'SMK Insan Mandiri Cipongkor', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 85, 'namasekolah' => 'SMK Pertiwi Parongpong', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 86, 'namasekolah' => 'SMK Madani Cihampelas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 87, 'namasekolah' => 'SMK Wirakarya Cikalongwetan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 88, 'namasekolah' => 'SMK As-Syifa Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 89, 'namasekolah' => 'SMK Al-Mujahidin Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 90, 'namasekolah' => 'SMK Informatika Teknologi Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 91, 'namasekolah' => 'SMK Miftahul Khoer Lembang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 92, 'namasekolah' => 'SMA Al-Azhar Parongpong', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 93, 'namasekolah' => 'SMA Al-Mukhlisin Cihampelas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 94, 'namasekolah' => 'SMA Mandiri Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 95, 'namasekolah' => 'SMA Al-Mutmainnah Batujajar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

namasekolah::create(['id' => 96, 'namasekolah' => 'SMA Teknologi Informasi Parongpong', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 97, 'namasekolah' => 'SMA Sejahtera Lembang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 98, 'namasekolah' => 'SMA Islam Miftahul Jannah Cisarua', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 99, 'namasekolah' => 'SMA Pelita Harapan Ngamprah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
namasekolah::create(['id' => 100, 'namasekolah' => 'SMA Bina Insani Padalarang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);

/// TAHUN PILIHAN
tahunpilihan::create([
    'id' => 1,
    'tahunpilihan' => '2015',
]);

tahunpilihan::create([
    'id' => 2,
    'tahunpilihan' => '2016',
]);

tahunpilihan::create([
    'id' => 3,
    'tahunpilihan' => '2017',
]);

tahunpilihan::create([
    'id' => 4,
    'tahunpilihan' => '2018',
]);

tahunpilihan::create([
    'id' => 5,
    'tahunpilihan' => '2019',
]);

tahunpilihan::create([
    'id' => 6,
    'tahunpilihan' => '2020',
]);

tahunpilihan::create([
    'id' => 7,
    'tahunpilihan' => '2021',
]);

tahunpilihan::create([
    'id' => 8,
    'tahunpilihan' => '2022',
]);

tahunpilihan::create([
    'id' => 9,
    'tahunpilihan' => '2023',
]);

tahunpilihan::create([
    'id' => 10,
    'tahunpilihan' => '2024',
]);

tahunpilihan::create([
    'id' => 11,
    'tahunpilihan' => '2025',
]);

tahunpilihan::create([
    'id' => 12,
    'tahunpilihan' => '2026',
]);

tahunpilihan::create([
    'id' => 13,
    'tahunpilihan' => '2027',
]);

// TENAGA KERJA TERAMPIL KABUPATEN BANDUNG BARAT

allskktenagakerjablora::create([
    'skkanda' => null, // atau 'namalengkap' jika kamu pakai field itu
    'agendaskk_id' => 1, // isi sesuai kebutuhan
    'user_id' => 7,
    'jenjangpendidikan_id' => null,
    'jabatankerja_id' => 76,
    'namasekolah_id' => null,
    'tahunpilihan_id' => 10,
    'kecamatankbb_id' => 13,
    'namalengkap' => 'Wahyudin',
    'nik' => '-',
    'tempatlahir' => null,
    'ttl' => '1962-08-10',
    'jeniskelamin' => 'Laki-laki',
    'alamat' => 'Kp. Cibitung RT/RW 002/011 Kelurahan Kanangasari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
    'notelepon' => null,
    'email' => null,
    'tahunlulus' => null,
    'uploadktp' => null, // tidak ada file ktp lama
    'uploadfoto' => 'skktenagakerja/arsip/pas/A01_Paspoto.png',
    'uploadijazah' => null,
    'uploadpengalaman' => 'skktenagakerja/arsip/kta_gatensi/01_WAHYUDIN_KTA_GATENSI.pdf',
    'uploadkebenarandata' => null,
    'uploadnpwp' => null,
    'uploaddaftarriwayathidup' => null,

    'namaasosiasi' => null,
    'punyaskk' => 'Ya',
    'punyasiki' => null,
    'portalpupr' => null,
    'siappatuh' => null,
    'sertifikat' => 'skktenagakerja/arsip/skk_pekerja/01_WAHYUDIN_SKK.pdf',
    'catatanvalidasi' => null,

    'validasi_ktp' => null,
    'validasi_foto' => null,
    'validasi_ijazah' => null,
    'validasi_pengalaman' => null,
    'validasi_kebenarandata' => null,
    'validasi_npwp' => null,
    'validasi_daftarriwayathidup' => null,

    'verifikasipu' => null,
    'verifikasilps' => false,
    'verifikasihadirsertifikasi' => false,

    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);


agendaskk::create([
    'materipelatihanskk_id' => null,       // ID materi pelatihan (sesuaikan yang ada di tabel)
    'allskktenagakerjablora_id' => null,   // ID peserta SKK Tenaga Kerja Blora
    'user_id' => 8,                     // ID LSP penerbit
    'asosiasimasjaki_id' => 1,          // ID asosiasi penyelenggara
    'namakegiatan' => 'Pelatihan Tenaga Konstruksi Kecamatan Cikalong Wetan ',
    'jabatankerja_id' => 76,
    'penutupan' => '2024-08-13',
    'waktupelaksanaan' => '2024-08-14',
    'jumlahpeserta' => 30,
    'lokasi' => 'Gedung Serba Guna Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
    'keterangan' => 'Pelatihan Jenjang 1 Tenaga Kerja Konstruksi',
    'isiagenda' => 'Materi meliputi keselamatan kerja, manajemen proyek, dan teknik konstruksi dasar.',
    'foto' => 'agendaskk/arsip/foto_kegiatan1.jpg',

    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

kecamatankbb::create([
    'id' => 1,
    'kecamatankbb' => 'Ngamprah',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 2,
    'kecamatankbb' => 'Padalarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 3,
    'kecamatankbb' => 'Parongpong',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 4,
    'kecamatankbb' => 'Cisarua',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 5,
    'kecamatankbb' => 'Lembang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 6,
    'kecamatankbb' => 'Cililin',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 7,
    'kecamatankbb' => 'Batujajar',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 8,
    'kecamatankbb' => 'Saguling',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 9,
    'kecamatankbb' => 'Cipeundeuy',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 10,
    'kecamatankbb' => 'Rongga',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 11,
    'kecamatankbb' => 'Sindangkerta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 12,
    'kecamatankbb' => 'Gununghalu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 13,
    'kecamatankbb' => 'Cikalong Wetan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 14,
    'kecamatankbb' => 'Cihampelas',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

kecamatankbb::create([
    'id' => 15,
    'kecamatankbb' => 'Cipongkor',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null,
]);

/// PROFIL PAKET PEKERJAAN MAS JAKI
//======================== ===================================================================================
// DATA NAMA SEKOLAH MAS JAKI BLORA
profiljenispekerjaan::create([
    'id' => '1',
    'jenispekerjaan' => 'Checkdam',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '2',
    'jenispekerjaan' => 'Belanja Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '3',
    'jenispekerjaan' => 'Drainase',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '4',
    'jenispekerjaan' => 'Embung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '5',
    'jenispekerjaan' => 'Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '6',
    'jenispekerjaan' => 'Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '7',
    'jenispekerjaan' => 'Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '8',
    'jenispekerjaan' => 'Jembatan   ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '9',
    'jenispekerjaan' => 'Pasar',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '10',
    'jenispekerjaan' => 'Ruang Terbuka Hijau',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '11',
    'jenispekerjaan' => 'SPAM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '12',
    'jenispekerjaan' => 'Bangunan Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '13',
    'jenispekerjaan' => 'Belanja Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '14',
    'jenispekerjaan' => 'Fasilitas Umum',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '15',
    'jenispekerjaan' => 'Pipanisasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '16',
    'jenispekerjaan' => 'Sumur',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '17',
    'jenispekerjaan' => 'Talud',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '18',
    'jenispekerjaan' => 'Penyusunan Database',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '19',
    'jenispekerjaan' => 'Pengawasan Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '20',
    'jenispekerjaan' => 'Konstruksi Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '21',
    'jenispekerjaan' => 'Taman',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '22',
    'jenispekerjaan' => 'Database',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '23',
    'jenispekerjaan' => 'Database Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '24',
    'jenispekerjaan' => 'Database Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '25',
    'jenispekerjaan' => 'Konsultasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '26',
    'jenispekerjaan' => 'Survey Harga Bahan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// PAKET STATUS PEKERJAAN

paketstatuspekerjaan::create([
    'id' => 1,
    'paketstatuspekerjaan' => 'Pekerjaan Konstruksi Tender',
]);

paketstatuspekerjaan::create([
    'id' => 2,
    'paketstatuspekerjaan' => 'Pekerjaan Konstruksi Non Tender',
]);

paketstatuspekerjaan::create([
    'id' => 3,
    'paketstatuspekerjaan' => 'Pekerjaan Konsultasi Konstruksi Tender',
]);

paketstatuspekerjaan::create([
    'id' => 4,
    'paketstatuspekerjaan' => 'Pekerjaan Konsultasi Konstruksi Non Tender',
]);


// SUMBER DANA

sumberdana::create([
    'id' => '1',
    'sumberdana' => 'APBN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sumberdana::create([
    'id' => '2',
    'sumberdana' => 'APBD',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sumberdana::create([
    'id' => '3',
    'sumberdana' => 'APBDP',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// bulan rekap bro
        // =================================================================
        bulanrekap::create([
            'id'  => '1',
            'bulanrekap'  => 'Januari',
        ]);

        bulanrekap::create([
            'id'  => '2',
            'bulanrekap'  => 'Februari',
        ]);

        bulanrekap::create([
            'id'  => '3',
            'bulanrekap'  => 'Maret',
        ]);

        bulanrekap::create([
            'id'  => '4',
            'bulanrekap'  => 'April',
        ]);

        bulanrekap::create([
            'id'  => '5',
            'bulanrekap'  => 'Mei',
        ]);

        bulanrekap::create([
            'id'  => '6',
            'bulanrekap'  => 'Juni',
        ]);

        bulanrekap::create([
            'id'  => '7',
            'bulanrekap'  => 'Juli',
        ]);

        bulanrekap::create([
            'id'  => '8',
            'bulanrekap'  => 'Agustus',
        ]);

        bulanrekap::create([
            'id'  => '9',
            'bulanrekap'  => 'September',
        ]);

        bulanrekap::create([
            'id'  => '10',
            'bulanrekap'  => 'Oktober',
        ]);

        bulanrekap::create([
            'id'  => '11',
            'bulanrekap'  => 'November',
        ]);

        bulanrekap::create([
            'id'  => '12',
            'bulanrekap'  => 'Desember',
        ]);

        bulanrekap::create([
            'id'  => '13',
            'bulanrekap'  => 'Selesai',
        ]);

    // ============================
    //  USER ID 11
    // ============================
    User::create([
        'id' => 11,
        'name'  => 'DINAS PEKERJAAN UMUM DAN TATA RUANG',
        'username' => 'DINAS PEKERJAAN UMUM DAN TATA RUANG',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto1.png',
        'email' => 'dputr@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 12
    // ============================
    User::create([
        'id' => 12,
        'name'  => 'DINAS PERUMAHAN PEMUKIMAN DAN PERHUBUNGAN',
        'username' => 'DINAS PERUMAHAN PEMUKIMAN DAN PERHUBUNGAN',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto2.png',
        'email' => 'dinasperkimkbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 13
    // ============================
    User::create([
        'id' => 13,
        'name'  => 'DINAS PENDIDIKAN',
        'username' => 'DINAS PENDIDIKAN',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto3.png',
        'email' => 'dindikkbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 16
    // ============================
    User::create([
        'id' => 14,
        'name'  => 'DINAS PANGAN, PERTANIAN, PETERNAKAN, DAN PERIKANAN',
        'username' => 'DINAS PANGAN, PERTANIAN, PETERNAKAN, DAN PERIKANAN',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto6.png',
        'email' => 'dinaspangankbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 17
    // ============================
    User::create([
        'id' => 15,
        'name'  => 'DINAS KESEHATAN',
        'username' => 'DINAS KESEHATAN',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto1.png',
        'email' => 'dinkeskbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 20
    // ============================
    User::create([
        'id' => 16,
        'name'  => 'DINAS PERDAGANGAN, KOPERASI USAHA KECIL DAN MENENGAH',
        'username' => 'DINAS PERDAGANGAN, KOPERASI USAHA KECIL DAN MENENGAH',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto4.png',
        'email' => 'dinkopkbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 21
    // ============================
    User::create([
        'id' => 17,
        'name'  => 'SEKRETARIAT DAERAH',
        'username' => 'SEKRETARIAT DAERAH',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto5.png',
        'email' => 'stdakbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 23
    // ============================
    User::create([
        'id' => 18,
        'name'  => 'DINAS LINGKUNGAN HIDUP',
        'username' => 'DINAS LINGKUNGAN HIDUP',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto1.png',
        'email' => 'dlhkbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 24
    // ============================
    User::create([
        'id' => 19,
        'name'  => 'DINAS KOMUNIKASI DAN INFORMATIKA',
        'username' => 'DINAS KOMUNIKASI DAN INFORMATIKA',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto2.png',
        'email' => 'dinkominfokbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 25
    // ============================
    User::create([
        'id' => 20,
        'name'  => 'BADAN PERENCANAAN PEMBANGUNAN DAERAH',
        'username' => 'BADAN PERENCANAAN PEMBANGUNAN DAERAH',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto3.png',
        'email' => 'dinasperencanaankbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 27
    // ============================
    User::create([
        'id' => 21,
        'name'  => 'DINAS KEPEMUDAAN, OLAH RAGA, KEBUDAYAAN DAN PARIWISATA',
        'username' => 'DINAS KEPEMUDAAN, OLAH RAGA, KEBUDAYAAN DAN PARIWISATA',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto5.png',
        'email' => 'disporakbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);


    // ============================
    //  USER ID 30
    // ============================
    User::create([
        'id' => 22,
        'name'  => 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA',
        'username' => 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto2.png',
        'email' => 'dinaspendudukkbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 31
    // ============================
    User::create([
        'id' => 23,
        'name'  => 'DINAS SOSIAL PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK',
        'username' => 'DINAS SOSIAL PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto3.png',
        'email' => 'dinsoskbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 35
    // ============================
    User::create([
        'id' => 24,
        'name'  => 'DINAS PERINDUSTRIAN DAN TENAGA KERJA',
        'username' => 'DINAS PERINDUSTRIAN DAN TENAGA KERJA',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto1.png',
        'email' => 'dinindustrikbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 37
    // ============================
    User::create([
        'id' => 25,
        'name'  => 'SEKRETARIAT DEWAN',
        'username' => 'SEKRETARIAT DEWAN',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto3.png',
        'email' => 'sekwankbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 38
    // ============================
    User::create([
        'id' => 26,
        'name'  => 'BADAN KEPEGAWAIAN DAERAH',
        'username' => 'BADAN KEPEGAWAIAN DAERAH',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto4.png',
        'email' => 'bpdkbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);

    // ============================
    //  USER ID 40 (TERAKHIR)
    // ============================
    User::create([
        'id' => 27,
        'name'  => 'INSPEKTORAT DAERAH',
        'username' => 'INSPEKTORAT DAERAH',
        'statusadmin_id' => 9,
        'avatar' => 'user/avatar/foto6.png',
        'email' => 'inspektoratkbb@gmail.com',
        'password' => bcrypt('sipjakikbbadmin'),
    ]);



// ------------
paketpekerjaanmasjaki::create([
    'profiljenispekerjaan_id' => 5,
    'paketstatuspekerjaan_id' => 2,
    'sumberdana_id' => 1,
    'tahunpilihan_id' => 11,
    'user_id' => 11,
    'bulanrekap_id' => 1,
    'namapekerjaan' => 'Pembangunan Drainase Lingkungan Kabupaten Bandung Barat',
    'cvptpenyedia' => 'PT Maju Jaya KBB',
    'nib' => '8123456789012',
    'nilaikontrak' => 450000000.00,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Januari',
    'bulanselesai' => 'Maret',
    'progress' => 100
]);

paketpekerjaanmasjaki::create([
    'profiljenispekerjaan_id' => 12,
    'paketstatuspekerjaan_id' => 3,
    'sumberdana_id' => 2,
    'tahunpilihan_id' => 11,
    'user_id' => 12,
    'bulanrekap_id' => 2,
    'namapekerjaan' => 'Rehabilitasi Gedung Kantor Kecamatan Lembang',
    'cvptpenyedia' => 'CV Karya Barokah',
    'nib' => '7123456789012',
    'nilaikontrak' => 875000000.00,
    'jeniskontrak' => 'Harga Borongan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Februari',
    'bulanselesai' => 'April',
    'progress' => 100
]);

paketpekerjaanmasjaki::create([
    'profiljenispekerjaan_id' => 7,
    'paketstatuspekerjaan_id' => 1,
    'sumberdana_id' => 3,
    'tahunpilihan_id' => 11,
    'user_id' => 13,
    'bulanrekap_id' => 3,
    'namapekerjaan' => 'Peningkatan Jalan Cisarua – Parongpong',
    'cvptpenyedia' => 'PT Konstruksi Prima',
    'nib' => '6234567890123',
    'nilaikontrak' => 1250000000.00,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Maret',
    'bulanselesai' => 'Juli',
    'progress' => 100
]);

paketpekerjaanmasjaki::create([
    'profiljenispekerjaan_id' => 16,
    'paketstatuspekerjaan_id' => 4,
    'sumberdana_id' => 2,
    'tahunpilihan_id' => 11,
    'user_id' => 14,
    'bulanrekap_id' => 4,
    'namapekerjaan' => 'Pengadaan Sarana Air Bersih Kabupaten Bandung Barat',
    'cvptpenyedia' => 'CV Tirta Mandiri',
    'nib' => '5345678901234',
    'nilaikontrak' => 380000000.00,
    'jeniskontrak' => 'Harga Borongan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'April',
    'bulanselesai' => 'Juni',
    'progress' => 100
]);

paketpekerjaanmasjaki::create([
    'profiljenispekerjaan_id' => 20,
    'paketstatuspekerjaan_id' => 2,
    'sumberdana_id' => 4,
    'tahunpilihan_id' => 11,
    'user_id' => 15,
    'bulanrekap_id' => 5,
    'namapekerjaan' => 'Pemeliharaan Rutin Irigasi Pertanian Ngamprah',
    'cvptpenyedia' => 'PT Agro Karya',
    'nib' => '4456789012345',
    'nilaikontrak' => 220000000.00,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Mei',
    'bulanselesai' => 'Juni',
    'progress' => 100
]);

paketpekerjaanmasjaki::create([
    'profiljenispekerjaan_id' => 3,
    'paketstatuspekerjaan_id' => 1,
    'sumberdana_id' => 1,
    'tahunpilihan_id' => 11,
    'user_id' => 16,
    'bulanrekap_id' => 6,
    'namapekerjaan' => 'Pembangunan Jembatan Desa Sukajaya',
    'cvptpenyedia' => 'CV Mitra Konstruksi',
    'nib' => '3567890123456',
    'nilaikontrak' => 980000000.00,
    'jeniskontrak' => 'Harga Borongan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Juni',
    'bulanselesai' => 'September',
    'progress' => 100
]);

paketpekerjaanmasjaki::create([
    'profiljenispekerjaan_id' => 9,
    'paketstatuspekerjaan_id' => 3,
    'sumberdana_id' => 3,
    'tahunpilihan_id' => 11,
    'user_id' => 17,
    'bulanrekap_id' => 7,
    'namapekerjaan' => 'Pembangunan TPS3R Kecamatan Padalarang',
    'cvptpenyedia' => 'PT Bersih Mandiri',
    'nib' => '2678901234567',
    'nilaikontrak' => 540000000.00,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Juli',
    'bulanselesai' => 'Oktober',
    'progress' => 100
]);

paketpekerjaanmasjaki::create([
    'profiljenispekerjaan_id' => 11,
    'paketstatuspekerjaan_id' => 2,
    'sumberdana_id' => 1,
    'tahunpilihan_id' => 11,
    'user_id' => 18,
    'bulanrekap_id' => 8,
    'namapekerjaan' => 'Rehabilitasi Sekolah Dasar Negeri di Batujajar',
    'cvptpenyedia' => 'CV Pendidikan Jaya',
    'nib' => '1789012345678',
    'nilaikontrak' => 760000000.00,
    'jeniskontrak' => 'Harga Borongan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Agustus',
    'bulanselesai' => 'November',
    'progress' => 100
]);

paketpekerjaanmasjaki::create([
    'profiljenispekerjaan_id' => 22,
    'paketstatuspekerjaan_id' => 4,
    'sumberdana_id' => 2,
    'tahunpilihan_id' => 11,
    'user_id' => 19,
    'bulanrekap_id' => 9,
    'namapekerjaan' => 'Pemasangan PJU Jalan Utama Kabupaten Bandung Barat',
    'cvptpenyedia' => 'PT Cahaya Nusantara',
    'nib' => '0890123456789',
    'nilaikontrak' => 630000000.00,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'September',
    'bulanselesai' => 'Desember',
    'progress' => 100
]);

paketpekerjaanmasjaki::create([
    'profiljenispekerjaan_id' => 14,
    'paketstatuspekerjaan_id' => 1,
    'sumberdana_id' => 4,
    'tahunpilihan_id' => 11,
    'user_id' => 20,
    'bulanrekap_id' => 10,
    'namapekerjaan' => 'Penataan Kawasan Wisata Curug Cimahi',
    'cvptpenyedia' => 'CV Pesona Alam',
    'nib' => '1901234567890',
    'nilaikontrak' => 1450000000.00,
    'jeniskontrak' => 'Harga Borongan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Oktober',
    'bulanselesai' => 'Desember',
    'progress' => 100
]);


agendapelatihan::create([
            'materipelatihan_id'   => null,
            'kategoripelatihan_id' => 2,
            'pesertapelatihan_id'  => null,
            'user_id'              => 7, // contoh user id
            'jampelajaran_id'      => null,

            'namakegiatan'         => 'Pelatihan Dasar Konstruksi',
            'asosiasimasjaki_id'   => 1, // contoh data asosiasi
            'penutupan'            => '2025-01-30',
            'waktupelaksanaan'     => '2025-01-25',
            'jumlahpeserta'        => 35,
            'lokasi'               => 'Aula Dinas DPUTR Kabupaten Bandung Barat',
            'keterangan'           => 'Pelatihan peningkatan kompetensi tenaga kerja konstruksi.',
            'isiagenda'            => 'Pembukaan, sesi materi konstruksi dasar, praktik lapangan, penutupan.',
            'foto'                 => '04_pembinaan/03_sertifikasi/foto_default.jpg',
            'barcodepelatihan'     => 'barcode/default_barcode.png',
            'suratundangan'        => '04_pembinaan/03_sertifikasi/suratundangan_default.pdf',
        ]);

kategoripelatihan::create([
            'kategoripelatihan'   => 'Sosialisasi',
        ]);

kategoripelatihan::create([
            'kategoripelatihan'   => 'Workshop',
        ]);

kategoripelatihan::create([
            'kategoripelatihan'   => 'Bimbingan Teknis',
        ]);

        pesertapelatihan::create([
    'agendapelatihan_id'   => 1,
    'namalengkap'          => 'Sigit Septiadi',
    'jenjangpendidikan_id' => 3,
    'nik'                  => '12345678912031245',
    'jeniskelamin'         => 'Laki-laki',
    'tanggallahir'         => '1995-08-21',
    'notelepon'            => '081654654654',
    'instansi'             => 'DPUTR Kabupaten Bandung Barat',
]);

 shstblora::create([
        'kabupaten' => 'Bandung Barat',
        'bangunankantortidaksederhana' => '6080000',
        'bangunankantorsederhana' => '5050000',
        'rumahnegaratipea' => '5940000',
        'rumahnegaratipeb' => '5370000',
        'rumahnegaratipecde' => '4630000',
        'pagarrumahdepan' => '2730000',
        'pagarrumahbelakang' => '2090000',
        'pagarrumahsamping' => '1440000',
        'pagarrumahnegaradepan' => '2310000',
        'pagarrumahnegarabelakang' => '2030000',
        'pagarrumahnegarasamping' => '1380000',
    ]);




//======================== ===================================================================================
// SATUAN HARGA UPAH MAS JAKI BLORA
// satuanhargaperalatan::create([
//     'uraian' => 'Pekerja',
//     'kode' => 'L.01',
//     'satuan' => 'Orang/Hari',
//     'besaran' => '96000',
//     'besaranperjam' => '13714.00',
//     // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
// ]);


satuanhargaperalatan::create([
    'uraian' => 'Alat bantu',
    'kode' => 'A.01',
    'satuan' => 'set',
    'besaran' => '50000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asphalt Distributor',
    'kode' => 'A.02',
    'satuan' => 'jam',
    'besaran' => '307300',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asphalt Finisher',
    'kode' => 'A.03',
    'satuan' => 'jam',
    'besaran' => '602500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asphalt Liquid Mixer 1000 ℓ',
    'kode' => 'A.04',
    'satuan' => 'jam',
    'besaran' => '61100',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asphalt Mixing Plant',
    'kode' => 'A.05',
    'satuan' => 'jam',
    'besaran' => '6253800',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asphalt Sprayer 850 ℓ',
    'kode' => 'A.06',
    'satuan' => 'jam',
    'besaran' => '74900',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bender Baja Beton',
    'kode' => 'A.07',
    'satuan' => 'hari',
    'besaran' => '850000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Blending Equipment',
    'kode' => 'A.08',
    'satuan' => 'jam',
    'besaran' => '235000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bore Pile Machine',
    'kode' => 'A.09',
    'satuan' => 'jam',
    'besaran' => '476900',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bulldozer 100–150 HP',
    'kode' => 'A.10',
    'satuan' => 'jam',
    'besaran' => '912500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Chain Saw',
    'kode' => 'A.11',
    'satuan' => 'jam',
    'besaran' => '60200',
]);

satuanhargaperalatan::create([
    'uraian' => 'Chainsaw 20” 5,5HP',
    'kode' => 'A.12',
    'satuan' => 'hari',
    'besaran' => '300000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Chainsaw 30” 7,5HP',
    'kode' => 'A.13',
    'satuan' => 'hari',
    'besaran' => '300000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Cold Milling Machine',
    'kode' => 'A.14',
    'satuan' => 'jam',
    'besaran' => '648500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Colt T-120 (D); R-Blk. 4; 12 m³',
    'kode' => 'A.15',
    'satuan' => 'jam',
    'besaran' => '314110.76',
]);

satuanhargaperalatan::create([
    'uraian' => 'Compressor 4000–6500 ℓ/m',
    'kode' => 'A.16',
    'satuan' => 'jam',
    'besaran' => '185500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Compressor Bor',
    'kode' => 'A.17',
    'satuan' => 'unit',
    'besaran' => '700000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete Mixer 350 ℓ',
    'kode' => 'A.18',
    'satuan' => 'jam',
    'besaran' => '94600',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete Mixer 500 ℓ',
    'kode' => 'A.19',
    'satuan' => 'jam',
    'besaran' => '103400',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete Mixer Truck 5 m³',
    'kode' => 'A.20',
    'satuan' => 'jam',
    'besaran' => '576100',
]);


satuanhargaperalatan::create([
    'uraian' => 'Concrete pan mixer',
    'kode' => 'A.21',
    'satuan' => 'jam',
    'besaran' => '800700',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete pump',
    'kode' => 'A.22',
    'satuan' => 'jam',
    'besaran' => '296800',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete slip form paver',
    'kode' => 'A.23',
    'satuan' => 'jam',
    'besaran' => '582400',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete vibrator',
    'kode' => 'A.24',
    'satuan' => 'hari',
    'besaran' => '800000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane on track 35 ton',
    'kode' => 'A.25',
    'satuan' => 'jam',
    'besaran' => '440800',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane Truck 3 ton; Winch 5 Ton',
    'kode' => 'A.26',
    'satuan' => 'jam',
    'besaran' => '430662.86',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane on wheel 10-15 ton',
    'kode' => 'A.27',
    'satuan' => 'jam',
    'besaran' => '359800',
]);

satuanhargaperalatan::create([
    'uraian' => 'Cutter baja beton',
    'kode' => 'A.28',
    'satuan' => 'hari',
    'besaran' => '800000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Cutting machine',
    'kode' => 'A.29',
    'satuan' => 'jam',
    'besaran' => '55100',
]);

satuanhargaperalatan::create([
    'uraian' => 'Depresiasi alat compressor',
    'kode' => 'A.30',
    'satuan' => 'hari',
    'besaran' => '425000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Depresiasi mesin pompa uji',
    'kode' => 'A.31',
    'satuan' => 'hari',
    'besaran' => '42000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Depresiasi peralatan pemboran',
    'kode' => 'A.32',
    'satuan' => 'hari',
    'besaran' => '265000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump truck 1',
    'kode' => 'A.33',
    'satuan' => 'jam',
    'besaran' => '556100',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump truck 2',
    'kode' => 'A.34',
    'satuan' => 'jam',
    'besaran' => '556100',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump truck 3',
    'kode' => 'A.35',
    'satuan' => 'jam',
    'besaran' => '556100',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump truck 20 ton',
    'kode' => 'A.36',
    'satuan' => 'jam',
    'besaran' => '556100',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump truck 3,5 ton',
    'kode' => 'A.37',
    'satuan' => 'jam',
    'besaran' => '304800',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump truck 40 ton',
    'kode' => 'A.38',
    'satuan' => 'jam',
    'besaran' => '676500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump truck 7,5 ton',
    'kode' => 'A.39',
    'satuan' => 'jam',
    'besaran' => '344400',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pick up L300',
    'kode' => 'A.40',
    'satuan' => 'jam',
    'besaran' => '268539.71',
]);


satuanhargaperalatan::create([
    'uraian' => 'Fuso (D); R-Blk. 8; 35 m3',
    'kode' => 'A.41',
    'satuan' => 'jam',
    'besaran' => '418543.76',
]);

satuanhargaperalatan::create([
    'uraian' => 'Flat deck truck 7 ton',
    'kode' => 'A.42',
    'satuan' => 'hari',
    'besaran' => '2700000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Hoist 1 ton',
    'kode' => 'A.43',
    'satuan' => 'hari',
    'besaran' => '180000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Excavator 95 HP',
    'kode' => 'A.44',
    'satuan' => 'jam',
    'besaran' => '480000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Excavator',
    'kode' => 'A.45',
    'satuan' => 'hari',
    'besaran' => '5150000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Excavator 80-140 HP',
    'kode' => 'A.46',
    'satuan' => 'jam',
    'besaran' => '668200',
]);

satuanhargaperalatan::create([
    'uraian' => 'Flat bed truck 3-4 m3',
    'kode' => 'A.47',
    'satuan' => 'jam',
    'besaran' => '465100',
]);

satuanhargaperalatan::create([
    'uraian' => 'Generator set 135 KVA',
    'kode' => 'A.48',
    'satuan' => 'jam',
    'besaran' => '410200',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack hammer',
    'kode' => 'A.49',
    'satuan' => 'hari',
    'besaran' => '350000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack hammer + genset',
    'kode' => 'A.50',
    'satuan' => 'hari',
    'besaran' => '2300000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Genset',
    'kode' => 'A.51',
    'satuan' => 'hari',
    'besaran' => '150000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Logging',
    'kode' => 'A.52',
    'satuan' => 'unit',
    'besaran' => '280000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mata bor auger 20 cm',
    'kode' => 'A.53',
    'satuan' => 'hari',
    'besaran' => '100000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mata bor auger 30 cm',
    'kode' => 'A.54',
    'satuan' => 'hari',
    'besaran' => '170000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mata bor auger 40 cm',
    'kode' => 'A.55',
    'satuan' => 'hari',
    'besaran' => '250000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mata bor auger 50 cm',
    'kode' => 'A.56',
    'satuan' => 'hari',
    'besaran' => '340000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin bor',
    'kode' => 'A.57',
    'satuan' => 'unit',
    'besaran' => '450000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin gilas 2 roda 6 - 10 ton',
    'kode' => 'A.58',
    'satuan' => 'jam',
    'besaran' => '325000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin gilas 3 roda 6 - 10 ton',
    'kode' => 'A.59',
    'satuan' => 'jam',
    'besaran' => '350000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin gilas roda karet 8 - 10 ton',
    'kode' => 'A.60',
    'satuan' => 'jam',
    'besaran' => '415000',
]);


satuanhargaperalatan::create([
    'uraian' => 'Mesin kerek',
    'kode' => 'A.61',
    'satuan' => 'unit',
    'besaran' => '50000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin poles',
    'kode' => 'A.62',
    'satuan' => 'hari',
    'besaran' => '150000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin trowel',
    'kode' => 'A.63',
    'satuan' => 'jam',
    'besaran' => '45000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Gendong',
    'kode' => 'A.64',
    'satuan' => 'jam',
    'besaran' => '150000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Motor grader >100 HP',
    'kode' => 'A.65',
    'satuan' => 'jam',
    'besaran' => '548600',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pedestrian Roller',
    'kode' => 'A.66',
    'satuan' => 'jam',
    'besaran' => '99800',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pile driver + hammer 2,5 ton',
    'kode' => 'A.67',
    'satuan' => 'jam',
    'besaran' => '153400',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pneumatic tire roller 8-10 ton',
    'kode' => 'A.68',
    'satuan' => 'jam',
    'besaran' => '491000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa beton ∅ 2,5", 75KW; 120 bar, T = 50 m/H = 80 m',
    'kode' => 'A.69',
    'satuan' => 'hari',
    'besaran' => '6600000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa beton ∅ 2,5", 20 KW; 20 bar, T = 18 m',
    'kode' => 'A.70',
    'satuan' => 'hari',
    'besaran' => '6300000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa beton ∅ 3", 140KW; 180 bar, T = 75 m / H = 150 m',
    'kode' => 'A.71',
    'satuan' => 'hari',
    'besaran' => '8000000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa beton φ 1,5"; 5 KW; 8 bar; T = 5 m',
    'kode' => 'A.72',
    'satuan' => 'hari',
    'besaran' => '6000000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa injeksi',
    'kode' => 'A.73',
    'satuan' => 'unit',
    'besaran' => '300000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa tangan',
    'kode' => 'A.74',
    'satuan' => 'unit',
    'besaran' => '160000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Road Marking Machine',
    'kode' => 'A.75',
    'satuan' => 'jam',
    'besaran' => '491000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa alat cutting machine',
    'kode' => 'A.76',
    'satuan' => 'hari',
    'besaran' => '25000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa alat las',
    'kode' => 'A.77',
    'satuan' => 'hari',
    'besaran' => '25000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat las listrik',
    'kode' => 'A.78',
    'satuan' => 'jam',
    'besaran' => '3125',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat las listrik 150 A',
    'kode' => 'A.79',
    'satuan' => 'jam',
    'besaran' => '3125',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat las listrik 250 A',
    'kode' => 'A.80',
    'satuan' => 'jam',
    'besaran' => '3125',
]);


satuanhargaperalatan::create([
    'uraian' => 'Alat las listrik 350 A',
    'kode' => 'A.81',
    'satuan' => 'jam',
    'besaran' => '3125',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat las listrik 500 A',
    'kode' => 'A.82',
    'satuan' => 'jam',
    'besaran' => '3125',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las Gotextile',
    'kode' => 'A.83',
    'satuan' => 'hari',
    'besaran' => '25000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Kunci Momen',
    'kode' => 'A.84',
    'satuan' => 'hari',
    'besaran' => '20000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa bor horisontal',
    'kode' => 'A.85',
    'satuan' => 'hari',
    'besaran' => '150000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Scaffolding Pipe brancing 3 m',
    'kode' => 'A.86',
    'satuan' => 'bulan',
    'besaran' => '8800',
]);

satuanhargaperalatan::create([
    'uraian' => 'Scaffolding Pipe brancing 6 m',
    'kode' => 'A.87',
    'satuan' => 'bulan',
    'besaran' => '17600',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Scaffolding',
    'kode' => 'A.88',
    'satuan' => 'hari',
    'besaran' => '586.67',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Gondola',
    'kode' => 'A.89',
    'satuan' => 'hari',
    'besaran' => '322000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Pipe Support',
    'kode' => 'A.90',
    'satuan' => 'hari',
    'besaran' => '850',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper',
    'kode' => 'A.91',
    'satuan' => 'jam',
    'besaran' => '35000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sprayer Gendong',
    'kode' => 'A.92',
    'satuan' => 'hari',
    'besaran' => '350000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper Kodok 150 kg',
    'kode' => 'A.93',
    'satuan' => 'hari',
    'besaran' => '350000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper Kuda',
    'kode' => 'A.94',
    'satuan' => 'hari',
    'besaran' => '290000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper D-Drum',
    'kode' => 'A.95',
    'satuan' => 'hari',
    'besaran' => '310000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper Smooth_Drum',
    'kode' => 'A.96',
    'satuan' => 'hari',
    'besaran' => '350000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stang bor, batang bor dia. 1-1/4"',
    'kode' => 'A.97',
    'satuan' => 'hari',
    'besaran' => '95000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stone crusher',
    'kode' => 'A.98',
    'satuan' => 'jam',
    'besaran' => '799500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tandem roller 6-8 ton',
    'kode' => 'A.99',
    'satuan' => 'jam',
    'besaran' => '469500',
]);


satuanhargaperalatan::create([
    'uraian' => 'Theodolit',
    'kode' => 'A.101',
    'satuan' => 'hari',
    'besaran' => '150000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Three wheel roller',
    'kode' => 'A.102',
    'satuan' => 'jam',
    'besaran' => '262300',
]);

satuanhargaperalatan::create([
    'uraian' => 'P. Tyre Roller',
    'kode' => 'A.103',
    'satuan' => 'jam',
    'besaran' => '275000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tower crane arm 30 m',
    'kode' => 'A.104',
    'satuan' => 'hari',
    'besaran' => '3442900',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane',
    'kode' => 'A.105',
    'satuan' => 'hari',
    'besaran' => '3442900',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane',
    'kode' => 'A.106',
    'satuan' => 'jam',
    'besaran' => '430000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Crane kapasitas 1 ton',
    'kode' => 'A.107',
    'satuan' => 'jam',
    'besaran' => '430000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Transportasi peralatan drailler',
    'kode' => 'A.108',
    'satuan' => 'unit',
    'besaran' => '500000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Vibratory plate tamper',
    'kode' => 'A.109',
    'satuan' => 'jam',
    'besaran' => '58800',
]);

satuanhargaperalatan::create([
    'uraian' => 'Vibratory roller 1 ton',
    'kode' => 'A.110',
    'satuan' => 'jam',
    'besaran' => '95000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Vibratory roller 5-8 ton',
    'kode' => 'A.111',
    'satuan' => 'jam',
    'besaran' => '392200',
]);

satuanhargaperalatan::create([
    'uraian' => 'Water pump 70-100 mm',
    'kode' => 'A.112',
    'satuan' => 'jam',
    'besaran' => '71700',
]);

satuanhargaperalatan::create([
    'uraian' => 'Water tanker truck 3000-4000 L',
    'kode' => 'A.113',
    'satuan' => 'jam',
    'besaran' => '255200',
]);

satuanhargaperalatan::create([
    'uraian' => 'Water Truck',
    'kode' => 'A.114',
    'satuan' => 'hari',
    'besaran' => '1550000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Waterpass',
    'kode' => 'A.115',
    'satuan' => 'hari',
    'besaran' => '75000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Wheel loader',
    'kode' => 'A.116',
    'satuan' => 'jam',
    'besaran' => '472400',
]);

satuanhargaperalatan::create([
    'uraian' => 'AMP',
    'kode' => 'A.117',
    'satuan' => 'jam',
    'besaran' => '3981125',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asphalt Finisher',
    'kode' => 'A.118',
    'satuan' => 'jam',
    'besaran' => '450000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Wheel loader 1,0-1,6 m³',
    'kode' => 'A.119',
    'satuan' => 'jam',
    'besaran' => '472400',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat pancang Hammer 0.5 ton',
    'kode' => 'A.120',
    'satuan' => 'hari',
    'besaran' => '350000',
]);


satuanhargaperalatan::create([
    'uraian' => 'Alat Pancang Mini Pile',
    'kode' => 'A.121',
    'satuan' => 'hari',
    'besaran' => '250000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat pancang Hidraulik Pile Driver',
    'kode' => 'A.122',
    'satuan' => 'hari',
    'besaran' => '487000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat penyambung tiang pancang dolken',
    'kode' => 'A.123',
    'satuan' => 'hari',
    'besaran' => '350000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat Penyambung Balok',
    'kode' => 'A.124',
    'satuan' => 'buah',
    'besaran' => '200000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat Penyambung Beton',
    'kode' => 'A.125',
    'satuan' => 'buah',
    'besaran' => '250000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat Penyambung Beton dia. 30 cm',
    'kode' => 'A.126',
    'satuan' => 'buah',
    'besaran' => '250000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat Penyambung Beton dia. 35 cm',
    'kode' => 'A.127',
    'satuan' => 'buah',
    'besaran' => '255000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat sambung kayu terbuat dari baja',
    'kode' => 'A.128',
    'satuan' => 'buah',
    'besaran' => '250000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sepatu pancang',
    'kode' => 'A.129',
    'satuan' => 'buah',
    'besaran' => '124500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sepatu pancang beton',
    'kode' => 'A.130',
    'satuan' => 'buah',
    'besaran' => '124500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sepatu Pancang dia. 30 cm',
    'kode' => 'A.131',
    'satuan' => 'buah',
    'besaran' => '135000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sepatu Pancang dia. 35 cm',
    'kode' => 'A.132',
    'satuan' => 'buah',
    'besaran' => '140000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crawler Crane 10 Ton + Ladder 14 ton',
    'kode' => 'A.133',
    'satuan' => 'jam',
    'besaran' => '500000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crawler Crane 20 Ton + Ladder 14 ton',
    'kode' => 'A.134',
    'satuan' => 'jam',
    'besaran' => '550000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Driver Hammer',
    'kode' => 'A.135',
    'satuan' => 'jam',
    'besaran' => '50000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Driver Hammer 2 ton',
    'kode' => 'A.136',
    'satuan' => 'jam',
    'besaran' => '50000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Mesin Hydroseeding 2000L',
    'kode' => 'A.137',
    'satuan' => 'liter',
    'besaran' => '350000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Angkur/mur/baut',
    'kode' => 'A.138',
    'satuan' => 'set',
    'besaran' => '45000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Angkur M16',
    'kode' => 'A.139',
    'satuan' => 'buah',
    'besaran' => '18500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Beton Neser',
    'kode' => 'A.140',
    'satuan' => 'batang',
    'besaran' => '52000',
]);

satuanhargaperalatan::create([
    'uraian' => 'BP (Biaya Penyambungan)',
    'kode' => 'A.141',
    'satuan' => 'VA',
    'besaran' => '969',
]);

satuanhargaperalatan::create([
    'uraian' => 'Cutting stiker + pasang',
    'kode' => 'A.142',
    'satuan' => 'buah',
    'besaran' => '15000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Gergaji besi',
    'kode' => 'A.143',
    'satuan' => 'buah',
    'besaran' => '3500',
]);

satuanhargaperalatan::create([
    'uraian' => 'GIL (Gambar Instalasi Langganan), administrasi pemasangan',
    'kode' => 'A.144',
    'satuan' => 'VA',
    'besaran' => '850',
]);

satuanhargaperalatan::create([
    'uraian' => 'Linggis (baja keras)',
    'kode' => 'A.145',
    'satuan' => 'buah',
    'besaran' => '30000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin bor (jam)',
    'kode' => 'A.146',
    'satuan' => 'jam',
    'besaran' => '85000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen beton mixer 350 liter',
    'kode' => 'A.147',
    'satuan' => 'hari',
    'besaran' => '300000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Molen 1m3',
    'kode' => 'A.148',
    'satuan' => 'hari',
    'besaran' => '300000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pahat beton (baja keras)',
    'kode' => 'A.149',
    'satuan' => 'buah',
    'besaran' => '15000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Palu/godam (baja keras)',
    'kode' => 'A.150',
    'satuan' => 'buah',
    'besaran' => '25000',
]);


satuanhargaperalatan::create([
    'uraian' => 'Perapian lokasi kerja',
    'kode' => 'A.151',
    'satuan' => 'ls',
    'besaran' => '20000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pisau Gerinda',
    'kode' => 'A.152',
    'satuan' => 'buah',
    'besaran' => '52000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa Air, diesel 10 KW',
    'kode' => 'A.153',
    'satuan' => 'hari',
    'besaran' => '500000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa Air, diesel 20 KW',
    'kode' => 'A.154',
    'satuan' => 'hari',
    'besaran' => '1000000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa Air, diesel 5 KW',
    'kode' => 'A.155',
    'satuan' => 'hari',
    'besaran' => '250000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa Sedot',
    'kode' => 'A.156',
    'satuan' => 'hari',
    'besaran' => '280000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa Sedot Pasir',
    'kode' => 'A.157',
    'satuan' => 'hari',
    'besaran' => '280000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa Lumpur',
    'kode' => 'A.158',
    'satuan' => 'hari',
    'besaran' => '260000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mobil Sedot Lumpur',
    'kode' => 'A.159',
    'satuan' => 'jam',
    'besaran' => '67500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Boom Lift',
    'kode' => 'A.160',
    'satuan' => 'hari',
    'besaran' => '3300000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa submesible',
    'kode' => 'A.161',
    'satuan' => 'unit',
    'besaran' => '1920000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pressure grout machine 30 KW; 60-75 bar (D)',
    'kode' => 'A.162',
    'satuan' => 'jam',
    'besaran' => '42000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa alat cutting machine',
    'kode' => 'A.163',
    'satuan' => 'hari',
    'besaran' => '44000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa bekisting',
    'kode' => 'A.164',
    'satuan' => 'hari',
    'besaran' => '7500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa bekisting rigid',
    'kode' => 'A.165',
    'satuan' => 'hari',
    'besaran' => '7500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa bor horisontal',
    'kode' => 'A.166',
    'satuan' => 'hari',
    'besaran' => '150000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa mobil crane',
    'kode' => 'A.167',
    'satuan' => 'hari',
    'besaran' => '1450000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa mobil crane kapasitas 15 Ton',
    'kode' => 'A.168',
    'satuan' => 'hari',
    'besaran' => '3400000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa mobil crane kapasitas 25 Ton',
    'kode' => 'A.169',
    'satuan' => 'hari',
    'besaran' => '6250000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa mobil crane kapasitas 5 Ton',
    'kode' => 'A.170',
    'satuan' => 'hari',
    'besaran' => '1450000',
]);


satuanhargaperalatan::create([
    'uraian' => 'Sewa tangga 7 meter',
    'kode' => 'A.171',
    'satuan' => 'buah',
    'besaran' => '50000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa tangga 7 meter',
    'kode' => 'A.172',
    'satuan' => 'hari',
    'besaran' => '50000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tandon Air kap. 2 m3',
    'kode' => 'A.173',
    'satuan' => 'hari',
    'besaran' => '25000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tangga Service',
    'kode' => 'A.174',
    'satuan' => 'buah',
    'besaran' => '1144000',
]);

satuanhargaperalatan::create([
    'uraian' => 'SLO (Sertifikat Laik Operasi)',
    'kode' => 'A.175',
    'satuan' => 'VA',
    'besaran' => '30',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tripod tinggi 5 m',
    'kode' => 'A.176',
    'satuan' => 'hari',
    'besaran' => '250000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Truck Crane 5 ton',
    'kode' => 'A.177',
    'satuan' => 'jam',
    'besaran' => '525000',
]);

satuanhargaperalatan::create([
    'uraian' => 'UJL (Uang Jaminan Langganan)',
    'kode' => 'A.178',
    'satuan' => 'VA',
    'besaran' => '165',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa casing PVC dia. 20 cm',
    'kode' => 'A.179',
    'satuan' => 'm',
    'besaran' => '25000',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa casing pipa baja dia. 30 cm',
    'kode' => 'A.180',
    'satuan' => 'm',
    'besaran' => '30700',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa casing pipa baja dia. 40 cm',
    'kode' => 'A.181',
    'satuan' => 'm',
    'besaran' => '43500',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa casing pipa baja dia. 50 cm',
    'kode' => 'A.182',
    'satuan' => 'm',
    'besaran' => '55800',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pengelasan',
    'kode' => 'A.183',
    'satuan' => 'cm',
    'besaran' => '332',
]);

satuanhargaperalatan::create([
    'uraian' => 'Baja Strip',
    'kode' => 'A.184',
    'satuan' => 'kg',
    'besaran' => '28000',
]);

//--------------------------------------------
//--------------------------------------------
satuanhargaupahtenagakerja::create([
    'uraian' => 'Pekerja',
    'kode' => 'L.01',
    'satuan' => 'OH',
    'besaran' => '100000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang batu',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang kayu',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang besi',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang cat',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang pelitur',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang pipa',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang penganyam bronjong',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang tebas',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang las',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang las geotextile',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang listrik',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang alumunium',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang kaca',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang erection',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang tanam',
    'kode' => 'L.02',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang Tanam',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '181250',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Kepala Tukang Tanam',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '218750',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang pemelihara taman',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang pemelihara taman (115% Pekerja)',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '115000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang gali',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '120000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang aspal',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '120000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Kepala tukang',
    'kode' => 'L.03',
    'satuan' => 'OH',
    'besaran' => '175000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Mandor',
    'kode' => 'L.04',
    'satuan' => 'OH',
    'besaran' => '200000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Juru ukur',
    'kode' => 'L.05',
    'satuan' => 'OH',
    'besaran' => '175000',
]);

//--------------------------------------------
satuanhargaupahtenagakerja::create([
    'uraian' => 'Pembantu juru ukur',
    'kode' => 'L.06',
    'satuan' => 'OH',
    'besaran' => '150000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Mekanik alat berat',
    'kode' => 'L.07',
    'satuan' => 'OH',
    'besaran' => '220000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Operator alat berat',
    'kode' => 'L.08',
    'satuan' => 'OH',
    'besaran' => '250000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Pembantu operator alat berat',
    'kode' => 'L.09',
    'satuan' => 'OH',
    'besaran' => '130000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Sopir',
    'kode' => 'L.10',
    'satuan' => 'OH',
    'besaran' => '200000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Kenek',
    'kode' => 'L.11',
    'satuan' => 'OH',
    'besaran' => '135000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Administrasi bor',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '110000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Ahli geologist',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '400000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Ahli topografi',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '400000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Crew driller',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '125000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Driller',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '140000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Juru gambar',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '150000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Koordinator driller',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '155000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Operator pompa',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '130000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Pembantu driller',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '130000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Pembantu mekanik alat berat',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '130000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Supir kendaraan < 2 ton (termasuk sedan)',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '160000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga Terampil Operator',
    'kode' => 'L.14.b',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga Ahli Muda',
    'kode' => '',
    'satuan' => 'OH',
    'besaran' => '145000',
]);

/// SATUAN HARGA MATERIAL KABUPATEN BANDUNGH BARAT
/// ======================================================
satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Agregat kasar',
    'satuan' => 'm3',
    'besaran' => 385000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Agregar Kasar',
    'satuan' => 'kg',
    'besaran' => 226.47,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Agg Pokok',
    'satuan' => 'm3',
    'besaran' => 350000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Agg Pengunci',
    'satuan' => 'm3',
    'besaran' => 360000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Agg Penutup',
    'satuan' => 'm3',
    'besaran' => 370000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Bata merah',
    'satuan' => 'buah',
    'besaran' => 700,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Bata merah 5 x 11 x 22 cm (per m3)',
    'satuan' => 'm3',
    'besaran' => 590000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Bata ringan',
    'satuan' => 'm3',
    'besaran' => 703500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Bata ringan t=10 cm',
    'satuan' => 'm3',
    'besaran' => 685800,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Bata ringan tebal 10 cm',
    'satuan' => 'buah',
    'besaran' => 11000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Bata ringan tebal 20 cm',
    'satuan' => 'buah',
    'besaran' => 20000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Bata ringan tebal 7,5 cm',
    'satuan' => 'buah',
    'besaran' => 8500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Bata rooster',
    'satuan' => 'buah',
    'besaran' => 15000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Bata Berongga Uk. 12x11x24',
    'satuan' => 'buah',
    'besaran' => 15000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu alam andesit bakar',
    'satuan' => 'm2',
    'besaran' => 179300,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu alam andesit non bakar',
    'satuan' => 'm2',
    'besaran' => 177500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu belah (base camp - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 339861,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu belah (quarry - base camp)',
    'satuan' => 'm3',
    'besaran' => 235000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu belah (quarry - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 286500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasangan batu ukuran 20/50 t=40cm',
    'satuan' => 'm3',
    'besaran' => 286500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Fondasi pasangan batu',
    'satuan' => 'm3',
    'besaran' => 286500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu belah (quarry)',
    'satuan' => 'm3',
    'besaran' => 127500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu candi',
    'satuan' => 'm2',
    'besaran' => 152000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu kali (quarry - base camp)',
    'satuan' => 'm3',
    'besaran' => 187400,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu kali (quarry)',
    'satuan' => 'm3',
    'besaran' => 142500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu Muka ukuran 12x18 cm',
    'satuan' => 'm2',
    'besaran' => 97500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu',
    'satuan' => 'm3',
    'besaran' => 97500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu paras',
    'satuan' => 'm3',
    'besaran' => 125000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu pecah',
    'satuan' => 'kg',
    'besaran' => 210,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu pecah 3/5',
    'satuan' => 'm3',
    'besaran' => 363800,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu pecah 5/7',
    'satuan' => 'm3',
    'besaran' => 351800,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu putih',
    'satuan' => 'm2',
    'besaran' => 123000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu putih breksi',
    'satuan' => 'm2',
    'besaran' => 117700,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu sikat',
    'satuan' => 'kg',
    'besaran' => 6000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu split 1/2',
    'satuan' => 'm3',
    'besaran' => 370200,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu split 2/3',
    'satuan' => 'm3',
    'besaran' => 352300,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Koral Beton',
    'satuan' => 'm3',
    'besaran' => 352300,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Batu tempel hitam',
    'satuan' => 'm3',
    'besaran' => 121600,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Fly ash',
    'satuan' => 'kg',
    'besaran' => 600,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'HB-10',
    'satuan' => 'buah',
    'besaran' => 12000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'HB-15',
    'satuan' => 'buah',
    'besaran' => 12000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'HB-20',
    'satuan' => 'buah',
    'besaran' => 13000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Kerikil',
    'satuan' => 'kg',
    'besaran' => 210,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Kerikil',
    'satuan' => 'm3',
    'besaran' => 352300,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Koral bulat',
    'satuan' => 'm3',
    'besaran' => 225000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir Beton',
    'satuan' => 'kg',
    'besaran' => 300,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir Beton',
    'satuan' => 'm3',
    'besaran' => 370200,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir beton (Base camp - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 422600,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir beton (quarry - Base camp)',
    'satuan' => 'm3',
    'besaran' => 325200,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir beton (quarry - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 370200,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir beton (quarry)',
    'satuan' => 'm3',
    'besaran' => 170000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir pasang',
    'satuan' => 'm3',
    'besaran' => 200000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir pasang (quarry - base camp)',
    'satuan' => 'm3',
    'besaran' => 200000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir pasang (quarry - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 275000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir pasang (quarry)',
    'satuan' => 'm3',
    'besaran' => 150000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir urug (quarry - base camp)',
    'satuan' => 'm3',
    'besaran' => 165500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir urug (quarry - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 254700,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Pasir Urug (quarry)',
    'satuan' => 'm3',
    'besaran' => 120000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Urukan Pasir Uruk',
    'satuan' => 'm3',
    'besaran' => 488180,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Serbuk batu granit',
    'satuan' => 'kg',
    'besaran' => 12000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Serbuk batu traso',
    'satuan' => 'kg',
    'besaran' => 13000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Sirtu (base camp - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 288700,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Sirtu (quarry - base camp)',
    'satuan' => 'm3',
    'besaran' => 184400,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Sirtu (quarry - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 261800,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Sirtu (quarry)',
    'satuan' => 'm3',
    'besaran' => 120000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Tanah biasa (quarry - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 146900,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Tanah biasa (quarry)',
    'satuan' => 'm3',
    'besaran' => 44000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Tanah liat (quarry)',
    'satuan' => 'm3',
    'besaran' => 64500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Tanah liat (quarry - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 160000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Tanah padas (quarry - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 163600,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Tanah padas (quarry)',
    'satuan' => 'm3',
    'besaran' => 47500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Tanah Pilihan (quarry - lokasi pekerjaan)',
    'satuan' => 'm3',
    'besaran' => 146900,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Tanah Pilihan (quarry)',
    'satuan' => 'm3',
    'besaran' => 48000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 1,
    'uraian' => 'Tanah Subur',
    'satuan' => 'm3',
    'besaran' => 165000,
]);


// KATEGORI 2 KAYU

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Bambu cerucuk Ø 10 cm panjang 600 cm',
    'satuan' => 'batang',
    'besaran' => 17800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Bambu cerucuk Ø 15 cm panjang 600 cm',
    'satuan' => 'batang',
    'besaran' => 22600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Bambu Ø 10 cm panjang 600 cm',
    'satuan' => 'batang',
    'besaran' => 14800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Bambu Ø 6 - 8 cm, pjg 6m',
    'satuan' => 'batang',
    'besaran' => 12900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Bambu panjang 4,5 m',
    'satuan' => 'batang',
    'besaran' => 14500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Bambu panjang 2 meter',
    'satuan' => 'batang',
    'besaran' => 7000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Anyaman Bambu',
    'satuan' => 'lembar',
    'besaran' => 50000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Bilik bambu',
    'satuan' => 'm2',
    'besaran' => 21000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Blockboard tebal 18 mm',
    'satuan' => 'm2',
    'besaran' => 410600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => "Dolken kayu φ 8-10 panjang 400 cm",
    'satuan' => "m'",
    'besaran' => 5000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => "Dolken kayu φ 8-10 panjang 400 cm",
    'satuan' => 'batang',
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu',
    'satuan' => 'm3',
    'besaran' => 11950000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu Balok Borneo',
    'satuan' => 'M3',
    'besaran' => 2700000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu balok 6/12 kelas I',
    'satuan' => 'm3',
    'besaran' => 25000000,
    'keterangan1' => 'Untuk Kayu Jati',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu balok 6/12 kelas II',
    'satuan' => 'm3',
    'besaran' => 11950000,
    'keterangan1' => 'Untuk Kayu Meranti/Kamper',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu balok kelas II',
    'satuan' => 'M3',
    'besaran' => 20000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu balok 6/15 kelas I',
    'satuan' => 'm3',
    'besaran' => 25000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu balok 6/15 kelas II',
    'satuan' => 'm3',
    'besaran' => 11950000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu balok 6/15 kelas II (batang)',
    'satuan' => 'batang',
    'besaran' => 414000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Tiang kayu 8/12 kelas II tinggi 4m',
    'satuan' => 'm3',
    'besaran' => 11950000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Tiang kayu 5/7 kelas II tinggi 3m',
    'satuan' => 'm3',
    'besaran' => 11950000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kaso 5/7',
    'satuan' => 'm3',
    'besaran' => 10214200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kaso 5/7 kayu kelas II',
    'satuan' => 'm3',
    'besaran' => 10214200,
    'keterangan1' => 'Untuk Kayu Bengkirai',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu kaso 5/7 kelas III',
    'satuan' => 'm3',
    'besaran' => 3500000,
    'keterangan1' => 'Untuk Kayu Kruing/Sengon',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu Meranti (papan)',
    'satuan' => 'm3',
    'besaran' => 6966600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Papan Kayu ukuran 2/20 cm',
    'satuan' => 'm3',
    'besaran' => 2500000,
    'keterangan1' => 'Untuk Pagar Sementara',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Papan Cor',
    'satuan' => 'm3',
    'besaran' => 2500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu papan 3/20 cm',
    'satuan' => 'm3',
    'besaran' => 2825000,
    'keterangan1' => 'Untuk Bowplank',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu papan kelas I',
    'satuan' => 'm3',
    'besaran' => 26000000,
    'keterangan1' => 'Untuk Kayu Jati',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu papan kelas II',
    'satuan' => 'm3',
    'besaran' => 14000000,
    'keterangan1' => 'Untuk Kayu Meranti/Kamper',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu papan kelas III',
    'satuan' => 'm3',
    'besaran' => 8000000,
    'keterangan1' => 'Untuk Kayu Kruing/Sengon',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu Papan tebal 9 mm',
    'satuan' => 'M3',
    'besaran' => 4750000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu papan kelas III (m2)',
    'satuan' => 'm2',
    'besaran' => 160000,
    'keterangan1' => 'Untuk Kayu Kruing/Sengon',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu sengon (balok)',
    'satuan' => 'm3',
    'besaran' => 4000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Kayu Sengon (papan)',
    'satuan' => 'm3',
    'besaran' => 3573600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'List kayu 2x4 cm',
    'satuan' => 'm3',
    'besaran' => 6000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'List kayu profil',
    'satuan' => "m'",
    'besaran' => 5000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'List kayu profil kelas II',
    'satuan' => 'M',
    'besaran' => 5500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Multiplek tebal 4 mm',
    'satuan' => 'lembar',
    'besaran' => 116700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Multiplek tebal 9 mm',
    'satuan' => 'lembar',
    'besaran' => 116700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Multiplek tebal 12 mm',
    'satuan' => 'lembar',
    'besaran' => 152600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Multiplek tebal 18 mm',
    'satuan' => 'lembar',
    'besaran' => 226600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Perancah kayu',
    'satuan' => 'm3',
    'besaran' => 2500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Phenol film 12mm',
    'satuan' => 'lembar',
    'besaran' => 230000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Pintu Double teakwood rangka kayu',
    'satuan' => 'm2',
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Pintu panel kayu lapis timbal uk. 1x2 m',
    'satuan' => 'unit',
    'besaran' => 10000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Plywood 12 mm',
    'satuan' => 'lembar',
    'besaran' => 167300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Plywood 4 mm m3',
    'satuan' => 'm3',
    'besaran' => 6298700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Plywood 3 mm',
    'satuan' => 'lembar',
    'besaran' => 62500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Plywood 4 mm',
    'satuan' => 'lembar',
    'besaran' => 75000,
    'keterangan1' => 'Ukuran 122 x 244 cm',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Plywood 6 mm',
    'satuan' => 'lembar',
    'besaran' => 84200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Plywood 9 mm (120x240)',
    'satuan' => 'lembar',
    'besaran' => 127000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Reng 2x3 cm',
    'satuan' => 'm3',
    'besaran' => 8750000,
    'keterangan1' => 'Untuk Kayu Bengkirai',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Reng 3x4 cm',
    'satuan' => 'm3',
    'besaran' => 9302000,
    'keterangan1' => 'Untuk Kayu Bengkirai',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Teakwood 4 mm (120x240)',
    'satuan' => 'lembar',
    'besaran' => 76300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Teakwood 4 mm (90x210)',
    'satuan' => 'lembar',
    'besaran' => 65600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Teakwood 9 mm (90x210)',
    'satuan' => 'lembar',
    'besaran' => 114000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Tripleks t=9mm',
    'satuan' => 'lembar',
    'besaran' => 101200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 2,
    'uraian' => 'Veeneer tebal 2 mm',
    'satuan' => 'm2',
    'besaran' => 150000,
    'keterangan1' => null,
]);

// KATEGORI 3 MATERIAL PVC
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Assesoris PVC',
    'satuan' => "m'",
    'besaran' => 5700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE 40/33 mm',
    'satuan' => "m'",
    'besaran' => 13300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC tipe D Ø 2"',
    'satuan' => "m'",
    'besaran' => 23500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 1"',
    'satuan' => "m'",
    'besaran' => 11250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PIPA PVC AW DN 1" (25 mm) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 11500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW DN 1" (25 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 11700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 1/2" (batang)',
    'satuan' => 'batang',
    'besaran' => 27500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 1/2" (meter)',
    'satuan' => "m'",
    'besaran' => 6875,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PIPA PVC AW DN 1/2" (15 mm) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 6900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW DN 1/2" (15 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 7100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 10"',
    'satuan' => "m'",
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 1-1/2"',
    'satuan' => "m'",
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PIPA PVC AW DN 1-1/2" (40 mm) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 20500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW DN 1-1/2" (40 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 22000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 1-1/4"',
    'satuan' => "m'",
    'besaran' => 18500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PIPA PVC AW DN 1-1/4" (32 mm) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 18900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW DN 1-1/4" (32 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 19000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 12"',
    'satuan' => "m'",
    'besaran' => 177500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW DN 12" (300 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 179000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 14"',
    'satuan' => "m'",
    'besaran' => 200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW DN 14" (350 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 201000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 16"',
    'satuan' => "m'",
    'besaran' => 233750,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW DN 16" (400 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 234000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 2"',
    'satuan' => "m'",
    'besaran' => 26000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PIPA PVC AW DN 2" (50 mm) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 26500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 2" (50 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 28000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 2-1/2"',
    'satuan' => "m'",
    'besaran' => 33625,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 2-1/2" (65 mm) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 33900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 2-1/2" (65 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 40000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 3"',
    'satuan' => "m'",
    'besaran' => 51075,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 3" (80 mm) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 51500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 3" (80 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 53000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 3/4"',
    'satuan' => 'batang',
    'besaran' => 35000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 3/4" (m)',
    'satuan' => "m'",
    'besaran' => 8750,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 3/4" (20 mm) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 8900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 3/4" (20 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 9300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 4"',
    'satuan' => "m'",
    'besaran' => 72375,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 4" (100 mm) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 72700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 4" (100 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 74000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 5"',
    'satuan' => "m'",
    'besaran' => 100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 5" (125 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 101000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 6"',
    'satuan' => "m'",
    'besaran' => 107500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pemasangan 1 m pipa PVC AW, DN. 6" (150 mm)',
    'satuan' => "m'",
    'besaran' => 108000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW Ø 8"',
    'satuan' => "m'",
    'besaran' => 132500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 8" (200 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 133000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 10"',
    'satuan' => "m'",
    'besaran' => 232900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 10" (250 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 233000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC AW ; DN. 10" (250 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 232000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 1-1/2"',
    'satuan' => "m'",
    'besaran' => 11175,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 1-1/2" (40 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 12000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 1-1/4"',
    'satuan' => "m'",
    'besaran' => 10000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 1-1/4" (32 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 11000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 12"',
    'satuan' => "m'",
    'besaran' => 319750,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 12" (300 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 320000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 14"',
    'satuan' => "m'",
    'besaran' => 325000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 14" (350 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 323000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 16"',
    'satuan' => "m'",
    'besaran' => 362500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 16" (400 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 363000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 2"',
    'satuan' => "m'",
    'besaran' => 14750,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 2" (50 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 15000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 2-1/2"',
    'satuan' => "m'",
    'besaran' => 20625,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 2-1/2" (65 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 21000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 3"',
    'satuan' => "m'",
    'besaran' => 28600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 3" (80 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 29000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 4"',
    'satuan' => "m'",
    'besaran' => 39575,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 4" (100 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 40000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 5"',
    'satuan' => "m'",
    'besaran' => 63200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 5" (125 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 64000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 6"',
    'satuan' => "m'",
    'besaran' => 79775,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 6" (150 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 80000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D Ø 8"',
    'satuan' => "m'",
    'besaran' => 139575,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC D ; DN. 8" (200 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 140000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 1"',
    'satuan' => "m'",
    'besaran' => 11250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 2"',
    'satuan' => "m'",
    'besaran' => 26000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tembaga B280 1/4"',
    'satuan' => "m'",
    'besaran' => 34300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Duct Tape',
    'satuan' => 'gulung',
    'besaran' => 9050,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tembaga B280 3/8"',
    'satuan' => 'm\'',
    'besaran' => 45300,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tembaga B280 1/2"',
    'satuan' => 'm\'',
    'besaran' => 46400,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tembaga B280 5/8"',
    'satuan' => 'm\'',
    'besaran' => 101600,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tembaga B280 3/4"',
    'satuan' => 'm\'',
    'besaran' => 122700,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tembaga B280 7/8"',
    'satuan' => 'm\'',
    'besaran' => 351600,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tembaga B280 1"',
    'satuan' => 'm\'',
    'besaran' => 370000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tembaga B280 1-1/8"',
    'satuan' => 'm\'',
    'besaran' => 375000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tembaga B280 1-3/8"',
    'satuan' => 'm\'',
    'besaran' => 380000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tembaga B280 1-5/8"',
    'satuan' => 'm\'',
    'besaran' => 290000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV SET dia. 50 mm dan aksesoris',
    'satuan' => 'unit',
    'besaran' => 6131000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV SET dia. 65 mm dan aksesoris',
    'satuan' => 'unit',
    'besaran' => 8397000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV SET dia. 80 mm dan aksesoris',
    'satuan' => 'unit',
    'besaran' => 8550000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV SET dia. 100 mm dan aksesoris',
    'satuan' => 'unit',
    'besaran' => 14250000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV SET dia. 150 mm dan aksesoris',
    'satuan' => 'unit',
    'besaran' => 14500000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV SET dia. 200 mm dan aksesoris',
    'satuan' => 'unit',
    'besaran' => 15500000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'MCV Set dia. 80 mm',
    'satuan' => 'unit',
    'besaran' => 20500000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'MCV Set dia. 100 mm',
    'satuan' => 'unit',
    'besaran' => 20900000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'MCV Set dia. 150 mm',
    'satuan' => 'unit',
    'besaran' => 30300000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'BCV Set dia. 50 mm',
    'satuan' => 'set',
    'besaran' => 1700000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flow Switch dia. 50 mm',
    'satuan' => 'buah',
    'besaran' => 83000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Sigh Glass',
    'satuan' => 'buah',
    'besaran' => 85000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flow Switch',
    'satuan' => 'buah',
    'besaran' => 104000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Test Drain Valve',
    'satuan' => 'buah',
    'besaran' => 750000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Coupling 1 set',
    'satuan' => 'set',
    'besaran' => 115000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Temper Switch',
    'satuan' => 'buah',
    'besaran' => 700000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'BCV Set dia. 65 mm',
    'satuan' => 'set',
    'besaran' => 1900000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'BCV Set dia. 80 mm',
    'satuan' => 'set',
    'besaran' => 2100000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'BCV Set dia. 100 mm',
    'satuan' => 'set',
    'besaran' => 2400000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'BCV Set dia. 150 mm',
    'satuan' => 'set',
    'besaran' => 2600000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Automatic Air Vent dia. 50 mm',
    'satuan' => 'unit',
    'besaran' => 635000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Automatic Air Vent dia. 80 mm',
    'satuan' => 'unit',
    'besaran' => 766500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Automatic Air Vent dia. 100 mm',
    'satuan' => 'unit',
    'besaran' => 980000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Automatic Air Vent dia. 150 mm',
    'satuan' => 'unit',
    'besaran' => 1150000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flow Meter Analog dia. 100 mm',
    'satuan' => 'unit',
    'besaran' => 1300000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flow Meter Analog dia. 200 mm',
    'satuan' => 'unit',
    'besaran' => 1500000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Landing Velve 2,5"',
    'satuan' => 'unit',
    'besaran' => 1259000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Orifice Plate dia. 25 mm',
    'satuan' => 'unit',
    'besaran' => 1500000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Sprinkler Head Pendant dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 85000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Sprinkler Head Upright dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 82900,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Hydrant Pillar dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 3750000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Indoor Hydrant Box dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 1200000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Outdoor Hydrant Box dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 1700000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Siamesse Connection dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 2200000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Fire Extinguisher 3 kg dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 171500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Fire Extinguisher 5 kg dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 227900,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Fire Extinguisher 25 kg dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 1900000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Jockey Fire Pump Vertical Multi Stage 25 USGPM',
    'satuan' => 'unit',
    'besaran' => 7400000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Main Fire Pump Centrifugal End Suction 1.000 USGPM',
    'satuan' => 'unit',
    'besaran' => 10000000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Diesel Fire Pump Centrifugal End Suction dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 12000000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Main Fire Pump Centrifugal End Suction dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 14000000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Diesel Fire Pump Centrifugal End Suction dan Aksesoris',
    'satuan' => 'unit',
    'besaran' => 12000000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 63 mm',
    'satuan' => "m'",
    'besaran' => 14750,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 2-1/2" (65 mm)',
    'satuan' => "m'",
    'besaran' => 15000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 90 mm',
    'satuan' => "m'",
    'besaran' => 28600,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 3" (80 mm)',
    'satuan' => "m'",
    'besaran' => 29000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 110 mm',
    'satuan' => "m'",
    'besaran' => 39575,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 4" (100 mm)',
    'satuan' => "m'",
    'besaran' => 40000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 150 mm',
    'satuan' => "m'",
    'besaran' => 63200,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 6" (150 mm)',
    'satuan' => "m'",
    'besaran' => 64000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 200 mm',
    'satuan' => "m'",
    'besaran' => 139575,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 8" (200 mm)',
    'satuan' => "m'",
    'besaran' => 140000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 250 mm',
    'satuan' => "m'",
    'besaran' => 287500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 10" (250 mm)',
    'satuan' => "m'",
    'besaran' => 288000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Sewa Tripot',
    'satuan' => 'hari',
    'besaran' => 108000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 300 mm',
    'satuan' => "m'",
    'besaran' => 305000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 12" (300 mm)',
    'satuan' => "m'",
    'besaran' => 306000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 400 mm',
    'satuan' => "m'",
    'besaran' => 336700,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 16" (400 mm)',
    'satuan' => "m'",
    'besaran' => 337000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 450 mm',
    'satuan' => "m'",
    'besaran' => 368000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 18" (450 mm)',
    'satuan' => "m'",
    'besaran' => 369000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 500 mm',
    'satuan' => "m'",
    'besaran' => 398500,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 20" (500 mm)',
    'satuan' => "m'",
    'besaran' => 399000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 600 mm',
    'satuan' => "m'",
    'besaran' => 425000,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 24" (600 mm)',
    'satuan' => "m'",
    'besaran' => 426000,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 800 mm',
    'satuan' => "m'",
    'besaran' => 487000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 32" (800 mm)',
    'satuan' => "m'",
    'besaran' => 488000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 900 mm',
    'satuan' => "m'",
    'besaran' => 515000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 36" (900 mm)',
    'satuan' => "m'",
    'besaran' => 516000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 1000 mm',
    'satuan' => "m'",
    'besaran' => 547000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 40" (1000 mm)',
    'satuan' => "m'",
    'besaran' => 548000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 1100 mm',
    'satuan' => "m'",
    'besaran' => 589000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 44" (1100 mm)',
    'satuan' => "m'",
    'besaran' => 590000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 1200 mm',
    'satuan' => "m'",
    'besaran' => 617000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 48" (1200 mm)',
    'satuan' => "m'",
    'besaran' => 618000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 15 mm',
    'satuan' => "m'",
    'besaran' => 5200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 1/2" (15 mm)',
    'satuan' => "m'",
    'besaran' => 5300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 20 mm',
    'satuan' => "m'",
    'besaran' => 7500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 3/4" (20 mm)',
    'satuan' => "m'",
    'besaran' => 7600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 25 mm',
    'satuan' => "m'",
    'besaran' => 8300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 1" (25 mm)',
    'satuan' => "m'",
    'besaran' => 8400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 32 mm',
    'satuan' => "m'",
    'besaran' => 9700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 1-1/4" (32 mm)',
    'satuan' => "m'",
    'besaran' => 10000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 40 mm',
    'satuan' => "m'",
    'besaran' => 10500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 1-1/2" (40 mm)',
    'satuan' => "m'",
    'besaran' => 10600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC dia. 50 mm',
    'satuan' => "m'",
    'besaran' => 13700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PVC, DN. 2" (50 mm)',
    'satuan' => "m'",
    'besaran' => 13800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gergaji Pipa',
    'satuan' => 'hari',
    'besaran' => 32500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Peralatan potong pipa T1/manual (gergaji) / saw',
    'satuan' => 'hari',
    'besaran' => 35000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 63 mm',
    'satuan' => "m'",
    'besaran' => 183333,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 2-1/2" (65 mm)',
    'satuan' => "m'",
    'besaran' => 185000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 100 mm',
    'satuan' => "m'",
    'besaran' => 309000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 4" (100 mm)',
    'satuan' => "m'",
    'besaran' => 310000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 125 mm',
    'satuan' => "m'",
    'besaran' => 435000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 5" (125 mm)',
    'satuan' => "m'",
    'besaran' => 436000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 150 mm',
    'satuan' => "m'",
    'besaran' => 395000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 6" (150 mm)',
    'satuan' => "m'",
    'besaran' => 396000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 200 mm',
    'satuan' => "m'",
    'besaran' => 417000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 8" (200 mm)',
    'satuan' => "m'",
    'besaran' => 418000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 250 mm',
    'satuan' => "m'",
    'besaran' => 467000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 10" (250 mm)',
    'satuan' => "m'",
    'besaran' => 468000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 300 mm',
    'satuan' => "m'",
    'besaran' => 512000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 12" (300 mm)',
    'satuan' => "m'",
    'besaran' => 513000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 400 mm',
    'satuan' => "m'",
    'besaran' => 593000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 16" (400 mm)',
    'satuan' => "m'",
    'besaran' => 594000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 450 mm',
    'satuan' => "m'",
    'besaran' => 612000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 18" (450 mm)',
    'satuan' => "m'",
    'besaran' => 61300, // harga asli tertulis 61.300,00
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 500 mm',
    'satuan' => "m'",
    'besaran' => 655000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 20" (500 mm)',
    'satuan' => "m'",
    'besaran' => 656000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 600 mm',
    'satuan' => "m'",
    'besaran' => 697000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 24" (600 mm)',
    'satuan' => "m'",
    'besaran' => 698000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 800 mm',
    'satuan' => "m'",
    'besaran' => 715000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 32" (800 mm)',
    'satuan' => "m'",
    'besaran' => 716000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 900 mm',
    'satuan' => "m'",
    'besaran' => 756000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 36" (900 mm)',
    'satuan' => "m'",
    'besaran' => 757000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 1000 mm',
    'satuan' => "m'",
    'besaran' => 799000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 40 (1000 mm)',
    'satuan' => "m'",
    'besaran' => 780000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 1100 mm',
    'satuan' => "m'",
    'besaran' => 830000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 44 (1100 mm)',
    'satuan' => "m'",
    'besaran' => 831000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 1200 mm',
    'satuan' => "m'",
    'besaran' => 867000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 48 (1200 mm)',
    'satuan' => "m'",
    'besaran' => 868000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 15 mm',
    'satuan' => "m'",
    'besaran' => 51000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 1/2 (15 mm)',
    'satuan' => "m'",
    'besaran' => 52000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 20 mm',
    'satuan' => "m'",
    'besaran' => 67000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 3/4 (20 mm)',
    'satuan' => "m'",
    'besaran' => 68000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 25 mm',
    'satuan' => "m'",
    'besaran' => 71000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 1 (25 mm)',
    'satuan' => "m'",
    'besaran' => 72000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 32 mm',
    'satuan' => "m'",
    'besaran' => 79000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 1-1/4 (32 mm)',
    'satuan' => "m'",
    'besaran' => 80000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 40 mm',
    'satuan' => "m'",
    'besaran' => 86000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 1-1/2 (40 mm)',
    'satuan' => "m'",
    'besaran' => 87000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis dia. 50 mm',
    'satuan' => "m'",
    'besaran' => 94000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Galvanis, DN. 2 (50 mm)',
    'satuan' => "m'",
    'besaran' => 95000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Cilinder Saw',
    'satuan' => 'hari',
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Peralatan potong pipa T2/mekanik / cilinder saw',
    'satuan' => 'hari',
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 63 mm',
    'satuan' => "m'",
    'besaran' => 24700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 2-1/2 (65 mm)',
    'satuan' => "m'",
    'besaran' => 25000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 100 mm',
    'satuan' => "m'",
    'besaran' => 49000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 4 (100 mm)',
    'satuan' => "m'",
    'besaran' => 50000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 125 mm',
    'satuan' => "m'",
    'besaran' => 57000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 5" (125 mm)',
    'satuan' => "m'",
    'besaran' => 58000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 150 mm',
    'satuan' => "m'",
    'besaran' => 63000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 6" (150 mm)',
    'satuan' => "m'",
    'besaran' => 64000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 200 mm',
    'satuan' => "m'",
    'besaran' => 74000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 8" (200 mm)',
    'satuan' => "m'",
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 250 mm',
    'satuan' => "m'",
    'besaran' => 81000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 10" (250 mm)',
    'satuan' => "m'",
    'besaran' => 82000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 300 mm',
    'satuan' => "m'",
    'besaran' => 93000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 12" (300 mm)',
    'satuan' => "m'",
    'besaran' => 94000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 400 mm',
    'satuan' => "m'",
    'besaran' => 101000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 16" (400 mm)',
    'satuan' => "m'",
    'besaran' => 102000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 450 mm',
    'satuan' => "m'",
    'besaran' => 123000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 18" (450 mm)',
    'satuan' => "m'",
    'besaran' => 124000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 500 mm',
    'satuan' => "m'",
    'besaran' => 142000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 20" (500 mm)',
    'satuan' => "m'",
    'besaran' => 143000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 600 mm',
    'satuan' => "m'",
    'besaran' => 156000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 24" (600 mm)',
    'satuan' => "m'",
    'besaran' => 157000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 800 mm',
    'satuan' => "m'",
    'besaran' => 164000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 32" (800 mm)',
    'satuan' => "m'",
    'besaran' => 165000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 900 mm',
    'satuan' => "m'",
    'besaran' => 172000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 36" (900 mm)',
    'satuan' => "m'",
    'besaran' => 173000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 1000 mm',
    'satuan' => "m'",
    'besaran' => 186000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 40" (1000 mm)',
    'satuan' => "m'",
    'besaran' => 187000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 1100 mm',
    'satuan' => "m'",
    'besaran' => 197000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 44" (1100 mm)',
    'satuan' => "m'",
    'besaran' => 198000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 1200 mm',
    'satuan' => "m'",
    'besaran' => 215000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 48" (1200 mm)',
    'satuan' => "m'",
    'besaran' => 216000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 15 mm',
    'satuan' => "m'",
    'besaran' => 12500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 1/2" (15 mm)',
    'satuan' => "m'",
    'besaran' => 13000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 20 mm',
    'satuan' => "m'",
    'besaran' => 17900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 3/4" (20 mm)',
    'satuan' => "m'",
    'besaran' => 18000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 25 mm',
    'satuan' => "m'",
    'besaran' => 20700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 1" (25 mm)',
    'satuan' => "m'",
    'besaran' => 21000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 32 mm',
    'satuan' => "m'",
    'besaran' => 21300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 1-1/4" (32 mm)',
    'satuan' => "m'",
    'besaran' => 22000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 40 mm',
    'satuan' => "m'",
    'besaran' => 22500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 1-1/2" (40 mm)',
    'satuan' => "m'",
    'besaran' => 23000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE dia. 50 mm',
    'satuan' => "m'",
    'besaran' => 23100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa HDPE, DN. 2" (50 mm)',
    'satuan' => "m'",
    'besaran' => 24000,
    'keterangan1' => null,
]);

/* --- PIPA BAJA --- */

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 63 mm',
    'satuan' => "m'",
    'besaran' => 520000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 2-1/2" (65 mm)',
    'satuan' => "m'",
    'besaran' => 525000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 100 mm',
    'satuan' => "m'",
    'besaran' => 645000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 4" (100 mm)',
    'satuan' => "m'",
    'besaran' => 650000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 125 mm',
    'satuan' => "m'",
    'besaran' => 766000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 5" (125 mm)',
    'satuan' => "m'",
    'besaran' => 770000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 150 mm',
    'satuan' => "m'",
    'besaran' => 810000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 6" (150 mm)',
    'satuan' => "m'",
    'besaran' => 815000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 200 mm',
    'satuan' => "m'",
    'besaran' => 890000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 8" (200 mm)',
    'satuan' => "m'",
    'besaran' => 895000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 250 mm',
    'satuan' => "m'",
    'besaran' => 940000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 10" (250 mm)',
    'satuan' => "m'",
    'besaran' => 945000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 300 mm',
    'satuan' => "m'",
    'besaran' => 1050000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 12" (300 mm)',
    'satuan' => "m'",
    'besaran' => 1055000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 400 mm',
    'satuan' => "m'",
    'besaran' => 2300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 16" (400 mm)',
    'satuan' => "m'",
    'besaran' => 2305000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 450 mm',
    'satuan' => "m'",
    'besaran' => 2450000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 18" (450 mm)',
    'satuan' => "m'",
    'besaran' => 2455000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 500 mm',
    'satuan' => "m'",
    'besaran' => 2560000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 20" (500 mm)',
    'satuan' => "m'",
    'besaran' => 2565000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 600 mm',
    'satuan' => "m'",
    'besaran' => 2650000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 24" (600 mm)',
    'satuan' => "m'",
    'besaran' => 2655000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 800 mm',
    'satuan' => "m'",
    'besaran' => 2790000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 32" (800 mm)',
    'satuan' => "m'",
    'besaran' => 2795000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 900 mm',
    'satuan' => "m'",
    'besaran' => 2950000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 36" (900 mm)',
    'satuan' => "m'",
    'besaran' => 2955000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 1000 mm',
    'satuan' => "m'",
    'besaran' => 3110000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 40" (1000 mm)',
    'satuan' => "m'",
    'besaran' => 3115000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 1100 mm',
    'satuan' => "m'",
    'besaran' => 3230000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 44" (1100 mm)',
    'satuan' => "m'",
    'besaran' => 3235000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja dia. 1200 mm',
    'satuan' => "m'",
    'besaran' => 3350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Baja Karbon, DN. 48" (1200 mm)',
    'satuan' => "m'",
    'besaran' => 3355000,
    'keterangan1' => null,
]);

/* --- PVC --- */

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PVC Ø 1 1/4" s10 tekanan nominal 10 bar (4m)',
    'satuan' => 'batang',
    'besaran' => 79700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PVC Ø 1 1/5" s10 tekanan nominal 10 bar (6m)',
    'satuan' => 'batang',
    'besaran' => 145400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PVC Ø 1" s10 tekanan nominal 10 bar (4m)',
    'satuan' => 'batang',
    'besaran' => 51600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PVC Ø 1/2" s10 tekanan nominal 10 bar (4m)',
    'satuan' => 'batang',
    'besaran' => 30700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PVC Ø 2" s12,5 tekanan nominal 10 bar (6m)',
    'satuan' => 'batang',
    'besaran' => 214900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PVC Ø 3" s12,5 tekanan nominal 10 bar (6m)',
    'satuan' => 'batang',
    'besaran' => 423300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PVC Ø 3/4" s10 tekanan nominal 10 bar (4m)',
    'satuan' => 'batang',
    'besaran' => 33400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PVC Ø 4" s12,5 tekanan nominal 10 bar (6m)',
    'satuan' => 'batang',
    'besaran' => 641300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PVC Ø 6" s12,5 tekanan nominal 10 bar (6m)',
    'satuan' => 'batang',
    'besaran' => 1823000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PVC Ø 8" s12,5 tekanan nominal 10 bar (6m)',
    'satuan' => 'batang',
    'besaran' => 2043200,
    'keterangan1' => null,
]);

// ===== MATERIAL PIPA GALVANIS =====

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Assesoris galvanis',
    'satuan' => "m'",
    'besaran' => 5500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 1 1/2" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 405700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 1" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 263000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 1/2" panjang 6 m',
    'satuan' => "m'",
    'besaran' => 24400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 2 1/2" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 550000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 3" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 1035100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 3/4" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 181200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 4" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 1475300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa besi stainless steel Ø1" t=1.5 mm',
    'satuan' => "m'",
    'besaran' => 44800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa besi stainless steel Ø2" t=1.5 mm',
    'satuan' => "m'",
    'besaran' => 92400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium A Ø 1 1/2" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 461800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium A Ø 1" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 266100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium A Ø 1/2" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 132500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium A Ø 2" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 528600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium A Ø 3" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 1021000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium A Ø 3/4" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 177900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium A Ø 4" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 1487200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium A Ø 5" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 1981200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium A Ø 6" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 1558300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium A Ø 8" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 2267400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 2" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 598800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 5" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 2031000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 6" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 2451200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium B Ø 8" panjang 6 m',
    'satuan' => 'batang',
    'besaran' => 3466200,
    'keterangan1' => null,
]);

// ==== MEDIUM CLASS + AKSESORIS ====

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 1 1/2" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 82466,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS DN 1-1/2" (40 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 82500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 1 1/4" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 80633,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS DN 1-1/4" (32 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 81000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 1" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 49850,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS DN 1" (25 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 50000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 1/2" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 27583,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS DN 1/2" (15 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 28000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 2" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 93600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS DN 2" (50 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 94000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 2-1/2" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 94666,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS DN 2-1/2" (65 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 95000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 3" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 175666,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS DN 3" (80 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 176000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 3/4" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 35150,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS DN 3/4" (20 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 36000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 4" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 253366,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS DN 4" (100 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 253500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 5" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 335700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS ; DN. 5" (125 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 336000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 6" + Aksesoris',
    'satuan' => "m'",
    'besaran' => 265216.67,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS ; DN. 6" (150 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 266000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 8" + Aksesois',
    'satuan' => "m'",
    'besaran' => 383400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS ; DN. 8" (200 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 384000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 10" + Aksesois',
    'satuan' => "m'",
    'besaran' => 390500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS ; DN. 10" (250 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 391000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 12" + Aksesois',
    'satuan' => "m'",
    'besaran' => 399500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS ; DN. 12" (300 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 14" + Aksesois',
    'satuan' => "m'",
    'besaran' => 410500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS ; DN. 14" (350 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 411000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis medium Class Ø 16" + Aksesois',
    'satuan' => "m'",
    'besaran' => 417500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis MED CLASS ; DN. 16" (400 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 418000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 39666.67,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 1/2" (15 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 40000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 3/4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 47666.67,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 3/4" (20 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 48000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 1" + Aksesois',
    'satuan' => "m'",
    'besaran' => 66333.33,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 1" (25 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 66500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 1-1/4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 88000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 1-1/4" (32 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 88500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 1-1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 102500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 1-1/2" (40 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 103000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 188833.33,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 2" (50 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 189000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 2-1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 205500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 2-1/2" (65 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 206000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 3" + Aksesois',
    'satuan' => "m'",
    'besaran' => 359666.67,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 3" (80 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 380500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 4" (100 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 381000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 5" + Aksesois',
    'satuan' => "m'",
    'besaran' => 505500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 5" (125 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 502000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 6" + Aksesois',
    'satuan' => "m'",
    'besaran' => 635500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 6" (150 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 636000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 8" + Aksesois',
    'satuan' => "m'",
    'besaran' => 987166.67,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 8" (200 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 987500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 10" + Aksesois',
    'satuan' => "m'",
    'besaran' => 1322166.67,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 10" (250 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 1322500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 12" + Aksesois',
    'satuan' => "m'",
    'besaran' => 1405500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 12" (300 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 1406000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 14" + Aksesois',
    'satuan' => "m'",
    'besaran' => 1463833.33,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 14" (350 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 1464000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 Ø 16" + Aksesois',
    'satuan' => "m'",
    'besaran' => 1501666.67,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa galvanis SCH 40 ; DN. 16" (400 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 1502000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 Ø 1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 16050,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 ; DN. 1/2" (15 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 16100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 Ø 3/4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 19475,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 ; DN. 3/4" (20 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 19700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 Ø 1" + Aksesois',
    'satuan' => "m'",
    'besaran' => 28275,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 ; DN. 1" (25 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 28500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 Ø 1-1/4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 41875,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 ; DN. 1-1/4" (32 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 42000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 Ø 1-1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 62175,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 ; DN. 1-1/2" (40 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 62500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 Ø 2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 95500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 ; DN. 2" (50 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 96000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 Ø 2-1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 131625,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 ; DN. 2-1/2" (65 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 132000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 Ø 3" + Aksesois',
    'satuan' => "m'",
    'besaran' => 183275,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 ; DN. 3" (80 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 183500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 Ø 4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 276425,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 ; DN. 4" (100 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 276600,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 Ø 6" + Aksesois',
    'satuan' => "m'",
    'besaran' => 930025,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 10 ; DN. 6" (150 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 930500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 Ø 1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 20325,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 ; DN. 1/2" (15 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 931000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 Ø 3/4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 28525,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 ; DN. 3/4" (20 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 29000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 Ø 1" + Aksesois',
    'satuan' => "m'",
    'besaran' => 43675,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 ; DN. 1" (25 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 44000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 Ø 1-1/4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 64625,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 ; DN. 1-1/4" (32 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 65000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 Ø 1-1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 98175,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 ; DN. 1-1/2" (40 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 98500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 Ø 2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 152625,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 ; DN. 2" (50 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 153000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 Ø 2-1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 214000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 ; DN. 2-1/2" (65 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 214500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 Ø 3" + Aksesois',
    'satuan' => "m'",
    'besaran' => 305375,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 ; DN. 3" (80 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 305500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 Ø 4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 453900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 ; DN. 4" (100 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 454000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 Ø 6" + Aksesois',
    'satuan' => "m'",
    'besaran' => 1534825,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa PPR PN 20 ; DN. 6" (150 mm) + fitting & akseso',
    'satuan' => "m'",
    'besaran' => 1535000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 30000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 1/2" (15 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 30500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 3/4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 37000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 3/4" (20 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 37500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 1" + Aksesois',
    'satuan' => "m'",
    'besaran' => 52500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 1" (25 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 53000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 1-1/4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 67500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS DN. 1-1/4" (32 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 68000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 1-1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 76666.67,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS DN. 1-1/2" (40 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 77000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 102666.67,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 2" (50 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 103000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 2-1/2" + Aksesois',
    'satuan' => "m'",
    'besaran' => 129333.33,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS DN. 2-1/2" (65 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 130000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 3" + Aksesois',
    'satuan' => "m'",
    'besaran' => 165500,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 3" (80 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 166000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 4" + Aksesois',
    'satuan' => "m'",
    'besaran' => 237167,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 4" (100 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 237500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 5" + Aksesois',
    'satuan' => "m'",
    'besaran' => 317167,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 5" (125 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 317500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 6" + Aksesois',
    'satuan' => "m'",
    'besaran' => 376500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 6" (150 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 377000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 8" + Aksesois',
    'satuan' => "m'",
    'besaran' => 663000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 8" (200 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 663500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 10" (250 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 756000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 10" + Aksesois',
    'satuan' => "m'",
    'besaran' => 755917,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 12" (300 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 883000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 12" + Aksesois',
    'satuan' => "m'",
    'besaran' => 882667,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 14" (350 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 1086000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 14" + Aksesois',
    'satuan' => "m'",
    'besaran' => 1085500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS MED CLASS ; DN. 16" (400 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 1241000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS Ø 16" + Aksesois',
    'satuan' => "m'",
    'besaran' => 1240500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 1/2" (15 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 250000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 3/4" (20 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 260000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 1-1/4" (32 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 270000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 1-1/2" (40 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 280000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 2" (50 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 290000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 2-1/2" (65 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 300000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 3" (80 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 310000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 4" (100 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 320000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 5" (125 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 330000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 6" (150 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 340000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 8" (200 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 350000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 10" (250 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 360000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 12" (300 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 370000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 14" (350 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 380000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa BS SCH 40 ; DN. 16" (400 mm) + fitting & aksesoris',
    'satuan' => "m'",
    'besaran' => 390000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tanah, DN. 6" (150 mm)',
    'satuan' => "m'",
    'besaran' => 187500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Tanah, DN. 8" (200 mm)',
    'satuan' => "m'",
    'besaran' => 205000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia. 1/2"',
    'satuan' => "unit",
    'besaran' => 1500000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia. 3/4"',
    'satuan' => "unit",
    'besaran' => 1700000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia. 1"',
    'satuan' => "unit",
    'besaran' => 1900000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia. 1-1/4"',
    'satuan' => "unit",
    'besaran' => 2050000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia. 1-1/2"',
    'satuan' => "unit",
    'besaran' => 2125000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia.2"',
    'satuan' => "unit",
    'besaran' => 2315000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia.2-1/2"',
    'satuan' => "unit",
    'besaran' => 2475000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia.3"',
    'satuan' => "unit",
    'besaran' => 2750000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia.4"',
    'satuan' => "unit",
    'besaran' => 2995000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia.5"',
    'satuan' => "unit",
    'besaran' => 3250000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia.6"',
    'satuan' => "unit",
    'besaran' => 3570000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia.8"',
    'satuan' => "unit",
    'besaran' => 3950000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia.10"',
    'satuan' => "unit",
    'besaran' => 4210000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia.12"',
    'satuan' => "unit",
    'besaran' => 4520000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Gate Valve dia.6"',
    'satuan' => "unit",
    'besaran' => 5750000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Ball Velve dia. 1/2"',
    'satuan' => "unit",
    'besaran' => 25000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Ball Velve dia. 3/4"',
    'satuan' => 'unit',
    'besaran' => 36750,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Ball Velve dia. 1"',
    'satuan' => 'unit',
    'besaran' => 46100,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Ball Velve dia. 1-1/4"',
    'satuan' => 'unit',
    'besaran' => 68000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Ball Velve dia. 1-1/2"',
    'satuan' => 'unit',
    'besaran' => 79000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Ball Velve dia. 2"',
    'satuan' => 'unit',
    'besaran' => 118000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Ball Velve dia. 2-1/2"',
    'satuan' => 'unit',
    'besaran' => 145000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Ball Velve dia. 3"',
    'satuan' => 'unit',
    'besaran' => 215000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Ball Velve dia. 4"',
    'satuan' => 'unit',
    'besaran' => 233300,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 1/2"',
    'satuan' => 'unit',
    'besaran' => 39000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 3/4"',
    'satuan' => 'unit',
    'besaran' => 59000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 1"',
    'satuan' => 'unit',
    'besaran' => 88350,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 1-1/4"',
    'satuan' => 'unit',
    'besaran' => 110960,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 1-1/2"',
    'satuan' => 'unit',
    'besaran' => 148960,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 2"',
    'satuan' => 'unit',
    'besaran' => 215460,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 2-1/2"',
    'satuan' => 'unit',
    'besaran' => 265000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 3"',
    'satuan' => 'unit',
    'besaran' => 587000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 4"',
    'satuan' => 'unit',
    'besaran' => 1440000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 5"',
    'satuan' => 'unit',
    'besaran' => 2750000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 6"',
    'satuan' => 'unit',
    'besaran' => 3050000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 8"',
    'satuan' => 'unit',
    'besaran' => 3470000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 10"',
    'satuan' => 'unit',
    'besaran' => 3680000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Check Velve dia. 12"',
    'satuan' => 'unit',
    'besaran' => 3970000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 1/2"',
    'satuan' => 'unit',
    'besaran' => 36000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 3/4"',
    'satuan' => 'unit',
    'besaran' => 47000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 1"',
    'satuan' => 'unit',
    'besaran' => 59000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 1-1/4"',
    'satuan' => 'unit',
    'besaran' => 95600,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 1-1/2"',
    'satuan' => 'unit',
    'besaran' => 143000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 2"',
    'satuan' => 'unit',
    'besaran' => 303600,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 2-1/2"',
    'satuan' => 'unit',
    'besaran' => 415600,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 3"',
    'satuan' => 'unit',
    'besaran' => 552000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 4"',
    'satuan' => 'unit',
    'besaran' => 809600,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 5"',
    'satuan' => 'unit',
    'besaran' => 873000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 6"',
    'satuan' => 'unit',
    'besaran' => 970500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 8"',
    'satuan' => 'unit',
    'besaran' => 1260000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 10"',
    'satuan' => 'unit',
    'besaran' => 1540000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 12"',
    'satuan' => 'unit',
    'besaran' => 1670000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Strainer dia. 14"',
    'satuan' => 'unit',
    'besaran' => 1820000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 1/2"',
    'satuan' => 'unit',
    'besaran' => 221000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 3/4"',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 1"',
    'satuan' => 'unit',
    'besaran' => 375000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 1-1/4"',
    'satuan' => 'unit',
    'besaran' => 485000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 1-1/2"',
    'satuan' => 'unit',
    'besaran' => 630000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 2"',
    'satuan' => 'unit',
    'besaran' => 870000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 2-1/2"',
    'satuan' => 'unit',
    'besaran' => 980000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 3"',
    'satuan' => 'unit',
    'besaran' => 1170000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 4"',
    'satuan' => 'unit',
    'besaran' => 1370000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 5"',
    'satuan' => 'unit',
    'besaran' => 1520000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 6"',
    'satuan' => 'unit',
    'besaran' => 1740000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 8"',
    'satuan' => 'unit',
    'besaran' => 1960000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 10"',
    'satuan' => 'unit',
    'besaran' => 2130000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floater Velve dia. 12"',
    'satuan' => 'unit',
    'besaran' => 2480000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 1/2"',
    'satuan' => 'unit',
    'besaran' => 21450,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 3/4"',
    'satuan' => 'unit',
    'besaran' => 69400,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 1"',
    'satuan' => 'unit',
    'besaran' => 83800,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 1-1/4"',
    'satuan' => 'unit',
    'besaran' => 134600,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 1-1/2"',
    'satuan' => 'unit',
    'besaran' => 202000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 2"',
    'satuan' => 'unit',
    'besaran' => 331300,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 2-1/2"',
    'satuan' => 'unit',
    'besaran' => 348000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 3"',
    'satuan' => 'unit',
    'besaran' => 609000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 4"',
    'satuan' => 'unit',
    'besaran' => 870000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 5"',
    'satuan' => 'unit',
    'besaran' => 920500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 6"',
    'satuan' => 'unit',
    'besaran' => 1055000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 8"',
    'satuan' => 'unit',
    'besaran' => 1315000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 10"',
    'satuan' => 'unit',
    'besaran' => 1525000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 12"',
    'satuan' => 'unit',
    'besaran' => 1740000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Foot Velve dia. 14"',
    'satuan' => 'unit',
    'besaran' => 1980000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 1/2"',
    'satuan' => 'unit',
    'besaran' => 33600,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 3/4"',
    'satuan' => 'unit',
    'besaran' => 46500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 1"',
    'satuan' => 'unit',
    'besaran' => 87500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 1-1/4"',
    'satuan' => 'unit',
    'besaran' => 97800,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 1-1/2"',
    'satuan' => 'unit',
    'besaran' => 105700,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 2"',
    'satuan' => 'unit',
    'besaran' => 136500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 2-1/2"',
    'satuan' => 'unit',
    'besaran' => 157900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 3"',
    'satuan' => 'unit',
    'besaran' => 165400,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 4"',
    'satuan' => 'unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 5"',
    'satuan' => 'unit',
    'besaran' => 740900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 6"',
    'satuan' => 'unit',
    'besaran' => 937500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 8"',
    'satuan' => 'unit',
    'besaran' => 1050900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 10"',
    'satuan' => 'unit',
    'besaran' => 1345000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 12"',
    'satuan' => 'unit',
    'besaran' => 1678000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flexible Joint dia. 14"',
    'satuan' => 'unit',
    'besaran' => 1945000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Butterfly Velve dia. 2"',
    'satuan' => 'unit',
    'besaran' => 136100,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Butterfly Velve dia. 2-1/2"',
    'satuan' => 'unit',
    'besaran' => 170700,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Butterfly Velve dia. 3"',
    'satuan' => 'unit',
    'besaran' => 276400,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Butterfly Velve dia. 4"',
    'satuan' => 'unit',
    'besaran' => 303600,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Butterfly Velve dia. 5"',
    'satuan' => 'unit',
    'besaran' => 515200,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Butterfly Velve dia. 6"',
    'satuan' => 'unit',
    'besaran' => 829300,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Butterfly Velve dia. 8"',
    'satuan' => 'unit',
    'besaran' => 1364500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Butterfly Velve dia. 10"',
    'satuan' => 'unit',
    'besaran' => 1808900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Butterfly Velve dia. 12"',
    'satuan' => 'unit',
    'besaran' => 2170800,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 1/2"',
    'satuan' => 'unit',
    'besaran' => 104500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 3/4"',
    'satuan' => 'unit',
    'besaran' => 118000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 1"',
    'satuan' => 'unit',
    'besaran' => 140500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 1-1/4"',
    'satuan' => 'unit',
    'besaran' => 189900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 1-1/2"',
    'satuan' => 'unit',
    'besaran' => 252900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 2"',
    'satuan' => 'unit',
    'besaran' => 966300,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 2-1/2"',
    'satuan' => 'unit',
    'besaran' => 1214300,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 3"',
    'satuan' => 'unit',
    'besaran' => 1573100,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 4"',
    'satuan' => 'unit',
    'besaran' => 2121400,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 5"',
    'satuan' => 'unit',
    'besaran' => 3890000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 6"',
    'satuan' => 'unit',
    'besaran' => 4996000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Globe Velve dia. 8"',
    'satuan' => 'unit',
    'besaran' => 5740000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pressure Gauge dia. 1/2"',
    'satuan' => 'unit',
    'besaran' => 58000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pressure Gauge dia. 1"',
    'satuan' => 'unit',
    'besaran' => 79800,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pressure Gauge dia. 2"',
    'satuan' => 'unit',
    'besaran' => 123000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pressure Gauge dia. 2-1/2"',
    'satuan' => 'unit',
    'besaran' => 132700,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pressure Gauge dia. 3"',
    'satuan' => 'unit',
    'besaran' => 165400,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pressure Gauge dia. 4"',
    'satuan' => 'unit',
    'besaran' => 218500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 1/2"',
    'satuan' => 'Bh',
    'besaran' => 270750,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 3/4"',
    'satuan' => 'Bh',
    'besaran' => 655914,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 1"',
    'satuan' => 'Bh',
    'besaran' => 1416800,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 1-1/2"',
    'satuan' => 'Bh',
    'besaran' => 1740600,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 2"',
    'satuan' => 'Bh',
    'besaran' => 2392000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 3"',
    'satuan' => 'Bh',
    'besaran' => 2700000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 4"',
    'satuan' => 'Bh',
    'besaran' => 2980000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 6"',
    'satuan' => 'Bh',
    'besaran' => 3540900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 8"',
    'satuan' => 'Bh',
    'besaran' => 3947000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 10"',
    'satuan' => 'Bh',
    'besaran' => 4230900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 12"',
    'satuan' => 'Bh',
    'besaran' => 4560000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Water Meter dia. 16"',
    'satuan' => 'Bh',
    'besaran' => 4760900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Flow Meter Analog dia.4"',
    'satuan' => 'bh',
    'besaran' => 2449000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Clean Out dia. 2"',
    'satuan' => 'bh',
    'besaran' => 47500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Clean Out dia. 2-1/2"',
    'satuan' => 'bh',
    'besaran' => 56700,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Clean Out dia. 3"',
    'satuan' => 'bh',
    'besaran' => 65000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Clean Out dia. 4"',
    'satuan' => 'bh',
    'besaran' => 72500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Clean Out dia. 5"',
    'satuan' => 'bh',
    'besaran' => 178900,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Clean Out dia. 6"',
    'satuan' => 'bh',
    'besaran' => 230880,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Clean Out dia. 8"',
    'satuan' => 'bh',
    'besaran' => 370000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Roof Drain dia. 2"',
    'satuan' => 'Bh',
    'besaran' => 29800,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Roof Drain dia. 2-1/2"',
    'satuan' => 'Bh',
    'besaran' => 33925,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Roof Drain dia. 3"',
    'satuan' => 'Bh',
    'besaran' => 37375,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Roof Drain dia. 4"',
    'satuan' => 'Bh',
    'besaran' => 40250,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Roof Drain dia. 5"',
    'satuan' => 'Bh',
    'besaran' => 51700,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Roof Drain dia. 6"',
    'satuan' => 'Bh',
    'besaran' => 61100,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Roof Drain dia. 8"',
    'satuan' => 'Bh',
    'besaran' => 90250,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Roof Drain dia. 10"',
    'satuan' => 'Bh',
    'besaran' => 142500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Roof Drain dia. 12"',
    'satuan' => 'Bh',
    'besaran' => 167500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floor Clean Out dia. 2"',
    'satuan' => 'Bh',
    'besaran' => 136800,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floor Clean Out dia. 2-1/2"',
    'satuan' => 'Bh',
    'besaran' => 163100,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floor Clean Out dia. 3"',
    'satuan' => 'Bh',
    'besaran' => 199500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floor Clean Out dia. 4"',
    'satuan' => 'Bh',
    'besaran' => 300300,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floor Clean Out dia. 6"',
    'satuan' => 'Bh',
    'besaran' => 415500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Floor Clean Out dia. 8"',
    'satuan' => 'Bh',
    'besaran' => 507600,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Vent Cap dia. 2"',
    'satuan' => 'Bh',
    'besaran' => 45000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Vent Cap dia. 3"',
    'satuan' => 'Bh',
    'besaran' => 65000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Vent Cap dia. 4"',
    'satuan' => 'Bh',
    'besaran' => 80000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV set dia. 2"',
    'satuan' => 'Bh',
    'besaran' => 4900000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV set dia. 2-1/2"',
    'satuan' => 'Bh',
    'besaran' => 5350000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV Set dia. 3"',
    'satuan' => 'Bh',
    'besaran' => 7500000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV set dia. 4"',
    'satuan' => 'Bh',
    'besaran' => 8450000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV set dia. 6"',
    'satuan' => 'Bh',
    'besaran' => 8930000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'PRV set dia. 8"',
    'satuan' => 'Bh',
    'besaran' => 9430000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'AAV dia. 1/2"',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'AAV dia. 1"',
    'satuan' => 'unit',
    'besaran' => 850000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'AAV dia. 2"',
    'satuan' => 'unit',
    'besaran' => 1050000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'AAV dia. 3"',
    'satuan' => 'unit',
    'besaran' => 1230800,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'AAV dia. 4"',
    'satuan' => 'unit',
    'besaran' => 1432000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'AAV dia. 6"',
    'satuan' => 'unit',
    'besaran' => 1653000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Vent Out dia. 2"',
    'satuan' => 'unit',
    'besaran' => 235000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'WLC dan Pengkabelan',
    'satuan' => 'unit',
    'besaran' => 81100,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pressure Switch',
    'satuan' => 'unit',
    'besaran' => 220800,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Header Pipa PVC AW Dia. 4"',
    'satuan' => "m'",
    'besaran' => 1325000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Header Pipa Galvanis MED Class Dia. 4"',
    'satuan' => "m'",
    'besaran' => 5600000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Header Pipa BS SCH 40 Dia. 8"',
    'satuan' => "m'",
    'besaran' => 3500000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Header Pipa BS SCH 40 Dia. 10"',
    'satuan' => "m'",
    'besaran' => 4600000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Dop PVC dia. 3"',
    'satuan' => 'Bh',
    'besaran' => 9950,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Dop PVC dia. 4"',
    'satuan' => 'Bh',
    'besaran' => 19500,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Dop PVC dia. 6"',
    'satuan' => 'Bh',
    'besaran' => 28000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 100 mm',
    'satuan' => "m'",
    'besaran' => 1083333,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 4" (100 mm)',
    'satuan' => "m'",
    'besaran' => 1083000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 125 mm',
    'satuan' => "m'",
    'besaran' => 1100000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 5" (125 mm)',
    'satuan' => "m'",
    'besaran' => 1100000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 150 mm',
    'satuan' => "m'",
    'besaran' => 1300000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 6" (150 mm)',
    'satuan' => "m'",
    'besaran' => 1300000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 200 mm',
    'satuan' => "m'",
    'besaran' => 1450000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 8" (200 mm)',
    'satuan' => "m'",
    'besaran' => 1450000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 250 mm',
    'satuan' => "m'",
    'besaran' => 1570000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 10" (250 mm)',
    'satuan' => "m'",
    'besaran' => 1570000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 300 mm',
    'satuan' => "m'",
    'besaran' => 1630000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 12" (300 mm)',
    'satuan' => "m'",
    'besaran' => 1640000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 400 mm',
    'satuan' => "m'",
    'besaran' => 1780000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 16" (400 mm)',
    'satuan' => "m'",
    'besaran' => 1790000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 450 mm',
    'satuan' => "m'",
    'besaran' => 1840000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 18" (450 mm)',
    'satuan' => "m'",
    'besaran' => 1850000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 500 mm',
    'satuan' => "m'",
    'besaran' => 1950000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 20" (500 mm)',
    'satuan' => "m'",
    'besaran' => 1960000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 600 mm',
    'satuan' => "m'",
    'besaran' => 2100000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 24" (600 mm)',
    'satuan' => "m'",
    'besaran' => 2115000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 800 mm',
    'satuan' => "m'",
    'besaran' => 2350000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 32" (800 mm)',
    'satuan' => "m'",
    'besaran' => 2360000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 900 mm',
    'satuan' => "m'",
    'besaran' => 2430000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 36" (900 mm)',
    'satuan' => "m'",
    'besaran' => 2440000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 1000 mm',
    'satuan' => "m'",
    'besaran' => 2560000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 40" (1000 mm)',
    'satuan' => "m'",
    'besaran' => 2570000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI dia. 1100 mm',
    'satuan' => "m'",
    'besaran' => 2720000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 44" (1100 mm)',
    'satuan' => "m'",
    'besaran' => 2730000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa DCI, DN. 48" (1200 mm)',
    'satuan' => "m'",
    'besaran' => 236000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton dia. 200 mm',
    'satuan' => "m'",
    'besaran' => 235000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton, DN. 8" (200 mm)',
    'satuan' => "m'",
    'besaran' => 236000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton dia. 300 mm',
    'satuan' => "m'",
    'besaran' => 264000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton, DN. 12" (300 mm)',
    'satuan' => "m'",
    'besaran' => 265000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton dia. 400 mm',
    'satuan' => "m'",
    'besaran' => 285000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton, DN. 16" (400 mm)',
    'satuan' => "m'",
    'besaran' => 286000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton dia. 500 mm',
    'satuan' => "m'",
    'besaran' => 299000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton, DN. 20" (500 mm)',
    'satuan' => "m'",
    'besaran' => 300000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton dia. 600 mm',
    'satuan' => "m'",
    'besaran' => 350000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton, DN. 24" (600 mm)',
    'satuan' => "m'",
    'besaran' => 351000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton dia. 700 mm',
    'satuan' => "m'",
    'besaran' => 410000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton, DN. 28" (700 mm)',
    'satuan' => "m'",
    'besaran' => 411000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton dia. 800 mm',
    'satuan' => "m'",
    'besaran' => 490000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton, DN. 32" (800 mm)',
    'satuan' => "m'",
    'besaran' => 491000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton dia. 1000 mm',
    'satuan' => "m'",
    'besaran' => 570000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton, DN. 40" (1000 mm)',
    'satuan' => "m'",
    'besaran' => 571000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton dia. 1200 mm',
    'satuan' => "m'",
    'besaran' => 640000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Pipa Beton, DN. 48" (1200 mm)',
    'satuan' => "m'",
    'besaran' => 641000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 6" (150 mm)',
    'satuan' => "buah",
    'besaran' => 225000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 8" (200 mm)',
    'satuan' => "buah",
    'besaran' => 290000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 10" (250 mm)',
    'satuan' => "buah",
    'besaran' => 350000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 12" (300 mm)',
    'satuan' => "buah",
    'besaran' => 410000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 16" (400 mm)',
    'satuan' => "buah",
    'besaran' => 490000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 18" (450 mm)',
    'satuan' => "buah",
    'besaran' => 530000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 20" (500 mm)',
    'satuan' => "buah",
    'besaran' => 590000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 24" (600 mm)',
    'satuan' => "buah",
    'besaran' => 670000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 28" (700 mm)',
    'satuan' => "buah",
    'besaran' => 750000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 32" (800 mm)',
    'satuan' => "buah",
    'besaran' => 810000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 36" (900 mm)',
    'satuan' => "buah",
    'besaran' => 890000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 40" (1000 mm)',
    'satuan' => "buah",
    'besaran' => 950000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 44" (1100 mm)',
    'satuan' => "buah",
    'besaran' => 1050000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 48" (1200 mm)',
    'satuan' => "buah",
    'besaran' => 1119000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 1/2" (15 mm)',
    'satuan' => "buah",
    'besaran' => 95000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 3/4" (20 mm)',
    'satuan' => "buah",
    'besaran' => 105000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 1" (25 mm)',
    'satuan' => "buah",
    'besaran' => 115000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 1-1/4" (32 mm)',
    'satuan' => "buah",
    'besaran' => 129000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 1-1/2" (40 mm)',
    'satuan' => "buah",
    'besaran' => 135000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 2" (50 mm)',
    'satuan' => "buah",
    'besaran' => 150000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 2-1/2" (65 mm)',
    'satuan' => "buah",
    'besaran' => 170000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 3" (80 mm)',
    'satuan' => "buah",
    'besaran' => 192000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 4" (100 mm)',
    'satuan' => "buah",
    'besaran' => 205000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Valve Ø 5" (125 mm)',
    'satuan' => "buah",
    'besaran' => 215000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 6" (150 mm)',
    'satuan' => "buah",
    'besaran' => 65000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 8" (200 mm)',
    'satuan' => "buah",
    'besaran' => 138000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 10" (250 mm)',
    'satuan' => "buah",
    'besaran' => 215000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 18" (450 mm)',
    'satuan' => "buah",
    'besaran' => 285000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 20" (500 mm)',
    'satuan' => "buah",
    'besaran' => 350000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 24" (600 mm)',
    'satuan' => "buah",
    'besaran' => 435000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 28" (700 mm)',
    'satuan' => "buah",
    'besaran' => 510000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 32" (800 mm)',
    'satuan' => "buah",
    'besaran' => 599000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 36" (900 mm)',
    'satuan' => "buah",
    'besaran' => 670000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 40" (1000 mm)',
    'satuan' => "buah",
    'besaran' => 750000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 44" (1100 mm)',
    'satuan' => "buah",
    'besaran' => 830000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 48" (1200 mm)',
    'satuan' => "buah",
    'besaran' => 950000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 1/2" (15 mm)',
    'satuan' => "buah",
    'besaran' => 20000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 3/4" (20 mm)',
    'satuan' => "buah",
    'besaran' => 27000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 1" (25 mm)',
    'satuan' => "buah",
    'besaran' => 30000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 1-1/4" (32 mm)',
    'satuan' => "buah",
    'besaran' => 32000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 1-1/2" (40 mm)',
    'satuan' => "buah",
    'besaran' => 39000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 2" (50 mm)',
    'satuan' => "buah",
    'besaran' => 42000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 2-1/2" (65 mm)',
    'satuan' => "buah",
    'besaran' => 48000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 5" (125 mm)',
    'satuan' => "buah",
    'besaran' => 55000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 3" (80 mm)',
    'satuan' => "buah",
    'besaran' => 59000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 4" (100 mm)',
    'satuan' => "buah",
    'besaran' => 62000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 12" (300 mm)',
    'satuan' => "buah",
    'besaran' => 235000,
    'keterangan1' => null,
]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 3,
    'uraian' => 'Tee Ø 16" (400 mm)',
    'satuan' => "buah",
    'besaran' => 255000,
    'keterangan1' => null,
]);


// KATEGORI 4 BESI DAN BAJA
satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Baja (ulir) U-39',
    'satuan' => 'kg',
    'besaran' => 14600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Baja (ulir) U-48',
    'satuan' => 'kg',
    'besaran' => 14600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Baja Tahan Karat (Stainless Steel)',
    'satuan' => 'kg',
    'besaran' => 80340,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Baja L 40.40.4',
    'satuan' => 'kg',
    'besaran' => 14840,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Frame besi L.30.30.3',
    'satuan' => 'kg',
    'besaran' => 14840,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Frame Allum L.10.1',
    'satuan' => 'kg',
    'besaran' => 25000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi angkur diameter 8',
    'satuan' => 'kg',
    'besaran' => 35000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi angkur/mur/baut',
    'satuan' => 'kg',
    'besaran' => 16660,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Baut',
    'satuan' => 'kg',
    'besaran' => 17000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi hollow 38.38.2',
    'satuan' => 'kg',
    'besaran' => 13700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi hollow 50.50.3',
    'satuan' => 'kg',
    'besaran' => 13800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi hollow galvanis 40.40',
    'satuan' => "m'",
    'besaran' => 6250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi lis kaca (1 x 1) cm',
    'satuan' => "m'",
    'besaran' => 10500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi plat baja tebal 2 mm',
    'satuan' => 'kg',
    'besaran' => 25000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi profil',
    'satuan' => 'kg',
    'besaran' => 14840,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi siku',
    'satuan' => 'kg',
    'besaran' => 14700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi siku 30x30x3 mm',
    'satuan' => 'kg',
    'besaran' => 13000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi siku 40x40x4 mm',
    'satuan' => 'kg',
    'besaran' => 15667,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Baja Profil Siku',
    'satuan' => 'kg',
    'besaran' => 15500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi siku 40x40x4',
    'satuan' => "m'",
    'besaran' => 20825,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi siku 20x20 tebal 2 mm',
    'satuan' => 'm',
    'besaran' => 19500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi strip',
    'satuan' => 'kg',
    'besaran' => 7500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Teralis Besi Strip lengkap dengan accessories',
    'satuan' => 'M2',
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pelat Strip t=2,6 mm, L=12 cm',
    'satuan' => 'buah',
    'besaran' => 21000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pelat Strip t=2,6 mm, L=14 cm',
    'satuan' => 'buah',
    'besaran' => 29000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pelat Strip t=2,6 mm, L=17 cm',
    'satuan' => 'buah',
    'besaran' => 39000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pelat Strip t=2,6 mm, L=34 cm',
    'satuan' => 'buah',
    'besaran' => 58000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Angkur Baja Full Drat ASTM 307 dia. 10 mm Panjang 35 cm',
    'satuan' => 'buah',
    'besaran' => 9200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Angkur Baja Full Drat ASTM 307 dia 10 mm Panjang 65 cm',
    'satuan' => 'buah',
    'besaran' => 18000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi strip (0,2x2) cm',
    'satuan' => "m'",
    'besaran' => 5000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi strip (0,2x2) cm',
    'satuan' => 'kg',
    'besaran' => 15000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi strip (20x3) mm',
    'satuan' => 'kg',
    'besaran' => 17250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Plat Strip 3/30 mm',
    'satuan' => "m'",
    'besaran' => 9900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Besi strip tebal 5 mm',
    'satuan' => 'kg',
    'besaran' => 7500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'BjTP',
    'satuan' => 'kg',
    'besaran' => 14250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Baja Tulangan Polos (BjTP) diameter < 12 mm',
    'satuan' => 'kg',
    'besaran' => 14250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Baja Tulangan Polos (BjTP) diameter >12 mm',
    'satuan' => 'kg',
    'besaran' => 16000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'BjTS',
    'satuan' => 'kg',
    'besaran' => 14500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Baja Tulangan Sirip (BjTS) diameter < 12 mm',
    'satuan' => 'kg',
    'besaran' => 14500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Baja Tulangan Sirip (BjTS) diameter >12 mm',
    'satuan' => 'kg',
    'besaran' => 16500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Bronjong kawat pabrikan Uk.2x1x0,5 ø 3mm mesh 8x10',
    'satuan' => 'Unit',
    'besaran' => 460000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Bronjong kawat pabrikan Uk.3x1,5x0,5 ø 3mm mesh 8x10',
    'satuan' => 'Unit',
    'besaran' => 891000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Bronjong kawat pabrikan Uk.3x1x0,5 ø 3mm mesh 8x10',
    'satuan' => 'Unit',
    'besaran' => 656000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Bronjong kawat pabrikan Uk.4x1x0,5 ø 3mm mesh 8x10',
    'satuan' => 'Unit',
    'besaran' => 805000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Dinabolt dia. 12mm (10-15 cm)',
    'satuan' => 'buah',
    'besaran' => 4550,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Dynabolt M12',
    'satuan' => 'buah',
    'besaran' => 30500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Jaring Kawat Baja dilas',
    'satuan' => 'kg',
    'besaran' => 15150,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat bronjong',
    'satuan' => 'kg',
    'besaran' => 15680,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat duri',
    'satuan' => 'roll',
    'besaran' => 116750,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat galvanis Ø 3 mm',
    'satuan' => 'kg',
    'besaran' => 26020,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat galvanis Ø 4 mm',
    'satuan' => 'kg',
    'besaran' => 25400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat galvanis Ø 5 mm',
    'satuan' => 'kg',
    'besaran' => 22800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat harmonika 12 x 24 mm',
    'satuan' => 'm2',
    'besaran' => 28450,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat harmonika 14 x 30 mm',
    'satuan' => 'm2',
    'besaran' => 28470,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat harmonika 14 x 35 mm',
    'satuan' => 'm2',
    'besaran' => 27900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat kasa',
    'satuan' => 'm2',
    'besaran' => 26900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat beton',
    'satuan' => 'kg',
    'besaran' => 18800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat bendrat',
    'satuan' => 'kg',
    'besaran' => 18800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat duri',
    'satuan' => "m'",
    'besaran' => 1750,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat seng 3mm',
    'satuan' => 'kg',
    'besaran' => 18800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat harmonika',
    'satuan' => 'm2',
    'besaran' => 34620,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat jaring panjang 240 cm',
    'satuan' => 'lembar',
    'besaran' => 300000,
    'keterangan1' => 'Lebar 120 cm',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat las',
    'satuan' => 'kg',
    'besaran' => 45550,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat nyamuk',
    'satuan' => 'm3',
    'besaran' => 20190,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat nyamuk nylon',
    'satuan' => 'm2',
    'besaran' => 18000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Kawat Ø 4 mm',
    'satuan' => 'kg',
    'besaran' => 35000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Lapisan hot deep galvanis',
    'satuan' => 'kg',
    'besaran' => 8400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku',
    'satuan' => 'kg',
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku 1 inch',
    'satuan' => 'kg',
    'besaran' => 15000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku 12 cm',
    'satuan' => 'buah',
    'besaran' => 1500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku 2 inch',
    'satuan' => 'kg',
    'besaran' => 18000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku 4 inch',
    'satuan' => 'kg',
    'besaran' => 19000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku biasa 5 inchi',
    'satuan' => 'kg',
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku 5 dan 10 cm',
    'satuan' => 'kg',
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku 5 dan 7 cm',
    'satuan' => 'kg',
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku 7 - 10 cm',
    'satuan' => 'kg',
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku 3 cm',
    'satuan' => 'kg',
    'besaran' => 15000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku Tripleks',
    'satuan' => 'kg',
    'besaran' => 17500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku beton',
    'satuan' => 'kg',
    'besaran' => 39450,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku Beton 5 cm',
    'satuan' => 'buah',
    'besaran' => 200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku hak panj 15cm',
    'satuan' => 'kg',
    'besaran' => 22070,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku pancing 6x23',
    'satuan' => 'kg',
    'besaran' => 19460,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku payung',
    'satuan' => 'kg',
    'besaran' => 35590,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku rivet',
    'satuan' => 'buah',
    'besaran' => 200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku sekrup',
    'satuan' => 'kg',
    'besaran' => 30090,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku sekrup (buah)',
    'satuan' => 'buah',
    'besaran' => 1600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku Sekrup 1-2 cm',
    'satuan' => 'buah',
    'besaran' => 1600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku Fishes/kotak',
    'satuan' => 'kotak',
    'besaran' => 29000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Paku Fishes',
    'satuan' => 'buah',
    'besaran' => 580,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pintu tahan api',
    'satuan' => 'unit',
    'besaran' => 8000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pipa baja dia. 30 cm',
    'satuan' => "m'",
    'besaran' => 1680000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pipa baja dia. 40 cm',
    'satuan' => "m'",
    'besaran' => 2240000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pipa baja dia. 50 cm',
    'satuan' => "m'",
    'besaran' => 2800000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pipa besi hitam 1 inch',
    'satuan' => "m'",
    'besaran' => 15500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pipa besi hitam 1,5 inch',
    'satuan' => "m'",
    'besaran' => 22000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pipa besi hitam 2 inch',
    'satuan' => "m'",
    'besaran' => 31000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Pipa besi hitam 3 inch',
    'satuan' => "m'",
    'besaran' => 42000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Saringan pasir',
    'satuan' => "m'",
    'besaran' => 16650,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Sekrup kait',
    'satuan' => "buah",
    'besaran' => 700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Wiremesh M10',
    'satuan' => 'kg',
    'besaran' => 12430,
    'keterangan1' => '96,54 kg/lembar',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Wiremesh M12',
    'satuan' => 'kg',
    'besaran' => 12660,
    'keterangan1' => '139,02 kg/lembar',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Wiremesh M6',
    'satuan' => 'kg',
    'besaran' => 11522,
    'keterangan1' => '34,76 kg/lembar',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Wiremesh M7',
    'satuan' => 'kg',
    'besaran' => 11816,
    'keterangan1' => '47,31 kg/lembar',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Wiremesh M8',
    'satuan' => 'kg',
    'besaran' => 12049,
    'keterangan1' => '61,79 kg/lembar',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 4,
    'uraian' => 'Wiremesh M9',
    'satuan' => 'kg',
    'besaran' => 12276,
    'keterangan1' => '8,20 kg/lembar',
]);



// kategori 5

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Aluminium gelombang 95x180 cm',
    'satuan' => 'lembar',
    'besaran' => 180400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang kecil 4mm (150x105)',
    'satuan' => 'lembar',
    'besaran' => 47800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang kecil 4mm (180x105)',
    'satuan' => 'lembar',
    'besaran' => 57300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang kecil 4mm (210x105)',
    'satuan' => 'lembar',
    'besaran' => 65300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang kecil 4mm (240x105)',
    'satuan' => 'lembar',
    'besaran' => 75500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 5 mm, 150x105 cm',
    'satuan' => 'lembar',
    'besaran' => 120000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 5 mm, 180x92 cm',
    'satuan' => 'lembar',
    'besaran' => 85500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 5 mm, 200x92 cm',
    'satuan' => 'lembar',
    'besaran' => 94000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 5 mm, 210x105 cm',
    'satuan' => 'lembar',
    'besaran' => 125000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 5 mm, 225x92 cm',
    'satuan' => 'lembar',
    'besaran' => 104900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 5 mm, 240x105 cm',
    'satuan' => 'lembar',
    'besaran' => 130000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 5 mm, 250x92 cm',
    'satuan' => 'lembar',
    'besaran' => 113400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 5 mm, 300x105 cm',
    'satuan' => 'lembar',
    'besaran' => 135000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 6 mm, 180x108 cm',
    'satuan' => 'lembar',
    'besaran' => 93000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 6 mm, 210x108 cm',
    'satuan' => 'lembar',
    'besaran' => 92900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 6 mm, 240x108 cm',
    'satuan' => 'lembar',
    'besaran' => 99600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 6 mm, 270x108 cm',
    'satuan' => 'lembar',
    'besaran' => 113400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang besar 6 mm, 300x108 cm',
    'satuan' => 'lembar',
    'besaran' => 131000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang kecil 4 mm, 270x105 cm',
    'satuan' => 'lembar',
    'besaran' => 88400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang kecil 4 mm, 300x105 cm',
    'satuan' => 'lembar',
    'besaran' => 100500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Atap metal berpasir',
    'satuan' => 'm2',
    'besaran' => 112500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Atap metal lembaran',
    'satuan' => 'm2',
    'besaran' => 112500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Atap metal menerus',
    'satuan' => 'm2',
    'besaran' => 80000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Atap Rumbia / Atap Saung 150cmx50cm',
    'satuan' => 'buah',
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Atap UPVC uk. 86x119 cm',
    'satuan' => 'm2',
    'besaran' => 200000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Bitumen tekstur genting',
    'satuan' => 'lembar',
    'besaran' => 62700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Bubung genteng kodok',
    'satuan' => 'buah',
    'besaran' => 8600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Bubung genteng palentong',
    'satuan' => 'buah',
    'besaran' => 10700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Bubungan asbes besar',
    'satuan' => 'buah',
    'besaran' => 30700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Bubungan asbes kecil',
    'satuan' => 'buah',
    'besaran' => 48100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Bubungan beton press',
    'satuan' => 'buah',
    'besaran' => 5300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Fibre glass (jabes) 180x105 cm',
    'satuan' => 'lembar',
    'besaran' => 78500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Fibre glass (jabes) 200x92 cm',
    'satuan' => 'lembar',
    'besaran' => 68500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Fibre glass (jabes) 210x105 cm',
    'satuan' => 'buah',
    'besaran' => 89700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Fibre glass (jabes) 250x105 cm',
    'satuan' => 'buah',
    'besaran' => 122300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Fibre glass (jabes) 250x92 cm',
    'satuan' => 'buah',
    'besaran' => 162500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Fibreglass 180x90 cm',
    'satuan' => 'lembar',
    'besaran' => 59600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Frame \'S\' 85.50 tinggi profil 85 dan tebal 0,75 mm',
    'satuan' => 'batang',
    'besaran' => 145000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Galvalum Gelombang Lapis Pasir',
    'satuan' => 'lembar',
    'besaran' => 61200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Genteng aspal 80x100 cm',
    'satuan' => 'buah',
    'besaran' => 149700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Genteng beton',
    'satuan' => 'buah',
    'besaran' => 6800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Genteng decra bond',
    'satuan' => 'buah',
    'besaran' => 9800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Genteng kodok',
    'satuan' => 'buah',
    'besaran' => 3400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Genteng kodok glazuur',
    'satuan' => 'buah',
    'besaran' => 5800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Genteng metal',
    'satuan' => 'lembar',
    'besaran' => 50700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Genteng metal berpasir',
    'satuan' => 'lembar',
    'besaran' => 30500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Genteng palentong',
    'satuan' => 'buah',
    'besaran' => 2800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Genteng palentong super',
    'satuan' => 'buah',
    'besaran' => 5300,
    'keterangan1' => 'setara morando',
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Listplang papan kalsiboard',
    'satuan' => 'buah',
    'besaran' => 56200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Listplang tekstur kayu',
    'satuan' => 'buah',
    'besaran' => 54500,
    'keterangan1' => null,
]);



satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok genteng aspal',
    'satuan' => 'buah',
    'besaran' => 95000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok genteng beton',
    'satuan' => 'buah',
    'besaran' => 9600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok genteng metal',
    'satuan' => 'buah',
    'besaran' => 25600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok paten 105 cm',
    'satuan' => 'lembar',
    'besaran' => 70000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok paten 108 cm',
    'satuan' => 'lembar',
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok paten 92 cm',
    'satuan' => 'lembar',
    'besaran' => 65000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok setel rata 105 cm',
    'satuan' => 'lembar',
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok setel rata 108 cm',
    'satuan' => 'lembar',
    'besaran' => 80000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok setel rata 92 cm',
    'satuan' => 'lembar',
    'besaran' => 70000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok standar',
    'satuan' => 'lembar',
    'besaran' => 67000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok stel gelombang 105 cm',
    'satuan' => 'lembar',
    'besaran' => 70000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok stel gelombang 108 cm',
    'satuan' => 'lembar',
    'besaran' => 80000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Nok stel gelombang 92 cm',
    'satuan' => 'lembar',
    'besaran' => 60000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Reng batten 0,5',
    'satuan' => 'batang',
    'besaran' => 35000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Roof light fiberglass',
    'satuan' => 'lembar',
    'besaran' => 116300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng gelombang',
    'satuan' => 'lembar',
    'besaran' => 85000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng gelombang 3x6 inch',
    'satuan' => 'lembar',
    'besaran' => 83100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng Gelombang 105 cm x 180 cm',
    'satuan' => 'lembar',
    'besaran' => 85000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng gelombang bjls 0.18 panjang 180 cm',
    'satuan' => 'lembar',
    'besaran' => 55200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng gelombang bjls 0.20 panjang 180 cm',
    'satuan' => 'lembar',
    'besaran' => 63900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng gelombang bjls 30 panjang 180 cm',
    'satuan' => 'lembar',
    'besaran' => 73300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng gelombang bjls 0.40 panjang 180 cm',
    'satuan' => 'lembar',
    'besaran' => 73000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng gelombang bjls 28',
    'satuan' => 'lembar',
    'besaran' => 85500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng gelombang bljs 30',
    'satuan' => 'lembar',
    'besaran' => 79000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng gelombang panjang 200 cm',
    'satuan' => 'lembar',
    'besaran' => 85000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng plat BJLS 0.18 lebar 55 cm',
    'satuan' => 'm\'',
    'besaran' => 24800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng plat BJLS 0.20 lebar 55 cm',
    'satuan' => 'm\'',
    'besaran' => 28100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng plat BJLS 0.28 lebar 55 cm',
    'satuan' => 'm\'',
    'besaran' => 30400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng plat BJLS 0.30 lebar 55 cm',
    'satuan' => 'm\'',
    'besaran' => 34600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng plat 3x6 inch',
    'satuan' => 'lembar',
    'besaran' => 66900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng plat 3x6 inch bjls 28',
    'satuan' => 'lembar',
    'besaran' => 72200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng pelat',
    'satuan' => 'lembar',
    'besaran' => 72200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng Pelat 90x180 cm bjls 28',
    'satuan' => 'lembar',
    'besaran' => 72200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng plat bjls 28',
    'satuan' => 'm\'',
    'besaran' => 70200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng plat bjls 30',
    'satuan' => 'm\'',
    'besaran' => 74400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Seng plat bjls 30 (lembar)',
    'satuan' => 'lembar',
    'besaran' => 35000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Sirap (100 lbr)',
    'satuan' => 'pak',
    'besaran' => 200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Sirap kayu',
    'satuan' => 'buah',
    'besaran' => 5000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Wab capsule 62.27 tinggi 62 mm dan tebal 0,4mm',
    'satuan' => 'batang',
    'besaran' => 55000,
    'keterangan1' => null,
]);

// MATERIAL PLAFON
satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes 1,00 x 1,00 m',
    'satuan' => 'lembar',
    'besaran' => 17400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Compon Flafond',
    'satuan' => 'kg',
    'besaran' => 5000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'cross tee',
    'satuan' => 'batang',
    'besaran' => 18000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'GRC Pelat t=4 mm uk 122x244 cm',
    'satuan' => 'lembar',
    'besaran' => 200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'GRCboard (120 cm x 240 cm x 5 mm)',
    'satuan' => 'm2',
    'besaran' => 80800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'GRCboard (120 cm x 240 cm x 6 mm)',
    'satuan' => 'm2',
    'besaran' => 99300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Gypsum Board (120 cm x 240 cm x 12 mm)',
    'satuan' => 'lembar',
    'besaran' => 93000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Gypsum Board (122 cm x 244 cm x 12 mm)',
    'satuan' => 'lembar',
    'besaran' => 96000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Gypsum board (120 cm x 240 cm x 9 mm)',
    'satuan' => 'lembar',
    'besaran' => 70000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Rockwool tebal 50 mm',
    'satuan' => 'm2',
    'besaran' => 290000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Lambersening plafon <3',
    'satuan' => 'm2',
    'besaran' => 180000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Lambersening plafon >3',
    'satuan' => 'm2',
    'besaran' => 200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'List gypsum profil',
    'satuan' => 'm\'',
    'besaran' => 15800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Listplank GRC lebar 20 cm',
    'satuan' => 'm\'',
    'besaran' => 21000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Listplank GRC lebar 30 cm',
    'satuan' => 'm\'',
    'besaran' => 23000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Main tee',
    'satuan' => 'batang',
    'besaran' => 34000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Papan semen',
    'satuan' => 'm2',
    'besaran' => 45000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Asbes gelombang',
    'satuan' => 'lembar',
    'besaran' => 62400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Pelat asbes tebal 3,5 mm',
    'satuan' => 'lembar',
    'besaran' => 62400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Pelat asbes tebal 4 mm',
    'satuan' => 'lembar',
    'besaran' => 69800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Plafon akustik 30x30 cm',
    'satuan' => 'lembar',
    'besaran' => 6200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Plafon akustik 30x60 cm',
    'satuan' => 'lembar',
    'besaran' => 13900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 5,
    'uraian' => 'Plafon akustik 60x120 cm',
    'satuan' => 'lembar',
    'besaran' => 24000,
    'keterangan1' => null,
]);



satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Bata Ekspose Tempel warna natural 8x24x2 cm',
    'satuan' => "m'",
    'besaran' => 125000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Bata tempel',
    'satuan' => "buah",
    'besaran' => 2500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Batako 20x40x10 cm',
    'satuan' => "buah",
    'besaran' => 3000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Batu andesit 30x30 t=3cm',
    'satuan' => "m2",
    'besaran' => 165000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Batu andesit 30x30 t=5cm',
    'satuan' => "m2",
    'besaran' => 265000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Batu paras',
    'satuan' => "m2",
    'besaran' => 125000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Batu paros',
    'satuan' => "m2",
    'besaran' => 131600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Batu tempel hitam',
    'satuan' => "m2",
    'besaran' => 121600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Floor hardener',
    'satuan' => "kg",
    'besaran' => 5000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Flooring Kayu Kruing 1,5x13,5x60 cm',
    'satuan' => "m2",
    'besaran' => 195000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Flooring Kayu Merbau 1,5x9x30cm',
    'satuan' => "m2",
    'besaran' => 420000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Flooring Kayu Sonokeling Grade B 1,5x9x30cm',
    'satuan' => "m2",
    'besaran' => 420000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Granit bakar 10x10, t=2cm',
    'satuan' => "m2",
    'besaran' => 275000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Granit bakar 30x30, t=2cm',
    'satuan' => "m2",
    'besaran' => 315000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Granit tile unpolish / anti skid',
    'satuan' => "m2",
    'besaran' => 220100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Granit tile 30x30 cm (double loading)',
    'satuan' => "buah",
    'besaran' => 27700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Granit tile 40x40 cm (double loading)',
    'satuan' => "buah",
    'besaran' => 39200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Granit tile 60x60 cm (double loading)',
    'satuan' => "buah",
    'besaran' => 92800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Granito 30 x 30 cm',
    'satuan' => "m2",
    'besaran' => 326400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Granito 40 x 40 cm',
    'satuan' => "m2",
    'besaran' => 242500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Guiding Block Warna t = 6 cm',
    'satuan' => "m2",
    'besaran' => 330600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Homogenous tile 30x30 cm',
    'satuan' => "buah",
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Homogenous tile 40x40 cm',
    'satuan' => "buah",
    'besaran' => 30000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Homogenous tile 60x60 cm',
    'satuan' => "buah",
    'besaran' => 50000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Homogenous tile unpolish 30x30 cm',
    'satuan' => "buah",
    'besaran' => 27000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Homogenous tile unpolish 40x40 cm',
    'satuan' => "buah",
    'besaran' => 39000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Homogenous tile unpolish 60x60 cm',
    'satuan' => "buah",
    'besaran' => 56000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Homogenous tile dinding 30x30 cm',
    'satuan' => "buah",
    'besaran' => 22000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Homogenous tile dinding 40x40 cm',
    'satuan' => "buah",
    'besaran' => 30000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Homogenous tile dinding 60x60 cm',
    'satuan' => "buah",
    'besaran' => 35000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Karpet',
    'satuan' => "m2",
    'besaran' => 45000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik 20 x 25 cm',
    'satuan' => "buah",
    'besaran' => 2400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik 10 x 20 cm',
    'satuan' => "buah",
    'besaran' => 2300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik 20x20 cm',
    'satuan' => "buah",
    'besaran' => 2200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik 25 x 25 cm',
    'satuan' => "buah",
    'besaran' => 3100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik 30x30 cm',
    'satuan' => "buah",
    'besaran' => 4000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik 40x40 cm',
    'satuan' => "buah",
    'besaran' => 8100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik 60x60 cm',
    'satuan' => "buah",
    'besaran' => 12000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik Variasi 30x30 cm',
    'satuan' => "buah",
    'besaran' => 4000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik Variasi 40x40 cm',
    'satuan' => "buah",
    'besaran' => 8100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik Variasi 60x60 cm',
    'satuan' => "buah",
    'besaran' => 12000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Step Nosing Keramik 10x60 cm',
    'satuan' => "buah",
    'besaran' => 28000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik Tactile 30x30 cm',
    'satuan' => "buah",
    'besaran' => 37000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik Tactile 40x40 cm',
    'satuan' => "buah",
    'besaran' => 39500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik artistik 10x10 cm',
    'satuan' => "buah",
    'besaran' => 1500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik artistik 20x20 cm',
    'satuan' => "buah",
    'besaran' => 2000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik artistik 30x30 cm',
    'satuan' => "buah",
    'besaran' => 3000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik artistik 40x40 cm',
    'satuan' => "buah",
    'besaran' => 4000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik artistik 8x8 cm',
    'satuan' => "buah",
    'besaran' => 1000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik cuting 50x50',
    'satuan' => "buah",
    'besaran' => 27500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik dinding 10x20 cm',
    'satuan' => "buah",
    'besaran' => 2000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik dinding 20x20 cm',
    'satuan' => "buah",
    'besaran' => 3000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik dinding artistik 10x20 cm',
    'satuan' => "buah",
    'besaran' => 2500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Keramik dinding artistik 5x20 cm',
    'satuan' => "buah",
    'besaran' => 2000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lamparquet Kayu Merbau 1x6x20cm',
    'satuan' => "m2",
    'besaran' => 190000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lamparquet Kayu Merbau 1x9x20cm',
    'satuan' => "m2",
    'besaran' => 200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai engineering wood',
    'satuan' => "m2",
    'besaran' => 200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade A 1,2x5x17 cm',
    'satuan' => "m2",
    'besaran' => 175000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade A 1,2x5x20cm',
    'satuan' => "m2",
    'besaran' => 222000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade A 1,2x5x25 cm',
    'satuan' => "m2",
    'besaran' => 250000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade A 1,2x5x30 cm',
    'satuan' => "m2",
    'besaran' => 280000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade B 1,2x5x17 cm',
    'satuan' => "m2",
    'besaran' => 160000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade B 1,2x5x20cm',
    'satuan' => "m2",
    'besaran' => 195000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade B 1,2x5x25 cm',
    'satuan' => "m2",
    'besaran' => 210000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade B 1,2x5x30 cm',
    'satuan' => "m2",
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade C 1,2x5x20cm',
    'satuan' => "m2",
    'besaran' => 140000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade C 1,2x5x25 cm',
    'satuan' => "m2",
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lantai Parket Jati grade C 1,2x5x30 cm',
    'satuan' => "m2",
    'besaran' => 160000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Lem',
    'satuan' => "kg",
    'besaran' => 60000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Marmer (buah)',
    'satuan' => "buah",
    'besaran' => 800000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Marmer (m2)',
    'satuan' => "m2",
    'besaran' => 492600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Marmer Graphir 10x10 cm',
    'satuan' => "buah",
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Marmer Graphir 12x12 cm',
    'satuan' => "buah",
    'besaran' => 25000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Pen Kuningan titik acuan',
    'satuan' => "buah",
    'besaran' => 27000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Mozaik porselen 10 x 20 cm',
    'satuan' => "m2",
    'besaran' => 73400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Mozaik porselen 15 x 15 cm',
    'satuan' => "m2",
    'besaran' => 74400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Mozaik porselen 20 x 20 cm',
    'satuan' => "m2",
    'besaran' => 75400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Mozaik porselen 20 x 25 cm',
    'satuan' => "m2",
    'besaran' => 75400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Parquet kayu solid',
    'satuan' => "m2",
    'besaran' => 306600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint Kayu 10 cm',
    'satuan' => "buah",
    'besaran' => 85000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint keramik 10 x 20 cm',
    'satuan' => "buah",
    'besaran' => 8200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint keramik 5 x 20 cm',
    'satuan' => "buah",
    'besaran' => 3400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint granit 10 cm x 40 cm',
    'satuan' => "buah",
    'besaran' => 24000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint granit 10cm x 30cm',
    'satuan' => "buah",
    'besaran' => 22600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint homogenous tile uk. 10-15x30 cm',
    'satuan' => "buah",
    'besaran' => 5000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint homogenous tile uk. 10-15x40 cm',
    'satuan' => "buah",
    'besaran' => 7000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint homogenous tile uk. 10-15x60 cm',
    'satuan' => "buah",
    'besaran' => 10000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint homogenous tile unpolish uk. 10-15x30 cm',
    'satuan' => "buah",
    'besaran' => 7000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint homogenous tile unpolish uk. 10-15x40 cm',
    'satuan' => "buah",
    'besaran' => 9000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint homogenous tile unpolish uk. 10-15x60 cm',
    'satuan' => "buah",
    'besaran' => 13000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint internal cove uk. 5x5x20 cm',
    'satuan' => "buah",
    'besaran' => 5000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint keramik 10 x 30 cm',
    'satuan' => "buah",
    'besaran' => 15300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint keramik uk. 10-15x20 cm',
    'satuan' => "buah",
    'besaran' => 2000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint keramik uk. 10-15x30 cm',
    'satuan' => "buah",
    'besaran' => 3000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint keramik uk. 10-15x40 cm',
    'satuan' => "buah",
    'besaran' => 4000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint keramik uk. 10-15x60 cm',
    'satuan' => "buah",
    'besaran' => 5000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint teralux kerang uk. 10-15x30 cm',
    'satuan' => "buah",
    'besaran' => 2000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint teralux kerang uk. 10-15x40 cm',
    'satuan' => "buah",
    'besaran' => 3000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint teralux kerang uk. 10-15x60 cm',
    'satuan' => "buah",
    'besaran' => 4000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint teralux marmer uk. 10-15x30 cm',
    'satuan' => "buah",
    'besaran' => 2500,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint teralux marmer uk. 10-15x40 cm',
    'satuan' => "buah",
    'besaran' => 3000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint teralux marmer uk. 10-15x60 cm',
    'satuan' => "buah",
    'besaran' => 4000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin granit uk. 10-15x30 cm',
    'satuan' => "buah",
    'besaran' => 6000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin granit uk. 10-15x40 cm',
    'satuan' => "buah",
    'besaran' => 8000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin granit uk. 10-15x60 cm',
    'satuan' => "buah",
    'besaran' => 10000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin PC abu-abu uk. 10-15x20 cm',
    'satuan' => "buah",
    'besaran' => 1000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin PC abu-abu uk. 10-15x30 cm',
    'satuan' => "buah",
    'besaran' => 1500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin PC abu-abu uk. 10-15x40 cm',
    'satuan' => "buah",
    'besaran' => 2000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin PC abu-abu uk. 10-15x60 cm',
    'satuan' => "buah",
    'besaran' => 2500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin teraso uk. 10-15x30 cm',
    'satuan' => "buah",
    'besaran' => 4000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin teraso uk. 10-15x40 cm',
    'satuan' => "buah",
    'besaran' => 6000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin warna uk. 10-15x20 cm',
    'satuan' => "buah",
    'besaran' => 1500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin warna uk. 10-15x30 cm',
    'satuan' => "buah",
    'besaran' => 2000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin warna uk. 10-15x40 cm',
    'satuan' => "buah",
    'besaran' => 3000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Plint ubin warna uk. 10-15x60 cm',
    'satuan' => "buah",
    'besaran' => 4500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Porselen 10x20 cm',
    'satuan' => "buah",
    'besaran' => 2000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Porselen 11x11 cm',
    'satuan' => "buah",
    'besaran' => 1000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Porselen 11x11 cm (dus)',
    'satuan' => "dus",
    'besaran' => 83000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Porselen 20x20 cm',
    'satuan' => "buah",
    'besaran' => 4000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Tangga Papan',
    'satuan' => "m2",
    'besaran' => 160000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Tangga Parquet / Flooring',
    'satuan' => "m2",
    'besaran' => 180000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Tegel plint, PC abu-abu 15 x 20 cm',
    'satuan' => "buah",
    'besaran' => 6100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Tegel plint, PC warna 10 x 20 cm',
    'satuan' => "buah",
    'besaran' => 5300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Teraso cor',
    'satuan' => "m3",
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin granit 30x30 cm',
    'satuan' => "buah",
    'besaran' => 14200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin granit 40x40 cm',
    'satuan' => "buah",
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin granit 60x60 cm',
    'satuan' => "buah",
    'besaran' => 30000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin PC abu-abu 20x20 cm',
    'satuan' => "buah",
    'besaran' => 2000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin PC abu-abu 30x30 cm',
    'satuan' => "buah",
    'besaran' => 3400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin PC abu-abu 40x40 cm',
    'satuan' => "buah",
    'besaran' => 4600,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin PC abu-abu 60x60 cm',
    'satuan' => "buah",
    'besaran' => 6000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin porselen lokal 11 x 11 putih',
    'satuan' => "dos",
    'besaran' => 43800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin porselen lokal 11 x 11 warna',
    'satuan' => "dos",
    'besaran' => 46900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin porselen lokal 15 x 15 putih',
    'satuan' => "dos",
    'besaran' => 48400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin porselen lokal 15 x 15 warna',
    'satuan' => "dos",
    'besaran' => 49900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin teralux marmer 30x30 cm',
    'satuan' => "buah",
    'besaran' => 45000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin teralux marmer 40x40 cm',
    'satuan' => "buah",
    'besaran' => 60000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin teralux marmer 60x60 cm',
    'satuan' => "buah",
    'besaran' => 70000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin teraso 30x30 cm',
    'satuan' => "buah",
    'besaran' => 24000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin teraso 40x40 cm',
    'satuan' => "buah",
    'besaran' => 30000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin warna 20x20 cm',
    'satuan' => "buah",
    'besaran' => 2000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin warna 30x30 cm',
    'satuan' => "buah",
    'besaran' => 4500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin warna 40x40 cm',
    'satuan' => "buah",
    'besaran' => 6000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Ubin warna 60x60 cm',
    'satuan' => "buah",
    'besaran' => 8000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Underlayer karpet',
    'satuan' => "m2",
    'besaran' => 10000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'UPVC decking',
    'satuan' => "m2",
    'besaran' => 500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 6,
    'uraian' => 'Vinyl',
    'satuan' => "buah",
    'besaran' => 7000,
    'keterangan1' => null,
]);




// Kategori 7

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Additive',
    'satuan' => "liter",
    'besaran' => 51600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Zat Aditif',
    'satuan' => "kg",
    'besaran' => 25000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Floor lantai (Beton lantai kerja)',
    'satuan' => "m3",
    'besaran' => 805600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Lantai Kerja',
    'satuan' => "m3",
    'besaran' => 805000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton berpori (Aggregat 10/20mm) ready mix',
    'satuan' => "m3",
    'besaran' => 2250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-100 ready mix',
    'satuan' => "m3",
    'besaran' => 788100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-125 ready mix',
    'satuan' => "m3",
    'besaran' => 805600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-175 ready mix',
    'satuan' => "m3",
    'besaran' => 848100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-200 ready mix',
    'satuan' => "m3",
    'besaran' => 869200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-225 ready mix',
    'satuan' => "m3",
    'besaran' => 887700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-250 ready mix',
    'satuan' => "m3",
    'besaran' => 911300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-275 ready mix',
    'satuan' => "m3",
    'besaran' => 937100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-300 ready mix',
    'satuan' => "m3",
    'besaran' => 961200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-350 ready mix',
    'satuan' => "m3",
    'besaran' => 1001900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-400 ready mix',
    'satuan' => "m3",
    'besaran' => 1066100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Adukan beton K-500 ready mix',
    'satuan' => "m3",
    'besaran' => 1152800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Beton fc' 15 Mpa",
    'satuan' => "m3",
    'besaran' => 848100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Compound gypsum",
    'satuan' => "kg",
    'besaran' => 3500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Compound hardboard",
    'satuan' => "kg",
    'besaran' => 3700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Curing compound",
    'satuan' => "liter",
    'besaran' => 44100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Flexible waterproofing",
    'satuan' => "kg",
    'besaran' => 52400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Membran Bakar",
    'satuan' => "m2",
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Cairan Primer",
    'satuan' => "kg",
    'besaran' => 57500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Formtie/penjaga jarak bekesting/spacer",
    'satuan' => "buah",
    'besaran' => 7000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Kassa",
    'satuan' => "m'",
    'besaran' => 8100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Kolom beton pracetak",
    'satuan' => "batang",
    'besaran' => 282000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Panel beton pracetak",
    'satuan' => "lembar",
    'besaran' => 125000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Paper tape hardboard",
    'satuan' => "m'",
    'besaran' => 4800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => "Pengisi khusus rongga nat",
    'satuan' => "kg",
    'besaran' => 15500,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Perekat khusus penutup dinding',
    'satuan' => "kg",
    'besaran' => 21100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Perekat khusus penutup lantai',
    'satuan' => "kg",
    'besaran' => 17200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen 40 Kg',
    'satuan' => "zak",
    'besaran' => 46600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen 50 Kg',
    'satuan' => "zak",
    'besaran' => 58200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen grout',
    'satuan' => "kg",
    'besaran' => 6000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen merah',
    'satuan' => "kg",
    'besaran' => 15800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen Merk II 40 Kg',
    'satuan' => "zak",
    'besaran' => 46500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen Merk II 50 Kg',
    'satuan' => "zak",
    'besaran' => 57600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen nat',
    'satuan' => "kg",
    'besaran' => 16100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen Portland (PC)',
    'satuan' => "kg",
    'besaran' => 1300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen putih 40 Kg',
    'satuan' => "zak",
    'besaran' => 89700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen putih 50 Kg',
    'satuan' => "zak",
    'besaran' => 97700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Semen warna',
    'satuan' => "kg",
    'besaran' => 7800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Waterproofing',
    'satuan' => "kg",
    'besaran' => 61200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Waterproofing Cristalin',
    'satuan' => "kg",
    'besaran' => 62000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Waterproofing Semen Base',
    'satuan' => "kg",
    'besaran' => 74500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Waterproofing Acrylic Base',
    'satuan' => "kg",
    'besaran' => 64000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Joint Sealant',
    'satuan' => "kg",
    'besaran' => 22000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Polytene 125 Mikron',
    'satuan' => "kg",
    'besaran' => 46000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Dowel dia. 25 mm (BjTs)',
    'satuan' => "kg",
    'besaran' => 15368,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Tie Bar Dia. 16 mm (BjTS)',
    'satuan' => "kg",
    'besaran' => 17722,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Lolos screen 2 ukuran 9,5-19,0',
    'satuan' => "m3",
    'besaran' => 1970000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Lolos screen 2 ukuran 0-5',
    'satuan' => "m3",
    'besaran' => 1799000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Lantai Kerja fc 10 Mpa',
    'satuan' => "m3",
    'besaran' => 1236000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Lantai Kerja fc 7,5 Mpa',
    'satuan' => "m3",
    'besaran' => 928000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 30x30x120 cm',
    'satuan' => "buah",
    'besaran' => 220000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 30x40x120 cm',
    'satuan' => "buah",
    'besaran' => 240000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 40x40x120 cm',
    'satuan' => "buah",
    'besaran' => 270000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 40x50x120 cm',
    'satuan' => "buah",
    'besaran' => 290000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 40x60x120 cm',
    'satuan' => "buah",
    'besaran' => 320000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 50x50x120 cm',
    'satuan' => "buah",
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 50x60x120 cm',
    'satuan' => "buah",
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 50x70x120 cm',
    'satuan' => "buah",
    'besaran' => 390000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 60x60x120 cm',
    'satuan' => "buah",
    'besaran' => 420000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 60x70x120 cm',
    'satuan' => "buah",
    'besaran' => 440000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 60x80x120 cm',
    'satuan' => "buah",
    'besaran' => 470000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 80x60x120 cm',
    'satuan' => "buah",
    'besaran' => 490000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 80x80x120 cm',
    'satuan' => "buah",
    'besaran' => 520000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 80x100x120 cm',
    'satuan' => "buah",
    'besaran' => 540000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 100x100x120 cm',
    'satuan' => "buah",
    'besaran' => 570000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 100x120x120 cm',
    'satuan' => "buah",
    'besaran' => 590000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 120x120x120 cm',
    'satuan' => "buah",
    'besaran' => 620000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 120x140x120 cm',
    'satuan' => "buah",
    'besaran' => 640000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 140x140x120 cm',
    'satuan' => "buah",
    'besaran' => 670000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 150x100x120 cm',
    'satuan' => "buah",
    'besaran' => 680000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 150x150x120 cm',
    'satuan' => "buah",
    'besaran' => 710000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 150x170x120 cm',
    'satuan' => "buah",
    'besaran' => 730000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 160x160x120 cm',
    'satuan' => "buah",
    'besaran' => 750000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 160x180x120 cm',
    'satuan' => "buah",
    'besaran' => 780000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 180x180x120 cm',
    'satuan' => "buah",
    'besaran' => 800000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 180x200x120 cm',
    'satuan' => "buah",
    'besaran' => 830000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'U-Ditch 200x200x120 cm',
    'satuan' => "buah",
    'besaran' => 850000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Tutup U-Ditch 39x60x6 (tipe LD)',
    'satuan' => "buah",
    'besaran' => 70000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Tutup U-Ditch 51x60x7 (tipe LD)',
    'satuan' => "buah",
    'besaran' => 100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Tutup U-Ditch 62x60x7,5 (tipe LD)',
    'satuan' => "buah",
    'besaran' => 125000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Tutup U-Ditch 73x60x7,8 (tipe LD)',
    'satuan' => "buah",
    'besaran' => 165000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Tutup U-Ditch 94x60x10 (tipe LD)',
    'satuan' => "buah",
    'besaran' => 195000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Tutup U-Ditch 39x60x9 (tipe HD)',
    'satuan' => "buah",
    'besaran' => 125000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Tutup U-Ditch 51x60x10 (tipe HD)',
    'satuan' => "buah",
    'besaran' => 176000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Tutup U-Ditch 73x60x14 (tipe HD)',
    'satuan' => "buah",
    'besaran' => 235000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 7,
    'uraian' => 'Tutup U-Ditch 94x60x15 (tipe HD)',
    'satuan' => "buah",
    'besaran' => 375000,
    'keterangan1' => null,
]);


// kategori 8
satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat anti karat',
    'satuan' => "kg",
    'besaran' => 58200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat besi',
    'satuan' => "kg",
    'besaran' => 62800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat coating',
    'satuan' => "liter",
    'besaran' => 75700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat genteng',
    'satuan' => "kg",
    'besaran' => 52800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat tembok per 20 kg',
    'satuan' => "kg",
    'besaran' => 528800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat antara (cat besi)',
    'satuan' => "kg",
    'besaran' => 49700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat dasar (cat besi)',
    'satuan' => "kg",
    'besaran' => 52300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat dasar (cat kayu)',
    'satuan' => "kg",
    'besaran' => 38200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat kayu',
    'satuan' => "kg",
    'besaran' => 50000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat dasar (cat tembok eksterior)',
    'satuan' => "kg",
    'besaran' => 128500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat dasar (cat tembok interior)',
    'satuan' => "kg",
    'besaran' => 119100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat Dasar Plafond',
    'satuan' => "kg",
    'besaran' => 128500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat Plafond Eksterior',
    'satuan' => "kg",
    'besaran' => 119100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat epoxy',
    'satuan' => "kg",
    'besaran' => 30000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat kedap air (water base)',
    'satuan' => "kg",
    'besaran' => 53300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat penutup (cat besi)',
    'satuan' => "kg",
    'besaran' => 54700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat penutup (cat kayu)',
    'satuan' => "kg",
    'besaran' => 58500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat penutup (cat tembok eksterior)',
    'satuan' => "kg",
    'besaran' => 136600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat penutup (cat tembok interior)',
    'satuan' => "kg",
    'besaran' => 130500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat dinding',
    'satuan' => "m2",
    'besaran' => 25000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat zyncromate',
    'satuan' => "kg",
    'besaran' => 26000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Cat Thermoplast',
    'satuan' => "kg",
    'besaran' => 29120,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Glass Beads',
    'satuan' => "kg",
    'besaran' => 18000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Compressor',
    'satuan' => "jam",
    'besaran' => 92500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Logo PU Akrilik 40x40 cm',
    'satuan' => "buah",
    'besaran' => 400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Logo PU Plat Baja 80x80 cm',
    'satuan' => "buah",
    'besaran' => 450000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Nomor Rumah Akrilik 15x30 cm',
    'satuan' => "buah",
    'besaran' => 55000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Bak Cuci Piring',
    'satuan' => "unit",
    'besaran' => 436500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Shower Set',
    'satuan' => "unit",
    'besaran' => 666000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Dempul',
    'satuan' => "kg",
    'besaran' => 33500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Dempul jadi',
    'satuan' => "kg",
    'besaran' => 35500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Kuas 1"',
    'satuan' => "buah",
    'besaran' => 7100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Kuas 2"',
    'satuan' => "buah",
    'besaran' => 9800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Kuas 4"',
    'satuan' => "buah",
    'besaran' => 14100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Kuas 3 inch',
    'satuan' => "buah",
    'besaran' => 10400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Melamic',
    'satuan' => "kg",
    'besaran' => 60000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Meni besi',
    'satuan' => "kg",
    'besaran' => 39700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Meni kayu',
    'satuan' => "kg",
    'besaran' => 34500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Pelitur',
    'satuan' => "liter",
    'besaran' => 73700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Pelitur jadi',
    'satuan' => "liter",
    'besaran' => 66200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Pengencer cat kayu/besi',
    'satuan' => "liter",
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Pengencer cat kayu/besi',
    'satuan' => "kg",
    'besaran' => 17400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Pewarna Beton',
    'satuan' => "kg",
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Plamir kayu',
    'satuan' => "kg",
    'besaran' => 30100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Plamir tembok',
    'satuan' => "kg",
    'besaran' => 26500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Sanding',
    'satuan' => "kg",
    'besaran' => 90000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Vernis',
    'satuan' => "liter",
    'besaran' => 44500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Wood filler',
    'satuan' => "kg",
    'besaran' => 53000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 8,
    'uraian' => 'Woodstain',
    'satuan' => "kg",
    'besaran' => 87000,
    'keterangan1' => null,
]);



// Kategori 9
satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => '1 set kunci pintu (kw 1)',
    'satuan' => "buah",
    'besaran' => 180900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => '1 set kunci pintu (kw 2)',
    'satuan' => "buah",
    'besaran' => 117900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => '1 set handle+kunci',
    'satuan' => "buah",
    'besaran' => 279000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Door closer',
    'satuan' => "buah",
    'besaran' => 167500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Door holder',
    'satuan' => "buah",
    'besaran' => 81000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Door stop',
    'satuan' => "buah",
    'besaran' => 58500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Engsel angin',
    'satuan' => "buah",
    'besaran' => 27400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Engsel jendela',
    'satuan' => "buah",
    'besaran' => 18900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Engsel kupu-kupu',
    'satuan' => "buah",
    'besaran' => 41700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Engsel lengan jendela',
    'satuan' => "buah",
    'besaran' => 26500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Engsel pintu (kw 1)',
    'satuan' => "buah",
    'besaran' => 31500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Engsel pintu (kw 2)',
    'satuan' => "buah",
    'besaran' => 23700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Floor hinge',
    'satuan' => "buah",
    'besaran' => 500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Gerendel Biasa',
    'satuan' => "buah",
    'besaran' => 32600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Grendel',
    'satuan' => "buah",
    'besaran' => 15000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Grendel tanam',
    'satuan' => "buah",
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Handle pintu (kw 1)',
    'satuan' => "buah",
    'besaran' => 140800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Hendle Jendela',
    'satuan' => "buah",
    'besaran' => 58500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Kait angin',
    'satuan' => "buah",
    'besaran' => 12000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Kunci lemari',
    'satuan' => "buah",
    'besaran' => 14100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Kunci silinder',
    'satuan' => "buah",
    'besaran' => 70000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Kunci slot',
    'satuan' => "buah",
    'besaran' => 101300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Kunci tanam',
    'satuan' => "buah",
    'besaran' => 65800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Kunci tanam antik',
    'satuan' => "buah",
    'besaran' => 144300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Kunci tanam biasa',
    'satuan' => "buah",
    'besaran' => 65800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Kunci Tanam ex lokal 2x slag',
    'satuan' => "buah",
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Kunci tanam kamar mandi',
    'satuan' => "buah",
    'besaran' => 46900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Pull handle (kw 1)',
    'satuan' => "buah",
    'besaran' => 290800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Pull handle stainless jumbo (kw 1)',
    'satuan' => "buah",
    'besaran' => 435200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Rel pintu dorong',
    'satuan' => "set",
    'besaran' => 243100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Spring knip',
    'satuan' => "buah",
    'besaran' => 21600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Tarikan Pintu Stainless',
    'satuan' => "buah",
    'besaran' => 60000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 9,
    'uraian' => 'Venetions blinds dan vertical blinds',
    'satuan' => "m2",
    'besaran' => 140000,
    'keterangan1' => null,
]);


// Kategori 10
satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Glass block 20x20 cm',
    'satuan' => "buah",
    'besaran' => 2500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Frame besi kaca nako',
    'satuan' => "daun",
    'besaran' => 400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Jendela nako',
    'satuan' => "buah",
    'besaran' => 400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Jendela Kaca Upvc 2 daun',
    'satuan' => "buah",
    'besaran' => 2000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Jendela Ornamen GRC',
    'satuan' => "buah",
    'besaran' => 596000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Jendela Nako Rangka Aluminium (rangka+kaca 5 mm)',
    'satuan' => "m2",
    'besaran' => 242000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca buram 12mm',
    'satuan' => "m2",
    'besaran' => 317000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca cermin 5 mm',
    'satuan' => "m2",
    'besaran' => 221400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca cermin 6mm',
    'satuan' => "m2",
    'besaran' => 270900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca cermin 8 mm',
    'satuan' => "m2",
    'besaran' => 796100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca es kabur 3 mm',
    'satuan' => "m2",
    'besaran' => 85000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca es kabur 5 mm',
    'satuan' => "m2",
    'besaran' => 95000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca gravire 5mm',
    'satuan' => "m2",
    'besaran' => 794400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca gravire putih 5mm',
    'satuan' => "m2",
    'besaran' => 750000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca laminated 12 mm',
    'satuan' => "m2",
    'besaran' => 900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca laminated 8 mm',
    'satuan' => "m2",
    'besaran' => 700000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca lukis alur 5mm',
    'satuan' => "m2",
    'besaran' => 688700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca patri 5 mm',
    'satuan' => "m2",
    'besaran' => 1516300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca polos',
    'satuan' => "m2",
    'besaran' => 120000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca polos 3 mm',
    'satuan' => "m2",
    'besaran' => 120000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca polos 5 mm',
    'satuan' => "m2",
    'besaran' => 198000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca polos 6 mm',
    'satuan' => "m2",
    'besaran' => 237000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca polos 8 mm',
    'satuan' => "m2",
    'besaran' => 226400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca tanpa tripel 5mm',
    'satuan' => "m2",
    'besaran' => 3447000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca tempered 12 mm',
    'satuan' => "m2",
    'besaran' => 600000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca triple 5mm',
    'satuan' => "m2",
    'besaran' => 3179400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca triple platinum 5mm',
    'satuan' => "m2",
    'besaran' => 3702800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Kaca wireglass 5 mm',
    'satuan' => "m2",
    'besaran' => 144800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Profil kaca',
    'satuan' => "m¹",
    'besaran' => 14500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Profil kaca tebal 6 mm',
    'satuan' => "m2",
    'besaran' => 15000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Ray Band 3mm',
    'satuan' => "m2",
    'besaran' => 85100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 10,
    'uraian' => 'Ray Band 5mm',
    'satuan' => "m2",
    'besaran' => 112400,
    'keterangan1' => null,
]);

// KATEGORI 11

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bak reservoir fibreglass (kapasitas 1050 liter)',
    'satuan' => "buah",
    'besaran' => 1793400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bak reservoir fibreglass (kapasitas 1200 liter)',
    'satuan' => "buah",
    'besaran' => 1448700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bak reservoir fibreglass (kapasitas 1550 liter)',
    'satuan' => "buah",
    'besaran' => 2125600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bak reservoir fibreglass (kapasitas 2000 liter)',
    'satuan' => "buah",
    'besaran' => 2778200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bak reservoir fibreglass (kapasitas 650 liter)',
    'satuan' => "buah",
    'besaran' => 868300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bak cuci stainlesteel',
    'satuan' => "buah",
    'besaran' => 230600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bak cuci teraso',
    'satuan' => "buah",
    'besaran' => 600000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bak fiberglass 1 m3',
    'satuan' => "buah",
    'besaran' => 400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bak fiberglass 70x70x66 cm',
    'satuan' => "buah",
    'besaran' => 328400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bak teraso',
    'satuan' => "buah",
    'besaran' => 450000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bathup',
    'satuan' => "unit",
    'besaran' => 2500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Carbon filter kap. 0,1 m3/hari',
    'satuan' => "unit",
    'besaran' => 650000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Carbon filter kap. 0,6 m3/hari',
    'satuan' => "unit",
    'besaran' => 3000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Clean out',
    'satuan' => "buah",
    'besaran' => 70000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Flexible hose',
    'satuan' => "m'",
    'besaran' => 55000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Flexible hose',
    'satuan' => "buah",
    'besaran' => 50000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Floor drain stainles steel',
    'satuan' => "buah",
    'besaran' => 44700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Grab bar',
    'satuan' => "buah",
    'besaran' => 120000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Grease trap central fiberglass, kap. 5 m3',
    'satuan' => "unit",
    'besaran' => 20000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Grease trap portable fiberglass, kap. 30 Liter',
    'satuan' => "unit",
    'besaran' => 1000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Grease trap portable stainless, kap. 30 Liter',
    'satuan' => "unit",
    'besaran' => 1500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Jet washer',
    'satuan' => "buah",
    'besaran' => 100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Kloset duduk/monoblok',
    'satuan' => "buah",
    'besaran' => 1490000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Kloset jongkok',
    'satuan' => "buah",
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Komunal 10',
    'satuan' => "unit",
    'besaran' => 30000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Komunal 100',
    'satuan' => "unit",
    'besaran' => 310000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Komunal 125',
    'satuan' => "unit",
    'besaran' => 390000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Komunal 150',
    'satuan' => "unit",
    'besaran' => 465000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Komunal 25',
    'satuan' => "unit",
    'besaran' => 70000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Komunal 50',
    'satuan' => "unit",
    'besaran' => 135000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Komunal 75',
    'satuan' => "unit",
    'besaran' => 245000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Kran air',
    'satuan' => "buah",
    'besaran' => 41700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Partisi urinoir',
    'satuan' => "buah",
    'besaran' => 700000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pintu kubikel',
    'satuan' => "set",
    'besaran' => 1000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pompa booster 150 lpm (vertical in line-packaged)',
    'satuan' => "unit",
    'besaran' => 1200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pompa booster 450 lpm (centrifugal end suction)',
    'satuan' => "unit",
    'besaran' => 2970000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pompa jet 100 lpm',
    'satuan' => "unit",
    'besaran' => 2000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pompa jet 27 lpm',
    'satuan' => "unit",
    'besaran' => 900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pompa jet 34 lpm',
    'satuan' => "unit",
    'besaran' => 1200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pompa lift 250 lpm',
    'satuan' => "unit",
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pompa lift 80 lpm',
    'satuan' => "unit",
    'besaran' => 1000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pompa transfer 150 lpm (centrifugal end suction)',
    'satuan' => "unit",
    'besaran' => 1000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pressure tank 1.000 liter',
    'satuan' => "unit",
    'besaran' => 17000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Priming tank fiber 1.000 liter',
    'satuan' => "unit",
    'besaran' => 2850000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Priming tank fiber 2.000 liter',
    'satuan' => "unit",
    'besaran' => 4000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Priming tank fiber 500 liter',
    'satuan' => "unit",
    'besaran' => 1300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Priming tank fiber 800 liter',
    'satuan' => "unit",
    'besaran' => 2080000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Robe hook',
    'satuan' => "buah",
    'besaran' => 70000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Roof tank fiberglass kap. 12 m3',
    'satuan' => "unit",
    'besaran' => 36000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Roof tank fiberglass kap. 2 m3',
    'satuan' => "unit",
    'besaran' => 6000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Roof tank fiberglass kap. 4 m3',
    'satuan' => "unit",
    'besaran' => 12000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Roof tank stainless kap. 12 m3',
    'satuan' => "unit",
    'besaran' => 48000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Roof tank stainless kap. 2 m3',
    'satuan' => "unit",
    'besaran' => 6400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Roof tank stainless kap. 4 m3',
    'satuan' => "unit",
    'besaran' => 15000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Sand filter kap. 0,1 m3/hari',
    'satuan' => "unit",
    'besaran' => 2500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Sand filter kap. 14 m3/hari',
    'satuan' => "unit",
    'besaran' => 4800000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Sekat kubikel',
    'satuan' => "m2",
    'besaran' => 1200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Septic 0,6',
    'satuan' => "unit",
    'besaran' => 3200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Septic 0,8',
    'satuan' => "unit",
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Septic 1',
    'satuan' => "unit",
    'besaran' => 3600000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Septic 2',
    'satuan' => "unit",
    'besaran' => 4600000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Septic 5',
    'satuan' => "unit",
    'besaran' => 16000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Sewage Treatment Plant (STP) fiberglass kap. 10 m3',
    'satuan' => "unit",
    'besaran' => 53200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Sewage Treatment Plant (STP) fiberglass kap. 2 m3',
    'satuan' => "unit",
    'besaran' => 19500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Sewage Treatment Plant (STP) fiberglass kap. 30 m3',
    'satuan' => "unit",
    'besaran' => 100000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Sewage Treatment Plant (STP) fiberglass kap. 5 m3',
    'satuan' => "unit",
    'besaran' => 33000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Sewage Treatment Plant (STP) precast kap. 30 m3',
    'satuan' => "unit",
    'besaran' => 84000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Silika filter kap. 0,1 m3/hari',
    'satuan' => "unit",
    'besaran' => 500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Soap holder',
    'satuan' => "buah",
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Stop kran PVC 1/2"',
    'satuan' => "buah",
    'besaran' => 4000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Stop kran PVC 3/4"',
    'satuan' => "buah",
    'besaran' => 6000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Submersible cutter pump kap. 100 lpm',
    'satuan' => "unit",
    'besaran' => 8500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki toren kap. 0,7 m3',
    'satuan' => "unit",
    'besaran' => 1100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki toren kap. 1,5 m3',
    'satuan' => "unit",
    'besaran' => 1700000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki toren kap. 2,5 m3',
    'satuan' => "unit",
    'besaran' => 3400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki toren kap. 3 m3',
    'satuan' => "unit",
    'besaran' => 4600000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki toren kap. 4 m3',
    'satuan' => "unit",
    'besaran' => 5500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki toren kap. 5 m3',
    'satuan' => "unit",
    'besaran' => 6900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki toren kap. 5,5 m3',
    'satuan' => "unit",
    'besaran' => 7100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki toren kap. 6 m3',
    'satuan' => "unit",
    'besaran' => 7850000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki Panel FRP kap. 12 m3',
    'satuan' => "unit",
    'besaran' => 15000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki panel Stainless Steel kapasitas 12 m3 + Material Bantu / Aksesoris',
    'satuan' => "unit",
    'besaran' => 12500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => "Tangki panel GRP kapasitas 12 m3 + Material Bantu / Aksesoris",
    'satuan' => "unit",
    'besaran' => 12000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tangki Toren Kapasitas 0,5 m3',
    'satuan' => "unit",
    'besaran' => 650000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Pompa Jet 30 lpm',
    'satuan' => "unit",
    'besaran' => 730000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Galian tanah biasa',
    'satuan' => "m3",
    'besaran' => 45000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Urukan Tanah',
    'satuan' => "m2",
    'besaran' => 65000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Timbunan Pasir',
    'satuan' => "m3",
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis Beton 1/2 dia. 30 cm',
    'satuan' => "buah",
    'besaran' => 93000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis Beton 1/2 dia. 40 cm',
    'satuan' => "buah",
    'besaran' => 110250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis Beton 1/2 dia. 50 cm',
    'satuan' => "buah",
    'besaran' => 115000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis Beton 1/2 dia. 60 cm',
    'satuan' => "buah",
    'besaran' => 125500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis beton 1/2 dia. 80 cm',
    'satuan' => "buah",
    'besaran' => 150600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis Beton 1/2 dia. 100 cm',
    'satuan' => "buah",
    'besaran' => 190000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis Beton dia. 30 cm',
    'satuan' => "buah",
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis Beton dia. 40 cm',
    'satuan' => "buah",
    'besaran' => 120000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis Beton dia. 50 cm',
    'satuan' => "buah",
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis Beton dia. 60 cm',
    'satuan' => "buah",
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis beton dia. 80 cm',
    'satuan' => "buah",
    'besaran' => 255400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Buis Beton dia. 100 cm',
    'satuan' => "buah",
    'besaran' => 269500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Ijuk',
    'satuan' => "kg",
    'besaran' => 7000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Beton',
    'satuan' => "m3",
    'besaran' => 825000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tulangan',
    'satuan' => "kg",
    'besaran' => 10300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Bekisting',
    'satuan' => "m2",
    'besaran' => 37500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Kanstin uk. 10x20x40',
    'satuan' => "buah",
    'besaran' => 27383,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Kanstin uk. 15x40x60',
    'satuan' => "buah",
    'besaran' => 93000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Box Culvert 40x40x100 cm',
    'satuan' => "buah",
    'besaran' => 855000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Box Culvert 50x50x100 cm',
    'satuan' => "buah",
    'besaran' => 1119000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Box Culvert 60x60x100 cm',
    'satuan' => "buah",
    'besaran' => 1504000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Box Culvert 80x80x100 cm',
    'satuan' => "buah",
    'besaran' => 2560000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Box Culvert 100x100x100 cm',
    'satuan' => "buah",
    'besaran' => 3052000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Box Culvert 150x150x100 cm',
    'satuan' => "buah",
    'besaran' => 3570000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Box Culvert 200x200x100 cm',
    'satuan' => "buah",
    'besaran' => 3930000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Box Culvert 300x300x100 cm',
    'satuan' => "buah",
    'besaran' => 4110000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tempat sabun gantung',
    'satuan' => "buah",
    'besaran' => 70100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tempat sabun tanam',
    'satuan' => "buah",
    'besaran' => 53300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Tissue holder',
    'satuan' => "buah",
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Towel bar',
    'satuan' => "buah",
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Urinoir',
    'satuan' => "buah",
    'besaran' => 456800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Wastafel',
    'satuan' => "buah",
    'besaran' => 325100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 11,
    'uraian' => 'Water drain',
    'satuan' => "set",
    'besaran' => 321900,
    'keterangan1' => null,
]);


// kategori 12


satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Bensin',
    'satuan' => "liter",
    'besaran' => 7800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Bensin (industri)',
    'satuan' => "liter",
    'besaran' => 8100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Bentonite',
    'satuan' => "m3",
    'besaran' => 20000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Cairan perontok karat',
    'satuan' => "kg",
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Cuka bibit',
    'satuan' => "liter",
    'besaran' => 50000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Minyak bekisting',
    'satuan' => "liter",
    'besaran' => 16800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Minyak cat',
    'satuan' => "kg",
    'besaran' => 24000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Minyak pelumas',
    'satuan' => "liter",
    'besaran' => 28000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Minyak tanah',
    'satuan' => "liter",
    'besaran' => 15300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Oli hidrolis',
    'satuan' => "liter",
    'besaran' => 31300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Oli mesin',
    'satuan' => "liter",
    'besaran' => 30300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Premium (industri)',
    'satuan' => "liter",
    'besaran' => 9400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Residu',
    'satuan' => "liter",
    'besaran' => 21000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Solar',
    'satuan' => "liter",
    'besaran' => 6500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Solar (industri)',
    'satuan' => "liter",
    'besaran' => 8800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Steamvet',
    'satuan' => "liter",
    'besaran' => 51000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Teak oil',
    'satuan' => "liter",
    'besaran' => 29200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Thinner',
    'satuan' => "liter",
    'besaran' => 21800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 12,
    'uraian' => 'Thinner A',
    'satuan' => "liter",
    'besaran' => 18800,
    'keterangan1' => null,
]);


//  KATEGORI 13
satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Aluminium composite panel',
    'satuan' => "m2",
    'besaran' => 225800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Aluminium spandrel 10x600 cm',
    'satuan' => "lembar",
    'besaran' => 200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Aluminium strip',
    'satuan' => "m'",
    'besaran' => 50000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Besi as  drat',
    'satuan' => "kg",
    'besaran' => 40200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Besi profil',
    'satuan' => "kg",
    'besaran' => 34500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Blok besi cor type skep',
    'satuan' => "bh",
    'besaran' => 1055700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Blok besi type ronsel',
    'satuan' => "bh",
    'besaran' => 1508800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Buis  brons',
    'satuan' => "bh",
    'besaran' => 422000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'C  channel galvanis  lebar 40 mm',
    'satuan' => "m'",
    'besaran' => 10700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'C  channel galvanis  lebar 75 mm',
    'satuan' => "m'",
    'besaran' => 13600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Cat  meni',
    'satuan' => "kg",
    'besaran' => 50600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Daun Pintu HDF 36x720x2100',
    'satuan' => "unit",
    'besaran' => 475000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Pintu uPVC lebar 80 cm',
    'satuan' => "buah",
    'besaran' => 1043100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Pintu uPVC lebar 70 cm',
    'satuan' => "buah",
    'besaran' => 730000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Frame aluminium',
    'satuan' => "m'",
    'besaran' => 38333,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Rangka Aluminium',
    'satuan' => "m'",
    'besaran' => 39000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Gembok',
    'satuan' => "bh",
    'besaran' => 102300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Grease',
    'satuan' => "kg",
    'besaran' => 67800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Hollow  galvanis  20x40x0,4 mm',
    'satuan' => "m'",
    'besaran' => 7500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Metal Hollow 20x40 mm',
    'satuan' => "m'",
    'besaran' => 7500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Hollow galvanis 40x40x0,4 mm',
    'satuan' => "m'",
    'besaran' => 10700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Jalusi aluminium',
    'satuan' => "m2",
    'besaran' => 600000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Jalusi uPVC',
    'satuan' => "buah",
    'besaran' => 49500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Kontra mur type ronsel',
    'satuan' => "bh",
    'besaran' => 343800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Kontra mur type skep',
    'satuan' => "bh",
    'besaran' => 301300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'kopel/universal join',
    'satuan' => "bh",
    'besaran' => 542800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Kusen aluminium 4"  putih',
    'satuan' => "m'",
    'besaran' => 107000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Kusen Bovenlight Upvc',
    'satuan' => "bauh",
    'besaran' => 270000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Lager type ronsel',
    'satuan' => "bh",
    'besaran' => 905000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Lager type skep',
    'satuan' => "bh",
    'besaran' => 693400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Mur baut  1/2"  x  4"',
    'satuan' => "bh",
    'besaran' => 16100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Mur baut  5/8"  x  4"',
    'satuan' => "bh",
    'besaran' => 19500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Mur baut  M8 steinless',
    'satuan' => "bh",
    'besaran' => 19500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Baut dan Mur f12 L=4"',
    'satuan' => "buah",
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Baut dan Mur f12, L=6"',
    'satuan' => "buah",
    'besaran' => 22000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Baut dan Mur f12, L=7"',
    'satuan' => "buah",
    'besaran' => 23000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Ring Plat',
    'satuan' => "buah",
    'besaran' => 2500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Mur brons  ronsel',
    'satuan' => "kg",
    'besaran' => 210400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Mur brons  type skep',
    'satuan' => "kg",
    'besaran' => 210400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Pen spindie type ronsel',
    'satuan' => "bh",
    'besaran' => 102300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Penyangga roda gigi',
    'satuan' => "bh",
    'besaran' => 542800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Pintu alluminium',
    'satuan' => "m'",
    'besaran' => 73600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Pintu KM  aluminium',
    'satuan' => "unit",
    'besaran' => 1500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Pintu lipat  besi',
    'satuan' => "m2",
    'besaran' => 494200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Pintu lipat PVC',
    'satuan' => "m2",
    'besaran' => 750000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Plat  peluncur',
    'satuan' => "kg",
    'besaran' => 210400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Plat besi 3 mm',
    'satuan' => "kg",
    'besaran' => 34500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Profil aluminium',
    'satuan' => "m'",
    'besaran' => 130000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Profil Aluminium ”T”',
    'satuan' => "m'",
    'besaran' => 15000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Profil slimar aluminium',
    'satuan' => "m'",
    'besaran' => 60000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Rangka metal hollow 40.40.1,2 mm',
    'satuan' => "m'",
    'besaran' => 16200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Rangka metal hollow 40.40.2 mm',
    'satuan' => "m'",
    'besaran' => 19000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'roda gigi nanas',
    'satuan' => "bh",
    'besaran' => 1025800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Roda gigi pinggiran',
    'satuan' => "bh",
    'besaran' => 1750300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Rolling door aluminium',
    'satuan' => "m2",
    'besaran' => 600600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Rolling door besi',
    'satuan' => "m2",
    'besaran' => 509100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Rubber seal',
    'satuan' => "m'",
    'besaran' => 1811200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Sliding pintu J4',
    'satuan' => "buah",
    'besaran' => 456000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Stang draft  diameter 1,5"  +  mur baut',
    'satuan' => "m'",
    'besaran' => 2750000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Stang draft  diameter 1,75"  +  mur baut',
    'satuan' => "m'",
    'besaran' => 3150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Stang draft  diameter 2"  +  mur baut',
    'satuan' => "m'",
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Stang draft  diameter 2,25"  +  mur baut',
    'satuan' => "m'",
    'besaran' => 3800000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Stang gembok',
    'satuan' => "bh",
    'besaran' => 78200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Stang pemutar type ronsel',
    'satuan' => "bh",
    'besaran' => 1146500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Stang pemutar type skep',
    'satuan' => "bh",
    'besaran' => 633600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Sunscreen aluminium',
    'satuan' => "m2",
    'besaran' => 381900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Talang galvalum lebar 50 cm tebal 0,4 mm',
    'satuan' => "m'",
    'besaran' => 53300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Talang datar/jurai seng lebar 90cm',
    'satuan' => "m",
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Talang Seng 1/2 lingkaran diameter 15cm',
    'satuan' => "m",
    'besaran' => 133000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 13,
    'uraian' => 'Thinner',
    'satuan' => "ltr",
    'besaran' => 35600,
    'keterangan1' => null,
]);


// KATEGORI 14












satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Hanger tray panjang 2,5 m',
    'satuan' => "buah",
    'besaran' => 300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel BCC 10 mm² (0,10 kg/m)',
    'satuan' => "m'",
    'besaran' => 29000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel BCC 16 mm² (0,16 kg/m)',
    'satuan' => "m'",
    'besaran' => 33000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel BCC 25 mm² (0,25 kg/m)',
    'satuan' => "m'",
    'besaran' => 53000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel BCC 35 mm² (0,35 kg/m)',
    'satuan' => "m'",
    'besaran' => 72000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel BCC 4 mm² (0,04 kg/m)',
    'satuan' => "m'",
    'besaran' => 12000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel BCC 50 mm² (0,50 kg/m)',
    'satuan' => "m'",
    'besaran' => 95500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel BCC 6 mm² (0,06 kg/m)',
    'satuan' => "m'",
    'besaran' => 13200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'BCC 6 mm2 (0,06 kg/m) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 38300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel BCC 70 mm² (0,70 kg/m)',
    'satuan' => "m'",
    'besaran' => 136000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel BCC 95 mm² (0,95 kg/m)',
    'satuan' => "m'",
    'besaran' => 185000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel FRC 1 x 150 mm²',
    'satuan' => "m'",
    'besaran' => 275000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel FRC 2 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 23000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel FRC 2 x 1,5 mm2 + PVC Conduit HI 20 mm dan aksesoris',
    'satuan' => "m'",
    'besaran' => 27100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel FRC 2 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 33500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel FRC 2 x 2,5 mm2 + PVC Conduit HI 20 mm dan aksesoris',
    'satuan' => "m'",
    'besaran' => 37600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel FRC 3 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 40000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel FRC 4 x 150 mm²',
    'satuan' => "m'",
    'besaran' => 1607400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel FRC 4 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 90000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel FRC 4 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 110000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 1 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 3200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 1 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 1 x 16 mm²',
    'satuan' => "m'",
    'besaran' => 33000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 1 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 5300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 1 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 8300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 1 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 12200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 2 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 9200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 3 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 14000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 3 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 19448,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 5 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 51500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 1 x 35 mm²',
    'satuan' => "m'",
    'besaran' => 71250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYA 1 x 95 mm²',
    'satuan' => "m'",
    'besaran' => 181000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 2 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 22750,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 2 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 60750,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 2 x 16 mm²',
    'satuan' => "m'",
    'besaran' => 82000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 2 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 30500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 2 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 35200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 2 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 43350,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 3 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 28500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 3 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 79600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 3 x 16 mm²',
    'satuan' => "m'",
    'besaran' => 128900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 3 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 32900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 3 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 49000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 3 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 63500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 29400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 100600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 120 mm²',
    'satuan' => "m'",
    'besaran' => 969500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 150 mm²',
    'satuan' => "m'",
    'besaran' => 1187650,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 16 mm²',
    'satuan' => "m'",
    'besaran' => 159300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 185 mm²',
    'satuan' => "m'",
    'besaran' => 1470650,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 38600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 240 mm²',
    'satuan' => "m'",
    'besaran' => 1921500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 25 mm²',
    'satuan' => "m'",
    'besaran' => 247200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 300 mm²',
    'satuan' => "m'",
    'besaran' => 2392250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 35 mm²',
    'satuan' => "m'",
    'besaran' => 314750,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 66000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 50 mm²',
    'satuan' => "m'",
    'besaran' => 411600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 70200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 70 mm²',
    'satuan' => "m'",
    'besaran' => 575250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYFGBY 4 x 95 mm²',
    'satuan' => "m'",
    'besaran' => 743750,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 2 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 8880,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 2 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 49000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 2 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 13250,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 2 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 19950,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 2 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 29000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 3 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 11400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 3 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 69200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 3 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 21300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 3 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 27000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 3 x 2,5 mm2 (LSOH)',
    'satuan' => "M'",
    'besaran' => 21300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 3 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 43100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 4 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 14400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 4 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 92900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 4 x 16 mm²',
    'satuan' => "m'",
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 4 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 22700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 4 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 37000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYM 4 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 54400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYMHY 2 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 9300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYMHY 2 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 13900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYMHY 3 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 13400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYMHY 2(3 x 1,5 mm2) + Conduit PVC HI 20 mm dan aksesoris',
    'satuan' => "m'",
    'besaran' => 35000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYMHY 3 x 1,5 mm2 + Conduit PVC HI 20 mm dan aksesoris',
    'satuan' => "m'",
    'besaran' => 17500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYMHY 3 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 21300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYMHY 4 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 28700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 18000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 120 mm²',
    'satuan' => "m'",
    'besaran' => 246500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 150 mm²',
    'satuan' => "m'",
    'besaran' => 303000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 16 mm²',
    'satuan' => "m'",
    'besaran' => 36000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 185 mm²',
    'satuan' => "m'",
    'besaran' => 377000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 25 mm²',
    'satuan' => "m'",
    'besaran' => 56000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 250 mm²',
    'satuan' => "m'",
    'besaran' => 496000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 300 mm²',
    'satuan' => "m'",
    'besaran' => 619000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 35 mm²',
    'satuan' => "m'",
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 7500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 400 mm²',
    'satuan' => "m'",
    'besaran' => 786000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 50 mm²',
    'satuan' => "m'",
    'besaran' => 99600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 500 mm²',
    'satuan' => "m'",
    'besaran' => 1004400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 12000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 630 mm²',
    'satuan' => "m'",
    'besaran' => 1245000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 70 mm²',
    'satuan' => "m'",
    'besaran' => 142000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 1 x 95 mm²',
    'satuan' => "m'",
    'besaran' => 196500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 2 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 12000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 2 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 57500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 2 x 16 mm²',
    'satuan' => "m'",
    'besaran' => 92000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 2 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 16560,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 2 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 23000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 2 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 35000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 3 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 15000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 3 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 74600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 3 x 16 mm²',
    'satuan' => "m'",
    'besaran' => 114000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 3 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 21500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 3 x 25 mm²',
    'satuan' => "m'",
    'besaran' => 174900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 3 x 35 mm²',
    'satuan' => "m'",
    'besaran' => 235500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 3 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 33000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 3 x 50 mm²',
    'satuan' => "m'",
    'besaran' => 305700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 3 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 46000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 1,5 mm²',
    'satuan' => "m'",
    'besaran' => 18600,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 10 mm²',
    'satuan' => "m'",
    'besaran' => 96000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 120 mm²',
    'satuan' => "m'",
    'besaran' => 1011900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 150 mm²',
    'satuan' => "m'",
    'besaran' => 1245000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 16 mm²',
    'satuan' => "m'",
    'besaran' => 148500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 185 mm²',
    'satuan' => "m'",
    'besaran' => 1552800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 2,5 mm²',
    'satuan' => "m'",
    'besaran' => 28620,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 240 mm²',
    'satuan' => "m'",
    'besaran' => 2044800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 25 mm²',
    'satuan' => "m'",
    'besaran' => 228000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 300 mm²',
    'satuan' => "m'",
    'besaran' => 2550900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 35 mm²',
    'satuan' => "m'",
    'besaran' => 310500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 4 mm²',
    'satuan' => "m'",
    'besaran' => 43000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 50 mm²',
    'satuan' => "m'",
    'besaran' => 412200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 6 mm²',
    'satuan' => "m'",
    'besaran' => 61000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 70 mm²',
    'satuan' => "m'",
    'besaran' => 584700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel NYY 4 x 95 mm²',
    'satuan' => "m'",
    'besaran' => 805200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel STP AWG 18',
    'satuan' => "m'",
    'besaran' => 4500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel STP AWG 18 + PVC Conduit HI 20 mm (dari MCFA ke TB) dan aksesoris',
    'satuan' => "m'",
    'besaran' => 10700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel ITC 2x2x0,6 mm2',
    'satuan' => "m'",
    'besaran' => 3924,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel ITC 2 x 2 x 0,6 mm2 + PVC Conduit HI 20 mm dan aksesoris',
    'satuan' => "m'",
    'besaran' => 13100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel UTP CAT 6',
    'satuan' => "m'",
    'besaran' => 1500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Coaxial 7C-2V',
    'satuan' => "m'",
    'besaran' => 22800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Ladder 500 x100 mm',
    'satuan' => "unit",
    'besaran' => 494000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Ladder 600 x100 mm',
    'satuan' => "unit",
    'besaran' => 535000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Ladder 800 x100 mm',
    'satuan' => "unit",
    'besaran' => 569000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray 600 x 100 mm Hotdip Galvanized',
    'satuan' => "unit",
    'besaran' => 1639000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray 600 x100 mm Elektro Galvanized',
    'satuan' => "unit",
    'besaran' => 1255500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray 600 x 100 mm Powder Coating',
    'satuan' => "unit",
    'besaran' => 890000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 1000 x 100 mm TRU Powder Coating dan aksesoris',
    'satuan' => "unit",
    'besaran' => 650000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 1000 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => "unit",
    'besaran' => 670000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 1000 x 100 mm TRU OCP dan aksesoris',
    'satuan' => "unit",
    'besaran' => 710000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 1000 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => "unit",
    'besaran' => 750000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 1000 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => "unit",
    'besaran' => 670000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 1000 x 100 mm TRC OCP dan aksesoris',
    'satuan' => "unit",
    'besaran' => 710000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 900 x 100 mm TRU Powder Coating dan aksesoris',
    'satuan' => "unit",
    'besaran' => 550000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 900 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => "unit",
    'besaran' => 570000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 900 x 100 mm TRU OCP dan aksesoris',
    'satuan' => "unit",
    'besaran' => 590000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 900 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => "unit",
    'besaran' => 600000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 900 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => "unit",
    'besaran' => 630000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 900 x 100 mm TRC OCP dan aksesoris',
    'satuan' => "unit",
    'besaran' => 650000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 800 x 100 mm TRU Powder Coating dan aksesoris',
    'satuan' => "unit",
    'besaran' => 400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 800 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => "unit",
    'besaran' => 430000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 800 x 100 mm TRU OCP dan aksesoris',
    'satuan' => "unit",
    'besaran' => 450000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 800 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => "unit",
    'besaran' => 470000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 800 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => "unit",
    'besaran' => 490000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 800 x 100 mm TRC OCP dan aksesoris',
    'satuan' => "unit",
    'besaran' => 510000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 700 x 100 mm TRU Powder Coating dan aksesoris',
    'satuan' => "unit",
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 700 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => "unit",
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 700 x 100 mm TRU OCP dan aksesoris',
    'satuan' => "unit",
    'besaran' => 390000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 700 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => "unit",
    'besaran' => 410000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 700 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => "unit",
    'besaran' => 430000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 700 x 100 mm TRC',
    'satuan' => "unit",
    'besaran' => 450000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 600 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => "unit",
    'besaran' => 470000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => '(Horizontal) 600 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => "unit",
    'besaran' => 350000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Pemasangan 1 Unit Kabel Tray (Horizontal) 600 x 100 mm TRC OCP',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 500 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 385000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 500 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 395000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 500 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 415000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 500 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 430000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 500 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 445000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 400 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 400 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 365000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 400 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 380000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 400 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 395000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 400 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 410000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 300 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 300 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 320000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 300 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 300 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 300 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 380000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 200 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 200 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 200 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 270000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 200 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 280000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 200 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 150 x 100 mm TRU Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 150 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 260000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 150 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 280000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 150 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 150 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 320000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Horizontal) 150 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 1000 x 100 mm TRU Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 1000 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 1000 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 390000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 1000 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 1000 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 410000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 1000 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 420000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 900 x 100 mm TRU Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 900 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 900 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 900 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 900 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 380000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 900 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 390000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 800 x 100 mm TRU Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 800 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 800 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 800 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 380000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 800 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 390000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 800 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 700 x 100 mm TRU Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 700 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 700 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 700 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 700 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 380000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 700 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 390000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 600 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 600 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 600 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 600 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 600 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 390000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 500 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 500 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 500 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 500 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 500 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 380000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 400 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 400 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 400 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 400 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 400 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 380000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 300 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 300 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 300 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 300 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 300 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 380000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 200 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 330000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 200 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 200 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 200 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 200 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 150 x 100 mm TRU Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 330000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 150 x 100 mm TRU Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 340000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 150 x 100 mm TRU OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 150 x 100 mm TRC Powder Coating dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 360000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 150 x 100 mm TRC Hot Dip Galvanized dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 370000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Tray (Vertikal) 150 x 100 mm TRC OCP dan aksesoris',
    'satuan' => 'Unit',
    'besaran' => 380000,
    'keterangan1' => null,
]);

// Kabel tray per meter
satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel tray 200 x 100 mm',
    'satuan' => 'm\'',
    'besaran' => 175000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel tray 300 x 100 mm',
    'satuan' => 'm\'',
    'besaran' => 219000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel tray 400 x 100 mm',
    'satuan' => 'm\'',
    'besaran' => 265000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel tray 500 x 100 mm',
    'satuan' => 'm\'',
    'besaran' => 309000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel tray 600 x 100 mm',
    'satuan' => 'm\'',
    'besaran' => 352000,
    'keterangan1' => null,
]);

// Klem, mur, dan conduit
satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Klem kabel tray',
    'satuan' => 'buah',
    'besaran' => 6000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Klem 20 mm',
    'satuan' => 'buah',
    'besaran' => 900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Mur baut kabel tray',
    'satuan' => 'buah',
    'besaran' => 1000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'PVC conduit HI 20 mm²',
    'satuan' => 'm\'',
    'besaran' => 4100,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Flexible Conduit 20 mm',
    'satuan' => 'm',
    'besaran' => 5400,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'PVC conduit HI 32 mm²',
    'satuan' => 'm1',
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Conduit HI 20 mm',
    'satuan' => 'm',
    'besaran' => 4000,
    'keterangan1' => null,
]);

// Saklar dan stop kontak
satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Saklar Tunggal',
    'satuan' => 'buah',
    'besaran' => 24000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Saklar Ganda',
    'satuan' => 'buah',
    'besaran' => 33000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Saklar Triple',
    'satuan' => 'buah',
    'besaran' => 76000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Grid Switch',
    'satuan' => 'buah',
    'besaran' => 108000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Grid Switch 4 x 2 Gang',
    'satuan' => 'buah',
    'besaran' => 180000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Stop Kontak',
    'satuan' => 'buah',
    'besaran' => 70000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Stop Kontak AC',
    'satuan' => 'buah',
    'besaran' => 67900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'T Dus',
    'satuan' => 'buah',
    'besaran' => 4000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Socket Conduit 20 mm',
    'satuan' => 'buah',
    'besaran' => 700,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Klem 20 mm',
    'satuan' => 'buah',
    'besaran' => 298,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Isolasi',
    'satuan' => 'm',
    'besaran' => 416,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'lasdop',
    'satuan' => 'buah',
    'besaran' => 580,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Elbow',
    'satuan' => 'buah',
    'besaran' => 550,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fischer S6 + Sekrup',
    'satuan' => 'buah',
    'besaran' => 21.5,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'kWh meter Token 1 Phase',
    'satuan' => 'unit',
    'besaran' => 534000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'kWh meter Token 3 Phase',
    'satuan' => 'unit',
    'besaran' => 3150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Software sistem kwh meter swakelola prabayar',
    'satuan' => 'buah',
    'besaran' => 2000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'PC Server',
    'satuan' => 'buah',
    'besaran' => 33900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Utama Tegangan Menengah',
    'satuan' => 'unit',
    'besaran' => 3100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Utama Tegangan Rendah',
    'satuan' => 'unit',
    'besaran' => 1500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'MDP Floor Standing',
    'satuan' => 'unit',
    'besaran' => 4500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'MDP Wall Mounted',
    'satuan' => 'Unit',
    'besaran' => 4900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'SDP Floor Standing',
    'satuan' => 'unit',
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'SDP Wall Mounted',
    'satuan' => 'unit',
    'besaran' => 3300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Lantai Wall Mounted 800x600x200',
    'satuan' => 'Unit',
    'besaran' => 3200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Lantai Wall Mounted 600x400x200',
    'satuan' => 'unit',
    'besaran' => 3000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel kWh Meter',
    'satuan' => 'unit',
    'besaran' => 2500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Penerang Luar Outdoor termasuk material batu',
    'satuan' => 'Unit',
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Kontrol Pompa',
    'satuan' => 'unit',
    'besaran' => 5500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Power Gondola termasuk material bantu',
    'satuan' => 'unit',
    'besaran' => 5700000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Power Elektronik termasuk material bantu',
    'satuan' => 'unit',
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Power AHU termasuk material bantu',
    'satuan' => 'unit',
    'besaran' => 4900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Power AC termasuk material bantu',
    'satuan' => 'unit',
    'besaran' => 1700000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Power Chiller termasuk material bantu',
    'satuan' => 'unit',
    'besaran' => 2300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Kontrol Power Chiller termasuk material bantu',
    'satuan' => 'unit',
    'besaran' => 2500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Kontrol Power Cooling Tower termasuk material bantu',
    'satuan' => 'unit',
    'besaran' => 1900000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Panel Kontrol Fan Presurisasi termasuk material bantu',
    'satuan' => 'unit',
    'besaran' => 2100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'MCB Box',
    'satuan' => 'unit',
    'besaran' => 450000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Genset Kap : 75kVA Silent Type dan aksesoris',
    'satuan' => 'unit',
    'besaran' => 75000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Genset Kap : 100 kVA Silent Type dan aksesoris',
    'satuan' => 'unit',
    'besaran' => 79000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Genset Kap : 400 kVA Silent Type dan aksesoris',
    'satuan' => 'unit',
    'besaran' => 85000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'UPS 5 KVA',
    'satuan' => 'unit',
    'besaran' => 18000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Tangki Solar Harian 500 liter',
    'satuan' => 'unit',
    'besaran' => 4000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Hand Pump Solar dan aksesoris',
    'satuan' => 'buah',
    'besaran' => 4000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Trafo Kap : 630 Kva : Synthetic Oil Ester',
    'satuan' => 'unit',
    'besaran' => 17000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Downlight 5 Inch 14,5 Watt LED + Aksesoris',
    'satuan' => 'buah',
    'besaran' => 82000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu LED E27 10 watt + Aksesoris',
    'satuan' => 'buah',
    'besaran' => 22000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fitting E27 + Aksesoris',
    'satuan' => 'buah',
    'besaran' => 5200,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Nicad Battery',
    'satuan' => 'buah',
    'besaran' => 110000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu LED E27 19 watt',
    'satuan' => 'buah',
    'besaran' => 70500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'RM TKI 2 x 16 Watt LED',
    'satuan' => 'unit',
    'besaran' => 265000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu Sorot LED 100 Watt',
    'satuan' => 'unit',
    'besaran' => 125000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu Sorot RGB 30 Watt untuk Outdoor',
    'satuan' => 'unit',
    'besaran' => 34000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Pelindung Lampu',
    'satuan' => 'unit',
    'besaran' => 18000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu High Bay 100 Watt',
    'satuan' => 'unit',
    'besaran' => 1620000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu Eksit LED 3 Watt c/w Battery',
    'satuan' => 'buah',
    'besaran' => 148000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu TLED 1 x 14 Watt 2.100 Lumen',
    'satuan' => 'buah',
    'besaran' => 65000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu TLED 1 x 24 Watt 2.100 Lumen',
    'satuan' => 'buah',
    'besaran' => 72000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu TLED 2 x 24 Watt 2.100 Lumen',
    'satuan' => 'buah',
    'besaran' => 144000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu PJU LED 50 Watt',
    'satuan' => 'buah',
    'besaran' => 495000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Tiang PJU Kawasan 6-7 m',
    'satuan' => 'buah',
    'besaran' => 2000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu PJU LED 50 Watt + Solar Cell',
    'satuan' => 'buah',
    'besaran' => 700000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu Taman 25 Watt + Tiang 1 m',
    'satuan' => 'buah',
    'besaran' => 155000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fitting',
    'satuan' => 'buah',
    'besaran' => 16000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu LED 7 Watt',
    'satuan' => 'buah',
    'besaran' => 27000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu LED 9 Watt',
    'satuan' => 'buah',
    'besaran' => 34000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu Baret 20 Watt',
    'satuan' => 'buah',
    'besaran' => 77000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu Baret 32 Watt',
    'satuan' => 'buah',
    'besaran' => 97000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu Pijar 40 Watt',
    'satuan' => 'buah',
    'besaran' => 28000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu TL 18 Watt',
    'satuan' => 'buah',
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu TLED 18 Watt',
    'satuan' => 'buah',
    'besaran' => 30000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu TL 36 Watt',
    'satuan' => 'buah',
    'besaran' => 25000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu TLED 36 Watt',
    'satuan' => 'buah',
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lampu Sport Floodlight Led',
    'satuan' => 'buah',
    'besaran' => 375000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Brackket',
    'satuan' => 'buah',
    'besaran' => 11500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Junction Box IP Rated',
    'satuan' => 'buah',
    'besaran' => 142000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Kabel Fiber Optic Dual Core Single Mode',
    'satuan' => 'm\'',
    'besaran' => 11300,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Pipa HDPE Conduit 20 mm',
    'satuan' => 'm\'',
    'besaran' => 3800,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'DMX LED Controller 1 Universe',
    'satuan' => 'buah',
    'besaran' => 1400000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Sensor Cahaya',
    'satuan' => 'buah',
    'besaran' => 58000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Sensor Gerak',
    'satuan' => 'buah',
    'besaran' => 65900,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'MCP-FA (Semi Addressable 1 Loop)',
    'satuan' => 'unit',
    'besaran' => 26250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Programming, Testing & commisioning',
    'satuan' => 'lot',
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'PC Komputer',
    'satuan' => 'unit',
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Alarm Printer',
    'satuan' => 'unit',
    'besaran' => 2500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Report Printer',
    'satuan' => 'unit',
    'besaran' => 1900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Announciator',
    'satuan' => 'unit',
    'besaran' => 2100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Terminal Box Fire Alarm',
    'satuan' => 'unit',
    'besaran' => 265000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Smoke Detector Addressable',
    'satuan' => 'unit',
    'besaran' => 780000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Rate of Rise Detector Addressable',
    'satuan' => 'unit',
    'besaran' => 343000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fix Heat Detector Addressable',
    'satuan' => 'unit',
    'besaran' => 318000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Smoke Detector Konvensional',
    'satuan' => 'unit',
    'besaran' => 245000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Rate of Rise Detector Konvensional',
    'satuan' => 'unit',
    'besaran' => 240000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fix Heat Detector Konvensioanl',
    'satuan' => 'unit',
    'besaran' => 290000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Lamp Indicator',
    'satuan' => 'unit',
    'besaran' => 57000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Manual Break Glass',
    'satuan' => 'unit',
    'besaran' => 60000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Horn Strobe',
    'satuan' => 'unit',
    'besaran' => 175000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fire Fighting Telepon',
    'satuan' => 'unit',
    'besaran' => 135000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Alarm Bell',
    'satuan' => 'unit',
    'besaran' => 85000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Sirine Module',
    'satuan' => 'buah',
    'besaran' => 650000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Control Module',
    'satuan' => 'buah',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Relay Module',
    'satuan' => 'buah',
    'besaran' => 103500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Isolator Module',
    'satuan' => 'buah',
    'besaran' => 220000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Monitor Module',
    'satuan' => 'buah',
    'besaran' => 200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Rectifier',
    'satuan' => 'unit',
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Power Surge Arrester',
    'satuan' => 'unit',
    'besaran' => 1279000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'UPS 2 KVA 15 Menit',
    'satuan' => 'unit',
    'besaran' => 3800000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'UPS 2 KVA 30 Menit',
    'satuan' => 'unit',
    'besaran' => 4100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'UPS 2 KVA 1 Jam',
    'satuan' => 'unit',
    'besaran' => 4900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'UPS 2 KVA 2 Jam',
    'satuan' => 'unit',
    'besaran' => 5200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'UPS 2 KVA 4 Jam',
    'satuan' => 'unit',
    'besaran' => 5700000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'End of Line Resistor',
    'satuan' => 'unit',
    'besaran' => 20000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Patch Panel UTP Cat 6 4 Port',
    'satuan' => 'unit',
    'besaran' => 1540000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Wiring Management',
    'satuan' => 'unit',
    'besaran' => 110000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'PoE Switch HUB',
    'satuan' => 'unit',
    'besaran' => 273000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Network Video Recorder (NVR) Kapasitas 32 Chanel',
    'satuan' => 'unit',
    'besaran' => 5500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => '8 TB Hardisk',
    'satuan' => 'unit',
    'besaran' => 1960000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Rak 19" 12 U Lengkap dengan Power Outlet',
    'satuan' => 'unit',
    'besaran' => 770000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'LCD Monitor 32"',
    'satuan' => 'unit',
    'besaran' => 2380000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Bracket Monitor 32"',
    'satuan' => 'unit',
    'besaran' => 88500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'LCD Monitor 50"',
    'satuan' => 'unit',
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Bracket Monitor 50"',
    'satuan' => 'unit',
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Keyboard + Mouse',
    'satuan' => 'unit',
    'besaran' => 350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Indoor Fix Dome IP Camera',
    'satuan' => 'unit',
    'besaran' => 465000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Outdoor Fix Dome IP Camera',
    'satuan' => 'unit',
    'besaran' => 504000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'MDF-SS',
    'satuan' => 'unit',
    'besaran' => 1450000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Selector Switch c/w Control Panel',
    'satuan' => 'unit',
    'besaran' => 850000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Power Amplifier 360 Watt',
    'satuan' => 'unit',
    'besaran' => 1500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Power Amplifier 240 Watt',
    'satuan' => 'unit',
    'besaran' => 1200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Power Amplifier 120 Watt',
    'satuan' => 'unit',
    'besaran' => 1000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'System Controller (Mixer Pre Amp + Equalizer)',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'VCD/DVD/MP3/Mp4',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Automatic Alarm System',
    'satuan' => 'unit',
    'besaran' => 1000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Paging Mic Keypad',
    'satuan' => 'unit',
    'besaran' => 640000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'UPS 1 KVA 4 Jam',
    'satuan' => 'unit',
    'besaran' => 2475000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Rack Cabinet',
    'satuan' => 'unit',
    'besaran' => 670000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Terminal Box Tata Suara (TBTS)',
    'satuan' => 'unit',
    'besaran' => 75000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Ceiling Speaker',
    'satuan' => 'unit',
    'besaran' => 680000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Wall Speaker',
    'satuan' => 'unit',
    'besaran' => 650000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Horn Speaker',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Tiang',
    'satuan' => 'm\'',
    'besaran' => 55500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'MDF 2 x 8 Pair',
    'satuan' => 'unit',
    'besaran' => 125000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'MDF 2 x 10 Pair',
    'satuan' => 'unit',
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Pemasangan 1 Unit PABX Kap: 1 Line 10 Extension',
    'satuan' => 'unit',
    'besaran' => 1000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Pemasangan 1 Unit PABX Kap: 1 Line 8 Extension',
    'satuan' => 'unit',
    'besaran' => 870000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Terminal Box Telepon',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Outlet Telepon',
    'satuan' => 'unit',
    'besaran' => 102000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Server / Gateway c/w PC, Monitor, Keyboard, Mouse',
    'satuan' => 'unit',
    'besaran' => 6500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Main Switch HUB 24 Port',
    'satuan' => 'unit',
    'besaran' => 950000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Main Switch HUB 12 Port',
    'satuan' => 'unit',
    'besaran' => 650000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Router Broadband',
    'satuan' => 'unit',
    'besaran' => 550000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fire Wall + Anti Virus',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Outlet Data',
    'satuan' => 'unit',
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Patch Cord',
    'satuan' => 'unit',
    'besaran' => 30000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Patch Panel 24 Port',
    'satuan' => 'unit',
    'besaran' => 500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Wifi Access Point (Wifi 6 Radius 50 M)',
    'satuan' => 'unit',
    'besaran' => 1500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Switch Hub 8 Port',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Media Converter',
    'satuan' => 'unit',
    'besaran' => 110000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'OTB',
    'satuan' => 'unit',
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Touch Screen Panel 7"',
    'satuan' => 'unit',
    'besaran' => 2300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Touch Screen Panel 10"',
    'satuan' => 'unit',
    'besaran' => 2500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Touch Screen Panel 12"',
    'satuan' => 'unit',
    'besaran' => 2900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Touch Screen Panel 14"',
    'satuan' => 'unit',
    'besaran' => 3200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Wall Mounted Rack 15U',
    'satuan' => 'unit',
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Workstation, Meja+Kursi',
    'satuan' => 'unit',
    'besaran' => 2550000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Connector',
    'satuan' => 'unit',
    'besaran' => 2550,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Splitter TV 6 Port',
    'satuan' => 'unit',
    'besaran' => 100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Splitter TV 7 Port',
    'satuan' => 'unit',
    'besaran' => 125000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Terminal Bocx TV',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Antena UHF',
    'satuan' => 'unit',
    'besaran' => 130000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Antena VHF',
    'satuan' => 'unit',
    'besaran' => 150000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'AC Wall Mounted Kap : 5.000 BTUH',
    'satuan' => 'unit',
    'besaran' => 3200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'AC Wall Mounted Kap : 6.500 BTUH',
    'satuan' => 'unit',
    'besaran' => 3800000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'AC Wall Mounted Kap : 7.000 BTUH',
    'satuan' => 'unit',
    'besaran' => 4200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'AC Wall Mounted Kap : 9.000 BTUH',
    'satuan' => 'unit',
    'besaran' => 4500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'AC Wall Mounted Kap : 12.000 BTUH',
    'satuan' => 'unit',
    'besaran' => 5300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'AC Wall Mounted Kap : 24.000 BTUH',
    'satuan' => 'unit',
    'besaran' => 7600000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'AC Wall Mounted Kap : 35.000 BTUH',
    'satuan' => 'unit',
    'besaran' => 10000000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Ceiling Fan, 50 CFM',
    'satuan' => 'unit',
    'besaran' => 900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Ceiling Fan, 75 CFM',
    'satuan' => 'unit',
    'besaran' => 1200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Ceiling Fan, 100 CFM',
    'satuan' => 'unit',
    'besaran' => 1350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Ceiling Fan, 200 CFM',
    'satuan' => 'unit',
    'besaran' => 1500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Inline Fan, 500 CFM',
    'satuan' => 'unit',
    'besaran' => 1300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Inline Fan, 700 CFM',
    'satuan' => 'unit',
    'besaran' => 1700000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Axial Fan ; 2.600 CFM',
    'satuan' => 'unit',
    'besaran' => 780000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Axial Fan ; 2.800 CFM',
    'satuan' => 'unit',
    'besaran' => 860000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Axial Fan ; 3.200 CFM',
    'satuan' => 'unit',
    'besaran' => 995000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Axial Fan ; 3.500 CFM',
    'satuan' => 'unit',
    'besaran' => 1020000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Axial Fan ; 4.000 CFM',
    'satuan' => 'unit',
    'besaran' => 1350000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Axial Fan ; 5.500 CFM',
    'satuan' => 'unit',
    'besaran' => 1700000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Rotary Fan',
    'satuan' => 'unit',
    'besaran' => 750000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Ceiling Fan Rotary',
    'satuan' => 'unit',
    'besaran' => 1500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Bifurcated Fan; 1.500 CFM',
    'satuan' => 'unit',
    'besaran' => 8300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Propeller Fan, 75 CFM',
    'satuan' => 'unit',
    'besaran' => 1800000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Propeller Fan, 100 CFM',
    'satuan' => 'unit',
    'besaran' => 2100000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Propeller Fan, 150 CFM',
    'satuan' => 'unit',
    'besaran' => 2300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Propeller Fan, 370 CFM',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Propeller Fan, 375 CFM',
    'satuan' => 'unit',
    'besaran' => 2900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Propeller Fan, 500 CFM',
    'satuan' => 'unit',
    'besaran' => 3500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Propeller Fan, 600 CFM',
    'satuan' => 'unit',
    'besaran' => 3900000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Propeller Fan, 1200 CFM',
    'satuan' => 'unit',
    'besaran' => 4500000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Intake Grille 600 x 300 mm',
    'satuan' => 'unit',
    'besaran' => 95000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Intake Grille 650 x 350 mm',
    'satuan' => 'unit',
    'besaran' => 115000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Intake Grille 800 x 350 mm',
    'satuan' => 'unit',
    'besaran' => 130000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Intake Grille 800 x 400 mm',
    'satuan' => 'unit',
    'besaran' => 145000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Intake Louvre 700 x 400 mm',
    'satuan' => 'unit',
    'besaran' => 135000,
    'keterangan1' => null,
]);


satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fan Louvre 750 x 400 mm',
    'satuan' => 'unit',
    'besaran' => 150000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fan Louvre 900 x 500 mm',
    'satuan' => 'unit',
    'besaran' => 220000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fan Louvre 1.000 x 400 mm',
    'satuan' => 'unit',
    'besaran' => 250000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Fan Louvre 1.000 x 450 mm',
    'satuan' => 'unit',
    'besaran' => 270000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Exhaust Grille 150 x 150 mm',
    'satuan' => 'unit',
    'besaran' => 140000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Exhaust Grille 200 x 200 mm',
    'satuan' => 'unit',
    'besaran' => 160000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Exhaust Grille 600 x 300 mm',
    'satuan' => 'unit',
    'besaran' => 200000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Exhaust Grille 650 x 350 mm',
    'satuan' => 'unit',
    'besaran' => 230000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Exhaust Grille 900 x 400 mm',
    'satuan' => 'unit',
    'besaran' => 300000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Exhaust Louvre',
    'satuan' => 'unit',
    'besaran' => 450000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'ZINK BJLS',
    'satuan' => 'unit',
    'besaran' => 222000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Flinkote',
    'satuan' => 'lot',
    'besaran' => 56500,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'finish Cat',
    'satuan' => 'lot',
    'besaran' => 92000,
    'keterangan1' => null,
]);

satuanhargamaterial::create([
    'kategorimaterial_id' => 14,
    'uraian' => 'Hanger + Support',
    'satuan' => 'lolt',
    'besaran' => 55000,
    'keterangan1' => null,
]);

// KATEGORI 15
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Bak Kontrol Pemeriksaan dari Batu Bata 45 x 45 x 45 cm + Tutup Beton 45 x 45 x 10 cm', 'satuan' => 'buah', 'besaran' => 829900, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Terminal Busbar 300 x 50 x 5 mm', 'satuan' => 'buah', 'besaran' => 135000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Batang Tembaga Pembumian Dia.5/8” (kedalaman min. 12 m)', 'satuan' => 'batang', 'besaran' => 1135000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Pantek (kedalaman min. 12 m)', 'satuan' => 'lot', 'besaran' => 245000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Kabel BC 95 mm2', 'satuan' => 'm', 'besaran' => 145000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Kabel Skun 95 mm2', 'satuan' => 'm', 'besaran' => 26400, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Rod Coupling', 'satuan' => 'buah', 'besaran' => 130000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Material Bantu', 'satuan' => 'lot', 'besaran' => 50000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Batang Tembaga Pembumian Dia.3/4” (kedalaman min. 12 m)', 'satuan' => 'batang', 'besaran' => 1666000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Air Terminal', 'satuan' => 'unit', 'besaran' => 1634000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Base Air Terminal', 'satuan' => 'unit', 'besaran' => 587600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'DC Clip Non Metalic Clamp', 'satuan' => 'unit', 'besaran' => 13500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Square Tape Clamp', 'satuan' => 'unit', 'besaran' => 55000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Bimetallic Connector', 'satuan' => 'unit', 'besaran' => 35000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Grounding Test Box', 'satuan' => 'unit', 'besaran' => 492000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => '5/8" Rod Coupling', 'satuan' => 'unit', 'besaran' => 45000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => '5/8" Driving Stud', 'satuan' => 'unit', 'besaran' => 83000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Rod to Cable Clamp (Type GUV)', 'satuan' => 'unit', 'besaran' => 252900, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Polymer Inspection Pit', 'satuan' => 'unit', 'besaran' => 530000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Coupling Bonding Grounded Rod 70 mm2', 'satuan' => 'unit', 'besaran' => 2040000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Clamp BC L ukuran BC 70 mm2', 'satuan' => 'unit', 'besaran' => 25500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Clamp PVC 1"', 'satuan' => 'unit', 'besaran' => 1500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Copper Air Terminal Base 15 mm', 'satuan' => 'unit', 'besaran' => 189000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => '15x500 mm Aluminium Air Rod', 'satuan' => 'unit', 'besaran' => 160000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => '15x500 mm Copper Air Rod', 'satuan' => 'unit', 'besaran' => 582000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => '25x3 mm Bare Aluminium Tape', 'satuan' => "m'", 'besaran' => 58620, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => '5/8" x 1800 mm Extensible Copperbond Rod', 'satuan' => 'buah', 'besaran' => 496000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => '5/8" Copperbond Rod', 'satuan' => 'buah', 'besaran' => 185000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Grounding Rod Gip 1" Panjang 1 m', 'satuan' => 'buah', 'besaran' => 142500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Grounding Rod Gip 1" Panjang 2 m', 'satuan' => 'buah', 'besaran' => 285000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Exothermic Welding', 'satuan' => 'buah', 'besaran' => 185000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Surge Arrester 1 Phase (15 KA)', 'satuan' => 'unit', 'besaran' => 690000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 15, 'uraian' => 'Surge Arrester 3 Phase (15 KA)', 'satuan' => 'unit', 'besaran' => 962000, 'keterangan1' => null]);


satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Air', 'satuan' => 'liter', 'besaran' => 200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Banner plastik 0.6x0.8 m2', 'satuan' => 'm2', 'besaran' => 100000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Air (m3)', 'satuan' => 'm3', 'besaran' => 50000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Akrilik 4 mm', 'satuan' => 'm2', 'besaran' => 179000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Alang-alang', 'satuan' => 'ikat', 'besaran' => 30000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Alat  tulis', 'satuan' => 'buah', 'besaran' => 68600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Aluminium foil', 'satuan' => 'm2', 'besaran' => 10000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Aluminium foil double side', 'satuan' => 'm2', 'besaran' => 11000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Amplas', 'satuan' => 'lembar', 'besaran' => 3900, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Baja ringan C75 x 0,75 mm', 'satuan' => 'batang', 'besaran' => 77200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Baja ringan C75 x 0,75 mm (permeter)', 'satuan' => 'm', 'besaran' => 12866.67, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Baja Profil', 'satuan' => 'kg', 'besaran' => 16480, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Baja ringan C75 x 0,8 mm', 'satuan' => 'batang', 'besaran' => 82400, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Baja ringan C75 x 1,00 mm', 'satuan' => 'batang', 'besaran' => 106000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Baja ringan C75 x 1,00 mm (m)', 'satuan' => 'm\'', 'besaran' => 17667, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bata Ringan (ukuran 60x20x10 cm)', 'satuan' => 'm3', 'besaran' => 755000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Batu Andesit  Bakar 10x10, t=3cm', 'satuan' => 'Unit', 'besaran' => 145000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Batu Andesit  Bakar 30x30, t=3cm', 'satuan' => 'Unit', 'besaran' => 170000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Batu apung', 'satuan' => 'kg', 'besaran' => 6100, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bollard Besi Tempa (BL1)', 'satuan' => 'unit', 'besaran' => 1262500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bollard Besi Tempa (BL2)', 'satuan' => 'unit', 'besaran' => 1040000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bollard cast  iron (tinggi 1,2m ; Ø bawah 5"  ; Ø atas  4")', 'satuan' => 'buah', 'besaran' => 2626500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bollard stainless  steel (tinggi 1m ; Ø 4")', 'satuan' => 'buah', 'besaran' => 555600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bubuk poles', 'satuan' => 'kg', 'besaran' => 180000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Aspal', 'satuan' => 'kg', 'besaran' => 1200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Coldmix  (Aspal Tambal Dingin) 25 kg', 'satuan' => 'Zak', 'besaran' => 225000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Cutting sticker', 'satuan' => 'm2', 'besaran' => 100000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Epoxy resin grout', 'satuan' => 'kg', 'besaran' => 216700, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Formica', 'satuan' => 'lembar', 'besaran' => 51400, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Formika', 'satuan' => 'lembar', 'besaran' => 170000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Gebalan Rumput  Jenis  Lamuran', 'satuan' => 'm²', 'besaran' => 10600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Glasswool tebal 8 cm', 'satuan' => 'm2', 'besaran' => 29167, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Guardrail', 'satuan' => 'm\'', 'besaran' => 761200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Hebel Block (ukuran 60x20x15 cm)', 'satuan' => 'buah', 'besaran' => 20200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Huruf/letter timbul stainless  steel', 'satuan' => 'buah', 'besaran' => 9200, 'keterangan1' => null]);


satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Ijuk', 'satuan' => 'm3', 'besaran' => 39700, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Insulasi foam', 'satuan' => 'm2', 'besaran' => 70000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Jaringan udara (LVTC  2x15 mm)', 'satuan' => 'unit', 'besaran' => 2156800, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Jendela type J1', 'satuan' => 'unit', 'besaran' => 2740500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Jendela type J2', 'satuan' => 'unit', 'besaran' => 5481000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Joint  Sealent', 'satuan' => 'kg', 'besaran' => 37300, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Kapur', 'satuan' => 'm3', 'besaran' => 263700, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Kapur padam', 'satuan' => 'kg', 'besaran' => 7000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Karung goni', 'satuan' => 'm2', 'besaran' => 14500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Karung plastik', 'satuan' => 'buah', 'besaran' => 3900, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Kisdam (sewa sheet  pile selama 2 bulan)', 'satuan' => 'batang', 'besaran' => 710500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Lem Aibon', 'satuan' => 'kg', 'besaran' => 42500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Lem epoxy', 'satuan' => 'kg', 'besaran' => 145000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Lem kayu', 'satuan' => 'kg', 'besaran' => 16400, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Lem vinyl', 'satuan' => 'kg', 'besaran' => 36900, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Lem Karpet', 'satuan' => 'kg', 'besaran' => 75000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Lethering akrilik tinggi 100 tebal 20 cm', 'satuan' => 'buah', 'besaran' => 1167200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Lethering akrilik tinggi 25 tebal 5 cm', 'satuan' => 'buah', 'besaran' => 140000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Lethering akrilik tinggi 45 tebal 20 cm', 'satuan' => 'buah', 'besaran' => 525200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Lethering akrilik tinggi 70 tebal 20 cm', 'satuan' => 'buah', 'besaran' => 817000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Lis  profil beton (50 cm)', 'satuan' => 'buah', 'besaran' => 8000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Mortar Acian Bata Ringan', 'satuan' => 'zak', 'besaran' => 99600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Mortar Perekat  Bata Ringan', 'satuan' => 'zak', 'besaran' => 85600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Mortar Plesteran Bata Ringan', 'satuan' => 'zak', 'besaran' => 82600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Mortar siap pakai', 'satuan' => 'kg', 'besaran' => 1850, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Mortar Skimcoat', 'satuan' => 'kg', 'besaran' => 5070, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Nako  per daun', 'satuan' => 'buah', 'besaran' => 8700, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pasir Ottawa', 'satuan' => 'Zak', 'besaran' => 515000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pemasangan lantai tempered laminated glass  Jemabatan Kaca', 'satuan' => 'Unit', 'besaran' => 107070707, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pen akrilik', 'satuan' => 'buah', 'besaran' => 7000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Perekat untuk  wallpaper', 'satuan' => 'kg', 'besaran' => 36800, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pintu lipat  (folding door) bahan plastik/PVC', 'satuan' => 'm2', 'besaran' => 215000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pintu type P1', 'satuan' => 'unit', 'besaran' => 4689300, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pipa screen pvc  Ø 4"', 'satuan' => 'm¹', 'besaran' => 94600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pipa stainless  steel diameter 0,5 "  panjang 6 m', 'satuan' => 'batang', 'besaran' => 1152000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pipa stainless  steel diameter 0,75 "  panjang 6 m', 'satuan' => 'batang', 'besaran' => 1253500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pipa stainless  steel diameter 1 "  panjang 6 m', 'satuan' => 'batang', 'besaran' => 1598600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pipa stainless  steel diameter 1,5 "  panjang 6 m', 'satuan' => 'batang', 'besaran' => 1877700, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pipa stainless  steel diameter 2 "  panjang 6 m', 'satuan' => 'batang', 'besaran' => 2461300, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pipa stainless  steel diameter 2,5 "  panjang 6 m', 'satuan' => 'batang', 'besaran' => 3045000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pipa stainless  steel diameter 3 "  panjang 6 m', 'satuan' => 'batang', 'besaran' => 4403200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Plastik aerator', 'satuan' => 'buah', 'besaran' => 15900, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Prasasti marmer 20x20', 'satuan' => 'Unit', 'besaran' => 120000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Ramset', 'satuan' => 'buah', 'besaran' => 3200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Recorder paper', 'satuan' => 'set', 'besaran' => 174100, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Rel pintu dorong', 'satuan' => 'buah', 'besaran' => 243700, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Reng baja ringan', 'satuan' => 'batang', 'besaran' => 33900, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Reng baja ringan', 'satuan' => 'm', 'besaran' => 6000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Roster 10 x  20 cm', 'satuan' => 'buah', 'besaran' => 11300, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Roster 15 x  25 cm', 'satuan' => 'buah', 'besaran' => 19300, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Roster 15 x  30 cm', 'satuan' => 'buah', 'besaran' => 19800, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Roster 20 x 20 cm', 'satuan' => 'buah', 'besaran' => 13100, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Roster 25 x  25 cm', 'satuan' => 'buah', 'besaran' => 16500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Roster 30 x  30 cm', 'satuan' => 'buah', 'besaran' => 20500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Roster/terawang', 'satuan' => 'buah', 'besaran' => 21500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Rumput  sintetis  uk. 1mx1m tebal 2 cm', 'satuan' => 'buah', 'besaran' => 149300, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sabun', 'satuan' => 'Kg', 'besaran' => 19400, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Screen low  carbon', 'satuan' => 'm¹', 'besaran' => 549300, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Screen stainless  steel ø  4"', 'satuan' => 'm¹', 'besaran' => 1137800, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sealant', 'satuan' => 'tube', 'besaran' => 33100, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sealant', 'satuan' => 'tube', 'besaran' => 33500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sealant  kaca', 'satuan' => 'kg', 'besaran' => 32100, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sealtape', 'satuan' => 'buah', 'besaran' => 5700, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semen Sika', 'satuan' => 'Zak', 'besaran' => 163900, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Septic  tank pabrikasi 1000 liter', 'satuan' => 'buah', 'besaran' => 3605000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Septic  tank pabrikasi 1200 liter', 'satuan' => 'buah', 'besaran' => 5150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Septic  tank pabrikasi 2000 liter', 'satuan' => 'buah', 'besaran' => 9785000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Septic  tank pabrikasi 800 liter', 'satuan' => 'buah', 'besaran' => 2629500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sesek bambu', 'satuan' => 'lembar', 'besaran' => 19100, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Signage RMJ', 'satuan' => 'unit', 'besaran' => 1987300, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Signage Plat Baja lengkap dengan accessories', 'satuan' => 'buah', 'besaran' => 1500000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sitting Group (cast  iron, kayu)', 'satuan' => 'unit', 'besaran' => 2389300, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Skrup fixer', 'satuan' => 'buah', 'besaran' => 1600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Soda api', 'satuan' => 'kg', 'besaran' => 17900, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Strorox-100', 'satuan' => 'kg', 'besaran' => 40000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Tali ijuk', 'satuan' => 'kg', 'besaran' => 8200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Tali Ijuk', 'satuan' => "m'", 'besaran' => 200, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Terpal', 'satuan' => 'm2', 'besaran' => 12000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Tiang Bolard (Bollard cast  iron) tinggi 1,2 m; ø bawah 5"; ø atas  4"', 'satuan' => 'buah', 'besaran' => 1429100, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Venetions  blinds  dan vertical blinds  (tirai)', 'satuan' => 'm2', 'besaran' => 7400, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Wallpaper', 'satuan' => "m'", 'besaran' => 13500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Waterstop lebar 150 mm', 'satuan' => "m'", 'besaran' => 75000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Waterstop lebar 200 mm', 'satuan' => "m'", 'besaran' => 94000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Waterstop lebar 250 mm', 'satuan' => "m'", 'besaran' => 136000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Wax', 'satuan' => 'kg', 'besaran' => 130000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Paving Block Tebal 6 cm fc 20 Mpa', 'satuan' => 'm2', 'besaran' => 70000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pasir Filler', 'satuan' => 'm3', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Paving Block Tebal 6 cm fc 25 Mpa', 'satuan' => 'm2', 'besaran' => 82000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Paving Block Tebal 8 cm fc 20 Mpa', 'satuan' => 'm2', 'besaran' => 85000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Paving Block Tebal 8 cm fc 25 Mpa', 'satuan' => 'm2', 'besaran' => 97000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Stepping Band Lebar 15 mm', 'satuan' => "m'", 'besaran' => 8570, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palet Kayu uk. 120x120x10 cm', 'satuan' => 'buah', 'besaran' => 123000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Geotextile >100 gr/m2', 'satuan' => 'm2', 'besaran' => 17500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Geotextile >400 gr/m2', 'satuan' => 'm2', 'besaran' => 21000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Geotextile >800 gr/m2', 'satuan' => 'm2', 'besaran' => 32000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Geotekstil woven 400 gr/m2', 'satuan' => 'm2', 'besaran' => 25000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Geomembran', 'satuan' => 'm2', 'besaran' => 18950, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Geosynthetic Clay Liner', 'satuan' => 'm2', 'besaran' => 25000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bentonite', 'satuan' => 'kg', 'besaran' => 25000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pupuk Organik', 'satuan' => 'm3', 'besaran' => 178000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Kompos', 'satuan' => 'm3', 'besaran' => 165000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bunga Mentega di Polybag 20 Liter', 'satuan' => 'buah', 'besaran' => 135000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bunga Mentega di Polybag 25 Liter', 'satuan' => 'buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bunga Terompet Kuning di Polybag 20 Liter', 'satuan' => 'buah', 'besaran' => 135000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bunga Terompet Kuning di Polybag 25 Liter', 'satuan' => 'buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bunga Terompet Kuning di Polybag 50 Liter', 'satuan' => 'buah', 'besaran' => 200000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bungur Sakura di Polybag 20 Liter', 'satuan' => 'buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bungur Sakura/Bungur Jepang di Polybag 25 Liter', 'satuan' => 'buah', 'besaran' => 175000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bungur di Polybag 75 Liter', 'satuan' => 'buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bungur di Polybag 100 Liter', 'satuan' => 'buah', 'besaran' => 375000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Cassia Glauca di Polybag 20 Liter', 'satuan' => 'buah', 'besaran' => 155000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Cassia glauca di Polybag 25 Liter', 'satuan' => 'buah', 'besaran' => 170000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Dracaena'song of india' di polybag 20 liter", 'satuan' => 'buah', 'besaran' => 165000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Dracaena ‘Song of India’ di Polybag 25 Liter", 'satuan' => 'buah', 'besaran' => 180000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Dracaena 'Song of Jamaica' di Polybag 20 Liter", 'satuan' => 'buah', 'besaran' => 170000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Dracaena 'Song of Jamaica' di Polybag 25 Liter", 'satuan' => 'buah', 'besaran' => 190000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Jarak Batavia di Polybag 20 Liter", 'satuan' => 'buah', 'besaran' => 175000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Jarak Batavia di Polybag 25 Liter", 'satuan' => 'buah', 'besaran' => 190000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Kayu Putih Kuning di Polybag 20 Liter", 'satuan' => 'buah', 'besaran' => 180000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Kayu Putih Kuning di Polybag 25 Liter", 'satuan' => 'buah', 'besaran' => 190000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Bugenvil/bunga kertas di Polybag 20 Liter", 'satuan' => 'buah', 'besaran' => 185000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Penda Merah di Polybag 20 Liter", 'satuan' => 'buah', 'besaran' => 190000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Pucuk merah di Polybag 25 Liter", 'satuan' => 'buah', 'besaran' => 200000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Sikat Botol di Polybag 20 Liter", 'satuan' => 'buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Sikat Botol di Polybag 25 Liter", 'satuan' => 'buah', 'besaran' => 165000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon kecil Anggur terompet", 'satuan' => 'buah', 'besaran' => 18000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Anti Rayap tanah", 'satuan' => 'kg', 'besaran' => 28500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon kecil Pucuk merah", 'satuan' => 'buah', 'besaran' => 50000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Pucuk Merah di Polybag 20 Liter", 'satuan' => 'Pohon', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Pucuk Merah di Polybag 25 Liter", 'satuan' => 'Pohon', 'besaran' => 400000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Bunga Kupu-kupu di Polybag 50 Liter", 'satuan' => 'Pohon', 'besaran' => 500000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Bunga Kupu-kupu di Polybag 75 Liter", 'satuan' => 'Pohon', 'besaran' => 530000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Pulai di Polybag 75 Liter", 'satuan' => 'buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => "Pohon Pulai di Polybag 100 Liter", 'satuan' => 'buah', 'besaran' => 275000, 'keterangan1' => null]);


satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Pulai di Polybag 150 Liter', 'satuan' => 'buah', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Pulai di Polybag 200 Liter', 'satuan' => 'buah', 'besaran' => 325000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Pulai di Polybag 250 Liter', 'satuan' => 'buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon sedang Ketapang Kencana', 'satuan' => 'buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Mahoni di Polybag 75 Liter', 'satuan' => 'buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Mahoni di Polybag 100 Liter', 'satuan' => 'Pohon', 'besaran' => 400000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Mahoni di Polybag 150 Liter', 'satuan' => 'Pohon', 'besaran' => 425000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Beringin di Polybag 200 Liter', 'satuan' => 'Pohon', 'besaran' => 550000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Beringin di Polybag 250 Liter', 'satuan' => 'Pohon', 'besaran' => 590000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Beringin di Polybag 100 Liter', 'satuan' => 'buah', 'besaran' => 250000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Beringin di Polybag 150 Liter', 'satuan' => 'buah', 'besaran' => 275000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Beringin di Polybag 250 Liter', 'satuan' => 'buah', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon sedang Tabebuya', 'satuan' => 'buah', 'besaran' => 450000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bintaro di Polybag 50 Liter', 'satuan' => 'buah', 'besaran' => 220000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bintaro di Polybag 75 Liter', 'satuan' => 'buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Besar Kamboja', 'satuan' => 'buah', 'besaran' => 550000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Besar Beringin', 'satuan' => 'buah', 'besaran' => 2900000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Besar Pulai', 'satuan' => 'buah', 'besaran' => 5390000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Besar Trembesi', 'satuan' => 'buah', 'besaran' => 650000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Trembesi di Polybag 75 Liter', 'satuan' => 'buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Trembesi di Polybag 100 Liter', 'satuan' => 'buah', 'besaran' => 275000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Trembesi di Polybag 150 Liter', 'satuan' => 'buah', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Trembesi di Polybag 200 Liter', 'satuan' => 'buah', 'besaran' => 325000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Trembesi di Polybag 250 Liter', 'satuan' => 'buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Thevetia di Polybag 20 Liter', 'satuan' => 'buah', 'besaran' => 170000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Thevetia di Polybag 25 Liter', 'satuan' => 'buah', 'besaran' => 190000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Turi di Polybag 20 Liter', 'satuan' => 'buah', 'besaran' => 180000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Turi di Polybag 25 Liter', 'satuan' => 'buah', 'besaran' => 190000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Kembang Merak di Polybag 20 Liter', 'satuan' => 'buah', 'besaran' => 210000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Pandan Bali di Polybag 20 Liter', 'satuan' => 'buah', 'besaran' => 200000, 'keterangan1' => null]);


satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Yucca di Polybag 20 Liter', 'satuan' => 'buah', 'besaran' => 190000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Flamboyan di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 210000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Flamboyan Kuning di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 210000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Flamboyan di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Flamboyan di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 375000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Flamboyan di Polybag 150 Liter', 'satuan' => 'Buah', 'besaran' => 400000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Flamboyan di Polybag 200 Liter', 'satuan' => 'Buah', 'besaran' => 425000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Flamboyan Kuning di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Janda Merana di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 220000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Janda Merana di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Ketapang kencana di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 225000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Ketapang kencana di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Ketapang kencana di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 375000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Sosis di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 225000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Sosis di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Sosis di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 275000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Sosis di Polybag 150 Liter', 'satuan' => 'Buah', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Sosis di Polybag 200 Liter', 'satuan' => 'Buah', 'besaran' => 325000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Sosis di Polybag 250 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Tabebuya di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 225000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Tabebuya di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Waru di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 225000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Waru di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 250000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Biola Cantik di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Biola Cantik di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 375000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Kamboja di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Kamboja di Polybag 100 Liter', 'satuan' => 'buah', 'besaran' => 375000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Kamboja di Polybag 150 Liter', 'satuan' => 'Buah', 'besaran' => 400000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Kamboja Fosil di Polybag 200 Liter', 'satuan' => 'Buah', 'besaran' => 425000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Keben di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Keben di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Kecrutan di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Kecrutan di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 375000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Putat di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Putat di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 275000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bodhi di Polybag 100 Liter', 'satuan' => 'buah', 'besaran' => 275000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bodhi di Polybag 150 Liter', 'satuan' => 'Buah', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bodhi di Polybag 200 Liter', 'satuan' => 'Buah', 'besaran' => 325000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Bodhi di Polybag 250 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pohon Baobab di Polybag 250 Liter', 'satuan' => 'Buah', 'besaran' => 350000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem ekor tupai di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 250000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sylvertris di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 250000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sylvertris di Polybag 150 Liter', 'satuan' => 'Buah', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sylvertris di Polybag 200 Liter', 'satuan' => 'Buah', 'besaran' => 400000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sylvertris di Polybag 250 Liter', 'satuan' => 'Buah', 'besaran' => 450000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Putri di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 200000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Putri di Polybag 150 Liter', 'satuan' => 'Buah', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Putri di Polybag 200 Liter', 'satuan' => 'Buah', 'besaran' => 400000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Putri di Polybag 250 Liter', 'satuan' => 'Buah', 'besaran' => 450000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem raja di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 250000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem raja di Polybag 150 Liter', 'satuan' => 'Buah', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem raja di Polybag 200 Liter', 'satuan' => 'Buah', 'besaran' => 400000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem raja di Polybag 250 Liter', 'satuan' => 'Buah', 'besaran' => 450000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem sadeng di Polybag 100 Liter', 'satuan' => 'Buah', 'besaran' => 250000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem sadeng di Polybag 150 Liter', 'satuan' => 'Buah', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem sadeng di Polybag 200 Liter', 'satuan' => 'Buah', 'besaran' => 400000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Sadeng di Polybag 250 Liter', 'satuan' => 'Buah', 'besaran' => 450000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Kecil Palem Wregu', 'satuan' => 'buah', 'besaran' => 15000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Kecil Palem Kuning', 'satuan' => 'buah', 'besaran' => 45000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Besar Palem Ekor Tupai', 'satuan' => 'buah', 'besaran' => 230000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem ekor tupai di Polybag 150 Liter', 'satuan' => 'Buah', 'besaran' => 300000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem ekor tupai di Polybag 200 Liter', 'satuan' => 'Buah', 'besaran' => 400000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem ekor tupai di Polybag 250 Liter', 'satuan' => 'Buah', 'besaran' => 450000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Besar Kelapa', 'satuan' => 'buah', 'besaran' => 445000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Besar Palem Botol', 'satuan' => null, 'besaran' => 460000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem jepang di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem jepang di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 200000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem komodoria/komodor/chamadorea di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem komodoria/komodor/chamadorea di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 200000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem kuning di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 150000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem kuning di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 200000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Merah/ Pinang Merah di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem waregu di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem waregu di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 200000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sikas Halus/Mawar Jambe di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Sikas Halus/Mawar Jambe di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 200000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Phoenix di Polybag 50 Liter', 'satuan' => 'Buah', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Phoenix di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 200000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Merah/ Pinang Merah di Polybag 75 Liter', 'satuan' => 'Buah', 'besaran' => 200000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Palem Besar Palem Sadeng', 'satuan' => 'Buah', 'besaran' => 510000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Alamanda di Polybag 5 Liter', 'satuan' => 'Polybag', 'besaran' => 10000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Alamanda di Polybag 11 Liter', 'satuan' => 'Polybag', 'besaran' => 15000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Alamanda di Polybag 20 Liter', 'satuan' => 'Polybag', 'besaran' => 20000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Alamanda/Bunga terompet emas di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Alamanda/Bunga terompet emas di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Alamanda/Bunga terompet emas di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Agave/lidah naga di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Agave/lidah naga di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Bakung Lele di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Bakung Lele di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Bakung Jawa di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Bakung Jawa di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Bromelia di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Bromelia di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Bugenvil/bunga kertas di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Bunga Iris di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Bunga Terompet Kuning di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Bunga Terompet Kuning di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Calathea di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Canna di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);

satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Capit Udang', 'satuan' => 'Buah', 'besaran' => 2100, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Cendrawasih di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Costus di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Costus di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Dracaena ‘Song of India’ di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Dracaena \'Song of Jamaica\' di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Dracaena ‘Song of India’ di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Dracaena \'Song of Jamaica\' di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Helliconia di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Helliconia di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Honje/Kecombrang di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Honje/Kecombrang di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Hujan Mas di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Hujan Mas di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Hujan Mas di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Kacapiring wangi/Gardenia di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Kaca piring di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Kacapiring wangi/Gardenia di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Kacapiring wangi/Gardenia di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Kembang sepatu di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Kemuning di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Kana di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Lili Brazil di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Melati Putih di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Melati Putih di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Nusa Indah di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Oleander/Bunga Mentega di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Oleander/Bunga Mentega di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Pandan Kuning di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Penda Emas di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Pretty Pink di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Pretty Pink di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Puring di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Puring di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Ruelia / Kencana Ungu di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);

// Semak dan tanaman
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Sansevieria/Lidah Mertua di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Sansevieria/Lidah Mertua di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Soka di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Tabernae/Mondokaki di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Tabernae di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Tabernac di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Walisongo/Umbrella tree di Polybag 5 Liter', 'satuan' => 'Buah', 'besaran' => 3000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Walisongo/Umbrella Tree di Polybag 11 Liter', 'satuan' => 'Buah', 'besaran' => 5000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Semak Walisongo/Umbrella Tree di Polybag 20 Liter', 'satuan' => 'Buah', 'besaran' => 9000, 'keterangan1' => null]);

// Penutup tanah
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Penutup Tanah Kacang Hias', 'satuan' => 'Buah', 'besaran' => 2500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Penutup Tanah Kacang hias di Polybag 0.5 Liter', 'satuan' => 'm2', 'besaran' => 15000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Penutup Tanah Kucai Mini di Polybag 0.5 Liter', 'satuan' => 'm2', 'besaran' => 15000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Penutup Tanah Lantana di Polybag 0.5 Liter', 'satuan' => 'm2', 'besaran' => 15000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Penutup Tanah Sutra bombay di Polybag 0.5 Liter', 'satuan' => 'm2', 'besaran' => 15000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Penutup Tanah Widelia di Polybag 0.5 Liter', 'satuan' => 'm2', 'besaran' => 15000, 'keterangan1' => null]);

// Rumput
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Rumput embun', 'satuan' => 'm2', 'besaran' => 17000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Rumput gajah', 'satuan' => 'm2', 'besaran' => 10000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Rumput Gajah Mini', 'satuan' => 'm2', 'besaran' => 15000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Rumput peking', 'satuan' => 'm2', 'besaran' => 19000, 'keterangan1' => null]);

// Matras dan perekat
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Matras Tipe I, Termasuk angkur / penguat matras', 'satuan' => 'm2', 'besaran' => 5600, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Perekat Campuran Hydroseeding', 'satuan' => 'kg', 'besaran' => 16000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bibit Vegetasi (Biji Rumput)', 'satuan' => 'kg', 'besaran' => 80000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Mulsa', 'satuan' => 'kg', 'besaran' => 35000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pupuk anorganik *)', 'satuan' => 'kg', 'besaran' => 18000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pupuk anorganik (ex: NPK)', 'satuan' => 'm3', 'besaran' => 180000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pupuk anorganik cair (ex: NPK)', 'satuan' => 'm3', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pupuk anorganik padat', 'satuan' => 'm3', 'besaran' => 150000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Perekat Matras Perkuatan (Lem)', 'satuan' => 'kg', 'besaran' => 18000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Matras Tipe II, Termasuk angkur / penguat matras', 'satuan' => 'm2', 'besaran' => 7500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Matras Tipe III, Termasuk angkur / penguat matras', 'satuan' => 'm2', 'besaran' => 9500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bibit Vegetasi (Biji Legume Crop Cover/LCC)', 'satuan' => 'kg', 'besaran' => 166000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Material Organik', 'satuan' => 'm3', 'besaran' => 10500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Kapur', 'satuan' => 'kg', 'besaran' => 3100, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Pasir', 'satuan' => 'm3', 'besaran' => 250000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'sulfur', 'satuan' => 'kg', 'besaran' => 12000, 'keterangan1' => null]);


satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Air Bersih', 'satuan' => 'liter', 'besaran' => 550, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Fungisida/Insektisida', 'satuan' => 'kg', 'besaran' => 430000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Cat Minyak', 'satuan' => 'liter', 'besaran' => 48500, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Tong Sampah 2 tabung', 'satuan' => 'buah', 'besaran' => 340000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Besi Hollow 30x60', 'satuan' => 'm3', 'besaran' => 13700, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bambu dia. 3-5 cm', 'satuan' => 'm', 'besaran' => 700, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bambu dia. 5-8 cm', 'satuan' => 'm', 'besaran' => 900, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bambu dia. 8-10 cm', 'satuan' => 'm', 'besaran' => 12000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Bambu dia. 10-12 cm', 'satuan' => 'm', 'besaran' => 15000, 'keterangan1' => null]);
satuanhargamaterial::create(['kategorimaterial_id' => 16, 'uraian' => 'Tali/pengikat sejenisnya', 'satuan' => 'm', 'besaran' => 500, 'keterangan1' => null]);
satuanhargamaterial::create([
    'kategorimaterial_id' => 16, // misal kategori sewa/lahan
    'uraian' => 'Sewa Lahan',
    'satuan' => 'm2',
    'besaran' => 1000000,
    'keterangan1' => null
]);



















// KATEGORI MATERIAL
kategorimaterial::create([
    'id' => 1,
    'material' => 'Tanah Dan Batuan',
]);

kategorimaterial::create([
    'id' => 2,
    'material' => 'Kayu Dan Bambu',
]);

kategorimaterial::create([
    'id' => 3,
    'material' => 'Pipa PVC Dan HDPE
',
]);

kategorimaterial::create([
    'id' => 4,
    'material' => 'Besi Dan Baja
',
]);

kategorimaterial::create([
    'id' => 5,
    'material' => 'Penutup Atap
',
]);

kategorimaterial::create([
    'id' => 6,
    'material' => 'Penutup Lantai Dan Dinding',
]);

kategorimaterial::create([
    'id' => 7,
    'material' => 'Beton Dan Adukan Pasangan',
]);

kategorimaterial::create([
    'id' => 8,
    'material' => 'Cat',
]);

kategorimaterial::create([
    'id' => 9,
    'material' => 'Kunci Dan Engsel',
]);

kategorimaterial::create([
    'id' => 10,
    'material' => 'Kaca',
]);

kategorimaterial::create([
    'id' => 11,
    'material' => 'Sanitair',
]);

kategorimaterial::create([
    'id' => 12,
    'material' => 'Minyak',
]);

kategorimaterial::create([
    'id' => 13,
    'material' => 'Alumunium Dan Besi',
]);

kategorimaterial::create([
    'id' => 14,
    'material' => 'Listrik',
]);

kategorimaterial::create([
    'id' => 15,
    'material' => 'Sistem Pembumian',
]);

kategorimaterial::create([
    'id' => 16,
    'material' => 'Lain-lain',
]);






/// RANTAI PASOK MATERIAL KABUPATEN BANDUNG BARAT
 rantaipasokmaterial::create([
            'informasirantaipasok_id' => 1,
            'gambar' => '/assets/icon/material.png',
            'namamaterial' => 'Semen Portland',
            'harga' => '55000',
            'lokasi' => 'Gudang Bandung Barat',
            'ketersediaan' => 'Tersedia',
            'satuan' => 'Zak',
            'keterangan' => '(40 kg)',
            'notelepon' => '081321455855',

            'cadangan1' => null,
            'cadangan2' => null,
            'cadangan3' => null,
            'cadangan4' => null,
        ]);

        rantaipasokperalatan::create([
            'informasirantaipasok_id' => 1,
            'namamaterial' => 'Beton Molen Mini',
            'gambar' => '/assets/icon/peralatan.png',
            'harga' => '350000',
            'lokasi' => 'Workshop Cimareme - Bandung Barat',
            'ketersediaan' => 'Tersedia',
            'satuan' => 'Unit',
            'keterangan' => 'Untuk pekerjaan skala kecil',
            'notelepon' => '081321455855',

            'cadangan1' => null,
            'cadangan2' => null,
    'cadangan3' => null,
    'cadangan4' => null,
]);


rantaipasoktokobangunan::create([
    'informasirantaipasok_id' => 1,
    'gambar' => '/assets/icon/tokobangunan.png',
    'namamaterial' => 'Batu Bata Merah',
    'harga' => '750',
    'lokasi' => 'Toko Sumber Jaya - Ngamprah',
    'ketersediaan' => 'Tersedia',
    'satuan' => 'Pcs',
    'keterangan' => 'Bata press kualitas A',
    'notelepon' => '081321455855',

    'cadangan1' => null,
    'cadangan2' => null,
    'cadangan3' => null,
    'cadangan4' => null,
]);
// Material
rantaipasokmaterial::create([
    'informasirantaipasok_id' => 2,
    'gambar' => '/assets/icon/material.png',
    'namamaterial' => 'Semen Portland',
    'harga' => '55000',
    'lokasi' => 'Gudang Bandung Barat',
    'ketersediaan' => 'Tersedia',
    'satuan' => 'Zak',
    'keterangan' => '(40 kg)',
    'notelepon' => '081321455855',
    'cadangan1' => null,
    'cadangan2' => null,
    'cadangan3' => null,
    'cadangan4' => null,
]);

rantaipasokmaterial::create([
    'informasirantaipasok_id' => 2,
    'gambar' => '/assets/icon/material.png',
    'namamaterial' => 'Pasir Beton',
    'harga' => '35000',
    'lokasi' => 'Gudang Cimahi',
    'ketersediaan' => 'Tidak Tersedia',
    'satuan' => 'm³',
    'keterangan' => 'Pasir urug kualitas bagus',
    'notelepon' => '081321455855',
    'cadangan1' => null,
    'cadangan2' => null,
    'cadangan3' => null,
    'cadangan4' => null,
]);

// Peralatan
rantaipasokperalatan::create([
    'informasirantaipasok_id' => 2,
    'namamaterial' => 'Beton Molen Mini',
    'gambar' => '/assets/icon/peralatan.png',
    'harga' => '350000',
    'lokasi' => 'Workshop Cimareme - Bandung Barat',
    'ketersediaan' => 'Tidak Tersedia',
    'satuan' => 'Unit',
    'keterangan' => 'Untuk pekerjaan skala kecil',
    'notelepon' => '081321455855',
    'cadangan1' => null,
    'cadangan2' => null,
    'cadangan3' => null,
    'cadangan4' => null,
]);

rantaipasokperalatan::create([
    'informasirantaipasok_id' => 2,
    'namamaterial' => 'Gerobak Semen',
    'gambar' => '/assets/icon/peralatan.png',
    'harga' => '250000',
    'lokasi' => 'Workshop Lembang',
    'ketersediaan' => 'Tidak Tersedia',
    'satuan' => 'Unit',
    'keterangan' => 'Untuk angkut material ringan',
    'notelepon' => '081321455855',
    'cadangan1' => null,
    'cadangan2' => null,
    'cadangan3' => null,
    'cadangan4' => null,
]);

// Toko Bangunan
rantaipasoktokobangunan::create([
    'informasirantaipasok_id' => 2,
    'gambar' => '/assets/icon/tokobangunan.png',
    'namamaterial' => 'Batu Bata Merah',
    'harga' => '750',
    'lokasi' => 'Toko Sumber Jaya - Ngamprah',
    'ketersediaan' => 'Tersedia',
    'satuan' => 'Pcs',
    'keterangan' => 'Bata press kualitas A',
    'notelepon' => '081321455855',
    'cadangan1' => null,
    'cadangan2' => null,
    'cadangan3' => null,
    'cadangan4' => null,
]);

rantaipasoktokobangunan::create([
    'informasirantaipasok_id' => 2,
    'gambar' => '/assets/icon/tokobangunan.png',
    'namamaterial' => 'Triplek 12 mm',
    'harga' => '85000',
    'lokasi' => 'Toko Mega Bangunan - Cimahi',
    'ketersediaan' => 'Tidak Tersedia',
    'satuan' => 'Lembar',
    'keterangan' => 'Triplek berkualitas untuk plafon',
    'notelepon' => '081321455855',
    'cadangan1' => null,
    'cadangan2' => null,
    'cadangan3' => null,
    'cadangan4' => null,
]);


informasirantaipasok::create([
            'kecamatankbb_id'      => 1,
            'user_id'              => 1,
            'namaperusahaan' => '/assets/icon/informasirantaipasok.avif',
            'namaperusahaan'       => 'CV. Angkasa Raya Teknik',
            'tahunberdiri'         => '2019',

            'nib'                  => '8129081290812098',
            'npwp'                 => '12.345.678.9-012.345',

            'telepon'              => '081234567890',
            'email'                => 'info@angkasarayateknik.id',
            'website'              => 'https://angkasarayateknik.id',
            'alamatlengkap'        => 'Jl. Puspa Kencana No. 2B, KBB, Jawa Barat',

            'namapimpinan'         => 'Dicky Hermansyah, S.T.',
            'jabatan'              => 'Direktur Utama',

            'keteranganperusahaan' => 'Perusahaan yang bergerak dalam penyediaan material konstruksi dan jasa teknik bangunan.',
        ]);

        informasirantaipasok::create([
            'kecamatankbb_id'      => 1,
            'user_id'              => 2,
            'namaperusahaan' => '/assets/icon/informasirantaipasok.avif',
            'namaperusahaan'       => 'PT. KBB Jaya Makmur',
            'tahunberdiri'         => '2019',

            'nib'                  => '8129081290812098',
            'npwp'                 => '12.345.678.9-012.345',

            'telepon'              => '081234567890',
            'email'                => 'info@angkasarayateknik.id',
            'website'              => 'https://angkasarayateknik.id',
            'alamatlengkap'        => 'Jl. Puspa Kencana No. 2B, KBB, Jawa Barat',

            'namapimpinan'         => 'Dicky Hermansyah, S.T.',
            'jabatan'              => 'Direktur Utama',

            'keteranganperusahaan' => 'Perusahaan yang bergerak dalam penyediaan material konstruksi dan jasa teknik bangunan.',
        ]);

    }    /**
     * Menghitung usia berdasarkan tanggal lahir.
     *
     * @param  string  $birthDate
     * @return int
     */
    protected function calculateAge($birthDate)
    {
        return Carbon::parse($birthDate)->age;
    }
}
