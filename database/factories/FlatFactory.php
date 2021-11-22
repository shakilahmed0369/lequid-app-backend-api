<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlatFactory extends Factory
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
            'flat_bill' => '9000',
            'e_unit_cost' => '6',
            'gass_bill' => '900',
            'garbage_bill' => '100'
        ];
    }
}
