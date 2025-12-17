<?php

namespace App\Http\Controllers;

use App\Models\ahspdiv1;
use Illuminate\Http\Request;

class AhspController extends Controller
{

    public function divsatupekerjaan(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search  = $request->input('search');

    $query = ahspdiv1::query()
        ->leftJoin('divpaketpekerjaans', 'ahspdiv1s.divpaketpekerjaan_id', '=', 'divpaketpekerjaans.id')
        ->leftJoin('divpekerjaans', 'ahspdiv1s.divpekerjaan_id', '=', 'divpekerjaans.id')
        ->leftJoin('divuraianpekerjaans', 'ahspdiv1s.divuraianpekerjaan_id', '=', 'divuraianpekerjaans.id')
        ->select(
            'ahspdiv1s.*',
            'divpaketpekerjaans.kode as kode_paket',
            'divpekerjaans.kode as kode_pekerjaan',
            'divuraianpekerjaans.kode as kode_uraian'
        );

    // SEARCH
    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('ahspdiv1s.namapekerjaan', 'like', "%{$search}%")
              ->orWhere('ahspdiv1s.satuan', 'like', "%{$search}%")
              ->orWhere('ahspdiv1s.hargasatuan', 'like', "%{$search}%");
        });
    }

    // 🔥 URUTAN UTAMA SESUAI KODE AHSP
    $query->orderBy('divpaketpekerjaans.kode', 'asc')
          ->orderBy('divpekerjaans.kode', 'asc')
          ->orderBy('divuraianpekerjaans.kode', 'asc')
          ->orderBy('ahspdiv1s.namapekerjaan', 'asc');

    $data = $query->paginate($perPage);

    // AJAX
    if ($request->ajax()) {
        return response()->json([
            'html' => view(
                'backend.07_satuanharga.01_satuanhargamaterial.partials.table',
                compact('data')
            )->render()
        ]);
    }

    return view('backend.20_ahsp.01_div.div1', [
        'title'   => 'Daftar Satuan Harga AHSP DIV I Persiapan Pekerjaan ',
        'data'    => $data,
        'perPage' => $perPage,
        'search'  => $search
    ]);
}
    //
}
