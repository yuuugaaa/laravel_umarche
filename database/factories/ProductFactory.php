<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'information' => $this->faker->realText,
            'price' => $this->faker->numberBetween(100, 10000),
            'is_selling' => $this->faker->numberBetween(0, 1),
            'shop_id' => $this->faker->numberBetween(1, 3),
            'secondary_category_id' => $this->faker->numberBetween(1, 11),
            'sort_order' => $this->faker->randomNumber,
            'image1' => $this->faker->numberBetween(1, 6),
            'image2' => $this->faker->numberBetween(1, 6),
            'image3' => $this->faker->numberBetween(1, 6),
            'image4' => $this->faker->numberBetween(1, 6),
        ];
    }
}
