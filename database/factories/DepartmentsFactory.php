<?php

namespace Database\Factories;

use App\Models\Departments;
use App\Traits\MethodTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DepartmentsFactory extends Factory
{
    use MethodTrait;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => substr($this->faker->name(), 0, 50), // Limit name to 30 characters
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
            $img = ["images/departments/dep0.png", "images/departments/dep1.png", "images/departments/dep4.png", "images/departments/dep8.png", "images/departments/dep9.png"];
            $increment = random_int(0, 4);
            $department->media()->create([
                'media' => $img[$increment],
            ]);

        });
    }
}
