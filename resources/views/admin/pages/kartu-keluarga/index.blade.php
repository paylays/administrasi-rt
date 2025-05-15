@extends('admin.layouts.vertical', ['title' => 'Kartu Keluarga', 'subTitle' => 'Manajemen Data' , 'pageTitle' => 'Kartu Keluarga'])

@section("content")
<div class="card">
    <div class="p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="card-title mb-4">Table data kartu keluarga RT.36</h3>
            <div class="flex gap-2">
                <button type="button" class="btn bg-primary text-white">Tambah data</button>
                <button type="button" class="btn bg-success text-white"><i class="ri-file-excel-line me-1.5"></i>Import</button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">No</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">No.KK</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Nama Kepala Keluarga</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Alamat</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">RT / RW</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tanggal Dibuat</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tanggal Diubah</th>
                                <th scope="col" class="px-4 py-4 text-center text-sm font-medium text-gray-500">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse($kk as $index => $item)
                            <tr>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $index + 1 }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->no_kk ?? '-' }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->nama_kepala_keluarga }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->alamat }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->rt_rw }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->created_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->updated_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200 text-center">
                                    <a href="#"><i class="ri-file-info-fill text-xl text-info"></i></a>
                                    <a href="#"><i class="ri-edit-box-fill text-xl text-warning"></i></a>
                                    <a href="#"><i class="ri-delete-bin-2-fill text-xl text-danger"></i></a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-4 py-4 text-center text-sm text-gray-500 dark:text-gray-300">
                                        Tidak ada data kartu keluarga.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                        Menampilkan total <span class="font-semibold">{{ $kk->count() }}</span> data kartu keluarga.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end card -->
@endsection