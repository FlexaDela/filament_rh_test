<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\UnitySiac;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */

#[UseModel(UnitySiac::class)]
class UnitySiacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'neighborhood' => fake()->unique()->citySuffix(),
            'street' => fake()->streetAddress(),
            'cep' => fake()->postcode()
        ];
    }
}
