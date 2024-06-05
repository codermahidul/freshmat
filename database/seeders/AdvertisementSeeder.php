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


        DB::table('banners')->insert([
            'shortTitle' => 'Up to 20% all Products',
            'offerText' => 'Everyday Fresh & Clean With Our Products',
            'description' => 'Don’t miss avail the saving opportunity.',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home_two_special_pro_banner_img_2.jpg',
        ]);


        DB::table('banners')->insert([
            'shortTitle' => 'Up To 50% Off',
            'offerText' => 'Organic Food Collection',
            'description' => 'Don’t miss avail the saving opportunity',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home_two_regular_banner_one.jpg',
        ]);

        DB::table('banners')->insert([
            'shortTitle' => 'Organic Food',
            'offerText' => 'Best For Your Family',
            'description' => 'Limited Time Offer',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home_two_regular_banner_two.jpg',
        ]);

        DB::table('banners')->insert([
            'shortTitle' => 'Organic Food',
            'offerText' => 'Fresh Foods Up To 45% Off',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home_two_special_pro_banner_img_3.jpg',
        ]);

        DB::table('banners')->insert([
            'shortTitle' => 'Select Only Grocery Products',
            'offerText' => 'Get 30% Discount Of Your First Shopping',
            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text piece of classical Latin literature.',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home_two_main_banner.jpg',
        ]);        
        
        DB::table('banners')->insert([
            'offerText' => 'Fresh Fruits Healthy Juice',
            'description' => 'Get 50% Off on Selected Organic Items',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home_two_special_pro_banner_img_4.jpg',
        ]);

        DB::table('banners')->insert([
            'shortTitle' => 'Summer Offer',
            'offerText' => 'Healthy Organic Food',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home_three_banner_one.jpg',
        ]);

        DB::table('banners')->insert([
            'shortTitle' => 'Summer Offer',
            'offerText' => 'Fresh Organic Food',
            'link' => '#',
            'backgroundImg' => 'uploads/banners/home_three_banner_two.jpg',
        ]);



    }
}
