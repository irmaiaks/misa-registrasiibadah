<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisIbadahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_ibadah')->insert([
            'id' => 1,
            'jenis' => 'Umum',
        ]);

        DB::table('jenis_ibadah')->insert([
            'id' => 2,
            'jenis' => 'Jadwal',
        ]);
    }
}
