<?php

namespace Database\Factories;

use App\Models\Departments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DepartmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'code' => $this->faker->unique()->regexify('[A-Z]{3}'),
        ];
    }


    /**
     * Configure the factory with relationships.
     *
     * @return $this
     */
    public function configure()
    {
        
        return $this->afterCreating(function (Departments $department) {
            $img = ["images/departments/kk.png","images/departments/sunset.png","images/departments/byden.png","images/departments/tweet.png","images/departments/tweet.png"];
            $increment = random_int(0,4);
                $department->media()->create([
                    'media' => $img[$increment],
                ]);
        });
    }
}
