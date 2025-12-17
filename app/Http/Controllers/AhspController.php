<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AhspController extends Controller
{



// MENU BACKEND SATUAN HARGA MERTIAL
public function besatuanhargamaterial(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');
    $kategori_id = $request->input('kategori_id');

    $query = divsatupekerjaan::with('kategorimaterial');

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('uraian', 'LIKE', "%{$search}%")
              ->orWhere('satuan', 'LIKE', "%{$search}%")
              ->orWhere('besaran', 'LIKE', "%{$search}%");
        });
    }

    // Filter kategori jika dipilih
    if ($kategori_id && $kategori_id != 'all') {
        $query->where('kategorimaterial_id', $kategori_id);
    }

    // Urut berdasarkan uraian
    $query->orderBy('uraian', 'asc');

    $data = $query->paginate($perPage);

    // Ambil daftar kategori untuk select dropdown
    $kategori = kategorimaterial::orderBy('material','asc')->get();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.07_satuanharga.01_satuanhargamaterial.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.07_satuanharga.01_satuanhargamaterial.index', [
        'title' => 'Daftar Satuan Harga Material',
        'data' => $data,
        'kategori' => $kategori,
        'kategori_id' => $kategori_id,
        'perPage' => $perPage,
        'search' => $search
    ]);
}
    //
}
