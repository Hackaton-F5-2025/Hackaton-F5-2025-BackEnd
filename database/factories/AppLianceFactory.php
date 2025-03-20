<?php

namespace Database\Factories;

use App\Models\Appliance;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppLiance>
 */
class AppLianceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->text(100),
            'model' => $this->faker->randomElement(['Smart TV', 'Refrigerator', 'Air Conditioner', 'Washing Machine', 'Phone']),
            'brand_id' => Brand::factory()->create()->id,
            
        ];
    }
}
