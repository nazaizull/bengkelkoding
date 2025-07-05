<?php

namespace Database\Seeders;

use App\Models\Poli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $polis = [
            [
                'nama_poli' => 'Poli Umum',
                'keterangan' => 'Pelayanan umum untuk semua pasien',
            ],
            [
                'nama_poli' => 'Poli Kandungan',
                'keterangan' => 'Pelayanan khusus untuk kesehatan kandungan',
            ],
            [
                'nama_poli' => 'Poli Anak',
                'keterangan' => 'Pelayanan kesehatan anak',
            ],
            [
                'nama_poli' => 'Poli Saraf',
                'keterangan' => 'Pelayanan kesehatan sistem saraf',
            ],
            [
                'nama_poli' => 'Poli Jantung',
                'keterangan' => 'Pelayanan kesehatan jantung',
            ],
        ];

        foreach ($polis as $poli) {
            Poli::create($poli);
        }
    }
}