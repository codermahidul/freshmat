<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'logo' => 'default/logo.png',
            'footerLogo' => 'default/footer-logo.png',
            'favicon' => 'default/favicon.png',
            'topbar' => 'show',
        ]);
    }
}
