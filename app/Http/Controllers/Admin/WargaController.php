<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Warga;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::with('kk')->latest()->get();

        return view('admin.pages.warga.index', compact('warga'));
    }
}
