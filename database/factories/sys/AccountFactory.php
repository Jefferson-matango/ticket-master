<?php

namespace Database\Factories\Sys;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'logo' => fake()->sentence(),
            'delete' => 0,
            '_created_by' => User::inRandomOrder()->first()->id,
        ];
    }
}
