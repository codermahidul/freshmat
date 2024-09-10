<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeOneVideoGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_video_galleries')->insert([
            'shortTitle' => 'New Tech Farming',
            'offerText' => 'Watch Our Farming And Cultivations',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which slightly believable.',
            'link' => '#',
            'thumbnail1' => 'default/thumbnails/thumbnail-one.jpg',
            'video1' => 'https://youtu.be/nqye02H_H6I',
            'thumbnail2' => 'default/thumbnails/thumbnail-two.png',
            'video2' => 'https://youtu.be/nqye02H_H6I',
            'thumbnail3' => 'default/thumbnails/thumbnail-three.jpg',
            'video3' => 'https://youtu.be/nqye02H_H6I',
            'thumbnail4' => 'default/thumbnails/thumbnail-four.jpg',
            'video4' => 'https://youtu.be/nqye02H_H6I',
        ]);
    }
}
