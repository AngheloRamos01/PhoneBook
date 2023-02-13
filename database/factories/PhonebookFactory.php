<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phonebook>
 */
class PhonebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lastName' =>fake()->lastName(),
            'firstName'=>fake()->firstName(),
            'email'=>fake()->safeemail(),
            'address'=>fake()->address(),
            'contactNumber'=>fake()->phoneNumber(),
        ];
    }
}
