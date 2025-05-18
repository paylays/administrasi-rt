<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class ManajamenAkunController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('admin.pages.manajemen-akun.index', compact('users'));
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);
        
        try {

            $request->validate([
                'nik' => [
                    'nullable', // atau 'required' jika memang wajib
                    'digits:16',
                    Rule::unique('users', 'nik')->ignore($user->id),
                ],
                'name' => 'required|string|max:100',
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users', 'email')->ignore($user->id),
                ],
            ]);

            $user->nik = $request->nik;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            return redirect()->back()->with('success', 'Data pengguna berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Gagal update data pengguna: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat memperbarui data. Silakan coba lagi.');
        }
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->id);
        
        try {
            $user->delete();

            return redirect()->back()->with('success', 'Akun pengguna berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Gagal menghapus akun pengguna: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus akun. Silakan coba lagi.');
        }
    }
}
