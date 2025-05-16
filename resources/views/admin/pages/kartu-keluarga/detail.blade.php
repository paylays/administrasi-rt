@extends('admin.layouts.vertical', ['title' => 'Kartu Keluarga', 'subTitle' => 'Manajemen Data' , 'pageTitle' => 'Kartu Keluarga'])

@section("content")
<div class="grid xl:grid-cols-1 grid-cols-1 space-y-6">
    <div class="card">
        <div class="p-6">
            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700"><i class="ri-group-line me-1.5"></i>
                Informasi Kartu Keluarga
            </h5>
    
            <div class="mb-6">
                <label class="block font-semibold text-sm text-gray-600 mb-1">No. Kartu Keluarga</label>
                <div class="text-base font-bold text-primary">{{ $kk->no_kk }}</div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3">
                {{-- Kolom Kiri --}}
                <div class="space-y-3 mt-3">
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">Kepala Keluarga</label>
                        <div class="uppercase">{{ $kk->nama_kepala_keluarga }}</div>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">Alamat</label>
                        <div class="uppercase">{{ $kk->alamat }}</div>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">RT/RW</label>
                        <div class="uppercase">{{ $kk->rt }}/{{ $kk->rw ?? '-' }}</div>
                    </div>
                </div>
    
                {{-- Kolom Tengah --}}
                <div class="space-y-3 mt-3">
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">Kelurahan</label>
                        <div class="uppercase">{{ $kk->desa_kelurahan }}</div>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">Kecamatan</label>
                        <div class="uppercase">{{ $kk->kecamatan }}</div>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">Kabupaten/Kota</label>
                        <div class="uppercase">{{ $kk->kabupaten_kota }}</div>
                    </div>
                </div>
    
                {{-- Kolom Kanan --}}
                <div class="space-y-3 mt-3">
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">Provinsi</label>
                        <div class="uppercase">{{ $kk->provinsi }}</div>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">Kode Pos</label>
                        <div class="uppercase"> {{ $kk->kode_pos }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="p-6">
            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700"><i class="ri-team-line me-1.5"></i>
                Daftar Anggota
            </h5>
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">NIK</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Nama Lengkap</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Jenis Kelamin</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tempat Lahir</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tanggal Lahir</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Pendidikan</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Jenis Pekerjaan</th>
                                    <th scope="col" class="px-4 py-4 text-center text-sm font-medium text-gray-500">Status Hubungan dalam Keluarga</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700 uppercase">
                                @forelse ($kk->warga as $item)        
                                    <tr>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->nik }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->nama_lengkap }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->jenis_kelamin }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->tempat_lahir }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->tanggal_lahir }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->pendidikan }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->jenis_pekerjaan }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-center">
                                            @switch($item->status_hubungan_dalam_keluarga)
                                                @case('Kepala Keluarga')
                                                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-success text-white">Kepala Keluarga</span>
                                                    @break

                                                @case('Istri')
                                                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-danger text-white">Istri</span>
                                                    @break

                                                @case('Anak')
                                                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-info text-white">Anak</span>
                                                    @break

                                                @default
                                                    <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-dark text-white">{{ $item->status_hubungan_dalam_keluarga }}</span>
                                            @endswitch
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="px-4 py-4 text-center text-sm text-gray-500 dark:text-gray-300">
                                            Tidak ada anggota keluarga.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                Menampilkan total <span class="font-semibold">{{ $kk->warga->count() }}</span> data anggota keluarga.
            </p>
            <div class="text-start items-center mt-4">
                <a href="{{ route('admin.kartu-keluarga') }}" class="btn bg-gray-300 text-gray-800"><i class="ri-arrow-left-line text-sm me-1.5"></i>Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection