<?php


use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DatajakonController;
use App\Http\Controllers\FedashboardController;
use App\Http\Controllers\AgendaskkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\AdministratorController;
// use App\Http\Controllers\StrukturController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\SettingmenuController;
use App\Http\Controllers\BujkkontraktorController;
use App\Http\Controllers\BujkkonsultanController;
use App\Http\Controllers\DatastatistikajakonbloraController;
use App\Http\Controllers\SkktenagakerjabloraController;
use App\Http\Controllers\PembinaanController;
use App\Http\Controllers\PengawasanbujkController;
use App\Http\Controllers\KecelakaankerjamasjakiController;
use App\Http\Controllers\TertibjasakonstruksiController;
use App\Http\Controllers\RantaipasokbloraController;
use App\Http\Controllers\TokobangunanbloraController;
use App\Http\Controllers\ShstbloraController;
use App\Http\Controllers\SatuanhargamaterialController;
use App\Http\Controllers\BeritajakonController;
use App\Http\Controllers\KritikdansaranController;
use App\Http\Controllers\AllskktenagakerjabloraController;
use App\Http\Controllers\PaketpekerjaanmasjakiController;
use App\Http\Controllers\PesertapelatihanController;
use App\Http\Controllers\AndroidVersionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\DownloadExcelController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\SettingDataController;
use App\Http\Controllers\VerifikasiController;

use App\Models\tertibjasakonstruksi;
// MAS JAKI

// atas
use App\Http\Controllers\GiskbbController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\SkktenagakerjaController;
use App\Http\Controllers\UijkController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PermenpuController;
use App\Http\Controllers\RantaipasokmaterialController;
use App\Http\Controllers\UndangundangController;
use Database\Factories\DatajakonFactory;
use Database\Factories\SkktenagakerjaFactory;
use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ------------------------- FRONTEND HALAMAN UTAMA SIPJAKI BANDUNG BARAT --------------------------

Route::get('/', [FedashboardController::class, 'index']);
Route::get('/new', [FedashboardController::class, 'new']);
// Route::post('/qapertanyaanstore', [FedashboardController::class, 'createbarustorepertanyaan'])->middleware('auth')->name('create.storeqapertanyaanbaru');
// Route::post('/qapertanyaanstorebaru', [FedashboardController::class, 'createstorepertanyaanpublik'])->middleware('auth')->name('createpertanyaanstorebaru');
// Route::post('/qapertanyaanstorebaru', [AdministratorController::class, 'createstorepertanyaanpublik'])->name('createpertanyaanstorebaru');




// Route::get('/portalberita', function () {
//     // return view('welcome');
//     return view('portalberita', [
//         'title' => 'Portal Berita',
//     ]);
// });


Route::get('/404', function () {
    // return view('welcome');
    return view('404', [
        'title' => 'Under Constructions',
    ]);
});

Route::get('/bahan2', function () {
    // return view('welcome');
    return view('frontend.00_full.bahan2');
});

// ---------------------- 01 PROFIL FRONTEND SIPJAKI KBB -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/profil/struktur', [StrukturController::class, 'strukturpuprbandungbarat']);

// =============================================================================================
// -------- BAGIAN 2 ---------------------------------
Route::get('/profil/rencanastrategis', [StrukturController::class, 'rencanastrategispuprbandungbarat']);

// =============================================================================================
// -------- BAGIAN 3 ---------------------------------
Route::get('/profil/tupoksi', [StrukturController::class, 'tupoksifekbb']);


// ------------------------- 02 BAGIAN BERITA SIPJAKI KBB --------------------------
// -------- BAGIAN 1 TAMPILAN BERITA ---------------------------------
Route::get('/berita', [FedashboardController::class, 'navbarberita']);
Route::get('/portalberita/{judul}', [FedashboardController::class, 'portalberitashowByJudul']);

// -------- BAGIAN 2 KEGIATAN SERTIFIKASI SIPJAKI KABUPATEN BANDUNG BARAT ---------------------------------
Route::get('/kegiatansertifikasi', [FedashboardController::class, 'kegiatansertifikasi']);
Route::get('/kegiatansertifikasi/{judul_kegiatan}', [FedashboardController::class, 'kegiatansertifikasishowByJudul']);
Route::get('/detailskegiatan/{jabatan}', [FedashboardController::class, 'detailskegiatanshowByJudul']);

// -------- BAGIAN 3 AGENDA SERTIFIKASI ---------------------------------
Route::get('/feagendasertifikasi', [FedashboardController::class, 'feagendasertifikasipekerja']);

// ---------------------- 03 DATA JAKON -----------------------//
// -------- BAGIAN 01 PENGAWASAN DAN KETERTIBAN  ---------------------------------
Route::get('/datajakon/pengawasan', [DatajakonController::class, 'pengawasan']);
// Route::get('/jakonpengwasandanketertiban', [DatajakonController::class, 'fepengawasandanketertiban']);

// -------- BAGIAN 02 DATA ASOSIASI PENGUSAHA  ---------------------------------
Route::get('/datajakon/asosiasi', [DatajakonController::class, 'asosiasi']);
Route::get('/datajakon/asosiasi/{nama_asosiasi}', [DatajakonController::class, 'asosiasishowfrontend']);

// -------- BAGIAN 03 STANDAR BIAYA UMUM JASA KONSTRUKSI  ---------------------------------
Route::get('/datajakon/standarbiayaumum', [DatajakonController::class, 'standarbiayaumum']);
Route::get('/datajakon/standarbiayaumum/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudulfe']);

Route::get('/datajakon/fesbulampiran3', [DatajakonController::class, 'fesbulampiran3']);
Route::get('/datajakon/fesbulampiran3/{judul}', [DatajakonController::class, 'fesbulampiran3showbyjudulfe']);

Route::get('/datajakon/fesbulampiran2', [DatajakonController::class, 'fesbulampiran2']);
Route::get('/datajakon/fesbulampiran2/{judul}', [DatajakonController::class, 'fesbulampiran2showbyjudulfe']);

Route::get('/datajakon/fesbulampiran1', [DatajakonController::class, 'fesbulampiran1']);
Route::get('/datajakon/fesbulampiran1/{judul}', [DatajakonController::class, 'fesbulampiran1showbyjudulfe']);


// -------- BAGIAN 04 PROGRESS PAKET PEKERJAAN ---------------------------------
Route::get('/datajakon/paketpekerjaan', [DatajakonController::class, 'paketpekerjaan']);


// ---------------------- 04 TENAGA KERJA -----------------------//
// -------- BAGIAN 01 ---------------------------------
Route::get('/tenagakerja/skaskt', [SkktenagakerjaController::class, 'feskktenagakerja']);
Route::get('/tenagakerja/skaskt/{nama}', [SkktenagakerjaController::class, 'feskktenagakerjashowByName']);
Route::get('/tenagakerja/showskaskt/{nama}', [SkktenagakerjaController::class, 'feskktenagakerjadokumentasishowByName']);

// RUTE UNTUK MENCARI BERDASARKAN KECAMATAN KOTA
Route::get('/skk/kecamatan', [SkktenagakerjaController::class, 'listkecamatan']);
Route::get('/tenagakerja/kecamatan', [SkktenagakerjaController::class, 'feskktenagakerjakecamatanshowBykecamatan']);

// RUTE BERDASARKAN DESA
Route::get('/skk/desa', [SkktenagakerjaController::class, 'listdesa']);
Route::get('/tenagakerja/desa', [SkktenagakerjaController::class, 'feskktenagakerjadesashowBydesa']);

// RUTE BERDASARKAN KETERAMPILAN PARA PEKERJA
Route::get('/skk/keterampilan', [SkktenagakerjaController::class, 'listketerampilan']);
Route::get('/tenagakerja/keterampilan', [SkktenagakerjaController::class, 'feskktenagakerjaketerampilanshowByketerampilan']);

// RUTE BERDASARKAN TAHUN BIMBINGAN TEKNIS PARA PEKERJA KONSTRUKSI
Route::get('/skk/register', [SkktenagakerjaController::class, 'listregister']);
Route::get('/tenagakerja/bimtek', [SkktenagakerjaController::class, 'feskktenagakerjabimtekshowBybimtek']);

// RUTE UNTUK MENCARI DATA BERDASARKAN STATISTIKA
Route::get('/skk/statistika', [SkktenagakerjaController::class, 'liststatistika']);
Route::get('/skkchart/keterampilan', [SkktenagakerjaController::class, 'chartketerampilan']);
Route::get('/skkskkchart/kecamatan', [SkktenagakerjaController::class, 'chartkecamatan']);
Route::get('/skkchart/desa', [SkktenagakerjaController::class, 'chartdesa']);
Route::get('/skkchart/register', [SkktenagakerjaController::class, 'chartregister']);

// -------- BAGIAN 02 ---------------------------------
// RUTE UNTUK MEMETAKAN LOKASI PETA WILAYAH KABUPATEN BANDUNG BARAT
Route::get('/giskbb', [GiskbbController::class, 'index']);
Route::get('/giskbb/{nama_kecamatan}', [GiskbbController::class, 'namakecamatanshowBykecamatan']);


// -------- BAGIAN 03 ---------------------------------
// RUTE UNTUK MENJALANKAN PENANGGUNG JAWAB TEKNIS
Route::get('/tenagakerja/pjt', [SkktenagakerjaController::class, 'penanggungjawabteknis']);
Route::get('/tenagakerja/timpembina', [SkktenagakerjaController::class, 'timpembinajasakonstruksi']);

// ---------------------- 05 INFORMASI SPM -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/spm/informasispm', function () {
    // return view('welcome');
    return view('frontend.05_spm.01_informasispm', [
        'title' => 'Standar Penetapan Kemampuan'
    ]);
});

// ---------------------- 08 UIJK -----------------------//
// -------- BAGIAN 08 ---------------------------------
Route::get('/ijinusahajasakonstruksi', [UijkController::class, 'index']);
Route::get('/uijk/{nama_perusahaan}', [UijkController::class, 'feuijkshowByName']);
Route::get('/uijkpt', [UijkController::class, 'uijkpt']);
Route::get('/uijkcv', [UijkController::class, 'uijkcv']);
Route::get('/2020', [UijkController::class, '2020']);

Route::get('/ijinusahajasakonstruksi/katperusahaan', [UijkController::class, 'kategoriperusahaan']);
Route::get('/iujk/katperusahaan', [UijkController::class, 'kategoriperusahaanfebyname']);

Route::get('/ijinusahajasakonstruksi/bidangusaha', [UijkController::class, 'bidangusaha']);
Route::get('/iujk/bidangusaha', [UijkController::class, 'bidangusahafebyname']);

Route::get('/ijinusahajasakonstruksi/tahunregistrasi', [UijkController::class, 'tahunregistrasi']);
Route::get('/iujk/tahunregistrasi', [UijkController::class, 'tahunregistrasifebyname']);

Route::get('/ijinusahajasakonstruksi/statistika', [UijkController::class, 'iujkstatistika']);
// Route::get('/iujk/tahunregistrasi', [UijkController::class, 'tahunregistrasifebyname']);



// ---------------------- 09 TDUP -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/tdup', function () {
    // return view('welcome');
    return view('frontend.09_tdup.01_tdup', [
        'title' => 'Tanda Daftar Usaha Perseroan'
    ]);
});


// ---------------------- 10 PELATIHAN -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/pelatihan/kecelakaan', [PelatihanController::class, 'index']);

// ---------------------- 11 PERATURAN PERATURAN -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/peraturan/undangundang', [PeraturanController::class, 'feundangundang']);

// -------- BAGIAN 2 ---------------------------------
Route::get('/peraturan/pemerintah', [PeraturanController::class, 'fepemerintah']);

// -------- BAGIAN 3 ---------------------------------
Route::get('/peraturan/presiden', [PeraturanController::class, 'fepresiden']);

// -------- BAGIAN 4 ---------------------------------
Route::get('/peraturan/menteri', [PeraturanController::class, 'fementeri']);
Route::get('/peraturan/menteri/{judul}', [PeraturanController::class, 'fementerishowByJudul']);

// -------- BAGIAN 5 ---------------------------------
Route::get('/peraturan/keputusanmenteri', [PeraturanController::class, 'feskmenteri']);
Route::get('/peraturan/keputusanmenteri/{judul}', [PeraturanController::class, 'feskmenterishowByJudul']);

// -------- BAGIAN 6 ---------------------------------
Route::get('/peraturan/suratedaranmenteri', [PeraturanController::class, 'suratedaranmenteri']);
Route::get('/peraturan/suratedaranmenteri/{judul}', [PeraturanController::class, 'suratedaranmenterishowByJudul']);

// -------- BAGIAN 7 ---------------------------------
Route::get('/peraturan/referensi', [PeraturanController::class, 'fereferensi']);

// -------- BAGIAN 8 ---------------------------------
Route::get('/peraturan/daerah', [PeraturanController::class, 'feperdaerah']);
Route::get('/peraturan/daerah/{judul}', [PeraturanController::class, 'feperdaerahshowByJudul']);

// -------- BAGIAN 9 ---------------------------------
Route::get('/peraturan/gubernur', [PeraturanController::class, 'fegubernur']);

// -------- BAGIAN 10 ---------------------------------
Route::get('/peraturan/walikotadanbupati', [PeraturanController::class, 'feperbupatiwalikota']);
Route::get('/peraturan/walikotadanbupati/{judul}', [PeraturanController::class, 'feperbupatiwalikotashowByJudul']);

// -------- BAGIAN 11 ---------------------------------
Route::get('/peraturan/suratkeputusan', [PeraturanController::class, 'fesuratkeputusan']);
Route::get('/peraturan/suratkeputusan/{judul}', [PeraturanController::class, 'fesuratkeputusanshowByJudul']);


// ================================================================================================================================================
// ================================================================================================================================================
// ================================================================================================================================================

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');

// ------------------- BACKEND QA PERTANYAAN ---------------------------

// KATEGORI ADMIN
Route::get('/qapertanyaan', [AdministratorController::class, 'qapertanyaan'])->middleware('auth');
Route::get('/qapertanyaancreate', [AdministratorController::class, 'createqapertanyaan'])->middleware('auth');
Route::post('/qapertanyaanstore', [AdministratorController::class, 'createstoreqapertanyaan'])->name('create.qapertanyaan');
Route::post('/qapertanyaan/{id}', [AdministratorController::class, 'deleteqapertanyaan'])
->middleware('auth')
->name('delete.qapertanyaan');

// ------------------- BACKEND BAGIAN HIMBAUAN DINAS ---------------------------

// KATEGORI HIMBAUAN DINAS
Route::get('/himbauandinas', [AdministratorController::class, 'himbauandinas'])->middleware('auth');
Route::get('/himbauandinas/{nama_lengkap}', [AdministratorController::class, 'himbauandinasshowbyname'])->middleware('auth');
Route::get('/himbauandinas/update/{nama_lengkap}', [AdministratorController::class, 'updatehimbauandinas'])->middleware('auth')->name('updateshow.himbauandinas');
Route::post('/himbauandinas/{nama_lengkap}', [AdministratorController::class, 'createupdatehimbauandinas'])->middleware('auth')->name('update.himbauandinas');

// -------- BAGIAN 01 BACKEND PROFIL ---------------------------------
Route::get('/struktur', [StrukturController::class, 'index'])->middleware('auth');
Route::get('/struktur/update/{judul}', [StrukturController::class, 'updatestruktur'])->middleware('auth')->name('update.struktur');
Route::post('/struktur/{judul}', [StrukturController::class, 'createupdatestruktur'])->middleware('auth')->name('updatestore.struktur');

Route::get('/renstra', [StrukturController::class, 'renstra'])->middleware('auth');
Route::get('/renstra/update/{judul}', [StrukturController::class, 'updaterenstra'])->middleware('auth')->name('update.renstra');
Route::post('/renstra/{judul}', [StrukturController::class, 'createupdaterenstra'])->middleware('auth')->name('updatestore.renstra');

Route::get('/tupoksi', [StrukturController::class, 'tupoksi'])->middleware('auth');
Route::get('/tupoksi/update/{judul}', [StrukturController::class, 'updatetupoksi'])->middleware('auth')->name('update.tupoksi');
Route::post('/tupoksi/{judul}', [StrukturController::class, 'createupdatetupoksi'])->middleware('auth')->name('updatestore.tupoksi');


// -------- BAGIAN 02 BACKEND DATA BERITA JASA KONSTRUKSI  ---------------------------------
//  -------------- DATA BERITA UNTUK BACKEND JASA KONSTRUKSI =-------------------------------------
Route::get('/databerita', [BeritaController::class, 'databerita'])->middleware('auth');
Route::get('/databerita/{judul}', [BeritaController::class, 'databeritashowbyjudul'])->middleware('auth');
Route::get('/databerita/update/{judul}', [BeritaController::class, 'updatedataberita'])->middleware('auth')->name('updateshow.databerita');
Route::post('/databeritaupdatestore/{judul}', [BeritaController::class, 'createupdatedataberita'])->middleware('auth')->name('update.databeritanews');
Route::get('/databeritacreate', [BeritaController::class, 'createnewdataberita'])->middleware('auth');
Route::post('/databeritastore', [BeritaController::class, 'createnewstoredataberita'])->middleware('auth')->name('create.databerita');

Route::post('/databerita/{judul}', [BeritaController::class, 'deletedataberita'])
->middleware('auth')
->name('delete.databerita');

//  -------------- DATA BERITA AGENDA BACKEND JASA KONSTRUKSI =-------------------------------------
Route::get('/beritaagenda', [BeritaController::class, 'beritaagenda'])->middleware('auth');
Route::get('/beritaagenda/{nama_agenda}', [BeritaController::class, 'beritaagendashowbyjudul'])->middleware('auth');
Route::get('/beritaagenda/update/{nama_agenda}', [BeritaController::class, 'updateberitaagenda'])->middleware('auth')->name('updateshow.beritaagenda');
Route::post('/beritaagendaupdatestore/{nama_agenda}', [BeritaController::class, 'createupdateberitaagenda'])->middleware('auth')->name('update.beritaagenda');
Route::get('/beritaagendacreate', [BeritaController::class, 'createnewberitaagenda'])->middleware('auth');
Route::post('/beritaagendastore', [BeritaController::class, 'createnewstoreberitaagenda'])->middleware('auth')->name('create.beritaagenda');

Route::post('/beritaagenda/{id}', [BeritaController::class, 'deleteberitaagenda'])
->middleware('auth')
->name('delete.newsberitaagenda');

//  -------------- DOKUMENTASI PELATIHAN TENTANG JASA KONSTRUKSI =-------------------------------------
Route::get('/dokumentasipelatihan', [BeritaController::class, 'dokumentasipelatihan'])->middleware('auth');
Route::get('/dokumentasipelatihan/{judul_kegiatan}', [BeritaController::class, 'dokumentasipelatihanshowbyjudul'])->middleware('auth');
Route::get('/dokumentasipelatihan/update/{judul_kegiatan}', [BeritaController::class, 'updatedokumentasipelatihan'])->middleware('auth')->name('updateshow.dokumentasipelatihan');
Route::post('/dokumentasipelatihanstore/{judul_kegiatan}', [BeritaController::class, 'createupdatedokumentasipelatihan'])->middleware('auth')->name('update.dokumentasipelatihan');
Route::get('/dokumentasipelatihancreate', [BeritaController::class, 'createdokumentasipelatihan'])->middleware('auth');
Route::post('/dokumentasipelatihancreatestore', [BeritaController::class, 'createstoredokumentasipelatihan'])->middleware('auth')->name('newcreatestore.dokumentasipelatihan');

Route::post('/dokumentasipelatihan/{id}', [BeritaController::class, 'deletedokumentasipelatihan'])
->middleware('auth')
->name('delete.dokumentasipelatihan');

//  -------------- ACARA PELATIHAN TENTANG JASA KONSTRUKSI =-------------------------------------
Route::get('/acarapelatihan', [BeritaController::class, 'acarapelatihan'])->middleware('auth');
Route::get('/acarapelatihan/{judul_kegiatan}', [BeritaController::class, 'acarapelatihanshowbyjudul'])->middleware('auth');
Route::get('/acarapelatihandetails/{judul_kegiatan}', [BeritaController::class, 'acarapelatihandetailsshowbyjudul'])->middleware('auth');
Route::get('/acarapelatihanupdate/{judul_kegiatan}', [BeritaController::class, 'updateacarapelatihandetails'])->middleware('auth')->name('updateshow.acarapelatihan');
Route::post('/acarapelatihanstore/{judul_kegiatan}', [BeritaController::class, 'createupdateacarapelatihan'])->middleware('auth')->name('update.acarapelatihan');
Route::get('/acarapelatihancreate', [BeritaController::class, 'createacarapelatihan'])->middleware('auth');
Route::post('/acarapelatihancreatestore', [BeritaController::class, 'createstoreacarapelatihan'])->middleware('auth')->name('newcreatestore.acarapelatihan');

Route::post('/acarapelatihandelete/{judul_kegiatan}', [BeritaController::class, 'deletedetailsacarapelatihannew'])
->middleware('auth')
->name('delete.acaradetailspelatihandetailsnew');

// -------- BAGIAN 03 BACKEND DATA JASA KONSTRUKSI BANGUNAN GEDUNG PUPR ---------------------------------

// KETERTIBAN DAN PENGAWASAN
// =-====================================================================================================
Route::get('/pengawasandanketertiban', [DatajakonController::class, 'pengawasandanketertiban'])->middleware('auth');
Route::get('/pengawasandanketertiban/{judul}', [DatajakonController::class, 'pengawasandanketertibanshowbyjudul'])->middleware('auth');
Route::get('/pengawasandanketertiban/update/{judul}', [DatajakonController::class, 'updatepengawasandanketertiban'])->middleware('auth')->name('update.pengawasandanketertiban');
Route::post('/pengawasandanketertiban/{judul}', [DatajakonController::class, 'createupdatepengawasandanketertiban'])->middleware('auth')->name('updatestore.pengawasandanketertiban');
Route::get('/pengawasandanketertibancreate', [DatajakonController::class, 'createpengawasandanketertiban'])->middleware('auth');
Route::post('/pengawasandanketertibanstore', [DatajakonController::class, 'createstorepengawasandanketertiban'])->middleware('auth')->name('create.pengawasandanketertiban');

Route::post('/pengawasandanketertibandelete/{id}', [DatajakonController::class, 'deletepengawasandanketertiban'])
->middleware('auth')
->name('delete.pengawasandanketertiban');

// --- ASOSIASI PENGUSAHA BACKEND JASA KONSTRUKSI ----------------------------
Route::get('/asosiasipengusaha', [DatajakonController::class, 'asosiasipengusaha'])->middleware('auth');
Route::get('/asosiasipengusaha/{nama_asosiasi}', [DatajakonController::class, 'asosiasipengusahashowbyjudul'])->middleware('auth');
Route::get('/asosiasipengusaha/update/{nama_asosiasi}', [DatajakonController::class, 'updateasosiasipengusaha'])->middleware('auth')->name('update.asosiasipengusaha');
Route::post('/asosiasipengusaha/{nama_asosiasi}', [DatajakonController::class, 'createupdateasosiasipengusaha'])->middleware('auth')->name('updatestore.newasosiasipengusaha');
Route::get('/asosiasipengusahacreate', [DatajakonController::class, 'createasosiasipengusaha'])->middleware('auth');
Route::post('/asosiasipengusahastore', [DatajakonController::class, 'createstoreasosiasipengusaha'])->middleware('auth')->name('create.asosiasipengusaha');

Route::post('/asosiasipengusahadelete/{judul}', [DatajakonController::class, 'deleteasosiasipengusaha'])
->middleware('auth')
->name('delete.asosiasipengusaha');

// ----------------------------------- STANDAR BIAYA UMUM
Route::get('/standarbiayaumum', [StrukturController::class, 'standarbiayaumum'])->middleware('auth');
Route::get('/standarbiayaumum/{judul}', [StrukturController::class, 'standarbiayaumumshowbyjudul'])->middleware('auth');
Route::get('/standarbiayaumum/update/{judul}', [StrukturController::class, 'updatestandarbiayaumum'])->middleware('auth')->name('update.standarbiayaumum');
Route::post('/standarbiayaumum/{judul}', [StrukturController::class, 'createupdatestandarbiayaumum'])->middleware('auth')->name('updatestore.standarbiayaumum');
Route::get('/standarbiayaumumcreate', [StrukturController::class, 'createstandarbiayaumum'])->middleware('auth');
Route::post('/standarbiayaumumstore', [StrukturController::class, 'createstorestandarbiayaumum'])->middleware('auth')->name('create.standarbiayaumum');

Route::post('/standarbiayaumumdelete/{judul}', [StrukturController::class, 'deletestandarbiayaumum'])
->middleware('auth')
->name('delete.standarbiayaumum');

// ----------------------------------- PAKET PEKERJAAN ---------------------------------
Route::get('/paketpekerjaan', [DatajakonController::class, 'bepaketpekerjaan'])->middleware('auth');
Route::get('/paketpekerjaan/{instansi}', [DatajakonController::class, 'paketpekerjaanshowbyjudul'])->middleware('auth');
Route::get('/paketpekerjaan/update/{instansi}', [DatajakonController::class, 'updatepaketpekerjaan'])->middleware('auth')->name('update.paketpekerjaan');
Route::post('/paketpekerjaan/{instansi}', [DatajakonController::class, 'createupdatepaketpekerjaan'])->middleware('auth')->name('updatestore.paketpekerjaan');
Route::get('/paketpekerjaancreate', [DatajakonController::class, 'createpaketpekerjaan'])->middleware('auth');
Route::post('/paketpekerjaanstore', [DatajakonController::class, 'createstorepaketpekerjaan'])->middleware('auth')->name('create.paketpekerjaan');

Route::post('/paketpekerjaandelete/{judul}', [DatajakonController::class, 'deletepaketpekerjaan'])
->middleware('auth')
->name('delete.paketpekerjaan');


// SBU LAMPIRAN 1
Route::get('/sbulampiran1', [StrukturController::class, 'sbulampiran1'])->middleware('auth');
Route::get('/sbulampiran1/{judul}', [StrukturController::class, 'sbulampiran1showbyjudul'])->middleware('auth');

// SBU LAMPIRAN 2
Route::get('/sbulampiran2', [StrukturController::class, 'sbulampiran2'])->middleware('auth');
Route::get('/sbulampiran2/{judul}', [StrukturController::class, 'sbulampiran2showbyjudul'])->middleware('auth');

// SBU LAMPIRAN 3
Route::get('/sbulampiran3', [StrukturController::class, 'sbulampiran3'])->middleware('auth');
Route::get('/sbulampiran3/{judul}', [StrukturController::class, 'sbulampiran3showbyjudul'])->middleware('auth');


// ------------------------ BAGIAN 03 BACKEND TENAGA KERJA -------------------
// ================================ TENAGA KERJA ============================================================================
Route::get('/beskktenagakerja', [SkktenagakerjaController::class, 'index'])->middleware('auth');
Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
Route::get('/showtenagakerja/{nama}', [SkktenagakerjaController::class, 'showkegiatanshowByName'])->name('skktenagakerjakegiatan.show');

Route::get('/newtenagakerja/update/{nama}', [SkktenagakerjaController::class, 'updatetenagakerja'])->middleware('auth')->name('update.tenagakerja');
Route::post('/newtenagakerja/{nama}', [SkktenagakerjaController::class, 'createupdatetenagakerja'])->middleware('auth')->name('updatestore.tenagakerja');
Route::get('/newtenagakerjacreate', [SkktenagakerjaController::class, 'createtenagakerja'])->middleware('auth');
Route::post('/newtenagakerjastore', [SkktenagakerjaController::class, 'createstoretenagakerja'])->middleware('auth')->name('create.tenagakerja');

Route::post('/newtenagakerjadelete/{nama}', [SkktenagakerjaController::class, 'deletetenagakerja'])
->middleware('auth')
->name('delete.tenagakerja');

// ======================================== PENANGGUNG JAWAB TEKNIS ====================================================================
Route::get('/datapjt', [SkktenagakerjaController::class, 'datapjt'])->middleware('auth');
Route::get('/datapjt/{nama_lengkap}', [SkktenagakerjaController::class, 'datapjtshowByName'])->name('datapjt.show');
Route::get('/datapjt/update/{nama_lengkap}', [SkktenagakerjaController::class, 'updatedatapjt'])->middleware('auth')->name('update.datapjt');
Route::post('/datapjtupdatestore/{id}', [SkktenagakerjaController::class, 'createupdatedatapjtnew'])->middleware('auth')->name('updatestore.datapjt');
Route::get('/datapjtcreate', [SkktenagakerjaController::class, 'createdatapjt'])->middleware('auth');
Route::post('/datapjtstorenewdata', [SkktenagakerjaController::class, 'createstoredatapjt'])->middleware('auth')->name('create.datapjt');

Route::post('/datapjt/{nama_lengkap}', [SkktenagakerjaController::class, 'deletedatapjt'])
->middleware('auth')
->name('delete.datapjt');

// ======================================== TIMPEMBINA JASA KONSTRUKSI ====================================================================
Route::get('/timpembina', [SkktenagakerjaController::class, 'timpembina'])->middleware('auth');
// Route::get('/timpembina/{nama_lengkap}', [SkktenagakerjaController::class, 'timpembinashowByName'])->name('timpembina.show');
Route::get('/timpembina/update/{nama_lengkap}', [SkktenagakerjaController::class, 'updatedatatimpembina'])->middleware('auth')->name('update.timpembina');
Route::post('/timpembinaupdatestore/{nama_lengkap}', [SkktenagakerjaController::class, 'createupdatetimpembina'])->middleware('auth')->name('updatestore.timpembina');
Route::get('/timpembinacreate', [SkktenagakerjaController::class, 'createtimpembina'])->middleware('auth');
Route::post('/timpembinastore', [SkktenagakerjaController::class, 'createstoretimpembina'])->middleware('auth')->name('create.timpembina');

Route::post('/timpembina/{nama_lengkap}', [SkktenagakerjaController::class, 'deletedatatimpembina'])
->middleware('auth')
->name('delete.timpembina');

// ======================================== DATA IUJK JASA KONSTRUKSI ====================================================================
Route::get('/dataiujk', [UijkController::class, 'dataiujk'])->middleware('auth');
Route::get('/dataiujk/{nama_perusahaan}', [UijkController::class, 'dataiujkshowByName'])->name('dataiujk.show');
Route::get('/dataiujk/update/{nama_perusahaan}', [UijkController::class, 'updatedatadataiujk'])->middleware('auth')->name('update.dataiujk');
Route::post('/dataiujkupdatestore/{nama_perusahaan}', [UijkController::class, 'createupdatedataiujk'])->middleware('auth')->name('updatestore.dataiujk');
Route::get('/dataiujkcreate', [UijkController::class, 'createdataiujk'])->middleware('auth');
Route::post('/dataiujkstore', [UijkController::class, 'createstoredataiujk'])->middleware('auth')->name('create.dataiujk');

Route::post('/dataiujk/{nama_perusahaan}', [UijkController::class, 'deletedatadataiujk'])
->middleware('auth')
->name('delete.dataiujk');


// -------- BAGIAN 04 BACKEND ---------------------------------


Route::post('/paketpekerjaandelete/{judul}', [DatajakonController::class, 'deletepaketpekerjaan'])
->middleware('auth')
->name('delete.paketpekerjaan');

// -------- BAGIAN 14 BACKEND PERATURAN UNDANGUNDANG ---------------------------------
Route::get('/peruud', [PeraturanController::class, 'undangundang'])->middleware('auth')->name('peruud.index');
Route::get('/peruud/{judul}', [PeraturanController::class, 'updateundangundang'])->middleware('auth')->name('peruud.show');
Route::post('/peruud/{judul}', [PeraturanController::class, 'createupdateundangundang'])->middleware('auth')->name('peruud.update');


Route::get('/perpemerintah', [PeraturanController ::class, 'pemerintah'])->middleware('auth');
Route::get('/perpemerintah/{judul}', [PeraturanController::class, 'updateperpemerintah'])->middleware('auth')->name('peruud.showperpemerintah');
Route::post('/perpemerintah/{judul}', [PeraturanController::class, 'createupdateperpemerintah'])->middleware('auth')->name('peruud.updateperpemerintah');


Route::get('/perpresiden', [PeraturanController::class, 'presiden'])->middleware('auth');
Route::get('/perpresiden/{judul}', [PeraturanController::class, 'updateperpresiden'])->middleware('auth')->name('peruud.showperpresiden');
Route::post('/perpresiden/{judul}', [PeraturanController::class, 'createupdateperpresiden'])->middleware('auth')->name('peruud.updateperpresiden');

// PERATURAN MENTERI
Route::get('/permenteri', [PeraturanController::class, 'menteri'])->middleware('auth');
Route::get('/permenteri/{judul}', [PeraturanController::class, 'menterishowByJudul'])->middleware('auth');
Route::get('/permenteri/update/{judul}', [PeraturanController::class, 'updateshowpermenteri'])->middleware('auth')->name('peruud.showpermenteri');
Route::post('/permenteri/{judul}', [PeraturanController::class, 'createupdatepermenteri'])->middleware('auth')->name('peruud.updatepermenteri');
// CREATE DATA PER MENTERI
Route::get('/permentericreate', [PeraturanController::class, 'createpermenteri'])->middleware('auth');
Route::post('/permenteristore', [PeraturanController::class, 'createstorepermenteri'])->middleware('auth')->name('peruud.createpermenteri');
Route::post('/permenteridelete/{judul}', [PeraturanController::class, 'deleterpermenteri'])
->middleware('auth')
->name('peruud.deletepermenteri');

// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');

// SURAT KEPUTUSAN MENTERI
Route::get('/skmenteri', [PeraturanController::class, 'skmenteri'])->middleware('auth');
Route::get('/skmenteri/{judul}', [PeraturanController::class, 'skmenterishowByJudul'])->middleware('auth');
Route::get('/skmenteri/update/{judul}', [PeraturanController::class, 'updateshowskmenteri'])->middleware('auth')->name('peruud.showskmenteri');
Route::post('/skmenteri/{judul}', [PeraturanController::class, 'createupdateskmenteri'])->middleware('auth')->name('peruud.updateskmenteri');
Route::get('/skmentericreate', [PeraturanController::class, 'createskmenteri'])->middleware('auth');
Route::post('/skmenteristore', [PeraturanController::class, 'createstoreskmenteri'])->middleware('auth')->name('peruud.createskmenteri');
Route::post('/skmenteridelete/{judul}', [PeraturanController::class, 'deleteskmenteri'])
->middleware('auth')
->name('peruud.deleteskmenteri');

// SURAT EDARAN MENTERI
Route::get('/suratedaran', [PeraturanController::class, 'suratedaran'])->middleware('auth');
Route::get('/suratedaran/{judul}', [PeraturanController::class, 'suratedaranshowByJudul'])->middleware('auth');
Route::get('/suratedaran/update/{judul}', [PeraturanController::class, 'updateshowsuratedaran'])->middleware('auth')->name('peruud.showsuratedaran');
Route::post('/suratedaran/{judul}', [PeraturanController::class, 'createupdatesuratedaran'])->middleware('auth')->name('peruud.updatesuratedaran');
Route::get('/suratedarancreate', [PeraturanController::class, 'createsuratedaran'])->middleware('auth');
Route::post('/suratedaranstore', [PeraturanController::class, 'createstoresuratedaran'])->middleware('auth')->name('peruud.createsuratedaran');
Route::post('/suratedarandelete/{judul}', [PeraturanController::class, 'deletesuratedaran'])
->middleware('auth')
->name('peruud.deletesuratedaran');

// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');
// Route::get('/skktenagakerja/{nama}', [SkktenagakerjaController::class, 'showByName'])->name('skktenagakerja.show');

Route::get('/referensi', [PeraturanController::class, 'referensi'])->middleware('auth')->name('peruud.referensi');
Route::get('/referensi/{judul}', [PeraturanController::class, 'updatereferensi'])->middleware('auth')->name('peruud.showreferensi');
Route::post('/referensi/{judul}', [PeraturanController::class, 'createupdatereferensi'])->middleware('auth')->name('peruud.updatereferensi');

// SURAT PERATURAN DAERAH
Route::get('/perdaerah', [PeraturanController::class, 'suratperdaerah'])->middleware('auth');
Route::get('/perdaerah/{judul}', [PeraturanController::class, 'suratperdaerahshowByJudul'])->middleware('auth');
Route::get('/perdaerah/update/{judul}', [PeraturanController::class, 'updateshowperdaerah'])->middleware('auth')->name('peruud.showperdaerah');
Route::post('/perdaerah/{judul}', [PeraturanController::class, 'createupdateperdaerah'])->middleware('auth')->name('peruud.updateperdaerah');
Route::get('/perdaerahcreate', [PeraturanController::class, 'createperdaerah'])->middleware('auth');
Route::post('/perdaerahstore', [PeraturanController::class, 'createstoreperdaerah'])->middleware('auth')->name('peruud.createperdaerah');
Route::post('/perdaerahdelete/{judul}', [PeraturanController::class, 'deleteperdaerah'])
->middleware('auth')
->name('peruud.deleteperdaerah');

// SURAT PERATURAN GUBERNUR
Route::get('/pergubernur', [PeraturanController::class, 'suratpergubernur'])->middleware('auth');
Route::get('/pergubernur/{judul}', [PeraturanController::class, 'pergubernurshowByJudul'])->middleware('auth');
Route::get('/pergubernur/update/{judul}', [PeraturanController::class, 'updateshowpergubernur'])->middleware('auth')->name('peruud.showpergubernur');
Route::post('/pergubernur/{judul}', [PeraturanController::class, 'createupdatepergubernur'])->middleware('auth')->name('peruud.updatepergubernur');
Route::get('/pergubernurcreate', [PeraturanController::class, 'createpergubernur'])->middleware('auth');
Route::post('/pergubernurstore', [PeraturanController::class, 'createstorepergubernur'])->middleware('auth')->name('peruud.createpergubernur');
Route::post('/pergubernurdelete/{judul}', [PeraturanController::class, 'deletepergubernur'])
->middleware('auth')
->name('peruud.deletepergubernur');


// SURAT PERATURAN GUBERNUR
Route::get('/perwalikotabupati', [PeraturanController::class, 'suratperwalikotabupati'])->middleware('auth');
Route::get('/perwalikotabupati/{judul}', [PeraturanController::class, 'perwalikotabupatishowByJudul'])->middleware('auth');
Route::get('/perwalikotabupati/update/{judul}', [PeraturanController::class, 'updateshowperwalikotabupati'])->middleware('auth')->name('peruud.showperwalikotabupati');
Route::post('/perwalikotabupati/{judul}', [PeraturanController::class, 'createupdateperwalikotabupati'])->middleware('auth')->name('peruud.updateperwalikotabupati');
Route::get('/perwalikotabupaticreate', [PeraturanController::class, 'createperwalikotabupati'])->middleware('auth');
Route::post('/perwalikotabupatistore', [PeraturanController::class, 'createstoreperwalikotabupati'])->middleware('auth')->name('peruud.createperwalikotabupati');
Route::post('/perwalikotabupatidelete/{judul}', [PeraturanController::class, 'deleteperwalikotabupati'])
->middleware('auth')
->name('peruud.deleteperwalikotabupati');

// SURAT KEPUTUSAN TENTANG JASA KONSTRUKSI
Route::get('/keputusan', [PeraturanController::class, 'keputusan'])->middleware('auth');
Route::get('/keputusanbaru/{judul}', [PeraturanController::class, 'keputusanshowbyjudul'])->middleware('auth');
Route::get('/keputusan/update/{judul}', [PeraturanController::class, 'updateshowkeputusan'])->middleware('auth')->name('peruud.showkeputusan');
Route::post('/keputusan/{judul}', [PeraturanController::class, 'createupdatekeputusan'])->middleware('auth')->name('peruud.updatekeputusan');
Route::get('/keputusancreate', [PeraturanController::class, 'createkeputusan'])->middleware('auth');
Route::post('/keputusanstore', [PeraturanController::class, 'createstorekeputusan'])->middleware('auth')->name('peruud.createkeputusan');
Route::post('/keputusandelete/{judul}', [PeraturanController::class, 'deletekeputusan'])
->middleware('auth')
->name('peruud.deletekeputusan');

// ====================================== ====================================== ====================================== ======================================
// BAGIAN 15 ADMINISTRATOR MENU BACKEND
// ====================================== ====================================== ====================================== ======================================
// SURAT KEPUTUSAN TENTANG JASA KONSTRUKSI
Route::get('/administrator', [AdministratorController::class, 'index'])->middleware('auth');
Route::get('/administrator/{name}', [AdministratorController::class, 'administratorshowbyname'])->middleware('auth');
Route::get('/administrator/update/{name}', [AdministratorController::class, 'updateadministrator'])->middleware('auth')->name('updateshow.administrator');
Route::put('/administrator/{name}', [AdministratorController::class, 'createupdateadministrator'])
->middleware('auth')
->name('update.dataadministrator');

// Route::put('/administrator/{name}', [AdministratorController::class, 'createupdateadministrator'])->middleware('auth')->name('update.dataadministrator');
// Route::post('/administrator/{name}', [AdministratorController::class, 'createupdateadministrator'])->middleware('auth')->name('update.dataadministrator');
// Route::get('/keputusancreate', [PeraturanController::class, 'createkeputusan'])->middleware('auth');
// Route::post('/keputusanstore', [PeraturanController::class, 'createstorekeputusan'])->middleware('auth')->name('peruud.createkeputusan');
Route::post('/administrator/{name}', [AdministratorController::class, 'deleteadministrator'])
->middleware('auth')
->name('administrator.deleteadministrator');


// KATEGORI ADMIN
Route::get('/kategoriadmin', [AdministratorController::class, 'kategoriadmin'])->middleware('auth');
Route::get('/kategoriadmincreate', [AdministratorController::class, 'createkategoriadmin'])->middleware('auth');
Route::post('/kategoriadminstore', [AdministratorController::class, 'createstorekategoriadmin'])->middleware('auth')->name('create.kategoriadmin');

Route::post('/kategoriadmin/{id}', [AdministratorController::class, 'deletekategoriadmin'])
->middleware('auth')
->name('delete.deletekategoriadmin');

// -------------------------- ROUTE UNTUK SETTINGS DATA MENU JASA KONSTRUKSI ============================================
Route::get('/settingsalldata', [SettingmenuController::class, 'alldata'])->middleware('auth');

// 01 SETTINGS MENU STATUS ADMIN
Route::get('/settingstatusadmin', [SettingmenuController::class, 'statusadmin'])->middleware('auth');
Route::get('/settingstatusadmincreate', [SettingmenuController::class, 'createstatusadmin'])->middleware('auth');
Route::post('/settingstatusadminstore', [SettingmenuController::class, 'createstorestatusadmin'])->middleware('auth')->name('create.statusadminnewbaru');
Route::post('/settingstatusadmin/{id}', [SettingmenuController::class, 'deletestatusadmin'])
->middleware('auth')
->name('delete.statusadmin');

// 02 SETTINGS MENU PENGWASAN LOKASI KECAMATAN KOTA
Route::get('/settingkecamatan', [SettingmenuController::class, 'settingkecamatan'])->middleware('auth');
Route::get('/settingkecamatancreate', [SettingmenuController::class, 'createsettingkecamatan'])->middleware('auth');
Route::post('/settingkecamatanstore', [SettingmenuController::class, 'createstoresettingkecamatan'])->middleware('auth')->name('create.settingkecamatan');
Route::post('/settingkecamatan/{id}', [SettingmenuController::class, 'deletesettingkecamatan'])
->middleware('auth')
->name('delete.settingkecamatan');

// 03 SETTINGS MENU QA SEBAGAI
Route::get('/settingqasebagai', [SettingmenuController::class, 'settingqasebagai'])->middleware('auth');
Route::get('/settingqasebagaicreate', [SettingmenuController::class, 'createsettingqasebagai'])->middleware('auth');
Route::post('/settingqasebagaistore', [SettingmenuController::class, 'createstoresettingqasebagai'])->middleware('auth')->name('create.settingqasebagai');
Route::post('/settingqasebagai/{id}', [SettingmenuController::class, 'deletesettingqasebagai'])
->middleware('auth')
->name('delete.settingqasebagai');

// 04 SETTINGS MENU QA PERTANYAAN
Route::get('/settingqapertanyaan', [SettingmenuController::class, 'settingqapertanyaan'])->middleware('auth');
Route::get('/settingqapertanyaancreate', [SettingmenuController::class, 'createsettingqapertanyaan'])->middleware('auth');
Route::post('/settingqapertanyaanstore', [SettingmenuController::class, 'createstoresettingqapertanyaan'])->middleware('auth')->name('create.settingqapertanyaan');
Route::post('/settingqapertanyaan/{id}', [SettingmenuController::class, 'deletesettingqapertanyaan'])
->middleware('auth')
->name('delete.settingqapertanyaan');

// 05 SETTINGS MENU METODE PENGADAAN
Route::get('/settingmetodepengadaan', [SettingmenuController::class, 'settingmetodepengadaan'])->middleware('auth');
Route::get('/settingmetodepengadaancreate', [SettingmenuController::class, 'createsettingmetodepengadaan'])->middleware('auth');
Route::post('/settingmetodepengadaanstore', [SettingmenuController::class, 'createstoresettingmetodepengadaan'])->middleware('auth')->name('create.settingmetodepengadaan');
Route::post('/settingmetodepengadaan/{id}', [SettingmenuController::class, 'deletesettingmetodepengadaan'])
->middleware('auth')
->name('delete.settingmetodepengadaan');

// 06 SETTINGS MENU PENGAWASAN BANGUNAN GEDUNG
Route::get('/settingpengawasanbangunangedung', [SettingmenuController::class, 'settingpengawasanbangunangedung'])->middleware('auth');
Route::get('/settingpengawasanbangunangedungcreate', [SettingmenuController::class, 'createsettingpengawasanbangunangedung'])->middleware('auth');
Route::post('/settingpengawasanbangunangedungstore', [SettingmenuController::class, 'createstoresettingpengawasanbangunangedung'])->middleware('auth')->name('create.settingpengawasanbangunangedung');
Route::post('/settingpengawasanbangunangedung/{id}', [SettingmenuController::class, 'deletesettingpengawasanbangunangedung'])
->middleware('auth')
->name('delete.settingpengawasanbangunangedung');

// 07 SETTINGS MENU PENGAWASAN STATUS
Route::get('/settingpengawasanstatus', [SettingmenuController::class, 'settingpengawasanstatus'])->middleware('auth');
Route::get('/settingpengawasanstatuscreate', [SettingmenuController::class, 'createsettingpengawasanstatus'])->middleware('auth');
Route::post('/settingpengawasanstatusstore', [SettingmenuController::class, 'createstoresettingpengawasanstatus'])->middleware('auth')->name('create.settingpengawasanstatus');
Route::post('/settingpengawasanstatus/{id}', [SettingmenuController::class, 'deletesettingpengawasanstatus'])
->middleware('auth')
->name('delete.settingpengawasanstatus');

// 08 SETTINGS MENU PENGAWASAN TINDAKAN
Route::get('/settingpengawasantindakan', [SettingmenuController::class, 'settingpengawasantindakan'])->middleware('auth');
Route::get('/settingpengawasantindakancreate', [SettingmenuController::class, 'createsettingpengawasantindakan'])->middleware('auth');
Route::post('/settingpengawasantindakanstore', [SettingmenuController::class, 'createstoresettingpengawasantindakan'])->middleware('auth')->name('create.settingpengawasantindakan');
Route::post('/settingpengawasantindakan/{id}', [SettingmenuController::class, 'deletesettingpengawasantindakan'])
->middleware('auth')
->name('delete.settingpengawasantindakan');

// 09 SETTINGS MENU AGENDA STATUS
Route::get('/settingagendastatus', [SettingmenuController::class, 'settingagendastatus'])->middleware('auth');
Route::get('/settingagendastatuscreate', [SettingmenuController::class, 'createsettingagendastatus'])->middleware('auth');
Route::post('/settingagendastatusstore', [SettingmenuController::class, 'createstoresettingagendastatus'])->middleware('auth')->name('create.settingagendastatus');
Route::post('/settingagendastatus/{id}', [SettingmenuController::class, 'deletesettingagendastatus'])
->middleware('auth')
->name('delete.settingagendastatus');

// 10 SETTINGS MENU KETERAMPILAN PEKERJA
Route::get('/settingketerampilanpekerja', [SettingmenuController::class, 'settingketerampilanpekerja'])->middleware('auth');
Route::get('/settingketerampilanpekerjacreate', [SettingmenuController::class, 'createsettingketerampilanpekerja'])->middleware('auth');
Route::post('/settingketerampilanpekerjastore', [SettingmenuController::class, 'createstoresettingketerampilanpekerja'])->middleware('auth')->name('create.settingketerampilanpekerja');
Route::post('/settingketerampilanpekerja/{id}', [SettingmenuController::class, 'deletesettingketerampilanpekerja'])
->middleware('auth')
->name('delete.settingketerampilanpekerja');

// 11 SETTINGS MENU TAHUN PILIHAN
Route::get('/settingtahunpilihan', [SettingmenuController::class, 'settingtahunpilihan'])->middleware('auth');
Route::get('/settingtahunpilihancreate', [SettingmenuController::class, 'createsettingtahunpilihan'])->middleware('auth');
Route::post('/settingtahunpilihanstore', [SettingmenuController::class, 'createstoresettingtahunpilihan'])->middleware('auth')->name('create.settingtahunpilihan');
Route::post('/settingtahunpilihan/{id}', [SettingmenuController::class, 'deletesettingtahunpilihan'])
->middleware('auth')
->name('delete.settingtahunpilihan');


// Route::get('/$login', function () {
//     // return view('welcome');
//     return view('login.index',
//         'title' => 'Halaman Login'
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest')->name('loginawal');
Route::get('/masuk', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login-custom', [LoginController::class, 'authenticate'])
    ->name('login.custom');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/login', [LoginController::class, 'authenticate'])->name('login.custom');
Route::post('/logout', [LoginController::class, 'logout']);



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ------------------------- FRONTEND HALAMAN SERTIFIKAT ANDROID  --------------------------
Route::get('/sertifikat', [AndroidVersionController::class, 'sertifikatindex']);
Route::get('/sertifikatpelatihan', [AndroidVersionController::class, 'sertifikatpelatihan']);
Route::get('/sertifikattkk', [AndroidVersionController::class, 'sertifikattkk']);
Route::post('/carisertifikat', [AndroidVersionController::class, 'carisertifikat'])->name('cari.sertifikat');


// ------------------------- FRONTEND HALAMAN UTAMA MAS JAKI BLORA  --------------------------
Route::get('/resberita', [BeritajakonController::class, 'androidberita']);
Route::get('/resberita/{judulberita}', [BeritajakonController::class, 'androidberitashow']);

Route::get('/resartikeljakon', [BeritajakonController::class, 'androidartikeljakon']);
Route::get('/resartikeljakon/{judul}', [BeritajakonController::class, 'androidartikeljakonshow']);

// -----------------------------------------------------------------------------------------------
Route::get('/ressatuanhargadasar', [SatuanhargamaterialController::class, 'satuanhargamaterial']);
Route::get('/ressatuanhargamaterial', [SatuanhargamaterialController::class, 'satuanhargamaterialshow']);
Route::get('/ressatuanhargaupah', [SatuanhargamaterialController::class, 'ressatuanhargaupah']);
Route::get('/ressatuanhargaperalatan', [SatuanhargamaterialController::class, 'ressatuanhargaperalatan']);
Route::get('/resshstblora', [ShstbloraController::class, 'resshstblora']);
Route::get('/resahspkonstruksi', [SatuanhargamaterialController::class, 'resahspkonstruksi']);
Route::get('/resahspdiv1', [SatuanhargamaterialController::class, 'resahspdiv1']);
Route::get('/resahspdiv2', [SatuanhargamaterialController::class, 'resahspdiv2']);
Route::get('/resahspdiv3', [SatuanhargamaterialController::class, 'resahspdiv3']);
Route::get('/resahspdiv4', [SatuanhargamaterialController::class, 'resahspdiv4']);
Route::get('/resahspdiv5', [SatuanhargamaterialController::class, 'resahspdiv5']);
Route::get('/resahspdiv6', [SatuanhargamaterialController::class, 'resahspdiv6']);
Route::get('/resahspdiv7', [SatuanhargamaterialController::class, 'resahspdiv7']);
Route::get('/resahspdiv8', [SatuanhargamaterialController::class, 'resahspdiv8']);
Route::get('/resahspdiv9', [SatuanhargamaterialController::class, 'resahspdiv9']);

// ---------------------------- MENU UTAMA ANDROID ------------------------------------------------
// ================================================ MENU BERITA
Route::get('/berita', [AndroidVersionController::class, 'menuberita']);

// ================================================ MENU KELEMBAGAAN
Route::get('/kelembagaan', [AndroidVersionController::class, 'menukelembagaan']);
// ================================================ MENU 1 STRUKTUR ORGANISASI ===========================================
Route::get('/resstruktur', [AndroidVersionController::class, 'menustruktur']);
// ================================================ MENU 2 PROFIL JAKON JASA KONSTRUKSI  ===========================================
Route::get('/resprofiljakon', [AndroidVersionController::class, 'menuprofiljakon']);
// ================================================ MENU 3 TUPOKSI JASA KONSTRUKSI  ===========================================
Route::get('/restupoksi', [AndroidVersionController::class, 'menutupoksi']);

// ================================================ MENU DATA JAKON
// MENU DATA BUJK KONTRAKTOR ------------------------------------------------
Route::get('/resdatajakon', [AndroidVersionController::class, 'menudatajakon']);
Route::get('/resbujkkontraktor', [AndroidVersionController::class, 'menubujkkontraktor']);
Route::get('/resbujkkontraktor/{namalengkap}', [AndroidVersionController::class, 'menubujkkontraktordetails']);

// MENU DATA BUJK KONSULTAN  ------------------------------------------------
Route::get('/resbujkkonsultan', [AndroidVersionController::class, 'menubujkkonsultan']);
Route::get('/resbujkkonsultan/{namalengkap}', [AndroidVersionController::class, 'menubujkkonsultandetails']);

// MENU DATA ASOSIASI MAS JAKI ------------------------------------------------
Route::get('/reasasosiasimasjaki', [AndroidVersionController::class, 'menuasosiasimasjaki']);
Route::get('/reasasosiasimasjaki/asosiasikonstruksi/{id}', [AndroidVersionController::class, 'reasasosiasimasjakikontraktor']);
Route::get('/reasasosiasimasjaki/asosiasikonsultan/{id}', [AndroidVersionController::class, 'reasasosiasimasjakikonsultan']);


// MENU DATA TKK DPUPR BLORA
// Route::get('/resbujkkonsultan', [AndroidVersionController::class, 'menubujkkonsultan']);
// Route::get('/resbujkkonsultan/{namalengkap}', [AndroidVersionController::class, 'menubujkkonsultandetails']);

// MENU DATA TKK KABUPATEN BLORA
Route::get('/resalltkkblora', [AndroidVersionController::class, 'menuresalltkkblora']);
Route::get('/resalltkkbloradpupr', [AndroidVersionController::class, 'menuresalltkkbloradpupr']);
Route::get('/resalltkkblora/{id}', [AndroidVersionController::class, 'menuresalltkkbloradetails']);
// makanyu

// MENU PROFIL PAKET PEKERJAAN MAS JAKI BLORA
Route::get('/resprofilpaketpekerjaan', [AndroidVersionController::class, 'menuresprofilpaketpekerjaan']);
Route::get('/resprofilpaketpekerjaan/{id}', [AndroidVersionController::class, 'menuresprofilpaketpekerjaandetails']);


// Rute untuk detailsnamapaketpekerjaan
Route::get('/detailsnamapaketpekerjaan/{id}', [AndroidVersionController::class, 'show'])->name('detailsnamapaketpekerjaan.show');

// Rute untuk detailspaketpekerjaan
Route::get('/detailspaketpekerjaan/{id}', [AndroidVersionController::class, 'show'])->name('detailspaketpekerjaan.show');

// Rute untuk sppbj
Route::get('/sppbj/{id}', [AndroidVersionController::class, 'show'])->name('sppbj.show');

// Rute untuk spk
Route::get('/spk/{id}', [AndroidVersionController::class, 'show'])->name('spk.show');

// Rute untuk sskk
Route::get('/sskk/{id}', [AndroidVersionController::class, 'show'])->name('sskk.show');

// Rute untuk suratperjanjianpekerjaan
Route::get('/suratperjanjianpekerjaan/{id}', [AndroidVersionController::class, 'show'])->name('suratperjanjianpekerjaan.show');



// ================================================ MENU D. PEMBINAAN
// MENU PEMBINAAN JASA KONSTRUKSI  ------------------------------------------------
Route::get('/respembinaan', [AndroidVersionController::class, 'menurespembinaan']);

// MENU 1 AGENDA PELATIHAN ------------------------------------------------
Route::get('/resagendapelatihan', [AndroidVersionController::class, 'menuresagendapelatihan']);
Route::get('/resagendapelatihan/{namakegiatan}', [AndroidVersionController::class, 'menuresagendapelatihandetails']);
Route::get('/respesertapelatihan', [AndroidVersionController::class, 'respesertapelatihan']);
Route::get('/respelatihanpeserta/{namakegiatan}', [AndroidVersionController::class, 'menurespelatihanpeserta']);

// DAFTAR PESERTA PELATIHAN MENU ANDROID
Route::get('/resdaftarpelatihanpeserta/create/{id}', [AndroidVersionController::class, 'resdaftarpelatihanpeserta'])->name('resdaftarpelatihanpeserta');
Route::post('/resdaftarpelatihanpeserta/createpeserta/new', [AndroidVersionController::class, 'resdaftarpelatihanpesertanew'])->name('resdaftarpelatihanpesertanew');

// MENU 3 AGENDA TKK KONSTRUKSI KAB BLORA ------------------------------------------------
Route::get('/resagendatkk', [AndroidVersionController::class, 'menuresagendatkk']);
Route::get('/resagendatkk/{namakegiatan}', [AndroidVersionController::class, 'menuresagendatkkdetails']);
Route::get('/respelatihanskk/{namakegiatan}', [AndroidVersionController::class, 'menurespelatihanskk']);
Route::get('/respesertaskk', [AndroidVersionController::class, 'menurespesertaskk']);
Route::get('/resskkpeserta/{namakegiatan}', [AndroidVersionController::class, 'menuresskkpeserta']);


Route::get('/resdaftarpelatihanpesertaskk/create/{id}', [AndroidVersionController::class, 'resdaftarpelatihanpesertaskk'])->middleware('auth')->name('resdaftarpelatihanpesertaskk');


// Route::post('/resdaftarpelatihanpesertaskk/createpeserta/new', [AndroidVersionController::class, 'resdaftarpelatihanpesertanew'])->name('resdaftarpelatihanpesertanew');


// ================================================ MENU E. PENGAWASAN
// MENU PEMBINAAN JASA KONSTRUKSI  ------------------------------------------------
Route::get('/respengawasan', [AndroidVersionController::class, 'menurespengawasan']);

// MENU TERTIB JAKON USAHA JASA KONSTRUKSI  ------------------------------------------------
Route::get('/resjakonusaha', [AndroidVersionController::class, 'menuresjakonusaha']);

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonusaha1/{id}', [AndroidVersionController::class, 'show1'])->name('surattertibjakonusaha1.show');

// Route untuk surat tertib jakon usaha 2
Route::get('surattertibjakonusaha2/{id}', [AndroidVersionController::class, 'show2'])->name('surattertibjakonusaha2.show');

// Route untuk surat tertib jakon usaha 3
Route::get('surattertibjakonusaha3/{id}', [AndroidVersionController::class, 'show3'])->name('surattertibjakonusaha3.show');

// Route untuk surat tertib jakon usaha 4
Route::get('surattertibjakonusaha4/{id}', [AndroidVersionController::class, 'show4'])->name('surattertibjakonusaha4.show');
// Route::get('/resbujkkontraktor', [AndroidVersionController::class, 'menubujkkontraktor']);
// Route::get('/resbujkkontraktor/{namalengkap}', [AndroidVersionController::class, 'menubujkkontraktordetails']);


// MENU TERTIB JAKON PEMANFAATAN USAHA JASA KONSTRUKSI  ------------------------------------------------
Route::get('/resjakonpemanfataan', [AndroidVersionController::class, 'menuresjakonpemanfataan']);

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpemanfaatan1/{id}', [AndroidVersionController::class, 'showpemanfaatan1'])->name('surattertibjakonpemanfaatan1.show');

// Route untuk surat tertib jakon usaha 2
Route::get('surattertibjakonpemanfaatan2/{id}', [AndroidVersionController::class, 'showpemanfaatan2'])->name('surattertibjakonpemanfaatan2.show');

// Route untuk surat tertib jakon usaha 3
Route::get('surattertibjakonpemanfaatan3/{id}', [AndroidVersionController::class, 'showpemanfaatan3'])->name('surattertibjakonpemanfaatan3.show');

// Route untuk surat tertib jakon usaha 4
Route::get('surattertibjakonpemanfaatan4/{id}', [AndroidVersionController::class, 'showpemanfaatan4'])->name('surattertibjakonpemanfaatan4.show');
// Route::get('/resbujkkontraktor', [AndroidVersionController::class, 'menubujkkontraktor']);
// Route::get('/resbujkkontraktor/{namalengkap}', [AndroidVersionController::class, 'menubujkkontraktordetails']);

// MENU TERTIB JAKON PENYELENGGARAAN JASA KONSTRUKSI  ------------------------------------------------
Route::get('/resjakonpenyelenggaraan', [AndroidVersionController::class, 'menuresjakonpenyelenggaraan']);

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan1/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan1.show');

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan2/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan2.show');

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan3/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan3.show');

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan4/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan4.show');

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan5/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan5.show');

// Route untuk surat tertib jakon usaha 1
Route::get('surattertibjakonpenyelenggaraan6/{id}', [AndroidVersionController::class, 'showpenyelenggaraan'])->name('surattertibjakonpenyelenggaraan6.show');


// MENU PENGAWASAN BUJK  ------------------------------------------------
Route::get('/respengawasanbujk', [AndroidVersionController::class, 'menurespengawasanbujk']);
Route::get('/respengawasanbujk/{namaperusahaan}', [AndroidVersionController::class, 'menurespengawasanbujkdetails']);

// MENU PENGAWASAN BUJK  ------------------------------------------------
Route::get('/reskecelakaankerja', [AndroidVersionController::class, 'menureskecelakaankerja']);
Route::get('/reskecelakaankerja/{id}', [AndroidVersionController::class, 'menureskecelakaankerjadetails']);

// ================================================ MENU F. AHSP
// MENU PEMBINAAN JASA KONSTRUKSI  ------------------------------------------------
Route::get('/resahsp', [AndroidVersionController::class, 'menuresahsp']);
// Route::get('/resbujkkontraktor', [AndroidVersionController::class, 'menubujkkontraktor']);
// Route::get('/resbujkkontraktor/{namalengkap}', [AndroidVersionController::class, 'menubujkkontraktordetails']);

// ================================================ MENU F. AHSP
// MENU RANTAI PASOK JASA KONSTRUKSI  ------------------------------------------------
Route::get('/resrantaipasok', [AndroidVersionController::class, 'menuresrantaipasok']);
// Route::get('/resbujkkontraktor', [AndroidVersionController::class, 'menubujkkontraktor']);
// Route::get('/resbujkkontraktor/{namalengkap}', [AndroidVersionController::class, 'menubujkkontraktordetails']);







// ==========================================================================================================================================
// ---------------------- BAGIAN 01 BERANDA HALAMAN DEPAN -----------------------//
// ==========================================================================================================================================
Route::get('/', [FedashboardController::class, 'index']);
Route::get('/web', [FedashboardController::class, 'web']);

Route::get('/404', function () {
    // return view('welcome');
    return view('404', [
        'title' => 'Under Constructions',
    ]);
});

Route::get('/kritikdansaran', [KritikdansaranController::class, 'index']);

// ==========================================================================================================================================
// ---------------------- BAGIAN 02 KELEMBAGAAN FRONTEND -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU 1-----------------------------------------------------
Route::get('/profil/struktur', [StrukturController::class, 'strukturdpuprkabblora']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2-----------------------------------------------------
Route::get('/profil/rencanastrategis', [StrukturController::class, 'rencanastrategisdpuprkabblora']);

// ---------------------- MENU 2-----------------------------------------------------
Route::get('/profil/tupoksi', [StrukturController::class, 'tupoksifekbb']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 03 BERITA FRONTEND -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU PERATURAN -----------------------------------------------------
// -------- BAGIAN 1 ---------------------------------
Route::get('/peraturan/undangundang', [PeraturanController::class, 'feundangundang']);
Route::get('/peraturan/undangundang/{judul}', [PeraturanController::class, 'undangundangshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 2 ---------------------------------
Route::get('/peraturan/pemerintah', [PeraturanController::class, 'fepemerintah']);
Route::get('/peraturan/pemerintah/{judul}', [PeraturanController::class, 'pemerintahshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 3 ---------------------------------
Route::get('/peraturan/presiden', [PeraturanController::class, 'fepresiden']);
Route::get('/peraturan/presiden/{judul}', [PeraturanController::class, 'presidenshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 4 ---------------------------------
Route::get('/peraturan/menteri', [PeraturanController::class, 'fementeri']);
Route::get('/peraturan/menteri/{judul}', [PeraturanController::class, 'fementerishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 5 ---------------------------------
Route::get('/peraturan/keputusanmenteri', [PeraturanController::class, 'feskmenteri']);
Route::get('/peraturan/keputusanmenteri/{judul}', [PeraturanController::class, 'feskmenterishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 6 ---------------------------------
Route::get('/peraturan/suratedaranmenteri', [PeraturanController::class, 'suratedaranmenteri']);
Route::get('/peraturan/suratedaranmenteri/{judul}', [PeraturanController::class, 'suratedaranmenterishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 7 ---------------------------------
Route::get('/peraturan/referensi', [PeraturanController::class, 'fereferensi']);
Route::get('/peraturan/referensi/{judul}', [PeraturanController::class, 'referensishowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 8 ---------------------------------
Route::get('/peraturan/daerah', [PeraturanController::class, 'feperdaerah']);
Route::get('/peraturan/daerah/{judul}', [PeraturanController::class, 'feperdaerahshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 9 ---------------------------------
Route::get('/peraturan/peraturangubernur', [PeraturanController::class, 'feperaturangubernur']);
Route::get('/peraturan/gubernur/{judul}', [PeraturanController::class, 'gubernurshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 10 ---------------------------------
Route::get('/peraturan/walikotadanbupati', [PeraturanController::class, 'feperbupatiwalikota']);
Route::get('/peraturan/walikotadanbupati/{judul}', [PeraturanController::class, 'feperbupatiwalikotashowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- BAGIAN 11 ---------------------------------
Route::get('/peraturan/suratkeputusan', [PeraturanController::class, 'fesuratkeputusan']);
Route::get('/peraturan/suratkeputusan/{judul}', [PeraturanController::class, 'fesuratkeputusanshowByJudul']);
// ___________________________________________________________________________________________________________________________________

// -------- STANDAR BIAYA UMUM ---------------------------------
Route::get('/standarbiayaumummasjaki', [DatajakonController::class, 'newstandarbiayaumum']);
Route::get('/standarbiayaumummasjaki/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul']);
Route::get('/standarbiayaumumsbu1/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul1']);
Route::get('/standarbiayaumumsbu2/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul2']);
Route::get('/standarbiayaumumsbu3/{judul}', [DatajakonController::class, 'standarbiayaumumshowbyjudul3']);

Route::get('/datajakon/fesbulampiran3', [DatajakonController::class, 'fesbulampiran3']);
Route::get('/datajakon/fesbulampiran3/{judul}', [DatajakonController::class, 'fesbulampiran3showbyjudulfe']);

Route::get('/datajakon/fesbulampiran2', [DatajakonController::class, 'fesbulampiran2']);
Route::get('/datajakon/fesbulampiran2/{judul}', [DatajakonController::class, 'fesbulampiran2showbyjudulfe']);

Route::get('/datajakon/fesbulampiran1', [DatajakonController::class, 'fesbulampiran1']);
Route::get('/datajakon/fesbulampiran1/{judul}', [DatajakonController::class, 'fesbulampiran1showbyjudulfe']);
// ___________________________________________________________________________________________________________________________________


// ---------------------- MENU 2 BERITA JAKON -----------------------------------------------------
Route::get('/beritajakon', [BeritajakonController::class, 'index']);
Route::get('/beritajakon/{judulberita}', [BeritajakonController::class, 'showjudulberita']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 ARTIKEL JAKON -----------------------------------------------------
Route::get('/artikeljakon', [BeritajakonController::class, 'artikeljakon']);
Route::get('/artikeljakon/{judul}', [BeritajakonController::class, 'artikeljakonshow']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 04 DATA JAKON  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU DATA BUJK KONTRAKTOR DAN KONSULTAN  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 BUJK KONTRAKTOR -----------------------------------------------------
Route::get('/datajakon/bujkkontraktor', [BujkkontraktorController::class, 'bujkkontraktor'])->name('bujkkontraktor');
Route::get('/datajakon/bujkkontraktor/{namalengkap}', [BujkkontraktorController::class, 'bujkkontraktorshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 BUJK KONSULTAN -----------------------------------------------------
Route::get('/datajakon/bujkkonsultan', [BujkkonsultanController::class, 'bujkkonsultan']);
Route::get('/datajakon/bujkkonsultan/{namalengkap}', [BujkkonsultanController::class, 'bujkkonsultanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 ASOSIASI MASJAKI  -----------------------------------------------------
Route::get('/datajakon/bujk', [BujkkontraktorController::class, 'index']);
Route::get('/datajakon/asosiasimasjaki', [BujkkontraktorController::class, 'asosiasimasjaki']);
Route::get('/datajakon/asosiasikonstruksi/{namaasosiasi}', [BujkkontraktorController::class, 'asosiasikonstruksishow']);
Route::get('/datajakon/asosiasikonsultan/{namaasosiasi}', [BujkkontraktorController::class, 'asosiasikonsultanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 DATA STATISTIK BUJK   -----------------------------------------------------
Route::get('/datajakon/statistikabujkblora', [DatastatistikajakonbloraController::class, 'databujk']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU DATA TENAGA KERJA KONSTRUKSI  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 SKK TENAGA KERJA DPUPR  -----------------------------------------------------
Route::get('/datajakon/skktenagakerja', [SkktenagakerjabloraController::class, 'index']);
Route::get('/datajakon/skktenagakerjablora', [SkktenagakerjabloraController::class, 'listskktenagakerjablora']);
Route::get('/datajakon/skktenagakerjablora/{nama}', [SkktenagakerjabloraController::class, 'listskktenagakerjablorashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 SEMUA SKK TENAGA KERJA   -----------------------------------------------------
Route::get('/datajakon/skktenagakerjabloralist', [SkktenagakerjabloraController::class, 'datalistskktenagakerjablora']);
Route::get('/datajakon/skktenagakerjabloralist/{nama}', [SkktenagakerjabloraController::class, 'datalistskktenagakerjablorashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 DATA STATISTIKA   -----------------------------------------------------
Route::get('/datajakon/statistikaskktenagakerjablora', [DatastatistikajakonbloraController::class, 'statistikaskktenagakerjablora']);
Route::get('/datajakon/statistikaskktenagakerjabloralist', [DatastatistikajakonbloraController::class, 'datastatistikaskktenagakerjablora']);

Route::get('/datajakon/statistikdatajenjang1', [DatastatistikajakonbloraController::class, 'datajenjang1']);
Route::get('/datajakon/statistikdatajenjang2', [DatastatistikajakonbloraController::class, 'datajenjang2']);
Route::get('/datajakon/statistikdatajenjang3', [DatastatistikajakonbloraController::class, 'datajenjang3']);
Route::get('/datajakon/statistikdatajenjang4', [DatastatistikajakonbloraController::class, 'datajenjang4']);
Route::get('/datajakon/statistikdatajenjang5', [DatastatistikajakonbloraController::class, 'datajenjang5']);
Route::get('/datajakon/statistikdatajenjang6', [DatastatistikajakonbloraController::class, 'datajenjang6']);
Route::get('/datajakon/statistikdatajenjang7', [DatastatistikajakonbloraController::class, 'datajenjang7']);
Route::get('/datajakon/statistikdatajenjang8', [DatastatistikajakonbloraController::class, 'datajenjang8']);
Route::get('/datajakon/statistikdatajenjang9', [DatastatistikajakonbloraController::class, 'datajenjang9']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU DATA PROFIL PAKET PEKERJAAN  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 PROFIL PAKET PEKERJAAN   -----------------------------------------------------
Route::get('/datajakon/profilpaketpekerjaan', [PaketpekerjaanmasjakiController::class, 'paketpekerjaanmasjaki']);
Route::get('/datajakon/profilpaketpekerjaan/{id}', [PaketpekerjaanmasjakiController::class, 'paketpekerjaanshow']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 05 PEMBINAA  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU 1 AGENDA PELATIHAN  -----------------------------------------------------
Route::get('/agendapembinaan', [PembinaanController::class, 'index']);
Route::get('/agendapembinaan/{namakegiatan}', [PembinaanController::class, 'namakegiatandaftar']);
// Route::get('/agendapembinaan/{id}', [PembinaanController::class, 'namakegiatandaftar'])->name('agendapembinaan');

// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 DAFTAR PESERTA PELATIHAN  -----------------------------------------------------
Route::get('/daftarpesertapelatihan', [PembinaanController::class, 'daftarpesertapelatihan']);
Route::get('/daftarpesertapelatihans/{namakegiatan}', [PembinaanController::class, 'daftarpesertapelatihanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 DAFTAR SKK BIMBINGAN TEKNIS  -----------------------------------------------------
Route::get('/agendaskk', [AgendaskkController::class, 'index']);
Route::get('/agendaskk/{namakegiatan}', [AgendaskkController::class, 'daftaragendaskk']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 DAFTAR PESERTA SKK -----------------------------------------------------
Route::get('/daftarpesertaskk', [AgendaskkController::class, 'daftarpesertaskk']);
Route::get('/daftarpesertaskks/{namakegiatan}', [AgendaskkController::class, 'daftarpesertaskkshow']);
// _______ ALTERNATIF DATA YANG SUDAH DI BUATKAN ____________________________________________________________________________________________________________________________
Route::get('/skktenagakerjablora', [AllskktenagakerjabloraController::class, 'index']);
Route::get('/daftarskkblora/{nik}', [AllskktenagakerjabloraController::class, 'skktenagakerjablorashow']);
// ___________________________________________________________________________________________________________________________________

// ==========================================================================================================================================
// ---------------------- BAGIAN 06 PENGAWASAN  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU TERTIB JASA KONSTRUKSI  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 TERTIB JAKON USAHA -----------------------------------------------------
Route::get('/tertibjasakonstruksilist', [TertibjasakonstruksiController::class, 'tertibjasakonstruksilist']);
Route::get('/tertibjasakonstruksilist/{namabadanusaha}', [TertibjasakonstruksiController::class, 'tertibjasakonstruksishow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 TERTIB JAKON PEMANFAATAN -----------------------------------------------------
Route::get('/tertibjasakonstruksipemanfaatan', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipemanfaatan']);
Route::get('/tertibjasakonstruksipemanfaatan/{namabangunan}', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipemanfaatanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 TERTIB JAKON PENYELENGGARAAN -----------------------------------------------------
Route::get('/tertibjasakonstruksipenyelenggaraan', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipenyelenggaraan']);
Route::get('/tertibjasakonstruksipenyelenggaraan/{kegiatankonstruksi}', [TertibjasakonstruksiController::class, 'tertibjasakonstruksipenyelenggaraanshow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 DATA STATISTIKA JAKON BLORA  -----------------------------------------------------
Route::get('/statistiktertibjakonblora', [DatastatistikajakonbloraController::class, 'tertibjakonblora']);
// ___________________________________________________________________________________________________________________________________



// ---------------------- MENU PENGAWASAN BUJK  -----------------------//
// ==========================================================================================================================================
Route::get('/pengawasanbujk', [PengawasanbujkController::class, 'index']);
Route::get('/pengawasanbujkshow/{namaperusahaan}', [PengawasanbujkController::class, 'bujkpengwasanshowmasjaki']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU KECELAKAAN KERJA  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU 1 DATA KECELAKAAN KERJA -----------------------------------------------------
Route::get('/kecelakaankerja', [KecelakaankerjamasjakiController::class, 'index']);
Route::get('/kecelakaankerjalist', [KecelakaankerjamasjakiController::class, 'kecelakaankerjalist']);
Route::get('/kecelakaankerjalist/{namapaketpekerjaan}', [KecelakaankerjamasjakiController::class, 'kecelakaankerjashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 DATA STATISTIKA KECELAKAAN KERJA -----------------------------------------------------

// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 07 AHSP HARGA KONSTRUKSI   -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU AHSP KECIPTAKARYAAN  -----------------------//
// ==========================================================================================================================================

// ---------------------- MENU SATUAN HARGA DASAR  -----------------------//
// ==========================================================================================================================================


// ---------------------- MENU 1 SATUAN HARGA DASAR MATERIAL  -----------------------------------------------------
Route::get('/satuanhargamaterial', [SatuanhargamaterialController::class, 'index']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 SATUAN HARGA DASAR UPAH TENAGA KERJA  -----------------------------------------------------
Route::get('/satuanhargaupahtenaga', [SatuanhargamaterialController::class, 'satuanhargaupah']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 SATUAN HARGA DASAR PERALATAN  -----------------------------------------------------
Route::get('/satuanhargaperalatan', [SatuanhargamaterialController::class, 'satuanhargaperalatan']);
// ___________________________________________________________________________________________________________________________________


// ---------------------- HSP KONSTRUKSI UMUM  -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU HSP DIVISI 1 SAMPAI 9 -----------------------------------------------------

Route::get('/hspdivisi1', [SatuanhargamaterialController::class, 'hspdivisi1']);
Route::get('/satuanhargadivisi1/{id}', [SatuanhargamaterialController::class, 'hspdivisi1show']);

Route::get('/hspdivisi2', [SatuanhargamaterialController::class, 'hspdivisi2']);
Route::get('/satuanhargadivisi2/{id}', [SatuanhargamaterialController::class, 'hspdivisi2show']);

Route::get('/hspdivisi3', [SatuanhargamaterialController::class, 'hspdivisi3']);
Route::get('/satuanhargadivisi3/{id}', [SatuanhargamaterialController::class, 'hspdivisi3show']);

Route::get('/hspdivisi4', [SatuanhargamaterialController::class, 'hspdivisi4']);
Route::get('/satuanhargadivisi4/{id}', [SatuanhargamaterialController::class, 'hspdivisi4show']);

Route::get('/hspdivisi5', [SatuanhargamaterialController::class, 'hspdivisi5']);
Route::get('/satuanhargadivisi5/{id}', [SatuanhargamaterialController::class, 'hspdivisi5show']);

Route::get('/hspdivisi6', [SatuanhargamaterialController::class, 'hspdivisi6']);
Route::get('/satuanhargadivisi6/{id}', [SatuanhargamaterialController::class, 'hspdivisi6show']);

Route::get('/hspdivisi7', [SatuanhargamaterialController::class, 'hspdivisi7']);
Route::get('/satuanhargadivisi7/{id}', [SatuanhargamaterialController::class, 'hspdivisi7show']);

Route::get('/hspdivisi8', [SatuanhargamaterialController::class, 'hspdivisi8']);
Route::get('/satuanhargadivisi8/{id}', [SatuanhargamaterialController::class, 'hspdivisi8show']);

Route::get('/hspdivisi9', [SatuanhargamaterialController::class, 'hspdivisi9']);
Route::get('/satuanhargadivisi9/{id}', [SatuanhargamaterialController::class, 'hspdivisi9show']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU SHST KAB BLORA  -----------------------//
// ==========================================================================================================================================
Route::get('/shstblora', [ShstbloraController::class, 'index']);
// ___________________________________________________________________________________________________________________________________


// ==========================================================================================================================================
// ---------------------- BAGIAN 08 RANTAI PASOK   -----------------------//
// ==========================================================================================================================================
// ---------------------- MENU 1 RANTAI PASOK ASURANSI KONSTRUKSI  -----------------------------------------------------
// BELUM DIBUAT

// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 RANTAI PASOK MATERIAL BAHAN BANGUNAN  -----------------------------------------------------
Route::get('/rantaipasokmaterial', [RantaipasokbloraController::class, 'index']);
Route::get('/rantaipasokmaterial/{distributor}', [RantaipasokbloraController::class, 'rantaipasokblorashow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 RANTAI PASOK PERALATAN  -----------------------------------------------------
Route::get('/peralatankonstruksi', [RantaipasokbloraController::class, 'peralatankonstruksi']);
Route::get('/peralatankonstruksi/{namabadanusaha}', [RantaipasokbloraController::class, 'peralatankonstruksishow']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 4 RANTAI PASOK TOKO BANGUNAN   -----------------------------------------------------
Route::get('/tokobangunanblora', [TokobangunanbloraController::class, 'index']);
Route::get('/tokobangunanblora/{kecamatanblora}', [TokobangunanbloraController::class, 'tokobangunanblorashow']);
Route::get('/tokobangunanbloralist/{namatokobangunan}', [TokobangunanbloraController::class, 'tokobangunanbloralistdetails']);
// ___________________________________________________________________________________________________________________________________

// ================================================================================================================================================
// ================================================================================================================================================
// BACKEND MENU APLIKASI SIPJAKI DINAS PUPR PEMERINTAH KABUPATEN BLORA PROVINSI JAWA TENGAH
// ================================================================================================================================================

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard', [AdminDashboardController::class, 'index']);

// ======================================= BERANDA WEB -------------------------------------------------------------
// ---------------------- MENU 2 BERANDA  -----------------------------------------------------
// ---------------------- MENU 1 HEADER -----------------------------------------------------
Route::get('/header', [AdminDashboardController::class, 'header'])->middleware('auth');
Route::get('/header/update/{id}', [AdminDashboardController::class, 'headerupdate'])->middleware('auth');
Route::post('/header/updatecreate/{id}', [AdminDashboardController::class, 'headerupdatecreate'])->middleware(['auth'])->name('update.header');

// Route::get('/header/delete/{judul}', [AdminDashboardController::class, 'headerdelete'])->middleware('auth');
Route::delete('/header/delete/{judul}', [AdminDashboardController::class, 'headerdelete'])->middleware('auth');

// ___________________________________________________________________________________________________________________________________



// ======================================= KELEMBAGAAN BACKEND -------------------------------------------------------------
// ---------------------- MENU 1 STRUKTUR ORGANISASI  -----------------------------------------------------
Route::get('/bestrukturdinas', [StrukturController::class, 'strukturkedinasan'])->middleware(['auth', 'can:admin2']); //
// Route::get('/bestrukturdinas', [StrukturController::class, 'strukturkedinasan'])->middleware(['auth']);
// Route::get('/header/update', [AdminDashboardController::class, 'headerupdate'])->middleware('auth');
// Route::delete('/header/delete/{judul}', [AdminDashboardController::class, 'headerdelete'])->middleware('auth');

// ---------------------- MENU 2 PROFIL JASA KONSTRUKSI MAS JAKI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beprofiljakon', [StrukturController::class, 'beprofiljakon'])->middleware('auth');
// Route::get('/beprofiljakon', [StrukturController::class, 'beprofiljakon'])->middleware(['auth']);
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/beinformasiopd', [StrukturController::class, 'beinformasiopd'])->middleware(['auth', 'can:admin2']);
// Route::get('/beinformasiopd', [StrukturController::class, 'beinformasiopd'])->middleware(['auth']);
// Route::get('/beinformasiopd/update/{judul}', [StrukturController::class, 'beinformasiopdupdate'])->middleware('auth');
Route::get('/beinformasiopd/update/{id}', [StrukturController::class, 'beinformasiopdupdate'])->middleware(['auth', 'can:admin2'])->name('update.beinformasiopd'); //
// Route::get('/beinformasiopd/update/{id}', [StrukturController::class, 'beinformasiopdupdate'])->middleware(['auth'])->name('update.beinformasiopd');
Route::post('/beinformasiopd/updatecreate/{id}', [StrukturController::class, 'beinformasiopdupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.beinformasiopdupdatecreate');

// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/beinfoopd', [StrukturController::class, 'beinfoopd'])->middleware(['auth', 'can:admin2']);
// Route::get('/beinfoopd', [StrukturController::class, 'beinfoopd'])->middleware(['auth']);
// Route::get('/beinfoopd/update/{judul}', [StrukturController::class, 'beinfoopdupdate'])->middleware('auth');
Route::get('/beinfoopd/update/{id}', [StrukturController::class, 'beinfoopdupdate'])->middleware(['auth', 'can:admin2'])->name('update.beinfoopd');
// Route::get('/beinfoopd/update/{id}', [StrukturController::class, 'beinfoopdupdate'])->middleware(['auth'])->name('update.beinfoopd');
Route::post('/beinfoopd/updatecreate/{id}', [StrukturController::class, 'beinfoopdupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.beinfoopdupdatecreate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/bekepaladinas', [StrukturController::class, 'bekepaladinas'])->middleware(['auth', 'can:admin2']);
// Route::get('/bekepaladinas', [StrukturController::class, 'bekepaladinas'])->middleware(['auth']);
// Route::get('/bekepaladinas/update/{namalengkap}', [StrukturController::class, 'bekepaladinasupdate'])->middleware('auth');
Route::get('/bekepaladinas/update/{id}', [StrukturController::class, 'bekepaladinasupdate'])->middleware(['auth', 'can:admin2'])->name('update.bekepaladinas');
// Route::get('/bekepaladinas/update/{id}', [StrukturController::class, 'bekepaladinasupdate'])->middleware(['auth'])->name('update.bekepaladinas');
Route::post('/bekepaladinas/updatecreate/{id}', [StrukturController::class, 'bekepaladinasupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.bekepaladinasupdatecreate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/bekabid', [StrukturController::class, 'bekabidbaru'])->middleware(['auth', 'can:admin2']);
// Route::get('/bekabid', [StrukturController::class, 'bekabidbaru'])->middleware(['auth']);
Route::get('/bekabid/update/{namalengkap}', [StrukturController::class, 'bekabidshow'])->middleware('auth');
Route::get('/bekabid/updatebaru/{id}', [StrukturController::class, 'bekabidbaruupdate'])->middleware(['auth', 'can:admin2'])->name('update.bekabidbaru');
// Route::get('/bekabid/updatebaru/{id}', [StrukturController::class, 'bekabidbaruupdate'])->middleware(['auth'])->name('update.bekabidbaru');
Route::post('/bekabid/updatecreate/{id}', [StrukturController::class, 'bekabidbaruupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.bekabidbaruupdatecreate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/besubbid', [StrukturController::class, 'besubbid'])->middleware(['auth', 'can:admin2']);
// Route::get('/besubbid', [StrukturController::class, 'besubbid'])->middleware(['auth']);
// Route::get('/besubbid/update/{namalengkap}', [StrukturController::class, 'besubbidupdate'])->middleware('auth');
Route::get('/besubbid/update/{id}', [StrukturController::class, 'besubbidupdate'])->middleware(['auth', 'can:admin2'])->name('update.besubbidupdate');
// Route::get('/besubbid/update/{id}', [StrukturController::class, 'besubbidupdate'])->middleware(['auth'])->name('update.besubbidupdate');
Route::post('/besubbid/updatecreate/{id}', [StrukturController::class, 'besubbidcreateupdate'])->middleware(['auth', 'can:admin2'])->name('update.besubbidcreateupdate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/beinformasi', [StrukturController::class, 'beinformasi'])->middleware(['auth', 'can:admin2']);
// Route::get('/beinformasi', [StrukturController::class, 'beinformasi'])->middleware(['auth']);
// Route::get('/beinformasi/update/{id}', [StrukturController::class, 'beinformasiupdate'])->middleware('auth');
Route::get('/beinformasi/update/{id}', [StrukturController::class, 'beinformasiupdate'])->middleware(['auth', 'can:admin2'])->name('update.beinformasiupdate');
// Route::get('/beinformasi/update/{id}', [StrukturController::class, 'beinformasiupdate'])->middleware(['auth'])->name('update.beinformasiupdate');
Route::post('/beinformasi/updatecreate/{id}', [StrukturController::class, 'beinformasicreateupdate'])->middleware(['auth', 'can:admin2'])->name('update.beinformasiupdatecreate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/besipjaki', [StrukturController::class, 'besipjaki'])->middleware(['auth', 'can:admin2']);
// Route::get('/besipjaki', [StrukturController::class, 'besipjaki'])->middleware(['auth']);
// Route::get('/besipjaki/update/{id}', [StrukturController::class, 'besipjakiupdate'])->middleware('auth');
Route::get('/besipjaki/update/{id}', [StrukturController::class, 'besipjakiupdate'])->middleware(['auth', 'can:admin2'])->name('update.besipjakiupdate');
// Route::get('/besipjaki/update/{id}', [StrukturController::class, 'besipjakiupdate'])->middleware(['auth'])->name('update.besipjakiupdate');
Route::post('/besipjaki/updatecreate/{id}', [StrukturController::class, 'besipjakicreateupdate'])->middleware(['auth', 'can:admin2'])->name('update.besipjakicreateupdate');
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/bejabatan', [StrukturController::class, 'bejabatan'])->middleware(['auth', 'can:admin2']);
// Route::get('/bejabatan', [StrukturController::class, 'bejabatan'])->middleware(['auth']);
Route::get('/bejabatan/update/{id}', [StrukturController::class, 'bejabatanupdate'])->middleware(['auth', 'can:admin2'])->name('update.bejabatanupdate');
// Route::get('/bejabatan/update/{id}', [StrukturController::class, 'bejabatanupdate'])->middleware(['auth'])->name('update.bejabatanupdate');
Route::post('/bejabatan/updatecreate/{id}', [StrukturController::class, 'bejabatancreateupdate'])->middleware(['auth', 'can:admin2'])->name('update.bejabatancreateupdate');
Route::get('/bejabatan/create', [StrukturController::class, 'bejabatancreate'])->middleware(['auth', 'can:admin2'])->name('create.bejabatancreate');
// Route::get('/bejabatan/create', [StrukturController::class, 'bejabatancreate'])->middleware(['auth'])->name('create.bejabatancreate');
Route::post('/bejabatan/createnew', [StrukturController::class, 'bejabatancreatenew'])->middleware(['auth', 'can:admin2'])->name('create.bejabatancreatenew');
Route::delete('/bejabatan/delete/{namalengkap}', [StrukturController::class, 'bejabatandelete'])->middleware(['auth', 'can:admin2']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 TUPOKSI PROGRAM MAS JAKI -----------------------------------------------------
// Route::get('/betupoksi', [StrukturController::class, 'betupoksi'])->middleware(['auth', 'can:admin2']); // DI RUBAH
Route::get('/betupoksi', [StrukturController::class, 'betupoksi'])->middleware(['auth']);
// Route::get('/betupoksi/update/{id}', [StrukturController::class, 'betupoksiupdate'])->middleware('auth');
// Route::get('/betupoksi/update/{id}', [StrukturController::class, 'betupoksiupdate'])->middleware(['auth', 'can:admin2'])->name('update.betupoksiupdate'); // DI RUBAH
Route::get('/betupoksi/update/{id}', [StrukturController::class, 'betupoksiupdate'])->middleware(['auth'])->name('update.betupoksiupdate');
Route::post('/betupoksi/updatecreate/{id}', [StrukturController::class, 'betupoksicreateupdate'])->middleware(['auth', 'can:admin2'])->name('update.betupoksicreateupdate');


// ======================================= BERITA JAKON BACKEND -------------------------------------------------------------
// ---------------------- MENU 1 DAFTAR BERITA MAS JAKI JAKON   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beberitajakon', [BeritajakonController::class, 'beberitajakon'])->middleware(['auth', 'can:admin2']); // DIRUBAH
// Route::get('/beberitajakon', [BeritajakonController::class, 'beberitajakon'])->middleware(['auth']);
Route::get('/beberitajakon/show/{id}', [BeritajakonController::class, 'beberitajakonshow'])->middleware(['auth', 'can:admin2']); // DIRUBAH
// Route::get('/beberitajakon/show/{id}', [BeritajakonController::class, 'beberitajakonshow'])->middleware(['auth']);
Route::get('/beberitajakon/update/{id}', [BeritajakonController::class, 'beberitajakonupdate'])->middleware(['auth', 'can:admin2'])->name('update.beberitajakonupdate'); // DIRUBAH
// Route::get('/beberitajakon/update/{id}', [BeritajakonController::class, 'beberitajakonupdate'])->middleware(['auth'])->name('update.beberitajakonupdate');
Route::post('/beberitajakon/updatecreate/{id}', [BeritajakonController::class, 'beberitajakoncreateupdate'])->middleware(['auth', 'can:admin2'])->name('update.beberitajakoncreateupdate'); // DIRUBAH
// Route::post('/beberitajakon/updatecreate/{id}', [BeritajakonController::class, 'beberitajakoncreateupdate'])->middleware(['auth'])->name('update.beberitajakoncreateupdate');
Route::get('/beberitajakon/create', [BeritajakonController::class, 'beberitajakoncreate'])->middleware(['auth', 'can:admin2'])->name('create.beberitajakoncreate'); // DIRUBAH
// Route::get('/beberitajakon/create', [BeritajakonController::class, 'beberitajakoncreate'])->middleware(['auth'])->name('create.beberitajakoncreate');
Route::post('/beberitajakon/createnew', [BeritajakonController::class, 'beberitajakoncreatenew'])->middleware(['auth', 'can:admin2'])->name('create.beberitajakoncreatenew'); // DIRUBAH
// Route::post('/beberitajakon/createnew', [BeritajakonController::class, 'beberitajakoncreatenew'])->middleware(['auth'])->name('create.beberitajakoncreatenew');
Route::delete('/beberitajakon/delete/{judul}', [BeritajakonController::class, 'beberitajakondelete'])->middleware(['auth', 'can:admin2']); // DOIRUBAH
// Route::delete('/beberitajakon/delete/{judulberita}', [BeritajakonController::class, 'beberitajakondelete'])->middleware(['auth']);

// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 ARTIKEL JAKON MAS JAKI BLORA   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beartikeljakon', [BeritajakonController::class, 'beartikeljakon'])->middleware(['auth', 'can:admin2']); // DIRUBAH
// Route::get('/beartikeljakon', [BeritajakonController::class, 'beartikeljakon'])->middleware(['auth']);
Route::get('/beartikeljakon/show/{id}', [BeritajakonController::class, 'beartikeljakonshow'])->middleware(['auth', 'can:admin2']); // DIRUBAH
// Route::get('/beartikeljakon/show/{id}', [BeritajakonController::class, 'beartikeljakonshow'])->middleware(['auth']);
Route::get('/beartikeljakon/update/{id}', [BeritajakonController::class, 'beartikeljakonupdate'])->middleware(['auth', 'can:admin2'])->name('update.beartikeljakonupdate'); // DIRUBAH
// Route::get('/beartikeljakon/update/{id}', [BeritajakonController::class, 'beartikeljakonupdate'])->middleware(['auth'])->name('update.beartikeljakonupdate');
Route::post('/beartikeljakon/updatecreate/{id}', [BeritajakonController::class, 'beartikeljakoncreateupdate'])->middleware(['auth', 'can:admin2'])->name('update.beartikeljakoncreateupdate'); // DIRUBAH
// Route::post('/beartikeljakon/updatecreate/{id}', [BeritajakonController::class, 'beartikeljakoncreateupdate'])->middleware(['auth'])->name('update.beartikeljakoncreateupdate');
Route::get('/beartikeljakon/create', [BeritajakonController::class, 'beartikeljakoncreate'])->middleware(['auth', 'can:admin2'])->name('create.beartikeljakoncreate'); // DIRUBAH
// Route::get('/beartikeljakon/create', [BeritajakonController::class, 'beartikeljakoncreate'])->middleware(['auth'])->name('create.beartikeljakoncreate');
Route::post('/beartikeljakon/createnew', [BeritajakonController::class, 'beartikeljakoncreatenew'])->middleware(['auth', 'can:admin2'])->name('create.beartikeljakoncreatenew'); // DIRUBAH
// Route::post('/beartikeljakon/createnew', [BeritajakonController::class, 'beartikeljakoncreatenew'])->middleware(['auth'])->name('create.beartikeljakoncreatenew');
Route::delete('/beartikeljakon/delete/{judulberita}', [BeritajakonController::class, 'beartikeljakondelete'])->middleware(['auth', 'can:admin2']); // DIRUBAH
// Route::delete('/beartikeljakon/delete/{judulberita}', [BeritajakonController::class, 'beartikeljakondelete'])->middleware(['auth']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 ARTIKEL JAKON MAS JAKI BLORA   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bedokumentasijakon', [BeritajakonController::class, 'bedokumentasijakon'])->middleware(['auth', 'can:admin2']); // DIRUBAH
Route::get('/bedokumentasijakon/show/{id}', [BeritajakonController::class, 'bedokumentasijakonshow'])->middleware(['auth', 'can:admin2']); // DIRUBAH
// Route::get('/bedokumentasijakon/update/{id}', [BeritajakonController::class, 'bedokumentasijakonupdate'])->middleware(['auth', 'can:admin2']); // DIRUBAH
Route::get('/bedokumentasijakon/update/{id}', [BeritajakonController::class, 'bedokumentasijakonupdate'])
    ->middleware(['auth', 'can:admin2'])
    ->name('bedokumentasijakon.update');
Route::post('/bedokumentasijakon/updatecreate/{id}', [BeritajakonController::class, 'bedokumentasijakoncreaupdate'])->middleware(['auth', 'can:admin2'])->name('update.bedokumentasijakon'); // DIRUBAH
Route::get('/bedokumentasijakon/create', [BeritajakonController::class, 'bedokumentasijakoncreate'])->middleware(['auth', 'can:admin2'])->name('create.beartikeljakoncreate'); // DIRUBAH
Route::post('/bedokumentasijakon/createnew', [BeritajakonController::class, 'bedokumentasijakoncreatenew'])->middleware(['auth', 'can:admin2'])->name('create.dokumentasijakon'); // DIRUBAH
Route::delete('/bedokumentasijakondelete/{judul_kegiatan}', [BeritajakonController::class, 'bedokumentasijakondelete'])->middleware(['auth', 'can:admin2']); // DIRUBAH
// ___________________________________________________________________________________________________________________________________
// ___________________________________________________________________________________________________________________________________
Route::get('/bedokberitajakon', [BeritajakonController::class, 'bedokberitajakon'])->middleware(['auth', 'can:admin2']); // DIRUBAH
Route::get('/bedokberitajakon/show/{id}', [BeritajakonController::class, 'bedokberitajakonshow'])->middleware(['auth', 'can:admin2']); // DIRUBAH
Route::get('/bedokberitajakon/update/{id}', [BeritajakonController::class, 'bedokberitajakonupdate'])->middleware(['auth', 'can:admin2'])->name('bedokberitakegiatanjakon'); // DIRUBAH
// Route::get('/bedokumentasijakon/update/{id}', [BeritajakonController::class, 'bedokumentasijakonupdate'])
//     ->middleware(['auth', 'can:admin2'])
//     ->name('bedokumentasijakon.update');
Route::post('/bedokberitajakon/updatecreate/{id}', [BeritajakonController::class, 'bedokberitajakonupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.beberitakegiatanjakonnew'); // DIRUBAH
Route::get('/bedokberitajakon/create', [BeritajakonController::class, 'bedokberitajakoncreate'])->middleware(['auth', 'can:admin2'])->name('create.beberitakegiaran'); // DIRUBAH
Route::post('/bedokberitajakon/createnew', [BeritajakonController::class, 'bedokberitajakoncreatenew'])->middleware(['auth', 'can:admin2'])->name('create.dokberitakegiatan'); // DIRUBAH
Route::delete('/bedokberitajakondelete/{id}', [BeritajakonController::class, 'bedokberitajakondelete'])->middleware(['auth', 'can:admin2']); // DIRUBAH
// ___________________________________________________________________________________________________________________________________

// ------------------------- FRONTEND HALAMAN DOKUMENTASI KEGIATAN KONSTRUKSI  --------------------------
Route::get('/resdokumentasi', [BeritajakonController::class, 'resdokumentasi']);
Route::get('/resdokumentasishow/{id}', [BeritajakonController::class, 'resdokumentasishow']);

// Route::get('/resartikeljakon', [BeritajakonController::class, 'androidartikeljakon']);
// Route::get('/resartikeljakon/{judul}', [BeritajakonController::class, 'androidartikeljakonshow']);
// ___________________________________________________________________________________________________________________________________


// ======================================= DATA JAKON BACKEND -------------------------------------------------------------
// ---------------------- MENU 01 BUJK KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
// Route::get('/bebujkjakon', [BujkkontraktorController::class, 'bebujkjakon'])->middleware(['auth', 'can:admin2']);
Route::get('/bebujkjakon', [BujkkontraktorController::class, 'bebujkjakon'])->middleware(['auth', 'can:admin2']);
// Route::get('/bebujkjakon', [BujkkontraktorController::class, 'bebujkjakon']);
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 1 BUJK KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bebujkkonstruksi', [BujkkontraktorController::class, 'bebujkkonstruksi'])->middleware(['auth', 'can:admin2']);
// Route::get('/bebujkkonstruksi', [BujkkontraktorController::class, 'bebujkkonstruksi']);
Route::get('/bebujkkonstruksi/show/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksishow'])->middleware(['auth', 'can:admin2']);
Route::get('/bebujkkonstruksi/showsubklasifikasi/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksiklasifikasi'])->middleware(['auth', 'can:admin2'])->name('bebujkkonstruksi.showsubklasifikasi');

Route::get('/bebujkkonstruksi/createsubklasifikasi/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksicreateklasifikasi'])->middleware(['auth', 'can:admin2'])->name('bebujkkonstruksi.createklasifikasi');
Route::post('/bebujkkonstruksi/createsubklasifikasi/create', [BujkkontraktorController::class, 'bebujkkonstruksicreateklasifikasicreate'])->middleware(['auth', 'can:admin2'])->name('bebujkkonstruksi.createklasifikasicreate');

Route::get('/bebujkkonstruksi/update/{id}', [BujkkontraktorController::class, 'bebujkkonstruksiupdate'])->middleware(['auth', 'can:admin2'])->name('update.bebujkkonstruksiupdate');
Route::post('/bebujkkonstruksi/updatecreate/{id}', [BujkkontraktorController::class, 'bebujkkonstruksicreateupdate'])->middleware(['auth', 'can:admin2'])->name('update.bebujkkonstruksicreateupdate');
Route::get('/bebujkkonstruksi/create', [BujkkontraktorController::class, 'bebujkkonstruksicreate'])->middleware(['auth', 'can:admin2'])->name('create.bebujkkonstruksicreate');
Route::post('/bebujkkonstruksi/createnew', [BujkkontraktorController::class, 'bebujkkonstruksicreatenew'])->middleware(['auth', 'can:admin2'])->name('create.bebujkkonstruksicreatenew');

Route::delete('/bebujkkonstruksi/delete/{id}', [BujkkontraktorController::class, 'bebujkkonstruksidelete'])->middleware(['auth', 'can:admin2']);
Route::delete('/bebujkkonstruksiklasifikasi/delete/{id}', [BujkkontraktorController::class, 'bebujkkonstruksiklasifikasidelete'])->middleware(['auth', 'can:admin2'])->name('bebujkkonstruksiklasifikasi.delete');
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 2 BUJK KONSULTASI KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bebujkkonsultan', [BujkkonsultanController::class, 'bebujkkonsultan'])->middleware(['auth', 'can:admin2']);
Route::get('/bebujkkonsultan/show/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultanshow'])->middleware(['auth', 'can:admin2']);
Route::get('/bebujkkonsultan/showsubklasifikasi/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultanshowklasifikasi'])->middleware(['auth', 'can:admin2']);

Route::get('/bebujkkonsultan/createsubklasifikasi/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultancreateklasifikasi'])->middleware(['auth', 'can:admin2'])->name('bebujkkonsultan.createklasifikasi');
Route::post('/bebujkkonsultan/createsubklasifikasi/create', [BujkkonsultanController::class, 'bebujkkonsultancreateklasifikasicreate'])->middleware(['auth', 'can:admin2'])->name('bebujkkonsultan.createklasifikasicreate');

Route::get('/bebujkkonsultan/update/{id}', [BujkkonsultanController::class, 'bebujkkonsultanupdate'])->middleware(['auth', 'can:admin2'])->name('update.bebujkkonsultanupdate');
Route::post('/bebujkkonsultan/updatecreate/{id}', [BujkkonsultanController::class, 'bebujkkonsultancreateupdate'])->middleware(['auth', 'can:admin2'])->name('update.bebujkkonsultancreate');
Route::get('/bebujkkonsultan/create', [BujkkonsultanController::class, 'bebujkkonsultancreate'])->middleware(['auth', 'can:admin2'])->name('create.bebujkkonsultancreate');
Route::post('/bebujkkonsultan/createnew', [BujkkonsultanController::class, 'bebujkkonsultancreatenew'])->middleware(['auth', 'can:admin2'])->name('create.bebujkkonsultancreatenew');

Route::delete('/bebujkkonsultan/delete/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultanshowdelete'])->middleware(['auth', 'can:admin2']);
Route::delete('/bebujkkonsultanklasifikasi/delete/{id}', [BujkkonsultanController::class, 'bebujkkonsultanshowklasifikasidelete'])->middleware(['auth', 'can:admin2'])->name('bebujkkonsultanklasifikasi.delete');
// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 3 DATA ASOSIASI JASA KONSTRUKSI   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beasosiasi', [BujkkontraktorController::class, 'beasosiasi'])->middleware(['auth', 'can:admin2']);
Route::get('/beasosiasi/create', [BujkkontraktorController::class, 'beasosiasicreate'])->middleware(['auth', 'can:admin2']);
Route::post('/beasosiasi/createnew', [BujkkontraktorController::class, 'beasosiasicreatenew'])->middleware(['auth', 'can:admin2'])->name('create.asosiasimasjakicreatenew');
Route::get('/beasosiasi/show/{namaasosiasi}', [BujkkontraktorController::class, 'beasosiasishow'])->middleware(['auth', 'can:admin2']);
Route::delete('/beasosiasi/delete/{namaasosiasi}', [BujkkontraktorController::class, 'beasosiasidelete'])->middleware(['auth', 'can:admin2']);
Route::get('/beasosiasi/update/{id}', [BujkkontraktorController::class, 'beasosiasiupdate'])->middleware(['auth', 'can:admin2'])->name('beasosiasiupdate');
Route::post('/beasosiasi/updatecreate/{id}', [BujkkontraktorController::class, 'beasosiasiupdatecreate'])->middleware(['auth', 'can:admin2'])->name('beasosiasiupdatecreate');
// ___________________________________________________________________________________________________________________________________


// ---------------------- MENU 02 DATA SKK TENAGA KERJA DISELENGGARAKAN DPUPR KABUPATEN BLORA -----------------------------------------------------
// ________________________________________________________________________________________________________________
// ---------------------- MENU 1 DATA SKK TENAGA KERJA DISELENGGARAKAN DPUPR KABUPATEN BLORA -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beskkdpupr', [SkktenagakerjabloraController::class, 'beskkdpupr'])->middleware(['auth', 'can:admin2']);
Route::get('/beskkdpupr/show/{nama}', [SkktenagakerjabloraController::class, 'beskkdpuprshow'])->middleware(['auth', 'can:admin2']);
Route::delete('/beskkdpupr/delete/{nama}', [SkktenagakerjabloraController::class, 'beskkdpuprdelete'])->middleware(['auth', 'can:admin2']);
Route::get('/beskkdpupr/update/{nama}', [SkktenagakerjabloraController::class, 'beskkdpuprupdate'])->middleware(['auth', 'can:admin2']);
Route::post('/beskkdpupr/updatecreate/{nama}', [SkktenagakerjabloraController::class, 'beskkdpuprupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.beskkdpuprupdate');
// ___________________________________________________________________________________________________________________________________

// ________________________________________________________________________________________________________________
// ---------------------- MENU 2 DATA SEMUA SKK TENAGA KERJA KABUPATEN BLORA -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/beskkallblora', [SkktenagakerjabloraController::class, 'beskkall'])->middleware(['auth', 'can:admin2']);
Route::get('/beskkallblora/show/{nama}', [SkktenagakerjabloraController::class, 'beskkallshow'])->middleware(['auth', 'can:admin2']);
Route::delete('/beskkallblora/delete/{nama}', [SkktenagakerjabloraController::class, 'beskkalldelete'])->middleware(['auth', 'can:admin2']);
Route::get('/beskkallblora/update/{nama}', [SkktenagakerjabloraController::class, 'beskkallbloraupdate'])->middleware(['auth', 'can:admin2']);
Route::post('/beskkallblora/updatecreate/{id}', [SkktenagakerjabloraController::class, 'beskkallbloracreateupdate'])->middleware(['auth', 'can:admin2'])->name('update.beallskkupdate');
Route::get('/beskkallblora/create', [SkktenagakerjabloraController::class, 'beskkallbloracreate'])->middleware(['auth', 'can:admin2']);
Route::post('/beskkallblora/createnew', [SkktenagakerjabloraController::class, 'beskkallbloracreatenew'])->middleware(['auth', 'can:admin2'])->name('create.beallskkcreate');
// ___________________________________________________________________________________________________________________________________

// ________________________________________________________________________________________________________________
// ---------------------- MENU 3 PROFIL PAKET PEKERJAAN -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/statistikprofilpekerjaan', [PaketpekerjaanmasjakiController::class, 'statistikprofilpekerjaan'])->middleware(['auth', 'can:admin3'])->name('bepaketpekerjaanrekapindex'); // SUDAH DI GATE
Route::get('/bepaketpekerjaanrekap', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaanrekap'])->middleware(['auth', 'can:admin3'])->name('bepaketpekerjaanrekapindex'); // SUDAH DI GATE
Route::get('/bepaketpekerjaan', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaan'])->middleware(['auth', 'can:admin3'])->name('bepaketpekerjaanindex'); // SUDAH DI GATE
// Route::get('/bepaketpekerjaan', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaan'])->name('bepaketpekerjaanindex'); // SUDAH DI GATE
Route::get('/bepaketpekerjaan/showsurat/{id}', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaanshowsurat'])->middleware(['auth', 'can:admin3']); // SUDAH DI GATE
Route::get('/bepaketpekerjaancreate', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaancreate'])->middleware(['auth', 'can:admin3']); // SUDAH DI GATE
// Route::get('/bepaketpekerjaancreate', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaancreate']);// SUDAH DI GATE
Route::post('/bepaketpekerjaancreatenew', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaancreatenew'])->middleware(['auth', 'can:admin3'])->name('bepaketpekerjaancreatenew'); // SUDAH DI GATE
// Route::post('/bepaketpekerjaancreatenew', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaancreatenew'])->name('bepaketpekerjaancreatenew'); // SUDAH DI GATE
// Route::get('/bepaketpekerjaan/update/{id}', [PaketpekerjaanmasjakiController::class, 'paketpekerjaanupdate'])->middleware(['auth', 'can:admin3']);
Route::get('/bepaketpekerjaan/update/{id}', [PaketpekerjaanmasjakiController::class, 'paketpekerjaanupdate'])->middleware(['auth', 'can:admin3']);
Route::post('/bepaketpekerjaan/updatecreate/{id}', [PaketpekerjaanmasjakiController::class, 'paketpekerjaanupdatenew'])->middleware(['auth', 'can:admin3'])->name('update.paketpekerjaan');

Route::get('/bepaketpekerjaan/view/{id}', [PaketpekerjaanmasjakiController::class, 'paketpekerjaanview'])->middleware(['auth', 'can:admin3']);

// BELUM DI BUATKAN
// Route::get('/bebujkkonstruksi/createsubklasifikasi/{namalengkap}', [BujkkontraktorController::class, 'bebujkkonstruksicreateklasifikasi'])->middleware('auth')->name('bebujkkonstruksi.createklasifikasi');
// Route::post('/bebujkkonstruksi/createsubklasifikasi/create', [BujkkontraktorController::class, 'bebujkkonstruksicreateklasifikasicreate'])->middleware('auth')->name('bebujkkonstruksi.createklasifikasicreate');

// HAK AKSES PRIBADI ATAU DINAS
Route::get('/bepaketpekerjaandinas', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaandinas'])->middleware(['auth', 'can:admin3']); // SUDAH DI GATE
Route::get('/bepaketpekerjaan/show/{namapekerjaan}', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaanshow'])->middleware(['auth', 'can:admin3']); // SUDAH DIGATE
// Route::delete('/bepaketpekerjaan/delete/{namapekerjaan}', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaandelete'])->middleware(['auth', 'can:admin2']);
Route::delete('/bepaketpekerjaan/delete/{namapekerjaan}', [PaketpekerjaanmasjakiController::class, 'bepaketpekerjaandelete'])->middleware(['auth', 'can:admin3']); // SUDHA DI GATE

// SURAT SURAT PROFIL PAKET PEKERJAAN
Route::get('/bepekerjaandetails/{id}', [PaketpekerjaanmasjakiController::class, 'bepekerjaandetails'])->middleware(['auth', 'can:admin2']);

Route::get('/bedetailspekerjaan/{id}', [PaketpekerjaanmasjakiController::class, 'bepekerjaansurat2'])->middleware(['auth', 'can:admin2']);

Route::get('/bedetailsspk/{id}', [PaketpekerjaanmasjakiController::class, 'bepekerjaansurat3'])->middleware(['auth', 'can:admin2']);

Route::get('/bedetailsskk/{id}', [PaketpekerjaanmasjakiController::class, 'bepekerjaansurat4'])->middleware(['auth', 'can:admin2']);

Route::get('/bedetailsuratperjanjianpekerjaan/{id}', [PaketpekerjaanmasjakiController::class, 'besuratperjanjianpekerjaansurat5'])->middleware(['auth', 'can:admin2']);


// ___________________________________________________________________________________________________________________________________
Route::get('/bepengawasanbujk', [PengawasanbujkController::class, 'bepengawasanbujk'])->middleware(['auth', 'can:admin2']);
Route::get('/bepengawasanbujk/show/{id}', [PengawasanbujkController::class, 'bepengawasanbujkshow'])->middleware(['auth', 'can:admin2']);
Route::get('/bepengawasanbujk/update/{id}', [PengawasanbujkController::class, 'bepengawasanbujkupdatecreate'])->middleware(['auth', 'can:admin2'])->name('updatepengwasanbujk');
Route::put('/bepengawasanbujk/updatecreate/{id}', [PengawasanbujkController::class, 'bepengawasanbujkupdatecreatenew'])->middleware(['auth', 'can:admin2'])->name('updatepengwasanbujknew');


Route::get('/bepengawasanbujk/create', [PengawasanbujkController::class, 'bepengawasanbujkcreate'])->middleware(['auth', 'can:admin2']);
Route::post('/bepengawasanbujk/createnew', [PengawasanbujkController::class, 'bepengawasanbujkcreatenew'])->middleware(['auth', 'can:admin2'])->name('createpengawasanbujknew');
Route::delete('/bepengawasanbujk/delete/{id}', [PengawasanbujkController::class, 'bepengawasanbujkdelete'])->middleware(['auth', 'can:admin2']);

// ======================================= MENU AGENDA PEMBINAAN  -------------------------------------------------------------
// ---------------------- MENU 01 AGENDA PELATIHAN   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
// Route::get('/beagendapelatihan', [PembinaanController::class, 'beagendapelatihan'])->middleware(['auth', 'can:admin2']);
Route::get('/beagendapelatihan', [PembinaanController::class, 'beagendapelatihan']);

// Route::get('/beagendapelatihanpeserta/show/{id}', [PembinaanController::class, 'beagendapelatihanshowpeserta'])->middleware(['auth', 'can:admin2']);
Route::get('/beagendapelatihanpeserta/show/{id}', [PembinaanController::class, 'beagendapelatihanshowpeserta']);


Route::get('/beagendapelatihan/show/{namakegiatan}', [PembinaanController::class, 'beagendapelatihanshow'])->middleware(['auth', 'can:admin2']);
Route::delete('/beagendapelatihanpeserta/delete/{id}', [PembinaanController::class, 'beagendapelatihanpesertadelete'])->middleware(['auth', 'can:admin2']);
Route::delete('/beagendapelatihan/delete/{namakegiatan}', [PembinaanController::class, 'beagendapelatihandelete'])->middleware(['auth', 'can:admin2']);

Route::get('/beagendapelatihan/update/{namakegiatan}', [PembinaanController::class, 'beagendapelatihanupdate'])->middleware(['auth', 'can:admin2'])->name('beagendapelatihanupdate');
Route::post('/beagendapelatihan/updatecreate/{id}', [PembinaanController::class, 'beagendapelatihanupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.beagendapelatihancreate');

Route::get('/beagendapelatihan/create', [PembinaanController::class, 'beagendapelatihancreate'])->middleware(['auth', 'can:admin2'])->name('beagendapelatihancreate');
Route::post('/beagendapelatihan/createnew', [PembinaanController::class, 'beagendapelatihancreatenew'])->middleware(['auth', 'can:admin2'])->name('beagendapelatihancreatenew');

Route::get('/beagendapelatihanmateri/{id}', [PembinaanController::class, 'beagendapelatihanmateri'])->middleware(['auth', 'can:admin2'])->name('beagendapelatihanmateri');
Route::delete('/beagendapelatihanmateri/delete/{id}', [PembinaanController::class, 'beagendapelatihanmateridelete'])->middleware(['auth', 'can:admin2'])->name('beagendapelatihanmateridelete');

// ROUTE PENGAMBILAN DATA ID
Route::get('/beagendapelatihanmateri/createmateri/{id}', [PembinaanController::class, 'beagendapelatihanmatericreate'])->middleware(['auth', 'can:admin2'])->name('beagendapelatihanmatericreate');
Route::post('/beagendapelatihanmateri/createmateri/new', [PembinaanController::class, 'beagendapelatihanmatericreatenew'])->middleware(['auth', 'can:admin2'])->name('beagendapelatihanmatericreatenew');


// Route::get('/beagendapelatihanmateri', [PembinaanController::class, 'beagendapelatihanmateri'])->middleware('auth');


// ___________________________________________________________________________________________________________________________________

// ---------------------- MENU 02 PESERTA PELATIHAN   -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/bepesertapelatihanindex', [PesertapelatihanController::class, 'bepesertapelatihanindex'])->middleware('auth');
Route::get('/bepesertapelatihan', [PesertapelatihanController::class, 'bepesertapelatihan'])->middleware('auth');
Route::get('/bepesertapelatihan/show/{name}', [PesertapelatihanController::class, 'bepesertapelatihanshow'])->middleware('auth');
Route::delete('/bepesertapelatihan/delete/{id}', [PesertapelatihanController::class, 'bepesertapelatihandelete'])->middleware('auth');

// Route::get('/bepesertapelatihansertifikat/show/{id}', [PesertapelatihanController::class, 'bepesertapelatihansertifikat'])->middleware('auth')->name('bepesertauploadsertifikat.show');

Route::get('/bepesertapelatihansertifikat/show/{id}', [PesertapelatihanController::class, 'bepesertapelatihansertifikat'])
    ->middleware('auth')
    ->name('bepesertauploadsertifikat.show');

Route::get('/bepesertapuploadsertifikat/show/{id}', [PesertapelatihanController::class, 'bepesertauploadsertifikat'])->middleware('auth')->name('bepesertauploadsertifikat.show1');
Route::get('/bepesertapuploadsertifikatres/show/{id}', [PesertapelatihanController::class, 'bepesertauploadsertifikatandroid'])->name('bepesertauploadsertifikat.show2');

Route::post('/bepesertapuploadsertifikat/create/{id}', [PesertapelatihanController::class, 'bepesertauploadsertifikatupload'])->middleware('auth')->name('bepesertauploadsertifikatupload');

Route::get('/bepelatihanjampelajaran/{id}', [PesertapelatihanController::class, 'bepelatihanjampelajaran'])->middleware('auth')->name('bepelatihanjampelajaran');

Route::delete('/bepelatihanjampelajaran/delete/{id}', [PesertapelatihanController::class, 'bepelatihanjampelajarandelete'])->middleware('auth')->name('bepelatihanjampelajarandelete');

Route::get('/bepelatihanjampelajaran/createjam/{id}', [PesertapelatihanController::class, 'bepelatihanjampelajarancreate'])->middleware('auth')->name('bepelatihanjampelajarantenagakerja');
Route::post('/bepelatihanjampelajaran/createjam/create', [PesertapelatihanController::class, 'bepelatihanjampelajarancreatenew'])->middleware('auth')->name('bepelatihanjampelajarantenagakerjacreate');

// HAK AKSES AKUN LSP PENERBIT UNTUK PELATIHAN DAN SKK
Route::get('/beakseslsppenerbit', [PesertapelatihanController::class, 'beakseslsppenerbit'])->middleware('auth');

// HAK AKSES PESERTA UNTK DAFTAR

Route::get('/daftarpesertapelatihan/create/{id}', [PesertapelatihanController::class, 'daftarpesertapelatihan'])->name('daftarpesertapelatihan');
Route::post('/daftarpesertapelatihan/createmateri/new', [PesertapelatihanController::class, 'daftarpesertapelatihancreatenew'])->name('daftarpesertapelatihancreatenew');




// ___________________________________________________________________________________________________________________________________


// ---------------------- MENU 03 AGENDA SKK MAS JAKI BLORA JAWA TENGAH    -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
// Route::get('/beagendaskk', [PembinaanController::class, 'beagendaskk'])->middleware('auth');
// Route::get('/beagendaskkpeserta/show/{namakegiatan}', [PembinaanController::class, 'beagendaskkpeserta'])->middleware('auth');
// Route::get('/beagendaskk/show/{namakegiatan}', [PembinaanController::class, beagendaskkmateri/createmateri'beagendaskkshow'])->middleware('auth');
// Route::delete('/beagendaskkpeserta/delete/{id}', [PembinaanController::class, 'beagendaskkdeletepeserta'])->middleware('auth');
// Route::delete('/beagendaskk/delete/{namakegiatan}', [PembinaanController::class, 'beagendaskkdelete'])->middleware('auth');
// ___________________________________________________________________________________________________________________________________

// BRO IGIT
Route::get('/beagendaskk', [PembinaanController::class, 'beagendaskk'])->middleware('auth');
// Route::get('/beagendaskk', [PembinaanController::class, 'beagendaskk']);
Route::get('/beagendaskkmateri/{id}', [PembinaanController::class, 'beagendaskkmateri'])->middleware('auth')->name('beagendaskkmateri');
// Route::get('/beagendaskkmateri/{id}', [PembinaanController::class, 'beagendaskkmateri'])->name('beagendaskkmateri');

Route::delete('/beagendaskkmateri/delete/{namakegiatan}', [PembinaanController::class, 'beagendaskkmateridelete'])->middleware('auth');
Route::delete('/beagendaskkpeserta/delete/{id}', [PembinaanController::class, 'beagendaskkpesertadelete'])->middleware('auth');

Route::get('/beagendaskk/show/{namakegiatan}', [PembinaanController::class, 'beagendaskkshow'])->middleware('auth');
// Route::get('/beagendaskk/show/{namakegiatan}', [PembinaanController::class, 'beagendaskkshow']);
Route::get('/beagendaskk/update/{namakegiatan}', [PembinaanController::class, 'beagendaskkupdate'])->middleware('auth')->name('beagendaskkupdate');
// Route::get('/beagendaskk/update/{namakegiatan}', [PembinaanController::class, 'beagendaskkupdate'])->name('beagendaskkupdate');

Route::post('/beagendaskk/updatecreate/{id}', [PembinaanController::class, 'beagendaskkupdatecreate'])->middleware('auth')->name('update.beagendaskkcreate');
// Route::post('/beagendaskk/updatecreate/{id}', [PembinaanController::class, 'beagendaskkupdatecreate'])->name('update.beagendaskkcreate');

Route::get('/beagendaskk/create', [PembinaanController::class, 'beagendaskkcreate'])->middleware('auth')->name('beagendaskkcreate');
// Route::get('/beagendaskk/create', [PembinaanController::class, 'beagendaskkcreate'])->name('beagendaskkcreate');
Route::post('/beagendaskk/createnew', [PembinaanController::class, 'beagendaskkcreatenew'])->middleware('auth')->name('beagendaskkcreatenew');

Route::delete('/beagendaskkmateriskk/delete/{id}', [PembinaanController::class, 'beagendaskkmaterideleteskk'])->middleware('auth')->name('beagendaskkmaterideleteskk');
Route::delete('/beagendaskkmateriskk/delete/{id}', [PembinaanController::class, 'beagendaskkmaterideleteskk'])->name('beagendaskkmaterideleteskk');

Route::get('/daftarpesertasertifikasiskk/create/{id}', [AgendaskkController::class, 'daftarpesertasertifikasiskknew'])->middleware('auth')->name('daftarpesertasertifikasiskk');
// Route::get('/daftarpesertasertifikasiskk/create/{id}', [AgendaskkController::class, 'daftarpesertasertifikasiskknew'])->name('daftarpesertasertifikasiskk');
Route::post('/daftarpesertasertifikasiskk/createpeserta/new', [AgendaskkController::class, 'daftarpesertasertifikasiskkcreatenew'])->middleware('auth')->name('daftarpesertasertifikasiskkcreatenew');
Route::post('/daftarpesertasertifikasiskk2/createpeserta2/new', [AgendaskkController::class, 'daftarpesertasertifikasiskkcreatenew2'])->middleware('auth')->name('daftarpesertasertifikasiskkcreatenew2');

Route::post('/daftarpesertasertifikasiskkt/createmateri/new', [AgendaskkController::class, 'daftarpesertasertifikasiskkcreateskkt'])->middleware('auth')->name('daftarpesertasertifikasiskkawalan');



Route::get('/beagendaskkpeserta/show/{id}', [PembinaanController::class, 'beagendaskkpesertashow'])->middleware('auth');
// Route::get('/beagendaskkpeserta/show/{id}', [PembinaanController::class, 'beagendaskkpesertashow']);
Route::get('/bepesertaskkshowberkas/show/{id}', [PembinaanController::class, 'bepesertaskkshowberkas'])->middleware('auth');
// Route::get('/bepesertaskkshowberkas/show/{id}', [PembinaanController::class, 'bepesertaskkshowberkas']);

// SERTIFIKAT SKK
Route::get('/besertifikatskk/{id}', [PembinaanController::class, 'besertifikatskk'])->middleware('auth');
Route::put('/besertifikatskkcreate/{id}', [PembinaanController::class, 'besertifikatskkputupdate'])->middleware('auth')->name('update.besertifikatskkputupdate');

Route::post('/peserta/downloadberkas/{id}', [PembinaanController::class, 'downloadSemuaBerkas'])->middleware('auth')->name('peserta.downloadSemua');

Route::get('/perbaikandataskk/{namalengkap}', [PembinaanController::class, 'perbaikandataskk'])->middleware('auth');
Route::post('/perbaikandataskk/createnew/{namalengkap}', [PembinaanController::class, 'perbaikandataskkupdate'])->middleware('auth')->name('berkasperbaikandatapeserta');

// TKK DPUPR 2025
Route::get('/beagendaskktkk', [PembinaanController::class, 'beagendaskktkk2025'])->middleware('auth');


// DASHBOARD PESERTA
Route::get('/bepesertaskkshowberkas/show/{agenda_id}/{user_id}', [PembinaanController::class, 'bepesertaskkshowberkasakunpeserta'])->middleware('auth');


// Route::get('/beagendaskkdatapeserta', [PembinaanController::class, 'beagendaskkdatapeserta'])->middleware('auth');
Route::get('/beagendaskkdatapeserta', [PembinaanController::class, 'beagendaskkdatapeserta']);

// Route::get('/beskkdatapesertajumlah/show/{id}', [AgendaskkController::class, 'beskkdatapesertajumlah'])->middleware('auth')->name('beskkdatapesertasertifikatupload');
Route::get('/beskkdatapesertajumlah/show/{id}', [AgendaskkController::class, 'beskkdatapesertajumlah'])->name('beskkdatapesertasertifikatupload');


Route::get('/beakseslsppenerbitskk', [PembinaanController::class, 'beakseslsppenerbitskk'])->middleware('auth');

// Route::get('/beagendaskkmateri/createmateri/{id}', [PembinaanController::class, 'beagendaskkmatericreate'])->middleware('auth')->name('beagendaskkmatericreate');
Route::get('/beagendaskkmateri/createmateri/{id}', [PembinaanController::class, 'beagendaskkmatericreate'])->name('beagendaskkmatericreate');
// Route::post('/beagendaskkmateri/createmateri/new', [PembinaanController::class, 'beagendaskkmatericreatenew'])->middleware('auth')->name('beagendaskkmatericreatenew');
Route::post('/beagendaskkmateri/createmateri/new', [PembinaanController::class, 'beagendaskkmatericreatenew'])->name('beagendaskkmatericreatenew');

// HAK AKSES PEKERJA

Route::get('/hakaksespekerjaskk', [HakAksesController::class, 'agendaskkpeserta'])->middleware(['auth', 'can:pekerja']);
Route::get('/hakaksespekerjaberkas', [HakAksesController::class, 'agendaskkpesertaberkas'])->middleware(['auth', 'can:pekerja']);
Route::get('/downsertifikatskk', [HakAksesController::class, 'downsertifikatskk'])->middleware(['auth', 'can:pekerja']);

Route::get('/hakaksespekerjaskkdaftar', [HakAksesController::class, 'hakaksespekerjaskkdaftar'])->middleware(['auth', 'can:pekerja']); // SUDAH GATE AKSES
// VERIFIKASI BERKAS PESERTA SKK
Route::put('/validasidokumenpesertaskk/{id}', [VerifikasiController::class, 'validasidokumenpesertaskk'])->middleware('auth')->name('validasidokumenpesertaskk');



// ROUTE UNTUK VERIFIKASI BOOLEADN

Route::put('/verifikasipesertapelatihan/{id}', [VerifikasiController::class, 'verifikasipesertapelatihan'])->middleware('auth')->name('verifikasi.updatepesertapelatihan');
Route::put('/verifikasikehadiran/{id}', [VerifikasiController::class, 'verifikasikehadiran'])->middleware('auth')->name('verifikasikehadiran');

Route::put('/verifikasipesertasertifikasi/{id}', [VerifikasiController::class, 'verifikasipesertasertifikasinew'])->middleware('auth')->name('verifikasipesertasertifikasi');


Route::post('/verifikasiktp/{id}', [VerifikasiController::class, 'verifikasiktp'])->middleware('auth')->name('validasi.ktp');

Route::put('/verifikasikehadiranlsp/{id}', [VerifikasiController::class, 'verifikasikehadiranlsp'])->name('verifikasilsp.update');

Route::put('/verifikasikehadiranlsphadir/{id}', [VerifikasiController::class, 'verifikasikehadiranlsphadir'])->name('verifikasikehadiranlsp');
Route::put('/terbitkansertifikat/{id}', [VerifikasiController::class, 'terbitkansertifikat'])->name('terbitkan.sertifikat');

Route::put('/verifikasipupesertaskk/{id}', [VerifikasiController::class, 'verifikasipupesertaskk'])->middleware('auth')->name('verifikasipupesertaskk');


// ---------------------- MENU PENGAWASAN TERTIB JAKON USAHA BACKEND    -----------------------------------------------------
// ___________________________________________________________________________________________________________________________________
Route::get('/betertibjakonusaha', [TertibjasakonstruksiController::class, 'betertibjakonusaha'])->middleware(['auth', 'can:admin3'])->name('bertertibjakonusaha');

Route::delete('/betertibjakonusaha/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahadelete'])->middleware(['auth', 'can:admin3']);

Route::get('/betertibjakonusaha/create', [TertibjasakonstruksiController::class, 'betertibjakonusahacreate'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahacreate');
Route::post('/betertibjakonusaha/createnew', [TertibjasakonstruksiController::class, 'betertibjakonusahacreatenew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahacreatenew');

Route::get('/betertibjakonusaha/update/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahaupdate'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahaupdate');
Route::post('/betertibjakonusaha/updatecreate/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahaupdatecreate'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahaupdatecreate');

Route::delete('/betertibjakonusahadel/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahadeletejakonusaha'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahadeletejakonusaha');

Route::get('/beuploadberkasusaha1/upload/{id}', [TertibjasakonstruksiController::class, 'beuploadberkasusaha1'])->middleware(['auth', 'can:admin3'])->name('beuploadberkasusaha1uploadindex');
Route::post('/beuploadberkasusaha1new/{id}', [TertibjasakonstruksiController::class, 'beuploadberkasusaha1new'])->middleware(['auth', 'can:admin3'])->name('beuploadberkasusaha1new');

Route::get('/beuploadberkasusaha2/upload/{id}', [TertibjasakonstruksiController::class, 'beuploadberkasusaha2'])->middleware(['auth', 'can:admin3'])->name('beuploadberkasusaha2uploadindex');
Route::post('/beuploadberkasusaha2new/{id}', [TertibjasakonstruksiController::class, 'beuploadberkasusaha2new'])->middleware(['auth', 'can:admin3'])->name('beuploadberkasusaha2new');

Route::get('/beuploadberkasusaha3/upload/{id}', [TertibjasakonstruksiController::class, 'beuploadberkasusaha3'])->middleware(['auth', 'can:admin3'])->name('beuploadberkasusaha3uploadindex');
Route::post('/beuploadberkasusaha3new/{id}', [TertibjasakonstruksiController::class, 'beuploadberkasusaha3new'])->middleware(['auth', 'can:admin3'])->name('beuploadberkasusaha3new');

Route::get('/beuploadberkasusaha4/upload/{id}', [TertibjasakonstruksiController::class, 'beuploadberkasusaha4'])->middleware(['auth', 'can:admin3'])->name('beuploadberkasusaha4uploadindex');
Route::post('/beuploadberkasusaha4new/{id}', [TertibjasakonstruksiController::class, 'beuploadberkasusaha4new'])->middleware(['auth', 'can:admin3'])->name('beuploadberkasusaha4new');


// SURAT DUKUNG TERTIB JAKON USAHA
// Route::get('/betertibjakonusahasurat1/update/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1'])->middleware(['auth', 'can:admin2'])->name('betertibjakonusahasurat1');

// PEMBUATAN SURAT 1
Route::get('/betertibjakonusahasurat1/create/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahasurat1');

// Route::get('/betertibjakonusahasuratpercobaan/create/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasuratpercobaan'])->middleware('auth')->name('betertibjakonusahasurat1indexsurat');
Route::get('/betertibjakonusahasuratpercobaan/create/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasuratpercobaan'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahasurat1indexsurat');
Route::get('/betertibjakonusahasurat1/createnew/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasuratnewberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahasurat1');
// Route::post('/betertibjakonusahasurat1/updatecreate', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1create'])->middleware(['auth', 'can:admin2'])->name('betertibjakonusahasurat1create');
// Route::get('/betertibjakonusahasurat1/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1createnew'])->middleware('auth')->name('betertibjakonusahasurat1newberkas'); // PERUBAHAN SUPERADMIN
Route::get('/betertibjakonusahasurat1/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1createnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahasurat1newberkas');
// Route::post('/betertibjakonusahasurat1/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1createnewsurat'])->middleware('auth')->name('betertibjakonusahasurat1createnewsurat'); // PERUBAHAN SUPERADMIN
Route::post('/betertibjakonusahasurat1/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1createnewsurat'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahasurat1createnewsurat');

Route::get('/betertibjakonusahasurat1/update/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasurat1updatenew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahasurat1updatenew');


// SURAT DUKUNG TERTIB JAKON USAHA SURAT 2 SEGMENTASI PASAR
Route::get('/betertibjakonusahasegmentasipasar/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasegmentasipasar'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahasurat2indexsurat');
Route::get('/betertibjakonusahasegmentasipasar/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasegmentasipasarcreateberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahasegmentasipasarberkas');

Route::post('/betertibjakonusahasegmentasipasar/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonusahasegmentasipasarcreatenewberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahasegmentasipasarbuatberkas');

Route::delete('/betertibjakonusahasegmentasipasar/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasegmentasipasardelete'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahadeletesegmentasipasar');
Route::get('/betertibjakonusahasegmentasipasar/show/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahasegmentasipasarshow'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahasegmentasipasarshow');

// SURAT DUKUNG TERTIB JAKON USAHA SURAT 3 PEMENUHAN SYARAT
Route::get('/betertibjakonusahapemenuhansyarat/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapemenuhansyarat'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapemenuhansyaratindex');
Route::get('/betertibjakonusahapemenuhansyarat/show/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapemenuhansyaratshow'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapemenuhansyaratshow');

Route::get('/betertibjakonusahapemenuhansyarat/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapemenuhansyaratcreateberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapemenuhansyaratcreateberkas');
Route::post('/betertibjakonusahapemenuhansyarat/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonusahapemenuhansyaratcreateberkasnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapemenuhansyaratnewberkas');

Route::delete('/betertibjakonusahapemenuhansyaratdelete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapemenuhansyaratdelete'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapemenuhansyaratdelete');


// SURAT DUKUNG TERTIB JAKON USAHA 4 PELAKSANA PENGEMBANGAN USAHA
Route::get('/betertibjakonusahapelaksana/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapelaksana'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapelaksanaindex');
Route::get('/betertibjakonusahapelaksana/show/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapelaksanashow'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapelaksanashow');

Route::get('/betertibjakonusahapelaksana/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapelaksanacreateberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapelaksanacreateberkas');
Route::post('/betertibjakonusahapelaksana/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonusahapelaksananewberkascreate'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapelaksananewberkas');

Route::delete('/betertibjakonusahapelaksanadelete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonusahapelaksanadelete'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapelaksanadelete');

// SURAT TERTIB JAKON PEMANFAATAN
Route::get('/betertibjakonpemanfaatan', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatan'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfaatanindexlist');
// Route::get('/betertibjakonpemanfaatan', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatan'])->name('betertibjakonpemanfaatanindexlist');

Route::get('/betertibjakonpemanfaatan/create', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatancreate'])->middleware(['auth', 'can:admin3']);
Route::post('/betertibjakonpemanfaatan/createnew', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatancreatenew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfaatanupdatecreatenew');

Route::get('/betertibjakonpemanfaatan/update/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatanupdate'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfaatanupdate');
Route::post('/betertibjakonpemanfaatan/updatecreate/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatanupdatecreate'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfaatanupdatecreate');

// Route::delete('/betertibjakonpemanfaatandelete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatandeletedata'])->middleware('auth')->name('betertibjakonusahapemenuhansyaratdeletedata');
Route::delete('/betertibjakonpemanfaatandelete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfaatandeletedata'])->middleware(['auth', 'can:admin3'])->name('betertibjakonusahapemenuhansyaratdeletedata');

// SURAT JAKON PEMANFAATAAN 1
Route::get('/betertibjakonpemanfataanjakon/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataanjakonindex'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfataansuratjasakonstruksiindex');

Route::get('/betertibjakonpemanfataanjakon/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataanjakoncreateberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfataanjakoncreateberkas');
Route::post('/betertibjakonmanfaat1/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonmanfaatcreateberkasnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonmanfaat1');

// Route::get('/betertibjakonmanfaat1/show/{id}', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat1showdata'])->middleware(['auth', 'can:admin2'])->name('betertibjakonmanfaat1show');
Route::get('/betertibjakonmanfaat1showberkassurat/show/{id}', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat1showberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonmanfaat1showberkas');
Route::delete('/betertibjakonmanfaat1delete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat1deleteberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonmanfaat1deleteberkas');


// SURAT JAKON PEMANFAATAAN 2
Route::get('/betertibjakonpemanfataansurat2/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataansurat2index'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfataansurat2index');
Route::get('/betertibjakonpemanfataansurat2/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataansurat2createberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfataansurat2createberkas');

Route::post('/betertibjakonmanfaat2/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat2createberkasnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonmanfaat2');

Route::delete('/betertibjakonmanfaat2delete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat2deleteberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonmanfaat2deleteberkas');

// SURAT JAKON PEMANFAATAN 3
Route::get('/betertibjakonpemanfataansurat3/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataansurat3index'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfataansurat3index');

Route::get('/betertibjakonpemanfataansurat3/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpemanfataansurat3createberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfataansurat3createberkas');
Route::post('/betertibjakonmanfaat3/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat3createberkasnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonmanfaat3createsurat');

Route::delete('/betertibjakonmanfaat3delete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonmanfaat3deleteberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonmanfaat3deleteberkas');

Route::get('/buktidukung/create/{id}', [TertibjasakonstruksiController::class, 'buktidukungcreate'])->middleware(['auth', 'can:admin3']);
// Route::get('/buktidukung/create/{id}', [TertibjasakonstruksiController::class, 'buktidukungcreate']);
Route::post('/buktidukung/createnew', [TertibjasakonstruksiController::class, 'buktidukungcreateupload'])->middleware(['auth', 'can:admin3'])->name('create.uploadpemanfaaatantertib');

Route::get('/buktidukungindex/index/{id}', [TertibjasakonstruksiController::class, 'buktidukungindexsurat'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpemanfataansurat3index');
// Route::get('/buktidukungindex/index/{id}', [TertibjasakonstruksiController::class, 'buktidukungindexsurat'])->name('betertibjakonpemanfataansurat3index');
Route::delete('/buktidukungindex/delete/{id}', [TertibjasakonstruksiController::class, 'buktidukungindexdelete'])->middleware(['auth', 'can:admin3']);


// TERTIB JAKON PENYELENGGARAAN
Route::get('/betertibjakonpenyelenggaraan', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraanindex'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraanindexlist');

Route::get('/betertibjakonpenyelenggaraan/create', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraancreate'])->middleware(['auth', 'can:admin3']);
Route::post('/betertibjakonpenyelenggaraan/createnew', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraancreatenew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraancreatenewupdate');

Route::delete('/betertibjakonpenyelenggaraandelete/delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraandeletedata'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraandeletedata');

Route::get('/betertibjakonpenyelenggaraan/update/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraanupdate'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraanupdate');
Route::post('/betertibjakonpenyelenggaraan/updatecreate/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraanupdatecreate'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraancreatenupdate');


// SURAT JAKON PENYELENGGARAN  INFORMASI PEKERJAAN
Route::get('/betertibjakonpenyelenggaraan/index/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraanindexlist'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraanindexinformasi');

Route::get('/betertibjakonpenyelenggaraan/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraancreateberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraancreateberkas');
Route::post('/betertibjakonpenyelenggaraan/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraaninformasi'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraaninformasi');



// BRO IGIT
// TERTIB JAKON PENYELENGARAAN

// SURAT JAKON PEMANFAATAAN 1
Route::get('/betertibjakonpenyelenggaraan1/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan1'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan1');

Route::get('/betertibjakonpenyelenggaraan1/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan1createberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan1create');
Route::post('/betertibjakonpenyelenggaraan1createnew/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan1createnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan1createnew');

Route::delete('/betertibjakonpenyelenggaraan1delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan1delete'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan1delete');

// SURAT JAKON PENYELENGGARAAN 2
Route::get('/betertibjakonpenyelenggaraan2/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan2'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan2');

Route::get('/betertibjakonpenyelenggaraan2/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan2createberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan2create');
Route::post('/betertibjakonpenyelenggaraan2createnew/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan2createnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan2createnew');

Route::delete('/betertibjakonpenyelenggaraan2delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan2delete'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan2delete');

// SURAT JAKON PENYELENGGARAAN 3
Route::get('/betertibjakonpenyelenggaraan3/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan3'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan3');

Route::get('/betertibjakonpenyelenggaraan3/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan3createberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan3create');
Route::post('/betertibjakonpenyelenggaraan3createnew/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan3createnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan3createnew');

Route::delete('/betertibjakonpenyelenggaraan3delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan3delete'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan3delete');

// SURAT JAKON PENYELENGGARAAN 4
Route::get('/betertibjakonpenyelenggaraan4/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan4'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan4');

Route::get('/betertibjakonpenyelenggaraan4/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan4createberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan4create');
Route::post('/betertibjakonpenyelenggaraan4createnew/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan4createnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan4createnew');

Route::delete('/betertibjakonpenyelenggaraan4delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan4delete'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan4delete');

// SURAT JAKON PENYELENGGARAAN 5
Route::get('/betertibjakonpenyelenggaraan5/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan5'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan5');

Route::get('/betertibjakonpenyelenggaraan5/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan5createberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan5create');
Route::post('/betertibjakonpenyelenggaraan5createnew/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan5createnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan5createnew');

Route::delete('/betertibjakonpenyelenggaraan5delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan5delete'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan5delete');

// SURAT JAKON PENYELENGGARAAN 6
Route::get('/betertibjakonpenyelenggaraan6/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan6'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan6');

Route::get('/betertibjakonpenyelenggaraan6/createberkas/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan6createberkas'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan6create');
Route::post('/betertibjakonpenyelenggaraan6createnew/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan6createnew'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan6createnew');

Route::delete('/betertibjakonpenyelenggaraan6delete/{id}', [TertibjasakonstruksiController::class, 'betertibjakonpenyelenggaraan6delete'])->middleware(['auth', 'can:admin3'])->name('betertibjakonpenyelenggaraan6delete');

// Route::post('/betertibjakonmanfaat1/createberkasnew', [TertibjasakonstruksiController::class, 'betertibjakonmanfaatcreateberkasnew'])->name('betertibjakonmanfaat1');

Route::get('/beuploadberkaspenyelenggaraan1/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan1'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan1');
Route::post('/beuploadberkaspenyelenggaraan1upload/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan1upload'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan1upload');

Route::get('/beuploadberkaspenyelenggaraan2/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan2'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan2');
Route::post('/beuploadberkaspenyelenggaraan2upload/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan2upload'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan2upload');

Route::get('/beuploadberkaspenyelenggaraan3/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan3'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan3');
Route::post('/beuploadberkaspenyelenggaraan3upload/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan3upload'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan3upload');

Route::get('/beuploadberkaspenyelenggaraan4/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan4'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan4');
Route::post('/beuploadberkaspenyelenggaraan4upload/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan4upload'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan4upload');

Route::get('/beuploadberkaspenyelenggaraan5/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan5'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan5');
Route::post('/beuploadberkaspenyelenggaraan5upload/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan5upload'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan5upload');

Route::get('/beuploadberkaspenyelenggaraan6/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan6'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan6');
Route::post('/beuploadberkaspenyelenggaraan6upload/{id}', [TertibjasakonstruksiController::class, 'beuploadberkaspenyelenggaraan6upload'])->middleware(['auth', 'can:admin3'])->name('beuploadberkaspenyelenggaraan6upload');



// ---------------------- MENU SHST KABUPATEN BLORA -----------------------------------------------------
Route::get('/beshstkabblora', [ShstbloraController::class, 'beshstkabblora'])->middleware(['auth', 'can:admin2'])->name('beshstkabblora');
Route::get('/beshstkabblora/update/{id}', [ShstbloraController::class, 'beshstkabbloraupdate'])->middleware(['auth', 'can:admin2'])->name('beshstkabbloraupdate');
Route::put('/beshstkabblora/updatenew/{id}', [ShstbloraController::class, 'beshstkabbloraupdatenew'])->middleware(['auth', 'can:admin2'])->name('beshstkabbloraupdatenew');
// ___________________________________________________________________________________________________________________________________


// SATUAN HARGA PER DIVISI
Route::get('/besatuandiv1', [SatuanhargamaterialController::class, 'besatuandiv1'])->middleware(['auth', 'can:admin2']);
Route::get('/besatuandiv2', [SatuanhargamaterialController::class, 'besatuandiv2'])->middleware(['auth', 'can:admin2']);
Route::get('/besatuandiv3', [SatuanhargamaterialController::class, 'besatuandiv3'])->middleware(['auth', 'can:admin2']);
Route::get('/besatuandiv4', [SatuanhargamaterialController::class, 'besatuandiv4'])->middleware(['auth', 'can:admin2']);
Route::get('/besatuandiv5', [SatuanhargamaterialController::class, 'besatuandiv5'])->middleware(['auth', 'can:admin2']);
Route::get('/besatuandiv6', [SatuanhargamaterialController::class, 'besatuandiv6'])->middleware(['auth', 'can:admin2']);
Route::get('/besatuandiv7', [SatuanhargamaterialController::class, 'besatuandiv7'])->middleware(['auth', 'can:admin2']);


// MENU DATA BACKEND SATUAN HARGA DASAR MATERIAL
Route::get('/besatuanhargamaterial', [SatuanhargamaterialController::class, 'besatuanhargamaterial'])->middleware(['auth', 'can:admin2']);
Route::delete('/satuanhargamaterial/delete/{id}', [SatuanhargamaterialController::class, 'besatuanhargamaterialdelete'])->middleware(['auth', 'can:admin2']);

Route::get('/besatuanhargamaterial/create', [SatuanhargamaterialController::class, 'satuanhargamaterialcreate'])->middleware(['auth', 'can:admin2']);
Route::post('/besatuanhargamaterial/createnew', [SatuanhargamaterialController::class, 'satuanhargamaterialcreatenew'])->middleware(['auth', 'can:admin2'])->name('create.satuanhargamaterialcreatenew');

Route::get('/besatuanhargamaterial/update/{id}', [SatuanhargamaterialController::class, 'besatuanhargamaterialupdate'])->middleware(['auth', 'can:admin2']);
Route::post('/besatuanhargamaterial/updatecreate/{id}', [SatuanhargamaterialController::class, 'besatuanhargamaterialupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.besatuanhargamaterialcreateupdate');



Route::get('/besatuanhargaupahpekerjaan', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaan'])->middleware(['auth', 'can:admin2']);
Route::delete('/besatuanhargaupahpekerjaan/delete/{id}', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaandelete'])->middleware(['auth', 'can:admin2']);

Route::get('/besatuanhargaupahpekerjaan/create', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaancreate'])->middleware(['auth', 'can:admin2']);
Route::post('/besatuanhargaupahpekerjaan/createnew', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaancreatenew'])->middleware(['auth', 'can:admin2'])->name('create.besatuanhargaupahpekerjaancreatenew');

Route::get('/besatuanhargaupahpekerjaan/update/{id}', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaanupdate'])->middleware(['auth', 'can:admin2']);
Route::post('/besatuanhargaupahpekerjaan/updatecreate/{id}', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaanupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.besatuanhargaupahpekerjaanupdatecreate');

// be profile pekerja
Route::get('/beprofile', [AkunController::class, 'beprofileindex'])->middleware('auth');
Route::get('/beprofile/update/{id}', [AkunController::class, 'beprofileupdate'])->middleware('auth');
Route::put('/beprofile/updatecreate/{id}', [AkunController::class, 'beprofileupdatecreate'])->middleware('auth')->name('admin.profile.update');

Route::get('/besatuanhargaperalatan', [SatuanhargamaterialController::class, 'besatuanhargaperalatan'])->middleware(['auth', 'can:admin2']);
Route::delete('/besatuanhargaperalatan/delete/{id}', [SatuanhargamaterialController::class, 'besatuanhargaperalatandelete'])->middleware(['auth', 'can:admin2']);

Route::get('/besatuanhargaperalatan/create', [SatuanhargamaterialController::class, 'besatuanhargaperalatancreate'])->middleware(['auth', 'can:admin2']);
Route::post('/besatuanhargaperalatan/createnew', [SatuanhargamaterialController::class, 'besatuanhargaperalatancreatenew'])->middleware(['auth', 'can:admin2'])->name('create.besatuanhargaperalatancreatenew');

Route::get('/besatuanhargaperalatan/update/{id}', [SatuanhargamaterialController::class, 'besatuanhargaperalatanupdate'])->middleware(['auth', 'can:admin2']);
Route::post('/besatuanhargaperalatan/updatecreate/{id}', [SatuanhargamaterialController::class, 'besatuanhargaperalatanupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.besatuanhargaperalatanupdatecreate');


// PENGATURAN JENIS MATERIAL SATUAN HARGA MATERIAL
Route::get('/bejenismaterial', [SatuanhargamaterialController::class, 'bejenismaterial'])->middleware(['auth', 'can:admin2']);
Route::delete('/bejenismaterial/delete/{id}', [SatuanhargamaterialController::class, 'bejenismaterialdelete'])->middleware(['auth', 'can:admin2']);

Route::get('/bejenismaterial/create', [SatuanhargamaterialController::class, 'bejenismaterialcreate'])->middleware(['auth', 'can:admin2']);
Route::post('/bejenismaterial/createnew', [SatuanhargamaterialController::class, 'bejenismaterialcreatenew'])->middleware(['auth', 'can:admin2'])->name('create.jenismaterial');


// Route::get('/besatuanhargaupahpekerjaan', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaan'])->middleware('auth');
// Route::delete('/besatuanhargaupahpekerjaan/delete/{id}', [SatuanhargamaterialController::class, 'besatuanhargaupahpekerjaandelete'])->middleware('auth');


// AKUN PERSONAL PRIBADI AKUN PEKERJA


// MENU PENGAWASAN TERTIB JAKON PEMANFAATAN
// PEKERJAANINI
// ROUTE UNTUK DAFTAR AKUN

Route::get('/allakun', [AkunController::class, 'allakun'])->middleware(['auth', 'can:admin2']);
// Route::get('/allakun', [AkunController::class, 'allakun']);
Route::delete('/allsemuaakunlsp/delete/{name}', [AkunController::class, 'allsemuaakunlsp'])->middleware(['auth', 'can:admin2']);
Route::delete('/allsemuaakun/delete/{name}', [AkunController::class, 'allsemuaakun'])->middleware(['auth', 'can:admin2']);
// Route::delete('/allsemuaakun/delete/{name}', [AkunController::class, 'allsemuaakun']);
Route::get('/akuncreate', [AkunController::class, 'akuncreate'])->middleware(['auth', 'can:admin2']);
// Route::get('/akuncreate', [AkunController::class, 'akuncreate']);

Route::post('/akuncreatenew/createnew', [AkunController::class, 'akuncreatenew'])->middleware(['auth', 'can:admin2'])->name('akuncreatenew');
// Route::post('/akuncreatenew/createnew', [AkunController::class, 'akuncreatenew'])->name('akuncreatenew');

Route::get('/allsuperadmin', [AkunController::class, 'allsuperadmin'])->middleware(['auth', 'can:admin2']);

Route::get('/alladmin', [AkunController::class, 'alladmin'])->middleware(['auth', 'can:admin2']);

Route::get('/allpekerja', [AkunController::class, 'allpekerja'])->middleware(['auth', 'can:admin2']);

Route::get('/allsupppabrik', [AkunController::class, 'allsupppabrik'])->middleware(['auth', 'can:admin2']);

Route::get('/allsuppperalatan', [AkunController::class, 'allsuppperalatan'])->middleware(['auth', 'can:admin2']);

Route::get('/allsupptokobangunan', [AkunController::class, 'allsupptokobangunan'])->middleware(['auth', 'can:admin2']);

Route::get('/alllsppenerbit', [AkunController::class, 'alllsppenerbit'])->middleware(['auth', 'can:admin2']);
// Route::get('/alllsppenerbit', [AkunController::class, 'alllsppenerbit']);

Route::get('/alldinas', [AkunController::class, 'alldinas'])->middleware(['auth', 'can:admin2']);


// DATA PENGATURAN DATABASE DATA ALL

Route::get('/settingkatpelatihan', [SettingDataController::class, 'settingkatpelatihan'])->middleware(['auth', 'can:admin2']);
Route::get('/settingkatpelatihan/create', [SettingDataController::class, 'settingkatpelatihancreate'])->middleware(['auth', 'can:admin2']);
Route::post('/settingkatpelatihan/createnew', [SettingDataController::class, 'settingkatpelatihancreatenew'])->middleware(['auth', 'can:admin2'])->name('create.kategoripelatihan');
Route::delete('/settingkatpelatihan/delete/{id}', [SettingDataController::class, 'settingkatpelatihandelete'])->middleware(['auth', 'can:admin2']);

Route::get('/settingssekolah', [SettingDataController::class, 'settingssekolah'])->middleware(['auth', 'can:admin2']);
Route::get('/settingssekolah/create', [SettingDataController::class, 'settingssekolahcreate'])->middleware(['auth', 'can:admin2']);
Route::post('/settingssekolah/createnew', [SettingDataController::class, 'settingssekolahcreatenew'])->middleware(['auth', 'can:admin2'])->name('create.settingssekolah');
Route::delete('/settingssekolah/delete/{namasekolah}', [SettingDataController::class, 'settingssekolahdelete'])->middleware(['auth', 'can:admin2']);

Route::get('/settingsjenjangpendidikan', [SettingDataController::class, 'settingspendidikan'])->middleware(['auth', 'can:admin2']);
Route::get('/settingsjenjangpendidikan/create', [SettingDataController::class, 'settingspendidikancreate'])->middleware(['auth', 'can:admin2']);
Route::post('/settingsjenjangpendidikan/createnew', [SettingDataController::class, 'settingsjenjangpencreatenew'])->middleware(['auth', 'can:admin2'])->name('create.jenjangpendidikan');
Route::delete('/jenjangpendidikan/delete/{id}', [SettingDataController::class, 'settingspendidikandelete'])->middleware(['auth', 'can:admin2']);

Route::get('/settingsjabatankerja', [SettingDataController::class, 'settingsjabatankerja'])->middleware(['auth', 'can:admin2']);
Route::get('/jabatankerja/create', [SettingDataController::class, 'settingsjabatankerjacreate'])->middleware(['auth', 'can:admin2']);
Route::post('/jabatankerja/createnew', [SettingDataController::class, 'jabatankerjacreatenew'])->middleware(['auth', 'can:admin2'])->name('create.jabatankerja');
Route::delete('/jabatankerja/delete/{id}', [SettingDataController::class, 'jabatankerjadelete'])->middleware(['auth', 'can:admin2']);

Route::get('/settingkecamatankbb', [SettingDataController::class, 'settingkecamatankbb'])->middleware(['auth', 'can:admin2']);
Route::get('/kecamatankbb/create', [SettingDataController::class, 'kecamatankbbcreate'])->middleware(['auth', 'can:admin2']);
Route::post('/kecamatankbb/createnew', [SettingDataController::class, 'kecamatankbbcreatenew'])->middleware(['auth', 'can:admin2'])->name('create.kecamatankbb');
Route::delete('/kecamatankbb/delete/{id}', [SettingDataController::class, 'kecamatankbbdelete'])->middleware(['auth', 'can:admin2']);

// DATA PENGATURAN SUB KLASIFIKASI TERTIB JASA KONSTRUKSI
Route::get('/settingssubklasifikasi', [SettingDataController::class, 'settingssubklasifikasi'])->middleware(['auth']);
Route::get('/settingssubklasifikasi/create', [SettingDataController::class, 'settingssubklasifikasicreate'])->middleware(['auth']);
Route::post('/settingssubklasifikasi/createnew', [SettingDataController::class, 'settingssubklasifikasinewcreate'])->middleware(['auth'])->name('create.settingssubklasifikasi');
Route::delete('/settingssubklasifikasi/delete/{id}', [SettingDataController::class, 'settingssubklasifikasidelete'])->middleware(['auth']);

// DATA PENGATURAN TANDA TANGAN
// Route::get('/settingstandatangan', [SettingDataController::class, 'settingstandatangan'])->middleware(['auth', 'can:admin2']);
Route::get('/settingstandatangan', [SettingDataController::class, 'settingstandatangan'])->middleware(['auth']);
Route::get('/settingstandatangan/create', [SettingDataController::class, 'settingstandatangancreate'])->middleware(['auth', 'can:admin2']);
Route::post('/settingstandatangan/createnew', [SettingDataController::class, 'settingstandatangancreatenew'])->middleware(['auth', 'can:admin2'])->name('create.settingstandatangan');
Route::delete('/settingstandatangan/delete/{id}', [SettingDataController::class, 'settingstandatangandelete'])->middleware(['auth', 'can:admin2']);


Route::get('/settingsjenispekerjaan', [SettingDataController::class, 'settingsjenispekerjaan'])->middleware(['auth', 'can:admin2']);
Route::get('/settingsjenispekerjaan/create', [SettingDataController::class, 'settingsjenispekerjaancreate'])->middleware(['auth', 'can:admin2']);
Route::post('/settingsjenispekerjaan/createnew', [SettingDataController::class, 'settingsjenispekerjaannew'])->middleware(['auth', 'can:admin2'])->name('create.jenispekerjaan');
Route::delete('/jenispekerjaan/delete/{id}', [SettingDataController::class, 'jenispekerjaandelete'])->middleware(['auth', 'can:admin2']);

Route::get('/settingssumberdana', [SettingDataController::class, 'settingssumberdana'])->middleware(['auth', 'can:admin2']);
Route::get('/sumberdana/create', [SettingDataController::class, 'sumberdanacreate'])->middleware(['auth', 'can:admin2']);
Route::post('/sumberdana/createnew', [SettingDataController::class, 'sumberdanacreatenew'])->middleware(['auth', 'can:admin2'])->name('create.sumberdana');
Route::delete('/sumberdana/delete/{id}', [SettingDataController::class, 'sumberdanadelete'])->middleware(['auth', 'can:admin2']);

Route::get('/settingstahun', [SettingDataController::class, 'settingstahun'])->middleware(['auth', 'can:admin2']);
// Route::get('/sumberdana/create', [SettingDataController::class, 'sumberdanacreate'])->middleware(['auth', 'can:admin2']);
// Route::post('/sumberdana/createnew', [SettingDataController::class, 'sumberdanacreatenew'])->middleware(['auth', 'can:admin2'])->name('create.sumberdana');
Route::delete('/tahunpilihan/delete/{id}', [SettingDataController::class, 'tahunpilihandelete'])->middleware(['auth', 'can:admin2']);



// ------------------- BACKEND BAGIAN HIMBAUAN DINAS ---------------------------

// -------- BAGIAN 01 BACKEND PROFIL ---------------------------------p
Route::get('/struktur', [StrukturController::class, 'index'])->middleware(['auth', 'can:admin2']);
Route::get('/struktur/update/{judul}', [StrukturController::class, 'updatestruktur'])->middleware(['auth', 'can:admin2'])->name('update.struktur');
// Route::get('/struktur/update/{judul}', [StrukturController::class, 'updatestruktur'])->middleware(['auth'])->name('update.struktur');
// Route::post('/struktur/updatecreate/{judul}', [StrukturController::class, 'updatestrukturcreate'])->middleware('auth')->name('update.strukturcreatebaru');
// Route::post('/struktur/updatecreate/{judul}', [StrukturController::class, 'updatestrukturcreate'])->middleware('auth')->name('update.strukturcreate');
Route::put('/struktur/updatecreate/{judul}', [StrukturController::class, 'updatestrukturcreate'])->middleware(['auth', 'can:admin2'])->name('update.strukturcreatebaru'); //
// Route::put('/struktur/updatecreate/{judul}', [StrukturController::class, 'updatestrukturcreate'])->middleware(['auth'])->name('update.strukturcreatebaru');


Route::post('/struktur/{judul}', [StrukturController::class, 'createupdatestruktur'])->middleware(['auth', 'can:admin2'])->name('updatestore.struktur');

Route::get('/renstra', [StrukturController::class, 'renstra'])->middleware('auth');
Route::get('/renstra/update/{judul}', [StrukturController::class, 'updaterenstra'])->middleware(['auth', 'can:admin2'])->name('update.renstra');
Route::post('/renstra/{judul}', [StrukturController::class, 'createupdaterenstra'])->middleware(['auth', 'can:admin2'])->name('updatestore.renstra');

Route::get('/tupoksi', [StrukturController::class, 'tupoksi'])->middleware('auth');
Route::get('/tupoksi/update/{judul}', [StrukturController::class, 'updatetupoksi'])->middleware(['auth', 'can:admin2'])->name('update.tupoksi');
Route::post('/tupoksi/{judul}', [StrukturController::class, 'createupdatetupoksi'])->middleware(['auth', 'can:admin2'])->name('updatestore.tupoksi');

// ----------------------------------- STANDAR BIAYA UMUM
Route::get('/standarbiayaumum', [StrukturController::class, 'standarbiayaumum'])->middleware('auth');
Route::get('/standarbiayaumum/{judul}', [StrukturController::class, 'standarbiayaumumshowbyjudul'])->middleware('auth');
Route::get('/standarbiayaumum/update/{judul}', [StrukturController::class, 'updatestandarbiayaumum'])->middleware('auth')->name('update.standarbiayaumum');
Route::post('/standarbiayaumum/{judul}', [StrukturController::class, 'createupdatestandarbiayaumum'])->middleware('auth')->name('updatestore.standarbiayaumum');
Route::get('/standarbiayaumumcreate', [StrukturController::class, 'createstandarbiayaumum'])->middleware('auth');
Route::post('/standarbiayaumumstore', [StrukturController::class, 'createstorestandarbiayaumum'])->middleware('auth')->name('create.standarbiayaumum');

Route::post('/standarbiayaumumdelete/{judul}', [StrukturController::class, 'deletestandarbiayaumum'])
->middleware('auth')
->name('delete.standarbiayaumum');


// SBU LAMPIRAN 1
Route::get('/sbulampiran1', [StrukturController::class, 'sbulampiran1'])->middleware('auth');
Route::get('/sbulampiran1/{judul}', [StrukturController::class, 'sbulampiran1showbyjudul'])->middleware('auth');

// SBU LAMPIRAN 2
Route::get('/sbulampiran2', [StrukturController::class, 'sbulampiran2'])->middleware('auth');
Route::get('/sbulampiran2/{judul}', [StrukturController::class, 'sbulampiran2showbyjudul'])->middleware('auth');

// SBU LAMPIRAN 3
Route::get('/sbulampiran3', [StrukturController::class, 'sbulampiran3'])->middleware('auth');
Route::get('/sbulampiran3/{judul}', [StrukturController::class, 'sbulampiran3showbyjudul'])->middleware('auth');


// -------- BAGIAN 14 BACKEND PERATURAN UNDANGUNDANG ---------------------------------
Route::get('/peruud', [PeraturanController::class, 'undangundang'])->middleware('auth')->name('peruud.index');
Route::get('/peruud/{judul}', [PeraturanController::class, 'updateundangundang'])->middleware('auth')->name('peruud.show');
Route::post('/peruud/{judul}', [PeraturanController::class, 'createupdateundangundang'])->middleware('auth')->name('peruud.update');


Route::get('/perpemerintah', [PeraturanController ::class, 'pemerintah'])->middleware('auth');
Route::get('/perpemerintah/{judul}', [PeraturanController::class, 'updateperpemerintah'])->middleware('auth')->name('peruud.showperpemerintah');
Route::post('/perpemerintah/{judul}', [PeraturanController::class, 'createupdateperpemerintah'])->middleware('auth')->name('peruud.updateperpemerintah');


Route::get('/perpresiden', [PeraturanController::class, 'presiden'])->middleware('auth');
Route::get('/perpresiden/{judul}', [PeraturanController::class, 'updateperpresiden'])->middleware('auth')->name('peruud.showperpresiden');
Route::post('/perpresiden/{judul}', [PeraturanController::class, 'createupdateperpresiden'])->middleware('auth')->name('peruud.updateperpresiden');

// PERATURAN MENTERI
Route::get('/permenteri', [PeraturanController::class, 'menteri'])->middleware('auth');
Route::get('/permenteri/{judul}', [PeraturanController::class, 'menterishowByJudul'])->middleware('auth');
Route::get('/permenteri/update/{judul}', [PeraturanController::class, 'updateshowpermenteri'])->middleware('auth')->name('peruud.showpermenteri');
Route::post('/permenteri/{judul}', [PeraturanController::class, 'createupdatepermenteri'])->middleware('auth')->name('peruud.updatepermenteri');
// CREATE DATA PER MENTERI
Route::get('/permentericreate', [PeraturanController::class, 'createpermenteri'])->middleware('auth');
Route::post('/permenteristore', [PeraturanController::class, 'createstorepermenteri'])->middleware('auth')->name('peruud.createpermenteri');
Route::post('/permenteridelete/{judul}', [PeraturanController::class, 'deleterpermenteri'])
->middleware('auth')
->name('peruud.deletepermenteri');

// SURAT KEPUTUSAN MENTERI
Route::get('/skmenteri', [PeraturanController::class, 'skmenteri'])->middleware('auth');
Route::get('/skmenteri/{judul}', [PeraturanController::class, 'skmenterishowByJudul'])->middleware('auth');
Route::get('/skmenteri/update/{judul}', [PeraturanController::class, 'updateshowskmenteri'])->middleware('auth')->name('peruud.showskmenteri');
Route::post('/skmenteri/{judul}', [PeraturanController::class, 'createupdateskmenteri'])->middleware('auth')->name('peruud.updateskmenteri');
Route::get('/skmentericreate', [PeraturanController::class, 'createskmenteri'])->middleware('auth');
Route::post('/skmenteristore', [PeraturanController::class, 'createstoreskmenteri'])->middleware('auth')->name('peruud.createskmenteri');
Route::post('/skmenteridelete/{judul}', [PeraturanController::class, 'deleteskmenteri'])
->middleware('auth')
->name('peruud.deleteskmenteri');

// SURAT EDARAN MENTERI
Route::get('/suratedaran', [PeraturanController::class, 'suratedaran'])->middleware('auth');
Route::get('/suratedaran/{judul}', [PeraturanController::class, 'suratedaranshowByJudul'])->middleware('auth');
Route::get('/suratedaran/update/{judul}', [PeraturanController::class, 'updateshowsuratedaran'])->middleware('auth')->name('peruud.showsuratedaran');
Route::post('/suratedaran/{judul}', [PeraturanController::class, 'createupdatesuratedaran'])->middleware('auth')->name('peruud.updatesuratedaran');
Route::get('/suratedarancreate', [PeraturanController::class, 'createsuratedaran'])->middleware('auth');
Route::post('/suratedaranstore', [PeraturanController::class, 'createstoresuratedaran'])->middleware('auth')->name('peruud.createsuratedaran');
Route::post('/suratedarandelete/{judul}', [PeraturanController::class, 'deletesuratedaran'])
->middleware('auth')
->name('peruud.deletesuratedaran');

Route::get('/referensi', [PeraturanController::class, 'referensi'])->middleware('auth')->name('peruud.referensi');
Route::get('/referensi/{judul}', [PeraturanController::class, 'updatereferensi'])->middleware('auth')->name('peruud.showreferensi');
Route::post('/referensi/{judul}', [PeraturanController::class, 'createupdatereferensi'])->middleware('auth')->name('peruud.updatereferensi');

// SURAT PERATURAN DAERAH
Route::get('/perdaerah', [PeraturanController::class, 'suratperdaerah'])->middleware('auth');
Route::get('/perdaerah/{judul}', [PeraturanController::class, 'suratperdaerahshowByJudul'])->middleware('auth');
Route::get('/perdaerah/update/{judul}', [PeraturanController::class, 'updateshowperdaerah'])->middleware('auth')->name('peruud.showperdaerah');
Route::post('/perdaerah/{judul}', [PeraturanController::class, 'createupdateperdaerah'])->middleware('auth')->name('peruud.updateperdaerah');
Route::get('/perdaerahcreate', [PeraturanController::class, 'createperdaerah'])->middleware('auth');
Route::post('/perdaerahstore', [PeraturanController::class, 'createstoreperdaerah'])->middleware('auth')->name('peruud.createperdaerah');
Route::post('/perdaerahdelete/{judul}', [PeraturanController::class, 'deleteperdaerah'])
->middleware('auth')
->name('peruud.deleteperdaerah');

// SURAT PERATURAN GUBERNUR
Route::get('/pergubernur', [PeraturanController::class, 'suratpergubernur'])->middleware('auth');
Route::get('/pergubernur/{judul}', [PeraturanController::class, 'pergubernurshowByJudul'])->middleware('auth');
Route::get('/pergubernur/update/{judul}', [PeraturanController::class, 'updateshowpergubernur'])->middleware('auth')->name('peruud.showpergubernur');
Route::post('/pergubernur/{judul}', [PeraturanController::class, 'createupdatepergubernur'])->middleware('auth')->name('peruud.updatepergubernur');
Route::get('/pergubernurcreate', [PeraturanController::class, 'createpergubernur'])->middleware('auth');
Route::post('/pergubernurstore', [PeraturanController::class, 'createstorepergubernur'])->middleware('auth')->name('peruud.createpergubernur');
Route::post('/pergubernurdelete/{judul}', [PeraturanController::class, 'deletepergubernur'])
->middleware('auth')
->name('peruud.deletepergubernur');


// SURAT PERATURAN GUBERNUR
Route::get('/perwalikotabupati', [PeraturanController::class, 'suratperwalikotabupati'])->middleware('auth');
Route::get('/perwalikotabupati/{judul}', [PeraturanController::class, 'perwalikotabupatishowByJudul'])->middleware('auth');
Route::get('/perwalikotabupati/update/{judul}', [PeraturanController::class, 'updateshowperwalikotabupati'])->middleware('auth')->name('peruud.showperwalikotabupati');
Route::post('/perwalikotabupati/{judul}', [PeraturanController::class, 'createupdateperwalikotabupati'])->middleware('auth')->name('peruud.updateperwalikotabupati');
Route::get('/perwalikotabupaticreate', [PeraturanController::class, 'createperwalikotabupati'])->middleware('auth');
Route::post('/perwalikotabupatistore', [PeraturanController::class, 'createstoreperwalikotabupati'])->middleware('auth')->name('peruud.createperwalikotabupati');
Route::post('/perwalikotabupatidelete/{judul}', [PeraturanController::class, 'deleteperwalikotabupati'])
->middleware('auth')
->name('peruud.deleteperwalikotabupati');

// SURAT KEPUTUSAN TENTANG JASA KONSTRUKSI
Route::get('/keputusan', [PeraturanController::class, 'keputusan'])->middleware('auth');
Route::get('/keputusanbaru/{judul}', [PeraturanController::class, 'keputusanshowbyjudul'])->middleware('auth');
Route::get('/keputusan/update/{judul}', [PeraturanController::class, 'updateshowkeputusan'])->middleware('auth')->name('peruud.showkeputusan');
Route::post('/keputusan/{judul}', [PeraturanController::class, 'createupdatekeputusan'])->middleware('auth')->name('peruud.updatekeputusan');
Route::get('/keputusancreate', [PeraturanController::class, 'createkeputusan'])->middleware('auth');
Route::post('/keputusanstore', [PeraturanController::class, 'createstorekeputusan'])->middleware('auth')->name('peruud.createkeputusan');
Route::post('/keputusandelete/{judul}', [PeraturanController::class, 'deletekeputusan'])
->middleware('auth')
->name('peruud.deletekeputusan');

// ====================================== ====================================== ====================================== ======================================
// BAGIAN 15 ADMINISTRATOR MENU BACKEND
// ====================================== =====================================bac= ====================================== ======================================
// SURAT KEPUTUSAN TENTANG JASA KONSTRUKSI
Route::get('/administrator', [AdministratorController::class, 'index'])->middleware('auth');
Route::get('/administrator/{name}', [AdministratorController::class, 'administratorshowbyname'])->middleware('auth');
Route::get('/administrator/update/{name}', [AdministratorController::class, 'updateadministrator'])->middleware('auth')->name('updateshow.administrator');
Route::put('/administrator/{name}', [AdministratorController::class, 'createupdateadministrator'])
->middleware('auth')
->name('update.dataadministrator');

Route::post('/administrator/{name}', [AdministratorController::class, 'deleteadministrator'])
->middleware('auth')
->name('administrator.deleteadministrator');


// KATEGORI ADMIN
Route::get('/kategoriadmin', [AdministratorController::class, 'kategoriadmin'])->middleware('auth');
Route::get('/kategoriadmincreate', [AdministratorController::class, 'createkategoriadmin'])->middleware('auth');
Route::post('/kategoriadminstore', [AdministratorController::class, 'createstorekategoriadmin'])->middleware('auth')->name('create.kategoriadmin');

Route::post('/kategoriadmin/{id}', [AdministratorController::class, 'deletekategoriadmin'])
->middleware('auth')
->name('delete.deletekategoriadmin');

// -------------------------- ROUTE UNTUK SETTINGS DATA MENU JASA KONSTRUKSI ============================================
Route::get('/settingsalldata', [SettingmenuController::class, 'alldata'])->middleware('auth');

// 01 SETTINGS MENU STATUS ADMIN
Route::get('/settingstatusadmin', [SettingmenuController::class, 'statusadmin'])->middleware('auth');
Route::get('/settingstatusadmincreate', [SettingmenuController::class, 'createstatusadmin'])->middleware('auth');
Route::post('/settingstatusadminstore', [SettingmenuController::class, 'createstorestatusadmin'])->middleware('auth')->name('create.statusadminnewbaru');
Route::post('/settingstatusadmin/{id}', [SettingmenuController::class, 'deletestatusadmin'])
->middleware('auth')
->name('delete.statusadmin');

Route::get('/daftar', [LoginController::class, 'register'])->name('login')->middleware('guest');
Route::post('/daftarnew', [LoginController::class, 'registernew'])->name('login.daftar');
Route::get('/verify/{token}', [LoginController::class, 'verifyEmail']);
Route::get('/forgotpassword', [LoginController::class, 'forgotpassword'])->name('login')->middleware('guest');

// Route::get('/login', [LoginController::class, 'loginmasuk'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// // Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');


// CONTROLLER DOWNLOAD
Route::get('/asosiasi/export', [DownloadExcelController::class, 'exportasosiasi'])->name('asosiasi.export');
Route::get('/asosiasi/dataskk2024', [DownloadExcelController::class, 'dataskk2024'])->name('dataskk2024.export');

// PEMBAHARUAN SIPJAKI KBB
// BAGIAN 2 KELEMBAGAAN FRONTEND
Route::get('/profiljakonkbb', [StrukturController::class, 'profiljakonkbb']);
Route::get('/strukturdputr', [StrukturController::class, 'strukturdputr']);
Route::get('/tupoksidputr', [StrukturController::class, 'tupoksidputr']);

// BAGIAN 3 ARTIKEL JAKON DPUPR KBB
Route::get('/artikeljakon', [BeritaController::class, 'artikeljakon']);
Route::get('/artikeljakon/show/{id}', [BeritaController::class, 'artikeljakonshow'])->name('artikeljakon.show');

// BAGIAN 3 BERITA
Route::get('/beritajakon', [BeritaController::class, 'beritajakon']);
Route::get('/beritajakon/show/{id}', [BeritaController::class, 'beritajakonshow'])->name('berita.detailshow');

Route::get('/dokkegiatan', [BeritajakonController::class, 'dokkegiatan']);
Route::get('/dokkegiatan/kegiatan/{id}', [BeritajakonController::class, 'showdokkegiatan'])->name('dokumentasi.kegiatan');

Route::get('/dokkegiatan/berita', [BeritajakonController::class, 'dokberitakegiatan'])->name('berita.showkegiatan');
Route::get('/dokkegiatan/berita/{id}', [BeritajakonController::class, 'dokberitakegiatanshow'])->name('berita.detailskegiatan');

// BAGIAN 4 DATA JAKON
Route::get('/databujkkontruksi', [BujkkontraktorController::class, 'databujkkontruksi']);
Route::get('/databujkkontruksi/layanan/{namalengkap}', [BujkkontraktorController::class, 'databujkkontruksilayanan'])->name('bujkkontraktor.showlayanan');

Route::get('/databujkkonsultasi', [BujkkonsultanController::class, 'databujkkonsultasi']);
Route::get('/databujkkonsultasi/layanan/{namalengkap}', [BujkkonsultanController::class, 'databujkkonsultasilayanan'])->name('bujkkonsultan.showlayanan');
// Route::get('/bebujkkonsultan/showsubklasifikasi/{namalengkap}', [BujkkonsultanController::class, 'bebujkkonsultanshowklasifikasi'])->middleware(['auth', 'can:admin2']);

Route::get('/dataasosiasi', [BujkkonsultanController::class, 'dataasosiasi']);
Route::get('/statistikbujk', [BujkkonsultanController::class, 'datastatistikbujk']);

// BAGIAN 7 AHSP
Route::get('/satuanhargamaterialkbb', [SatuanhargamaterialController::class, 'satuanhargamaterialkbb']);
Route::get('/satuanhargupahkbb', [SatuanhargamaterialController::class, 'satuanhargupahkbb']);
Route::get('/satuanhargaalatkbb', [SatuanhargamaterialController::class, 'satuanhargaalatkbb']);
Route::get('/shstkbb', [SatuanhargamaterialController::class, 'shstkbb']);

// BACKEND DATA JAKON KBB
Route::delete('/allskktenagakerjakbb/delete/{id}', [PembinaanController::class, 'allskktenagakerjakbbdelete'])->middleware(['auth', 'can:admin2']);
Route::get('/bedatatkkkbb/update/{id}', [PembinaanController::class, 'bedatatkkkbbupdate'])->middleware(['auth', 'can:admin2'])->name('update.datatkkkbb');
Route::post('/bedatatkkkbb/updatecreate/{id}', [PembinaanController::class, 'bedatatkkkbbupdatenew'])->middleware(['auth', 'can:admin2'])->name('update.datatkkkbbenw');

Route::get('/bedatatkkkbbcreate', [PembinaanController::class, 'bedatatkkkbbcreate'])->middleware('auth');
Route::post('/bedatatkkkbbcreatenew', [PembinaanController::class, 'bedatatkkkbbcreatenew'])->middleware('auth')->name('create.bedatatkkkbbcreatenew');



// BACKEND RANTAI PASOK BRO

Route::get('/berantaimaterial', [RantaipasokmaterialController::class, 'berantaimaterial'])->middleware(['auth', 'can:admin2']);
Route::delete('/berantaimaterial/delete/{id}', [RantaipasokmaterialController::class, 'berantaimaterialdelete'])->middleware(['auth', 'can:adminrantaipasok']);

Route::get('/berantaimaterial/create', [RantaipasokmaterialController::class, 'berantaimaterialcreate'])->middleware(['auth', 'can:adminrantaipasok'])->name('rantaipasokmaterialsupplier');
Route::post('/berantaimaterial/createnew', [RantaipasokmaterialController::class, 'berantaimaterialcreatenew'])->middleware(['auth', 'can:adminrantaipasok'])->name('create.berantaipasokmaterial');
Route::post('/berantaimaterial/createsupplier', [RantaipasokmaterialController::class, 'berantaimaterialsuppliernew'])->middleware(['auth', 'can:adminrantaipasok'])->name('create.berantaipasokmaterialsupplier');

Route::get('/berantaimaterial/update/{id}', [RantaipasokmaterialController::class, 'berantaimaterialupdate'])->middleware(['auth', 'can:adminrantaipasok']);
Route::post('/berantaimaterial/updatecreate/{id}', [RantaipasokmaterialController::class, 'berantaimaterialupdatecreate'])->middleware(['auth', 'can:adminrantaipasok'])->name('update.rantaipasokmaterial');
Route::post('/berantaimaterial/updatecreatesupplier/{id}', [RantaipasokmaterialController::class, 'berantaimaterialupdatecreatesupplier'])->middleware(['auth', 'can:adminrantaipasok'])->name('update.rantaipasokmaterialsupplier');

//RANTAI PASOK SUPPLIER PERALATAN
Route::get('/berantaiperalatan', [RantaipasokmaterialController::class, 'berantaiperalatan'])->middleware(['auth', 'can:adminrantaipasok']);
Route::delete('/berantaiperalatan/delete/{id}', [RantaipasokmaterialController::class, 'berantaiperalatandelete'])->middleware(['auth', 'can:adminrantaipasok']);

Route::get('/berantaiperalatan/create', [RantaipasokmaterialController::class, 'berantaiperalatanperalatan'])->middleware(['auth', 'can:adminrantaipasok'])->name('rantaipasokperalatansupplier');
Route::post('/berantaiperalatan/createnew', [RantaipasokmaterialController::class, 'berantaiperalatancreatenew'])->middleware(['auth', 'can:adminrantaipasok'])->name('create.berantaipasokperalatan');
Route::post('/berantaiperalatan/createnewsupplier', [RantaipasokmaterialController::class, 'berantaiperalatancreatenewsupplier'])->middleware(['auth', 'can:adminrantaipasok'])->name('create.berantaipasokperalatansupplier');

Route::get('/berantaiperalatan/update/{id}', [RantaipasokmaterialController::class, 'berantaiperalatanupdate'])->middleware(['auth', 'can:adminrantaipasok']);
Route::post('/berantaiperalatan/updatecreate/{id}', [RantaipasokmaterialController::class, 'berantaiperalatanupdatecreate'])->middleware(['auth', 'can:adminrantaipasok'])->name('update.rantaipasokperalatan');

Route::get('/betokobangunan/deletes/{id}',
    [RantaipasokmaterialController::class, 'betokobangunandelete']
)->name('betokobangunan.delete');

//RANTAI PASOK TOKO BANGUNAN
Route::get('/betokobangunan', [RantaipasokmaterialController::class, 'betokobangunan'])->middleware(['auth', 'can:adminrantaipasok']);
Route::delete('/betokobangunan/delete/{id}', [RantaipasokmaterialController::class, 'betokobangunandelete'])->middleware(['auth', 'can:adminrantaipasok']);
Route::delete('/betokobangunan/deletes/{id}', [RantaipasokmaterialController::class, 'betokobangunandelete'])->middleware(['auth', 'can:adminrantaipasok'])->name('betokobangunan.delete');

Route::get('/betokobangunan/create', [RantaipasokmaterialController::class, 'betokobangunancreate'])->middleware(['auth', 'can:adminrantaipasok'])->name('create.suppliertokobangunan');
Route::post('/betokobangunan/createnew', [RantaipasokmaterialController::class, 'betokobangunancreatenew'])->middleware(['auth', 'can:adminrantaipasok'])->name('create.betokobangunan');
Route::post('/betokobangunan/createnewsupplier', [RantaipasokmaterialController::class, 'betokobangunancreatenewsupplier'])->middleware(['auth', 'can:adminrantaipasok'])->name('create.betokobangunansupplier');

Route::get('/betokobangunan/update/{id}', [RantaipasokmaterialController::class, 'betokobangunanupdate'])->middleware(['auth', 'can:adminrantaipasok']);
Route::post('/betokobangunan/updatecreate/{id}', [RantaipasokmaterialController::class, 'betokobangunanupdatecreate'])->middleware(['auth', 'can:adminrantaipasok'])->name('update.rantaipasoktokobangunan');
Route::post('/betokobangunan/updatecreatesupplier/{id}', [RantaipasokmaterialController::class, 'betokobangunanupdatecreatesupplier'])->middleware(['auth', 'can:adminrantaipasok'])->name('update.rantaipasoktokobangunansupplier');

// RANTAI PASOK FRONEND
Route::get('/rantaipasokmaterial', [RantaipasokmaterialController::class, 'rantaipasokmaterialkbb']);

// RANTAI PASOK PERALATAN FRONTEND
Route::get('/rantaipasokperalatan', [RantaipasokmaterialController::class, 'rantaipasokperalatankbb']);

// RANTAI TOKO BANGUNAN
Route::get('/rantaitokobangunan', [RantaipasokmaterialController::class, 'rantaitokobangunan']);


// DATA AKUN PERUBAHAN
Route::get('/profilakun', [AkunController::class, 'profilakun'])->middleware(['auth', 'can:adminrantaipasok']);


// INFORMASI PERUSHAAN RANTAI PASOK
Route::get('/beprofilrantaipasok', [AkunController::class, 'beprofilrantaipasok'])->middleware(['auth', 'can:adminrantaipasok'])->name('adminrantaipasokindex');
Route::get('/beprofilrantaipasok/info', [AkunController::class, 'beprofilrantaipasokinfo'])->middleware(['auth', 'can:adminrantaipasok'])->name('perusahaaninforantaipasok');
Route::post('/beprofilrantaipasok/createnew', [AkunController::class, 'beprofilrantaipasokupdatecreate'])->middleware(['auth', 'can:adminrantaipasok'])->name('admin.informasirantaipasok');

// Route::get('/satuanhargupahkbb', [SatuanhargamaterialController::class, 'satuanhargupahkbb']);
// Route::get('/satuanhargaalatkbb', [SatuanhargamaterialController::class, 'satuanhargaalatkbb']);
// Route::get('/shstkbb', [SatuanhargamaterialController::class, 'shstkbb']);




// MENU DATA AKUN SUPPLIER
Route::get('/besuppliermaterial', [RantaipasokmaterialController::class, 'besuppliermaterial'])->middleware(['auth', 'can:adminrantaipasok']);
Route::get('/besupplierperalatan', [RantaipasokmaterialController::class, 'besupplierperalatan'])->middleware(['auth', 'can:adminrantaipasok']);
Route::get('/besuppliertokobangunan', [RantaipasokmaterialController::class, 'besuppliertokobangunan'])->middleware(['auth', 'can:adminrantaipasok']);
// Route::delete('/satuanhargamaterial/delete/{id}', [SatuanhargamaterialController::class, 'besatuanhargamaterialdelete'])->middleware(['auth', 'can:admin2']);



// PENGATURAN JENIS MATERIAL SATUAN HARGA
// 1. UNDANG UNDANG
Route::get('/permenuu', [PermenpuController::class, 'permenuu'])->middleware(['auth', 'can:admin2']);
Route::delete('/permenuu/delete/{id}', [PermenpuController::class, 'permenuudelete'])->middleware(['auth', 'can:admin2']);

Route::get('/permenuu/create', [PermenpuController::class, 'permenuucreate'])->middleware(['auth', 'can:admin2']);
Route::post('/permenuu/createnew', [PermenpuController::class, 'permenuucreatenew'])->middleware(['auth', 'can:admin2'])->name('create.undangundang');

// 2. PERMEN PEMERINTAH
Route::get('/permenpemerintah', [PermenpuController::class, 'permenpemerintah'])->middleware(['auth', 'can:admin2']);
Route::delete('/perpemerintah/delete/{id}', [PermenpuController::class, 'perpemerintahdelete'])->middleware(['auth', 'can:admin2']);

Route::get('/permenpemerintah/create', [PermenpuController::class, 'permenpemerintahcreate'])->middleware(['auth', 'can:admin2']);
Route::post('/permenpemerintah/createnew', [PermenpuController::class, 'permenpemerintahcreatenew'])->middleware(['auth', 'can:admin2'])->name('create.perpemerintah');

// 3. PERMEN PRESIDEN
Route::get('/permenpresiden', [PermenpuController::class, 'permenpresiden'])->middleware(['auth', 'can:admin2']);
Route::delete('/permenpemerintah/delete/{id}', [PermenpuController::class, 'permenpemerintahdelete'])->middleware(['auth', 'can:admin2']);

Route::get('/permenpresiden/create', [PermenpuController::class, 'permenpresidencreate'])->middleware(['auth', 'can:admin2']);
Route::post('/permenpresiden/createnew', [PermenpuController::class, 'permenpresidencreatenew'])->middleware(['auth', 'can:admin2'])->name('create.prepresiden');

// 4. PERMEN PRESIDEN
Route::get('/permenmenteri', [PermenpuController::class, 'permenmenteri'])->middleware(['auth', 'can:admin2']);
Route::delete('/permenmenteri/delete/{id}', [PermenpuController::class, 'permenmenteridelete'])->middleware(['auth', 'can:admin2']);

Route::get('/permenmenteri/create', [PermenpuController::class, 'permenmentericreate'])->middleware(['auth', 'can:admin2']);
Route::post('/permenmenteri/createnew', [PermenpuController::class, 'permenmentericreatemew'])->middleware(['auth', 'can:admin2'])->name('create.permenmenteri');

// 5. KEPUTUSAN MENTERI
Route::get('/keputusanmenteri', [PermenpuController::class, 'keputusanmenteri'])->middleware(['auth', 'can:admin2']);
Route::delete('/keputusanmenteri/delete/{id}', [PermenpuController::class, 'keputusanmenteridelete'])->middleware(['auth', 'can:admin2']);

Route::get('/keputusanmenteri/create', [PermenpuController::class, 'keputusanmentericreate'])->middleware(['auth', 'can:admin2']);
Route::post('/keputusanmenteri/createnew', [PermenpuController::class, 'keputusanmentericreatenew'])->middleware(['auth', 'can:admin2'])->name('create.keputusanmenteri');

// 6. SURAT EDARAN
Route::get('/suratedaran', [PermenpuController::class, 'suratedaran'])->middleware(['auth', 'can:admin2']);
Route::delete('/suratedaran/delete/{id}', [PermenpuController::class, 'suratedarandelete'])->middleware(['auth', 'can:admin2']);

Route::get('/permensuratedaran/create', [PermenpuController::class, 'suratedaranbaru'])->middleware('auth');
Route::post('/permensuratedaran/createnew', [PermenpuController::class, 'suratedarancreatenew'])->middleware(['auth', 'can:admin2'])->name('create.suratedaranmenteri');

// 7. SURAT REFERENSI PERATURAN JASA KONSTRUKSI
Route::get('/referensi', [PermenpuController::class, 'referensi'])->middleware(['auth', 'can:admin2']);
Route::delete('/referensi/delete/{id}', [PermenpuController::class, 'referensidelete'])->middleware(['auth', 'can:admin2']);

Route::get('/tambahreferensi/create', [PermenpuController::class, 'referensicreate'])->middleware('auth');
Route::post('/referensibaru/createnew', [PermenpuController::class, 'referensibarucreatenew'])->middleware(['auth', 'can:admin2'])->name('create.referensijasakonstruksi');

// 8. SURAT REFERENSI PERATURAN JASA KONSTRUKSI
Route::get('/permendaerah', [PermenpuController::class, 'permendaerah'])->middleware(['auth', 'can:admin2']);
Route::delete('/permendaerah/delete/{id}', [PermenpuController::class, 'permendaerahdelete'])->middleware(['auth', 'can:admin2']);

Route::get('/permendaerah/create', [PermenpuController::class, 'permendaerahcreate'])->middleware('auth');
Route::post('/permendaerah/createnew', [PermenpuController::class, 'premendaerahcreatenew'])->middleware(['auth', 'can:admin2'])->name('create.permendaerahcreate');


// 9. SURAT PERATURAN GUBERNUR
Route::get('/permengubernur', [PermenpuController::class, 'permengubernur'])->middleware(['auth', 'can:admin2']);
Route::delete('/permengubernur/delete/{id}', [PermenpuController::class, 'permengubernurdelete'])->middleware(['auth', 'can:admin2']);

Route::get('/permengubernur/create', [PermenpuController::class, 'permengubernurcreate'])->middleware('auth');
Route::post('/permengubernur/createnew', [PermenpuController::class, 'permengubernurcreatenew'])->middleware(['auth', 'can:admin2'])->name('create.permengubernurbaru');



// 10. SURAT PERATURAN WALIKOTA DAN BUPATI
Route::get('/permenwalikota', [PermenpuController::class, 'permenwalikota'])->middleware(['auth', 'can:admin2']);
Route::delete('/permenwalikota/delete/{id}', [PermenpuController::class, 'permenwalikotadelete'])->middleware(['auth', 'can:admin2']);

Route::get('/permenwalikota/create', [PermenpuController::class, 'permenwalikotacreate'])->middleware('auth');
Route::post('/permenwalikota/createnew', [PermenpuController::class, 'permenwalikotacreatenew'])->middleware(['auth', 'can:admin2'])->name('create.permenwalikotabaru');


// 11. SURAT PERATURAN SURAT KEPUTUSAN JASA KONSTRUKSI
Route::get('/permensuratkeputusan', [PermenpuController::class, 'permensuratkeputusan'])->middleware(['auth', 'can:admin2']);
Route::delete('/permensuratkeputusan/delete/{id}', [PermenpuController::class, 'permensuratkeputusandelete'])->middleware(['auth', 'can:admin2']);

Route::get('/permensuratkeputusan/create', [PermenpuController::class, 'permensuratkeputusancreate'])->middleware('auth');
Route::post('/permensuratkeputusan/createnew', [PermenpuController::class, 'permensuratkeputusancreatenew'])->middleware(['auth', 'can:admin2'])->name('create.permensuratkeputusannew');

// PERATURAN JASA KONSTRUKSI
Route::get('/perundangundang', [PermenpuController::class, 'perundangundang']);
Route::get('/peraturanpemerintah', [PermenpuController::class, 'peraturanpemerintah']);
Route::get('/peraturanpresiden', [PermenpuController::class, 'peraturanpresiden']);
Route::get('/peraturanmenteri', [PermenpuController::class, 'peraturanmenteri']);
Route::get('/peraturankeputusanmanteri', [PermenpuController::class, 'peraturankeputusanmanteri']);
Route::get('/peraturankeputusanmanteri', [PermenpuController::class, 'peraturankeputusanmanteri']);
Route::get('/peraturansuratedaran', [PermenpuController::class, 'peraturansuratedaran']);
Route::get('/peraturanreferensi', [PermenpuController::class, 'peraturanreferensi']);
Route::get('/peraturandaerah', [PermenpuController::class, 'peraturandaerah']);
Route::get('/peraturangubernur', [PermenpuController::class, 'peraturangubernur']);
Route::get('/peraturanwalikota', [PermenpuController::class, 'peraturanwalikota']);
Route::get('/peraturansuratkeputusan', [PermenpuController::class, 'peraturansuratkeputusan']);


/// DATA JAKON
Route::get('/datajakontkkkbb', [BujkkontraktorController::class, 'datajakontkkkbb']);
Route::get('/datastatistiktkkkbb', [BujkkontraktorController::class, 'datastatistiktkkkbb']);

// Route::get('/besatuanhargamaterial/create', [SatuanhargamaterialController::class, 'satuanhargamaterialcreate'])->middleware(['auth', 'can:admin2']);
// Route::post('/besatuanhargamaterial/createnew', [SatuanhargamaterialController::class, 'satuanhargamaterialcreatenew'])->middleware(['auth', 'can:admin2'])->name('create.satuanhargamaterialcreatenew');

// Route::get('/besatuanhargamaterial/update/{id}', [SatuanhargamaterialController::class, 'besatuanhargamaterialupdate'])->middleware(['auth', 'can:admin2']);
// Route::post('/besatuanhargamaterial/updatecreate/{id}', [SatuanhargamaterialController::class, 'besatuanhargamaterialupdatecreate'])->middleware(['auth', 'can:admin2'])->name('update.besatuanhargamaterialcreateupdate');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
