<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\KartuKeluargaImport;


class KartuKeluargaController extends Controller
{
    public function index()
    {
        $kk = Kk::latest()->get();

        return view('admin.pages.kartu-keluarga.index', compact('kk'));
    }

    public function create()
    {
        return view('admin.pages.kartu-keluarga.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'no_kk' => 'required|string|size:16|unique:kk,no_kk',
                'nama_kepala_keluarga' => 'required|string|max:255',
                'alamat' => 'required|string',
                'rt' => 'required|string|max:10',
                'rw' => 'nullable|string|max:10',
                'desa_kelurahan' => 'required|string|max:100',
                'kecamatan' => 'required|string|max:100',
                'kabupaten_kota' => 'required|string|max:100',
                'provinsi' => 'required|string|max:100',
                'kode_pos' => 'required|string|max:10',
            ]);

            KK::create([
                'no_kk' => $request->no_kk,
                'nama_kepala_keluarga' => $request->nama_kepala_keluarga,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'desa_kelurahan' => $request->desa_kelurahan,
                'kecamatan' => $request->kecamatan,
                'kabupaten_kota' => $request->kabupaten_kota,
                'provinsi' => $request->provinsi,
                'kode_pos' => $request->kode_pos,
            ]);

            return redirect()->route('admin.kartu-keluarga')->with('success', 'Data Kartu Keluarga berhasil ditambahkan');
        } catch (\Exception $e) {
            Log::error('Gagal simpan KK: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data KK. Silakan coba lagi.');
        }
    }
    public function detail($id)
    {
        $kk = Kk::with('warga')->findOrFail($id);

        return view('admin.pages.kartu-keluarga.detail', compact('kk'));
    }

    public function edit($id)
    {
        $kk = Kk::findOrFail($id);

        return view('admin.pages.kartu-keluarga.edit', compact('kk'));
    }

    public function update(Request $request, $id)
    {
        $kk = Kk::findOrFail($id);

        try {

            $request->validate([
                'no_kk' => [
                    'required',
                    'string',
                    'size:16',
                    Rule::unique('kk', 'no_kk')->ignore($kk->id),
                ],
                'nama_kepala_keluarga' => 'required|string|max:255',
                'alamat' => 'required|string',
                'rt' => 'required|string|max:10',
                'rw' => 'nullable|string|max:10',
                'desa_kelurahan' => 'required|string|max:100',
                'kecamatan' => 'required|string|max:100',
                'kabupaten_kota' => 'required|string|max:100',
                'provinsi' => 'required|string|max:100',
                'kode_pos' => 'required|string|max:10',
            ]);

            $kk->update($request->all());

            return redirect()->route('admin.kartu-keluarga')->with('success', 'Data kartu keluarga berhasil diperbarui');
        } catch (\Exception $e) {
            Log::error('Gagal update data kartu keluarga: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat memperbarui data. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        $kk = Kk::findOrFail($id);
        
        try {
            $kk->delete();

            return redirect()->route('admin.kartu-keluarga')->with('success', 'Data kartu keluarga berhasil');
        } catch (\Exception $e) {
            Log::error('Gagal hapus data kartu keluarga: ' . $e->getMessage());
            return redirect()->route('admin.kartu-keluarga')->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }

    public function downloadTemplate()
    {
        $file = public_path('templates/template_data_kartu_keluarga.xlsx');

        if (!file_exists($file)) {
            return redirect()->back()->with('error', 'File template tidak ditemukan.');
        }

        return response()->download($file, 'template_data_kartu_keluarga.xlsx');
    }

    public function importFile(Request $request)
    {
        $request->validate([
            'file_excel_kartu_keluarga' => 'required|file|mimes:xlsx,xls'
        ]);

        try {
            Excel::import(new KartuKeluargaImport, $request->file('file_excel_kartu_keluarga'));

            return redirect()->route('admin.kartu-keluarga')->with('success', 'Data berhasil diimpor dari Excel.');
        } catch (\Exception $e) {
            \Log::error('Gagal import Excel KK: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengimpor file.');
        }
    }

}
