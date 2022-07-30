<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Faktori Nama
            'teacher_name' => $this->faker->name(),

            // Faktori Status Guru
            'teacher_status' => $this->faker->randomElement(['Honorer', 'Tetap']),

            // Faktori Pendidikan Terakhir Guru
            'teacher_tertiary_education' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3']),

            // Faktori Nomor Telfon Guru
            'teacher_phone_number' => $this->faker->numerify('62###########'),

            // Faktori Email Guru
            'teacher_email' => $this->faker->unique()->safeEmail(),

            // Faktori Slug Guru
            'teacher_slug' => uniqid('gfg', true),

            // Faktori Foreign ID
            'teacher_classroom_id' => $this->faker->randomElement([1, 2]),
        ];
    }
}
