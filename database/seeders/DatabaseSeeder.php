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
    
        // Product::factory(50)->has(
        //     ProductGallery::factory(5)
        // ,'productgallery')->create();
        
    $this->call([
         UserSeeder::class,
         BlogCategorySeeder::class,
    ]);
    }
}
