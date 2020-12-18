<?php

namespace App\Http\Controllers\AkunSiswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $id = Auth::user()->no_seleksi;
        $data = Siswa::find($id);
        return view('siswa.dashboard')->with('data',$data);
    }
}
