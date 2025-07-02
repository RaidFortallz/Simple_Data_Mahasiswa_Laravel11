<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $count = $params['count'] ?? 5;
        
        for ($i = 0; $i < $count; $i++) {
            DB::table('mahasiswa')->insert([
                'nama_depan' => $faker->firstName,
                'nama_belakang' => $faker->lastName,
                'nim' => $faker->unique()->numerify('###########'),
                'jurusan' => $faker->randomElement(['Teknik Informatika', 'Teknik Industri', 'Desain Komunikasi Visual']),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha']),
                'alamat' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
