<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class PengajuanSurat extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_surats';

    protected $fillable = [
        'pengajuan_id',
        'user_id',
        'jenis_surat_id',
        'data_pengajuan',
        'status',
        'nomor_surat',
        'file_ttd',
        'catatan_admin',
        'tanggal_verifikasi',
        'file_surat',
    ];

    protected $casts = [
        'data_pengajuan' => 'array',
        'tanggal_verifikasi' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            do {
                $randomNumber = str_pad(random_int(0, 99999999), 8, '0', STR_PAD_LEFT); // 8 digit angka
                $randomId = 'ID' . $randomNumber;
            } while (self::where('pengajuan_id', $randomId)->exists());

            $model->pengajuan_id = $randomId;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class);
    }
}
