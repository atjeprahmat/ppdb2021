<?php

namespace Tests\Feature;

use App\Models\AkunSiswa;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class AkunSiswaEmailVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_email_verification_screen_can_be_rendered()
    {
        $akun_siswa = AkunSiswa::factory()->create([
            'email_verified_at' => null,
        ]);

        $response = $this->actingAs($akun_siswa, 'akun_siswa')->get('akun_siswa/verify-email');

        $response->assertStatus(200);
    }

    public function test_email_can_be_verified()
    {
        Event::fake();

        $akun_siswa = AkunSiswa::factory()->create([
            'email_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'akun_siswa.verification.verify',
            now()->addMinutes(60),
            ['id' => $akun_siswa->id, 'hash' => sha1($akun_siswa->email)]
        );

        $response = $this->actingAs($akun_siswa, 'akun_siswa')->get($verificationUrl);

        Event::assertDispatched(Verified::class);
        $this->assertTrue($akun_siswa->fresh()->hasVerifiedEmail());
        $response->assertRedirect(route('akun_siswa.dashboard').'?verified=1');
    }

    public function test_email_is_not_verified_with_invalid_hash()
    {
        $akun_siswa = AkunSiswa::factory()->create([
            'email_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'akun_siswa.verification.verify',
            now()->addMinutes(60),
            ['id' => $akun_siswa->id, 'hash' => sha1('wrong-email')]
        );

        $this->actingAs($akun_siswa, 'akun_siswa')->get($verificationUrl);

        $this->assertFalse($akun_siswa->fresh()->hasVerifiedEmail());
    }
}
