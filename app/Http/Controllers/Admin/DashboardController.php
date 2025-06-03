<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Warga;
use App\Models\Kk;
use App\Models\User;
use App\Models\PengajuanSurat;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik Jenis Kelamin
        $jumlahLaki = Warga::where('jenis_kelamin', 'Laki-laki')->count();
        $jumlahPerempuan = Warga::where('jenis_kelamin', 'Perempuan')->count();

        // Distribusi Usia Warga
        $warga = Warga::all();
        
        $usiaKategori = [
        'Anak (<12 Tahun)' => 0,
        'Remaja (13-17 Tahun)' => 0,
        'Dewasa (18-59 Tahun)' => 0,
        'Lansia (>59 Tahun)' => 0,
        ];

        foreach ($warga as $w) {
            $usia = Carbon::parse($w->tanggal_lahir)->age;

            if ($usia <= 12) {
                $usiaKategori['Anak (<12 Tahun)']++;
            } elseif ($usia >= 13 && $usia <= 17) {
                $usiaKategori['Remaja (13-17 Tahun)']++;
            } elseif ($usia >= 18 && $usia <= 59) {
                $usiaKategori['Dewasa (18-59 Tahun)']++;
            } else {
                $usiaKategori['Lansia (>59 Tahun)']++;
            }
        }

        // Card Warga, Kartu Keluarga, Pengajuan Surat, User Terverifikasi
        $totalWarga = Warga::count();
        $totalKk = Kk::count();
        $totalPengajuanSurat = PengajuanSurat::count();
        $totalUser = User::count();
        $totalUserVerified = User::where('nik_verified', 1)->count();
        $totalUserUnverified = User::where('nik_verified', 0)->count();

        // Chart Tren Pengajuan Surat 12 bulan terakhir
        $monthlyPengajuan = PengajuanSurat::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->where('created_at', '>=', now()->subMonths(11)->startOfMonth())
            ->groupByRaw('MONTH(created_at)')
            ->pluck('total', 'month');

        $bulanLabels = [];
        $bulanData = [];

        for ($i = 0; $i < 12; $i++) {
            $month = now()->subMonths(11 - $i);
            $bulanLabels[] = $month->format('M');
            $bulanData[] = $monthlyPengajuan[$month->month] ?? 0;
        }

        // Chart Status Pengajuan Surat
        $statusVerifikasi = PengajuanSurat::where('status', 'Sedang Diverifikasi')->count();
        $statusSelesai = PengajuanSurat::where('status', 'Selesai')->count();
        $statusDitolak = PengajuanSurat::where('status', 'Ditolak')->count();

        return view('admin.dashboard', [
            // Card Total Warga
            'totalWarga' => $totalWarga,
            'totalKk' => $totalKk,
            'totalPengajuanSurat' => $totalPengajuanSurat,
            'totalUser' => $totalUser,
            'totalUserVerified' => $totalUserVerified,
            'totalUserUnverified' => $totalUserUnverified,

            // Chart Jenis Kelamin
            'jumlahLaki' => $jumlahLaki,
            'jumlahPerempuan' => $jumlahPerempuan,

            // Chart Usia
            'usiaLabels' => array_keys($usiaKategori),
            'usiaValues' => array_values($usiaKategori),

            // Chart Tren Pengajuan Surat
            'bulanLabels' => $bulanLabels,
            'bulanData' => $bulanData,

            // Chart Status Pengajuan Surat
            'statusVerifikasi' => $statusVerifikasi,
            'statusSelesai' => $statusSelesai,
            'statusDitolak' => $statusDitolak,
        ]);
    }
}
