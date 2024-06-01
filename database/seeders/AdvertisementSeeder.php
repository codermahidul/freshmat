<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            'shortTitle' => 'Black Friday Offer',
            'offerText' => 'Organic Foods Up To 45% Off',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home-one-banner-one.jpg',
        ]);

        DB::table('banners')->insert([
            'shortTitle' => 'Daily Offer',
            'offerText' => 'Vegetables Up To 65% Off',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home-one-banner-two.jpg',
        ]);        
        
        DB::table('banners')->insert([
            'shortTitle' => 'Weekly Discounts on',
            'offerText' => 'Fruits and Vegetables',
            'description' => 'It is a long established fact that a reader acted by the readable content.',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home-one-special_pro_banner_img.jpg',
        ]);

        DB::table('banners')->insert([
            'shortTitle' => 'Daily Offer',
            'offerText' => 'Fresh Organic Food Up To 65% Off',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/product-details-banner.png',
        ]);


    }
}
