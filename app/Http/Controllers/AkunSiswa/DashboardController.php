<?php

namespace App\Http\Controllers\AkunSiswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        
        return view('siswa.dashboard');
    }
}
