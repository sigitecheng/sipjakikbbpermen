<?php

namespace App\Http\Controllers;

use App\Models\agendapelatihan;
use App\Models\agendaskk;
use App\Models\allskktenagakerjablora;
use App\Models\jabatankerja;
use App\Models\jenjang;
use App\Models\jenjangpendidikan;
use App\Models\kecamatankbb;
use App\Models\materipelatihan;
use App\Models\materipelatihanskk;
use App\Models\namasekolah;
use App\Models\pelatihan;
use App\Models\pesertapelatihan;
use App\Models\tahunpilihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



    public function agendaskkkbb()
{
    // Agenda TERAKHIR (1 data)
    $latestAgenda = agendaskk::orderBy('created_at', 'DESC')->first();

    // Semua agenda (list card)
    $data = agendaskk::orderBy('created_at', 'DESC')->paginate(4);


    return view('frontend.new.04_bagian5.03_agendaskkkbb.agendaskkkbb', [
        'title' => 'Agenda Sertifikasi Tenaga Kerja Konstruksi',
        'latestAgenda' => $latestAgenda,
        'data' => $data,
        'user' => Auth::user(),
    ]);
}



public function daftaragendaskkkbb($namakegiatan)
{
    // Cari data agenda
    $dataagendapelatihan = agendaskk::where('namakegiatan', $namakegiatan)->first();

    // Cek apakah ada data
    if (!$dataagendapelatihan) {
        return redirect()->back()->with('error', 'Data agenda pelatihan tidak ditemukan');
    }

    // Ambil sub-data materipelatihan jika data agenda ada
    $subdata = materipelatihanskk::where('agendaskk_id', $dataagendapelatihan->id)
                ->paginate(50);

    // Ambil data user saat ini
    $user = Auth::user();
    $listJenjang = jenjangpendidikan::all();
    $listjabatankerja = jabatankerja::all();
    $listnamasekolah = namasekolah::all();
    $listtahunpilihan = tahunpilihan::all();
    $listkecamatankbb = kecamatankbb::all();
    $listjenjang = jenjang::all();

    return view('frontend.new.04_bagian5.03_agendaskkkbb.daftaragendaskk', [
        'title' => 'Daftar Peserta Sertifikasi Tenaga Kerja Konstruksi',
        'data' => $dataagendapelatihan,
        'datamateripelatihan' => $subdata,
        'user' => $user,
        'listJenjang' => $listJenjang,
        'listjabatankerja' => $listjabatankerja,
        'listnamasekolah' => $listnamasekolah,
        'listtahunpilihan' => $listtahunpilihan,
        'listkecamatankbb' => $listkecamatankbb,
        'listjenjang' => $listjenjang,
    ]);
}
    public function agendaskkkbbshow($namakegiatan)
        {
        $dataartikeljakon = agendaskk::where('namakegiatan', $namakegiatan)->first();
        $dataagendapelatihan = agendaskk::paginate(4);
    $user = Auth::user();

    return view('frontend.new.04_bagian5.03_agendaskkkbb.showagendatkkkbb', [
        'title' => 'Agenda Sertifikasi Tenaga Kerja Konstruksi',
        'datashow' => $dataartikeljakon,
        'dataagendapelatihan' => $dataagendapelatihan,
        'data' => $dataagendapelatihan,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }


public function agendaskkkbbcreatenew(Request $request)
{

    $request->validate([

    // ================= RELASI =================
    'agendaskk_id' => 'required|string',
    // 'user_id' => 'required|string',
    'jenjang_id' => 'required|string',

    // ================= DATA PRIBADI =================
    'namalengkap' => 'required|string|max:255',
    'nik' => 'required|string|max:20',
    'tempatlahir' => 'nullable|string|max:255',
    'ttl' => 'required|date',
    'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
    'alamat' => 'nullable|string',
    'notelepon' => 'nullable|string|max:20',
    'email' => 'nullable|email|max:255',

    // ================= DATA PENDIDIKAN =================
    'jenjangpendidikan_id' => 'required',
    // 'namasekolah_id' => 'nullable',
    'tahunlulus' => 'nullable|digits:4',
    'tahunpilihan_id' => 'required',

    // ================= PEKERJAAN & WILAYAH =================
    'jabatankerja_id' => 'required',
    'kecamatankbb_id' => 'required',

    // ================= FILE UPLOAD =================
    'skkanda' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:20480',
    'uploadktp' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:20480',
    'uploadfoto' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',
    'uploadijazah' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:20480',
    'uploadpengalaman' => 'nullable|file|mimes:pdf|max:20480',
    'uploadkebenarandata' => 'nullable|file|mimes:pdf|max:20480',
    'uploadnpwp' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:20480',
    'uploaddaftarriwayathidup' => 'nullable|file|mimes:pdf|max:20480',

    // ================= INFORMASI TAMBAHAN =================
    'namaasosiasi' => 'nullable|string|max:255',
    'punyaskk' => 'nullable|in:Ya,Tidak',
    'punyasiki' => 'nullable|in:Ya,Tidak',
    'portalpupr' => 'nullable|in:Ya,Tidak',
    'siappatuh' => 'nullable|in:Ya,Tidak',

], [

    // ================= PESAN UMUM =================
    'required' => ':attribute wajib diisi.',
    'string' => ':attribute harus berupa teks.',
    'integer' => ':attribute harus berupa angka.',
    'date' => ':attribute harus berupa tanggal yang valid.',
    'email' => ':attribute harus menggunakan format email yang valid.',
    'digits' => ':attribute harus terdiri dari :digits digit.',
    'max' => ':attribute maksimal :max karakter.',
    'in' => 'Pilihan :attribute tidak valid.',

    // ================= FILE =================
    'file' => ':attribute harus berupa file.',
    'mimes' => ':attribute harus berformat :values.',
    'skkanda.max' => 'Ukuran file KTP maksimal 20 MB.',
    'uploadktp.max' => 'Ukuran file KTP maksimal 20 MB.',
    'uploadfoto.max' => 'Ukuran file Foto maksimal 20 MB.',
    'uploadijazah.max' => 'Ukuran file Ijazah maksimal 20 MB.',
    'uploadpengalaman.max' => 'Ukuran file Pengalaman maksimal 20 MB.',
    'uploadkebenarandata.max' => 'Ukuran file Surat Pernyataan maksimal 20 MB.',
    'uploadnpwp.max' => 'Ukuran file NPWP maksimal 20 MB.',
    'uploaddaftarriwayathidup.max' => 'Ukuran file CV maksimal 20 MB.',

]);

    $data = new allskktenagakerjablora();

    // AUTO
    $data->agendaskk_id = $request->agendaskk_id;
    $data->user_id = Auth::id();

    // DATA
    $data->skkanda = $request->skkanda ?? null ;
    $data->jenjang_id = $request->jenjang_id ?? null ;
    $data->namalengkap = $request->namalengkap ?? null ;
    $data->nik = $request->nik ?? null ;
    $data->tempatlahir = $request->tempatlahir ?? null ;
    $data->ttl = $request->ttl ?? null ;
    $data->jeniskelamin = $request->jeniskelamin ?? null ;
    $data->alamat = $request->alamat ?? null ;
    $data->notelepon = $request->notelepon ?? null ;
    $data->email = $request->email ?? null ;
    $data->jenjangpendidikan_id = $request->jenjangpendidikan_id ?? null ;
    // $data->namasekolah_id = $request->namasekolah_id ?? null ;
    $data->tahunlulus = $request->tahunlulus ?? null ;
    $data->tahunpilihan_id = $request->tahunpilihan_id ?? null ;
    $data->jabatankerja_id = $request->jabatankerja_id ?? null ;
    $data->kecamatankbb_id = $request->kecamatankbb_id ?? null ;
    $data->namaasosiasi = $request->namaasosiasi ?? null ;
    $data->punyaskk = $request->punyaskk ?? null ;
    $data->punyasiki = $request->punyasiki ?? null ;
    $data->portalpupr = $request->portalpupr ?? null ;
    $data->siappatuh = $request->siappatuh ?? null ;
    // $data->user_id = Auth::id();
    // ================= UPLOAD KE PUBLIC =================
    $path = public_path('uploads/skk');
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    $uploadFields = [
        'skkanda',
        'uploadktp',
        'uploadfoto',
        'uploadijazah',
        'uploadpengalaman',
        'uploadkebenarandata',
        'uploadnpwp',
        'uploaddaftarriwayathidup'
    ];

    foreach ($uploadFields as $field) {
        if ($request->hasFile($field)) {
            $file = $request->file($field);
            $filename = time().'_'.$field.'.'.$file->getClientOriginalExtension();
            $file->move($path, $filename);

            // simpan URL ke DB
            $data->$field = 'uploads/skk/'.$filename;
        }
    }

    // ================= SIMPAN =================
    $data->save();

    return redirect('/dashboard')->with('create', 'Pendaftaran Berhasil');
}


public function datapersetatkkkbb(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    // Query utama
    $query = agendaskk::query();

    // Tambahkan urutan terbaru dulu
    $query->orderBy('created_at', 'desc');

    // Jika ada pencarian
    if ($search) {
        $query->where('namakegiatan', 'LIKE', "%{$search}%")
            //   ->orWhere('keterangan', 'LIKE', "%{$search}%")
              ;
    }

    // Pagination
    $data = $query->paginate($perPage);

    // Jika request ajax, kembalikan partial table
    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.04_pembinaan.03_agendaskkkbb.partials.table', compact('data'))->render()
        ]);
    }

    $user = Auth::user();

    // Tampilkan view utama
    return view('frontend.new.04_bagian5.03_agendaskkkbb.datapesertatkkkbb', [
        'title' => 'Daftar Peserta sertifikasi Tenaga Kerja',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'user' => $user
    ]);
}


    public function datapersetatkkkbbshow(Request $request, $namakegiatan)
    {
        $perPage = $request->input('perPage', 200);
        $search = $request->input('search');

        // Cari agenda pelatihan berdasarkan nama kegiatan
        $agendapelatihan = agendaskk::where('namakegiatan', $namakegiatan)->first();

        if (!$agendapelatihan) {
            return abort(404, 'Agenda Sertifikasi Tenaga Kerja tidak ditemukan');
        }

        // Query peserta pelatihan berdasarkan agendapelatihan_id
        $query = allskktenagakerjablora::where('agendaskk_id', $agendapelatihan->id);

        // Jika ada keyword pencarian
      if ($search) {
    $query->where(function ($q) use ($search) {
        $q->where('namalengkap', 'LIKE', "%{$search}%")
          ->orWhere('jeniskelamin', 'LIKE', "%{$search}%")
          ->orWhereHas('kecamatankbb', function ($k) use ($search) {
              $k->where('kecamatankbb', 'LIKE', "%{$search}%");
          });
    });
}


        $datapesertapelatihan = $query->orderBy('id', 'desc')->paginate($perPage);

        // Jika request AJAX (misalnya untuk refresh tabel via JavaScript)
        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.new.04_bagian5.03_agendaskkkbb.partials.table', [
                    'datapeserta' => $datapesertapelatihan
                ])->render()
            ]);
        }

        $user = Auth::user();

        return view('frontend.new.04_bagian5.03_agendaskkkbb.datapesertatkkkbbshow', [
            'title' => 'Daftar Peserta Pelatihan Jasa Konstruksi',
            'data' => $agendapelatihan,
            'datapeserta' => $datapesertapelatihan,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user,
        ]);
    }


}
