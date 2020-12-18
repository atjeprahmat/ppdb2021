<?php

namespace Tests\Feature;

use App\Models\AkunSiswa;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AkunSiswaAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('akun_siswa/login');

        $response->assertStatus(200);
    }

    public function test_akun_siswas_can_authenticate_using_the_login_screen()
    {
        $akun_siswa = AkunSiswa::factory()->create();

        $response = $this->post('akun_siswa/login', [
            'email' => $akun_siswa->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated('akun_siswa');
        $response->assertRedirect(route('akun_siswa.dashboard'));
    }

    public function test_akun_siswas_can_not_authenticate_with_invalid_password()
    {
        $akun_siswa = AkunSiswa::factory()->create();

        $this->post('akun_siswa/login', [
            'email' => $akun_siswa->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest('akun_siswa');
    }
}
