<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registrasi() {
        return view('login.registrasi');
    }

    public function presensi() {
        return view('user.presensi');
    }

    public function postRegistrasi(Request $request) {
        User::create([
            'name' => $request->name,
            'level' => 'karyawan',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        if (Auth::attempt($request->only('name', 'email', 'password'))) {
            if (auth()->user()->level === 'karyawan') {
                return redirect('presensi');
            } else {
                return redirect('/')->with('warning', 'Daftar Gagal');
            }   
        }
    }
}
