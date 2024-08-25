<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReviewsFactory extends Factory
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
            //
            'comment' => $this->faker->text(),
            'book_id' => $this->faker->randomElement($booksid),          
            'user_id' => $this->faker->randomElement($userid),
            'star'    => $this->faker->boolean() ? $this->faker->numberBetween(1, 5) : null,
        ];
    }
}
