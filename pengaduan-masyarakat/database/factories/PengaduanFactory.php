<?php

// 

namespace Database\Factories;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PengaduanFactory extends Factory
{
    protected $model = Pengaduan::class;

    public function definition(): array
    {
        return [
            'nama_pelapor' => $this->faker->name(),
            'judul_pengaduan' => $this->faker->sentence(),
            'isi_pengaduan' => $this->faker->paragraph(),
            'kategori' => $this->faker->word(),
            'status' => $this->faker->randomElement(['terbuka', 'diproses', 'selesai']),
            'tanggal_pengaduan' => $this->faker->date(),
        ];
    }
}
