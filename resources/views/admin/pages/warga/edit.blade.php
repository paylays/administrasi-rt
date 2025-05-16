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
        <h3 class="card-title">Form Mengubah Data Warga RT.36</h3>
    </div>

    <div class="p-6">
        <form action="{{ route('admin.data-warga.update', $warga->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mb-6">
                {{-- KK ID --}}
                <div class="space-y-2">
                    <label for="kk_id" class="font-semibold text-gray-500">Nomor Kartu Keluarga</label>
                    <select id="kk_id" name="kk_id" class="form-input">
                        @foreach ($kks as $kk)
                            <option value="{{ $kk->id }}" {{ $kk->id == old('kk_id', $warga->kk_id) ? 'selected' : '' }}>
                                {{ $kk->no_kk }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- NIK --}}
                <div class="space-y-2">
                    <label for="nik" class="font-semibold text-gray-500">NIK</label>
                    <input type="text" id="nik" name="nik" class="form-input" maxlength="16" value="{{ old('nik', $warga->nik) }}">
                    <span class="text-gray-500"><small><i>Nomor KK wajib 16 digit</i></small></span>
                </div>

                {{-- Nama Lengkap --}}
                <div class="space-y-2">
                    <label for="nama_lengkap" class="font-semibold text-gray-500">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-input" value="{{ old('nama_lengkap', $warga->nama_lengkap) }}">
                </div>

                {{-- Jenis Kelamin --}}
                <div class="space-y-2">
                    <label for="jenis_kelamin" class="font-semibold text-gray-500">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-input">
                        <option value="Laki-laki" {{ old('jenis_kelamin', $warga->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin', $warga->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                {{-- Tempat & Tanggal Lahir --}}
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-input" value="{{ old('tempat_lahir', $warga->tempat_lahir) }}">
                </div>
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-input" value="{{ old('tanggal_lahir', $warga->tanggal_lahir) }}">
                </div>

                {{-- Agama --}}
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Agama</label>
                    <select name="agama" class="form-input">
                        @foreach (['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'] as $agama)
                            <option value="{{ $agama }}" {{ old('agama', $warga->agama) == $agama ? 'selected' : '' }}>{{ $agama }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Pendidikan --}}
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-input" value="{{ old('pendidikan', $warga->pendidikan) }}">
                </div>

                {{-- Jenis Pekerjaan --}}
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Jenis Pekerjaan</label>
                    <input type="text" name="jenis_pekerjaan" class="form-input" value="{{ old('jenis_pekerjaan', $warga->jenis_pekerjaan) }}">
                </div>

                {{-- Golongan Darah --}}
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Golongan Darah</label>
                    <select name="golongan_darah" class="form-input">
                        <option value="">-</option>
                        @foreach (['A', 'B', 'AB', 'O'] as $gol)
                            <option value="{{ $gol }}" {{ old('golongan_darah', $warga->golongan_darah) == $gol ? 'selected' : '' }}>{{ $gol }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Status Perkawinan --}}
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Status Perkawinan</label>
                    <select name="status_perkawinan" class="form-input">
                        @foreach (['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'] as $status)
                            <option value="{{ $status }}" {{ old('status_perkawinan', $warga->status_perkawinan) == $status ? 'selected' : '' }}>{{ $status }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Status Hubungan --}}
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Status Hubungan Dalam Keluarga</label>
                    <select name="status_hubungan_dalam_keluarga" class="form-input">
                        @foreach (['Kepala Keluarga', 'Istri', 'Anak'] as $hub)
                            <option value="{{ $hub }}" {{ old('status_hubungan_dalam_keluarga', $warga->status_hubungan_dalam_keluarga) == $hub ? 'selected' : '' }}>{{ $hub }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Kewarganegaraan --}}
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan" class="form-input" value="{{ old('kewarganegaraan', $warga->kewarganegaraan) }}">
                </div>

                {{-- Nama Ayah --}}
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Nama Ayah</label>
                    <input type="text" name="nama_ayah" class="form-input" value="{{ old('nama_ayah', $warga->nama_ayah) }}">
                </div>

                {{-- Nama Ibu --}}
                <div class="space-y-2">
                    <label class="font-semibold text-gray-500">Nama Ibu</label>
                    <input type="text" name="nama_ibu" class="form-input" value="{{ old('nama_ibu', $warga->nama_ibu) }}">
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