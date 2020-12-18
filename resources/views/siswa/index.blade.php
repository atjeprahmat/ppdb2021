<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
      <div class="grid grid-cols-6 gap-6 bg-gray-50">
        <div class="col-span-6 hidden sm:col-span-2 sm:block  lg:col-span-3"></div>
        <div class="col-span-6 sm:col-span-4 lg:col-span-3">
          <div class="mt-5 md:mt-0 md:col-span-2 p-10">
            <form action="daftar" method="post">
              @csrf
              <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-6">
                      <div class="font-sans text-2xl font-semibold text-yellow-500">Profil Siswa</div>  
                    </div>      
                    <div class="col-span-6 sm:col-span-6">
                      <label for="nama" class="input_label">Nama Lengkap</label>
                      <input type="text" name="nama" id="nama" autocomplete="nama-lengkap" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                      <label for="jk" class="input_label">Jenis Kelamin</label>
                      <select id="jk" name="jk" autocomplete="jenis kelamin" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                      <label for="tempat_lahir" class="input_label">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" id="tempat_lahir" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                      <label for="tanggal_lahir" class="input_label">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                      <label for="agama" class="input_label">Agama</label>
                      <input type="text" name="agama" id="agama" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                      <label for="anak_ke" class="input_label">Anak Ke</label>
                      <input type="text" name="anak_ke" id="anak_ke" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="nisn" class="input_label">NISN</label>
                      <input type="text" name="nisn" id="nisn" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="nik" class="input_label">NIK</label>
                      <input type="text" name="nik" id="nik" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                      <label for="jalan" class="input_label">Jalan</label>
                      <textarea name="jalan" id="jalan" rows="3" class="input_textarea"></textarea>
                    </div>
                    <div class="col-span-6 hidden sm:block sm:col-span-2"></div>
                    <div class="col-span-2 sm:col-span-2">
                      <label for="rt" class="input_label">RT</label>
                      <input type="text" name="rt" id="rt" class="input_text">
                    </div>
                    <div class="col-span-2 sm:col-span-2">
                      <label for="rw" class="input_label">RW</label>
                      <input type="text" name="rw" id="rw" class="input_text">
                    </div>
                    <div class="col-span-2 sm:col-span-2">
                      <label for="no_rumah" class="input_label">No. Rumah</label>
                      <input type="text" name="no_rumah" id="no_rumah" class="input_text">
                    </div>
                    <div class="col-span-2 sm:col-span-2">
                      <label for="desa_kelurahan" class="input_label">Desa/Kelurahan</label>
                      <input type="text" name="desa_kelurahan" id="desa_kelurahan" class="input_text">
                    </div>
                    <div class="col-span-2 sm:col-span-2">
                      <label for="kecamatan" class="input_label">Kecamatan</label>
                      <input type="text" name="kecamatan" id="kecamatan" class="input_text">
                    </div>
                    <div class="col-span-2 sm:col-span-2">
                      <label for="kota_kabupaten" class="input_label">Kota/Kabupaten</label>
                      <input type="text" name="kota_kabupaten" id="kota_kabupaten" class="input_text">
                    </div>
                    <div class="col-span-2 sm:col-span-2">
                      <label for="kode_pos" class="input_label">Kode POS</label>
                      <input type="text" name="kode_pos" id="kode_pos" class="input_text">
                    </div>
                    <div class="col-span-6 hidden sm:block sm:col-span-4"></div>
                    <div class="col-span-6 sm:col-span-4">
                      <label for="asal_sekolah" class="input_label">Asal Sekolah</label>
                      <input type="text" name="asal_sekolah" id="asal_sekolah" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                      <label for="tahun_lulus" class="input_label">Tahun Lulus</label>
                      <input type="text" name="tahun_lulus" id="tahun_lulus" class="input_text">
                    </div>    
                    <div class="col-span-6 sm:col-span-4">
                      <label for="email" class="input_label">Alamat Email</label>
                      <input type="text" name="email" id="email" autocomplete="email" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                      <label for="no_hp" class="input_label">No. HP</label>
                      <input type="text" name="no_hp" id="no_hp" autocomplete="no_hp" class="input_text">
                    </div>
                  </div>
                </div>
                <div class="px-4 py-5 bg-white sm:p-6 bg-gray-50">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-6">
                      <div class="font-sans text-2xl font-semibold text-yellow-500">Profil Orangtua</div>  
                    </div>    
                    <div class="col-span-6 sm:col-span-6">
                      <label for="no_kk" class="input_label">No. Kartu Keluarga</label>
                      <input type="text" name="no_kk" id="no_kk" class="input_text">
                    </div>    
                    <div class="col-span-6 sm:col-span-4">
                      <label for="nik_ayah" class="input_label">NIK Ayah</label>
                      <input type="text" name="nik_ayah" id="nik_ayah" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                      <label for="no_hp_ayah" class="input_label">No HP Ayah</label>
                      <input type="text" name="no_hp_ayah" id="no_hp_ayah" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                      <label for="nama_ayah" class="input_label">Nama Ayah</label>
                      <input type="text" name="nama_ayah" id="nama_ayah" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                      <label for="pekerjaan_ayah" class="input_label">Pekerjaan Ayah</label>
                      <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                      <label for="nik_ibu" class="input_label">NIK Ibu</label>
                      <input type="text" name="nik_ibu" id="nik_ibu" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                      <label for="no_hp_ibu" class="input_label">No HP Ibu</label>
                      <input type="text" name="no_hp_ibu" id="no_hp_ibu" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                      <label for="nama_ibu" class="input_label">Nama Ibu</label>
                      <input type="text" name="nama_ibu" id="nama_ibu" class="input_text">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                      <label for="pekerjaan_ibu" class="input_label">Pekerjaan Ibu</label>
                      <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="input_text">
                    </div>
                  </div>
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-6">
                      <div class="font-sans text-2xl font-semibold text-yellow-500">Minat Bidang</div>  
                    </div>    
                    <div class="col-span-6 sm:col-span-6">
                      <label for="Pilihan_bidang" class="input_label">Pilihan Minat Bidang</label>
                      <select id="pilihan_bidang" name="pilihan_bidang" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="TIK">TIK</option>
                        <option value="Bismen">Bismen</option>
                      </select>
                    </div>    
                  </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Daftar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </body>
</html>