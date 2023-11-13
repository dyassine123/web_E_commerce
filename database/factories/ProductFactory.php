<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    $cproduct_name = $this->faker->unique()->words($nb=2, $asText=true);
    $slug = Str::slug($cproduct_name);
    return [
        'name' => $cproduct_name,
        'slug' => $slug,
        'short_description' => $this->faker->unique()->text(200),
        'description' => $this->faker->unique()->text(500),
        'regular_price' => $this->faker->unique()->numberBetween(10, 500),
        'SKU' => 'DIGI' . $this->faker->unique()->numberBetween(100, 500),
        'stock_status' => 'instock',
        'quantity' => $this->faker->numberBetween(100, 200),
        'image' => 'digital_' . $this->faker->unique()->numberBetween(1, 22) . '.jpg',
        'category_id' => $this->faker->numberBetween(1, 5)
    ];
}

}
