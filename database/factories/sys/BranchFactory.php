<?php

namespace Database\Factories\Sys;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{

    public function definition(): array
    {
        return [
            '_account' => 30,
            'name' => fake()->company(),
            'city' => fake()->sentence(),
            'direction' => fake()->sentence(),
            'contact_people' => fake()->name(),
            'phone' => fake()->numerify('##########'),
            'email' => fake()->unique()->safeEmail(),
            'logo' => fake()->sentence(),
            'api_local' => fake()->sentence(),
            'api_server' => fake()->sentence(),
            'api_certificades' => fake()->sentence(),
            'api_complaints_suggestions' => fake()->sentence(),
            'delete' => 0,
            '_created_by' => User::inRandomOrder()->first()->id,
        ];
    }
}
