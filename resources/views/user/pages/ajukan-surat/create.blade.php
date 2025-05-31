@extends('user.layouts.vertical', ['title' => 'Ajukan Surat', 'subTitle' => 'Administrasi Surat' , 'pageTitle' => 'Ajukan Surat'])

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
        <h3 class="card-title">Form Pengajuan Surat Pengantar RT</h3>
    </div>

    <div class="p-6">
        <form method="POST" action="{{ route('user.ajukan-surat.surat-pengantar-rt.store') }}">
        @csrf
            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700">
                <i class="ri-user-line me-1.5"></i> Informasi Pemohon
            </h5>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <!-- NIK Pemohon -->
                <div class="space-y-2">
                    <label for="nik_pemohon" class="font-semibold text-gray-500">NIK Pemohon<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="nik_pemohon" name="nik_pemohon" placeholder="Masukkan nama pemohon">
                </div>
                <!-- Nama Pemohon -->
                <div class="space-y-2">
                    <label for="nama" class="font-semibold text-gray-500">Nama Pemohon<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="nama" name="nama" placeholder="Masukkan nama pemohon">
                </div>
                
                <!-- Jenis Kelamin -->
                <div class="space-y-2">
                    <label for="jenis_kelamin" class="font-semibold text-gray-500">Jenis Kelamin<span class="text-danger">*</span></label>
                    <select class="form-input" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <!-- Tempat Lahir -->
                <div class="space-y-2">
                    <label for="tempat_lahir" class="font-semibold text-gray-500">Tempat Lahir<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir">
                </div>

                <!-- Tanggal Lahir -->
                <div class="space-y-2">
                    <label for="tanggal_lahir" class="font-semibold text-gray-500">Tanggal Lahir<span class="text-danger">*</span></label>
                    <input class="form-input" type="date" id="tanggal_lahir" name="tanggal_lahir">
                </div>

                <!-- Status Perkawinan -->
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

                <!-- Golongan Darah -->
                <div class="space-y-2">
                    <label for="golongan_darah" class="font-semibold text-gray-500">Golongan Darah</label>
                    <select name="golongan_darah" id="golongan_darah" class="form-input">
                        <option value="">-- Pilih Golongan Darah --</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                
                <!-- Kewarganegaraan -->
                <div class="space-y-2">
                    <label for="kewarganegaraan" class="font-semibold text-gray-500">Kewarganegaraan<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="kewarganegaraan" name="kewarganegaraan" placeholder="Contoh: WNI">
                </div>

                <!-- Pekerjaan -->
                <div class="space-y-2">
                    <label for="pekerjaan" class="font-semibold text-gray-500">Pekerjaan<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="pekerjaan" name="pekerjaan" placeholder="Contoh: Karyawan Swasta">
                </div>

                <!-- Agama -->
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

                <!-- Nama Jalan -->
                <div class="space-y-2">
                    <label for="jalan" class="font-semibold text-gray-500">Nama Jalan<span class="text-danger">*</span></label>
                    <input type="text" class="form-input" id="jalan" name="jalan" placeholder="Contoh: Jl. Kenangan Indah">
                </div>

                <!-- Nomor Rumah -->
                <div class="space-y-2">
                    <label for="nomor" class="font-semibold text-gray-500">Nomor Rumah<span class="text-danger">*</span></label>
                    <input type="text" class="form-input" id="nomor" name="nomor" placeholder="Contoh: 10A">
                </div>
            </div>

            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700">
                <i class="ri-checkbox-circle-line me-1.5"></i> Tujuan Permohonan
            </h5>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="space-y-2 md:col-span-2">
                    <label class="font-semibold text-gray-500 block mb-2">Keperluan Surat<span class="text-danger">*</span></label>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        @php
                            $keperluanOptions = [
                                'Surat Pengantar Nikah',
                                'Surat Keterangan Belum Pernah Menikah',
                                'Surat Keterangan Janda / Duda',
                                'Surat Keterangan Penghasilan',
                                'Surat Keterangan Beda Nama',
                                'Surat Keterangan Ghoib',
                                'Surat Bertempat Tinggal Sementara',
                                'Surat Domisili Usaha Perusahaan',
                                'Surat Keterangan Catatan Kepolisian (SKCK)',
                                'Surat Keterangan Ahli Waris',
                                'Surat Keterangan Kematian (Bagi yang meninggal NIK sudah tidak ada / sudah meninggal lama)',
                            ];
                        @endphp

                        @foreach ($keperluanOptions as $index => $option)
                        <div class="flex items-center">
                            <input 
                                type="checkbox" 
                                class="form-checkbox rounded text-primary" 
                                id="keperluan_{{ $index }}" 
                                name="keperluan_surat[]" 
                                value="{{ $option }}"
                            >
                            <label class="ms-1.5" for="keperluan_{{ $index }}">{{ $option }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <div class="flex gap-2 justify-between items-center">
                <a href="{{ route('user.ajukan-surat') }}" class="btn bg-light text-gray-800"><i class="ri-arrow-left-line text-sm me-1.5"></i>Kembali</a>
                <button type="submit" class="btn bg-primary text-white">Tambah Sekarang</button>
            </div>
        </form>
    </div>
</div>
@endsection