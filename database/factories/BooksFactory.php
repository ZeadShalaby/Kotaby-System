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
            'title'       => $this->faker->company,
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
            $img = ["images/books/img/book1.png","images/books/img/book2.png","images/books/img/book3.png","images/books/img/book4.png","images/books/img/book5.png","images/books/img/book8.png"];
            $pdf = ["images/books/pdf/pdf.pdf","images/books/pdf/pdf1.pdf","images/books/pdf/pdf2.pdf","images/books/pdf/pdf3.pdf","images/books/pdf/pdf4.pdf","images/books/pdf/pdf5.pdf"];

            $increment = random_int(0,4);
                $book->media()->create([
                    'media' => $img[$increment],
                    'pdf'   => $pdf[$increment],
                ]);
        });
    }
}
