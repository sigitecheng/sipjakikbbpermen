<?php

namespace App\Http\Controllers;

use App\Models\renstra;
use App\Models\sbulampiran1;
use App\Models\sbulampiran2;
use App\Models\sbulampiran3;
use App\Models\standarbiayaumum;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


use App\Models\struktur; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\strukturdinas;
use App\Models\tupoksi;

class StrukturController extends Controller
{
    public function index()
    {
        $data= strukturdinas::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.01_struktur.01_kedinasan.index', [
            'title' => 'Struktur Kedinasan PUPR Kabupaten Bandung Barat',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }


                // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                public function updatestruktur($judul)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $strukturdinas = strukturdinas::where('judul', $judul)->firstOrFail();
                    $user = Auth::user();

                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.01_struktur.01_kedinasan.update', [
                        'strukturdinas' => $strukturdinas,
                        'user' => $user,
                        'title' => 'Update Surat Kedinasan PUPR KBB'
                    ]);
                }

                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                        public function createupdatestruktur(Request $request, $judul)
                    {
                        // Validasi input
                        $request->validate([
                            'judul' => 'required|string|max:255',
                            // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                        ]);

                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $strukturdinas = strukturdinas::where('judul', $judul)->firstOrFail();

                        // Simpan file dan ambil path-nya
                        $filePath = null;
                        if ($request->hasFile('peraturan')) {
                            $file = $request->file('peraturan');
                            $filePath = $file->store('struktur/01_dinas', 'public'); // Menyimpan di storage/app/public/undangundang
                        }

                        // Update data undang-undang dengan data dari form
                        $strukturdinas->update([
                            'judul' => $request->input('judul'),
                            'peraturan' => $filePath ? $filePath : $strukturdinas->peraturan, // Gunakan path baru jika ada file
                        ]);


                        session()->flash('update', 'Data Struktur Kedinasan Berhasil Diupdate !');
                        // Redirect ke halaman yang sesuai
                        return redirect('/struktur');
                               }

    //    ======================================================================

    public function renstra()
    {
        $data= renstra::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.01_struktur.02_renstra.index', [
            'title' => 'Rencana Strategis Program & Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

                // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                public function updaterenstra($judul)
                {
                    // Cari data undang-undang berdasarkan nilai 'judul'
                    $renstra = renstra::where('judul', $judul)->firstOrFail();
                    $user = Auth::user();

                    // Tampilkan form update dengan data yang ditemukan
                    return view('backend.01_struktur.02_renstra.update', [
                        'renstra' => $renstra,
                        'user' => $user,
                        'title' => 'Update Rencana Strategis'
                    ]);
                }

                // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                        public function createupdaterenstra(Request $request, $judul)
                    {
                        // Validasi input
                        $request->validate([
                            'judul' => 'required|string|max:255',
                            // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                        ]);

                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $renstra = renstra::where('judul', $judul)->firstOrFail();

                        // Simpan file dan ambil path-nya
                        $filePath = null;
                        if ($request->hasFile('peraturan')) {
                            $file = $request->file('peraturan');
                            $filePath = $file->store('struktur/02_renstra', 'public'); // Menyimpan di storage/app/public/undangundang
                        }

                        // Update data undang-undang dengan data dari form
                        $renstra->update([
                            'judul' => $request->input('judul'),
                            'peraturan' => $filePath ? $filePath : $renstra->peraturan, // Gunakan path baru jika ada file
                        ]);


                        session()->flash('update', 'Data Rencana Strategis Berhasil Diupdate !');
                        // Redirect ke halaman yang sesuai
                        return redirect('/renstra');
                               }

// ===============================================

    public function tupoksi()
    {
        $data= tupoksi::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.01_struktur.03_tupoksi.index', [
            'title' => 'Tupoksi Program & Jasa Konstruksi',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

                    // -------------------- UPDATE DATA PERATURAN GUBERNUR JASA KONSTRUKSI ----------------------
                    public function updatetupoksi($judul)
                    {
                        // Cari data undang-undang berdasarkan nilai 'judul'
                        $tupoksi = tupoksi::where('judul', $judul)->firstOrFail();
                        $user = Auth::user();

                        // Tampilkan form update dengan data yang ditemukan
                        return view('backend.01_struktur.03_tupoksi.update', [
                            'tupoksi' => $tupoksi,
                            'user' => $user,
                            'title' => 'Update Tupoksi Program'
                        ]);
                    }

                    // -------------------- UPDATE DATA CREATE UPDATE UNDANG UNDANG JASA KONSTRUKSI ----------------------
                            public function createupdatetupoksi(Request $request, $judul)
                        {
                            // Validasi input
                            $request->validate([
                                'judul' => 'required|string|max:255',
                                // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                            ]);

                            // Cari data undang-undang berdasarkan nilai 'judul'
                            $tupoksi = tupoksi::where('judul', $judul)->firstOrFail();

                            // Simpan file dan ambil path-nya
                            $filePath = null;
                            if ($request->hasFile('peraturan')) {
                                $file = $request->file('peraturan');
                                $filePath = $file->store('struktur/03_tupoksi', 'public'); // Menyimpan di storage/app/public/undangundang
                            }

                            // Update data undang-undang dengan data dari form
                            $tupoksi->update([
                                'judul' => $request->input('judul'),
                                'peraturan' => $filePath ? $filePath : $tupoksi->peraturan, // Gunakan path baru jika ada file
                            ]);


                            session()->flash('update', 'Data Tupoksi Berhasil Diupdate !');
                            // Redirect ke halaman yang sesuai
                            return redirect('/tupoksi');
                                   }

// ===============================================
// DATABASE SURAT PERATURAN STANDAR BIAYA UMUM PUPR
// ===============================================

public function standarbiayaumum()
{
    $data= standarbiayaumum::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.index', [
        'title' => 'Standar Biaya Umum',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function standarbiayaumumshowbyjudul($judul)
{
    $data = standarbiayaumum::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Standar Biaya Umum',
    ]);
}

             // -------------------- UPDATE DATA STANDAR BIAYA UMUM ----------------------
             public function updatestandarbiayaumum($judul)
             {
                 // Cari data undang-undang berdasarkan nilai 'judul'
                 $standarbiayaumum = standarbiayaumum::where('judul', $judul)->firstOrFail();
                 $user = Auth::user();

                 // Tampilkan form update dengan data yang ditemukan
                 return view('backend.03_datajakon.03_standarbiayaumum.update', [
                     'standarbiayaumum' => $standarbiayaumum,
                     'user' => $user,
                     'title' => 'Update Standar Biaya Umum'
                 ]);
             }

             // -------------------- UPDATE DATA CREATE DATA STANDAR BIAYA UMUM ----------------------
                     public function createupdatestandarbiayaumum(Request $request, $judul)
                 {
                     // Validasi input
                     $request->validate([
                         'judul' => 'required|string|max:255',
                         // 'peraturan' => 'required|file', // Validasi file sesuai jenis dan ukuran
                     ]);

                     // Cari data undang-undang berdasarkan nilai 'judul'
                     $standarbiayaumum = standarbiayaumum::where('judul', $judul)->firstOrFail();

                     // Simpan file dan ambil path-nya
                     $filePath = null;
                     if ($request->hasFile('peraturan')) {
                         $file = $request->file('peraturan');
                         $filePath = $file->store('standarbiayaumum', 'public'); // Menyimpan di storage/app/public/undangundang
                     }

                     // Update data undang-undang dengan data dari form
                     $standarbiayaumum->update([
                         'judul' => $request->input('judul'),
                         'peraturan' => $filePath ? $filePath : $standarbiayaumum->peraturan, // Gunakan path baru jika ada file
                     ]);


                     session()->flash('update', 'Data Standar Biaya Berhasil Diupdate !');
                     // Redirect ke halaman yang sesuai
                     return redirect('/standarbiayaumum');
                            }


// ------------ CREATE STANDAR BIAYA UMUM   ----------------

public function createstandarbiayaumum()
{
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_datajakon.03_standarbiayaumum.create', [
        'title' => 'Create Standar Biaya Umum',
        'user' => $user,
    ]);
}

public function createstorestandarbiayaumum(Request $request)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'peraturan' => 'required|file|mimes:pdf|max:20480', // 20MB max file size
    ]);

    // Simpan file dan ambil path
    $filePath = $request->file('peraturan')->store('standarbiayaumum', 'public');

    // Buat entri baru di database
    standarbiayaumum::create([
        'judul' => $request->input('judul'),
        'peraturan' => $filePath,
    ]);

    session()->flash('create', 'Data Berhasil Di Tambahkan !');
    // Redirect ke halaman yang sesuai
    return redirect('/standarbiayaumum');
}


    // ==================== DELETE SURAT KEPUTUSAN MENTERI

    public function deletestandarbiayaumum(Request $request, $judul)
{
    // Cari entri berdasarkan judul
    $entry = standarbiayaumum::where('judul', $judul)->first();

    if ($entry) {
        // Hapus file terkait jika ada
        if (Storage::disk('public')->exists($entry->peraturan)) {
            Storage::disk('public')->delete($entry->peraturan);
        }

        // Hapus entri dari database
        $entry->delete();

        // Set pesan flash untuk sukses
        session()->flash('delete', 'Data Berhasil Dihapus!');
    } else {
        // Set pesan flash jika data tidak ditemukan
        session()->flash('error', 'Data Tidak Ditemukan!');
    }

    // Redirect ke halaman yang sesuai
    return redirect('/standarbiayaumum');
}


// ===============================================
// DATABASE STANDAR BIAYA UMUM LAMPIRAN 1
// ===============================================

public function sbulampiran1()
{
    $data= sbulampiran1::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran1.index', [
        'title' => 'Lampiran 1',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function sbulampiran1showbyjudul($judul)
{
    $data = sbulampiran1::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran1.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Lampiran 1',
    ]);
}

// ===============================================
// DATABASE STANDAR BIAYA UMUM LAMPIRAN 1
// ===============================================

public function sbulampiran2()
{
    $data= sbulampiran2::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran2.index', [
        'title' => 'Lampiran 2',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function sbulampiran2showbyjudul($judul)
{
    $data = sbulampiran2::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran2.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Lampiran 2',
    ]);
}

// ===============================================
// DATABASE STANDAR BIAYA UMUM LAMPIRAN 3
// ===============================================

public function sbulampiran3()
{
    $data= sbulampiran3::paginate(15); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran3.index', [
        'title' => 'Lampiran 3',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


public function sbulampiran3showbyjudul($judul)
{
    $data = sbulampiran3::where('judul', $judul)->firstOrFail();
    $user = Auth::user();

    return view('backend.03_datajakon.03_standarbiayaumum.lampiran3.show', [
        'data' => $data,
        'user' => $user,
        'title' => 'Details Lampiran 3',
    ]);
}

// --------------------------------------- DATA FRONTEND FROPIL -------------------


public function strukturpuprbandungbarat()
{
    $data= strukturdinas::all(); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('frontend.01_profil.01_struktur', [
        'title' => 'Struktur OPD Dinas PUTR Kabupaten Bandung Barat',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}

// ==============================================================================================================

public function rencanastrategispuprbandungbarat()
{
    $data= renstra::all(); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('frontend.01_profil.02_rencanastrategis', [
        'title' => 'Rencana Strategis PUTR Kabupaten Bandung Barat',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}


// ==============================================================================================================
public function tupoksifekbb()
{
    $data= tupoksi::all(); // Menggunakan paginate() untuk pagination
    $user = Auth::user();

    return view('frontend.01_profil.03_tupoksi', [
        'title' => 'Tupoksi PUTR Kabupaten Bandung Barat',
        'data' => $data, // Mengirimkan data paginasi ke view
        'user' => $user, // Mengirimkan data paginasi ke view
    ]);
}



}
