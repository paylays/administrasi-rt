<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    use HasFactory;

    protected $table = 'kk';

    public function warga()
    {
        return $this->hasMany(Warga::class, 'kk_id');
    }
}
