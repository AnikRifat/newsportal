<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(5)->create();

        // DB::table('categories')->insert([
        //     'id' => '1',
        //     'name' => 'রাজনিতী',
        //     'status' => '1',
        //     'key' => Str::random(10),

        // ]);
    }
}
