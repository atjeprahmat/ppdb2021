<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('no_seleksi',4);
            $table->string('nama',100);
            $table->string('jk',10);
            $table->integer('nisn');
            $table->integer('nik');
            $table->string('tempat_lahir',50);
            $table->date('tanggal_lahir');
            $table->string('agama',20);
            $table->integer('anak_ke');
            $table->text('jalan');
            $table->text('rt',3);
            $table->text('rw',3);
            $table->integer('no_rumah');
            $table->string('desa_kelurahan',50);
            $table->string('kota_kabupaten',50);
            $table->string('kode_pos',5);
            $table->string('asal_sekolah',40);
            $table->integer('tahun_lulus');
            $table->string('no_hp',15);
            $table->string('email',50);
            $table->string('pilihan_bidang',20);
            $table->integer('no_kk');
            $table->integer('nik_ayah');
            $table->string('nama_ayah',50);
            $table->string('pekerjaan_ayah',30);
            $table->string('no_hp_ayah',15);
            $table->integer('nik_ibu');
            $table->string('nama_ibu',50);
            $table->string('pekerjaan_ibu',30);
            $table->string('no_hp_ibu',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
