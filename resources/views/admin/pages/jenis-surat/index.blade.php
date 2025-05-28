@extends('admin.layouts.vertical', ['title' => 'Jenis Surat', 'subTitle' => 'Manajemen Surat' , 'pageTitle' => 'Jenis Surat'])

@section("content")

@if(session('success'))
    <div id="dismiss-example-success" class="border bg-success text-white border-success rounded-md py-3 px-5 flex justify-between items-center mb-3">
        <p>
            <span class="font-bold">Success!</span> - 
            {{ session('success') }}
        </p>
        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-success" type="button">
            <i class="ri-close-line text-xl"></i>   
        </button>
    </div>
@endif
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
    <div class="p-6">
        <div class="justify-between items-center mb-4">
            <h3 class="card-title mb-4">Table jenis surat administrasi</h3>
        </div>

        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th class="px-4 py-4 text-start text-sm font-medium text-gray-500">No</th>
                                <th class="px-4 py-4 text-start text-sm font-medium text-gray-500">Nama Surat</th>
                                <th class="px-4 py-4 text-start text-sm font-medium text-gray-500">Deskripsi</th>
                                <th class="px-4 py-4 text-start text-sm font-medium text-gray-500">Path Template</th>
                                <th class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tanggal Dibuat</th>
                                <th class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tanggal Diubah</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse($jenisSurat as $index => $item)
                            <tr>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $index + 1 }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->nama_surat }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->deskripsi_surat }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-primary underline">
                                    <a href="{{ route('admin.jenis-surat.preview', ['id' => $item->id]) }}" target="_blank">Lihat Surat</a>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->created_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->updated_at->format('d-m-Y') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="px-4 py-4 text-center text-sm text-gray-500 dark:text-gray-300">
                                    Tidak ada data jenis surat.
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
            Menampilkan total <span class="font-semibold">{{ $jenisSurat->count() }}</span> data kartu keluarga.
        </p>
    </div>
</div>

@endsection
