@extends('admin.layouts.vertical', ['title' => 'Kartu keluarga', 'subTitle' => 'Manajemen Data' , 'pageTitle' => 'Kartu keluarga'])

@section("content")
@if(session('error'))
    <div id="dismiss-example-danger" class="border bg-danger text-white border-danger rounded-md py-3 px-5 flex justify-between items-center mb-3">
        <p>
            <span class="font-bold">Error!</span> - 
            {{ session('error') }}
        </p>
        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-danger" type="button">
            <i class="ri-close-line text-xl"></i>   
        </button>
    </div>
@endif
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Form Mengubah Data Warga RT.36</h3>
    </div>

    <div class="p-6">
        <form action="{{ route('admin.kartu-keluarga.update', $kk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700"><i class="ri-home-smile-2-line me-1.5"></i>
                Informasi Data Diri
            </h5>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mb-6">
                <!-- No. KK -->
                <div class="space-y-2">
                    <label for="no_kk" class="font-semibold text-gray-500">Nomor KK<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="no_kk" name="no_kk" maxlength="16" value="{{ old('no_kk', $kk->no_kk) }}">
                    <span class="text-gray-500"><small><i>Nomor KK wajib 16 digit</i></small></span>
                </div>

                <!-- Nama Kepala Keluarga -->
                <div class="space-y-2">
                    <label for="nama_kepala_keluarga" class="font-semibold text-gray-500">Nama Kepala Keluarga<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="nama_kepala_keluarga" name="nama_kepala_keluarga" value="{{ old('nama_kepala_keluarga', $kk->nama_kepala_keluarga) }}">
                </div>
            </div>

            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700"><i class="ri-map-pin-line me-1.5"></i>
                Informasi Alamat Tempat Tinggal
            </h5>
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <!-- Alamat -->
                 <div class="space-y-2 md:col-span-2">
                    <label for="alamat" class="font-semibold text-gray-500">Alamat<span class="text-danger">*</span></label>
                    <textarea class="form-input" id="alamat" name="alamat" rows="3">{{ old('alamat', $kk->alamat) }}</textarea>
                </div>

                <!-- RT -->
                <div class="space-y-2">
                    <label for="rt" class="font-semibold text-gray-500">RT<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="rt" name="rt" value="{{ old('rt', $kk->rt) }}">
                </div>

                <!-- RW -->
                <div class="space-y-2">
                    <label for="rw" class="font-semibold text-gray-500">RW <span>(Opsional)</span></label>
                    <input class="form-input" type="text" id="rw" name="rw" value="{{ old('rw', $kk->rw) }}">
                </div>

                <!-- Kelurahan -->
                <div class="space-y-2">
                    <label for="desa_kelurahan" class="font-semibold text-gray-500">Kelurahan<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="desa_kelurahan" name="desa_kelurahan" value="{{ old('desa_kelurahan', $kk->desa_kelurahan) }}">
                </div>

                <!-- Kecamatan -->
                <div class="space-y-2">
                    <label for="kecamatan" class="font-semibold text-gray-500">Kecamatan<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="kecamatan" name="kecamatan" value="{{ old('kecamatan', $kk->kecamatan) }}">
                </div>

                <!-- Kabupaten/Kota -->
                <div class="space-y-2">
                    <label for="kabupaten_kota" class="font-semibold text-gray-500">Kabupaten/Kota<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="kabupaten_kota" name="kabupaten_kota" value="{{ old('kabupaten_kota', $kk->kabupaten_kota) }}">
                </div>

                <!-- Provinsi -->
                <div class="space-y-2">
                    <label for="provinsi" class="font-semibold text-gray-500">Provinsi<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="provinsi" name="provinsi" value="{{ old('provinsi', $kk->provinsi) }}">
                </div>

                <!-- Kode Pos -->
                <div class="space-y-2">
                    <label for="kode_pos" class="font-semibold text-gray-500">Kode Pos<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="kode_pos" name="kode_pos" value="{{ old('kode_pos', $kk->kode_pos) }}">
                </div>
            </div>

            <div class="flex gap-2 justify-between items-center">
                <a href="{{ route('admin.data-warga') }}" class="btn bg-gray-300 text-gray-800"><i class="ri-arrow-left-line text-sm me-1.5"></i>Kembali</a>
                <button type="submit" class="btn bg-primary text-white">Perbarui Data</button>
            </div>
        </form>
    </div>
</div>
@endsection