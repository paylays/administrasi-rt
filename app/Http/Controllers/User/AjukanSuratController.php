<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSurat;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;

class AjukanSuratController extends Controller
{
    public function index()
    {
        $riwayat = PengajuanSurat::with(['user', 'jenisSurat'])
            ->where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('user.pages.ajukan-surat.index', compact('riwayat'));
    }

    public function createPengantarRT()
    {
        return view('user.pages.ajukan-surat.create ');
    }

    public function storePengantarRT(Request $request)
    {
        try {
            $data = $request->validate([
                'nik_pemohon' => 'required|string|size:16',
                'nama' => 'required|string',
                'jenis_kelamin' => 'required|string',
                'tempat_lahir' => 'required|string',
                'tanggal_lahir' => 'required|date',
                'status_perkawinan' => 'required|string',
                'golongan_darah' => 'nullable|string',
                'kewarganegaraan' => 'required|string',
                'pekerjaan' => 'required|string',
                'agama' => 'required|string',
                'jalan' => 'required|string',
                'nomor' => 'required|string',
                'keperluan_surat' => 'required|array|min:1',
            ]);

            $dataPengajuan = [
                'nik_pemohon' => $data['nik_pemohon'],
                'nama' => $data['nama'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'tempat_lahir' => $data['tempat_lahir'],
                'tanggal_lahir' => $data['tanggal_lahir'],
                'status_perkawinan' => $data['status_perkawinan'],
                'golongan_darah' => $data['golongan_darah'] ?? null,
                'kewarganegaraan' => $data['kewarganegaraan'],
                'pekerjaan' => $data['pekerjaan'],
                'agama' => $data['agama'],
                'alamat' => 'Jl. ' . $data['jalan'] . ' No. ' . $data['nomor'] . ' RT. 036, Kelurahan Gunung Samarinda Kecamatan Balikpapan Utara',
                'keperluan_surat' => $data['keperluan_surat'],
            ];

            PengajuanSurat::create([
                'user_id' => Auth::id(),
                'jenis_surat_id' => 3,
                'data_pengajuan' => $dataPengajuan,
            ]);

            return redirect()->route('user.ajukan-surat')->with('success', 'Pengajuan surat berhasil dikirim.');
        } catch (Exception $e) {
            Log::error('Gagal menyimpan pengajuan surat: '.$e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }
    }

}
