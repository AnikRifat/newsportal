<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$kWqJ/wyGHwzIcsmHYfgqG.wClUfgthY8lTqRtSNTGu9mEGDxQ14su', //password
            'type' => 0,

        ]);
    }
}
