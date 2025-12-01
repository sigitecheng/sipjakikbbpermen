<?php

namespace App\Http\Controllers;

use App\Models\asosiasimasjaki;
use App\Models\bujkkonsultan;
use App\Models\bujkkonsultansub;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class BujkkonsultanController extends Controller
{
    //
    // public function bujkkonsultan(Request $request)
    // {

    //     $perPage = $request->input('perPage', 200); // Ambil jumlah data dari request, default 15
    //     $data = bujkkonsultan::paginate($perPage);
    //     $datasub = bujkkonsultansub::all();
    //     $user = Auth::user();

    //     return view('frontend.03_masjaki_jakon.02_bujkkonsultan.bujkkonsultan', [
    //         'title' => 'BUJK Konstruksi',
    //         'user' => $user,
    //         'data' => $data,
    //         'datasub' => $datasub,
    //         'perPage' => $perPage // Kirim nilai perPage ke view
    //     ]);


    // }


    public function bujkkonsultan(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = bujkkonsultan::query();

    if ($search) {
        $query->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
            //   ->orWhere('no_telepon', 'LIKE', "%{$search}%")

              ;

            }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.03_masjaki_jakon.02_bujkkonsultan.partials.table', compact('data'))->render()
        ]);
    }

    return view('frontend.03_masjaki_jakon.02_bujkkonsultan.bujkkonsultan', [
        'title' => 'BUJK | Konsultasi Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function bujkkonsultanshow($namalengkap)
    {
        $databujkkonsultan = bujkkonsultan::where('namalengkap', $namalengkap)->first();

        if (!$databujkkonsultan) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = bujkkonsultansub::where('bujkkonsultan_id', $databujkkonsultan->id)->paginate(15);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.03_masjaki_jakon.02_bujkkonsultan.bujkkonsultanshow', [
        'title' => 'Data Bujk Konstruksi Konsultasi',
        'data' => $databujkkonsultan,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
    }

// MENU BACKEND BUJK KONSTRUKSI KONSULTASI ----------------------------------

public function bebujkkonsultan(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    $query = bujkkonsultan::query();

    if ($search) {
        $query->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('no_telepon', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('nomorindukberusaha', 'LIKE', "%{$search}%")
              ->orWhere('pju', 'LIKE', "%{$search}%")
              ->orWhere('no_akte', 'LIKE', "%{$search}%")
              ->orWhere('tanggal', 'LIKE', "%{$search}%")
              ->orWhere('nama_notaris', 'LIKE', "%{$search}%")
              ->orWhere('no_pengesahan', 'LIKE', "%{$search}%")
              ->orWhereHas('bujkkonsultansub', function ($q) use ($search) {
                $q->where('nama_pengurus', 'LIKE', "%{$search}%");
            })
            ->orWhereHas('asosiasimasjaki', function ($q) use ($search) {
                $q->where('namaasosiasi', 'LIKE', "%{$search}%");
            });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.04_datajakon.02_bujkkonsultan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.04_datajakon.02_bujkkonsultan.index', [
        'title' => 'BUJK Konsultasi Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}





// BUJKKONTRAKTOR SHOW

public function bebujkkonsultanshow($namalengkap)
{
    $databujkkonsultan = bujkkonsultan::where('namalengkap', $namalengkap)->first();
// Ambil data user saat ini
    $user = Auth::user();

return view('backend.04_datajakon.02_bujkkonsultan.show', [
    'title' => 'Data Bujk Konsultasi Konstruksi',
    'data' => $databujkkonsultan,
]);
}


// DATA SHOW SUB KLASIFIKASI LAYANAN
public function bebujkkonsultanshowklasifikasi($namalengkap)
{
    $databujkkonsultan = bujkkonsultan::where('namalengkap', $namalengkap)->first();

    if (!$databujkkonsultan) {
        return abort(404, 'Data sub-klasifikasi tidak ditemukan');
    }

        // Menggunakan paginate() untuk pagination
        $datasublayanan = bujkkonsultansub::where('bujkkonsultan_id', $databujkkonsultan->id)->paginate(50);

    return view('backend.04_datajakon.02_bujkkonsultan.showklasifikasi', [
        'title' => 'Data Klasifikasi Layanan',
        'subdata' => $datasublayanan,
        'data' => $databujkkonsultan,
        'user' => Auth::user()
    ]);
}


public function bebujkkonsultanshowdelete($namalengkap)
{
// Cari item berdasarkan judul
$entry = bujkkonsultan::where('namalengkap', $namalengkap)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/bebujkkonsultan')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}






// UPDATE BUJKKONSULTAN

public function bebujkkonsultanupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $jakonkonsultan = bujkkonsultan::where('id', $id)->firstOrFail();
    $asosiasimasjakiList = asosiasimasjaki::all(); // Ambil semua asosiasi

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.04_datajakon.02_bujkkonsultan.update', [
        'data' => $jakonkonsultan,
        'user' => $user,
        'asosiasimasjakiList' => $asosiasimasjakiList,
        'title' => 'Update BUJK Konsultasi Konstruksi'
    ]);
}



public function bebujkkonsultancreateupdate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        // 'bujkkontraktorsub_id' => 'required|string|max:255', // Validasi untuk ID kontraktor
        'asosiasimasjaki_id' => 'nullable|integer', // Validasi untuk ID asosiasi
        'namalengkap' => 'nullable|string|max:255', // Validasi untuk Nama Lengkap
        'alamat' => 'nullable|string', // Validasi untuk Alamat
        'no_telepon' => 'nullable|string|max:255', // Validasi untuk No Telepon
        'email' => 'nullable|email', // Validasi untuk Email
        'nomorindukberusaha' => 'nullable|string|max:255', // Validasi untuk Nomor Induk Berusaha
        'pju' => 'nullable|string|max:255', // Validasi untuk PJU
        'no_akte' => 'nullable|string|max:255', // Validasi untuk No Akte
        'tanggal' => 'nullable|date', // Validasi untuk Tanggal
        'nama_notaris' => 'nullable|string|max:255', // Validasi untuk Nama Notaris
        'no_pengesahan' => 'nullable|string|max:255', // Validasi untuk No Pengesahan
        'uploadberkas' => 'nullable|mimes:pdf|max:15360',
    ], [

        'asosiasimasjaki_id.required' => 'Asosiasi harus dipilih!',
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
        'alamat.required' => 'Alamat wajib diisi!',
        'no_telepon.required' => 'Nomor Telepon wajib diisi!',
        'email.required' => 'Email wajib diisi!',
        'email.email' => 'Format email tidak valid!',
        'nomorindukberusaha.required' => 'Nomor Induk Berusaha wajib diisi!',
        'pju.required' => 'PJU wajib diisi!',
        'no_akte.required' => 'No Akte wajib diisi!',
        'tanggal.required' => 'Tanggal wajib diisi!',
        'tanggal.date' => 'Format Tanggal tidak valid!',
        'nama_notaris.required' => 'Nama Notaris wajib diisi!',
        'no_pengesahan.required' => 'No Pengesahan wajib diisi!',
        'uploadberkas.required' => 'Berkas wajib diunggah!',
        'uploadberkas.mimes' => 'Berkas harus berupa file PDF!',
    ]);

    // Cari data strukturdinas berdasarkan nilai 'judul'
    $jakonkonsultan = bujkkonsultan::where('id', $id)->firstOrFail();

    // Gunakan $validatedData untuk update, agar lebih jelas dan rapi

    if ($request->hasFile('uploadberkas')) {
        $file = $request->file('uploadberkas');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('03_datajakon/01_sertifikasi');

        // Pastikan foldernya ada
        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        $file->move($tujuanPath, $namaFile);

        // Simpan nama file ke database
        $validatedData['uploadberkas'] = '03_datajakon/01_sertifikasi/' . $namaFile;
    }
    // Proses update setelah data tervalidasi
    $jakonkonsultan->update([
        'asosiasimasjaki_id' => $validatedData['asosiasimasjaki_id'] ?? $jakonkonsultan->asosiasimasjaki_id, // Jika asosiasimasjaki_id tidak ada, gunakan data sebelumnya
        'namalengkap' => $validatedData['namalengkap'] ?? $jakonkonsultan->namalengkap, // Jika namalengkap tidak ada, gunakan data sebelumnya
        'alamat' => $validatedData['alamat'] ?? $jakonkonsultan->alamat, // Jika alamat tidak ada, gunakan data sebelumnya
        'no_telepon' => $validatedData['no_telepon'] ?? $jakonkonsultan->no_telepon, // Jika no_telepon tidak ada, gunakan data sebelumnya
        'email' => $validatedData['email'] ?? $jakonkonsultan->email, // Jika email tidak ada, gunakan data sebelumnya
        'nomorindukberusaha' => $validatedData['nomorindukberusaha'] ?? $jakonkonsultan->nomorindukberusaha, // Jika nomorindukberusaha tidak ada, gunakan data sebelumnya
        'pju' => $validatedData['pju'] ?? $jakonkonsultan->pju, // Jika pju tidak ada, gunakan data sebelumnya
        'no_akte' => $validatedData['no_akte'] ?? $jakonkonsultan->no_akte, // Jika no_akte tidak ada, gunakan data sebelumnya
        'tanggal' => $validatedData['tanggal'] ?? $jakonkonsultan->tanggal, // Jika tanggal tidak ada, gunakan data sebelumnya
        'nama_notaris' => $validatedData['nama_notaris'] ?? $jakonkonsultan->nama_notaris, // Jika nama_notaris tidak ada, gunakan data sebelumnya
        'no_pengesahan' => $validatedData['no_pengesahan'] ?? $jakonkonsultan->no_pengesahan, // Jika no_pengesahan tidak ada, gunakan data sebelumnya
        'uploadberkas' => $validatedData['uploadberkas'] ?? $jakonkonsultan->uploadberkas, // Jika no_pengesahan tidak ada, gunakan data sebelumnya
    ]);
    // Flash session untuk menampilkan pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/bebujkkonsultan');

}


public function bebujkkonsultancreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $asosiasimasjaki = asosiasimasjaki::all();  // Ambil semua pengguna

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.04_datajakon.02_bujkkonsultan.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'asosiasimasjaki' => $asosiasimasjaki,
        'title' => 'Tambah Data BUJK Konsultasi Konstruksi'
    ]);
}

// CREATE DATA BUJK KONSULTAN
public function bebujkkonsultancreatenew(Request $request)
{
    // Validasi input form
    $validated = $request->validate([
        'asosiasimasjaki_id' => 'nullable|integer',
        'namalengkap' => 'nullable|string|max:255',
        'alamat' => 'nullable|string',
        'no_telepon' => 'nullable|string|max:255',
        'email' => 'nullable|email',
        'nomorindukberusaha' => 'nullable|string|max:255',
        'pju' => 'nullable|string|max:255',
        'no_akte' => 'nullable|string|max:255',
        'tanggal' => 'nullable|date',
        'nama_notaris' => 'nullable|string|max:255',
        'no_pengesahan' => 'nullable|string|max:255',
        'uploadberkas' => 'nullable|mimes:pdf|max:15360',
    ], [
        'asosiasimasjaki_id.required' => 'Asosiasi harus dipilih!',
        'namalengkap.required' => 'Nama Lengkap wajib diisi!',
        'alamat.required' => 'Alamat wajib diisi!',
        'no_telepon.required' => 'Nomor Telepon wajib diisi!',
        'email.required' => 'Email wajib diisi!',
        'nomorindukberusaha.required' => 'Nomor Induk Berusaha wajib diisi!',
        'pju.required' => 'PJU wajib diisi!',
        'no_akte.required' => 'No Akte wajib diisi!',
        'tanggal.required' => 'Tanggal wajib diisi!',
        'nama_notaris.required' => 'Nama Notaris wajib diisi!',
        'no_pengesahan.required' => 'No Pengesahan wajib diisi!',
        'uploadberkas.required' => 'Berkas wajib diunggah!',
        'uploadberkas.mimes' => 'Berkas harus berupa file PDF!',
    ]);

    // Ambil record bujkkonsultansub pertama (jika ada)
    $bujkkonsultansub = bujkkonsultansub::first();
    $bujkkonsultansub_id = $bujkkonsultansub ? $bujkkonsultansub->id : null;

    // Ambil ID user yang sedang login
    $user_id = Auth::user()->id;

    // Handle upload file jika ada
    if ($request->hasFile('uploadberkas')) {
        $file = $request->file('uploadberkas');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('03_datajakon/01_sertifikasi');

        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        $file->move($tujuanPath, $namaFile);
        $validated['uploadberkas'] = '03_datajakon/01_sertifikasi/' . $namaFile;
    }

    // Simpan ke DB
    $bujkkonsultan = bujkkonsultan::create([
        'user_id' => $user_id,
        'bujkkonsultansub_id' => $bujkkonsultansub_id,
        'asosiasimasjaki_id' => $validated['asosiasimasjaki_id'] ?? null,
        'namalengkap' => $validated['namalengkap'] ?? null,
        'alamat' => $validated['alamat'] ?? null,
        'no_telepon' => $validated['no_telepon'] ?? null,
        'email' => $validated['email'] ?? null,
        'nomorindukberusaha' => $validated['nomorindukberusaha'] ?? null,
        'pju' => $validated['pju'] ?? null,
        'no_akte' => $validated['no_akte'] ?? null,
        'tanggal' => $validated['tanggal'] ?? null,
        'nama_notaris' => $validated['nama_notaris'] ?? null,
        'no_pengesahan' => $validated['no_pengesahan'] ?? null,
        'uploadberkas' => $validated['uploadberkas'] ?? null,
    ]);

    // Ambil namalengkap untuk redirect
    $namalengkap = $bujkkonsultan->namalengkap;

    // Flash message
    session()->flash('create', 'Data BUJK Konsultan berhasil dibuat.');

    // Redirect ke route tertentu dengan parameter
    return redirect('/bebujkkonsultan');
}


public function bebujkkonsultancreateklasifikasi($namalengkap)
{
    $bujkkonsultan = bujkkonsultan::findOrFail($namalengkap); // Cari 1 data sesuai ID
    $user = Auth::user();
    $asosiasimasjaki = asosiasimasjaki::all();

    return view('backend.04_datajakon.02_bujkkonsultan.createklasifikasi', [
        'bujkkontraktornamalengkap' => $bujkkonsultan->namalengkap, // Ini dikirim ke form
        'bujkkontraktor_id' => $bujkkonsultan->id, // Ini dikirim ke form
        'user' => $user,
        'asosiasimasjaki' => $asosiasimasjaki,
        'title' => 'Create BUJK Sub Klasifikasi'
    ]);
}



public function bebujkkonsultancreateklasifikasicreate(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'nama_pengurus' => 'required|string|max:255',
        'sub_klasifikasi_layanan' => 'required|string|max:255',
        'kode' => 'required|string|max:50',
        'kualifikasi' => 'required|string|max:255',
        'penerbit' => 'required|string|max:255',
        'nama_psjk' => 'required|string|max:255',
        'sub_kualifikasi_bu' => 'required|string|max:255',
        'tanggal_terbit' => 'required|date',
        'masa_berlaku' => 'required|date',
    ], [
        // Pesan kesalahan custom
        'nama_pengurus.required' => 'Nama Pengurus harus diisi.',
        'sub_klasifikasi_layanan.required' => 'Sub Klasifikasi Layanan harus diisi.',
        'kode.required' => 'Kode Sub Klasifikasi harus diisi.',
        'kualifikasi.required' => 'Kualifikasi harus diisi.',
        'sub_kualifikasi_bu.required' => 'Sub Bidang harus diisi.',
        'penerbit.required' => 'Penerbit harus diisi.',
        'nama_psjk.required' => 'Nama PSJK harus diisi.',
        'tanggal_terbit.required' => 'Tanggal Terbit harus diisi.',
        'masa_berlaku.required' => 'Tanggal Berlaku harus diisi.',
    ]);

    // Menyimpan data ke tabel BujkKontraktorSub
    $bujkkonsultanSub = bujkkonsultansub::create([
        'bujkkonsultan_id' => $request->bujkkonsultan_id,
        'nama_pengurus' => $validated['nama_pengurus'],
        'sub_klasifikasi_layanan' => $validated['sub_klasifikasi_layanan'],
        'kode' => $validated['kode'],
        'kualifikasi' => $validated['kualifikasi'],
        'sub_kualifikasi_bu' => $validated['sub_kualifikasi_bu'],
        'penerbit' => $validated['penerbit'],
        'nama_psjk' => $validated['nama_psjk'],
        'tanggal_terbit' => $validated['tanggal_terbit'],
        'masa_berlaku' => $validated['masa_berlaku'],
    ]);

// Ambil bujkkonsultan_id yang baru saja disimpan
$bujkkonsultanId = $bujkkonsultanSub->bujkkonsultan_id;

// Ambil data Bujkkonsultan utama
$bujkkonsultan = Bujkkonsultan::find($bujkkonsultanId);

// Flash message
session()->flash('create', 'Data Sub Klasifikasi Layanan berhasil dibuat.');

// Redirect ke URL show sub-klasifikasi
return redirect(url('/bebujkkonsultan/showsubklasifikasi/' . $bujkkonsultan->namalengkap));

}


public function bebujkkonsultanshowklasifikasidelete($id)
{
    $entry = bujkkonsultansub::where('id', $id)->first();

    if ($entry) {
        // Kalau ada file yang mau dihapus, bisa aktifkan bagian ini
        // if (Storage::disk('public')->exists($entry->header)) {
        //     Storage::disk('public')->delete($entry->header);
        // }

        $entry->delete();

        // Pakai session()->flash supaya konsisten dengan create
        session()->flash('delete', 'Data Berhasil Dihapus!');
        return redirect()->back(); // <-- redirect ke halaman sebelumnya
    }

    // Kalau tidak ketemu, flash error
    session()->flash('error', 'Item tidak ditemukan');
    return redirect()->back();
}



public function databujkkonsultasi(Request $request)
{
    $user = Auth::user();
    $search = $request->input('search'); // Ambil kata kunci dari form

    $query = bujkkonsultan::query();

    if($search) {
        $query->where(function($q) use ($search) {
            $q->where('namalengkap', 'like', "%{$search}%")
              ->orWhere('alamat', 'like', "%{$search}%")
              ->orWhere('no_telepon', 'like', "%{$search}%")
              ->orWhere('email', 'like', "%{$search}%")
              ->orWhere('nomorindukberusaha', 'like', "%{$search}%")
              ->orWhere('pju', 'like', "%{$search}%")
              ->orWhere('no_akte', 'like', "%{$search}%")
              ->orWhere('nama_notaris', 'like', "%{$search}%")
              ->orWhere('no_pengesahan', 'like', "%{$search}%");
        });
    }

    // Urut abjad berdasarkan kolom 'namalengkap', paginate 20
    $data = $query->orderBy('namalengkap', 'ASC')->paginate(10);

    // Menjaga keyword search tetap di query string saat pagination
    $data->appends(['search' => $search]);

    return view('frontend.new.03_bagian4.02_bujkkonsultan.databujkkonsultan', [
        'title' => 'Data BUJK Konsultasi Konstruksi Kabupaten Bandung Barat',
        'data' => $data,
        'user' => $user,
        'search' => $search, // bisa ditampilkan di input
    ]);
}


public function databujkkonsultasilayanan($namalengkap)
{
    $databujkkonsultan = bujkkonsultan::where('namalengkap', $namalengkap)->first();

    if (!$databujkkonsultan ) {
        return abort(404, 'Data sub-klasifikasi tidak ditemukan');
    }

        // Menggunakan paginate() untuk pagination
        $datasublayanan = bujkkonsultansub::where('bujkkonsultan_id', $databujkkonsultan ->id)->paginate(10);

    return view('frontend.new.03_bagian4.02_bujkkonsultan.databujkkonsultandetails', [
        'title' => 'Data Klasifikasi Layanan BUJK Konsultasi Konstruksi',
        'subdata' => $datasublayanan,
        'data' => $databujkkonsultan ,
        'user' => Auth::user()
    ]);
}

public function dataasosiasi(Request $request)
{
    $user = Auth::user();
    $search = $request->input('search');

    $query = asosiasimasjaki::withCount(['bujkkonsultan', 'bujkkontraktor']);
    // otomatis ambil jumlah konsultan & kontraktor

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('namaasosiasi', 'like', "%{$search}%")
              ->orWhere('alamat', 'like', "%{$search}%")
              ->orWhere('notelepon', 'like', "%{$search}%")
              ->orWhere('pic', 'like', "%{$search}%");
        });
    }

    $data = $query->orderBy('namaasosiasi', 'ASC')->paginate(10);
    $data->appends(['search' => $search]);

    return view('frontend.new.03_bagian4.03_asosiasikbb.dataasosiasikbb', [
        'title' => 'Data Asosiasi Jasa Konstruksi Kabupaten Bandung Barat',
        'data' => $data,
        'user' => $user,
        'search' => $search,
    ]);
}

public function datastatistikbujk(Request $request)
{
    $user = Auth::user();

    // Ambil total data langsung dari database
    $totalKonsultan = \App\Models\bujkkonsultan::count();
    $totalKontraktor = \App\Models\bujkkontraktor::count();

    // Total keseluruhan
    $totalSemua = $totalKonsultan + $totalKontraktor;

    // Hitung persentase (hindari pembagian 0)
    $persenKonsultan = $totalSemua > 0 ? ($totalKonsultan / $totalSemua) * 100 : 0;
    $persenKontraktor = $totalSemua > 0 ? ($totalKontraktor / $totalSemua) * 100 : 0;

    return view('frontend.new.03_bagian4.04_datastatistik.statistikbujk', [
        'title' => 'Statistik BUJK Kabupaten Bandung Barat',

        // Data statistik
        'totalKonsultan' => $totalKonsultan,
        'totalKontraktor' => $totalKontraktor,
        'totalSemua' => $totalSemua,
        'persenKonsultan' => $persenKonsultan,
        'persenKontraktor' => $persenKontraktor,

        'user' => $user,
    ]);
}

}
