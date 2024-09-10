<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('apps')->insert([
            'image' => 'uploads/assets/app_image.png',
            'image2' => 'uploads/assets/app_image2.png',
            'shortTitle' => 'Download This App',
            'offerText' => 'Simple Way to Order Your Food Faster',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point.',
            'appleLink' => 'https://www.apple.com/store',
            'playLink' => 'https://play.google.com/',
        ]);
    }
}
