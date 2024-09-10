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

        //Home Two

        DB::table('section_titles')->insert([
            'subheading' => 'Checkout New Products',
            'heading' => 'Today’s new hotest products available now'
        ]);
        
        DB::table('section_titles')->insert([
            'subheading' => 'Best Sells Products',
            'heading' => 'Organic Bestseller Product'
        ]);
        
        DB::table('section_titles')->insert([
            'subheading' => 'Special Products',
            'heading' => 'Our Special Brand Products'
        ]);        
        
        DB::table('section_titles')->insert([
            'subheading' => 'Our Testimonials',
            'heading' => 'What Our Customer Talking About Us',
            'description' => 'Lorem ipsum dolor sit amet, elit sed, ading do eiusmod tempor incididunt labore et dolore elit, sed do eiusmod.',
        ]);   

        DB::table('section_titles')->insert([
            'subheading' => 'Our Blog Posts',
            'heading' => 'Latest News & Articles',
        ]);

        DB::table('section_titles')->insert([
            'subheading' => 'Our Partners',
            'heading' => 'Our Organic Farm Partners',
        ]);

       // Home Three

        DB::table('section_titles')->insert([
            'heading' => 'What Do You Looking For',
        ]);

        DB::table('section_titles')->insert([
            'heading' => 'Our Sweeet Client Say',
        ]);

        DB::table('section_titles')->insert([
            'heading' => 'Latest News & Articles',
        ]);

        DB::table('section_titles')->insert([
            'heading' => 'Our Freshmat Farm Partners',
        ]);        
        
        DB::table('section_titles')->insert([
            'heading' => 'Our Popular Products',
        ]);

    }
}
