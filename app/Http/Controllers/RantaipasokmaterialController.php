<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\informasirantaipasok;
use App\Models\rantaipasokmaterial;
use App\Models\rantaipasokperalatan;
use App\Models\rantaipasoktokobangunan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RantaipasokmaterialController extends Controller
{

    public function berantaimaterial(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');
    $informasirantaipasok_id = $request->input('informasirantaipasok_id');

    // Query material dengan relasi perusahaan
    $query = rantaipasokmaterial::with('informasirantaipasok');

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namamaterial', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('harga', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('ketersediaan', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
        });
    }

    // Filter perusahaan jika dipilih
    if ($informasirantaipasok_id && $informasirantaipasok_id != 'all') {
        $query->where('informasirantaipasok_id', $informasirantaipasok_id);
    }

    // Urut berdasarkan nama material
    $query->orderBy('namamaterial', 'asc');

    $data = $query->paginate($perPage);

    // Ambil daftar perusahaan untuk select dropdown
    $perusahaan = informasirantaipasok::orderBy('namaperusahaan', 'asc')->get();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.07_satuanharga.01_satuanhargamaterial.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.07_rantaipasok.01_rantaipasokmaterial.rantaipasokmaterial', [
        'title' => 'Daftar Rantai Pasok Material',
        'data' => $data,
        'kategori' => $perusahaan,
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


public function berantaimaterialdelete($id)
{
    // Cari item berdasarkan ID
    $entry = rantaipasokmaterial::where('id', $id)->first();

    if ($entry) {
        // Hapus entri dari database
        $entry->delete();

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('delete', 'Data Berhasil Di Hapus !');
    }

    // Kembali ke halaman sebelumnya dengan pesan error jika item tidak ditemukan
    return back()->with('error', 'Item not found');
}



public function berantaimaterialcreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.07_rantaipasok.01_rantaipasokmaterial.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Rantai Pasok'
    ]);
}

public function berantaimaterialcreatenew(Request $request)
{
    // Ambil ID informasirantaipasok dari user login
    $informasirantaipasok_id = auth()->user()->informasirantaipasok->first()?->id;

    if (!$informasirantaipasok_id) {
        return redirect()->back()->with('error', 'Data Informasi Rantai Pasok tidak ditemukan untuk user ini.');
    }

    // Validasi input
    $validatedData = $request->validate([
        'namamaterial' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:15048',
        'lokasi' => 'nullable|string|max:255',
        'harga' => 'required|numeric|min:0',
        'satuan' => 'required|string|max:100',
        'ketersediaan' => 'required|string|max:100',
        'keterangan' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string|max:255',

    ], [
        'namamaterial.required' => 'Nama material wajib diisi.',
        'gambar.image' => 'File harus berupa gambar.',
        'gambar.mimes' => 'Format gambar harus JPG, JPEG, atau PNG.',
        // 'ketersediaan' => 'required|string|max:100',
        'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        'harga.required' => 'Harga wajib diisi.',
        'harga.numeric' => 'Harga harus berupa angka.',
        'harga.min' => 'Harga tidak boleh negatif.',
        'notelepon.required' => 'No Telepon Wajib Di Isi !.',
        'satuan.required' => 'Satuan wajib diisi.',
    ]);

    // Upload gambar langsung ke public/gambar_material
    $gambarPath = null;
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName(); // nama unik
        $file->move(public_path('gambar_material'), $filename); // pindahkan ke public/gambar_material
        $gambarPath = 'gambar_material/' . $filename; // simpan path relatif untuk URL
    }

    // Simpan ke database
    rantaipasokmaterial::create([
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'gambar' => $gambarPath ?? null,
        'ketersediaan' => $validatedData['ketersediaan'] ?? null,
        'namamaterial' => $validatedData['namamaterial'] ?? null,
        'harga' => $validatedData['harga'] ?? null, // sudah angka murni dari hidden input
        'lokasi' => $validatedData['lokasi'] ?? null,
        'ketersediaan' => 'Tersedia' ?? null, // default bisa diubah sesuai kebutuhan
        'satuan' => $validatedData['satuan'] ?? null,
        'keterangan' => $validatedData['keterangan'] ?? null,
        'notelepon' => $validatedData['notelepon'] ?? null,
    ]);

    session()->flash('create', 'Data Rantai Pasok Material Berhasil Dibuat!');
    return redirect('/berantaimaterial');
}


public function berantaimaterialupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $datasatuanhargamaterial = rantaipasokmaterial::where('id', $id)->firstOrFail();

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.07_rantaipasok.01_rantaipasokmaterial.update', [
        'data' => $datasatuanhargamaterial,
        'user' => $user,
        'title' => 'Update Daftar Harga Material'
    ]);
}

public function berantaimaterialupdatecreate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        // 'informasirantaipasok_id' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:15048',
        'namamaterial' => 'nullable|string|max:255',
        'harga' => 'nullable|numeric|min:0',
        'lokasi' => 'nullable|string|max:255',
        'ketersediaan' => 'nullable|string|max:100',
        'satuan' => 'nullable|string|max:100',
        'keterangan' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string|max:255',
    ]);

    // Ambil data berdasarkan ID
    $data = rantaipasokmaterial::findOrFail($id);

    // Jika upload gambar baru
    if ($request->hasFile('gambar')) {

        // Hapus gambar lama jika ada
        if ($data->gambar && file_exists(public_path($data->gambar))) {
            unlink(public_path($data->gambar));
        }

        // Buat folder jika belum ada
        if (!file_exists(public_path('rantaipasok/gambar'))) {
            mkdir(public_path('rantaipasok/gambar'), 0777, true);
        }

        // Simpan file ke public/
        $file = $request->file('gambar');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('rantaipasok/gambar'), $namaFile);

        // Path yang disimpan ke database
        $validatedData['gambar'] = 'rantaipasok/gambar/' . $namaFile;

    } else {
        unset($validatedData['gambar']); // Jangan ubah gambar jika tidak upload baru
    }

    // Update data
    $data->update($validatedData);

    // Redirect sukses
    session()->flash('update', 'Data Rantai Pasok Material Berhasil Diperbarui!');
    return redirect('/berantaimaterial');
}



    public function berantaiperalatan(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');
    $informasirantaipasok_id = $request->input('informasirantaipasok_id');

    // Query material dengan relasi perusahaan
    $query = rantaipasokperalatan::with('informasirantaipasok');

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namamaterial', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('harga', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('ketersediaan', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
        });
    }

    // Filter perusahaan jika dipilih
    if ($informasirantaipasok_id && $informasirantaipasok_id != 'all') {
        $query->where('informasirantaipasok_id', $informasirantaipasok_id);
    }

    // Urut berdasarkan nama material
    $query->orderBy('namamaterial', 'asc');

    $data = $query->paginate($perPage);

    // Ambil daftar perusahaan untuk select dropdown
    $perusahaan = informasirantaipasok::orderBy('namaperusahaan', 'asc')->get();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.07_satuanharga.01_satuanhargamaterial.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.07_rantaipasok.02_rantaipasokperalatan.rantaipasokperalatan', [
        'title' => 'Daftar Rantai Pasok Peralatan',
        'data' => $data,
        'kategori' => $perusahaan,
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'perPage' => $perPage,
        'search' => $search
    ]);
}


public function berantaiperalatandelete($id)
{
    // Cari item berdasarkan ID
    $entry = rantaipasokperalatan::where('id', $id)->first();

    if ($entry) {
        // Hapus entri dari database
        $entry->delete();

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('delete', 'Data Berhasil Di Hapus !');
    }

    // Kembali ke halaman sebelumnya dengan pesan error jika item tidak ditemukan
    return back()->with('error', 'Item not found');
}



public function berantaiperalatanperalatan()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.07_rantaipasok.02_rantaipasokperalatan.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Rantai Pasok Peralatan'
    ]);
}



public function berantaiperalatancreatenew(Request $request)
{
    // Ambil ID informasirantaipasok dari user login
    $informasirantaipasok_id = auth()->user()->informasirantaipasok->first()?->id;

    if (!$informasirantaipasok_id) {
        return redirect()->back()->with('error', 'Data Informasi Rantai Pasok tidak ditemukan untuk user ini.');
    }

    // Validasi input
    $validatedData = $request->validate([
        'namamaterial' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:12048',
        'lokasi' => 'nullable|string|max:255',
        'harga' => 'required|numeric|min:0',
        'satuan' => 'required|string|max:100',
        'ketersediaan' => 'required|string|max:100',
        'keterangan' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string|max:255',

    ], [
        'namamaterial.required' => 'Nama material wajib diisi.',
        'gambar.image' => 'File harus berupa gambar.',
        'gambar.mimes' => 'Format gambar harus JPG, JPEG, atau PNG.',
        // 'ketersediaan' => 'required|string|max:100',
        'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        'harga.required' => 'Harga wajib diisi.',
        'harga.numeric' => 'Harga harus berupa angka.',
        'harga.min' => 'Harga tidak boleh negatif.',
        'satuan.required' => 'Satuan wajib diisi.',
        'notelepon.required' => 'Satuan wajib diisi.',
    ]);

    // Upload gambar langsung ke public/gambar_material
    $gambarPath = null;
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName(); // nama unik
        $file->move(public_path('gambar_material'), $filename); // pindahkan ke public/gambar_material
        $gambarPath = 'gambar_material/' . $filename; // simpan path relatif untuk URL
    }

    // Simpan ke database
    rantaipasokperalatan::create([
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'gambar' => $gambarPath ?? null,
        'ketersediaan' => $validatedData['ketersediaan'] ?? null,
        'namamaterial' => $validatedData['namamaterial'] ?? null,
        'harga' => $validatedData['harga'] ?? null, // sudah angka murni dari hidden input
        'lokasi' => $validatedData['lokasi'] ?? null,
        'ketersediaan' => 'Tersedia' ?? null, // default bisa diubah sesuai kebutuhan
        'satuan' => $validatedData['satuan'] ?? null,
        'keterangan' => $validatedData['keterangan'] ?? null,
        'notelepon' => $validatedData['notelepon'] ?? null,
    ]);

    session()->flash('create', 'Data Rantai Pasok Material Berhasil Dibuat!');
    return redirect('/berantaiperalatan');
}



public function berantaiperalatanupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $datasatuanhargamaterial = rantaipasokperalatan::where('id', $id)->firstOrFail();

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.07_rantaipasok.02_rantaipasokperalatan.update', [
        'data' => $datasatuanhargamaterial,
        'user' => $user,
        'title' => 'Update Daftar Harga Peralatan'
    ]);
}


public function berantaiperalatanupdatecreate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        // 'informasirantaipasok_id' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:15048',
        'namamaterial' => 'nullable|string|max:255',
        'harga' => 'nullable|numeric|min:0',
        'lokasi' => 'nullable|string|max:255',
        'ketersediaan' => 'nullable|string|max:100',
        'satuan' => 'nullable|string|max:100',
        'keterangan' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string|max:255',
    ]);

    // Ambil data berdasarkan ID
    $data = rantaipasokperalatan::findOrFail($id);

    // Jika upload gambar baru
    if ($request->hasFile('gambar')) {

        // Hapus gambar lama jika ada
        if ($data->gambar && file_exists(public_path($data->gambar))) {
            unlink(public_path($data->gambar));
        }

        // Buat folder jika belum ada
        if (!file_exists(public_path('rantaipasok/gambar'))) {
            mkdir(public_path('rantaipasok/gambar'), 0777, true);
        }

        // Simpan file ke public/
        $file = $request->file('gambar');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('rantaipasok/gambar'), $namaFile);

        // Path yang disimpan ke database
        $validatedData['gambar'] = 'rantaipasok/gambar/' . $namaFile;

    } else {
        unset($validatedData['gambar']); // Jangan ubah gambar jika tidak upload baru
    }

    // Update data
    $data->update($validatedData);

    // Redirect sukses
    session()->flash('update', 'Data Rantai Pasok Peralatan Berhasil Diperbarui!');
    return redirect('/berantaiperalatan');
}



    public function betokobangunan(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');
    $informasirantaipasok_id = $request->input('informasirantaipasok_id');

    // Query material dengan relasi perusahaan
    $query = rantaipasoktokobangunan::with('informasirantaipasok');

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namamaterial', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('harga', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('ketersediaan', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
        });
    }

    // Filter perusahaan jika dipilih
    if ($informasirantaipasok_id && $informasirantaipasok_id != 'all') {
        $query->where('informasirantaipasok_id', $informasirantaipasok_id);
    }

    // Urut berdasarkan nama material
    $query->orderBy('namamaterial', 'asc');

    $data = $query->paginate($perPage);

    // Ambil daftar perusahaan untuk select dropdown
    $perusahaan = informasirantaipasok::orderBy('namaperusahaan', 'asc')->get();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.07_satuanharga.01_satuanhargamaterial.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.07_rantaipasok.03_tokobangunan.tokobangunan', [
        'title' => 'Daftar Rantai Toko Bangunan ',
        'data' => $data,
        'kategori' => $perusahaan,
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'perPage' => $perPage,
        'search' => $search
    ]);
}



public function betokobangunandelete($id)
{
    // Cari item berdasarkan ID
    $entry = rantaipasoktokobangunan::where('id', $id)->first();

    if ($entry) {
        // Hapus entri dari database
        $entry->delete();

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('delete', 'Data Berhasil Di Hapus !');
    }

    // Kembali ke halaman sebelumnya dengan pesan error jika item tidak ditemukan
    return back()->with('error', 'Item not found');
}



public function betokobangunancreate()
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    // $jakonjabatanfungsional = profiljakonpersonil::where('id', $id)->firstOrFail();
    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.07_rantaipasok.03_tokobangunan.create', [
        // 'data' => $jakonjabatanfungsional,
        'user' => $user,
        'title' => 'Tambah Rantai Pasok Toko Bangunan'
    ]);
}


public function betokobangunancreatenew(Request $request)
{
    // Ambil ID informasirantaipasok dari user login
    $informasirantaipasok_id = auth()->user()->informasirantaipasok->first()?->id;

    if (!$informasirantaipasok_id) {
        return redirect()->back()->with('error', 'Data Informasi Rantai Pasok tidak ditemukan untuk user ini.');
    }

    // Validasi input
    $validatedData = $request->validate([
        'namamaterial' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:12048',
        'lokasi' => 'nullable|string|max:255',
        'harga' => 'required|numeric|min:0',
        'satuan' => 'required|string|max:100',
        'ketersediaan' => 'required|string|max:100',
        'keterangan' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string|max:255',

    ], [
        'namamaterial.required' => 'Nama material wajib diisi.',
        'gambar.image' => 'File harus berupa gambar.',
        'gambar.mimes' => 'Format gambar harus JPG, JPEG, atau PNG.',
        // 'ketersediaan' => 'required|string|max:100',
        'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        'harga.required' => 'Harga wajib diisi.',
        'harga.numeric' => 'Harga harus berupa angka.',
        'harga.min' => 'Harga tidak boleh negatif.',
        'satuan.required' => 'Satuan wajib diisi.',
        'notelepon.required' => 'No Telepon wajib diisi.',
    ]);

    // Upload gambar langsung ke public/gambar_material
    $gambarPath = null;
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName(); // nama unik
        $file->move(public_path('gambar_material'), $filename); // pindahkan ke public/gambar_material
        $gambarPath = 'gambar_material/' . $filename; // simpan path relatif untuk URL
    }

    // Simpan ke database
    rantaipasoktokobangunan::create([
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'gambar' => $gambarPath ?? null,
        'ketersediaan' => $validatedData['ketersediaan'] ?? null,
        'namamaterial' => $validatedData['namamaterial'] ?? null,
        'harga' => $validatedData['harga'] ?? null, // sudah angka murni dari hidden input
        'lokasi' => $validatedData['lokasi'] ?? null,
        'ketersediaan' => 'Tersedia' ?? null, // default bisa diubah sesuai kebutuhan
        'satuan' => $validatedData['satuan'] ?? null,
        'keterangan' => $validatedData['keterangan'] ?? null,
        'notelepon' => $validatedData['notelepon'] ?? null,
    ]);

    session()->flash('create', 'Data Rantai Pasok Material Berhasil Dibuat!');
    return redirect('/betokobangunan');
}



public function betokobangunanupdate($id)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $datasatuanhargamaterial = rantaipasoktokobangunan::where('id', $id)->firstOrFail();

    $user = Auth::user();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.07_rantaipasok.03_tokobangunan.update', [
        'data' => $datasatuanhargamaterial,
        'user' => $user,
        'title' => 'Update Bahan Toko Bangunan'
    ]);
}


public function betokobangunanupdatecreate(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        // 'informasirantaipasok_id' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:15048',
        'namamaterial' => 'nullable|string|max:255',
        'harga' => 'nullable|numeric|min:0',
        'lokasi' => 'nullable|string|max:255',
        'ketersediaan' => 'nullable|string|max:100',
        'satuan' => 'nullable|string|max:100',
        'keterangan' => 'nullable|string|max:255',
    ]);

    // Ambil data berdasarkan ID
    $data = rantaipasoktokobangunan::findOrFail($id);

    // Jika upload gambar baru
    if ($request->hasFile('gambar')) {

        // Hapus gambar lama jika ada
        if ($data->gambar && file_exists(public_path($data->gambar))) {
            unlink(public_path($data->gambar));
        }

        // Buat folder jika belum ada
        if (!file_exists(public_path('rantaipasok/gambar'))) {
            mkdir(public_path('rantaipasok/gambar'), 0777, true);
        }

        // Simpan file ke public/
        $file = $request->file('gambar');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('rantaipasok/gambar'), $namaFile);

        // Path yang disimpan ke database
        $validatedData['gambar'] = 'rantaipasok/gambar/' . $namaFile;

    } else {
        unset($validatedData['gambar']); // Jangan ubah gambar jika tidak upload baru
    }

    // Update data
    $data->update($validatedData);

    // Redirect sukses
    session()->flash('update', 'Data Rantai Pasok Peralatan Berhasil Diperbarui!');
    return redirect('/betokobangunan');
}

public function rantaipasokmaterialkbb(Request $request)
{
    $user = Auth::user();

    $search = $request->input('search');
    $informasirantaipasok_id = $request->input('informasirantaipasok_id');
    $perPage = $request->input('perPage', 25);

    // Relasi benar
    $query = rantaipasokmaterial::with('informasirantaipasok');

    // FILTER SEARCH
    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('namamaterial', 'LIKE', "%{$search}%")
              ->orWhere('harga', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
        });
    }

    // FILTER berdasarkan informasirantaipasok_id
    if ($informasirantaipasok_id && $informasirantaipasok_id !== "all") {
        $query->where('informasirantaipasok_id', $informasirantaipasok_id);
    }

    // Pagination
    $data = $query
        ->orderBy('namamaterial', 'ASC')
        ->paginate($perPage);

    // Bawa parameter
    $data->appends([
        'search' => $search,
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'perPage' => $perPage
    ]);

    // Ambil daftar informasirantaipasok
    $kategori = informasirantaipasok::orderBy('namaperusahaan', 'asc')->get();

    return view('frontend.new.07_bagian8.01_rantaipasokmaterial.ferantaipasokamterial', [
        'title' => 'Daftar Supplier Bahan Material',
        'data' => $data,
        'user' => $user,
        'search' => $search,
        'kategori' => $kategori,
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'perPage' => $perPage
    ]);
}



public function rantaipasokperalatankbb(Request $request)
{
    $user = Auth::user();

    $search = $request->input('search');
    $informasirantaipasok_id = $request->input('informasirantaipasok_id');
    $perPage = $request->input('perPage', 25);

    // Relasi benar
    $query = rantaipasokperalatan::with('informasirantaipasok');

    // FILTER SEARCH
    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('namamaterial', 'LIKE', "%{$search}%")
              ->orWhere('harga', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
        });
    }

    // FILTER berdasarkan informasirantaipasok_id
    if ($informasirantaipasok_id && $informasirantaipasok_id !== "all") {
        $query->where('informasirantaipasok_id', $informasirantaipasok_id);
    }

    // Pagination
    $data = $query
        ->orderBy('namamaterial', 'ASC')
        ->paginate($perPage);

    // Bawa parameter
    $data->appends([
        'search' => $search,
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'perPage' => $perPage
    ]);

    // Ambil daftar informasirantaipasok
    $kategori = informasirantaipasok::orderBy('namaperusahaan', 'asc')->get();

    return view('frontend.new.07_bagian8.02_rantaipasokperatalan.ferantaipasokperalatan', [
        'title' => 'Daftar Supplier Bahan Peralatan',
        'data' => $data,
        'user' => $user,
        'search' => $search,
        'kategori' => $kategori,
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'perPage' => $perPage
    ]);
}


public function rantaitokobangunan(Request $request)
{
    $user = Auth::user();

    $search = $request->input('search');
    $informasirantaipasok_id = $request->input('informasirantaipasok_id');
    $perPage = $request->input('perPage', 25);

    // Relasi benar
    $query = rantaipasoktokobangunan::with('informasirantaipasok');

    // FILTER SEARCH
    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('namamaterial', 'LIKE', "%{$search}%")
              ->orWhere('harga', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
        });
    }

    // FILTER berdasarkan informasirantaipasok_id
    if ($informasirantaipasok_id && $informasirantaipasok_id !== "all") {
        $query->where('informasirantaipasok_id', $informasirantaipasok_id);
    }

    // Pagination
    $data = $query
        ->orderBy('namamaterial', 'ASC')
        ->paginate($perPage);

    // Bawa parameter
    $data->appends([
        'search' => $search,
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'perPage' => $perPage
    ]);

    // Ambil daftar informasirantaipasok
    $kategori = informasirantaipasok::orderBy('namaperusahaan', 'asc')->get();

    return view('backend.15_hakakses.03_rantaipasok.01_rantaipasokmaterial.suppliermaterial', [
        'title' => 'Daftar Rantai Pasok Toko Bangunan',
        'data' => $data,
        'user' => $user,
        'search' => $search,
        'kategori' => $kategori,
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'perPage' => $perPage
    ]);
}

public function besuppliermaterial(Request $request)
{
    $user = Auth::user();

    // Cek data perusahaan milik user
    $informasi = informasirantaipasok::where('user_id', $user->id)->first();

    // Jika user belum punya data perusahaan → redirect ke form perusahaan
    if (!$informasi) {
        return redirect()->route('perusahaaninforantaipasok')
                         ->with('warning', 'Silakan lengkapi data perusahaan terlebih dahulu.');
    }

    // Input filter
    $search = $request->input('search');
    $perPage = $request->input('perPage', 25);

    // Ambil material berdasarkan perusahaan user
    $query = rantaipasokmaterial::where('informasirantaipasok_id', $informasi->id);

    // FILTER SEARCH
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namamaterial', 'LIKE', "%{$search}%")
              ->orWhere('harga', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
        });
    }

    // Pagination
    $data = $query->orderBy('namamaterial', 'ASC')->paginate($perPage);

    // Jika material kosong → arahkan ke form tambah material
    if ($data->total() == 0) {
        return redirect()->route('rantaipasokmaterialsupplier')
                         ->with('warning', 'Silakan tambahkan data material terlebih dahulu.');
    }


    // Tampilkan data jika semua sudah lengkap
    return view('backend.15_hakakses.03_rantaipasok.01_rantaipasokmaterial.suppliermaterial', [
        'title' => 'Daftar Rantai Pasok Supplier Material',
        'data' => $data,
        'user' => $user,
        'search' => $search,
        'perPage' => $perPage,
        'informasi' => $informasi
    ]);
}



public function berantaimaterialsuppliernew(Request $request)
{
    // Ambil ID informasirantaipasok dari user login
    $informasirantaipasok_id = auth()->user()->informasirantaipasok->first()?->id;

    if (!$informasirantaipasok_id) {
        return redirect()->back()->with('error', 'Data Informasi Rantai Pasok tidak ditemukan untuk user ini.');
    }

    // Validasi input
    $validatedData = $request->validate([
        'namamaterial' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:15048',
        'lokasi' => 'nullable|string|max:255',
        'harga' => 'required|numeric|min:0',
        'satuan' => 'required|string|max:100',
        'ketersediaan' => 'required|string|max:100',
        'keterangan' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string|max:255',

    ], [
        'namamaterial.required' => 'Nama material wajib diisi.',
        'gambar.image' => 'File harus berupa gambar.',
        'gambar.mimes' => 'Format gambar harus JPG, JPEG, atau PNG.',
        // 'ketersediaan' => 'required|string|max:100',
        'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        'harga.required' => 'Harga wajib diisi.',
        'harga.numeric' => 'Harga harus berupa angka.',
        'harga.min' => 'Harga tidak boleh negatif.',
        'notelepon.required' => 'No Telepon Wajib Di Isi !.',
        'satuan.required' => 'Satuan wajib diisi.',
    ]);

    // Upload gambar langsung ke public/gambar_material
    $gambarPath = null;
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName(); // nama unik
        $file->move(public_path('gambar_material'), $filename); // pindahkan ke public/gambar_material
        $gambarPath = 'gambar_material/' . $filename; // simpan path relatif untuk URL
    }

    // Simpan ke database
    rantaipasokmaterial::create([
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'gambar' => $gambarPath ?? null,
        'ketersediaan' => $validatedData['ketersediaan'] ?? null,
        'namamaterial' => $validatedData['namamaterial'] ?? null,
        'harga' => $validatedData['harga'] ?? null, // sudah angka murni dari hidden input
        'lokasi' => $validatedData['lokasi'] ?? null,
        'ketersediaan' => 'Tersedia' ?? null, // default bisa diubah sesuai kebutuhan
        'satuan' => $validatedData['satuan'] ?? null,
        'keterangan' => $validatedData['keterangan'] ?? null,
        'notelepon' => $validatedData['notelepon'] ?? null,
    ]);

    session()->flash('create', 'Data Rantai Pasok Material Berhasil Dibuat!');
    return redirect('/besuppliermaterial');
}



public function berantaimaterialupdatecreatesupplier(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        // 'informasirantaipasok_id' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:15048',
        'namamaterial' => 'nullable|string|max:255',
        'harga' => 'nullable|numeric|min:0',
        'lokasi' => 'nullable|string|max:255',
        'ketersediaan' => 'nullable|string|max:100',
        'satuan' => 'nullable|string|max:100',
        'keterangan' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string|max:255',
    ]);

    // Ambil data berdasarkan ID
    $data = rantaipasokmaterial::findOrFail($id);

    // Jika upload gambar baru
    if ($request->hasFile('gambar')) {

        // Hapus gambar lama jika ada
        if ($data->gambar && file_exists(public_path($data->gambar))) {
            unlink(public_path($data->gambar));
        }

        // Buat folder jika belum ada
        if (!file_exists(public_path('rantaipasok/gambar'))) {
            mkdir(public_path('rantaipasok/gambar'), 0777, true);
        }

        // Simpan file ke public/
        $file = $request->file('gambar');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('rantaipasok/gambar'), $namaFile);

        // Path yang disimpan ke database
        $validatedData['gambar'] = 'rantaipasok/gambar/' . $namaFile;

    } else {
        unset($validatedData['gambar']); // Jangan ubah gambar jika tidak upload baru
    }

    // Update data
    $data->update($validatedData);

    // Redirect sukses
    session()->flash('update', 'Data Rantai Pasok Material Berhasil Diperbarui!');
    return redirect('/besuppliermaterial');
}



public function besupplierperalatan(Request $request)
{
    $user = Auth::user();

    // Cek data perusahaan milik user
    $informasi = informasirantaipasok::where('user_id', $user->id)->first();

    // Jika user belum punya data perusahaan → redirect ke form perusahaan
    if (!$informasi) {
        return redirect()->route('perusahaaninforantaipasok')
                         ->with('warning', 'Silakan lengkapi data perusahaan terlebih dahulu.');
    }

    // Input filter
    $search = $request->input('search');
    $perPage = $request->input('perPage', 25);

    // Ambil material berdasarkan perusahaan user
    $query = rantaipasokperalatan::where('informasirantaipasok_id', $informasi->id);

    // FILTER SEARCH
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namamaterial', 'LIKE', "%{$search}%")
              ->orWhere('harga', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
        });
    }

    // Pagination
    $data = $query->orderBy('namamaterial', 'ASC')->paginate($perPage);

    // Jika material kosong → arahkan ke form tambah material
    if ($data->total() == 0) {
        return redirect()->route('rantaipasokperalatansupplier')
                         ->with('warning', 'Silakan tambahkan data material terlebih dahulu.');
    }


    // Tampilkan data jika semua sudah lengkap
    return view('backend.15_hakakses.03_rantaipasok.02_rantaipasokperalatan.supplierperalatan', [
        'title' => 'Daftar Rantai Pasok Supplier Peralatan',
        'data' => $data,
        'user' => $user,
        'search' => $search,
        'perPage' => $perPage,
        'informasi' => $informasi
    ]);
}



public function berantaiperalatancreatenewsupplier(Request $request)
{
    // Ambil ID informasirantaipasok dari user login
    $informasirantaipasok_id = auth()->user()->informasirantaipasok->first()?->id;

    if (!$informasirantaipasok_id) {
        return redirect()->back()->with('error', 'Data Informasi Rantai Pasok tidak ditemukan untuk user ini.');
    }

    // Validasi input
    $validatedData = $request->validate([
        'namamaterial' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:12048',
        'lokasi' => 'nullable|string|max:255',
        'harga' => 'required|numeric|min:0',
        'satuan' => 'required|string|max:100',
        'ketersediaan' => 'required|string|max:100',
        'keterangan' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string|max:255',

    ], [
        'namamaterial.required' => 'Nama material wajib diisi.',
        'gambar.image' => 'File harus berupa gambar.',
        'gambar.mimes' => 'Format gambar harus JPG, JPEG, atau PNG.',
        // 'ketersediaan' => 'required|string|max:100',
        'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        'harga.required' => 'Harga wajib diisi.',
        'harga.numeric' => 'Harga harus berupa angka.',
        'harga.min' => 'Harga tidak boleh negatif.',
        'satuan.required' => 'Satuan wajib diisi.',
        'notelepon.required' => 'Satuan wajib diisi.',
    ]);

    // Upload gambar langsung ke public/gambar_material
    $gambarPath = null;
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName(); // nama unik
        $file->move(public_path('gambar_material'), $filename); // pindahkan ke public/gambar_material
        $gambarPath = 'gambar_material/' . $filename; // simpan path relatif untuk URL
    }

    // Simpan ke database
    rantaipasokperalatan::create([
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'gambar' => $gambarPath ?? null,
        'ketersediaan' => $validatedData['ketersediaan'] ?? null,
        'namamaterial' => $validatedData['namamaterial'] ?? null,
        'harga' => $validatedData['harga'] ?? null, // sudah angka murni dari hidden input
        'lokasi' => $validatedData['lokasi'] ?? null,
        'ketersediaan' => 'Tersedia' ?? null, // default bisa diubah sesuai kebutuhan
        'satuan' => $validatedData['satuan'] ?? null,
        'keterangan' => $validatedData['keterangan'] ?? null,
        'notelepon' => $validatedData['notelepon'] ?? null,
    ]);

    session()->flash('create', 'Data Rantai Pasok Material Berhasil Dibuat!');
    return redirect('/besupplierperalatan');
}


public function berantaiperalatanupdatecreatesupplier(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        // 'informasirantaipasok_id' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:15048',
        'namamaterial' => 'nullable|string|max:255',
        'harga' => 'nullable|numeric|min:0',
        'lokasi' => 'nullable|string|max:255',
        'ketersediaan' => 'nullable|string|max:100',
        'satuan' => 'nullable|string|max:100',
        'keterangan' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string|max:255',
    ]);

    // Ambil data berdasarkan ID
    $data = rantaipasokperalatan::findOrFail($id);

    // Jika upload gambar baru
    if ($request->hasFile('gambar')) {

        // Hapus gambar lama jika ada
        if ($data->gambar && file_exists(public_path($data->gambar))) {
            unlink(public_path($data->gambar));
        }

        // Buat folder jika belum ada
        if (!file_exists(public_path('rantaipasok/gambar'))) {
            mkdir(public_path('rantaipasok/gambar'), 0777, true);
        }

        // Simpan file ke public/
        $file = $request->file('gambar');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('rantaipasok/gambar'), $namaFile);

        // Path yang disimpan ke database
        $validatedData['gambar'] = 'rantaipasok/gambar/' . $namaFile;

    } else {
        unset($validatedData['gambar']); // Jangan ubah gambar jika tidak upload baru
    }

    // Update data
    $data->update($validatedData);

    // Redirect sukses
    session()->flash('update', 'Data Rantai Pasok Peralatan Berhasil Diperbarui!');
    return redirect('/besupplierperalatan');
}



public function besuppliertokobangunan(Request $request)
{
    $user = Auth::user();

    // Cek data perusahaan milik user
    $informasi = informasirantaipasok::where('user_id', $user->id)->first();

    // Jika user belum punya data perusahaan → redirect ke form perusahaan
    if (!$informasi) {
        return redirect()->route('perusahaaninforantaipasok')
                         ->with('warning', 'Silakan lengkapi data perusahaan terlebih dahulu.');
    }

    // Input filter
    $search = $request->input('search');
    $perPage = $request->input('perPage', 25);

    // Ambil material berdasarkan perusahaan user
    $query = rantaipasoktokobangunan::where('informasirantaipasok_id', $informasi->id);

    // FILTER SEARCH
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('namamaterial', 'LIKE', "%{$search}%")
              ->orWhere('harga', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('lokasi', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%");
        });
    }

    // Pagination
    $data = $query->orderBy('namamaterial', 'ASC')->paginate($perPage);

    // Jika material kosong → arahkan ke form tambah material
    if ($data->total() == 0) {
        return redirect()->route('create.suppliertokobangunan')
                         ->with('warning', 'Silakan tambahkan data material terlebih dahulu.');
    }


    // Tampilkan data jika semua sudah lengkap
    return view('backend.15_hakakses.03_rantaipasok.03_tokobangunan.suppliertokobangunan', [
        'title' => 'Daftar Rantai Pasok Toko Bangunan',
        'data' => $data,
        'user' => $user,
        'search' => $search,
        'perPage' => $perPage,
        'informasi' => $informasi
    ]);
}


public function betokobangunancreatenewsupplier(Request $request)
{
    // Ambil ID informasirantaipasok dari user login
    $informasirantaipasok_id = auth()->user()->informasirantaipasok->first()?->id;

    if (!$informasirantaipasok_id) {
        return redirect()->back()->with('error', 'Data Informasi Rantai Pasok tidak ditemukan untuk user ini.');
    }

    // Validasi input
    $validatedData = $request->validate([
        'namamaterial' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:12048',
        'lokasi' => 'nullable|string|max:255',
        'harga' => 'required|numeric|min:0',
        'satuan' => 'required|string|max:100',
        'ketersediaan' => 'required|string|max:100',
        'keterangan' => 'nullable|string|max:255',
        'notelepon' => 'nullable|string|max:255',

    ], [
        'namamaterial.required' => 'Nama material wajib diisi.',
        'gambar.image' => 'File harus berupa gambar.',
        'gambar.mimes' => 'Format gambar harus JPG, JPEG, atau PNG.',
        // 'ketersediaan' => 'required|string|max:100',
        'gambar.max' => 'Ukuran gambar maksimal 2MB.',
        'harga.required' => 'Harga wajib diisi.',
        'harga.numeric' => 'Harga harus berupa angka.',
        'harga.min' => 'Harga tidak boleh negatif.',
        'satuan.required' => 'Satuan wajib diisi.',
        'notelepon.required' => 'No Telepon wajib diisi.',
    ]);

    // Upload gambar langsung ke public/gambar_material
    $gambarPath = null;
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName(); // nama unik
        $file->move(public_path('gambar_material'), $filename); // pindahkan ke public/gambar_material
        $gambarPath = 'gambar_material/' . $filename; // simpan path relatif untuk URL
    }

    // Simpan ke database
    rantaipasoktokobangunan::create([
        'informasirantaipasok_id' => $informasirantaipasok_id,
        'gambar' => $gambarPath ?? null,
        'ketersediaan' => $validatedData['ketersediaan'] ?? null,
        'namamaterial' => $validatedData['namamaterial'] ?? null,
        'harga' => $validatedData['harga'] ?? null, // sudah angka murni dari hidden input
        'lokasi' => $validatedData['lokasi'] ?? null,
        'ketersediaan' => 'Tersedia' ?? null, // default bisa diubah sesuai kebutuhan
        'satuan' => $validatedData['satuan'] ?? null,
        'keterangan' => $validatedData['keterangan'] ?? null,
        'notelepon' => $validatedData['notelepon'] ?? null,
    ]);

    session()->flash('create', 'Data Rantai Pasok Toko Bangunan Berhasil Dibuat!');
    return redirect('/besuppliertokobangunan');
}



public function betokobangunanupdatecreatesupplier(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        // 'informasirantaipasok_id' => 'nullable|string',
        'gambar' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:15048',
        'namamaterial' => 'nullable|string|max:255',
        'harga' => 'nullable|numeric|min:0',
        'lokasi' => 'nullable|string|max:255',
        'ketersediaan' => 'nullable|string|max:100',
        'satuan' => 'nullable|string|max:100',
        'keterangan' => 'nullable|string|max:255',
    ]);

    // Ambil data berdasarkan ID
    $data = rantaipasoktokobangunan::findOrFail($id);

    // Jika upload gambar baru
    if ($request->hasFile('gambar')) {

        // Hapus gambar lama jika ada
        if ($data->gambar && file_exists(public_path($data->gambar))) {
            unlink(public_path($data->gambar));
        }

        // Buat folder jika belum ada
        if (!file_exists(public_path('rantaipasok/gambar'))) {
            mkdir(public_path('rantaipasok/gambar'), 0777, true);
        }

        // Simpan file ke public/
        $file = $request->file('gambar');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('rantaipasok/gambar'), $namaFile);

        // Path yang disimpan ke database
        $validatedData['gambar'] = 'rantaipasok/gambar/' . $namaFile;

    } else {
        unset($validatedData['gambar']); // Jangan ubah gambar jika tidak upload baru
    }

    // Update data
    $data->update($validatedData);

    // Redirect sukses
    session()->flash('update', 'Data Rantai Pasok Peralatan Berhasil Diperbarui!');
    return redirect('/besuppliertokobangunan');
}

}
