<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\akun_siswa;
use Illuminate\Support\Facades\Hash;

class siswaController extends Controller
{
    public function daftar(Request $request){
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->jk = $request->jk;
        $siswa->nisn = $request->nisn;
        $siswa->nik = $request->nik;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->agama = $request->agama;
        $siswa->anak_ke = $request->anak_ke;
        $siswa->jalan = $request->jalan;
        $siswa->rt = $request->rt;
        $siswa->rw = $request->rw;
        $siswa->no_rumah = $request->no_rumah;
        $siswa->desa_kelurahan = $request->desa_kelurahan;
        $siswa->kota_kabupaten = $request->kota_kabupaten;
        $siswa->kode_pos = $request->kode_pos;
        $siswa->asal_sekolah = $request->asal_sekolah;
        $siswa->tahun_lulus = $request->tahun_lulus;
        $siswa->no_hp = $request->no_hp;
        $siswa->email = $request->email;
        $siswa->pilihan_bidang = $request->pilihan_bidang;
        $siswa->no_kk = $request->no_kk;
        $siswa->nik_ayah = $request->nik_ayah;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->pekerjaan_ayah = $request->pekerjaan_ayah;
        $siswa->no_hp_ayah = $request->no_hp_ayah;
        $siswa->nik_ibu = $request->nik_ibu;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->pekerjaan_ibu = $request->pekerjaan_ibu;
        $siswa->no_hp_ibu = $request->no_hp_ibu;
        $siswa->save();       

        $akun_siswa = new akun_siswa;
        $akun_siswa->no_seleksi = $siswa->no_seleksi;
        $akun_siswa->username = $request->nisn;
        $akun_siswa->password = Hash::make($request->nisn);
        $akun_siswa->save();

        return view('siswa.index');
    }
}
