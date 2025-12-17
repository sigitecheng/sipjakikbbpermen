<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\berita; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\beritaagenda;
use App\Models\headerberanda;
use App\Models\himbauandinas;
use App\Models\kegiatanjaskon;
use App\Models\laporankegiatan;
use App\Models\layanankami;
use App\Models\pengawasanlokasi;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\qa;
use App\Models\sertifikasiagenda;
use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

use Illuminate\Support\Facades\Auth;

class FedashboardController extends Controller
{

    public function index()
{
    $user = Auth::user();

    // Semua data diurutkan berdasarkan ID terbesar (data terbaru muncul duluan)
    $data = berita::orderBy('id', 'desc')->get();
    $databerita = berita::orderBy('id', 'desc')->get();
    $data_layanankami = layanankami::orderBy('id', 'desc')->get();
    $dataqasebagai = qasebagai::orderBy('id', 'desc')->get();
    $dataqapertanyaan = qapertanyaan::orderBy('id', 'desc')->get();
    $himbauandinas = himbauandinas::orderBy('id', 'desc')->get();
    $data_kegiatanjaskon = kegiatanjaskon::orderBy('id', 'desc')->get();
    $databeranda = headerberanda::all();

    return view('frontend.A00_new.01_halamanutama.halamanutama', [
        'title' => 'SIPJAKI Kabupaten Bandung Barat',
        'data' => $data,
        'databerita' => $databerita,
        'data_layanankami' => $data_layanankami,
        'data_jaskon' => $data_kegiatanjaskon,
        'dataqasebagai' => $dataqasebagai,
        'dataqapertanyaan' => $dataqapertanyaan,
        'datahimbauandinas' => $himbauandinas,
        'databeranda' => $databeranda,
        'user' => $user,
    ]);
}

public function new()
{
    $user = Auth::user();

    // Semua data diurutkan berdasarkan ID terbesar (data terbaru muncul duluan)
    $data = berita::orderBy('id', 'desc')->get();
    $databerita = berita::orderBy('id', 'desc')->get();
    $data_layanankami = layanankami::orderBy('id', 'desc')->get();
    $dataqasebagai = qasebagai::orderBy('id', 'desc')->get();
    $dataqapertanyaan = qapertanyaan::orderBy('id', 'desc')->get();
    $himbauandinas = himbauandinas::orderBy('id', 'desc')->get();
    $data_kegiatanjaskon = kegiatanjaskon::orderBy('id', 'desc')->get();
    $databeranda = headerberanda::all();

    return view('frontend.00_full.index', [
        'title' => 'SIPJAKI Kabupaten Bandung Barat',
        'data' => $data,
        'databerita' => $databerita,
        'data_layanankami' => $data_layanankami,
        'data_jaskon' => $data_kegiatanjaskon,
        'dataqasebagai' => $dataqasebagai,
        'dataqapertanyaan' => $dataqapertanyaan,
        'datahimbauandinas' => $himbauandinas,
        'databeranda' => $databeranda,
        'user' => $user,
    ]);
}


    // public function createstorepertanyaanpublik(Request $request)
    //         {
    //             // Validasi input
    //             $request->validate([
    //                 'qasebagai_id' => 'required|integer|exists:qasebagai,id',
    //                 'qapertanyaan_id' => 'required|integer|exists:qapertanyaan,id',
    //                 'nama_lengkap' => 'required|string|max:255',
    //                 'email' => 'required|email|max:255',
    //                 'telepon' => 'required|string|max:20',
    //             ]);

    //             // Buat entri baru di database
    //             qa::create([
    //                 'qasebagai_id' => $request->input('qasebagai_id'),
    //                 'qapertanyaan_id' => $request->input('qapertanyaan_id'),
    //                 'nama_lengkap' => $request->input('nama_lengkap'),
    //                 'email' => $request->input('email'),
    //                 'telepon' => $request->input('telepon'),
    //             ]);

    //             // Menyimpan pesan flash untuk umpan balik
    //             session()->flash('pertanyaan', 'Pertanyaan Anda Berhasil Dikirim !');

    //             // Redirect ke halaman yang sesuai
    //             return redirect('/');
    //         }



    public function portalberitashowByJudul($judul)
    {


        $data_berita = berita::all(); //
        $data_layanankami = layanankami::all(); //
        $data = berita::where('judul', $judul)->firstOrFail();

        $databeritaagenda = beritaagenda::orderBy('created_at', 'desc')->get(); //

        $user = Auth::user();

        return view('frontend.02_berita.01_portalberita.showindex', [
            'data' => $data,
            'data_berita' => $data_berita,
            'dataagenda' => $databeritaagenda,
            'data_layanankami' => $data_layanankami,
            'user' => $user,
            'title' => 'Portal Berita Sipjaki KBB',
        ]);
    }

public function navbarberita()
{
    $data = berita::orderBy('id', 'desc')->get(); // ID terbaru muncul pertama
    $user = Auth::user();

    return view('frontend.02_berita.01_portalberita.navbarberita', [
        'title' => 'Berita Jasa Konstruksi',
        'data' => $data,
        'user' => $user,
    ]);
}


    public function kegiatansertifikasi()
    {
        $data = berita::orderBy('created_at', 'desc')->get(); //
        $data_layanankami = layanankami::all(); //
        $data_kegiatanjaskon = kegiatanjaskon::orderBy('created_at', 'desc')->get(); //


        $user = Auth::user();

        return view('frontend.02_berita.02_sertifikasi.index', [
            'title' => 'Kegiatan Sertifikasi oleh Pemerintah Kabupaten Bandung Barat',
            'data' => $data, // Mengirimkan data paginasi ke view
            'data_layanankami' => $data_layanankami, // Mengirimkan data paginasi ke view
            'data_jaskon' => $data_kegiatanjaskon, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }


    public function kegiatansertifikasishowByJudul($judul_kegiatan)
    {
        $data_berita = berita::first(); //
        $data_layanankami = layanankami::all(); //
        // $data_laporankegiatan = laporankegiatan::all(); //
        // $data_kegiatanjaskon = kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->firstOrFail();

        $kegiatanjaskon = kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->first();

        if (!$kegiatanjaskon) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $datalaporankegiatan = laporankegiatan::where('kegiatanjaskon_id', $kegiatanjaskon->id)->paginate(10);

        $user = Auth::user();

        return view('frontend.02_berita.02_sertifikasi.show', [
            'data' => $kegiatanjaskon,
            'data_kegiatanjaskon' => $datalaporankegiatan,
            'data_berita' => $data_berita,
            'data_layanankami' => $data_layanankami,
            // 'data_laporankegiatan' => $data_laporankegiatan,
            'user' => $user,
                'title' => 'Kegiatan Sertifikasi',
        ]);
    }

    public function detailskegiatanshowByJudul($jabatan)
    {
        $data_berita = berita::first(); //
        // $data_layanankami = layanankami::all(); //
        $data_laporankegiatanall = laporankegiatan::all(); //
        $data_laporankegiatan =laporankegiatan::where('jabatan', $jabatan)->firstOrFail(); //
        // $data_kegiatanjaskon = kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->firstOrFail();

        $user = Auth::user();

        return view('frontend.02_berita.02_sertifikasi.showdetails', [
            // 'data_kegiatanjaskon' => $data_kegiatanjaskon,
            'data_berita' => $data_berita,
            // 'data_layanankami' => $data_layanankami,
            'data_laporankegiatan' => $data_laporankegiatan,
            'data_laporankegiatanall' => $data_laporankegiatanall,
            'user' => $user,
                'title' => 'Kegiatan Sertifikasi Para Pekerja',
        ]);
    }


    // -================================================================================

    public function feagendasertifikasipekerja()
    {
        $data = beritaagenda::paginate(8);
        $datapengawasanlokasi = pengawasanlokasi::all();

        $user = Auth::user();

        return view('frontend.02_berita.03_agendasertifikasi.index', [
            'title' => 'Agenda Sertifikasi Pekerja Konstruksi Kabupaten Bandung Barat',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datapengawasanlokasi' => $datapengawasanlokasi, // Mengirimkan data paginasi ke view
        ]);
    }





}

