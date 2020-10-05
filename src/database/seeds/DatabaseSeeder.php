<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilTableSeeder::class);
        $this->call(JenisIbadahTableSeeder::class);
        $this->call(JadwalIbadahTableSeeder::class);
        $this->call(KuotaTableSeeder::class);
    }
}
