<?php

namespace App\Imports;

use App\Models\Warga;
use App\Models\Kk;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WargaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        try {
            if (empty($row['nik'])) {
                return null;
            }

            $kk = Kk::where('no_kk', $row['no_kk'])->first();

            if (!$kk) {
                Log::warning("No Kartu Keluarga tidak ditemukan saat import data warga: " . $row['no_kk']);
                return null;
            }

            return new Warga([
                'kk_id'                         => $kk->id,
                'nik'                           => $row['nik'],
                'nama_lengkap'                  => $row['nama_lengkap'],
                'jenis_kelamin'                 => $row['jenis_kelamin'],
                'tempat_lahir'                  => $row['tempat_lahir'],
                'tanggal_lahir'                 => $row['tanggal_lahir'],
                'agama'                         => $row['agama'],
                'pendidikan'                    => $row['pendidikan'],
                'jenis_pekerjaan'               => $row['jenis_pekerjaan'],
                'golongan_darah'                => $row['golongan_darah'],
                'status_perkawinan'             => $row['status_perkawinan'],
                'status_hubungan_dalam_keluarga'=> $row['status_hubungan_dalam_keluarga'],
                'kewarganegaraan'               => $row['kewarganegaraan'],
                'nama_ayah'                     => $row['nama_ayah'],
                'nama_ibu'                      => $row['nama_ibu'],
            ]);
        } catch (\Exception $e) {
            Log::error("Gagal import baris warga: " . json_encode($row) . " - " . $e->getMessage());
            return null;
        }
    }
}
