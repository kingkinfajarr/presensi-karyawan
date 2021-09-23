<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login.login');
    }

    public function login(Request $request) {
        if (Auth::attempt($request->only('email', 'password'))) {
            if (auth()->user()->level === 'admin') {
                return redirect('rekap-presensi-admin');
            } else {
                return redirect('presensi');
            }   
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }
}
