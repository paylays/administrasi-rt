<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Warga;
// use Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.pages.profile.index', compact('user'));
    }

    public function verifyNIK(Request $request)
    {
        $user = Auth::user();

        try {
            $request->validate([
                'nik' => 'required|digits:16',
            ]);

            $nik = $request->input('nik');

            $warga = Warga::where('nik', $nik)->first();

            if (!$warga) {
                return redirect()->route('user.profile')->withErrors(['nik' => 'NIK tidak ditemukan di database warga.']);
            }

            if (strtolower(trim($warga->nama_lengkap)) !== strtolower(trim($user->name))) {
                return redirect()->route('user.profile')->withErrors(['nik' => 'NIK tidak cocok dengan nama lengkap Anda di database warga.']);
            }

            $user->nik = $nik;
            $user->save();

            return redirect()->route('user.profile')->with('success', 'NIK berhasil diverifikasi.');
        } catch (\Exception $e) {
            Log::error('Gagal verifikasi NIK: ' . $e->getMessage());
            return redirect()->route('user.profile')->withInput()->withErrors(['Terjadi kesalahan saat verifikasi NIK. Silakan coba lagi.']);
        }
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        try {
            $warga = $user->nik ? Warga::where('nik', $user->nik)->first() : null;

            $request->validate([
                'name' => 'required|string|max:100',
                'email' => 'required|email|unique:users,email,' . $user->id,
            ]);

            if ($warga && strtolower(trim($user->name)) !== strtolower(trim($request->name))) {
                return redirect()->back()->withErrors(['name' => 'Nama tidak dapat diubah karena sudah diverifikasi dengan data warga.']);
            }

            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Gagal update data profil: ' . $e->getMessage());
            return redirect()->back()->withInput()->withErrors(['Terjadi kesalahan saat memperbarui data. Silakan coba lagi.']);
        }
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        try {
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|min:6|confirmed',
            ]);

            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'Kata sandi lama salah.']);
            }

            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect()->back()->with('success', 'Kata sandi berhasil diubah.');
        } catch (\Exception $e) {
            Log::error('Gagal update password: ' . $e->getMessage());
            return redirect()->back()->withInput()->withErrors(['Terjadi kesalahan saat mengubah kata sandi. Silakan coba lagi.']);
        }
    }

    public function destroy()
    {
        try {
            $user = Auth::user();

            Auth::logout();
            $user->delete();

            return redirect('/login')->with('success', 'Akun Anda berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Gagal menghapus akun: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus akun.');
        }
    }
}
