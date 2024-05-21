<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('section_titles')->insert([
            'subheading' => 'Our Products',
            'heading' => 'Our Fresh Products'
        ]);

        DB::table('section_titles')->insert([
            'subheading' => 'Our Partners',
            'heading' => 'Our Organic Farm Partners'
        ]);

        DB::table('section_titles')->insert([
            'subheading' => 'Special Products',
            'heading' => 'Our Special Products'
        ]);        
        
        DB::table('section_titles')->insert([
            'subheading' => 'Testimonials',
            'heading' => 'What Our Customer Say'
        ]);  

        DB::table('section_titles')->insert([
            'subheading' => 'Our Blog Posts',
            'heading' => 'Latest News & Articles'
        ]);        
        
        DB::table('section_titles')->insert([
            'subheading' => 'Our Features',
            'heading' => 'Why Choose Us'
        ]);

                
        DB::table('section_titles')->insert([
            'subheading' => 'How We Works',
            'heading' => 'Our Working Process'
        ]);
    }
}
