<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->delete();

        return redirect()->back()->with('success', 'Akun warga berhasil dihapus.');
    }
}
