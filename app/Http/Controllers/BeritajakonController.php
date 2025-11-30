<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\File;

use App\Models\artikeljakon;
use App\Models\artikeljakonmasjaki;
use App\Models\berita;
use App\Models\beritajakon;
use App\Models\dokumentasijakon;
use App\Models\kegiatanjaskon;
use App\Models\laporankegiatan;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class BeritajakonController extends Controller
{
    //

    // public function index()
    // {
    //     $user = Auth::user();
    //     $users = user::all();
    //     $databerita = beritajakon::paginate(20);


    //     return view('frontend.02_beritajakon.index', [
    //         'title' => 'Berita Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'users' => $users, // Mengirimkan data paginasi ke view
    //         'data' => $databerita, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function index()
{
    $user = Auth::user();
    $users = user::all();
    $databerita = beritajakon::orderBy('created_at', 'desc')->paginate(20);

    return view('frontend.02_beritajakon.index', [
        'title' => 'Berita Jasa Konstruksi',
        'user' => $user,
        'users' => $users,
        'data' => $databerita,
    ]);
}

    // public function artikeljakon()
    // {
    //     $user = Auth::user();
    //     $dataartikel = artikeljakonmasjaki::paginate(6);

    //     return view('frontend.02_beritajakon.artikeljakon', [
    //         'title' => 'Artikel Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $dataartikel, // Mengirimkan data paginasi ke view
    //     ]);
    // }


    public function artikeljakon()
{
    $user = Auth::user();
    $dataartikel = artikeljakonmasjaki::orderBy('created_at', 'desc')->paginate(6);
    // atau kalau pakai id yang selalu naik
    // $dataartikel = artikeljakonmasjaki::orderBy('id', 'desc')->paginate(6);

    return view('frontend.02_beritajakon.artikeljakon', [
        'title' => 'Artikel Jasa Konstruksi',
        'user' => $user,
        'data' => $dataartikel,
    ]);
}

    // public function showjudulberita($judulberita)
    // {
    //     $databeritajakon = beritajakon::where('judulberita', $judulberita)->first();
    //     $databerita = beritajakon::paginate(20);
    //     $user = Auth::user();

    // return view('frontend.02_beritajakon.showberita', [
    //     'title' => 'Berita Jasa Konstruksi',
    //     'data' => $databeritajakon,
    //     'databerita' => $databerita,
    //     // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
    //     'user' => $user,
    //     // 'start' => $start,
    // ]);
    // }

    public function showjudulberita($judulberita)
{
    $databeritajakon = beritajakon::where('judulberita', $judulberita)->first();
    $databerita = beritajakon::orderBy('created_at', 'desc')->paginate(20);
    $user = Auth::user();

    return view('frontend.02_beritajakon.showberita', [
        'title' => 'Berita Jasa Konstruksi',
        'data' => $databeritajakon,
        'databerita' => $databerita,
        'user' => $user,
    ]);
}

    public function artikeljakonshow($judul)
        {
        $dataartikeljakon = artikeljakonmasjaki::where('judul', $judul)->first();
        $dataartikel = artikeljakonmasjaki::paginate(6);
    $user = Auth::user();

    return view('frontend.02_beritajakon.artikeljakonshow', [
        'title' => 'Artikel Jasa Konstruksi',
        'data' => $dataartikeljakon,
        'dataartikel' => $dataartikel,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }

public function beberitajakon(Request $request)
{
    $perPage = $request->input('perPage', 7);
    $search = $request->input('search');

    $query = berita::with('user');

    if ($search) {
        $query->where('judul', 'LIKE', "%{$search}%")
              ->orWhere('keteranganberita', 'LIKE', "%{$search}%")
              ->orWhereHas('user', function ($q) use ($search) {
                  $q->where('name', 'LIKE', "%{$search}%");
              });
    }

    // Mengurutkan data terbaru terlebih dahulu
    $data = $query->orderBy('id', 'desc')->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.03_beritajakon.01_beritajakon.partials.table', compact('data'))->render()
        ]);
    }

    $users = User::where('statusadmin_id', 1)->get();

    return view('backend.03_beritajakon.01_beritajakon.index', [
        'title' => 'Berita Jasa Konstruksi Kabupaten Bandung Barat',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'users' => $users
    ]);
}


    // MENU SHOW BERITA JASA KONSTRUKSI ------------------------------------------------------------------------------------

public function beberitajakonshow($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = berita::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = user::all();
    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.01_beritajakon.show', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'View Berita Jasa Konstruksi Kabupaten Bandung Barat'
    ]);
}


    // MENU UPDATE DAN UPDATE MENU BERITA JASA KONSTRUKSI    ----------------------------------------------------------------------------

public function beberitajakonupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = berita::where('id', $id)->firstOrFail();
    $user = Auth::user();
    // $users = User::all();  // Ambil semua pengguna

    $users = User::where('statusadmin_id', 1)->get();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.01_beritajakon.update', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'Update Berita Jasa Konstruksi'
    ]);
}

// -------------------- UPDATE DATA MENU JABATAN FUNGSIONAL  ----------------------

public function beberitajakoncreateupdate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'user_id' => 'nullable|exists:users,id',
        'judul' => 'nullable|string|max:255',
        'tanggal' => 'nullable|date',
        'keteranganberita' => 'nullable|string',
        'gambar' => 'nullable|image|max:15168',
        'gambar1' => 'nullable|image|max:15168',
        'gambar2' => 'nullable|image|max:15168',
    ], [
        'user_id.exists' => 'Penulis tidak ditemukan!',
        'judul.string' => 'Judul harus berupa teks!',
        'judul.max' => 'Judul maksimal 255 karakter!',
        'tanggal.date' => 'Tanggal harus berupa format tanggal yang valid!',
        'keteranganberita.string' => 'Keterangan harus berupa teks!',
        'gambar.image' => 'Gambar harus berupa file gambar!',
        'gambar1.image' => 'Gambar 1 harus berupa file gambar!',
        'gambar2.image' => 'Gambar 2 harus berupa file gambar!',
    ]);

    // Cari data berdasarkan ID
    $databeritajakon = berita::findOrFail($id);

    // Persiapkan data update
    $updateData = [
        'user_id' => $validatedData['user_id'] ?? $databeritajakon->user_id,
        'judul' => $validatedData['judul'] ?? $databeritajakon->judul,
        'tanggal' => $validatedData['tanggal'] ?? $databeritajakon->tanggal,
        'keteranganberita' => $validatedData['keteranganberita'] ?? $databeritajakon->keteranganberita,
    ];

    // Fungsi untuk menyimpan file ke public
    $saveToPublic = function ($file, $pathFolder) {
        $path = public_path($pathFolder);
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move($path, $filename);
        return $pathFolder . '/' . $filename;
    };

    // Upload file jika ada
    if ($request->hasFile('gambar')) {
        $updateData['gambar'] = $saveToPublic($request->file('gambar'), '02_berita/01_berita/01_gambar');
    }
    if ($request->hasFile('gambar1')) {
        $updateData['gambar1'] = $saveToPublic($request->file('gambar1'), '02_berita/01_berita/02_gambar1');
    }
    if ($request->hasFile('gambar2')) {
        $updateData['gambar2'] = $saveToPublic($request->file('gambar2'), '02_berita/01_berita/03_gambar2');
    }

    // Update data ke database
    $databeritajakon->update($updateData);

    // Pesan sukses
    session()->flash('update', 'Data Berhasil Diupdate!');

    return redirect('/beberitajakon');
}



// MENU CREATE BERITA JAKON      ----------------------------------------------------------------------------

public function beberitajakoncreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = User::all();  // Ambil semua pengguna

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.01_beritajakon.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'users' => $users,
        'title' => 'Create Berita Jasa Konstruksi'
    ]);
}

// -------------------- CREATE MENU JABATAN FUNGSIONAL   ----------------------
public function beberitajakoncreatenew(Request $request)
{
    // Cek apakah user login adalah super_admin (statusadmin_id = 1)
    $user_id = Auth::user()->statusadmin->id == 1 ? Auth::user()->id : null;

    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'keteranganberita' => 'required|string',
        'gambar' => 'required|image|max:17168',
        'gambar1' => 'required|image|max:17168',
        'gambar2' => 'required|image|max:17168',
    ], [
        'judul.required' => 'Judul wajib diisi!',
        'judul.string' => 'Judul harus berupa teks!',
        'judul.max' => 'Judul tidak boleh lebih dari 255 karakter!',
        'tanggal.required' => 'Tanggal wajib diisi!',
        'tanggal.date' => 'Tanggal harus berupa format tanggal yang valid!',
        'keteranganberita.required' => 'Keterangan wajib diisi!',
        'keteranganberita.string' => 'Keterangan harus berupa teks!',
        'gambar.required' => 'Gambar wajib diisi!',
        'gambar.image' => 'Gambar harus berupa file gambar!',
        'gambar.max' => 'Gambar maksimal 17MB!',
        'gambar1.required' => 'Gambar 1 wajib diisi!',
        'gambar1.image' => 'Gambar 1 harus berupa file gambar!',
        'gambar1.max' => 'Gambar 1 maksimal 17MB!',
        'gambar2.required' => 'Gambar 2 wajib diisi!',
        'gambar2.image' => 'Gambar 2 harus berupa file gambar!',
        'gambar2.max' => 'Gambar 2 maksimal 17MB!',
    ]);

    // Fungsi menyimpan file ke public
    $saveToPublic = function ($file, $folder) {
        $path = public_path($folder);
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move($path, $filename);
        return $folder . '/' . $filename;
    };

    // Simpan file langsung ke public
    $gambar = $saveToPublic($request->file('gambar'), '02_berita/01_berita/01_gambar');
    $gambar1 = $saveToPublic($request->file('gambar1'), '02_berita/01_berita/02_gambar1');
    $gambar2 = $saveToPublic($request->file('gambar2'), '02_berita/01_berita/03_gambar2');

    // Simpan ke database
    berita::create([
        'user_id' => $user_id,
        'judul' => $validatedData['judul'],
        'tanggal' => $validatedData['tanggal'],
        'keteranganberita' => $validatedData['keteranganberita'],
        'gambar' => $gambar,
        'gambar1' => $gambar1,
        'gambar2' => $gambar2,
    ]);

    session()->flash('create', 'Data Berhasil Dibuat!');
    return redirect('/beberitajakon');
}


        public function beberitajakondelete($judul)
{
    // Cari item berdasarkan judul
    $entry = berita::where('judul', $judul)->first();

    if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/beberitajakon')->with('delete', 'Data Berhasil Di Hapus !');

    }

    return redirect()->back()->with('error', 'Item not found');
    }




    // ======================================================================================
    // ARTIKEL JAKON MAS JAKI

        public function beartikeljakon(Request $request)
                {
                    $perPage = $request->input('perPage', 5);
                    $search = $request->input('search');

                    $query = artikeljakonmasjaki::query();

                    if ($search) {
                        $query->where('judul', 'LIKE', "%{$search}%")
                            ->orWhere('tanggal', 'LIKE', "%{$search}%")
                            // ->orWhere('keterangan', 'LIKE', "%{$search}%")
                            ->orWhereHas('user', function ($q) use ($search) {
                                $q->where('name', 'LIKE', "%{$search}%");
                            });
                    }

                    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

                    if ($request->ajax()) {
                        return response()->json([
                            'html' => view('backend.03_beritajakon.02_artikeljakon.partials.table', compact('data'))->render()
                        ]);
                    }

                    return view('backend.03_beritajakon.02_artikeljakon.index', [
                        'title' => 'Artikel Jasa Konstruksi',
                        'data' => $data,
                        'perPage' => $perPage,
                        'search' => $search
                    ]);
                }


                    // MENU SHOW ARTIKEL JASA KONSTRUKSI ------------------------------------------------------------------------------------

public function beartikeljakonshow($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = artikeljakonmasjaki::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = user::all();
    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.02_artikeljakon.show', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'Data Details Artikel Jasa Konstruksi Kabupaten Blora'
    ]);
}


    // MENU UPDATE DAN UPDATE MENU ARTIKLE JASA KONSTRUKSI    ----------------------------------------------------------------------------

public function beartikeljakonupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = artikeljakonmasjaki::where('id', $id)->firstOrFail();
    $user = Auth::user();
    // $users = User::all();  // Ambil semua pengguna

    $users = User::where('statusadmin_id', 1)->get();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.02_artikeljakon.update', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'Update Artikel Jasa Konstruksi'
    ]);
}

// -------------------- UPDATE DATA MENU ARTIKLE JASA KONSTRUKSI  ----------------------

public function beartikeljakoncreateupdate(Request $request, $id)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'user_id' => 'required|exists:users,id',
        'judul' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'keterangan' => 'required|string',
        'foto1' => 'nullable|image|max:7168',
        'foto2' => 'nullable|image|max:7168',
        'foto3' => 'nullable|image|max:7168',
   'berkas' => 'nullable|file|mimes:pdf',
 ], [
        'user_id.required' => 'Penulis harus dipilih!',
        'user_id.exists' => 'Penulis tidak ditemukan!',
        'judul.required' => 'Judul berita wajib diisi!',
        'tanggal.required' => 'Tanggal harus diisi!',
        'keterangan.required' => 'Keterangan wajib diisi!',
        'foto1.image' => 'Foto/Brosur 1 harus berupa gambar!',
        'foto2.image' => 'Foto/Brosur 2 harus berupa gambar!',
        'foto3.image' => 'Foto/Brosur 3 harus berupa gambar!',
        'berkas.required' => 'Berkas wajib diisi!',
    ]);

    // Cari data berdasarkan ID
    $databeritajakon = artikeljakonmasjaki::where('id', $id)->firstOrFail();

    // Persiapkan data update
    $updateData = [
        'user_id' => $validatedData['user_id'],
        'judul' => $validatedData['judul'],
        'tanggal' => $validatedData['tanggal'],
        'keterangan' => $validatedData['keterangan'],
    ];

    // Fungsi penyimpanan langsung ke folder public
    $saveToPublic = function ($file, $folderPath) {
        $destination = public_path($folderPath);
        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0777, true, true);
        }
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destination, $fileName);
        return $folderPath . '/' . $fileName;
    };

    // Simpan gambar jika ada
    if ($request->hasFile('foto1')) {
        $updateData['foto1'] = $saveToPublic($request->file('foto1'), '02_berita/02_artikel/01_foto1');
    }

    if ($request->hasFile('foto2')) {
        $updateData['foto2'] = $saveToPublic($request->file('foto2'), '02_berita/02_artikel/02_foto2');
    }

    if ($request->hasFile('foto3')) {
        $updateData['foto3'] = $saveToPublic($request->file('foto3'), '02_berita/02_artikel/03_foto3');
    }

    if ($request->hasFile('berkas')) {
        $updateData['berkas'] = $saveToPublic($request->file('berkas'), '02_berita/02_artikel/04_berkas01');
    }

    // Simpan perubahan ke database
    $databeritajakon->update($updateData);

    // Flash message
    session()->flash('update', 'Data Berhasil Diupdate!');

    // Redirect
    return redirect('/beartikeljakon');
}


// MENU CREATE ARTIKEL JAKON     ----------------------------------------------------------------------------

public function beartikeljakoncreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = User::all();  // Ambil semua pengguna

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.02_artikeljakon.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'users' => $users,
        'title' => 'Tambah Artikel Jasa Konstruksi'
    ]);
}

// -------------------- CREATE MENU JABATAN FUNGSIONAL   ----------------------
public function beartikeljakoncreatenew(Request $request)
{
    // User ID hanya super admin (id = 1)
    $user_id = Auth::user()->statusadmin->id == 1 ? Auth::user()->id : null;

    // Validasi input
    $validatedData = $request->validate([
        'judul'      => 'nullable|string|max:255',
        'tanggal'    => 'nullable|date',
        'keterangan' => 'nullable|string',
        'berkas'     => 'required|mimes:pdf|max:15192',
        'foto1'      => 'nullable|image|max:7168',
        'foto2'      => 'nullable|image|max:7168',
        'foto3'      => 'nullable|image|max:7168',
    ], [
        'judul.string'      => 'Judul harus berupa teks!',
        'judul.max'         => 'Judul maksimal 255 karakter!',
        'tanggal.date'      => 'Tanggal harus berupa format tanggal yang valid!',
        'keterangan.string' => 'Keterangan harus berupa teks!',
        'berkas.required'   => 'Berkas wajib diisi!',
        'berkas.mimes'      => 'Berkas harus berupa PDF!',
        'berkas.max'        => 'Berkas maksimal 15MB!',
        'foto1.image'       => 'Foto 1 harus berupa gambar!',
        'foto1.max'         => 'Foto 1 maksimal 7MB!',
        'foto2.image'       => 'Foto 2 harus berupa gambar!',
        'foto2.max'         => 'Foto 2 maksimal 7MB!',
        'foto3.image'       => 'Foto 3 harus berupa gambar!',
        'foto3.max'         => 'Foto 3 maksimal 7MB!',
    ]);

    // Function untuk menyimpan file ke public/
    $saveToPublic = function($file, $path) {
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path($path), $filename);
        return $path . '/' . $filename;
    };

    // Simpan berkas PDF
    $berkas = $saveToPublic($request->file('berkas'), '02_berita/02_artikel/04_berkas01');

    // Simpan data baru ke database
    artikeljakonmasjaki::create([
        'user_id'    => $user_id,
        'judul'      => $validatedData['judul'] ?? null,
        'tanggal'    => $validatedData['tanggal'] ?? null,
        'keterangan' => $validatedData['keterangan'] ?? null,
        'foto1'      => null, // cadangan, kosong otomatis
        'foto2'      => null, // cadangan, kosong otomatis
        'foto3'      => null, // cadangan, kosong otomatis
        'berkas'     => $berkas,
    ]);

    session()->flash('create', 'Data Berhasil Dibuat!');
    return redirect('/beartikeljakon');
}

        public function beartikeljakondelete($judul)
{
    // Cari item berdasarkan judul
    $entry = artikeljakonmasjaki::where('judul', $judul)->first();

    if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/beartikeljakon')->with('delete', 'Data Berhasil Di Hapus !');

    }

    return redirect()->back()->with('error', 'Item not found');
    }



    // ================================================================= MENU FRONTEND ANDROID =================================================================


    // public function androidberita()
    // {
    //     $user = Auth::user();
    //     $databerita = beritajakon::paginate(20);

    //     return view('frontend.00_android.01_berita.index', [
    //         'title' => 'Berita Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $databerita, // Mengirimkan data paginasi ke view
    //     ]);
    // }

public function androidberita()
{
    $user = Auth::user();
    $databerita = beritajakon::orderBy('created_at', 'desc')->paginate(20);

    return view('frontend.00_android.01_berita.index', [
        'title' => 'Berita Jasa Konstruksi',
        'user' => $user,
        'data' => $databerita,
    ]);
}
    // public function androidberitashow($judulberita)
    // {
    //     $databeritajakon = beritajakon::where('judulberita', $judulberita)->first();
    //     $databerita = beritajakon::paginate(20);
    //     $user = Auth::user();
    //     $users = user::all();

    //     return view('frontend.00_android.01_berita.show', [
    //     'title' => 'Berita Jasa Konstruksi',
    //     'data' => $databeritajakon,
    //     'databerita' => $databerita,
    //     // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
    //     'user' => $user,
    //     'users' => $users,
    //     // 'start' => $start,
    // ]);
    // }

    public function androidberitashow($judulberita)
{
    $databeritajakon = beritajakon::where('judulberita', $judulberita)->first();
    $databerita = beritajakon::orderBy('created_at', 'desc')->paginate(20);
    $user = Auth::user();
    $users = user::all();

    return view('frontend.00_android.01_berita.show', [
        'title' => 'Berita Jasa Konstruksi',
        'data' => $databeritajakon,
        'databerita' => $databerita,
        'user' => $user,
        'users' => $users,
    ]);
}


    public function androidartikeljakon()
    {
        $user = Auth::user();
        $dataartikel = artikeljakonmasjaki::paginate(6);

        return view('frontend.00_android.01_artikeljakon.index', [
            'title' => 'Artikel Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $dataartikel, // Mengirimkan data paginasi ke view
        ]);
    }

    public function androidartikeljakonshow($judul)
    {
        $dataartikeljakon = artikeljakonmasjaki::where('judul', $judul)->first();
        $dataartikeljakons = artikeljakonmasjaki::paginate(6);
        $user = Auth::user();
        $users = user::all();

        return view('frontend.00_android.01_artikeljakon.show', [
        'title' => 'Artikel Jasa Konstruksi',
        'data' => $dataartikeljakon,
        'dataartikeljakon' => $dataartikeljakons,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'users' => $users,
        // 'start' => $start,
    ]);
    }


    public function bedokumentasijakon(Request $request)
{
    $perPage = $request->input('perPage', 5);
    $search = $request->input('search');

    $query = kegiatanjaskon::query();

    if ($search) {
        $query->where('judul_kegiatan', 'LIKE', "%{$search}%");
        // Jika nanti ada kolom lain, bisa ditambahkan di sini
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.03_beritajakon.03_dokumentasijakon.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.03_beritajakon.03_dokumentasijakon.index', [
        'title' => 'Dokumentasi Kegiatan Jasa Konstruksi DPUTR KBB',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


public function bedokumentasijakoncreateupdate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'fotokegiatan1' => 'nullable|image|max:20480',
        'fotokegiatan2' => 'nullable|image|max:20480',
        'fotokegiatan3' => 'nullable|image|max:20480',
        'fotokegiatan4' => 'nullable|image|max:20480',
        'fotokegiatan5' => 'nullable|image|max:20480',
        'fotokegiatan6' => 'nullable|image|max:20480',
        'fotokegiatan7' => 'nullable|image|max:20480',
        'fotokegiatan8' => 'nullable|image|max:20480',
        'fotokegiatan9' => 'nullable|image|max:20480',
        'fotokegiatan10' => 'nullable|image|max:20480',
        'fotokegiatan11' => 'nullable|image|max:20480',
        'fotokegiatan12' => 'nullable|image|max:20480',
    ], [
        'judul.required' => 'Judul wajib diisi!',
        'fotokegiatan1.image' => 'Foto kegiatan 1 harus berupa gambar!',
        'fotokegiatan2.image' => 'Foto kegiatan 2 harus berupa gambar!',
        'fotokegiatan3.image' => 'Foto kegiatan 3 harus berupa gambar!',
        'fotokegiatan4.image' => 'Foto kegiatan 4 harus berupa gambar!',
        'fotokegiatan5.image' => 'Foto kegiatan 5 harus berupa gambar!',
        'fotokegiatan6.image' => 'Foto kegiatan 6 harus berupa gambar!',
        'fotokegiatan7.image' => 'Foto kegiatan 7 harus berupa gambar!',
        'fotokegiatan8.image' => 'Foto kegiatan 8 harus berupa gambar!',
        'fotokegiatan9.image' => 'Foto kegiatan 9 harus berupa gambar!',
        'fotokegiatan10.image' => 'Foto kegiatan 10 harus berupa gambar!',
        'fotokegiatan11.image' => 'Foto kegiatan 11 harus berupa gambar!',
        'fotokegiatan12.image' => 'Foto kegiatan 12 harus berupa gambar!',
    ]);

    // Cari data berdasarkan ID
    $dokumentasi = dokumentasijakon::findOrFail($id);

    // Data update
    $updateData = [
        'judul' => $validatedData['judul'],
    ];

    // Fungsi simpan ke folder public
    $saveToPublic = function ($file, $folderPath) {
        $destination = public_path($folderPath);
        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0777, true, true);
        }
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destination, $fileName);
        return $folderPath . '/' . $fileName;
    };

    // Simpan foto satu per satu
    if ($request->hasFile('fotokegiatan1')) {
        $updateData['fotokegiatan1'] = $saveToPublic($request->file('fotokegiatan1'), 'dokumentasijakon/foto1');
    }
    if ($request->hasFile('fotokegiatan2')) {
        $updateData['fotokegiatan2'] = $saveToPublic($request->file('fotokegiatan2'), 'dokumentasijakon/foto2');
    }
    if ($request->hasFile('fotokegiatan3')) {
        $updateData['fotokegiatan3'] = $saveToPublic($request->file('fotokegiatan3'), 'dokumentasijakon/foto3');
    }
    if ($request->hasFile('fotokegiatan4')) {
        $updateData['fotokegiatan4'] = $saveToPublic($request->file('fotokegiatan4'), 'dokumentasijakon/foto4');
    }
    if ($request->hasFile('fotokegiatan5')) {
        $updateData['fotokegiatan5'] = $saveToPublic($request->file('fotokegiatan5'), 'dokumentasijakon/foto5');
    }
    if ($request->hasFile('fotokegiatan6')) {
        $updateData['fotokegiatan6'] = $saveToPublic($request->file('fotokegiatan6'), 'dokumentasijakon/foto6');
    }
    if ($request->hasFile('fotokegiatan7')) {
        $updateData['fotokegiatan7'] = $saveToPublic($request->file('fotokegiatan7'), 'dokumentasijakon/foto7');
    }
    if ($request->hasFile('fotokegiatan8')) {
        $updateData['fotokegiatan8'] = $saveToPublic($request->file('fotokegiatan8'), 'dokumentasijakon/foto8');
    }
    if ($request->hasFile('fotokegiatan9')) {
        $updateData['fotokegiatan9'] = $saveToPublic($request->file('fotokegiatan9'), 'dokumentasijakon/foto9');
    }
    if ($request->hasFile('fotokegiatan10')) {
        $updateData['fotokegiatan10'] = $saveToPublic($request->file('fotokegiatan10'), 'dokumentasijakon/foto10');
    }
    if ($request->hasFile('fotokegiatan11')) {
        $updateData['fotokegiatan11'] = $saveToPublic($request->file('fotokegiatan11'), 'dokumentasijakon/foto11');
    }
    if ($request->hasFile('fotokegiatan12')) {
        $updateData['fotokegiatan12'] = $saveToPublic($request->file('fotokegiatan12'), 'dokumentasijakon/foto12');
    }

    // Update database
    $dokumentasi->update($updateData);

    // Flash message
    session()->flash('update', 'Data Dokumentasi Berhasil Diupdate!');

    // Redirect
    return redirect('/bedokumentasijakon');
}


public function bedokumentasijakoncreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = User::all();  // Ambil semua pengguna

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.03_dokumentasijakon.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'users' => $users,
        'title' => 'Buat Dokumentasi Kegiatan Jakon Kab Blora'
    ]);
}

public function bedokumentasijakoncreatenew(Request $request)
{
    // Validasi
    $rules = [
        'user_id' => 'required|string',
        // 'pengawasanlokasi_id' => 'nullable|string',
        'judul_kegiatan' => 'required|string|max:255',
        'alamat_kegiatan' => 'required|string',
    ];

    // Tambahkan aturan untuk 20 foto (berita1–berita20)
    for ($i = 1; $i <= 20; $i++) {
        $rules['berita'.$i] = 'nullable|image|max:15168';
    }

    $validatedData = $request->validate($rules, [
        'user_id.required' => 'User wajib dipilih!',
        // 'pengawasanlokasi_id.required' => 'Pengawasan Lokasi wajib dipilih!',
        'judul_kegiatan.required' => 'Judul Kegiatan wajib diisi!',
        'alamat_kegiatan.required' => 'Alamat Kegiatan wajib diisi!',
    ]);

    // Helper untuk simpan file ke public/dokumentasijakon/berita{i}
    $saveToPublic = function($file, $i) {
        if (!$file) return null;
        $filename = time() . '_' . $file->getClientOriginalName();
        $folder = 'dokumentasijakon/berita'.$i;
        $file->move(public_path($folder), $filename);
        return $folder . '/' . $filename; // bisa diakses via asset()
    };

    // Siapkan data untuk insert
    $insertData = [
        'user_id' => $validatedData['user_id'],
        // 'pengawasanlokasi_id' => null,
        'judul_kegiatan' => $validatedData['judul_kegiatan'],
        'alamat_kegiatan' => $validatedData['alamat_kegiatan'],
         'tanggal' => now(), // <-- tambahkan ini
    ];

    // Upload berita1–berita20
    for ($i = 1; $i <= 20; $i++) {
        $file = $request->file('berita'.$i);
        $saved = $saveToPublic($file, $i);
        if ($saved) {
            $insertData['berita'.$i] = $saved;
        }
    }

    // Simpan ke database
    kegiatanjaskon::create($insertData);

    session()->flash('create', 'Kegiatan Dokumentasi Berhasil Disimpan!');
    return redirect('/bedokumentasijakon');
}


       public function bedokumentasijakondelete($judul_kegiatan)
{
    // Cari item berdasarkan judul
    $entry = kegiatanjaskon::where('judul_kegiatan', $judul_kegiatan)->first();

    if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/bedokumentasijakon')->with('delete', 'Data Berhasil Di Hapus !');

    }

    return redirect()->back()->with('error', 'Item not found');
    }


    public function bedokumentasijakonshow($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = kegiatanjaskon::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = user::all();
    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.03_dokumentasijakon.show', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'Data Informasi Dokumentasi Kegiatan Konstruksi KBB'
    ]);
}


public function bedokumentasijakonupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = kegiatanjaskon::where('id', $id)->firstOrFail();
    $user = Auth::user();
    // $users = User::all();  // Ambil semua pengguna

    // $users = User::where('statusadmin_id', 1)->get();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.03_dokumentasijakon.update', [
        'data' => $databeritajakon,
        'user' => $user,
        // 'users' => $users,
        'title' => 'Update Dokumentasi Kegiatan Jasa Konstruksi'
    ]);
}

public function bedokumentasijakoncreaupdate(Request $request, $id)
{
    // Validasi input
    $rules = [
        'judul_kegiatan' => 'required|string|max:255',
    ];

    for ($i = 1; $i <= 20; $i++) {
        $rules['berita'.$i] = 'nullable|image|max:20168'; // max ~20MB
    }

    $validatedData = $request->validate($rules, [
        'judul_kegiatan.required' => 'Judul kegiatan wajib diisi!',
    ]);

    // Ambil data
    $dokumentasi = kegiatanjaskon::findOrFail($id);

    // Helper simpan file langsung ke public/
    $saveToPublic = function ($file, $i) {
        if (!$file) return null;

        $folder = public_path('dokumentasijakon/berita'.$i);
        if (!file_exists($folder)) {
            mkdir($folder, 0755, true); // buat folder jika belum ada
        }

        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move($folder, $filename);

        // Simpan path relatif supaya bisa diakses via asset()
        return 'dokumentasijakon/berita'.$i.'/'.$filename;
    };

    // Data yang akan diupdate
    $updateData = [
        'judul_kegiatan' => $validatedData['judul_kegiatan'],
    ];

    // Upload dan update 20 foto
    for ($i = 1; $i <= 20; $i++) {
        $file = $request->file('berita'.$i);
        $saved = $saveToPublic($file, $i);
        if ($saved) {
            $updateData['berita'.$i] = $saved;
        }
    }

    // Update database
    $dokumentasi->update($updateData);

    // Flash message & redirect
    session()->flash('update', 'Dokumentasi berhasil diperbarui!');
    return redirect()->route('bedokumentasijakon.update', $id);
}

// DATA KEGIATAN KONSTRUKSI JASA KONSTRUKSI KABUPATEN BLORA


public function resdokumentasi()
{
    $user = Auth::user();
    $databerita = dokumentasijakon::orderBy('created_at', 'desc')->paginate(20);

    return view('frontend.02_dokumentasijakon.index', [
        'title' => 'Dokumentasi Kegiatan Jasa Konstruksi',
        'user' => $user,
        'data' => $databerita,
    ]);
}


public function resdokumentasishow($id)
{
    $databeritajakon = dokumentasijakon::where('id', $id)->first();
    $databerita = dokumentasijakon::orderBy('created_at', 'desc')->paginate(20);
    $user = Auth::user();
    $users = user::all();

    return view('frontend.02_dokumentasijakon.show', [
        'title' => 'Dokumentasi Kegiatan Jasa Konstruksi',
        'data' => $databeritajakon,
        'databerita' => $databerita,
        'user' => $user,
        'users' => $users,
    ]);
}


 public function dokkegiatan()
{
    $user = Auth::user();

    // Ambil data kegiatan, terbaru muncul paling atas
    $data = kegiatanjaskon::orderBy('id', 'desc')->paginate(5);

    return view('frontend.new.02_bagian3.04_dokkegiatan.dokkegiatan', [
        'title' => 'Dokumentasi Kegiatan Jasa Konstruksi',
        'user' => $user,
        'data' => $data,
    ]);
}


 public function showdokkegiatan($id)
    {
        // Ambil data kegiatan berdasarkan id
        $item = kegiatanjaskon::findOrFail($id);

        // Kirim data ke view
        return view('frontend.new.02_bagian3.04_dokkegiatan.showdokkegiatan', [
            'title' => 'Lihat Dokumentasi Kegiatan',
            'data'  => $item,
        ]);
    }


  public function dokberitakegiatan()
{
    $user = Auth::user();

    // Data terbaru muncul paling atas
    $data = laporankegiatan::orderBy('created_at', 'desc')->paginate(4);

    return view('frontend.new.02_bagian3.05_laporankegiatan.dokberitakegiatan', [
        'title' => 'Berita Kegiatan Jasa Konstruksi',
        'user' => $user,
        'data' => $data,
    ]);
}


      public function dokberitakegiatanshow($id)
  {
      $item = laporankegiatan::findOrFail($id);
      $data = laporankegiatan::orderBy('id', 'DESC')->paginate(4);
    //   $data = artikeljakonmasjaki::all();
        $user = Auth::user();

        return view('frontend.new.02_bagian3.05_laporankegiatan.dokberitakegiatanshow', [
            'title' => $item->judul ?? 'Berita Dokumentasi Sertifkasi TKK',
            'databerita' => $item,
            'data' => $data,
            'user' => $user,
        ]);
    }



   public function bedokberitajakon(Request $request)
{
    $perPage = $request->input('perPage', 8);
    $search  = $request->input('search');

    $query = laporankegiatan::query();

    if ($search) {
        $query->where(function ($q) use ($search) {

            // Pencarian kolom langsung
            $q->where('judul_kegiatan', 'LIKE', "%{$search}%")
              ->orWhere('jabatan', 'LIKE', "%{$search}%")
              ->orWhere('keterangan_berita', 'LIKE', "%{$search}%")
              ->orWhere('gambar', 'LIKE', "%{$search}%")
              ->orWhereDate('tanggal', $search)
              ->orWhere('user_id', $search);

        })
        // Pencarian relasi kegiatanjaskon -> judul_kegiatan
        ->orWhereHas('kegiatanjaskon', function ($rel) use ($search) {
            $rel->where('judul_kegiatan', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.03_beritajakon.04_beritadokkegiatan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.03_beritajakon.04_beritadokkegiatan.index', [
        'title' => 'Dokumentasi Berita Kegiatan Sertifikasi TKK',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


       public function bedokberitajakondelete($id)
{
    // Cari item berdasarkan judul
    $entry = laporankegiatan::where('id', $id)->first();

    if ($entry) {
        // Jika ada file header yang terdaftar, hapus dari storage
        // if (Storage::disk('public')->exists($entry->header)) {
            //     Storage::disk('public')->delete($entry->header);
        // }

        // Hapus entri dari database
        $entry->delete();

        // Redirect atau memberi respons sesuai kebutuhan
        return redirect('/bedokberitajakon')->with('delete', 'Data Berhasil Di Hapus !');

    }

    return redirect()->back()->with('error', 'Item not found');
    }



    public function bedokberitajakonshow($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = laporankegiatan::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = user::all();
    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.04_beritadokkegiatan.show', [
        'data' => $databeritajakon,
        'user' => $user,
        'users' => $users,
        'title' => 'Informasi Kegiatan Sertifikasi TKK'
    ]);
}


public function bedokberitajakonupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $databeritajakon = laporankegiatan::where('id', $id)->firstOrFail();
    $datakegiatan = kegiatanjaskon::all();
    $user = Auth::user();
    // $users = User::all();  // Ambil semua pengguna

    // $users = User::where('statusadmin_id', 1)->get();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.04_beritadokkegiatan.update', [
        'data' => $databeritajakon,
        'datakegiatan' => $datakegiatan,
        'user' => $user,
        // 'users' => $users,
        'title' => 'Update Berita Kegiatan Jasa Konstruksi'
    ]);
}



public function bedokberitajakonupdatecreate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'kegiatanjaskon_id'   => 'nullable|integer',
        'user_id'             => 'nullable|integer',
        'judul_kegiatan'      => 'required|string|max:255',
        'jabatan'             => 'nullable|string|max:255',
        'gambar'              => 'nullable|image|max:20168', // max ~20MB
        'keterangan_berita'   => 'nullable|string',
        'tanggal'             => 'nullable|date',
    ], [
        'judul_kegiatan.required' => 'Judul kegiatan wajib diisi!',
    ]);

    // Ambil data lama
    $dokumentasi = laporankegiatan::findOrFail($id);

    // Upload gambar single
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');

        $folder = public_path('dokumentasijakon/gambar');
        if (!file_exists($folder)) {
            mkdir($folder, 0755, true);
        }

        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move($folder, $filename);

        $validatedData['gambar'] = 'dokumentasijakon/gambar/' . $filename;
    }

    // Update database
    $dokumentasi->update([
        'kegiatanjaskon_id'  => $validatedData['kegiatanjaskon_id'] ?? $dokumentasi->kegiatanjaskon_id,
        'user_id'            => $validatedData['user_id'] ?? $dokumentasi->user_id,
        'judul_kegiatan'     => $validatedData['judul_kegiatan'],
        'jabatan'            => $validatedData['jabatan'] ?? $dokumentasi->jabatan,
        'gambar'             => $validatedData['gambar'] ?? $dokumentasi->gambar,
        'keterangan_berita'  => $validatedData['keterangan_berita'] ?? $dokumentasi->keterangan_berita,
        'tanggal'            => $validatedData['tanggal'] ?? $dokumentasi->tanggal,
    ]);

    // Flash message & redirect
    session()->flash('update', 'Data dokumentasi berhasil diperbarui!');
    return redirect()->route('bedokberitakegiatanjakon', $id);
}



public function bedokberitajakoncreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();
    $users = User::all();  // Ambil semua pengguna
    $kegiatan = kegiatanjaskon::all();  // Ambil semua pengguna

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.03_beritajakon.04_beritadokkegiatan.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'users' => $users,
        'kegiatan' => $kegiatan,
        'title' => 'Buat Dokumentasi Berita Kegiatan Jasa Konstruksi'
    ]);
}

public function bedokberitajakoncreatenew(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'kegiatanjaskon_id'   => 'required|string',
        'user_id'             => 'required|string',
        'judul_kegiatan'      => 'required|string|max:255',
        'jabatan'             => 'nullable|string|max:255',
        'keterangan_berita'   => 'nullable|string',
        'tanggal'             => 'required|date',
        'gambar'              => 'nullable|image|max:15168', // max 15MB
    ], [
        'kegiatanjaskon_id.required' => 'Kegiatan wajib dipilih!',
        'user_id.required'           => 'User wajib diisi!',
        'judul_kegiatan.required'    => 'Judul kegiatan wajib diisi!',
        'tanggal.required'           => 'Tanggal wajib diisi!',
    ]);

    // Upload gambar jika ada
    if ($request->hasFile('gambar')) {

        $file     = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName();
        $folder   = 'dokumentasijakon/gambar';

        // buat folder jika belum ada
        if (!file_exists(public_path($folder))) {
            mkdir(public_path($folder), 0755, true);
        }

        // pindahkan file
        $file->move(public_path($folder), $filename);

        // simpan path ke database
        $validatedData['gambar'] = $folder . '/' . $filename;
    }

    // Simpan ke database
    laporankegiatan::create([
        'kegiatanjaskon_id'  => $validatedData['kegiatanjaskon_id'] ?? null,
        'user_id'            => $validatedData['user_id'] ?? null,
        'judul_kegiatan'     => $validatedData['judul_kegiatan'],
        'jabatan'            => $validatedData['jabatan'] ?? null,
        'gambar'             => $validatedData['gambar'] ?? null,
        'keterangan_berita'  => $validatedData['keterangan_berita'] ?? null,
        'tanggal'            => $validatedData['tanggal'] ?? null, // dari input form
    ]);

    session()->flash('create', 'Data Dokumentasi berhasil disimpan!');
    return redirect('/bedokberitajakon');
}

}


