<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Periksa;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_pasien' => 3,
                'id_dokter'=> 1,
                'catatan'=> 'Periksa Pertama',
                'biaya_periksa' => 5000000
            ],
            [
                'id_pasien' => 4,
                'id_dokter'=> 2,
                'catatan'=> 'Periksa Kedua ',
                'biaya_periksa' => 5000
            ],
            [
                'id_pasien' => 5,
                'id_dokter'=> 1,
                'catatan'=> 'Periksa Terusan ',
                'biaya_periksa' => 65000
            ],
            [
                'id_pasien' => 5,
                'id_dokter'=> 2,
                'catatan'=> 'Periksa Maning ',
                'biaya_periksa' => 75000
            ]
        ];

        foreach ($data as $d) {
            Periksa::create([  
                'id_pasien' => $d['id_pasien'],
                'id_dokter'=> $d['id_dokter'],
                'catatan'=> $d['catatan'],
                'biaya_periksa' => $d['biaya_periksa']
            ]);
        }
    }
}
