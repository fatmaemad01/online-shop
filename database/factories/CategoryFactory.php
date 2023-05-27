<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(3 ,true);
        return [
            // here i download "Laravel faker provider collection" package to use faker department & product
            'parent_id' => null,
            'name' => $this->faker->department,
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl(), 
        ];
    }
}
