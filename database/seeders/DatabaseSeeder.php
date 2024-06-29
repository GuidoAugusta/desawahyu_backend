<?php

namespace Database\Seeders;

use App\Models\Sktm;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BeritaSeeder::class,
        ]);
  
        User::factory(3)->create();
        // Sktm::factory(3)->create();

        User::factory()->create([
          'nama' => 'test',
          'email' => 'test@gmail.com',
        ]);

        User::factory()->create([
          'nama' => 'Andi Mahardika Mulya',
          'email' => 'andi.mahardika.mulya@gmail.com',
          'password' => Hash::make('123'),
        ]);

    User::factory(10)->create();

    User::factory()->create([
      'nama' => 'admin',
      'password' => Hash::make('admin'),
      'is_admin' => true
    ]);
  }
}
