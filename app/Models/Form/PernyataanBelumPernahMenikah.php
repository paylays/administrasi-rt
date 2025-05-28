<?php

namespace App\Models\Form;

use App\Models\PengajuanSurat;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class PernyataanBelumPernahMenikah extends Model
{
    protected $table = 'pernyataan_belum_pernah_menikah';

    protected $fillable = [
        'user_id', 'nama', 'umur', 'agama', 'jenis_kelamin', 'pekerjaan',
        'alamat', 'nama_saksi_1', 'ttd_saksi_1', 'nama_saksi_2', 'ttd_saksi_2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pengajuan()
    {
        return $this->morphOne(PengajuanSurat::class, 'formulir');
    }
}
