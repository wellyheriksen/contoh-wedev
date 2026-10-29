<?php

namespace Database\Factories;

use App\Models\MahasiswaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MahasiswaModel>
 */
class MahasiswaModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Nama Kolom Tabel
            "Nama Mahasiswa" => fake()->name(),
            "Kelas" => fake()->sentence(),
            "NIM" => fake()->sentence(),
        ];
    }
}
