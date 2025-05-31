<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSurat;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pengajuanSurat = PengajuanSurat::with('jenisSurat')
                                ->where('user_id', $user->id)
                                ->whereIn('status', ['Sedang Diverifikasi', 'Selesai', 'Ditolak'])
                                ->orderByDesc('created_at')
                                ->get();
        $jumlahPengajuan = PengajuanSurat::where('user_id', $user->id)->count();
        $jumlahSelesai = PengajuanSurat::where('user_id', $user->id)
                                    ->where('status', 'Selesai')
                                    ->count();
        $jumlahDitolak = PengajuanSurat::where('user_id', $user->id)
                                    ->where('status', 'Ditolak')
                                    ->count();

        return view('user.dashboard', compact('pengajuanSurat','jumlahPengajuan', 'jumlahSelesai', 'jumlahDitolak'));
    }
}
