<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterTopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('footer_tops')->insert([
            'icon' => 'uploads/assets/footer_info_icon_1.png',
            'heading' => 'Free Shipping',
            'subheading' => 'Worldwide',
        ]);        
        
        DB::table('footer_tops')->insert([
            'icon' => 'uploads/assets/footer_info_icon_2.png',
            'heading' => 'Helpline',
            'subheading' => '+1256 25632 565',
        ]);        
        
        DB::table('footer_tops')->insert([
            'icon' => 'uploads/assets/footer_info_icon_3.png',
            'heading' => '24/7 Support',
            'subheading' => 'Free For Customers',
        ]);        
        
        DB::table('footer_tops')->insert([
            'icon' => 'uploads/assets/footer_info_icon_4.png',
            'heading' => 'Returns',
            'subheading' => '30 Days Free Exchanges',
        ]);
    }
}
