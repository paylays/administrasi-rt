@extends('admin.layouts.vertical', ['title' => 'Warga', 'subTitle' => 'Manajemen Data' , 'pageTitle' => 'Warga'])

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
        <h3 class="card-title">Form Menambah Data Warga RT.36</h3>
    </div>

    <div class="p-6">
        <form method="POST" action="{{ route('admin.data-warga.store') }}">
        @csrf
            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700"><i class="ri-contacts-book-2-line me-1.5"></i>
                Informasi Data Diri
            </h5>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-6 mb-6">

                {{-- Nama Lengkap --}}
                <div class="space-y-2">
                    <label for="nama_lengkap" class="font-semibold text-gray-500">Nama Lengkap<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="nama_lengkap" name="nama_lengkap" maxlength="16" placeholder="Masukkan nama lengkap">
                </div>

                {{-- NIK --}}
                <div class="space-y-2">
                    <label for="nik" class="font-semibold text-gray-500">NIK<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="nik" name="nik" placeholder="Masukkan NIK">
                    <span class="text-gray-500"><small><i>Nomor Induk Kependudukan wajib 16 digit</i></small></span>
                </div>

                {{-- Jenis Kelamin --}}
                <div class="space-y-2">
                    <label for="jenis_kelamin" class="font-semibold text-gray-500">Jenis Kelamin<span class="text-danger">*</span></label>
                    <select class="form-input" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                {{-- Tempat Lahir --}}
                <div class="space-y-2">
                    <label for="tempat_lahir" class="font-semibold text-gray-500">Tempat Lahir<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir">
                </div>

                {{-- Tanggal Lahir --}}
                <div class="space-y-2">
                    <label for="tanggal_lahir" class="font-semibold text-gray-500">Tanggal Lahir<span class="text-danger">*</span></label>
                    <input class="form-input" type="date" id="tanggal_lahir" name="tanggal_lahir">
                </div>

                {{-- Agama --}}
                <div class="space-y-2">
                    <label for="agama" class="font-semibold text-gray-500">Agama<span class="text-danger">*</span></label>
                    <select class="form-input" id="agama" name="agama">
                        <option value="">-- Pilih Agama --</option>
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>

                {{-- Pendidikan --}}
                <div class="space-y-2">
                    <label for="pendidikan" class="font-semibold text-gray-500">Pendidikan<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="pendidikan" name="pendidikan" placeholder="Masukkan pendidikan terakhir">
                </div>

                {{-- Pekerjaan --}}
                <div class="space-y-2">
                    <label for="jenis_pekerjaan" class="font-semibold text-gray-500">Jenis Pekerjaan<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="jenis_pekerjaan" name="jenis_pekerjaan" placeholder="Masukkan jenis pekerjaan">
                </div>

                {{-- Golongan Darah --}}
                <div class="space-y-2">
                    <label for="golongan_darah" class="font-semibold text-gray-500">Golongan Darah</label>
                    <select name="golongan_darah" id="golongan_darah" class="form-input">
                        <option value="">-- Pilih Golongan Darah --</option>
                        <option value="A" {{ old('golongan_darah') == 'A' ? 'selected' : '' }}>A</option>
                        <option value="B" {{ old('golongan_darah') == 'B' ? 'selected' : '' }}>B</option>
                        <option value="AB" {{ old('golongan_darah') == 'AB' ? 'selected' : '' }}>AB</option>
                        <option value="O" {{ old('golongan_darah') == 'O' ? 'selected' : '' }}>O</option>
                    </select>
                </div>

            </div>

            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700">
                <i class="ri-home-4-line me-1.5"></i> Data Keluarga
            </h5>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mb-6">
                {{-- KK ID (harusnya nanti pakai select dari daftar KK) --}}
                <div class="space-y-2">
                    <label for="kk_id" class="font-semibold text-gray-500">Nomor Kartu Keluarga<span class="text-danger">*</span></label>
                    <select id="kk_id" name="kk_id" class="form-input">
                        @foreach ($kks as $kk)
                            <option value="{{ $kk->id }}">{{ $kk->no_kk }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Status Hubungan Keluarga --}}
                <div class="space-y-2">
                    <label for="status_hubungan_dalam_keluarga" class="font-semibold text-gray-500">Status Hubungan dalam Keluarga<span class="text-danger">*</span></label>
                    <select class="form-input" id="status_hubungan_dalam_keluarga" name="status_hubungan_dalam_keluarga">
                        <option value="">-- Pilih Status Hubungan --</option>
                        <option value="Kepala Keluarga">Kepala Keluarga</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak">Anak</option>
                    </select>
                </div>
            </div>


            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700">
                <i class="ri-shield-user-line me-1.5"></i> Data Tambahan
            </h5>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mb-6">
                {{-- Status Perkawinan --}}
                <div class="space-y-2">
                    <label for="status_perkawinan" class="font-semibold text-gray-500">Status Perkawinan<span class="text-danger">*</span></label>
                    <select class="form-input" id="status_perkawinan" name="status_perkawinan">
                        <option value="">-- Pilih Status Perkawinan --</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                </div>

                {{-- Kewarganegaraan --}}
                <div class="space-y-2">
                    <label for="kewarganegaraan" class="font-semibold text-gray-500">Kewarganegaraan<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="kewarganegaraan" name="kewarganegaraan" placeholder="Contoh: WNI">
                </div>

                {{-- Nama Ayah --}}
                <div class="space-y-2">
                    <label for="nama_ayah" class="font-semibold text-gray-500">Nama Ayah<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="nama_ayah" name="nama_ayah" placeholder="Masukkan nama ayah">
                </div>

                {{-- Nama Ibu --}}
                <div class="space-y-2">
                    <label for="nama_ibu" class="font-semibold text-gray-500">Nama Ibu<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="nama_ibu" name="nama_ibu" placeholder="Masukkan nama ibu">
                </div>
            </div>


            <div class="flex gap-2 justify-between items-center">
                <a href="{{ route('admin.data-warga') }}" class="btn bg-light text-gray-800"><i class="ri-arrow-left-line text-sm me-1.5"></i>Kembali</a>
                <button type="submit" class="btn bg-primary text-white">Tambah Sekarang</button>
            </div>
        </form>
    </div>
</div>
@endsection