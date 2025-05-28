<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisSurat extends Model
{
    use HasFactory;

    protected $table = 'jenis_surat';

    protected $fillable = [
        'nama_surat',
        'deskripsi_surat',
        'template_path_surat',
    ];

    public function pengajuanSurat()
    {
        return $this->hasMany(PengajuanSurat::class, 'jenis_surat_id');
    }
}
