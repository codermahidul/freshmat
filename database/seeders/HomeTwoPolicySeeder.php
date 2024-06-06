<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTwoPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('policies')->insert([
            'icon' => 'uploads/assets/policy/policy-icon-1.jpg',
            'heading' => 'Return Policy',
            'subheading' => 'Money back guarantee',
        ]);        
        
        DB::table('policies')->insert([
            'icon' => 'uploads/assets/policy/policy-icon-2.jpg',
            'heading' => 'Free shipping',
            'subheading' => 'On all orders over $60.00',
        ]);

        DB::table('policies')->insert([
            'icon' => 'uploads/assets/policy/policy-icon-3.jpg',
            'heading' => 'Store locator',
            'subheading' => 'Find your nearest store',
        ]);
    }
}
