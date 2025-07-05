<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pasiens = [
            [
                'nama' => 'Ahmad Ramadhan',
                'alamat' => 'Jl. Mawar No. 19',
                'no_ktp' => '1234567890123470',
                'no_hp' => '082234567810',
                'no_rm' => '2025-07-001',
                'email' => 'ahmad.ramadhan@gmail.com',
                'password' => Hash::make('ahmad123'),
                'role' => 'pasien',
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'alamat' => 'Jl. Melati No. 21',
                'no_ktp' => '1234567890123471',
                'no_hp' => '082234567811',
                'no_rm' => '2025-07-002',
                'email' => 'siti.nurhaliza@gmail.com',
                'password' => Hash::make('siti123'),
                'role' => 'pasien',
            ],
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Kenanga No. 32',
                'no_ktp' => '1234567890123472',
                'no_hp' => '082234567812',
                'no_rm' => '2025-07-003',
                'email' => 'budi.santoso@gmail.com',
                'password' => Hash::make('budi123'),
                'role' => 'pasien',
            ],
        ];


        foreach ($pasiens as $pasien) {
            $existingPasien = User::where('email', $pasien['email'])->first();

            if (!$existingPasien) {
                User::create($pasien);
                $this->command->info('Akun pasien ' . $pasien['nama'] . ' berhasil dibuat!');
            } else {
                $this->command->info('Akun pasien ' . $pasien['nama'] . ' sudah ada.');
            }
        }
    }
}