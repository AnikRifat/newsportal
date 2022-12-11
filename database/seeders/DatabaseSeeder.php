<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Website;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            CategorySeeder::class,
            NewsSeeder::class,
            UserSeeder::class,
            BreakingNewsSeeder::class,
            WebsiteSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
