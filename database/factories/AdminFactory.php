<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Enums\GuardEnums;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AdminFactory extends Factory
{
   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'username' => Str::slug($this->faker->name()) . '_' . strtoupper(Str::random(3)),           
            'email' => fake()->unique()->safeEmail(),
        ];
    }

    // ? create admin fun  
    public function admin()
    {
        return $this->state(function (array $attributes) {
            return [

                'role' => GuardEnums::ADMIN->value,
                'password' => Hash::make('admin'), //? Default password

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
        
        return $this->afterCreating(function (Admin $admin) {
            $img = ["images/users/user0.png","images/users/user1.png","images/users/user2.png","images/users/user3.png","images/users/user5.png"];
            $increment = random_int(0,3);
                $admin->media()->create([
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
    