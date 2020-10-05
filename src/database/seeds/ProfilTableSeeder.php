<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profil')->insert([
            'id' => 1,
            'user_id' => 1,
            'nik' => '1234567890',
            'nama_lengkap' => 'Administrator',
            'tempat_lahir' => 'Jakarta/16 September 2020',
            'tanggal_lahir' => '16 September 2020',
            'alamat' => 'Jakarta',
            'jenis_kelamin' => 'Laki-laki',
            'rtrw' => '04/07',
            'kelurahan' => 'Pasir Gunung',
            'kecamatan' => 'Citayem',
            'no_hp' => '081387807580'
        ]);
    }
}
