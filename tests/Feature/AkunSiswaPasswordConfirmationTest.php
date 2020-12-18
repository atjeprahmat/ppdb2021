<?php

namespace Tests\Feature;

use App\Models\AkunSiswa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AkunSiswaPasswordConfirmationTest extends TestCase
{
    use RefreshDatabase;

    public function test_confirm_password_screen_can_be_rendered()
    {
        $akun_siswa = AkunSiswa::factory()->create();

        $response = $this->actingAs($akun_siswa, 'akun_siswa')->get('akun_siswa/confirm-password');

        $response->assertStatus(200);
    }

    public function test_password_can_be_confirmed()
    {
        $akun_siswa = AkunSiswa::factory()->create();

        $response = $this->actingAs($akun_siswa, 'akun_siswa')->post('akun_siswa/confirm-password', [
            'password' => 'password',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
    }

    public function test_password_is_not_confirmed_with_invalid_password()
    {
        $akun_siswa = AkunSiswa::factory()->create();

        $response = $this->actingAs($akun_siswa, 'akun_siswa')->post('akun_siswa/confirm-password', [
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors();
    }
}
