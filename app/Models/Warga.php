<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga';

    protected $fillable = [
        'kk_id',
        'nik',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pendidikan',
        'jenis_pekerjaan',
        'golongan_darah',
        'status_perkawinan',
        'status_hubungan_dalam_keluarga',
        'kewarganegaraan',
        'nama_ayah',
        'nama_ibu',
    ];

    public function kk()
    {
        return $this->belongsTo(Kk::class, 'kk_id');
    }
}
