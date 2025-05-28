<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSurat;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengajuanSuratController extends Controller
{
    public function index()
    {
        $pengajuans = PengajuanSurat::with(['user', 'jenisSurat'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.pages.pengajuan-surat.index', compact('pengajuans'));
    }

    public function lihatVerifikasi($id)
    {
        $pengajuan = PengajuanSurat::with(['user', 'jenisSurat'])->findOrFail($id);

        return view('admin.pages.pengajuan-surat.verifikasi', compact('pengajuan'));
    }

    public function previewSurat($id)
    {
        $pengajuan = PengajuanSurat::with(['user', 'jenisSurat'])->findOrFail($id);

        $dataPengajuan = collect($pengajuan->data_pengajuan);
        \Carbon\Carbon::setLocale('id');

        $pdf = Pdf::loadView('admin.pages.jenis-surat.template-surat.template-resmi', compact('pengajuan', 'dataPengajuan'))
            ->setPaper('f4', 'portrait');

        return $pdf->stream('surat_preview_'.$pengajuan->id.'.pdf');
    }

    public function verifikasiSurat(Request $request, $id)
    {
        $request->validate([
            'nomor' => 'required|string',
            'bulan' => 'required|string',
            'file_ttd' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $pengajuan = PengajuanSurat::findOrFail($id);

        $nomorSurat = $request->nomor . '/RT.036/GSM/' . strtoupper($request->bulan) . '/2024';

        if ($request->hasFile('file_ttd')) {
            $fileTtd = $request->file('file_ttd')->store('ttd', 'public');
            $pengajuan->file_ttd = $fileTtd;
        }

        $pengajuan->nomor_surat = $nomorSurat;
        $pengajuan->status = 'Selesai';
        $pengajuan->tanggal_verifikasi = now();
        $pengajuan->save();

        if (!Storage::disk('public')->exists('surat')) {
            Storage::disk('public')->makeDirectory('surat');
        }

        $dataPengajuan = collect($pengajuan->data_pengajuan);
        $tanggalSurat = now()->translatedFormat('d F Y');
        $pdf = Pdf::loadView('admin.pages.jenis-surat.template-surat.template-resmi', compact('pengajuan', 'dataPengajuan'));

        $fileName = 'surat_' . $pengajuan->id . '.pdf';
        $path = storage_path('app/public/surat/' . $fileName);
        $pdf->save($path);

        $pengajuan->file_surat = 'surat/' . $fileName;
        $pengajuan->save();

        return redirect()->route('admin.pengajuan-surat')->with('success', 'Pengajuan berhasil diverifikasi dan surat telah digenerate.');
    }

    public function lihatSuratSelesai($id)
    {
        $pengajuan = PengajuanSurat::with(['user', 'jenisSurat'])->findOrFail($id);

        if (!$pengajuan->file_surat || !Storage::disk('public')->exists($pengajuan->file_surat)) {
            return back()->with('error', 'File surat belum tersedia.');
        }

        $pdfContent = Storage::disk('public')->get($pengajuan->file_surat);

        return response($pdfContent)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="' . basename($pengajuan->file_surat) . '"');
    }

    public function tolakSurat(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:pengajuan_surats,id',
            'catatan_admin' => 'required|string',
        ]);

        $pengajuan = PengajuanSurat::findOrFail($request->id);
        $pengajuan->status = 'Ditolak';
        $pengajuan->catatan_admin = $request->catatan_admin;
        $pengajuan->tanggal_verifikasi = now();
        $pengajuan->save();

        return redirect()->route('admin.pengajuan-surat')->with('success', 'Pengajuan surat telah ditolak.');
    }

}
