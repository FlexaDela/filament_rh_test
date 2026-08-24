<?php

namespace Database\Factories;

use App\Models\UnitySiac;
use App\Enums\Education;
use App\Enums\Gender;
use App\Enums\GenderIdentity;
use App\Enums\Uf;
use App\Models\Sector;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Worker>
 */
class WorkerFactory extends Factory
{
  protected $model = Worker::class;

    public function definition(): array
    {
        return [
            'unity_siac_id' => UnitySiac::factory(),
            'sector_id' => Sector::factory(),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(Gender::cases())->value,
            'birth_day' => fake()->date('Y-m-d', '-18 years'),
            'cpf' => fake()->unique()->numerify('###########'),
            'uf' => fake()->randomElement(Uf::cases())->value,
            'education' => fake()->randomElement(Education::cases())->value,
            'gender_identity' => fake()->boolean(50)
                ? fake()->randomElement(GenderIdentity::cases())->value
                : null,
            'social_name' => fake()->boolean(30) ? fake()->name() : null,
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
