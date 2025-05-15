<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kk;

class KartuKeluargaController extends Controller
{
    public function index()
    {
        $kk = Kk::latest()->get();

        return view('admin.pages.kartu-keluarga.index', compact('kk'));
    }
}
