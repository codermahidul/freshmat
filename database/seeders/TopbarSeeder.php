<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('topbars')->insert([
            'phone' => '+1 (700) 230-0035',
            'email' => 'company@gmail.com',
            'location' => 'New York, United States',
        ]);
    }
}
