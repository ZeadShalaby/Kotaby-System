<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FavouritesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $booksid = Books::pluck('id')->toArray();
        $userid  = User::pluck('id')->toArray();

        return [
            'book_id' => $this->faker->randomElement($booksid),          
            'user_id' => $this->faker->randomElement($userid),
        ];
    }
}
