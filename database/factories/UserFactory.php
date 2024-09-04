<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use App\Enums\GuardEnums;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'about' => $this->faker->text(),
            'name' => $this->faker->name(),              //  'name' => substr($this->faker->name(), 0, 50), // Limit name to 30 characters
            'username' => Str::slug($this->faker->name()) . '_' . strtoupper(Str::random(3)),           
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => Carbon::now(),
        ];
    }

    
    // ? create author fun
    public function author()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => GuardEnums::AUTHOR,
                'password' => bcrypt('author'), //? Default password

            ];
        });
    }

    //? create user fun
    public function user()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => GuardEnums::USER,
                'password' => bcrypt('user'), //? Default password

            ];
        });
    }

    
    /**
     * Configure the factory with relationships.
     *
     * @return $this
     */
    public function configure()
    {
        
        return $this->afterCreating(function (User $user) {
            $img = ["images/users/users.png","images/users/user1.png","images/users/user2.png","images/users/user3.png","images/users/user5.png"];
            $increment = random_int(0,3);
                $user->media()->create([
                    'media' => $img[$increment],
                ]);
        });
    }
   


    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
