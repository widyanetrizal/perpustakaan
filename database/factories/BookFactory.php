<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Book; // Ganti Movie dengan Book

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->regexify('bk[0-9]{7}'), // Sesuaikan format id dengan kebutuhan Anda
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'category_id' => $this->faker->randomElement([1, 2, 3]),
            'tahun' => $this->faker->year,
            'pengarang' => $this->faker->sentence,
            'penerbit' => $this->faker->sentence,
            'halaman' => $this->faker->number,
            'foto_sampul' => 'default.jpg',
        ];
    }
}