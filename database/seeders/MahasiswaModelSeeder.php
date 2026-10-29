<?php

namespace Database\Seeders;

use FactoryCall;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MahasiswaModel;

class MahasiswaModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // MahasiswaModel::create([
            //     "Nama Mahasiswa" => "Welly Heriksen",
            //     "Kelas" => "Workshop",
            //     "NIM" => "1969439235"
            // ]);

            // MahasiswaModel::create([
            //     "Nama Mahasiswa" => "Welly Heriksen",
            //     "Kelas" => "Workshop",
            //     "NIM" => "1969439235"
            // ]);
            //Dummy Data
            MahasiswaModel::factory()->count(20)->create();
    }
}
