<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kk;

class KkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kk::create([
            'no_kk' => '6471011111111111',
            'nama_kepala_keluarga' => 'Budi Santoso',
            'alamat' => 'Jl. Melati No. 123',
            'rt' => '36',
            'rw' => '05',
            'desa_kelurahan' => 'Gunung Samarinda',
            'kecamatan' => 'Balikpapan Utara',
            'kabupaten_kota' => 'Balikpapan',
            'provinsi' => 'Kalimantan Timur',
            'kode_pos' => '76125',
        ]);
    }
}
