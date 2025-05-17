<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Warga;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warga::create([
            'kk_id' => 1,
            'nik' => '6471011111111101',
            'nama_lengkap' => 'Budi Santoso',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'Balikpapan',
            'tanggal_lahir' => '1980-01-01',
            'agama' => 'Islam',
            'pendidikan' => 'S1',
            'jenis_pekerjaan' => 'Pegawai Swasta',
            'golongan_darah' => 'O',
            'status_perkawinan' => 'Kawin',
            'status_hubungan_dalam_keluarga' => 'Kepala Keluarga',
            'kewarganegaraan' => 'WNI',
            'nama_ayah' => 'Sutrisno',
            'nama_ibu' => 'Sulastri',
        ]);

        Warga::create([
            'kk_id' => 1,
            'nik' => '6471011111111102',
            'nama_lengkap' => 'Siti Aminah',
            'jenis_kelamin' => 'Perempuan',
            'tempat_lahir' => 'Balikpapan',
            'tanggal_lahir' => '1982-02-02',
            'agama' => 'Islam',
            'pendidikan' => 'SMA',
            'jenis_pekerjaan' => 'Ibu Rumah Tangga',
            'golongan_darah' => 'A',
            'status_perkawinan' => 'Kawin',
            'status_hubungan_dalam_keluarga' => 'Istri',
            'kewarganegaraan' => 'WNI',
            'nama_ayah' => 'Hasyim',
            'nama_ibu' => 'Rohani',
        ]);
    }
}
