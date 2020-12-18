<?php

namespace App\Http\Controllers\AkunSiswa\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        return view('akun_siswa.auth.confirm-password');
    }

    /**
     * Confirm the akun_siswa's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (! Auth::guard('akun_siswa')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            return back()->withErrors([
                'password' => __('akun_siswa.auth.password'),
            ]);
        }

        $request->session()->put('akun_siswa.auth.password_confirmed_at', time());

        return redirect()->intended(route('akun_siswa.dashboard'));
    }
}
