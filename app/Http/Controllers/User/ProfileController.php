<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Warga;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('user.pages.profile.index', compact('user'));
    }

    public function verifyNIK(Request $request)
    {
        $request->validate([
            'nik' => 'required|digits:16',
        ]);

        $nik = $request->input('nik');
        $warga = Warga::where('nik', $nik)->first();

        if (!$warga) {
            return redirect()->route('user.profile')->with('error', 'NIK tidak ditemukan di database warga.');
        }

        $user = Auth::user();
        $user->nik = $nik;
        $user->save();

        return redirect()->route('user.profile')->with('success', 'NIK berhasil diverifikasi.');
    }
}
