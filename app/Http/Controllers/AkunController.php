<?php

namespace App\Http\Controllers;

use App\Models\informasirantaipasok;
use App\Models\kecamatankbb;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\statusadmin;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AkunController extends Controller
{
    //

// DAFTAR AKUN MASUK MAS JAKI BLORA
public function allakun(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = User::query();

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user per statusadmin (berdasarkan id statusadmin dari 1 sampai 9)
    $jumlahStatus1 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 1);
    })->count();

    $jumlahStatus2 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 2);
    })->count();

    $jumlahStatus3 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 3);
    })->count();

    $jumlahStatus4 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 4);
    })->count();

    $jumlahStatus5 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 5);
    })->count();

    $jumlahStatus6 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 6);
    })->count();

    $jumlahStatus7 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 7);
    })->count();

    $jumlahStatus8 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 8);
    })->count();

    $jumlahStatus9 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 9);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.01_semuaakun.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.01_semuaakun.index', [
        'title' => 'Daftar Semua Akun',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus1' => $jumlahStatus1, // Super Admin
        'jumlahStatus2' => $jumlahStatus2, // Admin
        'jumlahStatus3' => $jumlahStatus3, // Pekerja
        'jumlahStatus4' => $jumlahStatus4, // Supp Pabrik
        'jumlahStatus5' => $jumlahStatus5, // Sup Peralatan
        'jumlahStatus6' => $jumlahStatus6, // Sup Toko Bangunan
        'jumlahStatus7' => $jumlahStatus7, // LSP Penerbit
        'jumlahStatus8' => $jumlahStatus8, // Operator
        'jumlahStatus9' => $jumlahStatus9, // Dinas
    ]);
}

public function allsemuaakun($name)
{
// Cari item berdasarkan judul
$entry = User::where('name', $name)->first();

if ($entry) {
// Jika ada file header yang terdaftar, hapus dari storage
// if (Storage::disk('public')->exists($entry->header)) {
    //     Storage::disk('public')->delete($entry->header);
// }

// Hapus entri dari database
$entry->delete();

// Redirect atau memberi respons sesuai kebutuhan
return redirect('/allakun')->with('delete', 'Data Berhasil Di Hapus !');

}

return redirect()->back()->with('error', 'Item not found');
}

public function allsemuaakunlsp($name)
{
    // Cari item berdasarkan nama
    $entry = User::where('name', $name)->first();

    if ($entry) {

        // Hapus entri dari database
        $entry->delete();

        // Redirect kembali ke halaman sebelumnya
        return redirect()->back()->with('delete', 'Data Berhasil Di Hapus !');
    }

    return redirect()->back()->with('error', 'Item not found');
}






public function akuncreate()
{

    $data = statusadmin::all();

    return view('backend.13_daftarakun.01_semuaakun.create',[
        'title' => 'Buat Akun !',
        'data' => $data,

    ]);
}

public function akuncreatenew(Request $request)
{
    $validatedData = $request->validate([
        'statusadmin_id' => 'required|string',
        'name'           => 'required|string|max:255',
        'username'       => 'required|string|max:255',
        'phone_number'   => 'required|string|max:255',
        'email'          => 'required|email|unique:users,email',
        'password'       => 'required|string|min:6|confirmed', // <-- VALIDASI PASSWORD
        'avatar'         => 'required|image|mimes:jpeg,png,jpg|max:15048',
    ], [
        'statusadmin_id.required' => 'Status Admin wajib dipilih!',
        'name.required'           => 'Nama wajib diisi!',
        'username.required'       => 'Username wajib diisi!',
        'phone_number.required'   => 'Nomor HP wajib diisi!',
        'email.required'          => 'Email wajib diisi!',
        'email.unique'            => 'Email sudah terdaftar!',
        'password.required'       => 'Password wajib diisi!',
        'password.min'            => 'Password minimal 6 karakter!',
        'password.confirmed'      => 'Konfirmasi password tidak sama!',
        'avatar.required'         => 'Avatar harus diupload!',
        'avatar.image'            => 'Avatar harus berupa gambar!',
        'avatar.mimes'            => 'Avatar harus JPEG, JPG, atau PNG!',
    ]);

    // Default avatar
    $avatarPath = 'assets/abgblora/logo/iconabgblora.png';

    // Upload avatar
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $tujuanPath = public_path('00_user/akun');

        if (!file_exists($tujuanPath)) {
            mkdir($tujuanPath, 0777, true);
        }

        $file->move($tujuanPath, $namaFile);
        $avatarPath = '00_user/akun/' . $namaFile;
    }

    // Simpan user
    User::create([
        'statusadmin_id' => $validatedData['statusadmin_id'],
        'name'           => $validatedData['name'],
        'username'       => $validatedData['username'],
        'phone_number'   => $validatedData['phone_number'],
        'email'          => $validatedData['email'],
        'avatar'         => $avatarPath,
        'password'       => bcrypt($validatedData['password']), // <-- PASSWORD DARI FORM
    ]);

    session()->flash('create', 'Data pengguna berhasil dibuat!');
    return redirect('/allakun');
}


public function forgotpassword()
    {

        return view('register.forgotpassword',[
            'title' => 'Forgot Password !',
        ]);
    }


    // AKUN PEKERJA

 public function beprofileindex()
{
    // Ambil user yang sedang login
    $user = Auth::user();

    // Ambil ID dari user yang login
    $userId = $user->username;

    // (opsional) Kalau mau cek ID
    // dd($userId);

return view('backend.15_hakakses.02_profile.index', [
        'title' => 'Profil Akun Anda !',
        'user' => $user,
        'userId' => $userId, // Kirim juga ke view jika perlu
    ]);
}


public function beprofileupdate($username)
{
    // Cari data undang-undang berdasarkan nilai 'judul'
    $user = User::where('username', $username)->firstOrFail();

    // Tampilkan form update dengan data yang ditemukan
    return view('backend.15_hakakses.02_profile.update', [
        'user' => $user,
        'title' => 'Update Akun Anda !'
    ]);
}


// ========================
public function beprofileupdatecreate(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Validasi input
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users,username,' . $id,
        'email' => 'required|email|max:255|unique:users,email,' . $id,
        'phone_number' => 'nullable|string|max:20',
        'password' => 'nullable|string|min:6|confirmed', // password_confirmation harus ada jika password diisi
        'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
    ], [
        'name.required' => 'Nama lengkap wajib diisi.',
        'name.string' => 'Nama lengkap harus berupa teks.',
        'name.max' => 'Nama lengkap tidak boleh lebih dari 255 karakter.',

        'username.required' => 'Username wajib diisi.',
        'username.string' => 'Username harus berupa teks.',
        'username.max' => 'Username tidak boleh lebih dari 255 karakter.',
        'username.unique' => 'Username ini sudah digunakan, silakan pilih yang lain.',

        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
        'email.unique' => 'Email ini sudah digunakan, silakan gunakan email lain.',

        'phone_number.string' => 'No Handphone harus berupa teks.',
        'phone_number.max' => 'No Handphone tidak boleh lebih dari 20 karakter.',

        'password.min' => 'Password minimal 6 karakter.',
        'password.confirmed' => 'Konfirmasi password tidak sesuai.',

        'avatar.image' => 'File harus berupa gambar.',
        'avatar.mimes' => 'Format gambar harus jpg, jpeg, atau png.',
        'avatar.max' => 'Ukuran gambar tidak boleh lebih dari 5MB.',
    ]);

    // Simpan avatar baru jika ada file di-upload
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $avatarName = 'avatar_' . time() . '.' . $file->getClientOriginalExtension();
        $avatarPath = '00_akun/01_user/' . $avatarName; // relative path dari public

        // Buat folder jika belum ada
        if (!File::isDirectory(public_path('00_akun/01_user'))) {
            File::makeDirectory(public_path('00_akun/01_user'), 0755, true);
        }

        // Hapus avatar lama jika ada
        if ($user->avatar && file_exists(public_path($user->avatar))) {
            File::delete(public_path($user->avatar));
        }

        // Simpan file baru ke public path
        $file->move(public_path('00_akun/01_user'), $avatarName);

        // Simpan path ke database
        $user->avatar = $avatarPath;
    }

    // Update data lainnya
    $user->name = $validated['name'];
    $user->username = $validated['username'];
    $user->email = $validated['email'];
    $user->phone_number = $validated['phone_number'] ?? $user->phone_number;

    // Update password jika diisi
    if (!empty($validated['password'])) {
        $user->password = Hash::make($validated['password']);
    }

    $user->save();

    session()->flash('update', 'Akun Anda Berhasil Di Update !');

    return redirect('/beprofile');
}



// AKUN SUPER ADMIN

public function allsuperadmin(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    // Hanya ambil user yang statusadmin-nya memiliki id = 1
    $query = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 1);
    });

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user dengan statusadmin id = 1
    $jumlahStatus1 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 1);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.02_superadmin.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.02_superadmin.index', [
        'title' => 'Daftar Semua Akun Super Admin',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus1' => $jumlahStatus1, // Super Admin
    ]);
}


public function alladmin(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    // Hanya ambil user yang statusadmin-nya memiliki id = 1
    $query = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 2);
    });

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user dengan statusadmin id = 1
    $jumlahStatus2 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 2);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.03_admin.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.03_admin.index', [
        'title' => 'Daftar Semua Akun Admin',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus2' => $jumlahStatus2, // Super Admin
    ]);
}


public function allpekerja(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    // Hanya ambil user yang statusadmin-nya memiliki id = 1
    $query = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 3);
    });

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user dengan statusadmin id = 1
    $jumlahStatus2 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 3);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.04_pekerja.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.04_pekerja.index', [
        'title' => 'Daftar Semua Akun Pekerja',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus2' => $jumlahStatus2, // Super Admin
    ]);
}

public function allsupppabrik(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    // Hanya ambil user yang statusadmin-nya memiliki id = 1
    $query = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 4);
    });

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user dengan statusadmin id = 1
    $jumlahStatus2 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 4);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.05_supppabrik.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.05_supppabrik.index', [
        'title' => 'Daftar Semua Akun Supplier Pabrik',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus2' => $jumlahStatus2, // Super Admin
    ]);
}


public function allsuppperalatan(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    // Hanya ambil user yang statusadmin-nya memiliki id = 1
    $query = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 5);
    });

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user dengan statusadmin id = 1
    $jumlahStatus2 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 5);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.06_suppperalatan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.06_suppperalatan.index', [
        'title' => 'Daftar Semua Akun Supplier Peralatan',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus2' => $jumlahStatus2, // Super Admin
    ]);
}

public function allsupptokobangunan(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    // Hanya ambil user yang statusadmin-nya memiliki id = 1
    $query = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 6);
    });

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user dengan statusadmin id = 1
    $jumlahStatus2 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 6);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.07_supptokobangunan.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.07_supptokobangunan.index', [
        'title' => 'Daftar Semua Akun Toko Bangunan',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus2' => $jumlahStatus2, // Super Admin
    ]);
}

public function alllsppenerbit(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    // Hanya ambil user yang statusadmin-nya memiliki id = 1
    $query = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 7);
    });

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user dengan statusadmin id = 1
    $jumlahStatus2 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 7);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.08_lsppenerbit.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.08_lsppenerbit.index', [
        'title' => 'Daftar Semua Akun LSP Penerbit',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus2' => $jumlahStatus2, // Super Admin
    ]);
}

public function alldinas(Request $request)
{
    $perPage = $request->input('perPage', 15);
    $search = $request->input('search');

    // Hanya ambil user yang statusadmin-nya memiliki id = 1
    $query = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 9);
    });

    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('username', 'LIKE', "%{$search}%")
              ->orWhere('phone_number', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('avatar', 'LIKE', "%{$search}%");
        });
    }

    $data = $query->orderBy('created_at', 'desc')->paginate($perPage);

    // Hitung jumlah user dengan statusadmin id = 1
    $jumlahStatus2 = User::whereHas('statusadmin', function ($q) {
        $q->where('id', 9);
    })->count();

    if ($request->ajax()) {
        return response()->json([
            'html' => view('backend.13_daftarakun.10_dinas.partials.table', compact('data'))->render()
        ]);
    }

    return view('backend.13_daftarakun.10_dinas.index', [
        'title' => 'Daftar Semua Akun Dinas',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search,
        'jumlahStatus2' => $jumlahStatus2, // Super Admin
    ]);
}


public function beprofilrantaipasok()
{
    // Ambil user yang sedang login
    $user = Auth::user();

    $informasiId = $user->id;

    // Ambil data rantai pasok berdasarkan user yang login
    $informasi = informasirantaipasok::where('user_id', $user->id)->first();

    return view('backend.15_hakakses.03_rantaipasok.index', [
        'title' => 'Profil Informasi PT/CV/Toko Bangunan Rantai Pasok',
        'user' => $user,
        'informasi' => $informasi,
        'informasiId' => $informasiId,
    ]);
}

public function beprofilrantaipasokinfo()
{
    // Ambil user yang sedang login
    $user = Auth::user();

    // Ambil data rantai pasok berdasarkan user_id dari user yang login
    $informasi = informasirantaipasok::where('user_id', $user->id)->first();
    $kecamatankbb = kecamatankbb::all();

    // Tampilkan form update / create (prefill kalau data ada)
    return view('backend.15_hakakses.03_rantaipasok.update', [
        'user' => $user,
        'informasi' => $informasi,
        'kecamatankbb' => $kecamatankbb,
        'title' => 'Masukan Profil Perusahaan Anda !',
    ]);
}

public function beprofilrantaipasokupdatecreate(Request $request)
{
    $user = Auth::user();

    // Validasi
    $validated = $request->validate([
        'fotoperusahaan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:15048',
        'namaperusahaan' => 'nullable|string|max:255',
        'tahunberdiri' => 'nullable|string|max:4',
        'nib' => 'nullable|string|max:100',
        'npwp' => 'nullable|string|max:100',
        'telepon' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',
        'website' => 'nullable|string|max:255',
        'alamatlengkap' => 'nullable|string',
        'namapimpinan' => 'nullable|string|max:255',
        'jabatan' => 'nullable|string|max:255',
        'keteranganperusahaan' => 'nullable|string',
    ]);

    // Ambil data jika sudah ada
    $informasi = informasirantaipasok::firstOrNew(['user_id' => $user->id]);

    // Handle upload foto perusahaan langsung ke public
    if ($request->hasFile('fotoperusahaan')) {
        // Hapus foto lama jika ada
        if ($informasi->fotoperusahaan && file_exists(public_path($informasi->fotoperusahaan))) {
            unlink(public_path($informasi->fotoperusahaan));
        }

        $file = $request->file('fotoperusahaan');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('rantaipasok'), $filename); // simpan langsung ke public/rantaipasok
        $informasi->fotoperusahaan = 'rantaipasok/' . $filename; // simpan path relatif ke database
    }

    // Simpan data lain
    $informasi->user_id = $user->id;
    $informasi->namaperusahaan = $validated['namaperusahaan'] ?? $informasi->namaperusahaan ?? null ;
    $informasi->tahunberdiri = $validated['tahunberdiri'] ?? $informasi->tahunberdiri ?? null ;
    $informasi->nib = $validated['nib'] ?? $informasi->nib ?? null ;
    $informasi->npwp = $validated['npwp'] ?? $informasi->npwp ?? null ;
    $informasi->telepon = $validated['telepon'] ?? $informasi->telepon ?? null ;
    $informasi->email = $validated['email'] ?? $informasi->email ?? null ;
    $informasi->website = $validated['website'] ?? $informasi->website ?? null ;
    $informasi->alamatlengkap = $validated['alamatlengkap'] ?? $informasi->alamatlengkap ?? null ;
    $informasi->namapimpinan = $validated['namapimpinan'] ?? $informasi->namapimpinan ?? null ;
    $informasi->jabatan = $validated['jabatan'] ?? $informasi->jabatan ?? null ;
    $informasi->keteranganperusahaan = $validated['keteranganperusahaan'] ?? $informasi->keteranganperusahaan ?? null ;

    $informasi->save();

    return redirect('/beprofilrantaipasok')->with('success', 'Profil perusahaan berhasil disimpan!');
}

}



