<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumans';
    
    protected $fillable = [
        'judul',
        'isi',
        'cover',
        'status',
        'dibuat_oleh',
        'tanggal_publish',
        'tanggal_kadaluwarsa',
    ];

    protected $casts = [
        'tanggal_publish' => 'datetime',
        'tanggal_kadaluwarsa' => 'datetime',
    ];


    public function admin()
    {
        return $this->belongsTo(Admin::class, 'dibuat_oleh');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                     ->where(function ($q) {
                         $q->whereNull('tanggal_publish')
                           ->orWhere('tanggal_publish', '<=', now());
                     });
    }
}
