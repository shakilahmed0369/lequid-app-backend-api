<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'sub_name' => $this->faker->word(),
            'shop_bill' => '1200',
            'e_unit_cost' => '12',
        ];
    }
}
