<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\ProductGallery;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
    $this->call([
         //UserSeeder::class,
         //BlogCategorySeeder::class,
    ]);

    Product::factory(10)->has(
         ProductGallery::factory(3)
     ,'productgallery')->create();

    }
}
