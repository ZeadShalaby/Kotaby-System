<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $booksid = Books::pluck('id')->toArray();

        return [
            //
            'book_id' => $this->faker->randomElement($booksid),          
            'address1' => $this->faker->streetAddress,
            'address2' => $this->faker->optional()->secondaryAddress,
            'postcode' => $this->faker->postcode,
            'city'     => $this->faker->city,
            'country'  => $this->faker->country,
            'state'    => $this->faker->state,
        ];
    }
}
