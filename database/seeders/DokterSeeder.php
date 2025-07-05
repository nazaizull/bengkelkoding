<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dokters = [
            [
                'nama' => 'Dr. Akira',
                'alamat' => 'Jl. Sakura No. 7',
                'no_hp' => '082234567800',
                'email' => 'akira.dokter@gmail.com',
                'id_poli' => 1, // Poli Umum
                'password' => Hash::make('akira123'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Dr. Hana',
                'alamat' => 'Jl. Melati No. 12',
                'no_hp' => '082234567801',
                'email' => 'hana.dokter@gmail.com',
                'id_poli' => 2, // Poli Kandungan
                'password' => Hash::make('hana123'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Dr. Kenji',
                'alamat' => 'Jl. Anggrek No. 34',
                'no_hp' => '082234567802',
                'email' => 'kenji.dokter@gmail.com',
                'id_poli' => 3, // Poli Anak
                'password' => Hash::make('kenji123'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Dr. Sora',
                'alamat' => 'Jl. Mawar No. 56',
                'no_hp' => '082234567803',
                'email' => 'sora.dokter@gmail.com',
                'id_poli' => 4, // Poli Saraf
                'password' => Hash::make('sora123'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Dr. Ryu',
                'alamat' => 'Jl. Teratai No. 78',
                'no_hp' => '082234567804',
                'email' => 'ryu.dokter@gmail.com',
                'id_poli' => 5, // Poli Jantung
                'password' => Hash::make('ryu123'),
                'role' => 'dokter',
            ],
        ];


        foreach ($dokters as $dokter) {
            $existingDokter = User::where('email', $dokter['email'])->first();

            if (!$existingDokter) {
                User::create($dokter);
                $this->command->info('Akun dokter ' . $dokter['nama'] . ' berhasil dibuat!');
            } else {
                $this->command->info('Akun dokter ' . $dokter['nama'] . ' sudah ada.');
            }
        }
    }
}