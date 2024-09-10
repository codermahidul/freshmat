<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('deals')->insert([
            'shortTitle' => 'Sales on Weekly Offers',
            'offerText' => 'Our special products deal of the day',
            'description' => 'There are many variations of passages of Lorem Ipsum available butmajority have suffered alteration in some form.',
            'link' => '#',
            'date' => \Carbon\Carbon::now()->subDays(365)->format('Y-m-d'),
            'backgroundImg' => 'uploads/deals/home_one_deals_bg.jpg',
        ]);
        
        DB::table('deals')->insert([
            'shortTitle' => 'Monthly Offers',
            'offerText' => 'Our Specials Products deal of the day',
            'description' => 'There are many variations of passages of Lorem Ipsum butmajority have suffered.',
            'link' => '#',
            'date' => \Carbon\Carbon::now()->subDays(365)->format('Y-m-d'),
            'backgroundImg' => 'uploads/deals/home_two_deals_bg.jpg',
        ]);    

        DB::table('deals')->insert([
            'offerText' => 'Deals Of The Weeks',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod incididunt ut labore et dolore magna aliqua quis ipsum',
            'link' => '#',
            'date' => \Carbon\Carbon::now()->subDays(365)->format('Y-m-d'),
            'backgroundImg' => 'uploads/deals/home_three_deals_bg.jpg',
        ]);
    }
}
