<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AkunSiswaRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('akun_siswa/register');

        $response->assertStatus(200);
    }

    public function test_new_akun_siswas_can_register()
    {
        $response = $this->post('akun_siswa/register', [
            'name' => 'Test AkunSiswa',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated('akun_siswa');
        $response->assertRedirect(route('akun_siswa.dashboard'));
    }
}
