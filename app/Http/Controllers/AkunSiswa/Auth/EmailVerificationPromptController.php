<?php

namespace App\Http\Controllers\AkunSiswa\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        return $request->user('akun_siswa')->hasVerifiedEmail()
                    ? redirect()->intended(route('akun_siswa.dashboard'))
                    : view('akun_siswa.auth.verify-email');
    }
}
