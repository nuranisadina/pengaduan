<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengaduan;

// class PengaduanSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run()
//     {
//         \App\Models\Pengaduan::factory(20)->create();
//     }
// }

class PengaduanSeeder extends Seeder
{
    public function run(): void
    {
        Pengaduan::factory()->count(20)->create();
    }
}
