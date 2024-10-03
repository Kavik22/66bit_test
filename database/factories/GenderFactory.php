<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Gender;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gender>
 */
class GenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Gender::class;
    public function definition(): array
    {
        return [
            //
        ];
    }
}
