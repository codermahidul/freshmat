<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_us')->insert([
            'title' => 'Welcome To Organic Agriculture Grocery Shop',
            'shortTitle' => 'About Us',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or mori words which slightly believable.',
            'image' => 'default/aboutUs/about_img.jpg',
            'quote' => '“There are many variations its of passages of Lorem Ipsum nsi available, but the majority they suffered” Robart Day',
            'listItemOne' => 'Organic products who are so',
            'listItemTwo' => 'Healthy food everyday',
            'listItemThree' => 'Local growth of fresh food',
            'listItemFour' => 'Demoralized charms of pleasure',
            'f1icon' => 'default/aboutUs/why_choose_icon_1.png',
            'f1title' => 'All Kind Brand',
            'f1description' => 'There are many variations of passages of any Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or mori words....',
            'f2icon' => 'default/aboutUs/why_choose_icon_2.png',
            'f2title' => 'Pesticide Free Goods',
            'f2description' => 'There are many variations of passages of any Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or mori words....',
            'f3icon' => 'default/aboutUs/why_choose_icon_3.png',
            'f3title' => 'Curated Products',
            'f3description' => 'There are many variations of passages of any Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or mori words....',
            'w1title' => 'Choose The Item',
            'w1description' => 'There are many variations of Lorem Ipsum available but the ma have suffered.',
            'w2title' => 'Add to Cart',
            'w2description' => 'There are many variations of Lorem Ipsum available but the ma have suffered.',
            'w3title' => 'Payment Your Bill',
            'w3description' => 'There are many variations of Lorem Ipsum available but the ma have suffered.',
            'w4title' => 'Received Your Item',
            'w4description' => 'There are many variations of Lorem Ipsum available but the ma have suffered.',
            'c1icon' => 'default/aboutUs/counter_icon_1.png',
            'c1number' => '950',
            'c1text' => 'Happy customers',
            'c2icon' => 'default/aboutUs/counter_icon_2.png',
            'c2number' => '350',
            'c2text' => 'Expert farmers',
            'c3icon' => 'default/aboutUs/counter_icon_3.png',
            'c3number' => '35',
            'c3text' => 'Award Wining',
            'c4icon' => 'default/aboutUs/counter_icon_4.png',
            'c4number' => '4.9',
            'c4text' => 'Avarage Rating',
        ]);
    }
}
