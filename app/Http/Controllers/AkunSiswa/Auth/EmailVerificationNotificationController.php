<?php

namespace App\Http\Controllers\AkunSiswa\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->user('akun_siswa')->hasVerifiedEmail()) {
            return redirect()->intended(route('akun_siswa.dashboard'));
        }

        $request->user('akun_siswa')->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
