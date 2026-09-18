<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nim' => fake()->unique()->numerify('24/######/SV/#####'),
            'email' => fake()->unique()->safeEmail(),
            'study_program' => fake()->randomElement([
                'Rekayasa Perangkat Lunak',
                'Teknologi Rekayasa Instrumentasi dan Kontrol',
                'Teknologi Rekayasa Internet',
                'Sistem Informasi Geografis',
            ]),
            'is_active' => true,
        ];
    }
}
