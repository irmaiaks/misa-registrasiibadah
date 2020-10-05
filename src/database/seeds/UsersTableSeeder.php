<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => '$2y$10$.SZW69ODzRVo0LzqBdemrukIDYYci2f8V8Z1XY/w70ncn3f2EIZTS',
            'role_id' => 1
        ]);
    }
}
