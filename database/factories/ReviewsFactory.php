<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Books;
use App\Models\Reviews;
use App\Traits\MethodTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReviewsFactory extends Factory
{
    use MethodTrait;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $booksid = Books::pluck('id')->toArray();
        $userid = User::pluck('id')->toArray();

        return [
            //
            'comment' => $this->faker->text(),
            'book_id' => $this->faker->randomElement($booksid),
            'user_id' => $this->faker->randomElement($userid),
            'star' => $this->faker->boolean() ? $this->faker->numberBetween(1, 5) : null,
        ];
    }


    /**
     * Configure the factory with relationships.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (Reviews $review) {

            // if (random_int(0, 1) === 1) { // 50% chance
            if (random_int(1, 10) <= 3) { // 30% chance
                $this->AddReport($review, "This is a random report message.");
            }
        });
    }
}

