<?php

namespace App\Http\Controllers;

use App\Models\statusadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User; // Ganti sesuai model user kamu
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class LoginController extends Controller
{
    //

    public function index()
    {
        //
        return view('login.index',[
            'title' => 'Under Constructions',
        ]);
    }

    public function masuk()
    {
        //
        return view('login.index',[
            'title' => 'Silahkan Login',
        ]);
    }

    // public function authenticate(Request $request)
    // {
        // $credentials = $request->validate([
        //     'email' => 'required|email',  // PENGGUNAAN DNS UNTUK MENERIMA EMAIL YANG SANGAT BENAR VALID ,
        //     'password' => 'required'
        // ]);

        // $credentials = $request->validate([
        //     'email' => ['required|email anda salah !', 'email:crf',],
        //     'password' => 'required'
        // ]);

        // // Coba melakukan autentikasi pengguna
        // if (Auth::attempt($credentials)) {
        //     // Jika autentikasi berhasil, arahkan pengguna ke dashboard
        //     return redirect()->intended('/dashboard');
        // } else {
        //     // Jika autentikasi gagal, kembalikan pengguna ke halaman login dengan pesan kesalahan
        //     return back()->withErrors(['email' => 'Email atau kata sandi yang Anda masukkan salah.'])->withInput($request->only('email'));
        // }


        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboards');
        // }
        // return back()->with('loginError', 'Login Failed !');

        // dd('Berhasil Masuk Iqlima');
    // }
// =========================
// public function authenticate(Request $request)
// {
//     // Validasi input dengan pesan kesalahan khusus
//     $request->validate([
//         'email' => 'required|email',
//         'password' => 'required',
//     ], [
//         'email.required' => 'Email harus diisi.',
//         'email.email' => 'Format email tidak valid.',
//         'password.required' => 'Password harus diisi.',
//     ]);

//     // Coba autentikasi dengan kredensial yang diberikan
//     $credentials = $request->only('email', 'password');

//     if (Auth::attempt($credentials)) {
//         // Regenerasi session untuk keamanan
//         $request->session()->regenerate();

//         // Redirect ke halaman dashboard setelah login berhasil
//         return redirect()->intended('/dashboard');
//     }

//     // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan kesalahan
//     return back()->withErrors([
//         'loginError' => 'Email atau password Anda salah!',
//     ])->onlyInput('email'); // Hanya mengisi ulang input email
// }

public function authenticate(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Cek apakah email ada?
    $user = \App\Models\User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors([
            'email' => 'Email tidak terdaftar!',
        ])->withInput();
    }

    // Email ada → cek password
    if (!\Illuminate\Support\Facades\Hash::check($request->password, $user->password)) {
        return back()->withErrors([
            'password' => 'Password yang Anda masukkan salah!',
        ])->withInput();
    }

    // Login berhasil
    Auth::login($user);

    $request->session()->regenerate();
    return redirect('/dashboard');
}



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function register()
    {
        $datastatusadmin = statusadmin::whereIn('id', [3, 9, 10])->get();

        return view('login.register', [
            'statusadmin' => $datastatusadmin,
            'title' => 'Register Akun SIPJAKI KBB !',
        ]);
    }
public function registernew(Request $request)
{
    // Validasi input dengan custom error message
    $validator = Validator::make($request->all(), [
        'statusadmin_id' => 'required|string',
        'username'       => 'required|string|max:255|unique:users',
        'phone_number'   => 'required|string|max:20|unique:users',
        'email'          => 'required|email|max:255|unique:users',
        'password'       => 'required|string|min:6|confirmed', // password_confirmation wajib ada
    ], [
        'statusadmin_id.required' => 'Harap pilih jenis akun Anda.',
        'statusadmin_id.exists'   => 'Jenis akun yang dipilih tidak valid.',
        'username.required'       => 'Username wajib diisi.',
        'username.max'            => 'Username terlalu panjang, maksimal 255 karakter.',
        'username.unique'         => 'Username sudah digunakan, silakan pilih yang lain.',
        'phone_number.required'   => 'Nomor handphone wajib diisi.',
        'phone_number.max'        => 'Nomor handphone terlalu panjang, maksimal 20 karakter.',
        'phone_number.unique'     => 'Nomor handphone sudah terdaftar.',
        'email.required'          => 'Email wajib diisi.',
        'email.email'             => 'Format email tidak valid.',
        'email.max'               => 'Email terlalu panjang, maksimal 255 karakter.',
        'email.unique'            => 'Email sudah terdaftar.',
        'password.required'       => 'Password wajib diisi.',
        'password.min'            => 'Password minimal 6 karakter.',
        'password.confirmed'      => 'Konfirmasi password tidak sesuai.',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
    }

    // Simpan user baru
    $user = User::create([
        'statusadmin_id' => $request->statusadmin_id,
        'username'       => $request->username,
        'phone_number'   => $request->phone_number,
        'email'          => $request->email,
        'password'       => Hash::make($request->password),
    ]);

    // Redirect atau login otomatis
    return redirect('/login')->with('create', 'Pendaftaran berhasil! Silakan login.');
}

public function profilakun()
{
    // Ambil data user yang sedang login saja
    $data = User::select('id', 'statusadmin_id', 'name', 'username', 'phone_number', 'email', 'avatar', 'created_at')
                ->where('id', auth()->id())
                ->first(); // Ambil satu data saja karena cuma 1 user login

    return view('backend.13_daftarakun.10_dinas.index', [
        'title' => 'Profil Saya',
        'data' => $data,
    ]);
}

}
