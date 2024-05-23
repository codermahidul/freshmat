<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact_pages')->insert([
            'b1icon' => 'default/contact/contact_icon_1.png',
            'b2icon' => 'default/contact/contact_icon_2.png',
            'b3icon' => 'default/contact/contact_icon_3.png',
            'b4icon' => 'default/contact/contact_icon_4.png',
            'b1title' => 'Address',
            'b2title' => 'Phone Number',
            'b3title' => 'Email Address',
            'b4title' => 'Website Address',
            'b1text' => '16/A, Romadan House City Tower New York, United States',
            'b2textOne' => '+880 1234 567895',
            'b2textTwo' => '+880 9876 543217',
            'b3textOne' => 'example@gmail.com',
            'b3textTwo' => 'jhondeo@gmail.com',
            'b4textOne' => 'exampleFreshmat.com',
            'b4textTwo' => 'exampleFreshmat.com',
            'b4textUrlOne' => 'https:www.example.com',
            'b4textUrlTwo' => 'https:www.example.com',
            'image' => 'default/contact/contact_img.jpg',
            'googleMap' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1824.8667200308832!2d90.42592680669435!3d23.828076048215905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c646adb2897f%3A0x4b007974289814ab!2sInternational%20Convention%20City%20Bashundhara%2C%20Joar%20Sahara%2C%20Khilkhet%20(Beside%20300ft%20Purbachal%20Link%20Road)%2C%20Purbachal%20Expy%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1697389294376!5m2!1sen!2sbd',
        ]);
    }
}
