<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if ($this->command->confirm('Apakah Anda ingin me-refresh database migrasi? Ini akan menghapus semua data.')) {
            $this->command->call('migrate:refresh');
            $this->command->info('Database di-refresh. Semua data lama telah dihapus.');
        }

        if ($this->command->confirm('Mau isi data dummy mahasiswa?', true)) {
            $count = (int) $this->command->ask('Mau generate berapa data mahasiswa?', 10);
            $this->callWith(MahasiswaSeeder::class, ['count' => $count]);
            $this->command->info("Seeder Mahasiswa berhasil dijalankan. Total: $count data.");
        } else {
            $this->command->info("Seeder Mahasiswa dilewati");
        }

       // User::factory()->create([
         //   'name' => 'Test User',
           // 'email' => 'test@example.com',
      //  ]);

        
    }
}
