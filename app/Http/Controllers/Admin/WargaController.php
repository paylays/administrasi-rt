<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Warga;
use App\Models\Kk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::with('kk')->latest()->get();

        return view('admin.pages.warga.index', compact('warga'));
    }

    public function create()
    {
        $kks = Kk::all();
        
        return view('admin.pages.warga.create', compact('kks'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'kk_id' => 'required|exists:kk,id',
                'nik' => 'required|string|size:16|unique:warga,nik',
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'tempat_lahir' => 'required|string|max:100',
                'tanggal_lahir' => 'required|date',
                'agama' => 'required|in:Islam,Protestan,Katolik,Hindu,Buddha,Konghucu',
                'pendidikan' => 'required|string|max:100',
                'jenis_pekerjaan' => 'required|string|max:100',
                'golongan_darah' => 'nullable|string|max:3',
                'status_perkawinan' => 'required|in:Belum Kawin,Kawin,Cerai Hidup,Cerai Mati',
                'status_hubungan_dalam_keluarga' => 'required|in:Kepala Keluarga,Istri,Anak',
                'kewarganegaraan' => 'required|string|max:100',
                'nama_ayah' => 'required|string|max:255',
                'nama_ibu' => 'required|string|max:255',
            ]);

            Warga::create([
                'kk_id' => $request->kk_id,
                'nik' => $request->nik,
                'nama_lengkap' => $request->nama_lengkap,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'golongan_darah' => $request->golongan_darah,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'status_perkawinan' => $request->status_perkawinan,
                'status_hubungan_dalam_keluarga' => $request->status_hubungan_dalam_keluarga,
                'kewarganegaraan' => $request->kewarganegaraan,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
            ]);

            return redirect()->route('admin.data-warga')->with('success', 'Data warga berhasil ditambahkan');
        } catch (\Exception $th) {
            Log::error('Gagal simpan data warga: ' . $th->getMessage());
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }
    }

    public function edit($id)
    {
        $warga = Warga::findOrFail($id);
        $kks = Kk::all();

        return view('admin.pages.warga.edit', compact('warga', 'kks'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'kk_id' => 'required|exists:kk,id',
                'nik' => 'required|string|size:16|unique:warga,nik,' . $id,
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'tempat_lahir' => 'required|string|max:100',
                'tanggal_lahir' => 'required|date',
                'agama' => 'required|in:Islam,Protestan,Katolik,Hindu,Buddha,Konghucu',
                'pendidikan' => 'required|string|max:100',
                'jenis_pekerjaan' => 'required|string|max:100',
                'golongan_darah' => 'nullable|string|max:3',
                'status_perkawinan' => 'required|in:Belum Kawin,Kawin,Cerai Hidup,Cerai Mati',
                'status_hubungan_dalam_keluarga' => 'required|in:Kepala Keluarga,Istri,Anak',
                'kewarganegaraan' => 'required|string|max:100',
                'nama_ayah' => 'required|string|max:255',
                'nama_ibu' => 'required|string|max:255',
            ]);

            $warga = Warga::findOrFail($id);
            $warga->update($request->all());

            return redirect()->route('admin.data-warga')->with('success', 'Data warga berhasil diperbarui');
        } catch (\Exception $th) {
            Log::error('Gagal update data warga: ' . $th->getMessage());
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat memperbarui data. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            $warga = Warga::findOrFail($id);
            $warga->delete();

            return redirect()->route('admin.data-warga')->with('success', 'Data warga berhasil');
        } catch (\Exception $e) {
            Log::error('Gagal hapus data warga: ' . $e->getMessage());
            return redirect()->route('admin.data-warga')->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }

}
