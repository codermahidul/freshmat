<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('footers')->insert([
            'shortInfo' => 'Lorem ipsum dolor sit amet, cons ectetur adipiscing elit sed.',
            'email' => 'support@mail.com',
            'copyrightText' => 'Copyright © {year} {mySite}. All rights reserved.',
            'paymentGetwayImage' => 'uploads/assets/payment_getway_image.jpg',
        ]);
    }
}
