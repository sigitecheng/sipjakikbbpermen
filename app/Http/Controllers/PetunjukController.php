<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetunjukController extends Controller
{

public function dokhakakses(Request $request)
{
    // Ambil user yang sedang login
    $user = Auth::user();

    return view('backend.18_petunjukumum.01_hakakses.hakakses', [
        'title'   => 'Informasi Hak Akses Penggunaan Aplikasi',
        'user'    => $user,   // <<< user login dikirim ke view
    ]);
}
    //
}
