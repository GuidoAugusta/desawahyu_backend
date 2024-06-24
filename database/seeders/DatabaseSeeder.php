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
        User::factory(3)->create();
        // Sktm::factory(3)->create();

        User::factory()->create([
          'nama' => 'test',
          'email' => 'test@gmail.com',
        ]);

        Sktm::factory()->create([
          'nama' => 'Andi Mahardika Mulya',
          'nik' => '1234567890123456',
          'jenis_kelamin' => 'Laki-laki',
          'tempat' => 'Bandung',
          'tanggal_lahir' => '2000-01-01',
          'agama' => 'Islam',
          'pekerjaan' => 'Pelajar',
          'alamat' => 'Jl. Jalan',
          'email' => 'andi.mahardika.mulya@gmail.com',
          'ktp' => 'ktp.jpg',
          'status' => 'Diterima',
          'user_id' => 5,
        ]);

        Sktm::factory()->create([
          'nama' => 'john doe',
          'nik' => '2345678901234567',
          'jenis_kelamin' => 'Laki-laki',
          'tempat' => 'Bandung',
          'tanggal_lahir' => '2000-01-01',
          'agama' => 'Islam',
          'pekerjaan' => 'Pelajar',
          'alamat' => 'Jl. Jalan',
          'email' => 'andi.mahardika.mulya@gmail.com',
          'ktp' => 'ktp.jpg',
          'status' => 'Diterima',
          'user_id' => 1,
        ]);

        User::factory()->create([
          'nama' => 'Andi Mahardika Mulya',
          'email' => 'andi.mahardika.mulya@gmail.com',
          'password' => Hash::make('123'),
        ]);

        User::factory()->create([
          'nama' => 'admin',
          'password' => Hash::make('admin'),
          'is_admin' => true
        ]);
    }
}
