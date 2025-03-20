<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Replacement>
 */
class ReplacementFactory extends Factory
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
            'description' => $this->faker->text(200),
            'image_url' => $this->faker->imageUrl(640, 480, 'replacements'),
            'amount' => $this->faker->randomNumber(2),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'state' => $this->faker->randomElement(['available', 'out_of_stock']),
        ];
    }
}
