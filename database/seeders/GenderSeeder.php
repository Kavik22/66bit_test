<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gender::create(['title' => 'Мужской']);
        Gender::create(['title' => 'Женский']);
        Gender::create(['title' => 'Другой']);
    }
}
