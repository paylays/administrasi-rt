<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::with('admin')->latest()->get();
        return view('admin.pages.pengumuman.index', compact('pengumumans'));
    }

    public function create()
    {
        return view('admin.pages.pengumuman.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:draft,published,archived',
            'tanggal_publish' => 'nullable|date',
            'tanggal_kadaluwarsa' => 'nullable|date|after_or_equal:tanggal_publish',
        ]);

        try {
            if ($request->hasFile('cover')) {
                $coverFile = $request->file('cover');
                $filename = Str::slug($validated['judul']) . '-' . time() . '.' . $coverFile->getClientOriginalExtension();
                $validated['cover'] = $coverFile->storeAs('covers', $filename, 'public');
            }

            $validated['dibuat_oleh'] = auth()->id();

            Pengumuman::create($validated);

            return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil ditambahkan.');
        } catch (\Exception $th) {
            Log::error('Gagal simpan data pengumuman: ' . $th->getMessage());
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pages.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:draft,published,archived',
            'tanggal_publish' => 'nullable|date',
            'tanggal_kadaluwarsa' => 'nullable|date|after_or_equal:tanggal_publish',
        ]);

        try {
            if ($request->hasFile('cover')) {

                if ($pengumuman->cover && Storage::disk('public')->exists($pengumuman->cover)) {
                    Storage::disk('public')->delete($pengumuman->cover);
                }

                $coverFile = $request->file('cover');
                $filename = Str::slug($validated['judul']) . '-' . time() . '.' . $coverFile->getClientOriginalExtension();
                $validated['cover'] = $coverFile->storeAs('covers', $filename, 'public');
            }

            $pengumuman->update($validated);

            return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Gagal memperbarui pengumuman: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat memperbarui data. Silahkan coba lagi.');
        }
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        try {
            $pengumuman->delete();

            return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil dihapus');
        } catch (\Exception $e) {
            Log::error('Gagal hapus pengumuman: ' . $e->getMessage());
            return redirect()->route('admin.pengumuman')->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }

}
