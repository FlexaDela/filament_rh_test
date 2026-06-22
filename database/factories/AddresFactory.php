<?php

namespace Database\Factories;

use App\Models\Addres;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;


#[UseModel(Addres::class)]
class AddresFactory extends Factory
{

    public function definition(): array
    {
        $house = [
            'Casa',
            'Apartamento',
            'Condominio'
        ];

        return [
            'street' => fake()->streetAddress(),
            'neighborhood' => fake()->citySuffix(),
            'cep' => fake()->postcode(),
            'type_of_residence' => fake()->randomElement($house),
            'house_number' => fake()->buildingNumber()
        ];
    }
}
