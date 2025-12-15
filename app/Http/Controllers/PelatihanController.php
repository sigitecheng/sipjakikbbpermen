<?php

namespace App\Http\Controllers;

use App\Models\agendapelatihan;
use App\Models\jenjangpendidikan;
use App\Models\materipelatihan;
use App\Models\pelatihan;
use App\Models\pesertapelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelatihanController extends Controller
{
    //
    public function index()
    {
        // Mengambil semua data dari model pelatihan
        $pelatihanData = pelatihan::all();

        // Memformat data menjadi array dengan format yang sesuai
        $data = $pelatihanData->map(function($item) {
            return [
                'tahun' => $item->tahun,
                'kasus' => $item->kasus
            ];
        });

        $data_2 = $pelatihanData->map(function($item) {
            return [
                'tahun' => $item->tahun,
                'kasus' => $item->kasus
            ];
        });

        // Mengirim data ke view
        return view('frontend.10_pelatihan.03_kecelakaan.index', [
            'data' => $data,
            'data_2' => $data_2,
            'title' => 'Kasus Data Kecelakaan Kerja',
        ]);
    }

public function agendapelatihankbb()
{
    // Agenda TERAKHIR (1 data)
    $latestAgenda = agendapelatihan::orderBy('created_at', 'DESC')->first();

    // Semua agenda (list card)
    $data = agendapelatihan::orderBy('created_at', 'DESC')->paginate(4);


    return view('frontend.new.04_bagian5.01_agendapelatihan.agendapelatihan', [
        'title' => 'Agenda Pelatihan Jasa Konstruksi',
        'latestAgenda' => $latestAgenda,
        'data' => $data,
        'user' => Auth::user(),
    ]);
}





    public function agendapelatihankbbshow($namakegiatan)
        {
        $dataartikeljakon = agendapelatihan::where('namakegiatan', $namakegiatan)->first();
        $dataagendapelatihan = agendapelatihan::paginate(4);
    $user = Auth::user();

    return view('frontend.new.04_bagian5.01_agendapelatihan.showagendapelatihan', [
        'title' => 'Agenda Pelatihan Jasa Konstruksi',
        'datashow' => $dataartikeljakon,
        'dataagendapelatihan' => $dataagendapelatihan,
        'data' => $dataagendapelatihan,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }

public function agendapelatihankbbdaftar($namakegiatan)
{
    // Cari data agenda
    $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

    // Cek apakah ada data
    if (!$dataagendapelatihan) {
        return redirect()->back()->with('error', 'Data agenda pelatihan tidak ditemukan');
    }

    // Ambil sub-data materipelatihan jika data agenda ada
    $subdata = materipelatihan::where('agendapelatihan_id', $dataagendapelatihan->id)
                ->paginate(50);

    // Ambil data user saat ini
    $user = Auth::user();
    $listJenjang = jenjangpendidikan::all();

    return view('frontend.new.04_bagian5.01_agendapelatihan.daftaragendapelatihan', [
        'title' => 'Daftar Pelatihan Jasa Konstruksi',
        'data' => $dataagendapelatihan,
        'datamateripelatihan' => $subdata,
        'user' => $user,
        'listJenjang' => $listJenjang,
    ]);
}

public function agendapelatihancreatepeserta(Request $request)
{
    // Validasi input dengan pesan error custom
    $validated = $request->validate([
        'agendapelatihan_id' => 'required|string',
        'namalengkap' => 'required|string|max:255',
        'jenjangpendidikan_id' => 'required|exists:jenjangpendidikans,id',
        'nik' => 'required|digits:16',
        'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
        'tanggallahir' => 'required|date',
        'notelepon' => 'required|string|max:20',
        'instansi' => 'required|string|max:255',
    ], [
        'agendapelatihan_id.required' => 'Agendapelatihan tidak boleh kosong!',
        'namalengkap.required' => 'Nama lengkap wajib diisi!',
        'namalengkap.max' => 'Nama lengkap maksimal 255 karakter!',
        'jenjangpendidikan_id.required' => 'Jenjang pendidikan wajib dipilih!',
        'jenjangpendidikan_id.exists' => 'Jenjang pendidikan tidak valid!',
        'nik.required' => 'NIK wajib diisi!',
        'nik.digits' => 'NIK harus 16 digit angka!',
        // 'nik.max' => 'NIK harus 16 karakter!',
        'jeniskelamin.required' => 'Jenis kelamin wajib dipilih!',
        'jeniskelamin.in' => 'Jenis kelamin harus Laki-laki atau Perempuan!',
        'tanggallahir.required' => 'Tanggal lahir wajib diisi!',
        'tanggallahir.date' => 'Tanggal lahir tidak valid!',
        'notelepon.required' => 'Nomor telepon wajib diisi!',
        'notelepon.max' => 'Nomor telepon maksimal 20 karakter!',
        'instansi.required' => 'Instansi wajib diisi!',
        'instansi.max' => 'Instansi maksimal 255 karakter!',
    ]);

    // Simpan data
    $peserta = new pesertapelatihan();
    $peserta->agendapelatihan_id = $validated['agendapelatihan_id'];
    $peserta->namalengkap = $validated['namalengkap'] ?? null;
    $peserta->jenjangpendidikan_id = $validated['jenjangpendidikan_id'] ?? null;
    $peserta->nik = $validated['nik'] ?? null;
    $peserta->jeniskelamin = $validated['jeniskelamin'] ?? null;
    $peserta->tanggallahir = $validated['tanggallahir'] ?? null;
    $peserta->notelepon = $validated['notelepon'] ?? null;
    $peserta->instansi = $validated['instansi'] ?? null;
    $peserta->save();

    return redirect()->back()->with('update', 'Anda Berhasil Mendaftar!');
}


// DAFTAR PESERTA PELATIHAN AGENDA PELATIHAN WORKSHOP DAN LAINLAIN
public function datapesertapelatihan(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    // Query utama
    $query = agendapelatihan::query();

    // Tambahkan urutan terbaru dulu
    $query->orderBy('created_at', 'desc');

    // Jika ada pencarian
    if ($search) {
        $query->where('namakegiatan', 'LIKE', "%{$search}%")
              ->orWhere('keterangan', 'LIKE', "%{$search}%")
              ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                  $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
              });
    }

    // Pagination
    $data = $query->paginate($perPage);

    // Jika request ajax, kembalikan partial table
    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.04_pembinaan.02_datapesertapelatihan.partials.table', compact('data'))->render()
        ]);
    }

    $user = Auth::user();

    // Tampilkan view utama
    return view('frontend.new.04_bagian5.02_datapesertapelatihan.datapesertapelatihan', [
        'title' => 'Daftar Peserta Pelatihan Jasa Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user
    ]);
}


    public function datapesertapelatihanshow(Request $request, $namakegiatan)
    {
        $perPage = $request->input('perPage', 200);
        $search = $request->input('search');

        // Cari agenda pelatihan berdasarkan nama kegiatan
        $agendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

        if (!$agendapelatihan) {
            return abort(404, 'Agenda pelatihan tidak ditemukan');
        }

        // Query peserta pelatihan berdasarkan agendapelatihan_id
        $query = pesertapelatihan::where('agendapelatihan_id', $agendapelatihan->id);

        // Jika ada keyword pencarian
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('jeniskelamin', 'LIKE', "%{$search}%")
                  ->orWhere('instansi', 'LIKE', "%{$search}%")
                  ->orWhere('namalengkap', 'LIKE', "%{$search}%");
            });
        }

        $datapesertapelatihan = $query->orderBy('id', 'desc')->paginate($perPage);

        // Jika request AJAX (misalnya untuk refresh tabel via JavaScript)
        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.new.04_bagian5.02_datapesertapelatihan.partials.table', [
                    'datapeserta' => $datapesertapelatihan
                ])->render()
            ]);
        }

        $user = Auth::user();

        return view('frontend.new.04_bagian5.02_datapesertapelatihan.datapesertapelatihanshow', [
            'title' => 'Daftar Peserta Pelatihan Jasa Konstruksi',
            'data' => $agendapelatihan,
            'datapeserta' => $datapesertapelatihan,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user,
        ]);
    }


}
