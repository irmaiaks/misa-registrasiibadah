<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalIbadahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal_ibadah')->insert([
            'id' => 1,
            'jenis_id' => 1,
            'jadwal' => 'Ibadah Subuh',
            'mulai' => '04:00:00',
            'selesai' => '06:00:00',
            'kuota' => 100
        ]);

        DB::table('jadwal_ibadah')->insert([
            'id' => 2,
            'jenis_id' => 1,
            'jadwal' => 'Ibadah Pagi',
            'mulai' => '08:00:00',
            'selesai' => '10:00:00',
            'kuota' => 100
        ]);

        DB::table('jadwal_ibadah')->insert([
            'id' => 3,
            'jenis_id' => 1,
            'jadwal' => 'Ibadah Sore',
            'mulai' => '17:00:00',
            'selesai' => '19:00:00',
            'kuota' => 100
        ]);

        DB::table('jadwal_ibadah')->insert([
            'id' => 4,
            'jenis_id' => 2,
            'jadwal' => 'Ibadah SP/B',
            'hari' => 'Selasa',
            'mulai' => '18:00:00',
            'selesai' => '19:00:00',
            'kuota' => 50
        ]);

        DB::table('jadwal_ibadah')->insert([
            'id' => 5,
            'jenis_id' => 2,
            'jadwal' => 'Ibadah SPPer',
            'hari' => 'Rabu',
            'mulai' => '18:00:00',
            'selesai' => '19:00:00',
            'kuota' => 50
        ]);

        DB::table('jadwal_ibadah')->insert([
            'id' => 6,
            'jenis_id' => 2,
            'jadwal' => 'Ibadah SPP/R',
            'hari' => 'Kamis',
            'mulai' => '17:00:00',
            'selesai' => '19:00:00',
            'kuota' => 50
        ]);
    }
}
