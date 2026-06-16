<?php

namespace Database\Seeders;

use App\Models\UnitySiac;
use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitySiacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnitySiac::factory(10)
        ->has(Worker::factory()->count(5))
        ->create();
    }
}
