<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nim' => '25130' . fake()->unique()->numerify('#####'),
            'nama' => fake()->name(),
            'prodi' => fake()->randomElement(['Sistem Informasi', 'Teknik Informatika', 'Sains Data']),
            'email' => fake()->unique()->safeEmail(),
            'alamat' => fake()->city(),
        ];
    }
}