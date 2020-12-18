<?php

namespace App\Http\Controllers\AkunSiswa\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated akun_siswa's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        if ($request->user('akun_siswa')->hasVerifiedEmail()) {
            return redirect()->intended(route('akun_siswa.dashboard').'?verified=1');
        }

        if ($request->user('akun_siswa')->markEmailAsVerified()) {
            event(new Verified($request->user('akun_siswa')));
        }

        return redirect()->intended(route('akun_siswa.dashboard').'?verified=1');
    }
}
