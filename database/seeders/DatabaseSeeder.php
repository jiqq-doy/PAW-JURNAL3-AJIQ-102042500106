<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1: Akun awal Dosen
        User::updateOrCreate(
            ['email' => 'dosen@celoe.ac.id'],
            [
                'name' => 'Dr. Budi Santoso, M.T.',
                'password' => Hash::make('password123'),
                'role' => 'dosen',
                'nomor_induk' => '198501012010',
            ]
        );

        // Akun awal Mahasiswa
        User::updateOrCreate(
            ['email' => 'mahasiswa@student.celoe.ac.id'],
            [
                'name' => 'Abdurraziq Anwar',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
                'nomor_induk' => '102042500106',
            ]
        );
    }
}
