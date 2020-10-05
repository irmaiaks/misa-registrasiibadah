<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KuotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuota')->insert([
            'id' => 1,
            'jadwal_ibadah_id' => 1,
            'kuota' => 100
        ]);

        DB::table('kuota')->insert([
            'id' => 2,
            'jadwal_ibadah_id' => 2,
            'kuota' => 100
        ]);

        DB::table('kuota')->insert([
            'id' => 3,
            'jadwal_ibadah_id' => 3,
            'kuota' => 100
        ]);

        DB::table('kuota')->insert([
            'id' => 4,
            'jadwal_ibadah_id' => 4,
            'kuota' => 50
        ]);

        DB::table('kuota')->insert([
            'id' => 5,
            'jadwal_ibadah_id' => 5,
            'kuota' => 50
        ]);

        DB::table('kuota')->insert([
            'id' => 6,
            'jadwal_ibadah_id' => 6,
            'kuota' => 50
        ]);
    }
}
