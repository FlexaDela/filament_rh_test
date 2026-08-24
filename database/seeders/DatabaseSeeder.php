<?php

namespace Database\Seeders;

use App\Models\Addres;
use App\Models\Sector;
use App\Models\UnitySiac;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'gabigol',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123')
        ]);

        $sectors = Sector::factory()->count(5)->create();

        UnitySiac::factory(10)
        ->has(
            Worker::factory()
            ->count(7)
            ->recycle($sectors)
            ->has(Addres::factory())
        )
        ->create();

    }
}
