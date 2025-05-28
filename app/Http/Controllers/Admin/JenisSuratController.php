<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisSurat;
use App\Models\PengajuanSurat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class JenisSuratController extends Controller
{
    public function index()
    {
        $jenisSurat = JenisSurat::latest()->get();
        return view('admin.pages.jenis-surat.index', compact('jenisSurat'));
    }

    public function preview($id)
    {
        $pengajuan = PengajuanSurat::with(['user', 'jenisSurat'])->findOrFail($id);
        $surat = JenisSurat::findOrFail($pengajuan->jenis_surat_id);

        if (!$surat->template_path_surat) {
            abort(404, 'Template view tidak tersedia');
        }

        $dataPengajuan = collect($pengajuan->data_pengajuan);

        $pdf = Pdf::loadView($surat->template_path_surat, compact('pengajuan', 'dataPengajuan', 'surat'));

        return $pdf->stream('preview.pdf');
    }

}
