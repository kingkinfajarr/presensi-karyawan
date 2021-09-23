<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function presensiMasuk() {
        return view('user.presensi-masuk');
    }
    public function presensiKeluar() {
        return view('user.presensi-keluar');
    }

    public function postPresensiMasuk() {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id', '=', auth()->user()->id],
            ['tgl', '=', $tanggal],
        ])->first();
        if ($presensi) {
            return redirect('presensi')->with('warning', 'Maaf Anda Sudah Melakukan Presensi Masuk');
        } else {
            Presensi::create([
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,
                'jam_masuk' => $localtime,
            ]);
        }
        return redirect('presensi')->with('success', 'Presensi Masuk Sukses');
    }

    public function postPresensiKeluar() {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id', '=', auth()->user()->id],
            ['tgl', '=', $tanggal],
        ])->first();

        $dt = [
            'jam_keluar' => $localtime,
            'jam_kerja' => date('H:i:s', strtotime($localtime) - strtotime($presensi->jam_masuk))
        ];

        if ($presensi->jam_keluar == "") {
            $presensi->update($dt);
            return redirect('presensi')->with('success', 'Presensi Keluar Sukses');
        } else {
            return redirect('presensi')->with('warning', 'Maaf Anda Sudah Melakukan Presensi Keluar');
        }
    }

    public function rekapPresensiKaryawan() {
        $presensi = Presensi::with('user')->get();
        return view('user.rekap-presensi', compact('presensi'));
    }
}
