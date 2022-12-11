<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'id' => '1',
            'key' => '3SGVrmli8h',
            'news_id' => '#mp-20221203213719',
            'category_id' => '1',
            'category_name' => 'রাজনিতী',
            'author' => 'Admin',
            'title' => 'ঢাকা বিশ্ববিদ্যালয় ক্যাম্পাসে গাড়ির নিচে চাপা পড়ে মারা যাওয়া রুবিনা আক্তারের মরদেহ শনিবার তেজগাঁওয়ের বাসায় নেওয়ার পর তাঁর একমাত্র ছেলে আরাফাত রহমানকে জড়িয়ে ধরে কান্নায় ভেঙে পড়েন রুবিনার ভাই জাকির হোসেন',
            'content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
            'image' => 'http://localhost/news/uploads/images/news/demo.png',
            'status' => '1',
            'datetime' => '০৩ ডিসেম্বর, ২০২২',

        ]);
    }
}
