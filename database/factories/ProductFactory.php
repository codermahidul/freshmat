<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryId = ProductCategory::inRandomOrder()->first()->id;
        $faker = $this->faker;
        $thumbnailUrl = $faker->imageUrl($width = 620, $height = 500);
        $filename = uniqid() . '.jpg'; 
        $thumbnailPath = 'uploads/products/feature/' . $filename;
        $imageData = file_get_contents($thumbnailUrl); 
        file_put_contents(public_path($thumbnailPath), $imageData); 

        return [
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'slug' => strtolower(str_replace(' ', '-', $faker->sentence($nbWords = 6, $variableNbWords = true))),
            'shortDescription' => $faker->sentence($nbWords = 15, $variableNbWords = true),
            'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'selePrice'  => $faker->randomFloat(2, 5, 100),
            'unitType' => $faker->randomElement(['kg','gram','pics','dozen','liter']),
            'categoryId' => $categoryId,
            'thumbnail' => $thumbnailPath,
            'sku' => $faker->unique()->ean13(),
        ];
    }
}




