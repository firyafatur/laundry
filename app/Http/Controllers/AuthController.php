<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // halaman login
    public function login()
    {
        return view('login');
    }

    public function registrasi()
    {
        return view('registrasi');
    }

    public function login_verifikasi()
    {
        return view('verifikasi');
    }

    public function proses_logout()
    {
        return view('logout');
    }
}
