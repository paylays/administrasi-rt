<?php

namespace Database\Seeders;

use App\Models\JenisSurat;
use Illuminate\Database\Seeder;

class JenisSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisSurat::create([
            'nama_surat' => 'Surat Pengantar Kelurahan',
            'deskripsi_surat' => 'Surat sebagai pengantar dari RT untuk berbagai keperluan',
            'template_path_surat' => 'admin.pages.jenis-surat.template-surat.template-asli',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
