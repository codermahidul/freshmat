<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class H3VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('h3_videos')->insert([
            'heading' => '50% Off In This Week',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.',
            'link' => '#',
            'backgroundImg' => 'uploads/assets/home_three_video_bg.jpg',
            'video' => 'https://youtu.be/nqye02H_H6I',
        ]);
    }
}
