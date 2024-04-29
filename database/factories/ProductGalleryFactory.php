<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductGallery>
 */
class ProductGalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = $this->faker;
        $thumbnailUrl = $faker->imageUrl($width = 620, $height = 500);
        $filename = uniqid() . '.jpg'; 
        $thumbnailPath = 'uploads/products/gallery/' . $filename;
        $imageData = file_get_contents($thumbnailUrl); 
        file_put_contents(public_path($thumbnailPath), $imageData); 


        return [
            'photo' => $thumbnailPath,
        ];
    }
}
