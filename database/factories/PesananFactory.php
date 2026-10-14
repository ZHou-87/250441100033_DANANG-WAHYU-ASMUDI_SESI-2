<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => Kategori::inRandomOrder()->first()->id ?? Kategori::factory(),
            'menu_id' => fake()->number(),
            'nama_pelanggan' => fake()->name(),
            'nomor_meja' => fake()->number(),
            'jumlah' => fake()->randomNumber(),
            'total_harga' => fake()->randomNumber(),
            'status' => fake()->name(),
        ];
    }
}