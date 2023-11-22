<?php

namespace Database\Factories;

use App\Enums\WorkType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => rtrim(fake()->sentence(6), '.'),
            'description' => fake()->paragraph(),
            'type' => fake()->randomElement(WorkType::getCasesValues()),
        ];
    }
}
