<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategorimaterial;
use App\Models\keputusanmenteri;
use App\Models\peraturan;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\pergubernur;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\referensi;
use App\Models\suratedaran;
use App\Models\suratkeputusan;
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
            'html' => view('backend.17_permenpu.02_perpemerintah.partials.table', compact('data'))->render()
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



public function permenpresiden(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = perpresiden::query();

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
            'html' => view('backend.17_permenpu.03_permenpresiden.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.03_permenpresiden.permenpresiden', [
        'title' => 'Peraturan Presiden ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}//



public function permenpemerintahdelete($id)
{
// Cari item berdasarkan judul
$entry = perpresiden::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/permenpresiden')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}



public function permenpresidencreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.03_permenpresiden.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}


public function permenpresidencreatenew(Request $request)
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
    perpresiden::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/permenpresiden');
}


public function permenmenteri(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = permenteri::query();

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
            'html' => view('backend.17_permenpu.04_permenmenteri.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.04_permenmenteri.permenmenteri', [
        'title' => 'Peraturan Menteri ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}//


public function permenmenteridelete($id)
{
// Cari item berdasarkan judul
$entry = permenteri::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/permenmenteri')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}


public function permenmentericreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.04_permenmenteri.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}



public function permenmentericreatemew(Request $request)
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
    permenteri::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/permenmenteri');
}




public function keputusanmenteri(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = keputusanmenteri::query();

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
            'html' => view('backend.17_permenpu.05_keputusanmenteri.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.05_keputusanmenteri.keputusanmenteri', [
        'title' => 'Keputusan Menteri ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}//



public function keputusanmenteridelete($id)
{
// Cari item berdasarkan judul
$entry = keputusanmenteri::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/keputusanmenteri')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}



public function keputusanmentericreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.05_keputusanmenteri.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}



public function keputusanmentericreatenew(Request $request)
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
    keputusanmenteri::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/keputusanmenteri');
}



public function suratedaran(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = suratedaran::query();

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
            'html' => view('backend.17_permenpu.06_suratedaran.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.06_suratedaran.suratedaran', [
        'title' => 'Surat Edaran ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}//



public function suratedarandelete($id)
{
// Cari item berdasarkan judul
$entry = suratedaran::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/suratedaran')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}


public function suratedaranbaru()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.06_suratedaran.tambahsuratedaran', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}


public function suratedarancreatenew(Request $request)
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
    suratedaran::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/suratedaran');
}


public function referensi(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = referensi::query();

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
            'html' => view('backend.17_permenpu.07_referensi.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.07_referensi.referensi', [
        'title' => 'Referensi Peraturan Jasa Konstruksi ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}//

public function referensidelete($id)
{
// Cari item berdasarkan judul
$entry = referensi::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/referensi')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}


public function referensicreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.07_referensi.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}


public function referensibarucreatenew(Request $request)
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
    referensi::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/referensi');
}



public function permendaerah(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = perdaerah::query();

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
            'html' => view('backend.17_permenpu.08_permendaerah.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.08_permendaerah.permendaerah', [
        'title' => 'Peraturan Daerah ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}//



public function permendaerahdelete($id)
{
// Cari item berdasarkan judul
$entry = perdaerah::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/permendaerah')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}



public function permendaerahcreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.08_permendaerah.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}



public function premendaerahcreatenew(Request $request)
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
    perdaerah::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/permendaerah');
}



public function permengubernur(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = pergubernur::query();

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
            'html' => view('backend.17_permenpu.09_permengubernur.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.09_permengubernur.permengubernur', [
        'title' => 'Peraturan Gubernur ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}//

public function permengubernurdelete($id)
{
// Cari item berdasarkan judul
$entry = pergubernur::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/permengubernur')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}



public function permengubernurcreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.09_permengubernur.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}



public function permengubernurcreatenew(Request $request)
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
    pergubernur::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/permengubernur');
}



public function permenwalikota(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = perbupatiwalikota::query();

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
            'html' => view('backend.17_permenpu.10_permenwalikota.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.10_permenwalikota.permenwalikota', [
        'title' => 'Peraturan Walikota/Bupati ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}//



public function permenwalikotadelete($id)
{
// Cari item berdasarkan judul
$entry = perbupatiwalikota::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/permenwalikota')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}


public function permenwalikotacreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.10_permenwalikota.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}


public function permenwalikotacreatenew(Request $request)
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
    perbupatiwalikota::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/permenwalikota');
}


public function permensuratkeputusan(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = suratkeputusan::query();

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
            'html' => view('backend.17_permenpu.11_suratkeputusan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.17_permenpu.11_suratkeputusan.permensuratkeputusan', [
        'title' => 'Surat Keputusan Jasa Konstruksi ',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}//



public function permensuratkeputusandelete($id)
{
// Cari item berdasarkan judul
$entry = suratkeputusan::where('id', $id)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/permensuratkeputusan')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}



public function permensuratkeputusancreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.17_permenpu.11_suratkeputusan.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Peraturan Jasa Konstruksi'
    ]);
}


public function permensuratkeputusancreatenew(Request $request)
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
    suratkeputusan::create([
        'judul'     => $validatedData['judul'],
        'peraturan' => $validatedData['peraturan'],
    ]);

    session()->flash('create', 'Data Peraturan Berhasil Ditambahkan!');
    return redirect('/permensuratkeputusan');
}

public function perundangundang(Request $request)
{
    $search = $request->query('search');

    $data = peraturan::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 penting supaya search kebawa

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.01_perundangundang.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.01_perundangundang.feundangundang', [
        'title' => 'Peraturan Undang Undang Jasa Konstruksi',
        'data'  => $data,
        'search'=> $search
    ]);
}
public function peraturanpemerintah(Request $request)
{
    $search = $request->query('search');

    $data = perpemerintah::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 search kebawa pagination

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.02_peraturanpemerintah.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.02_peraturanpemerintah.feperaturanpemerintah', [
        'title'  => 'Peraturan Pemerintah',
        'data'   => $data,
        'search' => $search
    ]);
}

public function peraturanpresiden(Request $request)
{
    $search = $request->query('search');

    $data = perpresiden::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 biar search kebawa pagination

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.03_peraturanpresiden.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.03_peraturanpresiden.feperaturanpresiden', [
        'title'  => 'Peraturan Presiden',
        'data'   => $data,
        'search' => $search
    ]);
}

public function peraturanmenteri(Request $request)
{
    $search = $request->query('search');

    $data = permenteri::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 biar search kebawa pagination

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.04_peraturanmenteri.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.04_peraturanmenteri.feperaturanmenteri', [
        'title'  => 'Peraturan Menteri',
        'data'   => $data,
        'search' => $search
    ]);
}

public function peraturankeputusanmanteri(Request $request)
{
    $search = $request->query('search');

    $data = keputusanmenteri::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 biar search kebawa pagination

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.05_peraturankepurusanmenteri.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.05_peraturankepurusanmenteri.feperaturankeputusanmenteri', [
        'title'  => 'Peraturan Menteri',
        'data'   => $data,
        'search' => $search
    ]);
}

public function peraturansuratedaran(Request $request)
{
    $search = $request->query('search');

    $data = suratedaran::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 biar search kebawa pagination

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.06_peraturansuratedaranmenteri.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.06_peraturansuratedaranmenteri.feperaturansuratedaranmenteri', [
        'title'  => 'Surat Edaran Menteri',
        'data'   => $data,
        'search' => $search
    ]);
}

public function peraturanreferensi(Request $request)
{
    $search = $request->query('search');

    $data = referensi::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 biar search kebawa pagination

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.07_peraturanreferensi.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.07_peraturanreferensi.feperaturanreferensi', [
        'title'  => 'Referensi Peraturan',
        'data'   => $data,
        'search' => $search
    ]);
}

public function peraturandaerah(Request $request)
{
    $search = $request->query('search');

    $data = perdaerah::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 biar search kebawa pagination

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.08_peraturandaerah.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.08_peraturandaerah.feperaturandaerah', [
        'title'  => 'Peraturan Daerah',
        'data'   => $data,
        'search' => $search
    ]);
}

public function peraturangubernur(Request $request)
{
    $search = $request->query('search');

    $data = pergubernur::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 biar search kebawa pagination

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.09_peraturangubernur.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.09_peraturangubernur.feperaturangubernur', [
        'title'  => 'Peraturan Gubernur',
        'data'   => $data,
        'search' => $search
    ]);
}

public function peraturanwalikota(Request $request)
{
    $search = $request->query('search');

    $data = perbupatiwalikota::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 biar search kebawa pagination

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.10_peraturanwalikota.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.10_peraturanwalikota.feperaturanwalikota', [
        'title'  => 'Peraturan Walikota/Bupati',
        'data'   => $data,
        'search' => $search
    ]);
}

public function peraturansuratkeputusan(Request $request)
{
    $search = $request->query('search');

    $data = suratkeputusan::orderBy('judul', 'asc')
        ->when($search, function ($q) use ($search) {
            $q->where('judul', 'LIKE', '%' . $search . '%');
        })
        ->paginate(10)
        ->withQueryString(); // 🔥 biar search kebawa pagination

    // 🔥 REQUEST DARI JS (AJAX)
    if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
        return view(
            'frontend.new.08_bagian9.11_suratkeputusan.partials.table',
            compact('data')
        );
    }

    // 🔥 HALAMAN NORMAL
    return view('frontend.new.08_bagian9.11_suratkeputusan.feperaturansuratkeputusan', [
        'title'  => 'Surat Keputusan',
        'data'   => $data,
        'search' => $search
    ]);
}


}
