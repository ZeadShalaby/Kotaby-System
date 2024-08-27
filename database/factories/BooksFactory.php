<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Books;
use App\Models\Departments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id')->toArray();
        $departmentIds = Departments::pluck('id')->toArray();

        return [
            //
            'name' => $this->faker->company,
            'description' => $this->faker->text(),
            'user_id'     => $this->faker->randomElement($userIds),
            'dep_id'      => $this->faker->randomElement($departmentIds),
            'view'        => $this->faker->boolean() ? $this->faker->numberBetween(1, 10) : null,
            'star'        => $this->faker->boolean() ? $this->faker->numberBetween(1, 5) : null,
            'num_pages'   => $this->faker->numberBetween(100, 10000),
            'language'    => $this->faker->languageCode, //? Generates a language code
        ];
    }


    /**
     * Configure the factory with relationships.
     *
     * @return $this
     */
    public function configure()
    {
        
        return $this->afterCreating(function (Books $book) {
            $img = ["images/books/book1.png","images/books/book2.png","images/books/book3.png","images/books/book4.png","images/books/book5.png","images/books/book8.png"];
            $increment = random_int(0,4);
                $book->media()->create([
                    'media' => $img[$increment],
                ]);
        });
    }
}
