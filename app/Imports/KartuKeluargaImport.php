<?php

namespace App\Imports;

use App\Models\Kk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;

class KartuKeluargaImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        try {
            if (empty($row['no_kk'])) {
                return null;
            }

            return new Kk([
                'no_kk'                 => $row['no_kk'],
                'nama_kepala_keluarga' => $row['nama_kepala_keluarga'],
                'alamat'               => $row['alamat'],
                'rt'                   => $row['rt'],
                'rw'                   => $row['rw'],
                'desa_kelurahan'       => $row['desa_kelurahan'],
                'kecamatan'            => $row['kecamatan'],
                'kabupaten_kota'       => $row['kabupaten_kota'],
                'provinsi'             => $row['provinsi'],
                'kode_pos'             => $row['kode_pos'],
            ]);
        } catch (\Exception $e) {
            Log::error("Gagal import baris KK: " . json_encode($row) . " - " . $e->getMessage());
            return null;
        }
    }
}
