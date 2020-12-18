<?php

namespace Tests\Feature;

use App\Models\AkunSiswa;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class AkunSiswaPasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_reset_password_link_screen_can_be_rendered()
    {
        $response = $this->get('akun_siswa/forgot-password');

        $response->assertStatus(200);
    }

    public function test_reset_password_link_can_be_requested()
    {
        Notification::fake();

        $akun_siswa = AkunSiswa::factory()->create();

        $response = $this->post('akun_siswa/forgot-password', [
            'email' => $akun_siswa->email,
        ]);

        Notification::assertSentTo($akun_siswa, ResetPassword::class);
    }

    public function test_reset_password_screen_can_be_rendered()
    {
        Notification::fake();

        $akun_siswa = AkunSiswa::factory()->create();

        $response = $this->post('akun_siswa/forgot-password', [
            'email' => $akun_siswa->email,
        ]);

        Notification::assertSentTo($akun_siswa, ResetPassword::class, function ($notification) {
            $response = $this->get('akun_siswa/reset-password/'.$notification->token);

            $response->assertStatus(200);

            return true;
        });
    }

    public function test_password_can_be_reset_with_valid_token()
    {
        Notification::fake();

        $akun_siswa = AkunSiswa::factory()->create();

        $response = $this->post('akun_siswa/forgot-password', [
            'email' => $akun_siswa->email,
        ]);

        Notification::assertSentTo($akun_siswa, ResetPassword::class, function ($notification) use ($akun_siswa) {
            $response = $this->post('akun_siswa/reset-password', [
                'token' => $notification->token,
                'email' => $akun_siswa->email,
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);

            $response->assertSessionHasNoErrors();

            return true;
        });
    }
}
