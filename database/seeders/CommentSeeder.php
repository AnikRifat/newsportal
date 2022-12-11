<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'id' => '1',
            'key' => Str::random(10),
            'news_key' => '3SGVrmli8h',
            'name' => ' anik',
            'comment' => 'who is rifat?',


        ]);
    }
}
