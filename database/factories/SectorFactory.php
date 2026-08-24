<?php

namespace Database\Factories;

use App\Models\Sector;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

#[UseModel(Sector::class)]
class SectorFactory extends Factory
{

    public function definition(): array
    {
        $name = [
            'Diretoria de suporte e resenha',
            'Diretoria de sistemas da resenha',
            'Colecionadores de labubu',
            'Geração 7 a 1',
            'Geração tiktok'
        ];

        return [
            'name' => fake()->randomElement($name)
        ];
    }
}
