<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\informasirantaipasok;
use App\Models\rantaipasokmaterial;
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
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'lokasi' => 'nullable|string|max:255',
        'harga' => 'required|numeric|min:0',
        'satuan' => 'required|string|max:100',
        'ketersediaan' => 'required|string|max:100',
        'keterangan' => 'nullable|string|max:255',

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
    ]);

    session()->flash('create', 'Data Rantai Pasok Material Berhasil Dibuat!');
    return redirect('/berantaimaterial');
}

}
