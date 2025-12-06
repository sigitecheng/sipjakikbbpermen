<?php

namespace App\Http\Controllers;

use App\Models\agendapelatihan;
use App\Models\agendaskk;
use App\Models\agendastatus;
use App\Models\allskktenagakerjablora;
use App\Models\artikeljakonmasjaki;
use App\Models\asosiasipengusaha;
use App\Models\berita;
use App\Models\beritaagenda;
use App\Models\bujkkonsultan;
use App\Models\bujkkontraktor;
use App\Models\dokumentasijakon;
use App\Models\headerberanda;
use App\Models\himbauandinas;
use App\Models\kecelakaankerjamasjaki;
use App\Models\kegiatanjaskon;
use App\Models\keputusanmenteri;
use App\Models\keterampilanpekerja;
use App\Models\ketertiban;
use App\Models\laporankegiatan;
use App\Models\metodepengadaan;
use App\Models\pagevisit;
use App\Models\paketpekerjaan;
use App\Models\paketpekerjaanmasjaki;
use App\Models\pelatihan;
use App\Models\penanggungjawabteknis;
use App\Models\pengawasanbangunangedung;
use App\Models\pengawasanbujk;
use App\Models\pengawasanlokasi;
use App\Models\pengawasanstatus;
use App\Models\pengawasantindakan;
use App\Models\peraturan;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\pergubernur;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\pesertapelatihan;
use App\Models\qa;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\referensi;
use App\Models\skktenagakerjablora;
use App\Models\statusadmin;
use App\Models\suratedaran;
use App\Models\suratkeputusan;
use App\Models\tahunpilihan;
use App\Models\tertibjakonpemanfaatan;
use App\Models\tertibjakonpenyelenggaraan;
use App\Models\tertibjasakonstruksi;
use App\Models\timpembina;
use App\Models\Tukangterampil;
use App\Models\uijk;
use App\Models\undangundang;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // <─ WAJIB


class AdminDashboardController extends Controller
{
    public function index()
    {

        // ---------------------------
        // JUMLAH DATA YANG ADA
        $data_berita = berita::count();
        $data_artikel = artikeljakonmasjaki::count();
        $data_dokumentasijakon = dokumentasijakon::count();
        $data_bujk = bujkkontraktor::count() + bujkkonsultan::count();
        $data_2024 = skktenagakerjablora::count();
        $data_2025 = allskktenagakerjablora::count();
        $data_semuatkk = skktenagakerjablora::count() + allskktenagakerjablora::count();
        $data_paketpekerjaan = paketpekerjaanmasjaki::count();
        $data_agendapelatihan = agendapelatihan::count();
        $data_agendaskk = agendaskk::count();
        $data_pesertapelatihan = pesertapelatihan::count();
        $data_tertibjakonusaha = tertibjasakonstruksi::count();
        $data_tertibjakonpemanfaatan = tertibjakonpemanfaatan::count();
        $data_tertibjakonpenyelenggaraan = tertibjakonpenyelenggaraan::count();
        $data_pengawasanbujk = pengawasanbujk::count();
        $data_kecelakaankerja = kecelakaankerjamasjaki::count();

        $user = Auth::user();

        $visitCount = pagevisit::sum('visit_count'); // Total kunjungan
        $conversionRate = 12; // Angka contoh, sesuaikan dengan logika Anda
        $salesRate = 0.8; // Angka contoh, sesuaikan dengan logika Anda
        $registrationRate = -1; // Angka contoh, sesuaikan dengan logika

        // Mendapatkan user_id yang sedang login
$userId = Auth::id();

// Menghitung jumlah kegiatan yang diikuti oleh user tersebut berdasarkan user_id dan agendaskk_id
$jumlahKegiatan = allskktenagakerjablora::where('user_id', $userId)
                                       ->whereNotNull('agendaskk_id')  // Hanya yang memiliki agendaskk_id
                                       ->count();

$jumlahKegiatan = $jumlahKegiatan ?: 0;


$jumlahDikembalikan = allskktenagakerjablora::where('user_id', $userId)
    ->whereNotNull('agendaskk_id')
    ->where('verifikasipu', 'dikembalikan')
    ->count();

$jumlahDikembalikan = $jumlahDikembalikan ?: 0;

$jumlahLolos = allskktenagakerjablora::where('user_id', $userId)
    ->whereNotNull('agendaskk_id')
    ->where('verifikasipu', 'lolos')
    ->count();

$jumlahLolos = $jumlahLolos ?: 0;


$jumlahVerifikasiLps = allskktenagakerjablora::where('user_id', $userId)
    ->whereNotNull('agendaskk_id')
    ->where('verifikasilps', true)
    ->count();

$jumlahVerifikasiLps = $jumlahVerifikasiLps ?: 0;

$jumlahDenganSertifikat = allskktenagakerjablora::where('user_id', $userId)
    ->whereNotNull('agendaskk_id')       // pastikan ada agendaskk_id
    ->whereNotNull('sertifikat')         // pastikan sertifikat tidak null
    ->where('sertifikat', '!=', '')      // pastikan sertifikat tidak kosong string
    ->count();

// Jika tidak ada, pastikan tetap 0
$jumlahDenganSertifikat = $jumlahDenganSertifikat ?: 0;


        $dataallskktenagakerjablora = allskktenagakerjablora::all();
        // return view('backend.00_adminmasjaki.01_fiturterpisah.01_dashboard', [
        return view('backend.00_administrator.01_halamanutama.dashboard', [
            'title' => 'Dashboard SIPJAKI Kabupaten Bandung Barat',
            'user' => $user,
            'visitCount' => $visitCount,
            'conversionRate' => $conversionRate,
            'salesRate' => $salesRate,
            'registrationRate' => $registrationRate,
            'jumlahKegiatan' => $jumlahKegiatan,
            'jumlahDikembalikan' => $jumlahDikembalikan,
            'jumlahLolos' => $jumlahLolos,
            'jumlahVerifikasiLps' => $jumlahVerifikasiLps,
            'jumlahDenganSertifikat' => $jumlahDenganSertifikat,
            // 'jumlahQa' => $jumlahQa,  // Menambahkan jumlah data ke view
            // 'jumlahBerita' => $jumlahBerita,  // Menambahkan jumlah data ke view
            // 'jumlahAgendasertifikasi' => $jumlahAgendasertifikasi,  // Menambahkan jumlah data ke view
            'data_berita' => $data_berita,
            'data_artikel' => $data_artikel,
            'data_dokumentasijakon' => $data_dokumentasijakon,
            'data_bujk' => $data_bujk,
            'data_2024' => $data_2024,
            'data_2025' => $data_2025,
            'data_semuatkk' => $data_semuatkk,
            'data_paketpekerjaan' => $data_paketpekerjaan,
            'data_agendapelatihan' => $data_agendapelatihan,
            'data_agendaskk' => $data_agendaskk,
            'data_pesertapelatihan' => $data_pesertapelatihan,
            'data_jakontertibusaha' => $data_tertibjakonusaha,
            'data_tertibjakonpemanfaatan' => $data_tertibjakonpemanfaatan,
            'data_tertibjakonpenyelenggaraan' => $data_tertibjakonpenyelenggaraan,
            'data_pengawasanbujk' => $data_pengawasanbujk,
            'data_kecelakaankerja' => $data_kecelakaankerja,
        ]);
    }

    // //
    // public function index()
    // {
    //     // $datahimbauandinas = himbauandinas::all();
    //     $jumlahHimbauan = himbauandinas::count();  // Mendapatkan jumlah data
    //     $jumlahQa = qa::count();  // Mendapatkan jumlah data
    //     $jumlahBerita = berita::count();  // Mendapatkan jumlah data
    //     $jumlahAgendasertifikasi = beritaagenda::count();  // Mendapatkan jumlah data
    //     $jumlahDokumentasiPelatihan = kegiatanjaskon::count();  // Mendapatkan jumlah data
    //     $jumlahDokumentasiAcara = laporankegiatan::count();  // Mendapatkan jumlah data
    //     $jumlahPengawasandanketeriban = ketertiban::count();  // Mendapatkan jumlah data
    //     $jumlahAsosiasiPengusaha = asosiasipengusaha::count();  // Mendapatkan jumlah data
    //     $jumlahPaketPekerjaan = paketpekerjaan::count();  // Mendapatkan jumlah data
    //     $jumlahIjinUsaha = uijk::count();  // Mendapatkan jumlah data
    //     $jumlahSertifikatKetermpilan = Tukangterampil::count();  // Mendapatkan jumlah data
    //     $jumlahPenanggungJawabTeknis = penanggungjawabteknis::count();  // Mendapatkan jumlah data
    //     $jumlahPembinaJasaKonstruksi = timpembina::count();  // Mendapatkan jumlah data
    //     $jumlahKecelakaan = pelatihan::count();  // Mendapatkan jumlah data
    //     $jumlahUU = peraturan::count();  // Mendapatkan jumlah data
    //     $jumlahPeraturanPemerintah = perpemerintah::count();  // Mendapatkan jumlah data
    //     $jumlahPeraturanPresiden = perpresiden::count();  // Mendapatkan jumlah data
    //     $jumlahPeraturanMenteri = permenteri::count();  // Mendapatkan jumlah data
    //     $jumlahKeputusanMenteri = keputusanmenteri::count();  // Mendapatkan jumlah data
    //     $jumlahSuratEdaranMenteri = suratedaran::count();  // Mendapatkan jumlah data
    //     $jumlahSuratReferensi = referensi::count();  // Mendapatkan jumlah data
    //     $jumlahPeraturanDaerah = perdaerah::count();  // Mendapatkan jumlah data
    //     $jumlahPeraturanGubernur = pergubernur::count();  // Mendapatkan jumlah data
    //     $jumlahPeraturanWalikotaBupati = perbupatiwalikota::count();  // Mendapatkan jumlah data
    //     $jumlahSuratKeputusan = suratkeputusan::count();  // Mendapatkan jumlah data

    //     $jumlahstatusadmin = statusadmin::count();
    //     $jumlahpengawasanlokasi = pengawasanlokasi::count();
    //     $jumlahqasebagai = qasebagai::count();
    //     $jumlahqapertanyaan = qapertanyaan::count();
    //     $jumlahmetodepengadaan = metodepengadaan::count();
    //     $jumlahpengawasanbangunangedung = pengawasanbangunangedung::count();
    //     $jumlahpengawasanstatus = pengawasanstatus::count();
    //     $jumlahpengawasantindakan = pengawasantindakan::count();
    //     $jumlahagendastatus = agendastatus::count();
    //     $jumlahketerampilanpekerja = keterampilanpekerja::count();
    //     $jumlahpilihantahun = tahunpilihan::count();


    //     $user = Auth::user();

    //     return view('backend.00_administrator.01_halamanutama.dashboard', [
    //         'title' => 'Admin Dashboard Sipjaki KBB',
    //         'user' => $user,
    //         'jumlahHimbauan' => $jumlahHimbauan,  // Menambahkan jumlah data ke view
    //         'jumlahQa' => $jumlahQa,  // Menambahkan jumlah data ke view
    //         'jumlahBerita' => $jumlahBerita,  // Menambahkan jumlah data ke view
    //         'jumlahAgendasertifikasi' => $jumlahAgendasertifikasi,  // Menambahkan jumlah data ke view
    //         'jumlahDokumentasiPelatihan' => $jumlahDokumentasiPelatihan,  // Menambahkan jumlah data ke view
    //         'jumlahDokumentasiAcara' => $jumlahDokumentasiAcara,  // Menambahkan jumlah data ke view
    //         'jumlahPengawasandanketeriban' => $jumlahPengawasandanketeriban,  // Menambahkan jumlah data ke view
    //         'jumlahAsosiasiPengusaha' => $jumlahAsosiasiPengusaha,  // Menambahkan jumlah data ke view
    //         'jumlahPaketPekerjaan' => $jumlahPaketPekerjaan,  // Menambahkan jumlah data ke view
    //         'jumlahIjinUsaha' => $jumlahIjinUsaha,  // Menambahkan jumlah data ke view
    //         'jumlahSertifikatKetermpilan' => $jumlahSertifikatKetermpilan,  // Menambahkan jumlah data ke view
    //         'jumlahPenanggungJawabTeknis' => $jumlahPenanggungJawabTeknis,  // Menambahkan jumlah data ke view
    //         'jumlahPembinaJasaKonstruksi' => $jumlahPembinaJasaKonstruksi,  // Menambahkan jumlah data ke view
    //         'jumlahKecelakaan' => $jumlahKecelakaan,  // Menambahkan jumlah data ke view
    //         'jumlahUU' => $jumlahUU,  // Menambahkan jumlah data ke view
    //         'jumlahPeraturanPemerintah' => $jumlahPeraturanPemerintah,  // Menambahkan jumlah data ke view
    //         'jumlahPeraturanPresiden' => $jumlahPeraturanPresiden,  // Menambahkan jumlah data ke view
    //         'jumlahPeraturanMenteri' => $jumlahPeraturanMenteri,  // Menambahkan jumlah data ke view
    //         'jumlahKeputusanMenteri' => $jumlahKeputusanMenteri,  // Menambahkan jumlah data ke view
    //         'jumlahSuratEdaranMenteri' => $jumlahSuratEdaranMenteri,  // Menambahkan jumlah data ke view
    //         'jumlahSuratReferensi' => $jumlahSuratReferensi,  // Menambahkan jumlah data ke view
    //         'jumlahPeraturanDaerah' => $jumlahPeraturanDaerah,  // Menambahkan jumlah data ke view
    //         'jumlahPeraturanGubernur' => $jumlahPeraturanGubernur,  // Menambahkan jumlah data ke view
    //         'jumlahPeraturanWalikotaBupati' => $jumlahPeraturanWalikotaBupati,  // Menambahkan jumlah data ke view
    //         'jumlahSuratKeputusan' => $jumlahSuratKeputusan,  // Menambahkan jumlah data ke view


    //         'jumlahstatusadmin' => $jumlahstatusadmin, // Mengirimkan data kecamatan unik ke view
    //         'jumlahpengawasanlokasi' => $jumlahpengawasanlokasi, // Mengirimkan data kecamatan unik ke view
    //         'jumlahqasebagai' => $jumlahqasebagai, // Mengirimkan data kecamatan unik ke view
    //         'jumlahqapertanyaan' => $jumlahqapertanyaan, // Mengirimkan data kecamatan unik ke view
    //         'jumlahmetodepengadaan' => $jumlahmetodepengadaan, // Mengirimkan data kecamatan unik ke view
    //         'jumlahpengawasanbangunangedung' => $jumlahpengawasanbangunangedung, // Mengirimkan data kecamatan unik ke view
    //         'jumlahpengawasanstatus' => $jumlahpengawasanstatus, // Mengirimkan data kecamatan unik ke view
    //         'jumlahpengawasantindakan' => $jumlahpengawasantindakan, // Mengirimkan data kecamatan unik ke view
    //         'jumlahagendastatus' => $jumlahagendastatus, // Mengirimkan data kecamatan unik ke view
    //         'jumlahketerampilanpekerja' => $jumlahketerampilanpekerja, // Mengirimkan data kecamatan unik ke view
    //         'jumlahpilihantahun' => $jumlahpilihantahun, // Mengirimkan data kecamatan unik ke view
    //     ]);
    // }



    public function header()
    {

        $data = headerberanda::all();
        $user = Auth::user();
        // return view('backend.00_adminmasjaki.01_fiturterpisah.01_dashboard', [
        return view('backend.01_beranda.01_header.index', [
            'title' => 'Beranda | Informasi Header Web SIPJAKI KBB ',
            'user' => $user,
            'data' => $data,
        ]);
    }

    public function headerdelete($judul)
    {
        // Cari item berdasarkan judul
        $entry = headerberanda::where('judul', $judul)->first();

        if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            if (Storage::disk('public')->exists($entry->header)) {
                Storage::disk('public')->delete($entry->header);
            }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/header')->with('delete', 'Data Berhasil Di Hapus !');

        }

        return redirect()->back()->with('error', 'Item not found');
    }

    public function headerupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $tupoksi = headerberanda::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.01_beranda.01_header.update', [
        'data' => $tupoksi,
        'user' => $user,
        'title' => 'Update Header Beranda Web'
    ]);
}

public function headerupdatecreate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'judul'  => 'required|string|max:255',
        'header' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:20480', // max 20MB
    ], [
        'judul.required' => 'Judul wajib diisi!',
        'header.image'   => 'Header harus berupa gambar!',
        'header.mimes'   => 'Format gambar harus jpg, jpeg, png, gif, atau webp!',
        'header.max'     => 'Ukuran gambar maksimal 20MB!',
    ]);

    // Ambil data berdasarkan ID
    $data = headerberanda::findOrFail($id);

    // Siapkan data update
    $updateData = [
        'judul' => $validatedData['judul'],
    ];

    // Jika ada upload gambar baru
    if ($request->hasFile('header')) {
        // Hapus file lama jika ada
        if ($data->header && file_exists(public_path('header_images/' . $data->header))) {
            unlink(public_path('header_images/' . $data->header));
        }

        // Simpan file baru ke public/header_images
        $file     = $request->file('header');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('header_images'), $fileName);

        // Simpan nama file ke database
        $updateData['header'] = 'header_images/' . $fileName;
    }

    // Update data
    $data->update($updateData);

    // Flash pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/header');
}


}
