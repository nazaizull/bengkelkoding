<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Naza',  
                'alamat' => 'Pemalang',
                'no_hp' => '082328736837',
                'role' => 'dokter',
                'email' => 'nazaizul@gmail.com',
                'password' => 'password' 
            ],
            [
                'nama' => 'Suyou',  
                'alamat' => 'Tegal',
                'no_hp' => '09013910391',
                'role' => 'dokter',
                'email' => 'ahmad@gmail.com',
                'password' => 'password' 
            ],
            [
                'nama' => 'Bagas',  // Changed to 'nama'
                'alamat' => 'Semarang',
                'no_hp' => '082329331',
                'role' => 'pasien',
                'email' => 'bagass@gmail.com',
                'password' => 'password' 
            ],
            [
                'nama' => 'Bruno',  // Changed to 'nama'
                'alamat' => 'Bantarbolang',
                'no_hp' => '0822292020',
                'role' => 'pasien',
                'email' => 'brunolukas@gmail.com',
                'password' => 'password' 
            ],
            [
                'nama' => 'Malik',  // Changed to 'nama'
                'alamat' => 'Petarukan',
                'no_hp' => '082389248204',
                'role' => 'pasien',
                'email' => 'malikahmad@gmail.com',
                'password' => 'password'
            ]
            ];
        foreach($data as $d){
            User::create([
                'nama' => $d['nama'],
                'email' => $d['email'],
                'password' => $d['password'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role']
            ]);
        }
    }
}
