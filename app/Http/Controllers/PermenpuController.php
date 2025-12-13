<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategorimaterial;
use App\Models\peraturan;
use App\Models\perpemerintah;
use Illuminate\Support\Facades\Auth;

class PermenpuController extends Controller
{


public function permenuu(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = peraturan::query();

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('judul', 'LIKE', "%{$search}%");
            //   ->orWhere('besaranperjam', 'LIKE', "%{$search}%");
        });
    }

    // Urut berdasarkan kolom 'uraian' dari A-Z
    $query->orderBy('judul', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.17_permenpu.01_undangundang.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.01_undangundang.undangundang', [
        'title' => 'Peraturan Jasa Konstruksi Undang Undang ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


public function permenuudelete($id)
{
// Cari item berdasarkan judul
$entry = peraturan::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/permenuu')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}



public function permenuucreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.01_undangundang.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}


public function permenuucreatenew(Request $request)
{
    // Validasi
    $validatedData = $request->validate([
        'judul'     => 'required|string|max:255',
        'peraturan' => 'required|mimes:pdf|max:15120', // max 5MB
    ], [
        'judul.required' => 'Judul peraturan wajib diisi.',
        'peraturan.required' => 'Berkas peraturan wajib diunggah.',
        'peraturan.mimes' => 'Berkas harus berformat PDF.',
    ]);

    // Upload file ke folder PUBLIC
    if ($request->hasFile('peraturan')) {
        $file = $request->file('peraturan');

        $namaFile = time() . '_' . $file->getClientOriginalName();

        // folder tujuan (contoh: public/berkas_peraturan)
        $file->move(public_path('berkas_peraturan'), $namaFile);

        // simpan path relatif (untuk URL)
        $validatedData['peraturan'] = 'berkas_peraturan/' . $namaFile;
    }

    // Simpan ke database
    peraturan::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/permenuu');
}


public function permenpemerintah(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = perpemerintah::query();

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('judul', 'LIKE', "%{$search}%");
            //   ->orWhere('besaranperjam', 'LIKE', "%{$search}%");
        });
    }

    // Urut berdasarkan kolom 'uraian' dari A-Z
    $query->orderBy('judul', 'asc');

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.07_satuanharga.03_satuanhargaperalatan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.02_perpemerintah.perpemerintah', [
        'title' => 'Peraturan Pemerintah ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}//



public function perpemerintahdelete($id)
{
// Cari item berdasarkan judul
$entry = perpemerintah::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/permenpemerintah')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}


public function permenpemerintahcreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.02_perpemerintah.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}



public function permenpemerintahcreatenew(Request $request)
{
    // Validasi
    $validatedData = $request->validate([
        'judul'     => 'required|string|max:255',
        'peraturan' => 'required|mimes:pdf|max:15120', // max 5MB
    ], [
        'judul.required' => 'Judul peraturan wajib diisi.',
        'peraturan.required' => 'Berkas peraturan wajib diunggah.',
        'peraturan.mimes' => 'Berkas harus berformat PDF.',
    ]);

    // Upload file ke folder PUBLIC
    if ($request->hasFile('peraturan')) {
        $file = $request->file('peraturan');

        $namaFile = time() . '_' . $file->getClientOriginalName();

        // folder tujuan (contoh: public/berkas_peraturan)
        $file->move(public_path('berkas_peraturan'), $namaFile);

        // simpan path relatif (untuk URL)
        $validatedData['peraturan'] = 'berkas_peraturan/' . $namaFile;
    }

    // Simpan ke database
    perpemerintah::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/permenpemerintah');
}

}
